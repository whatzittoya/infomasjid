@extends('adminlte::page')

@section('title', 'Edit Masjid')

@section('content_header')
    <h1>Ubah Masjid</h1>
@stop

@section('content')
@if(isset($masjid))
@include('include.messages')
@if (Auth::user()->isAdmin())
{{ Breadcrumbs::render('edit_masjid',$masjid) }}
 @elseif(Auth::user()->isTakmir())
{{ Breadcrumbs::render('takmir_edit_masjid',$masjid) }}
@endif
@if ($errors->any())
     @foreach ($errors->all() as $error)
         <li><label class="text-danger">{{$error}}</label></li>
     @endforeach
 @endif
    <div class=" container-fluid">
        <div class="col-md-12">
            <div class="card card-default">
              @if (Auth::user()->isAdmin())
                {{ Form::model($masjid, ['route' => ['masjid.update', $masjid->masjid_id], 'method' => 'patch','enctype' => 'multipart/form-data' ,'files' => true ]) }}
              @elseif(Auth::user()->isTakmir())
                {{ Form::model($masjid, ['route' => ['takmir_update_masjid'], 'method' => 'patch','enctype' => 'multipart/form-data' ,'files' => true ]) }}
              @endif
                  
                <div class="card-body"> 
                  <div class="form-group">
                    <label for="nama">Nama Masjid</label>
                   {{ Form::text('nama', Input::old('nama'),['class'=>'form-control','placeholder'=>'Nama Masjid','name'=>'nama']) }}
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    {{ Form::text('alamat', Input::old('alamat'),['class'=>'form-control','placeholder'=>'Alamat','name'=>'alamat']) }}
                  </div>
                   <div class="form-group">
                    <label for="geotag">GeoTag</label>
                    {{ Form::text('geotag', Input::old('geotag'),['class'=>'form-control','placeholder'=>'Geotag','name'=>'geotag']) }}
                  </div>
                  <div class="form-group">
                    <label for="norek">No Rekening</label>
                    {{ Form::text('norek', Input::old('norek'),['class'=>'form-control','placeholder'=>'No Rekening','name'=>'norek']) }}
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    {{ Form::textarea('deskripsi', Input::old('deskripsi'),['class'=>'form-control','placeholder'=>'Deskripsi','name'=>'deskripsi']) }}
                  </div>
                  <div class="form-group">
                      
                    <label for="exampleInputEmail1">Foto</label>
                    <div class="col-md-12 pb-2">
                    @if (isset($masjid->foto))
                    <img src="{{asset($masjid->foto)}}" alt="foto_masjid" class="img img-fluid" style="height:300px">
                    @endif
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="foto" accept="image/*">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  {{ Form::submit('Ubah', ['name' => 'update','class'=>'btn btn-warning']) }}
               
                </div>
               {{ Form::close() }}
      
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama Takmir</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             @foreach ($masjid->users as $index => $row)
                                <td>{{$index+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->pivot->active_status ? "Aktif" : "Non-aktif"}}</td>
                                <td>
                                    @if (Auth::user()->isAdmin())
                                    <button class="btn btn-primary btn-sm" data-href="{{ route('takmir.reset', $row->id)}}" data-name="{{$row->name}}" data-action="Reset Password" data-toggle="modal" data-target="#custom-modal">Reset Password</button>
                                    <a href="" class="btn btn-warning btn-sm">Ubah</a>
                                    @if ($row->pivot->active_status)
                                        <button class="btn btn-danger btn-sm" data-href="{{ route('masjid.destroy', $row)}}" data-name="{{$row->name}}" data-action="Deaktivasi Akun" data-toggle="modal" data-target="#custom-modal">Deaktivasi</button>
                                        @else
                                        <button class="btn btn-success btn-sm" data-href="{{ route('masjid.destroy', $row)}}" data-name="{{$row->name}}" data-action="Aktivasi Akun" data-toggle="modal" data-target="#custom-modal">Aktivasi</button>
                                        
                                    @endif
                                   @endif 
                                </td>
                             @endforeach
                        </tr>
                    </tbody>

                </table>
 
            
            </div>
        </div>
    </div>
    @include('include.modal_custom', ['name' => 'Takmir'])
      @endif
@stop
@section('js')
<script type="text/javascript" src="{{ URL::asset('js/custom-file-input.min.js') }}"></script>
<script>
  
    $(document).ready(function () {
    bsCustomFileInput.init()
    }) 
</script>
@stop