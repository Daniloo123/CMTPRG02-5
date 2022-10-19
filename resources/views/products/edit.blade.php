@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Edit product</div>
        <div class="card-body">

            <form action="{{ route('products.update',$products) }}" method="post">
                @csrf
                @method("PATCH")
                <input type="hidden" name="id" value="{{$products->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" value="{{$products->name}}" class="form-control"></br>

                <label>Price</label></br>
                <input type="number" name="price" value="{{$products->price}}" class="form-control"></br>

                <label>Category</label></br>
                <input type="text" name="category" value="{{$products->category}}" class="form-control"></br>

                <label>Description</label></br>
                <input type="text" name="description" value="{{$products->description}}" class="form-control"></br>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
