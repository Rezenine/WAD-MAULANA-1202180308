@extends('navbar')

@section('content')

<center> <h3>Update Product</h3> </center>
<form method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group mt-4">
    <label>Product Name</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
        <div class="input-group-text">$ USD</div>
    </div>
    <input type="text" class="form-control" name="price" value="{{$product->price}}">
    </div>
</div>

<div class="form-group">
    <label>Description</label>
    <textarea class="form-control" rows="4" name="description">{{$product->description}}</textarea>
</div>

<div class="form-group mt-4">
    <label>Stock</label>
    <input type="number" class="form-control col-5" name="stock" value="{{$product->stock}}"> 
</div>

<div class="form-group">
    <label>Image file input</label>
    <input type="file" class="form-control-file" name="img_path">
</div>

<button type="submit" name="submit" class="btn btn-dark">Submit</button>
</form>
@endsection