@extends('adminlte::page')

@section('title', 'Edit Masjid')

@section('content_header')
    <h1>Data Berita</h1>
@stop

@section('content')
@if(isset($berita))
@include('include.messages')
{{ Breadcrumbs::render('takmir_view_berita',$berita) }}
    <div class=" container-fluid">
        <div class="col-md-12">
            <div class="card card-default">
              
                 
                <div class="card-body"> 
                 
                  
                    <h3>{{$berita->judul}}</h3>
              
                   <div class="form-group">
                    <label for="nama">Tanggal</label>
                    <p>{{$berita->tgl_berita}}</p>
              
                  </div>
                   <div class="form-group">
                    <label for="nama">Kategori</label>
                    <p>{{$berita->kategori_berita}}</p>
              
                  </div>
                   <div class="form-group">
                  
                    <p>{!! $berita->deskripsi !!}</p>
              
                  </div>
                <div class="col-md-12 pb-2">
                        @if (isset($berita->url_file))
                        <a href="{{asset($berita->url_file)}}" target="_blank">Download Dokumen</a>
                        @endif
                        </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
              
                </div>
            
            </div>
        </div>
    </div>
  
      @endif
@stop
