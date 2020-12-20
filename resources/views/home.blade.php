@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Selamat Datang!</p>
    <div class="row mb-3">
    <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        @if (Auth::user()->isAdmin())
                          <a href="{{ route('masjid.index')}}"> 
                        @else
                        <a href="{{ route('takmir_masjid')}}"> 
                        @endif
                      
                          <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-mosque fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase pt-2">Masjid</h6>
                        </div>
                      </a>
                    </div>
                </div>
                 <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-info text-white h-100">
                        @if (Auth::user()->isAdmin())
                         <a href="{{ route('beritaall.index')}}">

                        @else
                        <a href="{{ route('berita.index')}}"> 
                        @endif
                          <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase pt-2">Berita</h6>
                        </div>
                      </a>
                    </div>
                </div>
                <p>Aplikasi InfoMasjid dikembangkan dan dinaungi oleh:</p>

        <p><strong>YAYASAN INFOMASJID SYIAR ISLAM (YAYASAN INFOMASJID)</strong></p>

        <p>Alamat : Perumahan Pandau Permai, Jl Mahang Raya Blok C 25 No.6, RT.002, RW.006, Desa Pandau Jaya Kecamatan Siak Hulu, Kabupaten Kampar, Provinsi Riau</p>

        <p>email: cs.infomasjid@gmail.com</p>

        <p>Website: <a href="http://infomasjid.my.id/">infomasjid.my.id</a></p>

        <p>Jika ada masukan, saran, atau kritik bisa menghubungi kami via Whatsapp dibawah</p>
        <a href="https://wa.me/685264612989?text=Assalamu%27alaikum%2C%20perkenalkan%20nama%20saya....."><img src="/img/Chat-via-whatsapp.png"></img></a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop