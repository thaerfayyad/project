@extends('admin.layouts.app')

@section('content')
    <!-- PAGE CONTENT HERE-->
    <!-- #PAGE HEADER-->
    <!-- PAGE HEADER-->
    <div class="page-header">
        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="media-body">
                        <div class="display-6">Users</div>
                        <p class="small text-muted">
                            All Users</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="pull-xs-right" role="toolbar"><a class="btn btn-icon icon-only"></a><a class="btn btn-icon icon-only"></a>
                    <a class="btn btn-success" href="{{route('addUser')}}">Add User</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-darken-lighten responsive-nav collapse p-y-2" id="qmenu">
        <ul class="nav nav-inline nav-quick text-xs-center">
            <li class="nav-item active"><a class="nav-link" href="#">
                    <div class="ion-person-add fa-2x"></div>
                    <div class="menu-lable">Customers</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <div class="ion-soup-can-outline fa-2x"></div>
                    <div class="menu-lable">Databases</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <div class="ion-clipboard fa-2x"></div>
                    <div class="menu-lable">Quotes</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <div class="ion-calculator fa-2x"></div>
                    <div class="menu-lable">Sales</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <div class="ion-podium fa-2x"></div>
                    <div class="menu-lable">Purchases</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <div class="ion-beaker fa-2x"></div>
                    <div class="menu-lable">Beaker</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <div class="ion-camera fa-2x"></div>
                    <div class="menu-lable">Album</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                    <div class="ion-power fa-2x"></div>
                    <div class="menu-lable">Power</div></a></li>
        </ul>
    </div>
    <!-- #TABLE-->
    <div class="container-fluid">
        <div class="panel-wrapper">
            <div class="panel">
                <div class="responsive-nav">
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th></th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="circle-box"><img src="{{asset('uploads/users').'/'.$user->image}}" alt="{{$user->first_name}}">
                                            <div class="dot dot-online"></div>
                                        </div>
                                    </td>
                                    <td>{{$user->first_name.' '.$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if($user->role == 1) Admin
                                        @else User
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('editUser',['id'=>$user->id])}}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('deleteUser',['id'=>$user->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@endsection