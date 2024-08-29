
@include('layouts.mainsite.header')


  
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script defer async>
        $("#").addClass("active");
    </script>
        <!-- page-title -->
        <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">Contact Us</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="/"><i class="fa fa-home"></i>Home</a>
                                </span>
                                <span>Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
        <!-- page-title end -->
       
        <!--site-main start-->
        <div class="site-main">
             <!--- conatact-section -->
            <section class="ttm-row conatact-section ttm-bgcolor-white clearfix padding_bottom80 padding_top60">
                <div class="container">
                    <!-- row -->
                    <div class="row row-equal-height">
                        <div class="col-xl-6 mt-5 mt-xl-0 order-2 order-xl-1">
                            <!-- section title -->
                            <div class="section-title ">
                                <div class="title-header">
                                    <h3>CONTACT US</h3>
                                    <h2 class="title">Get In Touch!</h2>
                                </div>
                            </div><!-- section title end -->
                            


                            
                            <form class="request_qoute_form wrap-form clearfix" method="post">

                            
                                <input type="hidden" name="_name_" value="submitcontact" />

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="text-input">
                                        <input type="text" id="name" name="name" placeholder="Name" value="">
                                                                            </div>
                                    <div class="col-md-12">
                                        <span class="text-input">
                                        <input type="text" id="subject" name="subject" placeholder="Subject" value="">
                                                                            </div>
                                    <div class="col-md-12">
                                        <span class="text-input">
                                        <input type="text" id="phone" name="phone" placeholder="Phone No." value="">
                                                                            </div>
                                    <div class="col-md-12">
                                        <span class="text-input">
                                        <input type="text" id="email" name="email" placeholder="Email" value="">
                                                                            </div>
                                    <div class="col-lg-12">
                                        <span class="text-input">
                                        <textarea type="text" class="form-control" name="message" placeholder="Message" rows="4" cols=""></textarea>
                                                                            </div>
                                    <div class="col-lg-12">
                                        <div class='input-group'>
    <div class='input-group-prepend captcha-wrap'>
       
      
    </div>
   
</div>                                    </div>

                                    <div class="col-lg-12">
                                        <div class="padding_top15 text-center">
                                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send Message<i class="flaticon flaticon-right-arrow"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>




                        </div>
                        <div class="col-xl-6 order-1 order-xl-2">
                            <div class="">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>CONTACT US</h3>
                                        <h2 class="title">Our Contact Info</h2>
                                    </div>
                                </div><!-- section title end -->
                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-before-content">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                                ttm-icon_element-style-round ttm-icon_element-size-sm "> 
                                                    <i class="flaticon flaticon-email-1 ttm-textcolor-skincolor"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content padding_left25">
                                                <div class="featured-title text-left">
                                                    <h3 class="margin_bottom0">Email:</h3>
                                                </div>
                                                <div class="featured-desc text-left"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="760503060619040236041f151e181302111a1914171a58181302">[email&#160;protected]</a></div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-before-content">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor
                                                ttm-icon_element-style-round ttm-icon_element-size-sm "> 
                                                    <i class="flaticon flaticon-location ttm-textcolor-skincolor"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content padding_left25">
                                                <div class="featured-title text-left">
                                                    <h3 class="margin_bottom0">Address:</h3>
                                                </div>
                                                <div class="featured-desc text-left">115 Westport Street New Kensington, PA 15068</div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <p class="padding_top30 rajdhani fs-18 padding_right30">Follow us on <a href="#"><strong>Facebook,</strong></a> Follow us on <a href="#"><strong>Twitter,</strong></a> Follow us on <a href="#"><strong>Dribbble</strong></a> and also Follow us on <a href="#"><strong>Instagram</strong></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->   
            </section>
        </div>
        


  @include('layouts.mainsite.footer')