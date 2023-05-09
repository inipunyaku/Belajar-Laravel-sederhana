@extends('layout.v_template')
@section('title','edit guru')
@section('content')
   
<form action="/guru/update/{{ $guru->id_guru }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>NIP</label>
                    <input name="nip_guru" class="form-control @error('nip_guru') is-invalid @enderror" value="{{ $guru->nip_guru }}" readonly>
                    <div class="text-danger">
                        @error('nip_guru')
                         {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Guru</label>
                    <input name="nama_guru" class="form-control @error('nama_guru') is-invalid @enderror" value="{{ $guru->nama_guru }}">
                    <div class="text-danger">
                        @error('nama_guru')
                         {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Mapel</label>
                    <input name="mapel_guru" class="form-control @error('mapel_guru') is-invalid @enderror" value="{{ $guru->mapel_guru }}">
                    <div class="text-danger">
                        @error('mapel_guru')
                         {{ $message }}
                        @enderror
                    </div>
                </div>

               
                <div class="form-group">
                    <img src="{{ url('foto_guru/'.$guru->foto_guru) }}" alt="{{ $guru->nama_guru }}" width="90px">
                    <label>Ganti Foto Guru</label>
                    <input type="file" name="foto_guru" class="form-control @error('foto_guru') is-invalid @enderror">
                    <div class="text-danger">
                        @error('foto_guru')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">edit</button>
                </div>

            </div>
        </div>

    </div>
</form>

@endsection