<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar.daftar');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => ['required', 'string', 'unique:users', 'min:16', 'max:16'],
            'nama' => ['required', 'string'],
            'username' => ['required', 'max:255', 'unique:users'],
            'telp' => ['required', 'max:255'],
            'alamat' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'foto_ktp' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $file = $request->file('foto_ktp');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'database/foto_ktp';
        $file->move($tujuan_upload, $nama_file);

        // save into table
        $user = User::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'level' => 'masyarakat',
            'password' => bcrypt($request->password),
            'foto_ktp' => $nama_file
        ]);
        return redirect('/login')->with('alert', 'Pendaftaraan berhasil, Silahkan login.');
    }
}
