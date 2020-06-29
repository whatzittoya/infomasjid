@extends('adminlte::page')

@section('title', 'Masjid')

@section('content_header')
    <h1>Halaman Berita</h1>
@stop

@section('content')
@include('include.messages')
{{ Breadcrumbs::render($breadcrumb) }}
   @if (Auth::user()->isTakmir())
<div class="float-right pb-2">

<a href="{{route($baseroute.'.create')}}" class="btn btn-primary ">Tambah Berita</a>
</div>
@endif
<div class="container-fluid">
  <table class="table table-striped">
      <thead>
        <tr>
            <th>No</th>
            <th>Masjid</th>
            <th>Tanggal Berita</th>
            <th>Kategori Berita</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($berita as $index => $row)
          <tr>
              <td>{{$index+1}}</td>
              <td>{{$row->masjids->nama}}</td>
              <td>{{$row->tgl_berita}}</td>
              <td>{{$row->kategori_berita}}</td>
              <td>{{$row->judul}}</td>
            
            <td>
                 <a class="btn btn-primary" href="{{ route($baseroute.'.show', $row->berita_id)}}">Lihat</a>
                 @if (Auth::user()->isTakmir())
                        <a class="btn btn-default" href="{{ route($baseroute.'.edit', $row->berita_id)}}">Ubah</a>
                 @endif
             
                <button class="btn btn-danger" data-href="{{ route($baseroute.'.destroy', $row->berita_id)}}" data-name="{{$row->judul}}" data-toggle="modal" data-target="#confirm-delete">Hapus</button>

            
            </td>
          </tr>
           @endforeach
      </tbody>
  </table>
</div>
  @include('include.modal_delete', ['name' => 'Berita'])
@stop



