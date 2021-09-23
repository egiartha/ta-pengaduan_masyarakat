@extends('layouts.layout')
@section('content')
<title>Home | Layanan Pengaduan Masyarat</title>
<!-- Jumbotron -->
<!-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
        @if($aplikasi=='')
        <h1 class="display-4">Layanan Pengaduan Masyarakat</h1>
        <a href="/lapor" class="btn btn-primary lapor">Sampaikan Pengaduan Disini</a>
        @else
        <h1 class="display-4">{{$aplikasi->deskripsi_aplikasi}}</h1>
        <a href="/lapor" class="btn btn-primary lapor">Sampaikan Pengaduan Disini</a>
        @endif
    </div>
</div> -->
<!-- akhir Jumbotron -->

<!-- <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('ftemplate/img/intro-carousel/1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Selamat datang </h2>
                <h1>di Website MTs Negeri 3 Mempawah</h1>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('assets/img/logo21.jpg ')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">

                <h2>Unggul dalam Kualitas </h2>
                <h1>dengan Berlandaskan pada Iman dan Taqwa</h1>
              </div>
            </div>
          </div>

		  <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('ftemplate/img/intro-carousel/3.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">

                <h2>MTsN 3 Mempawah</h2>
                <h1>Madrasah Hebat Bermartabat</h1>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div> -->

@include('layouts.carousel')


<style>
    .a {
        color: #000;
        text-decoration: none !important;
    }

    .a:hover {
        color: #000;
        text-decoration: none !important;
    }

    .layanan {
        border-radius: 0;
        border: 0;
        cursor: pointer;
    }

    .layanan:hover {
        box-shadow: 0 0 35px rgb(0 0 0 / 10%);
        transition: all 0.5s ease-in-out 0s;
    }

    .img-card {
        width: 100px;
        margin: auto;
        padding-top: 50px;
    }

    .timeline-aduan {
        background-color: #007BFF;
        padding: 60px 0px;
        color: #fff;
    }

    .aduan-img {
        width: '100%';
        height: 150px;
        object-fit: cover;
    }

    .table-aduan {
        color: #000;
    }
</style>

<main>

    <section class="section mt-5">
        <div class="container">
            <div class="row" style="padding-bottom: 90px;">
                <div class="col-md-12">
                    <h3 class="text-center">Layanan Kami</h3>
                    <p class="text-center">Aduan Masyarakat dan Informasi Dinas Perhubungan Kabupaten Sambas</p>
                </div>
                <div class="col-md-5 offset-md-1">
                    <a class="a" href="{{url('/lapor')}}">
                        <div class="card layanan">
                            <img class="card-img-top img-card" src="{{url('assets/img/leader.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title text-center">Pengaduan Keluhan</h5>
                                <p class="text-center">Layanan Pengaduan Keluhan atau Kerusakan Kepada Dishub</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5">
                    <a class="a" href="{{url('/lapor')}}">
                        <div class="card layanan">
                            <img class="card-img-top img-card" src="{{url('assets/img/info.png')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title text-center">Aspirasi Masyarakat</h5>
                                <p class="text-center">Layanan Penyampaian Aspirasi Kepada Dishub</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="timeline-aduan">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Timeline Aduan Masuk</h3>
                        <p class="text-center text-white">Semua Aduan Terbaru Masyarakat Dapat di Lihat Disini</p>
                    </div>
                    @foreach($pengaduan as $value)
                    <div class="col-md-4 mb-4">
                        <div class="card layanan">
                            <img class="card-img-top aduan-img" src="{{ asset('database/foto_selesai').'/'. $value->foto_selesai}}" alt="Card image cap" />
                            <div class="card-body">
                                <table class="table-aduan">
                                    <tbody>
                                        <tr>
                                            <td style="min-width: 80px;">Nama</td>
                                            <td>:</td>
                                            <td>{{$value->nama}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:top;">Tanggal</td>
                                            <td style="vertical-align:top;">:</td>
                                            <td>{{$value->tgl_pengaduan}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:top;">Status</td>
                                            <td style="vertical-align:top;">:</td>
                                            <td>{{$value->status === '0'?"belum diproses":$value->status}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:top;">Alamat</td>
                                            <td style="vertical-align:top;">:</td>
                                            <td>{{$value->alamat}}, {{$value->desa}}, Kec. {{$value->kecamatan}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><a target="_blank" href="http://maps.google.com/maps?q={{$value->latitude}},{{$value->longitude}}">Lihat di Google Maps</a></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:top;">Laporan</td>
                                            <td style="vertical-align:top;">:</td>
                                            <td>{{$value->isi_laporan}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><button data-toggle="modal" data-id="{{$value->kode_pengaduan}}" data-target="#modal" class="btn btn-primary my-3 komentar">Tambahkan Komentar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container" style="padding: 80px 0px;">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Alamat Kantor Kami</h3>
                    <p class="text-center">Ingin mengunjungi kami? Silahkan klik rute pada peta</p>
                </div>
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7977.38063261243!2d109.32384800000001!3d1.362469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7beeec4c4d0551c4!2sKantor%20Dinas%20Perhubungan%20Kabupaten%20Sambas!5e0!3m2!1sid!2sid!4v1632377268939!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/komentar/store" method="POST">
                @csrf
                <input type="hidden" id="kode" name="id_pengaduan">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Komentar</label>
                        <textarea name="komentar" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.komentar').click(function() {
            let val = $(this).data('id');
            $('#kode').val(val);
        })
    })
</script>
@endpush
