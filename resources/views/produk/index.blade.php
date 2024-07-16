@extends('layouts.backend')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card ">
                <div class="card-header"> Data Produk
                    <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Nama Produk</th>
                                <th class="col-md-2">Deskripsi</th>
                                <th class="col-md-2">Harga</th>
                                <th class="col-md-2">Stok</th>
                                <th class="col-md-2">Image</th>
                                <th class="col-md-2">Kategori</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                            @foreach ($produk as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_produk}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->stok}}</td>
                                <td align="center"><img src="{{asset('/images/produk/' . $item->gambar)}}" style="width: 100px;" alt=""></td>
                                <td>{{$item->kategori->nama_kategori}}</td>
                                <td>
                                 <form action="{{route('produk.destroy',$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('produk.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="{{route('produk.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
                                    <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
