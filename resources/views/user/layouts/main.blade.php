<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Home')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('user/css/flexslider.css')}}" type="text/css" media="screen" property=""/>
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/zoomslider.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}"/>
    <link href="{{asset('user/css/font-awesome.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('user/js/modernizr-2.6.2.min.js')}}"></script>
    <!--/web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

   @section('css')
</head>
<body>

@include('user.inc.top')
@include('user.inc.nav')



@yield('content')




@include('user.inc.footer')

<script>
    $(document).ready(function () {
        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
        );
    });
</script>



<script type="text/javascript" src="{{asset('user/js/jquery.zoomslider.min.js')}}"></script>
<script src="{{asset('user/js/main.js')}}"></script>


<script>
    $("document").ready(function () {
        $("#video").simplePlayer();
    });
</script>
<!-- flexSlider -->
<script defer src="{{asset('user/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!--//script for portfolio-->
<!-- Calendar -->
<link rel="stylesheet" href="{{asset('user/css/jquery-ui.css')}}"/>
<script src="{{asset('user/js/jquery-ui.js')}}"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
</script>
<!-- //Calendar -->
<script type="text/javascript" src="{{asset('user/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/easing.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<script src="{{asset('user/js/bootstrap.js')}}"></script>
@section('script')
</body>
</html>
