@extends('layouts.app')

@section('content')
    <hr style="width: 100%;">

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-sm btn-primary right"><a class="text-white" href="{{route('users.index')}}">Go back </a></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('users.update', $admin->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="id" value="" id="id" />
                        <label>Name</label></br>
                        <input type="text" name="name" value="{{$admin->name}}" class="form-control"></br>

                        <label>Email</label></br>
                        <input type="email" readonly name="email" value="{{$admin->email}}" class="form-control"></br>

                        <label>Password</label></br>
                        <input type="text" name="password" value="{{$admin->password}}" class="form-control"></br>

                        <input type="submit" value="Update" class="btn btn-success"></br>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
