@extends('layout.v_template')
@section('title','guru')
@section('content')
<a href="/guru/add" class="btn btn-sm btn-success">Add</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <td>No.</td>
            <td>NIP</td>
            <td>Nama Guru</td>
            <td>Mata Pelajaran</td>
            <td>Foto guru</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @php
            $no=1
        @endphp
        @foreach ($guru as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$data->nip_guru  }}</td>
                <td>{{ $data->nama_guru }}</td>
                <td>{{ $data->mapel_guru }}</td>
                <td><img src="{{ url('foto_guru/'.$data->foto_guru) }}" width="80px"></td>
                <td>
                    <a href="/guru/detail/{{ $data->id_guru  }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/guru/edit/{{ $data->id_guru }}" class="btn btn-sm btn-warning">edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_guru}}">
                  Delete
                </button>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@foreach ($guru as $data)
    
<div class="modal fade" id="delete{{$data->id_guru  }}">
  <div class="modal-dialog modal-sm">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">{{$data->nama_guru  }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah yakin Menghapus Data Ini ?&hellip;</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
        <a href="/guru/delete/{{$data->id_guru}}" class="btn btn-outline-light">Yes</a>
      </div>
    </div>
          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->
@endforeach
@endsection