@extends('adminlte::page')

@section('title', 'Edit Masjid')

@section('content_header')
    <h1>Data Masjid</h1>
@stop

@section('content')
@if(isset($masjid))
@include('include.messages')
{{ Breadcrumbs::render('takmir_masjid') }}
    <div class=" container-fluid">
        <div class="col-md-12">
            <div class="card card-default">
              
                 
                <div class="card-body"> 
                  <div class="form-group">
                    <label for="nama">Nama Masjid</label>
                    <p>{{$masjid->nama}}</p>
              
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <p>{{$masjid->alamat}}</p>
                  </div>
                   <div class="form-group">
                    <label for="geotag">GeoTag</label>
                    <p>{{$masjid->geotag}}</p>
                  </div>
                  <div class="form-group">
                    <label for="norek">No Rekening</label>
                    <p>{{$masjid->norek}}</p>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <p>{{$masjid->deskripsi}}</p>
                  </div>
                  <div class="form-group">
                      
                    <label for="exampleInputEmail1">Foto</label>
                    <div class="col-md-12 pb-2">
                    @if (isset($masjid->foto))
                    <img src="{{asset($masjid->foto)}}" alt="foto_masjid" class="img img-fluid" style="height:300px">
                    @endif
                    </div>
                 
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{route('takmir_edit_masjid')}}" class="btn btn-warning">Ubah</a>
               
                </div>
           
      
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama Takmir</th>
                        <th>Email</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                             @foreach ($masjid->users as $index => $row)
                               <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->pivot->active_status ? "Aktif" : "Non-aktif"}}</td>
                        </tr>
                               
                             @endforeach
                    </tbody>

                </table>
 
            
            </div>
        </div>
    </div>
  
      @endif
@stop
