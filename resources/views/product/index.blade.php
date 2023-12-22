@extends('layouts.app')

@section('content')

<h1 class="text-centre mt-2" style="text-align: center">All Product Detail</h1><hr>

<div class="container">
    <div class="juctify-content-center " >
        {{-- <a href="{{ route('products.search')) }}" class="btn btn-primary ">Search Product</a> --}}
        <a href="{{ url('/search') }}" class="btn btn-primary">Search Product</a>
        <a href="{{ url('/products/create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <div class="row">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card m-2 p-2" style="width: 100%; height: 100vh;">
                    {{-- <img src="{{ $product->picture }}" class="card-img-top" alt="not found"> --}}
                    <img src="/images/{{ $product->picture }}" class="card-img-top" alt="not found">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <h5 class="card-title">Price : ${{ $product->price }}</h5>
                        <hr>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('products.show',$product->id) }}" class="btn btn-info p-2 m-2" >View Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
