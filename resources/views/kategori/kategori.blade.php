@extends('adminlte::page')

@section('title', 'Kategori Kategori Berita')

@section('content_header')
    <h1>Halaman Kategori Kategori Berita</h1>
@stop

@section('content')
@include('include.messages')
{{ Breadcrumbs::render($breadcrumb) }}
   
<div class="float-right pb-2">

<a href="{{route('kategori.create')}}" class="btn btn-primary ">Tambah Kategori Berita</a>
</div>

<div class="container-fluid">
  <table class="table table-striped">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($kategori as $index => $row)
          <tr>
              <td>{{$index+1}}</td>
              <td>{{$row->nama}}</td>
                          
            <td>
                
                <a class="btn btn-default" href="{{ route('kategori.edit', $row->kategori_id)}}">Ubah</a>
                
             
                <button class="btn btn-danger" data-href="{{ route('kategori.destroy', $row->kategori_id)}}" data-name="{{$row->judul}}" data-toggle="modal" data-target="#confirm-delete">Hapus</button>

            
            </td>
          </tr>
           @endforeach
      </tbody>
  </table>
</div>
  @include('include.modal_delete', ['name' => 'Kategori Berita'])
@stop



