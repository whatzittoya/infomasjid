@extends('adminlte::page')

@section('title', 'Masjid Musharaf')

    @if($status == 'new')
        @php( $header='Tambah Musharaf')
        @php( $button='Simpan')
    @elseif($status=='edit')
        @php(  $header='Ubah Musharaf')
        @php(  $button='Ubah')
    @endif 

@section('content_header')

        <h1>{{$header}}</h1>
   
@stop

@section('content')

{{ Breadcrumbs::render('add_masjid_takmir',$masjid_id,isset($masjid_takmir)?$masjid_takmir:null) }} 
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
             @if(isset($masjid_takmir))
                  {{ Form::model($masjid_takmir, ['route' => ['takmir.update', ["mid"=>$masjid_id,"tid"=>$masjid_takmir->id]], 'method' => 'patch','enctype' => 'multipart/form-data' ,'files' => true]) }}
              @else
                  {{ Form::open(['route' => ['takmir.store',["mid"=>$masjid_id]],'enctype' => 'multipart/form-data' ,'files' => true]) }}
              @endif
            
           

                <div class="card-body"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Musharaf</label>
                   {{ Form::text('name', Input::old('name'),['class'=>'form-control','placeholder'=>'Nama Takmir','name'=>'name']) }}
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                   {{ Form::email('email', Input::old('email'),['class'=>'form-control','placeholder'=>'Email','name'=>'email']) }}
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">No Identitas</label>
                   {{ Form::text('no_identitas', Input::old('no_identitas'),['class'=>'form-control','placeholder'=>'No Identitas','name'=>'no_identitas']) }}
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                   {{ Form::date('tanggal_lahir', Input::old('tanggal_lahir'),['class'=>'form-control','placeholder'=>'Tanggal Lahir','name'=>'tanggal_lahir']) }}
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Lampiran</label>
                       <div class="col-md-12 pb-2">
                        @if (isset($masjid_takmir->attachment))
                        <a href="{{asset($masjid_takmir->attachment)}}" target="_blank">Download Lampiran</a>
                        @endif
                        </div>
                     <div class="custom-file">
                     
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="attachment" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|text/plain,.pdf,.doc,.docx">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                  </div>
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 
                  {{ Form::submit($button, ['name' => 'submit','class'=>'btn btn-primary']) }}
                
                </div>
               {{ Form::close() }}
 
 
            
            </div>
        </div>
    </div>
    @stop

