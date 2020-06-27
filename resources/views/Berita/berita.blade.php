@extends('adminlte::page')

@section('title', 'Masjid')

@section('content_header')
    <h1>Halaman Berita</h1>
@stop

@section('content')
@include('include.messages')
{{ Breadcrumbs::render('takmir_berita') }}

<div class="float-right pb-2">
<a href="{{route('berita.create')}}" class="btn btn-primary ">Tambah Berita</a>
</div>
<div class="container-fluid">
  <table class="table table-striped">
      <thead>
        <tr>
            <th>No</th>
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
              <td>{{$row->tgl_berita}}</td>
              <td>{{$row->kategori_berita}}</td>
              <td>{{$row->judul}}</td>
            
            <td>
                 <a class="btn btn-primary" href="{{ route('berita.show', $row->berita_id)}}">Lihat</a>
                <a class="btn btn-default" href="{{ route('berita.edit', $row->berita_id)}}">Ubah</a>
                <button class="btn btn-danger" data-href="{{ route('berita.destroy', $row->berita_id)}}" data-name="{{$row->judul}}" data-toggle="modal" data-target="#confirm-delete">Hapus</button>

            
            </td>
          </tr>
           @endforeach
      </tbody>
  </table>
</div>
  @include('include.modal_delete', ['name' => 'Berita'])
@stop



