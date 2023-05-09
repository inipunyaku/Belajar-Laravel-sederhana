@extends('layout.v_template')
@section('title','Add Guru')
@section('content')

    <form action="/guru/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>NIP</label>
                        <input name="nip_guru" class="form-control @error('nip_guru') is-invalid @enderror" value="{{ old('nama_guru') }}">
                        <div class="text-danger">
                            @error('nip_guru')
                             {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input name="nama_guru" class="form-control @error('nama_guru') is-invalid @enderror" value="{{ old('nama_guru') }}">
                        <div class="text-danger">
                            @error('nama_guru')
                             {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mapel</label>
                        <input name="mapel_guru" class="form-control @error('mapel_guru') is-invalid @enderror" value="{{ old('mapel_guru') }}">
                        <div class="text-danger">
                            @error('mapel_guru')
                             {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Foto Guru</label>
                        <input type="file" name="foto_guru" class="form-control @error('foto_guru') is-invalid @enderror" value="{{ old('foto_guru') }}">
                        <div class="text-danger">
                            @error('foto_guru')
                             {{ $message }}
                            @enderror
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>

                </div>
            </div>

        </div>
    </form>

@endsection