<!DOCTYPE html>
<html lang="en-us">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title  = 'Admin Panel'}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <!-- lib-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic">
    <!--
    link(rel='stylesheet' href='assets/stylesheets/ionicons.css')
    link(rel='stylesheet' href='assets/stylesheets/font-awesome.css')
    link(rel='stylesheet' href='assets/stylesheets/weather-icons.min.css')
    link(rel='stylesheet' href='assets/stylesheets/animate.css')
    link(rel='stylesheet' href='assets/stylesheets/glyphicon.css')

    -->

    <!--
    plugin
    link(rel='stylesheet' href='assets/stylesheets/plugin/bootstrap-table.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/nifty-modal.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/jquery.bootstrap-touchspin.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/select2.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/multi-select.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/ladda.min.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/daterangepicker.css')
    link(rel='stylesheet' href='assets/stylesheets/plugin/jquery.timepicker.css')
    link(rel="stylesheet" href="assets/stylesheets/plugin/jqvmap.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-submenu.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/code.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/jquery.dataTables.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/dataTables.bootstrap.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/jquery.gridster.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/summernote.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-markdown.min.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-select.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/asColorPicker.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/bootstrap-datepicker.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/jquery-labelauty.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/owl.carousel.min.css")
    link(rel="stylesheet" href="assets/stylesheets/plugin/owl.theme.default.min.css")

    -->
        <!--the Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Theme-->
    <!-- Concat all lib & plugins css-->
    <link id="mainstyle" rel="stylesheet" href="{{asset('admin/assets/stylesheets/theme-libs-plugins.css')}}">
    <link id="mainstyle" rel="stylesheet" href="{{asset('admin/assets/stylesheets/skin.css')}}">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <!-- Demo only-->
    <link id="mainstyle" rel="stylesheet" href="{{asset('admin/assets/stylesheets/demo.css')}}">

    <!-- This page only-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries--><!--[if lt IE 9]>
    <script src="{{asset('admin/assets/scripts/lib/html5shiv.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/lib/respond.js')}}"></script><![endif]-->
    <script src="{{asset('admin/assets/scripts/lib/modernizr-custom.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/lib/respond.js')}}"></script>

</head>

<body class="orchid  ">

@include('admin.layouts.sidemenu')

<!-- #MAIN-->
<div class="main-wrapper">

    <!-- VIEW WRAPPER-->
    <div class="view-wrapper">

        @include('admin.layouts.navbar')

        @yield('content')


    </div>
    <!-- END VIEW WAPPER-->

</div>
<!-- END MAIN WRAPPER-->

<!-- WEB PERLOAD-->
<div id="preload">
    <ul class="loading">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>



<!-- Lib-->
<script src="{{asset('admin/assets/scripts/lib/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('admin/assets/scripts/lib/jquery-ui.js')}}"></script>
<script src="{{asset('admin/assets/scripts/lib/tether.min.js')}}"></script>

<!-- Bootstrap js-->
<!-- script(src="assets/bootstrap/js/bootstrap.min.js")-->

<!-- Cookie js-->
<!-- script(src="assets/scripts/plugins/js.cookie.js")-->

<!-- Moment: Full featured date library for parsing, validating, manipulating, and formatting dates.-->
<!-- script(src="assets/scripts/plugins/moment.min.js")-->

<!-- Fastclick: Polyfill to remove click delays on browsers with touch UIs.-->
<!-- script(src="assets/scripts/plugins/fastclick.js")-->

<!-- Masonry: Grid layout library.-->
<!-- script(src="assets/scripts/plugins/masonry.pkgd.min.js")-->

<!-- Peity: is a simple jQuery plugin that converts an element's content into a simple <svg>.-->
<!-- script(src="assets/scripts/plugins/jquery.peity.min.js")-->

<!-- imagesloaded: Detect when images have been loaded.-->
<!-- script(src="assets/scripts/plugins/imagesloaded.pkgd.js")-->

<!-- MatchHeight: A responsive equal heights-->
<!-- script(src="assets/scripts/plugins/jquery.matchHeight.js")-->

<!-- Select2: JQuery based replacement for select boxes-->
<!-- script(src="assets/scripts/plugins/select2.full.min.js")-->

<!-- jQuery multiselect: jQuery plugin which is a drop-in replacement for the standard <select> element-->
<!-- script(src="assets/scripts/plugins/jquery.multi-select.js")-->

<!-- Bootstrap-tagsinput: jQuery tags input plugin based on Twitter Bootstrap.-->
<!-- script(src="assets/scripts/plugins/bootstrap-tagsinput.js")-->

<!-- Bootstrap-maxlength: Display the maximum lenght of the field-->
<!-- script(src="assets/scripts/plugins/bootstrap-maxlength.min.js")-->

<!-- Chartjs: Simple HTML5 Charts using the canvas element-->
<!-- script(src="assets/scripts/plugins/Chart.min.js")-->
<!-- script(src="assets/scripts/plugins/Chart.config.js")-->

<!-- Bootstrap-touchspin: A mobile and touch friendly input spinner component for Bootstrap 3.-->
<!-- script(src="assets/scripts/plugins/jquery.bootstrap-touchspin.min.js")-->

<!-- Date Range Picker: A JavaScript component for choosing date ranges.-->
<!-- script(src="assets/scripts/plugins/daterangepicker.js")-->

<!-- jquery.timepicker: A lightweight, customizable javascript timepicker plugin.-->
<!-- script(src="assets/scripts/plugins/jquery.timepicker.js")-->

<!-- Bootstrap-submenu-->
<!-- script(src="assets/scripts/plugins/bootstrap-submenu.js")-->

<!-- Prismjs: Code syntax highlighting library-->
<!-- script(src="assets/scripts/plugins/prism.js")-->

<!-- bootstrap-table: An extended Bootstrap table-->
<!-- script(src="assets/scripts/plugins/bootstrap-table.min.js")-->

<!-- Grid layout-->
<!-- script(src="assets/scripts/plugins/jquery.gridster.js")-->

<!-- super simple slider-->
<!-- script(src="assets/scripts/plugins/sss.min.js")-->

<!-- Easy-pie-chart: Lightweight  pie charts-->
<!-- script(src="assets/scripts/plugins/jquery.easypiechart.min.js")-->

<!-- Summernote: Lightweight html5 editor-->
<!-- script(src="assets/scripts/plugins/summernote.min.js")-->

<!-- Bootstrap plugin for markdown editing-->
<!-- script(src="assets/scripts/plugins/behave.js")-->
<!-- script(src="assets/scripts/plugins/markdown.js")-->
<!-- script(src="assets/scripts/plugins/to_markdown.js")-->
<!-- script(src="assets/scripts/plugins/bootstrap-markdown.js")-->

<!-- DataTables: It is a highly flexible HTML table.-->
<!-- script(src="assets/scripts/plugins/jquery.dataTables.min.js")-->
<!-- script(src="assets/scripts/plugins/dataTables.bootstrap.js")-->

<!-- Ladda: Buttons with built-in loading indicators.-->
<!-- script(src="assets/scripts/plugins/spin.min.js")-->
<!-- script(src="assets/scripts/plugins/ladda.min.js")-->

<!-- Counterup: Counts up to a targeted number when the number becomes visible.-->
<!-- script(src="assets/scripts/plugins/waypoints.min.js")-->
<!-- script(src="assets/scripts/plugins/jquery.counterup.min.js")-->

<!-- Bootstrap-select: Bootstrap's dropdown.js to style and bring additional functionality to normal select boxes.-->
<!-- script(src="assets/scripts/plugins/bootstrap-select.js")-->

<!-- Bootstrap-select: Bootstrap's dropdown.js to style and bring additional functionality to normal select boxes.-->
<!-- script(src="assets/scripts/plugins/bootstrap-datepicker.js")-->

<!-- jQuery asColorPicker-->
<!-- script(src="assets/scripts/plugins/jquery-asColor.js")-->
<!-- script(src="assets/scripts/plugins/jquery-asGradient.js")-->
<!-- script(src="assets/scripts/plugins/jquery-asColorPicker.js")-->

<!-- Labelauty jQuery Plugin: checkboxes and radio buttons-->
<!-- script(src="assets/scripts/plugins/jquery-labelauty.js")-->

<!-- Simple upload ui-->
<!-- script(src="assets/scripts/plugins/upload.js")-->

<!-- parsleyjs: the ultimate JavaScript form validation library-->
<!-- script(src="assets/scripts/plugins/parsley.min.js")-->

<!-- Owl Carousel 2: Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider.-->
<!-- script(src="assets/scripts/plugins/owl.carousel.js")-->

<!-- Theme js-->
<!-- Concat all plugins js-->
<script src="{{asset('admin/assets/scripts/theme/theme-plugins.js')}}"></script>
<script src="{{asset('admin/assets/scripts/theme/main.js')}}"></script>
<!-- Below js just for this demo only-->
<script src="{{asset('admin/assets/scripts/demo/demo-skin.js')}}"></script>
<script src="{{asset('admin/assets/scripts/demo/bar-chart-menublock.js')}}"></script>

<!-- Scripts -->

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif



</script>


<!-- Below js just for this page only-->
<script src="{{asset('admin/assets/scripts/demo/bar-chart.js')}}"></script>
</body>
</html>