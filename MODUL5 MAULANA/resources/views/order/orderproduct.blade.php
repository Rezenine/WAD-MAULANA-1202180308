@extends('navbar')

@section('content')
<center> <h3>Order</h3> </center>
<div class="card mb-3 mt-3" style="max-width: 1200px;">
<div class="row no-gutters">
    <div class="col-md-7">
    <img src="{{ asset('/storage/img/'. $product->img_path) }}" class="card-img" alt="Gambar Tidak Tersedia"  width="200" >
    </div>
    <div class="col-md-5">
    <div class="card-body">
        <h4 class="card-title">{{$product->name}}</h4>
        <p class="card-text">{{$product->description}}</p>
        <p class="card-text">Stock : {{$product->stock}}</p>
        <h4 class="card-title">${{$product->price}}</h4>
    </div>
    </div>
</div>
</div>

<div class="card mt-4" style="max-width: 1200px;">
<div class="card-body">
    <form method="POST" action="{{route('order.store')}}"  enctype="multipart/form-data">
    @csrf
        <h5 class="card-title text-center">Buyer Information</h5>
        <input type="text" class="form-control" name="product_id" value="{{$product->id}}">
        <div class="form-group mt-4">
            <label>Name</label>
            <input type="text" class="form-control" name="buyer_name">
        </div>
        <div class="form-group mt-4">
            <label>Contact</label>
            <input type="text" class="form-control" name="buyer_contact">
        </div>
        <div class="form-group mt-4">
            <label>Quality</label>
            <input type="number" class="form-control col-5" name="amount">
        </div>

        <button type="submit" class="btn btn-success" title="Delete">
            Submit
        </button>
    </form>
</div>
</div>
@endsection