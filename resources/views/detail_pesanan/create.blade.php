@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('detail_pesanan.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('detail_pesanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="mb-3">
                           <label class="form-label">Id User</label>
                           <select name="id_user" class="form-select">
                            @forelse ($user as $data)
                                <option value="{{$data->id}}" @error('id_user') is-invalid @enderror>
                                    {{ $data->id_user }}</option>
                            @empty
                                    <option value="" disabled>Data belum Tersedia</option>
                            @endforelse
                           </select>

                           @error('id_user')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                        </div>
                         <div class="mb-3">
                           <label class="form-label">Id Produk</label>
                           <select name="id_produk" class="form-select">
                            @forelse ($produk as $data)
                                <option value="{{$data->id}}" @error('nama_produk') is-invalid @enderror>
                                    {{ $data->nama_produk }}</option>
                            @empty
                                    <option value="" disabled>Data belum Tersedia</option>
                            @endforelse
                           </select>

                           @error('nama_produk')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                                value="{{ old('tgl_lahir') }}" placeholder="Tanggal Lahir" required>
                            @error('tgl_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah"
                                value="{{ old('jumlah') }}" placeholder="Jumlah" required>
                            @error('jumlah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total</label>
                            <input type="text" class="form-control @error('total') is-invalid @enderror" name="total"
                                value="{{ old('total') }}" placeholder="Total" required>
                            @error('total')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
