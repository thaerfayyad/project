@extends('admin.layouts.app')

@section('content')
    <!-- PAGE CONTENT HERE-->
    <div class="page-header">
        <div class="row">
            <div class="col-md-4">
                <div class="media">
                    <div class="media-body">
                        <h4 class="page-header-title">Dashboard<b> / Admin Panel</b></h4>
                        <div class="small text-muted"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="pull-xs-right">
                    <div class="small text-muted m-b-1">Live Data</div><span data-plugin="peityBar" data-peity="{ &quot;fill&quot;: [&quot;#ccc&quot;], &quot;width&quot;: 50 }">0,3,6,5,2,3,7,3,5,2</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row panel-wrapper js-grid-wrapper">
            <div class="col-xs-12 col-sm-6 col-md-3 js-grid js-sizer"><a href="">
                    <div class="widget widget-v bg-aqua">
                        <div class="w-main w-center bg-aqua-lighten"><i class="fa fa-download"></i></div>
                        <div class="w-section">
                            <div class="small">DOWNLOAD</div>
                            <div class="display-6">212 K</div>
                            <div class="small">+ 102 %</div>
                        </div>
                    </div></a></div>
            <div class="col-xs-12 col-sm-6 col-md-3 js-grid"><a href="">
                    <div class="widget widget-v bg-primary">
                        <div class="w-main w-center bg-primary-lighten"><i class="fa fa-user"></i></div>
                        <div class="w-section">
                            <div class="small">USERS</div>
                            <div class="display-6">872 K</div>
                            <div class="small">- 2 %</div>
                        </div>
                    </div></a></div>
            <div class="col-xs-12 col-sm-6 col-md-3 js-grid"><a href="">
                    <div class="widget widget-v bg-success">
                        <div class="w-main w-center bg-success-lighten"><i class="fa fa-shopping-cart"></i></div>
                        <div class="w-section">
                            <div class="small">ORDERS</div>
                            <div class="display-6">98 K</div>
                            <div class="small">+ 98 %</div>
                        </div>
                    </div></a></div>
            <div class="col-xs-12 col-sm-6 col-md-3 js-grid"><a href="">
                    <div class="widget widget-v bg-warning">
                        <div class="w-main w-center bg-warning-lighten"><i class="fa fa-money"></i></div>
                        <div class="w-section">
                            <div class="small">PROFITS</div>
                            <div class="display-6">52.2 K</div>
                            <div class="small">+ 21 %</div>
                        </div>
                    </div></a></div>
            <div class="col-xs-12 col-sm-6 js-grid">
                <div class="panel">
                    <div class="list-group"><a class="list-group-item" href="#">Getting Started</a><a class="list-group-item" href="#">Bootstrap 4</a><a class="list-group-item" href="#">Build system</a><a class="list-group-item" href="#">Supported browsers</a></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 js-grid">
                <div class="panel">
                    <div class="list-group"><a class="list-group-item" href="#">Community</a><a class="list-group-item" href="#">Suggested page</a><a class="list-group-item" href="#">Download AdminHero</a><a class="list-group-item" href="#">Other theme</a></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 js-grid">
                <div class="widget bg-dark"><a class="w-section w-center" style="background: url(assets/images/cd-1.jpg); background-size: cover;" href="#">
                        <div class="ion-ios-play fa-2x"></div>
                        <div class="w-pin-bottom-left small">465 watching now</div></a></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 js-grid">
                <div class="widget bg-dark"><a class="w-section w-center" style="background: url(assets/images/cd-2.jpg); background-size: cover;" href="#">
                        <div class="ion-ios-play fa-2x"></div>
                        <div class="w-pin-bottom-left small">465 watching now</div></a></div>
            </div>
            <div class="col-xs-12 col-md-6 js-grid">
                <div class="panel">
                    <div class="image"><img class="img-fluid" src="assets/images/7.jpg" alt=""></div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>OrderDate</th>
                            <th>Region</th>
                            <th>Rep</th>
                            <th>Item</th>
                            <th>Units</th>
                        </tr>
                        </thead>
                        <tbody class="small">
                        <tr>
                            <td>1/6/2014</td>
                            <td>East</td>
                            <td>Jones</td>
                            <td>Pencil</td>
                            <td>95</td>
                        </tr>
                        <tr>
                            <td>1/6/2014</td>
                            <td>East</td>
                            <td>Jones</td>
                            <td>Pencil</td>
                            <td>95</td>
                        </tr>
                        <tr>
                            <td>2/9/2014</td>
                            <td>Central</td>
                            <td>Kivell</td>
                            <td>Binder</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2/26/2014</td>
                            <td>Central</td>
                            <td>Gill</td>
                            <td>Pen</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>3/15/2014</td>
                            <td>West</td>
                            <td>Sorvino</td>
                            <td>Pencil</td>
                            <td>56</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="bg-faded-darken p-a-1"><a class="btn btn-secondary" href="#">Download</a></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 js-grid">
                <div class="panel">
                    <div class="panel-body">
                        <div class="legend legend-inline" id="demo-bar-chart-legend"></div>
                        <canvas id="demo-bar-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 js-grid">
                <div class="widget widget-v">
                    <div class="w-section w-main" style="background: url(assets/images/2.jpg); background-size: cover;">22</div>
                    <div class="w-section">
                        <dl>
                            <dd><i class="fa fa-circle m-r-1 text-warning"></i>Meeting HK</dd>
                            <dd><i class="fa fa-money m-r-1 text-success"></i>Bank in</dd>
                        </dl>
                        <div class="w-pin-bottom-right"><a class="btn btn-sm btn-link">+ Add</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 js-grid">
                <div class="widget">
                    <div class="w-section">
                        <div class="media">
                            <div class="media-left"><img class="media-object" src="assets/images/face/0.jpg" alt="" width="60"></div>
                            <div class="media-body"><strong>Braydon Dominguez</strong>
                                <div class="small">bdominguez@netaddress.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-section bg-faded">
                        <div class="row text-xs-center">
                            <div class="col-xs-4">
                                <div class="text-desc">Followers</div><b>1729</b>
                            </div>
                            <div class="col-xs-4">
                                <div class="text-desc">Following</div><b>212</b>
                            </div>
                            <div class="col-xs-4">
                                <div class="text-desc">Tweets</div><b>200</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 js-grid">
                <div class="panel">
                    <div class="panel-heading bg-faded-darken">
                        <div class="panel-title">Chat</div>
                    </div>
                    <div class="panel-body">
                        <div class="message-wrapper message-inbox">
                            <div class="message-wrapper-inner">
                                <div class="media">
                                    <div class="media-left"><a class="circle-box" href=""><img src="assets/images/face/1.jpg" alt=""><span class="dot dot-online"></span></a></div>
                                    <div class="media-body">
                                        <div class="message-is">
                                            <p>That did offers her took we to a had feedback not mostly than country.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media owner">
                                    <div class="media-left"><a class="circle-box" href=""><img src="assets/images/face/0.jpg" alt=""><span class="dot dot-online"></span></a></div>
                                    <div class="media-body">
                                        <div class="message-is">
                                            <p>Phase it skyline is it prudently, can sense a another,</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left"><a class="circle-box" href=""><img src="assets/images/face/1.jpg" alt=""><span class="dot dot-online"></span></a></div>
                                    <div class="media-body">
                                        <div class="message-is">
                                            <p>Counter. Derived his and watch than catch</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media owner">
                                    <div class="media-left"><a class="circle-box" href=""><img src="assets/images/face/0.jpg" alt=""><span class="dot dot-online"></span></a></div>
                                    <div class="media-body">
                                        <div class="message-is">
                                            <p>Phase it skyline is it prudently, can sense a another,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="button">SEND</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->

@endsection