@extends('layouts.app')

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous"><!-- fontawesom cdn link -->
<link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

@section('content')
                <div id="purchase-btn">
                    <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href="{{route('products.index')}}"> Terug </a></button>
                    &nbsp;
                </div>
<div class="container mt-5 mb-5" id="productPage">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg" class="figure-img img-fluid rounded">

            </div>
        </div>

        <div class="col-md-7">
            <h5>{{$product->name}}</h5>
            <p class="text-muted">Merk : {{$product->category}} </p>

            <h5 class="pt-4">€ {{$product->price}}</h5>
            <p class="description text-muted">{{$product->description}}</p>

            </div><!-- row -->
{{--            <div id="purchase-btn">--}}
{{--                <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href=""> Buy Now </a></button>--}}
{{--                &nbsp;--}}
{{--            </div>--}}
    </div>


{{--            <br><br>--}}
{{--            <hr>--}}
{{--            <br>--}}
{{--            <h4 class="text-center text-muted">Vergelijkebare producten</h4>--}}
{{--            <br><br>--}}
{{--            <div class="row" id="relatedProducts">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="overlay">--}}
{{--                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" class="zoom-in figure-img img-fluid">--}}
{{--                    </div>--}}

{{--                    <h5 class="text-center text-dark mt-3">Adidas Cool T-Shirt</h5>--}}
{{--                    <p class="cost text-center text-dark mt-2">$179.00</p>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="overlay">--}}
{{--                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" class="zoom-in figure-img img-fluid">--}}
{{--                    </div>--}}

{{--                    <h5 class="text-center text-dark mt-3">Red Hoodie</h5>--}}
{{--                    <p class="cost text-center text-dark mt-2">$35.99</p>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="overlay">--}}
{{--                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg" class="zoom-in figure-img img-fluid">--}}
{{--                    </div>--}}

{{--                    <h5 class="text-center text-dark mt-3">Grey Sweater</h5>--}}
{{--                    <p class="cost text-center text-dark mt-2">$36.99 </p>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="overlay">--}}
{{--                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg" class="zoom-in figure-img img-fluid">--}}
{{--                    </div>--}}

{{--                    <h5 class="text-center text-dark mt-3">Black Denim Jacket</h5>--}}
{{--                    <p class="cost text-center text-dark mt-2">$99.99</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <br>--}}
{{--            <br>--}}
{{--        </div>--}}


{{--    </div>--}}
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
