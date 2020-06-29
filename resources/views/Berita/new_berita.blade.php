@extends('adminlte::page')

@section('title', 'Tambah Berita')

@section('content_header')
    <h1>Tambah Berita</h1>
@stop

@section('content')
{{ Breadcrumbs::render('takmir_new_berita') }}
<ul>
@if ($errors->any())
     @foreach ($errors->all() as $error)
         <li><label class="text-danger">{{$error}}</label></li>
     @endforeach
 @endif
</ul>
    <div class=" container-fluid">
        <div class="col-md-12">
            <div class="card card-default">
             @if(isset($berita))
                  {{ Form::model($berita, ['route' => ['berita.update', $berita->berita_id], 'method' => 'patch','enctype' => 'multipart/form-data' ,'files' => true]) }}
              @else
                  {{ Form::open(['route' => 'berita.store','enctype' => 'multipart/form-data' ,'files' => true]) }}
              @endif
            
           

                <div class="card-body"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Berita</label>
                   {{ Form::text('judul', Input::old('judul_berita'),['class'=>'form-control','placeholder'=>'Judul Berita','name'=>'judul_berita']) }}
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                   {{ Form::select('kategori_berita',$kategori, Input::old('kategori_berita'),['class'=>'form-control','name'=>'kategori_berita']) }}
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                   {{ Form::textarea('deskripsi', Input::old('deskripsi_berita'),['class'=>'textarea','placeholder'=>'Nama Masjid','name'=>'deskripsi_berita']) }}
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Dokumen</label>
                       <div class="col-md-12 pb-2">
                        @if (isset($berita->url_file))
                        <a href="{{asset($berita->url_file)}}" target="_blank">Download Dokumen</a>
                        @endif
                        </div>
                     <div class="custom-file">
                     
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="dokumen_berita">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                  </div>
               
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 
                  {{ Form::submit('Simpan', ['name' => 'submit','class'=>'btn btn-primary']) }}
                
                </div>
               {{ Form::close() }}
 
 
            
            </div>
        </div>
    </div>

@stop

@section('css')
<link rel="stylesheet" href="{{ URL::asset('vendor/summernote/summernote-bs4.min.css') }}">
@stop

@section('js')
<script type="text/javascript" src="{{ URL::asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom-file-input.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote();
    bsCustomFileInput.init();
  })
</script>
@stop