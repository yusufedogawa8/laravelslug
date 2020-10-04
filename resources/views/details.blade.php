@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <table class="table table-hover">
        <caption><i>*Harga dapat berubah sewaktu-waktu</i></caption>
            <thead class="table">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Settings</th>
                </tr>
            </thead>
            <tbody>
            @forelse($products as $prd)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $prd->product_title }}</td>
                    <td>{{ $prd->product_price }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $prd->id) }}" method="POST">
                            <a href="{{'products/edit/' . $prd -> product_slug}}" class="btn btn-warning ml-2">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Belum ada produk terbaru
                </div>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection