<script>
    $("#Purchase Package").addClass("menu-item-active");
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<script>
    // Initialize ClipboardJS
    var clipboard = new ClipboardJS('.copy-btn');

    // Show success message on successful copy
    clipboard.on('success', function(e) {
        console.log('Copied:', e.text);
        alert('Copied: ' + e.text);
        e.clearSelection();
    });

    // Show error message on copy failure
    clipboard.on('error', function(e) {
        console.error('Copy failed:', e.action);
        alert('Copy failed. Please try again.');
    });
</script>
<script>
    // Get the copy button and icon elements
    const copyBtn = document.querySelector('.copy-btn');
    const icon = copyBtn.querySelector('i');

    // Add a click event listener to the copy button
    copyBtn.addEventListener('click', function() {
        // Update the HTML of the icon element to change the icon
        icon.classList.remove('bx-copy');
        icon.classList.add('bx-check'); // Change the class to the desired new icon
    });
</script>
<!-- Main Body -->

<!--begin::Content-->
<div class="no-tp-gap content d-flex flex-column flex-column-fluid " id="kt_content">
    <div class="mobile-nav" id="kt_header_mobile">
        <div>
            <button class="" id="kt_aside_mobile_toggle">
                <i class="bi bi-text-left icon-lg"></i>
            </button>
            <span>Menu</span>
        </div>
        <div>
            <span id="server-time-mobile"></span>
        </div>
    </div>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Buy Package <span
                        style="text-transform:capitalize"></span></h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <div class="d-flex flex-column-fluid section-top-50">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Dashboard-->
            <form class="form mt-0" name="frmmain" id="kt_form" method="POST"
                action="{{ route('user.fundActivation') }}">
                {{ csrf_field() }}

                <div class="col-12">
                </div>

                <!-- investment-head::begin -->

                <div class="row">
                    <div class="col-xl-6 offset-xl-3">

                        <div class="invest-main-wrap transaction-card-wrap">
                            <div class="row">



                                <!-- ==================================== -->
                                <div class="col-lg-12">
                                    <div class="form-group mt-2 mb-3 text-left">
                                        <label for="investfromwallet">Choose Wallet</label>
                                        <select class="form-control" id="investfromwallet" required name="walletType">
           
                                            <option value="1">ACTIVATION WALLET (Balance : {{ currency() }}
                                                {{ number_format(Auth::user()->FundBalance(), 2) }})</option> 
                                            <option value="2">INCOME WALLET (Balance : {{ currency() }}
                                                {{ number_format(Auth::user()->available_balance(), 2) }})</option> 

                                        </select>
                                                                </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group mt-2 mb-3 text-left">
                                        <label for="optinvesttype">  Amount </label>
                                        <input type="" name="amount" class="form-control"
                                            autocomplete="off" placeholder=""  value="5"required
                                            value="">
                                    </div>

                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group mt-2 mb-3 text-left">
                                        <label for="investfromwallet">Member ID</label>
                                        <input type="text" name="user_id" class="form-control check_sponsor_exist"
                                            autocomplete="off" placeholder="Member ID" data-response="sponsor_res"
                                            required value="">
                                        <span id="sponsor_res"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mt-2 mb-3 text-left">
                                        <label for="investfromwallet">Transaction Password</label>
                                        <input type="password" name="transaction_password" class="form-control"
                                            autocomplete="off" placeholder="Transaction Password" required
                                            value="">
                                    </div>
                                </div>


                            </div>



                            <div class="al-center">
                                <button type="submit" class="btn btn-primary report-btn submit-btn">Make Investment
                                    <span class="thin-arrow">→</span></button>
                            </div>
                        </div>
                        <div class="bronze-main-wrap mt-5 mb-4" style="display: none;">
                            <div class="box-wrap">
                                <h2 class="text-white">Your Investing</h2>
                                <div class="box">
                                    <h2 class="box-heading">Bronze</h2>
                                    <div class="box-image">
                                        <img src="{{ asset('') }}upnl/images/package1.png" alt="Box Image">
                                        <i class="bx bx-check check-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="silver-main-wrap mt-5" style="display: none;">
                            <div class="box-wrap mx-auto">
                                <h2 class="text-white">Your Investing</h2>
                                <div class="box">
                                    <h2 class="box-heading">Silver</h2>
                                    <div class="box-image">
                                        <img src="{{ asset('') }}upnl/images/package2.png" alt="Box Image">
                                        <i class="bx bx-check check-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gold-main-wrap mt-5" style="display: none;">
                            <div class="box-wrap">
                                <h2 class="text-white">Your Investing</h2>
                                <div class="box">
                                    <h2 class="box-heading">Gold</h2>
                                    <div class="box-image">
                                        <img src="{{ asset('') }}upnl/images/package3.png" alt="Box Image">
                                        <i class="bx bx-check check-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="platinum-main-wrap mt-5" style="display: none;">
                            <div class="box-wrap">
                                <h2 class="text-white">Your Investing</h2>
                                <div class="box">
                                    <h2 class="box-heading">Platinum</h2>
                                    <div class="box-image">
                                        <img src="{{ asset('') }}upnl/images/package4.png" alt="Box Image">
                                        <i class="bx bx-check check-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>




            </form>
        </div>
    </div>
</div>
<!--end::Content-->

