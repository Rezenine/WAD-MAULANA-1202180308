@extends('navbar')

@section('content')

@if($products=='[]')
    <div class="row justify-content-center">
    <div class="row justify-content-center mt-3 ">
        <div class="col-sm ">
            <p>There is no data</p>
            <a href="{{ route('product.creates') }}" type="button" class="btn btn-dark">Add Product</a>
        </div>
    </div> 
</div>
@else
<a href="{{ route('product.create') }}" type="button" class="btn btn-dark">Add Product</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $data=> $pr)
        <tr>
            <th scope="row">{{ $data+1 }}</th>
            <td>{{ $pr->name }}</td>
            <td>{{ $pr->price }}</td>
            <td>
                <form action="{{ route('product.destroy',$pr->id) }}" method="POST">
                    
                    <a href="{{ route('product.edit',$pr->id) }}">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a>

                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger" title="Delete">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif
@endsection