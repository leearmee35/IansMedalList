<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Ian's Medal Tally</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">


    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="./public/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="./public/css/custom.css">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="left-menu hidden-sm hidden-md hidden-xs">
    <ul class="dm-social">
        <li class="facebookbg"><a href="#" class="fa fa-facebook" data-toggle="tooltip" data-placement="right" title="Facebook">Facebook</a></li>
        <li class="googlebg"><a href="#" class="fa fa-google-plus" data-toggle="tooltip" data-placement="right" title="Google+">Google+</a></li>
        <li class="twitterbg"><a href="#" class="fa fa-twitter" data-toggle="tooltip" data-placement="right" title="Twitter">Twitter</a></li>
        <li class="pinterestbg"><a href="#" class="fa fa-pinterest" data-toggle="tooltip" data-placement="right" title="Pinterest">Pinterest</a></li>
        <li class="linkedinbg"><a href="#" class="fa fa-linkedin" data-toggle="tooltip" data-placement="right" title="Linkedin">Linkedin</a></li>
        <li class="rssbg"><a href="#" class="fa fa-rss" data-toggle="tooltip" data-placement="right" title="RSS">RSS</a></li>
        <li class="share">
            <a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a>
        </li>
    </ul>
</div>

<!-- START SITE -->

<div id="wrapper">
    <div class="logo-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                </div>
                <div class="col-md-7 col-sm-12">
                    <a class="navbar-brand" href="index.html"><img src="./public/images/logo.png" alt=""></a>
                </div>
                <!-- end col -->
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end logo-wrapper -->

    <header class="header">
        <div class="container">
            <nav class="navbar navbar-default yamm">
                <div class="container-full">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="">BuzzFeed</a></li>
                            <li><a href="">BBC</a></li>
                            <li><a href="">CNN</a></li>
                            <li><a href="">ESPN</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right searchandbag">
                            <li class="dropdown searchdropdown hasmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                <ul class="dropdown-menu show-right">
                                    <li>
                                        <div id="custom-search-input">
                                            <div class="input-group col-md-12">
                                                <input type="text" class="form-control input-lg" placeholder="Search here..." />
                                                <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-lg" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
        <!-- end container -->
    </header>
    <!-- end header -->

    <div class="container sitecontainer bgw">


        @yield('content')



    </div>
    <!-- end container -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Site Links</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="links-widget m30">
                            <ul class="check">
                                <li><a href="#">Homepage</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Get In Touch</a></li>
                                <li><a href="#">Archives</a></li>
                                <li><a href="#">Subscribe</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Deals & Coupons</a></li>
                            </ul>
                        </div>
                        <!-- end links -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Community</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="links-widget m30">
                            <ul class="check">
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Send us a tip!</a></li>
                                <li><a href="#">Add to our database</a></li>
                                <li><a href="#">Write a review</a></li>
                                <li><a href="#">Report site issue</a></li>
                                <li><a href="#">Our Authors</a></li>
                                <li><a href="#">Site Categories</a></li>
                            </ul>
                        </div>
                        <!-- end links -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Social Profiles</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="links-widget m30">
                            <ul class="sociallinks">
                                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i> Vimeo</a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i> YouTube</a></li>
                                <li><a href="#"><i class="fa fa-maxcdn"></i> MaxCDN</a></li>
                            </ul>
                        </div>
                        <!-- end links -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Subscribe & Newsletter</h4>
                            <hr>
                        </div>
                        <!-- end widget-title -->

                        <div class="newsletter-widget m30">
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <form class="form-inline" method="post" role="form">
                                <div class="input-group form-group">
                                    <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                </div>
                                <input type="submit" value="Subscribe" class="btn btn-primary" />
                            </form>

                            <hr>
                            <h3>
                                <span>12.441 Members</span>
                                <span>122.000 Articles</span>
                            </h3>

                        </div>
                        <!-- end mini-widget -->
                    </div>
                    <!-- end widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <div id="sitefooter-wrap">
        <div id="sitefooter" class="container">
            <div id="copyright" class="row">
                <div class="col-md-6 col-sm-12 text-left">
                    <p class="copyright-notice"><span class="fa fa-copyright"></span> 2016 Techmag. All Rights Reserved. A <a href="#" title="TemplateVisual" target="_blank">TemplateVisual</a> INC.</p>
                    <p class="footer-links"><a href="#" title="Privacy Policy" rel="nofollow">Privacy Policy</a><span>|</span><a href="#" title="Site Disclosure" rel="nofollow">Site Terms &amp; Disclosures</a><span>|</span><a href="#" title="" rel="nofollow" target="_blank">Powered by Bootstrap</a></p>
                </div>

                <div class="col-md-6 col-sm-12">
                    <ul class="list-inline text-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a class="topbutton" href="#">Back to top <i class="fa fa-angle-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end wrapper -->
<!-- END SITE -->

<script src="./public/js/jquery.min.js"></script>
<script src="./public/js/bootstrap.js"></script>
<script src="./public/js/plugins.js"></script>

</body>

</html>