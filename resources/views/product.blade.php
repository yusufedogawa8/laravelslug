@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <h1>{{ $product->product_title }}</h1>
        <p>{{ $product->product_image }}</p>
    </div>
</div>
@endsection