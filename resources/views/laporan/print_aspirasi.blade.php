<title>Print Laporan Aspirasi | Layanan Pengaduan Masyarakat</title>
<style>
    .hilang {
        list-style-type: none;
    }

    .table {
        width: 100%;
        border-bottom: 3px solid #000;
    }

    .p {
        margin: 0px !important;
        text-align: center;
    }

    .p2 {
        margin: 10px 0px 0px !important;
        text-align: right;
    }

    .first {
        font-size: 22px;
        font-weight: bold;
    }

    .second {
        font-size: 25px;
        font-weight: bold;
    }
</style>
<table class="table">
    <tr>
        <td width="80px"><img src="{{ public_path('logo.png')}}" width="80px" alt="" style="margin-right:10px; margin-bottom:5px;"></td>
        <td>
            <p class="p first">PEMERINTAH KABUPATEN SAMBAS</p>
            <p class="p second">DINAS PERHUBUNGAN</p>
            <p class="p">Jalan Pembangunan, Telp/Fax. (0562) 391707, email: dphbkfo@gmail.com</p>
            <p class="p">Sambas Kalimantan Barat</p>
            <p class="p2">Kode Pos. 79462</p>
        </td>
    </tr>
</table>
<h1>Layanan Pengaduan Masyarakat</h1>

<h4>Laporan Pengaduan <span style="margin-left: 300px;">Tanggal : {{$dari}} - {{$ke}} <br>
        <span>Kategori : Aspirasi </span> <span style="margin-left: 305px;">Total Pengaduan : {{$pengaduan->count()}} </span> </span> </h4>

<hr>
<hr>

@foreach($pengaduan as $value)
<h5>A. IDENTITAS</h5>
<table>
    <tr align="left">
        <th>NIK</th>
        <th>:</th>
        <th>{{$value->nik}}</th>
    </tr>
    <tr align="left">
        <th>Nama Lengkap</th>
        <th>:</th>
        <th>{{$value->nama}}</th>
    </tr>
    <tr align="left">
        <th>No. Telp</th>
        <th>:</th>
        <th>{{$value->telp}}</th>
    </tr>
</table>


<h5>B. PENGADUAN</h5>
<table>
    <tr align="left">
        <th>Kode Pengaduan</th>
        <th>:</th>
        <th>{{$value->kode_pengaduan}}</th>
    </tr>

    <tr align="left">
        <th>Kategori</th>
        <th>:</th>
        <th>{{$value->kategori}}</th>
    </tr>

    <tr align="left">
        <th>Status</th>
        <th>:</th>
        <th>
            @if($value->status=='0')
            Belum di proses
            @elseif($value->status=='proses')
            Sedang di proses
            @elseif($value->status=='diterima')
            Diterima
            @elseif($value->status=='ditolak')
            Ditolak
            @endif
        </th>
    </tr>

    <tr align="left">
        <th>Isi Pengaduan</th>
        <th>:</th>
        <th>{{$value->isi_laporan}}</th>
    </tr>

    <tr align="left">
        <th>Foto Pengaduan</th>
        <th>:</th>
        <th><img src="{{ public_path('database/foto_pengaduan/'). $value->foto_pengaduan}}" width="200" alt="BTS"></th>
    </tr>

</table>

<hr>
<hr>

@endforeach
