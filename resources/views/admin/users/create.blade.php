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
                        <div class="display-6">Add User</div>
                        <div class="small text-muted">Create new user</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->

    <div class="container-fluid">
        <div class="row js-grid-wrapper panel-wrapper">
            <!-- #BASIC-->
            <div class="col-xs-12 col-sm-12 js-grid js-sizer">
                <div class="panel">
                    <div class="panel-heading">
                        <h6 class="panel-title">BASIC FORM</h6>
                    </div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form autocomplete="off" method="post" action="{{route('createUser')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-form-control-label" for="formBasicFirstName">First Name</label>
                                    <input class="form-control" id="formBasicFirstName" type="text" name="first_name" placeholder="First Name" autocomplete="off">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-form-control-label" for="formBasicLastName">Last Name</label>
                                    <input class="form-control" id="formBasicLastName" type="text" name="last_name" placeholder="Last Name" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-form-control-label" for="formBasicEmail">Email Address</label>
                                <input class="form-control" id="formBasicEmail" type="email" name="email" placeholder="Email Address" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="form-form-control-label" for="formBasicPassword">Password</label>
                                <input class="form-control" id="formBasicPassword" type="password" name="password" placeholder="Password" autocomplete="off">
                            </div>
                            <div class="form-group c-upload">
                                <input data-plugin="upload" type="file" name="image">
                                <label for="file"><i class="m-r-1 fa fa-upload"></i>Upload Image</label>
                            </div>
                            <div class="form-group">
                                <label class="form-form-control-label">Role</label>
                                <div>
                                    <div class="radio radio-inline">
                                        <input id="formBasicMale" type="radio" value="1" name="role">
                                        <label for="formBasicMale">Admin</label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input id="formBasicFemale" type="radio" value="0" name="role" checked="">
                                        <label for="formBasicFemale">User</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-form-control-label">Gender</label>
                                <div>
                                    <div class="radio radio-inline">
                                        <input id="formBasicMale" type="radio" value="male" name="gender" checked="">
                                        <label for="formBasicMale">Male</label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input id="formBasicFemale" type="radio" value="female" name="gender">
                                        <label for="formBasicFemale">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
                        <!-- END BASIC FORM-->
                    </div>
                </div>
                <!-- END PANEL-->
            </div>
            <!-- END COL-->

        </div>
        <!-- ROW-->
    </div>
    <!-- END CONTAINER FIUID-->
    <!-- END PAGE CONTENT-->
@endsection