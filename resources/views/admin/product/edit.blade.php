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
                        <div class="display-6">Products</div>
                        <div class="small text-muted">Create Products</div>
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
                        <form autocomplete="off" method="post" action="{{route('updateProducts',['id'=>$product->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-form-control-label" for="products Name">Product Name</label>
                                    <input class="form-control" id="Name" type="text" name="name" value="{{$product->name}}" placeholder="product Name" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group c-upload">
                                <input data-plugin="upload" type="file" name="feature">
                                <label for="file"><i class="m-r-1 fa fa-upload"></i>Upload Feature</label>
                            </div>
                            <div class="form-group">
                                <label for="select">Select The Category: </label>
                                <select class="form-control form-control-lg" name="categories_id" id="categories_id">
                                    @foreach($Categories as $category)
                                        <option value="{{$category->id}}"
                                                @if($product->id == $category->id)
                                                selected
                                                @endif

                                        >{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="v-message">Descriptions</label>
                                <textarea class="form-control" required id="v-message" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="At least a 20 character comment.." data-parsley-validation-threshold="10" rows="3">{{$product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="price">Price</label>
                                <input class="form-control" id="Name" type="text" name="price" placeholder="Price in $" autocomplete="off" value="{{$product->price}}">

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update">
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
@stop