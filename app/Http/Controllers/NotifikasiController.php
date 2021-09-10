<?php

namespace App\Http\Controllers;

use DB;


class NotifikasiController extends Controller
{
    public function index()
    {
        $notifikasi = DB::table('notifikasi')->where('is_read', false)->orderBy('created_at', 'desc')->limit(20)->get();

        echo \json_encode($notifikasi);
    }
}
