@extends('adminlte::page')

@section('title', 'Tambah Kategori Berita')

@section('content_header')
    <h1>Tambah Kategori Berita</h1>
@stop

@section('content')
{{ Breadcrumbs::render($breadcrumb) }}
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
             @if(isset($kategori))
                  {{ Form::model($kategori, ['route' => ['kategori.update', $kategori->kategori_id], 'method' => 'patch','enctype' => 'multipart/form-data' ,'files' => true]) }}
              @else
                  {{ Form::open(['route' => 'kategori.store','enctype' => 'multipart/form-data' ,'files' => true]) }}
              @endif
            
           

                <div class="card-body"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori Berita</label>
                   {{ Form::text('nama', Input::old('nama'),['class'=>'form-control','placeholder'=>'Judul Kategori Berita','name'=>'nama_kategori']) }}
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

