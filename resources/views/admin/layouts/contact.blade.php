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
                        <div class="display-6">Mails</div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">

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
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>messages</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($messages->count() > 0)
                            @foreach($messages as $message)
                                <tr>

                                    <td> {{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->phone}}</td>
                                    <td>{{$message->message}}</td>

                                </tr>
                            @endforeach
                        @else
                            <td > <h3 >no messages yet</h3></td>
                        @endif

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@endsection