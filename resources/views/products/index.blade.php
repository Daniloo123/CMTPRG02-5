@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')

    <style>
        .style{
            padding-bottom: 25px;
        }
    </style>

    <form class="form-check-inline" type="get" action="{{route('search')}}">
        <input type="search" name="query" placeholder="Search Products">
        <button type="submit">Search</button>
    </form>
    <form method="get" action="{{route('filter')}}">
        <select name="filter">
            <option value="Nike">Nike</option>
            <option value="Adidas">Adidas</option>
            <option value="Puma">Puma</option>
            <option value="New Balance">New Balance</option>
        </select>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <h1>Products</h1>
        <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href="{{route('products.create')}}"> Create product </a></button>
    <br>
    <div class="container cardItem" id="products">
        <br>
        <div class="row">
            @foreach($products as $product)
                @if($product->status == '1')
                <div class="col-md-3 style">
                    <div class="card">

                        <a href="{{route('products.show',$product)}}"><img class="card-img-top img-fluid" src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"></a>
                        <div class="card-body">
                            <p class="card-text"><a href="{{route('products.show',$product)}}" class="text-dark">{{$product->name}}</a></p>

                            <p class="card-cost">€ {{$product->price}}</p>
                            <p class="card-category">{{$product->category}}</p>
                            @if(Auth::user()->id == $product->user_id || Auth::user()-> admin =='1')
                                <div id="btn">
                                    <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href="{{route('products.edit',$product->id)}}"> Edit </a></button>
                                    <form class="btn btn-sm" action="{{route('products.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                @if($countPost >= '5' || Auth::user()->admin =='1')
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    @if(Auth::user()->admin =='1'||$product->user_id == Auth::user()->id)
                        <th>Status</th>
                    @endif
                </tr>
                </thead>
                @foreach($products as $product)
                    @if($product->user_id == Auth::user()->id||Auth::user()->admin =='1')
                <tbody>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category}}</td>
                    @if(Auth::user()->admin =='1' ||$product->user_id == Auth::user()->id)
                    <td>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                       {{($product->status) ? 'checked' : ''}}
                                       onclick="changeProductStatus(event.target, {{ $product->id }});">
                                <label class="custom-control-label pointer"></label>
                            </div>
                        </div>
                    </td>
                    @endif
                    </tr>
                </tbody>
                        @endif
                @endforeach
                @endif
            </table>
        </div>
    </div>

    <script>
        function changeProductStatus(_this, id) {
            let status = $(_this).prop('checked') == true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: `{{route('changeStatus')}}`,
                type: 'post',
                datatype: 'json',
                data: {
                    '_token': _token,
                    'id': id,
                    'status': status
                },
                success: function (result) {
                }
            });
        }

    </script>

@endsection
