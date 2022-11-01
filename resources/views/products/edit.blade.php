@extends('layouts.app')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
                <input type="number" min="0" step="0.01" name="price" value="{{$products->price}}" class="form-control"></br>

                <label>Category</label></br>
                <select name="category" class="form-control">
                    <option value="{{$products->category}}">{{$products->category}}</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Puma">Puma</option>
                    <option value="New Balance">New Balance</option>
                </select></br>

                <label>Description</label></br>
                <input type="text" name="description" value="{{$products->description}}" class="form-control"></br>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
            <div id="return-btn">
            </br>
                <button type="button" class="btn btn-sm btn-primary "><a class="text-white" href="{{route('products.index')}}"> Terug </a></button>
                &nbsp;
            </div>


        </div>
    </div>
@stop
