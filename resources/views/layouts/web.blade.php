@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="column">
            <h1><a href="{{ route('products.index') }}">Our latest products</a></h1>
        </div>

        <div class="column">
            <h1>Blog</h1>
        </div>

        <div class="column">
            <h1>Calender</h1>
        </div>
    </div>
</div>

@endsection
