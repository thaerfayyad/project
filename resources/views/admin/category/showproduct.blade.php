@extends('admin.layouts.app')

@section('content')
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

                </div>
            </div>
        </div>
    </div>

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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img src="{{asset('images/products').'/'.$product->feature}}" alt="{{$product->name}}" width="70px" height="70"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
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