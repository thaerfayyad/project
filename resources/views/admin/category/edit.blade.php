@extends('admin.layouts.app')

@section('content')
    <!-- #FORM-->


    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title" style="color:#46aa17 ">Create New Category :</h6>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="js-validate-1 m-b-3" method="post" action="{{route('updateCategory',['id'=>$category->id])}}">
                        @csrf
                        <div class="form-group text-xs-right">
                            <button class="btn btn-primary" type="submit">Click Submit to validate</button>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="v-username">Category Name :</label>
                            <input class="form-control focus" required data-parsley-trigger="change" id="category_id" name="category_name" type="text" placeholder="Category Name " value="{{$category->category_name}}">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="v-message">Descriptions</label>
                            <textarea class="form-control" required id="v-message" name="Descriptions" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="At least a 20 character comment.." data-parsley-validation-threshold="10" rows="3">{{$category->Descriptions}}</textarea>
                        </div>

                        <div class="form-group text-xs-right">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- END PANEL BODY-->
        </div>
        <!-- END PANEL-->
    </div>
    </div>
    </div>
    <!-- END CONTAINER FIUID-->
@stop