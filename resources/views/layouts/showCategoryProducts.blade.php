@extends('layouts.include.app')
@section('content')
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
        <div class="row ">
            <!-- =====  BANNER STRAT  ===== -->
            <div class="col-sm-12">
                <div class="breadcrumb ptb_20">
                    <h1>Product</h1>
                    <ul>
                        <li><a href="{{route('mainsite')}}">Home</a></li>
                    </ul>
                </div>
            </div>
            <!-- =====  BREADCRUMB END===== -->
            <div id="column-left" class="col-sm-4 col-lg-3 ">
                <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">


                </div>
                <div class="filter left-sidebar-widget mb_50">
                    <div class="filter-block">

                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-9 mtb_20">
                <div class="row">

                        <div class="product-layout  product-grid  col-md-4 col-sm-6 col-xs-12 ">
                            <div class="item">
                                <div class="product-thumb clearfix mb_30">
                                    <div class="image product-imageblock"> <a href="#"> <img data-name="product_image"  src="{{asset('images/products').'/'.$product->feature}}"  class="img-responsive" /><img data-name="product_image"  src="{{asset('images/products').'/'.$product->feature}}"  class="img-responsive" /> </a>
                                        <div class="button-group text-center">
                                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                                            <a href="{{route('addCart',['id'=>$product->id])}}"><div class="add-to-cart"><span>Add to cart</span></div></a>
                                        </div>
                                        <div class="caption product-detail text-center" style="padding-bottom: 1000px; margin-right: 100px;" >
                                            <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="{{$product->name}}">{{$product->description}}</a></h6>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>{{$product->price}}</span>
                    </span>
                                            <p class="product-desc mt_20 mb_60"> {{$product->description}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                </div>
                <div class="pagination-nav text-center mt_50">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
@stop
<a id="scrollup"></a>
<script src="js/jQuery_v3.1.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>


