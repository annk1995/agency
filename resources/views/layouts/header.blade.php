<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Nuke')</title>
    <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>
<body>

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <nav class="navbar navbar-area navbar-area-2 navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#itech_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="index.html"><img src="assets/img/logo.png" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search-bar-btn" href="#">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="itech_main_menu">
                <ul class="navbar-nav menu-open text-lg-center ps-lg-5">
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-1.html">IT / Softwer Agency</a></li>
                            <li><a href="index-2.html">SaaS App Landing</a></li>
                            <li><a href="index-3.html">Payments Solution</a></li>
                            <li><a href="index-4.html">Startup / Software Company</a></li>
                            <li><a href="index-5.html">Artificial Intelligence</a></li>
                            <li><a href="index-6.html">NFT Service</a></li>
                            <li><a href="index-7.html">Cyber Security</a></li>
                            <li><a href="index-8.html">Hardware Service</a></li>
                            <li><a href="index-9.html">ICO Landing</a></li>
							<li><a href="index-10.html">Personal Portfolio</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service 01</a></li>
                            <li><a href="service-2.html">Service 02</a></li>
                            <li><a href="service-3.html">Service 03</a></li>
                            <li><a href="service-4.html">Service 04</a></li>
                            <li><a href="service-5.html">Service 05</a></li>
                            <li><a href="service-details.html">Service Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Team 01</a></li>
                            <li><a href="team-2.html">Team 02</a></li>
                            <li><a href="team-3.html">Team 03</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="pricing.html">Pricing 01</a></li>
                            <li><a href="pricing-2.html">Pricing 02</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children mega-menu">
                        <a href="#">Mega Menu</a>
                        <div class="sub-menu">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="index-1.html">IT / Softwer Agency</a></li>
                                        <li><a href="index-2.html">SaaS App Landing</a></li>
                                        <li><a href="index-3.html">Payments Solution</a></li>
                                        <li><a href="index-4.html">Startup / Software Company</a></li>
                                        <li><a href="index-5.html">Artificial Intelligence</a></li>
                                        <li><a href="index-6.html">NFT Service</a></li>
                                        <li><a href="index-7.html">Cyber Security</a></li>
                                        <li><a href="index-8.html">Hardware Service</a></li>
                                        <li><a href="index-9.html">ICO Landing</a></li>
										<li><a href="index-10.html">Personal Portfolio</a></li>
                                    </ul>
                                </div>  
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="service.html">Service 01</a></li>
                                        <li><a href="service-2.html">Service 02</a></li>
                                        <li><a href="service-3.html">Service 03</a></li>
                                        <li><a href="service-4.html">Service 04</a></li>
                                        <li><a href="service-5.html">Service 05</a></li>
                                        <li><a href="service-details.html">Service Single</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="project.html">Project 01</a></li>
                                        <li><a href="project-2.html">Project 02</a></li>
                                        <li><a href="project-3.html">Project 03</a></li>
                                        <li><a href="project-details.html">Case Study Details</a></li>
                                        <li><a href="pricing.html">Pricing 01</a></li>
                                        <li><a href="pricing-2.html">Pricing 02</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Team 01</a></li>
                                        <li><a href="team-2.html">Team 02</a></li>
                                        <li><a href="team-3.html">Team 03</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul>
                                </div>  
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog 01</a></li>
                            <li><a href="blog-2.html">Blog 02</a></li>
                            <li><a href="blog-3.html">Blog 03</a></li>
                            <li><a href="blog-4.html">Blog 04</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop align-self-center">
                <a class="btn btn-border-base" href="about.html">Discover More <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->