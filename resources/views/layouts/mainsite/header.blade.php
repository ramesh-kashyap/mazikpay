
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="{{siteName()}} - HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{siteName()}}</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('')}}upnl/images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/bootstrap.min.css"/>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/animate.css"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/flaticon.css"/>

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/font-awesome.css"/>

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/themify-icons.css"/>

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/slick.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/shortcode.css"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/main.css"/>

    <!-- megamenu -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/megamenu.css"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/responsive.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <style>
        div#site-header-menu {
    background: #191717;
}
     </style>
</head>
<body>
    <!--page start-->
    <div class="page">
        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-topbar-wrapper -->
            <div class="top_bar ttm-bgcolor-darkgrey clearfix">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                            <div class="top_bar_contact_item pl-0">
                                <div class="top_bar_icon"><i class=" fa fa-phone"></i></div><a href="/support">Contact Us</a>
                            </div>
                            <div class="top_bar_contact_item ml-auto font-weight-bold padding_left15">
                                 <div class="top_bar_icon"><i class="fa fa-paper-plane-o"></i>
                                 </div> Email:<span class="font-weight-500 text-white"> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a191f1a1a05181e2a18030902040f1e0d0605080b0644040f1e">info@nexopartner.com</a></span>
                            </div>
                            <div class="top_bar_contact_item font-weight-bold">
                                 <div class="top_bar_icon ttm-highlight-right"><a href="{{route('register')}}" class="text-dark"><i class="ti ti-user text-dark"></i></div>Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar end -->
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-transpatant">
                <div class="site-header-menu-inner ttm-stickable-header ">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex flex-row align-items-center">
                                    <!-- site-branding -->
                                    <div class="site-branding mr-auto">
                                        <a class="home-link" href="/" title="{{siteName()}}" rel="home">
                                           <img id="logo-img" class="img-center standardlogo" src="{{asset('')}}upnl/images/1.png" alt="logo-img">
                                        </a>
                                    </div><!-- site-branding end -->
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">
                                            <li class="menu-item">
                                                <a href="/" class="menu-link" title="Home">Home</a>
                                            </li>
                                            <li class="mega-menu-item"><a href="{{route('about-us')}}" class="mega-menu-link">About</a>
                                               
                                            </li>
                                           
                                            <li class="menu-item">
                                                <a href="{{route('investment')}}" class="menu-link">Investment</a>
                                            </li>
                                           
                                            <li class="menu-item">
                                                <a href="{{route('affiliate')}}" class="menu-link">Affiliate</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('faq')}}" class="menu-link">Faq</a>
                                            </li>
                                           
                                            <li class="menu-item">
                                                <a href="{{route('support')}}" class="menu-link">Contact</a>
                                            </li>
                                           
                                            
                                            <li class="menu-item d-block d-xl-none">
                                                <a href="{{route('login')}}" class="menu-link">Login</a>
                                            </li>
                                          
                                        </ul>
                                    </nav>
                                    <div class="header_extra ttm-textcolor-white d-flex flex-row align-items-center justify-content-end">
                                        <div class="header_btn ttm-textcolor-skincolor">
                                            
                                                                                    <a class="ttm-btn btn-inline ttm-btn-color-white text-white" href="{{route('login')}}">   @guest Login   @else Dashboard @endguest</a>
                                                                                    </div>
                                    </div>              
                                    
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- site-header-menu end-->
        </header>