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
                        <p class="small text-muted">
                            All Products</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="pull-xs-right" role="toolbar"><a class="btn btn-icon icon-only"></a><a class="btn btn-icon icon-only"></a>
                    <a class="btn btn-success" href="{{route('createProducts')}}">Create Product</a>
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
                            <th>Feature</th>
                            <th>Product name</th>
                            <th>Descriptions</th>
                            <th>Price</th>
                            <th>type of category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{asset('images/products').'/'.$product->feature}}" alt="{{$product->name}}" width="70px" height="70"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->category->category_name }}</td>
                                <td>
                                    <a href="{{route('editProducts',['id'=>$product->id])}}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{route('deleteProducts',['id'=>$product->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-bar"><small>Showing 1 to 10 of 57 entries</small>
                    <nav class="pull-xs-right">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&#171;</span><span class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&#187;</span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@endsection
