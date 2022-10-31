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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-sm btn-primary right"><a class="text-white" href=""> Create an user </a></button>
            </div>
            <!-- DataTales Example -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Admin</th>
                            </tr>
                            </thead>
                            @foreach($admin as $admins)
                            <tbody>
                            <tr>
                                <td>{{$admins->name}}</td>
                                <td>{{$admins->email}}</td>
                                @if($admins->admin =='1')
                                    <td>Yes</td>
                                @else
                                    <td>No</td>
                                @endif
                                <td>
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{route('admins.edit', $admins)}}">Edit</a>
                                                <a class="dropdown-item" href="">Delete</a>

                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>

                            @endforeach
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection
