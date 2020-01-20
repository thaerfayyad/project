@extends('layouts.include.app')



@section('content')

<!-- =====  CONTAINER START  ===== -->
<div class="container">
  <div class="row ">
    <!-- =====  BANNER STRAT  ===== -->
    <div class="col-sm-12">
      <div class="breadcrumb ptb_20">
        <h1>Contact Us</h1>
        <ul>
          <li><a href="{{route('mainsite')}}">Home</a></li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
      <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
        <div class="nav-responsive">


        </div>
      </div>

    </div>

        <div class="col-md-8 col-xs-12 contact-form mb_50">
          <!-- Contact FORM -->
          <div id="contact_form">
            <form  method="post" action="{{route('storeContact')}}">
              @csrf

              <input class="full-with-form " type="text" name="name" placeholder="Name" data-required="true" />

              <input class="full-with-form  mt_30" type="email" name="email" placeholder="Email Address" data-required="true" /><input class="full-with-form  mt_30" type="text" name="phone" placeholder="Phone Number" maxlength="15" data-required="true" />

              <textarea class="full-with-form  mt_30" name="message" placeholder="message" data-required="true"></textarea>

              <button class="btn mt_30" type="submit">Send Message</button>
            </form>
            <div id="contact_results"></div>
          </div>
          <!-- END Contact FORM -->
        </div>
      </div>
      <!-- map  -->
      <div class="row">
        <div class="col-xs-12 map mb_80">

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Single Blog  -->
<!-- End Blog   -->
<!-- =====  CONTAINER END  ===== -->
@stop
