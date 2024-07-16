@extends('layouts.backend')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card ">
                <div class="card-header"> Data Kategori
                    <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Nama kategori</th>
                                <th class="col-md-2">Gambar</th>
                                <th class="col-md-2">Keterangan</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                            @foreach ($kategori as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_kategori}}</td>
                                <td align="center"><img src="{{asset('/images/kategori/' . $item->gambar)}}" style="width: 100px;" alt=""></td>
                                <td>{{$item->ket}}</td>
                                <td>
                                 <form action="{{route('kategori.destroy',$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="{{route('kategori.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
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
