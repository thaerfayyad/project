@extends('layouts.include.app')

@section('content')
    <!-- =====  BANNER STRAT  ===== -->
    <div class="container banner mt_20">
        <div class="main-banner owl-carousel" style="height: 450px;">
            <div class="item"><a href="#"><img src="images/fashion.jpg" alt="Main Banner" class="img-responsive"  /></a></div>
        </div>
    </div>
    <!-- =====  BANNER END  ===== -->

    <!-- =====  CONTAINER START  ===== -->

<div class="container">
        <!-- =====  SUB BANNER  STRAT ===== -->
    <div class="row">
        <div class="cms_banner mt_10">
            @foreach($products as $product)
                <div class="col-xs-4 mt_10">
                    <div id="subbanner4" class="sub-hover">
                            <div class="sub-img"><a href="#"><img src="{{asset('images/products').'/'.$product->feature}}" alt="{{$product->name}}" class="img-responsive" ></a></div>
                            <div class="bannertext text-center" style="margin-right: 150px;"|>
                                <a class="btn mb_100 cms_btn"  href="{{route('showCategoryProducts',['id'=>$product->id])}}">View products</a>
                                <h2>{{$product->category_name}}</h2>
                                <p class="mt_10">{{$product->Descriptions}}</p>
                            </div>
                            <div class=" text-center" style="margin-right: 200px;  margin-left: auto; padding-bottom:200px;"  >
                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="{{$product->name}}">{{$product->description}}</a></h6>
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>{{$product->price}}</span>
                        </span>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>




@stop