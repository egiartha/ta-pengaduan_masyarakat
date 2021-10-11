@extends('layouts.layout')
@section('content')
<title>Lapor | Layanan Pengaduan Masyarat</title>

<body>
    <style>
        #idfoto_pengaduan {
            background-image: url('');
            background-size: cover;
            background-position: center;
            height: 250px;
            width: 250px;
            border: 1px solid #bbb;
        }

        .jumbotron {
            position: relative;
        }
    </style>


    <!-- Jumbotron -->
    <!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <marquee behavior="scroll" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
      <h1 class="display-4">Visi Misi  </h1>
    </marquee>

    <a href="javascript::void(0)" class="btn btn-primary lapor">Sampaikan pengaduan melalui form dibawah</a>
  </div>
</div> -->
    <!-- akhir Jumbotron -->

    <!-- ======= Mobile Menu ======= -->
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <br><br>
    <main id="main">

        <section class="section  mt-5 pt-5">
            <div class="container">
                <div class="row mb-5 align-items-end">
                    <div class="col-md-6" data-aos="fade-up">

                        <h2>Visi Misi dan Sasaran</h2>
                    </div>

                </div>

                <div class="row">


                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                        <p>
                            Implementasi dari Peraturan Daerah Kabupaten Sambas Nomor 5 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Sambas (Lembaran Daerah Kabupaten Sambas Tahun 2016 Nomor 5 Peraturan Daerah Kabupaten Sambas, Provinsi Kalimantan Barat 5/279/2016, Tambahan Lembaran Daerah Kabupaten Sambas Nomor 4) dan Peraturan Bupati Sambas Nomor 51 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Tugas Pokok, Fungsi, Uraian dan Uraian Tugas serta Tata Kerja Dinas Perhubungan Kabupaten Sambas. Visi <b><i>“Terwujudnya penyelenggaraan lalu lintas dan angkutan jalan yang handal, sebagai penunjang pembangunan daerah.”</i></b>
                        </p>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                        <p><img src="{{url('assets/fitur/assets/img/foto rapat mei.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                        <p><img src="{{url('assets/fitur/assets/img/forum LLAJ.jpeg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                        <p>
                            Untuk mewujudkan visi tersebut Dinas Perhubungan Kabupaten Sambas mempunyai misi, sebagai berikut :
                        </p>
                        <ol>
                            <li>Meningkatkan kapasitas dan profesionalisme sumber daya manusia penyelenggara lalu lintas dan angkutan jalan;</li>
                            <li>Meningkatkan kualitas dan kuantitas sarana dan prasarana lalu lintas dan angkutan jalan;</li>
                            <li>Meningkatkan kualitas penyelenggara lalu lintas dan angkutan jalan.</li>
                        </ol>

                    </div>
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                        <p>Sejalan dengan visi dan misi diatas, maka yang menjadi tujuan yang ingin dicapai Dinas Perhubungan Kabupaten Sambas antara lain :</p>
                        <ol>
                            <li>Meningkatkan mutu sumber daya manusia penyelenggaraan urusan pemerintahan di bidang lalu lintas dan angkutan jalan dan meningkatkan sarana dan prasarana penunjang aparatur maupun fasilitas pendukung administrasi umum;</li>
                            <li>Meningkatkan mutu sarana dan prasarana lalu lintas dan angkutan jalan yang memadai dan optimal;</li>
                            <li>Meningkatkan sinergitas penyelenggaraan lalu lintas dan angkutan jalan.</li>
                        </ol>
                        <p>Sasaran strategis yang ditetapkan dalam rangka mencapai visi dan misi yang dicanangkan adalah :</p>
                        <ol>
                            <li>Peningkatan perangkat organisasi Dinas Perhubungan Kabupaten Sambas;</li>
                            <li>Peningkatan sarana, prasarana lalu lintas dan angkutan jalan serta perlengkapan jalan;</li>
                            <li>Peningkatan kualitas penyelenggaraan lalu lintas dan angkutan jalan.</li>
                        </ol>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                        <p> <img src="{{url('assets/fitur/assets/img/laju.jpeg')}}" alt="Image" class="img-fluid">
                    </div>
                    </h2>
                </div>

            </div>
            </div>
        </section>
</body>

</html>
@endsection

@push('scripts')
<script>
    document.getElementById('pengaduan').addEventListener('change', readURL, true);

    function readURL() {
        var file = document.getElementById("pengaduan").files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('idpengaduan').style.backgroundImage = "url(" + reader.result + ")";
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {}
    }
</script>
</script>
@endpush
