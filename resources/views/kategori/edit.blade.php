@extends('layouts.backend')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Edit Data Kategori') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori"
                                value="{{ $kategori->nama_kategori }}" placeholder="Nama kategori" required>
                            @error('nama_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                                value="{{ $kategori->gambar }}"></input>
                            @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" class="form-control @error('ket') is-invalid @enderror"
                                name="ket" rows="3" placeholder="Keterangan"
                                required>{{ $kategori->ket }}</textarea>
                            @error('ket')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
