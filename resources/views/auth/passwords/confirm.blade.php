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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/animate.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/flaticon.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/themify-icons.css" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/slick.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/shortcode.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/main.css" />

    <!-- megamenu -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/megamenu.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/guest-assets/css/responsive.css" />

    <script src="{{ asset('') }}assets/guest-assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/jquery.easing.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/jquery-waypoints.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/jquery-validate.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/slick.min.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/numinate.min.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/imagesloaded.min.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/jquery-isotope.js"></script>
    <script src="{{ asset('') }}assets/guest-assets/js/main.js"></script>

</head>

<body>

 
        <section class="ttm-row conatact-section ttm-bgcolor-grey clearfix padding_bottom60 padding_top60 form-height">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 offset-lg-3">
                        <div class="ttm-bgcolor-white rounded rounded-n p-4">


                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header text-center">
                                    <h3>Verify your Email</h3>
                                    <h5 class="title">Welcome! Please complete all the fields to reset your password
                                    </h5>
                                </div>
                                <div class="logo-wrap">
                                    <a href="/"><img
                                            src="{{ asset('') }}upnl/images/logo-icon.png"
                                            alt=""></a>
                                </div>
                            </div><!-- section title end -->

                           
                                <form action="{{route('verifyCode')}}" method="POST"
                                class="row clearfix" novalidate>
                               

                                {{ csrf_field() }}

                                <div class="col-md-12 mb-4">
                                    <span class="text-input mb-3">
                                        <input type="text"  name="code" placeholder="Enter Verification Code" required="">
                                        <input type="hidden"  value="{{$userID}}" class="form-control" name="userID" >
                                </div>

                               
                                <div class="col-md-12 mt-4">
                                    <div class='input-group'>
                                        <div class='input-group-prepend captcha-wrap'>

                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="padding_top15 text-center">
                                        <button type="submit"
                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" alt="Submit">Submit <i
                                                class="flaticon flaticon-right-arrow"></i></button>
                                    </div>
                                </div>
                            </form>



                            <hr class="mt-4" />
                            <!-- section title -->
                            <div class="section-title title-style-center_text mb-0 pb-0">
                                <div class="title-header text-center mt-4">
                                    <h3 class="mb-0">Login</h3>
                                    <h2 class="title mb-2" style="font-size: 30px">Already a member?</h2>
                                    <p>Login to your dashboard now.</p>
                                    <a class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-bgcolor-grey border-0 ttm-btn-color-skincolor"
                                        href="/member-login">Login Now<i
                                            class="flaticon flaticon-right-arrow"></i></a>
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
            </div>
            <section>
    </form>
    @include('partials.notify')

</body>

</html>
