@extends('layouts.app')

@section('content')

<h1 class="text-centre mt-4" style="text-align: center" >Product Detail</h1><hr>

<div class="container">
    <div class="row">
        <div class="col-md-9" style="display: flex">
            <img src="/images/{{ $product->picture }}" height="450px" alt="">
            <div class="container m-2 p-2">
                <h2>{{ $product->title }}</h2>
                <h3>Price : ${{ $product->price }}</h3><hr>
                <p>{{ $product->description }}</p>
                <a href="{{ url('/products') }}"><button class="btn btn-primary">Go Home</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
