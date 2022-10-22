@extends('layouts.app')

@section('content')
    <style>
        .right {
            float: right;
        }
    </style>
    <h1>Account</h1>
    <br>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(Auth::user()-> admin =='1')
                    <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href=""> All profiles </a></button>
                @endif
                <button type="button" class="btn btn-sm btn-primary right"><a class="text-white" href=""> Edit profile </a></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$cr->name}}</td>
                                <td>{{$cr->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
