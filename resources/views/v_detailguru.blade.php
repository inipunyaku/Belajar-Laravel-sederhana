@extends('layout.v_template')
@section('title','detail_guru')
@section('content')

<table>
    <tr>
        <th width="100px" >NIP</th>
        <th width="30px">:</th>
        <th>{{$guru->nip_guru  }}</th>
        
    </tr>
    <tr>
        <th width="100px">NAMA</th>
        <th width="30px">:</th>
        <th>{{$guru->nama_guru  }}</th>
        
    </tr>
    <tr>
        <th width="100px">Mapel</th>
        <th width="30px">:</th>
        <th>{{$guru->mapel_guru }}</th>
        
    </tr>
    <tr>
        <th width="100px">FOTO</th>
        <th hwidth="30px">:</th>
        <th><img src="{{ url('foto_guru/'.$guru->foto_guru) }}" alt="{{$guru->nama_guru }}" width="150px"></th>
        
    </tr>

    <tr>
        <th>
            <a href="/guru" class="btn btn-sm btn-success">kembali</a>
        </th>
    </tr>

</table>
@endsection