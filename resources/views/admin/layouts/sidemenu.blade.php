<!-- #SIDEMENU-->
<div class="mainmenu-block">
    <!-- SITE MAINMENU-->
    <nav class="menu-block">
        <ul class="nav">
            <li class="nav-item mainmenu-user-profile"><a href="user-profile.html">
                    <div class="circle-box"><img src="assets/images/face/1.jpg" alt="">
                        <div class="dot dot-success"></div>
                    </div>
                    <div class="menu-block-label"><b>Odalys Broussard</b><br>Managing Director</div></a></li>
        </ul>
        <div class="p-a-2"><span class="small pull-xs-right">This Month Earnings</span>
            <canvas id="demo-bar-dark-chart"></canvas>
        </div>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}"><i class="icon ion-home"></i>
                    <div class="menu-block-label">Home</div></a></li>
            <!--li.header GENERAL-->
           {{--@if(Auth::check())--}}
                <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-android-people"></i>
                        <div class="menu-block-label">User</div></a>
                    <ul class="nav menu-block-sub">
                        <li class="nav-item"><a class="nav-link" href="{{route('users')}}">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('addUser') }}">Add User</a></li>
                    </ul>
                </li>

            <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-ios-grid-view-outline"></i>
                    <div class="menu-block-label">category</div></a>
                <ul class="nav menu-block-sub">
                    <li class="nav-item"><a class="nav-link" href="{{route('Categories')}}">categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('createCategory')}}">Add category</a></li>
                </ul>
            </li>
            <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-cube"></i>
                    <div class="menu-block-label">Products</div></a>
                <ul class="nav menu-block-sub">
                    <li class="nav-item"><a class="nav-link" href="{{route('Products')}}">products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('createProducts')}}">Add Products</a></li>
                </ul>
            </li>
            <li class="menu-block-has-sub nav-item"><a class="nav-link" href="#"><i class="icon ion-cube"></i>
                    <div class="menu-block-label">Customers</div></a>
                <ul class="nav menu-block-sub">
                    <li class="nav-item"><a class="nav-link" href="{{route('liveMail')}}">Mails</a></li>

                </ul>
            </li>
            </li>

    </nav>
</div>
