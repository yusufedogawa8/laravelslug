@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="p-0 m-0"><i class="fas fa-edit"></i> Edit Produk <a href="{{ url('products') }}" class="btn btn-secondary float-right"><i class="fas fa-chevron-left"></i></a></h3>
            </div>
            <div class="card-body">
            @foreach ($data as $prd)
                <form action="" method="POST">
                    @csrf
                    <div class="mt-1">
                        <label for="">Nama Produk :</label>
                        <input type="text" class="form-control" value="{{ $prd->product_title }}" >
                    </div>
                    <div class="mt-2">
                        <label for="">Harga Produk :</label>
                        <input type="text" class="form-control" value="{{ $prd->product_price }}" >
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="">Gambar Produk :</label><br>
                        <img src="{{ $prd->product_image }}" alt="{{ $prd->product_image }}">
                    </div>
                    <input type="submit" class="btn btn-success float-right" value="Ubah Data">
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
@endsection