@extends('layouts.include.app')

@section('content')
    <!-- =====  BANNER STRAT  ===== -->
    <div class="container banner mt_20">
        <div class="main-banner owl-carousel">
            <div class="item"><a href="#"><img src="images/fashion.jpg" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="images/outerwear.jpg" alt="Main Banner" class="img-responsive" /></a></div>
        </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
        <!-- =====  SUB BANNER  STRAT ===== -->
        <div class="row">
            <div class="cms_banner mt_10">
                @foreach($categories as $category)
                <div class="col-xs-4 mt_10">
                    <div id="subbanner4" class="sub-hover">
                        <div class="sub-img"><a href="#"><img src="{{asset('images/products').'/'.App\Category::find($category->id)->products[0]->feature}}" alt="{{App\Category::find($category->id)->products[0]->name}}" alt="Sub Banner4" class="img-responsive"></a></div>
                        <div class="bannertext text-center">
                            <a class="btn mb_10 cms_btn"  href="{{route('showCategoryProducts',['id'=>$category->id])}}">View products</a>
                            <h2>{{$category->category_name}}</h2>
                            <p class="mt_10">{{$category->Descriptions}}</p>
                        </div>
                    </div>
                </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- =====  SUB BANNER END  ===== -->
@stop
