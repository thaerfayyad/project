@extends('admin.layouts.app')

@section('content')
    <!-- #FORM-->


    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title" style="color:#46aa17 ">Create New Category :</h6>
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
            <div class="row">
                <div class="col-md-6">
                    <form class="js-validate-1 m-b-3" method="post" action="{{route('storeCategory')}}">
                        @csrf

                        <div class="form-group">
                            <label class="form-control-label" for="v-username">Category Name :</label>
                            <input class="form-control focus" required data-parsley-trigger="change" id="category_id" name="category_name" type="text" placeholder="Category Name ">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="v-message">Descriptions</label>
                            <textarea class="form-control" required id="v-message" name="Descriptions" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="At least a 20 character comment.." data-parsley-validation-threshold="10" rows="3"></textarea>
                        </div>

                        <div class="form-group text-xs-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- END PANEL BODY-->
        </div>
        <!-- END PANEL-->
    </div>

    <!-- END CONTAINER FIUID-->
@stop