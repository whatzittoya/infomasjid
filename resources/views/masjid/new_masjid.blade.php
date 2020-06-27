@extends('adminlte::page')

@section('title', 'Tambah Masjid')

@section('content_header')
    <h1>Tambah Masjid</h1>
@stop

@section('content')
{{ Breadcrumbs::render('new_masjid') }}
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
              @if(isset($masjid))
                  {{ Form::model($masjid, ['route' => ['masjid.update', $masjid->masjid_id], 'method' => 'patch']) }}
              @else
                  {{ Form::open(['route' => 'masjid.store']) }}
              @endif

                <div class="card-body"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Masjid</label>
                   {{ Form::text('nama_masjid', Input::old('nama_masjid'),['class'=>'form-control','placeholder'=>'Nama Masjid']) }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    {{ Form::text('alamat_masjid', Input::old('alamat_masjid'),['class'=>'form-control','placeholder'=>'Alamat']) }}
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">GeoTag</label>
                    {{ Form::text('geotag_masjid', Input::old('geotag_masjid'),['class'=>'form-control','placeholder'=>'Geotag']) }}
                  </div>
                  @if(!isset($masjid))
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Takmir</label>
                     {{ Form::text('nama_takmir', Input::old('nama_takmir'),['class'=>'form-control','placeholder'=>'Nama Takmir']) }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Takmir</label>
                    
                     {{ Form::email('email_takmir', Input::old('email_takmir'),['class'=>'form-control','placeholder'=>'Email Takmir']) }}
                  </div>
                 @endif
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  @if(isset($masjid))
                  {{ Form::submit('Ubah', ['name' => 'update','class'=>'btn btn-warning']) }}
                  @else
                  {{ Form::submit('Simpan', ['name' => 'submit','class'=>'btn btn-primary']) }}
                   @endif
                </div>
               {{ Form::close() }}
 
 
            
            </div>
        </div>
    </div>

@stop

