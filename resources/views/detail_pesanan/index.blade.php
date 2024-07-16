@extends('layouts.backend')
@section('content')

<br>
<div class="container">
    <div class="col-md-12 col-xl-3">
       <div class="card">
            <div class="card-body">
                <div class="row">
                  <div class="col-8">
                  <p class="text-muted mb-3 fw-semibold">Welcome back</p>
                  <h4 class="m-0 mb-3">{{ Auth::user()->name }}</h4>
            </div>
        </div>
    </div>
       </div>
    </div>
</div>

<div class="col-md-7 col-xl-3">
                                <div class="card">
                                    <div class="card">
                                        <div class="d-flex align-items-center justify-content-between">
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="justify-content-center">
                                            <div id="customer_rate" class="apex-charts"></div>
                                            <h5 class="card-title mb-0">Penjualan</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card ">
                <div class="card-header"> Data Detail Pesanan
                    {{-- <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped">
                            <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Nama</th>
                                <th class="col-md-2">Produk</th>
                                <th class="col-md-2">Tanggal Pemesanan</th>
                                <th class="col-md-2">Jumlah</th>
                                <th class="col-md-2">Total</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                            @foreach ($detailPesanan as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->produk->nama_produk}}</td>
                                <td>{{$item->tgl_pesanan}}</td>
                                <td>{{$item->jumlah}}</td>
                                <td>{{$item->total}}</td>
                                <td>
                                 <form action="{{route('detail_pesanan.destroy',$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('detail_pesanan.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="{{route('detail_pesanan.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
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
