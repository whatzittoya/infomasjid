@extends('adminlte::page')

@section('title', 'Masjid')

@section('content_header')
    <h1>Halaman Masjid</h1>
@stop

@section('content')
@include('include.messages')
{{ Breadcrumbs::render('masjid') }}

<div class="float-right pb-2">
<a href="{{route('masjid.create')}}" class="btn btn-primary ">Tambah Masjid</a>
</div>
<div class="container-fluid">
  <table class="table table-striped">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama Masjid</th>
            <th>Alamat</th>
            <th>Takmir</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($masjid as $index => $row)
          <tr>
              <td>{{$index+1}}</td>
              <td>{{$row->nama}}</td>
              <td>{{$row->alamat}}</td>
              <td>
            @if(count($row->users) > 0)
                {{$row->users->pluck('name')->implode(', ')}} 
            @endif
              </td>
            <td>
                <a class="btn btn-default" href="{{ route('masjid.edit', $row->masjid_id)}}">Ubah</a>
                <button class="btn btn-danger" data-href="{{ route('masjid.destroy', $row->masjid_id)}}" data-name="{{$row->nama}}" data-toggle="modal" data-target="#confirm-delete">Hapus</button>

                {{-- <form action="{{ route('masjid.destroy', $row->masjid_id)}}" method="post">
                @method('DELETE')
                @csrf
                <input class="btn btn-danger" type="submit" value="Delete" />
                </form> --}}
            </td>
          </tr>
           @endforeach
      </tbody>
  </table>
</div>
  @include('include.modal_delete', ['name' => 'Masjid'])
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

