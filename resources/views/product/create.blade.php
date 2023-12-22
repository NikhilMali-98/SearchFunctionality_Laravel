@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5" >
    <h2>Create Product</h2><hr><br>

    <form action=" {{ route('products.store') }}" enctype="multipart/form-data" method="POST">
     @csrf

     <div class="mt-3">
        <label for="picture" class="form-lable">Choose Picture</label>
        <input type="file" class="form-control" name="picture" id="picture">
     </div>

     <div class="mt-3">
        <label for="title" class="form-lable">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Entre Title">
     </div>

     <div class="mt-3">
        <label for="price" class="form-lable">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Entre Price">
     </div>

     <div class="mt-3">
        <label for="description" class="form-lable">Description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Entre Description">
     </div>
        <br>
     <button type="submit" class="btn-btn-primary">Create Product</button>
    </form>
</div>
@endsection
