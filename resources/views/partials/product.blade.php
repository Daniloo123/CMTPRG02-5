@extends('layouts.app')

@section('content')

@dd($products)

    @foreach($products as $product)
        <p>{{$product->name}}</p>
        <p>{{$product->price}}</p>
        <p>{{$product->category}}</p>
        <p>{{$product->description}}</p>

@endsection
