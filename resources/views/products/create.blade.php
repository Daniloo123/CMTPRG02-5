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
        <div class="card-header">New product</div>
        <div class="card-body">

            <form action="{{ route('products.store') }}" method="post">
            @csrf
                <label>Name</label></br>
                <input type="text" name="name" class="form-control"></br>

                <label>Price</label></br>
                <input type="number" step="0.01" name="price" class="form-control"></br>

                <label>Category</label></br>
                <input type="text" name="category" class="form-control"></br>

                <label>Description</label></br>
                <input type="text" name="description" class="form-control"></br>

                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@endsection
