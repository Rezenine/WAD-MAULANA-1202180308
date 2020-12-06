@extends('navbar')

@section('content')
<center> <h3>Order</h3> </center>

<div class="row mt-5">
    <div class="col-sm d-flex">
        @foreach($products as $product)
        <div class="card" style="width: 17rem;">
            <img src="{{ asset('/storage/img/'. $product->img_path) }}" width="100" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>{{$product->name}}</h5><br>
                <p> {{$product->description}}</p>
                <h4>${{$product->price}}</h4><br>
            </div>
            <div class="card-footer">
                <a href="{{ route('product.show',$product->id) }}" type="button" class="btn btn-success">Order Now</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection