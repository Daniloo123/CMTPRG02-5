@extends('layouts.app')

@section('content')
    <style>
        .style{
            padding-bottom: 25px;
        }
    </style>
<h1>Products</h1>
    <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href="{{route('products.create')}}"> Create product </a></button>
<br>
<div class="container cardItem" id="products">
    <br>
    <div class="row">
        @foreach($products as $product)

        <div class="col-md-3 style">
            <div class="card">

                <a href="{{route('products.show',$product)}}"><img class="card-img-top img-fluid" src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"></a>
                <div class="card-body">
                    <p class="card-text"><a href="{{route('products.show',$product)}}" class="text-dark">{{$product->name}}</a></p>

                    <p class="card-cost">€ {{$product->price}}</p>
                    <p class="card-description">{{$product->description}}</p>
                    <p class="card-category">{{$product->categroy}}</p>

                    <div id="btn">
                        <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href="{{route('products.edit',$product->id)}}"> Edit </a></button>
                        <form class="btn btn-sm" action="{{route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
