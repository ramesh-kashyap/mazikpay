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

    <link rel="shortcut icon" href="{{asset('')}}upnl/images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}assets/guest-assets/css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/animate.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/flaticon.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}assets/guest-assets/css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}assets/guest-assets/css/themify-icons.css" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/slick.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/shortcode.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/main.css" />

    <!-- megamenu -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/guest-assets/css/megamenu.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('')}}assets/guest-assets/css/responsive.css" />

    <script src="{{asset('')}}assets/guest-assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/bootstrap.min.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/jquery.easing.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/jquery-waypoints.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/jquery-validate.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/slick.min.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/numinate.min.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/imagesloaded.min.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/jquery-isotope.js"></script>
    <script src="{{asset('')}}assets/guest-assets/js/main.js"></script>


</head>

<body>

    <!-- <div class="top_bar ttm-bgcolor-darkgrey clearfix">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                            <div class="top_bar_contact_item pl-0">
                                <div class="top_bar_icon"><i class=" fa fa-phone"></i></div><a href="/contact-us">Contact Us</a>
                            </div>
                            <div class="top_bar_contact_item ml-auto font-weight-bold padding_left15">
                                 <div class="top_bar_icon"><i class="fa fa-paper-plane-o"></i>
                                 </div> Email:<span class="font-weight-500 text-white"> support@richnetglobal.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

    <!-- page-title -->
    <!-- <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">Login</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html"><i class="fa fa-home"></i>Home</a>
                                </span>
                                <span>Login</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                     -->
    <!-- page-title end -->

    <!--site-main start-->
    <div class="site-main">
        <!--- conatact-section -->
        <section class="ttm-row conatact-section ttm-bgcolor-grey clearfix padding_bottom60 padding_top60">
            <div class="container">
                <!-- row -->
                <div class="row row-equal-height justify-content-center">
                    <div class="col-xl-6">
                        <div class="ttm-bgcolor-white rounded rounded-n p-4">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header text-center">
                                    <h3>Dashboard</h3>
                                    <h2 class="title">Login</h2>
                                </div>
                                <div class="logo-wrap">
                                    <a href="/"><img
                                            src="{{asset('')}}upnl/images/1.png"
                                            alt=""></a>
                                </div>
                            </div><!-- section title end -->

                            <form name="frmlogin" method="POST" class="request_qoute_form wrap-form clearfix" action="{{route('login')}}">
                            {{ csrf_field() }}
                                <div class="row justify-content-center">
                                 

                                    <div class="col-md-12">
                                        <span class="text-input"><input name="username" value="{{old('username')}}" id="username" type="text"
                                                placeholder="Your Member ID*"></span>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="text-input mb-4"><input name="password" id="password"
                                                type="password" value="{{old('password')}}" placeholder="Your Password*"></span>
                                    </div>

                                    <div class="col-md-12">
                                        <div class='input-group'>
                                            <div class='input-group-prepend captcha-wrap'>



                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="/forgot-password">Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="log-otp">

                                        <!-- <button type="submit" class="register-btn font-weight-bold">Login</button>
                                                    <button type="button" class="btn font-weight-bold" onclick="cancel()">Cancel</button> -->
                                        <div class="col-lg-12">
                                            <div class="padding_top15 text-center">
                                                <button type="submit"
                                                    class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor">Login
                                                    to Dashboard<i class="flaticon flaticon-right-arrow"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <div class="pt-4 text-center">
                                If you are not a member <a href="/register">Sign Up</a>
                            </div>





                            <hr class="mt-4" />
                            <!-- section title -->
                            <div class="section-title title-style-center_text mb-0 pb-0">
                                <div class="title-header text-center mt-4">
                                    <h3 class="mb-0">Register</h3>
                                    <h2 class="title mb-2" style="font-size: 30px">New to {{siteName()}}</h2>
                                    <p>Join us today and start earning.</p>
                                    <a href="/register"
                                        class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-bgcolor-grey border-0 ttm-btn-color-skincolor">Join
                                        Now<i class="flaticon flaticon-right-arrow"></i></a>
                                </div>
                                <div class="text-center go-back-btn-wrap mt-3 mb-2">
                                    <a href="/"
                                        class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded  border-0">Go back
                                        to home</a>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </section>

    </div>
    @include('partials.notify')