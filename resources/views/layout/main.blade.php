
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>SmartEDU - Education Responsive HTML5 Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" type="image/x-icon" />
<link rel="apple-touch-icon" href=""{{asset("images/apple-touch-icon.png")}}>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{asset("style.css")}}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{asset("css/versions.css")}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset("css/responsive.css")}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset("css/custom.css")}}">

<!-- Modernizer for Portfolio -->
<script src="{{asset("js/modernizer.js")}}"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="host_version">

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Customer Login</h4>
            </div>
            <div class="modal-body customer-box">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                    <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="email1" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                        Submit
                                    </button>
                                    <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="Registration">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="email" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="password" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                        Save &amp; Continue
                                    </button>
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                        Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LOADER -->
<div id="preloader">
    <div class="loader-container">
        <div class="progress-br float shadow">
            <div class="progress__item"></div>
        </div>
    </div>
</div>
<!-- END LOADER -->

<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route("index")}}">
                <img src="{{asset("images/logo.png")}}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{route("index")}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route("about")}}">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Course </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="course-grid-2.html">Course Grid 2 </a>
                            <a class="dropdown-item" href="course-grid-3.html">Course Grid 3 </a>
                            <a class="dropdown-item" href="course-grid-4.html">Course Grid 4 </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">Blog </a>
                            <a class="dropdown-item" href="blog-single.html">Blog single </a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route("teacher")}}">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route("pricing")}}">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route("contact")}}">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->

@yield("content")

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>About US</h3>
                    </div>
                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    <div class="footer-right">
                        <ul class="footer-links-soi">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul><!-- end links -->
                    </div>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information Link</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:#">info@yoursite.com</a></li>
                        <li><a href="#">www.yoursite.com</a></li>
                        <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                        <li>+61 3 8376 6284</li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-center">
                <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://html.design/">html design</a></p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{asset("js/all.js")}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset("js/custom.js")}}"></script>
<script src="{{asset("js/timeline.min.js")}}"></script>
<script>
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });
</script>
</body>
</html>
