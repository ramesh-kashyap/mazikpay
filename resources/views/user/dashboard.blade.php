         <script>
                    $("#Dashboard").addClass("menu-item-active");

                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

                <script>
                    // Initialize ClipboardJS
                    var clipboard = new ClipboardJS('.copy-btn');

                    // Show success message on successful copy
                    clipboard.on('success', function (e) {
                        console.log('Copied:', e.text);
                        alert('Copied: ' + e.text);
                        e.clearSelection();
                    });

                    // Show error message on copy failure
                    clipboard.on('error', function (e) {
                        console.error('Copy failed:', e.action);
                        alert('Copy failed. Please try again.');
                    });

                </script>
                <script>
                    // Get the copy button and icon elements
                    const copyBtn = document.querySelector('.copy-btn');
                    const icon = copyBtn.querySelector('i');

                    // Add a click event listener to the copy button
                    copyBtn.addEventListener('click', function () {
                        // Update the HTML of the icon element to change the icon
                        icon.classList.remove('bx-copy');
                        icon.classList.add('bx-check'); // Change the class to the desired new icon
                    });

                </script>


                    <style>
                        .user-image {
                        width: 80px;
                        height: 52px;
                        border-radius: 50%;
                        overflow: hidden;
                        position: relative;
                    }
                    </style>

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
                    <!--end::Subheader-->
                    <!--begin::Entry-->

                    <div class="d-flex flex-column-fluid section-top-50 section-bottom-15 mobile-section-ptop">
                        <!--begin::Container-->
                        <div class="container-fluid">

                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                        rel="noopener nofollow" target="_blank"></a></div>
                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                                    async>
                                    {
                                        "symbols": [{
                                                "description": "BTC",
                                                "proName": "BITSTAMP:BTCUSD"
                                            },
                                            {
                                                "description": "Gold",
                                                "proName": "TVC:GOLD"
                                            },
                                            {
                                                "description": "ETH",
                                                "proName": "BITSTAMP:ETHUSD"
                                            },
                                            {
                                                "description": "USDT",
                                                "proName": "CRYPTOCAP:USDT"
                                            },
                                            {
                                                "description": "LTC",
                                                "proName": "CRYPTOCAP:LTC"
                                            },
                                            {
                                                "description": "BAPE",
                                                "proName": "BITMEX:BAPE"
                                            }
                                        ],
                                        "showSymbolLogo": true,
                                        "colorTheme": "dark",
                                        "isTransparent": false,
                                        "displayMode": "adaptive",
                                        "locale": "en"
                                    }

                                </script>
                            </div>
                            <!-- TradingView Widget END -->


                            <!-- Head Notification -->





                            <div class="row d-flex align-items-stretch">

                                <div class="col-lg-4">
                                    <div class="dark-block">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <div class="text-center reward-dash-wrap">
                                                    <img src="{{asset('')}}upnl/images/no-reward.svg"
                                                        alt="">
                                                    <div class="aw-badge-medal mt-4 text-white"><span>No Rewards</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dark-block w-100 mt-6">
                                        <div class="heading-with-link mb-1">
                                            <h3 class="dash-headings float-left mt-0">Quick Links</h3>
                                            <a href="{{route('user.profile')}}"
                                                class="float-right arrow-right-wrap" title="View Profile">View Profile
                                                <i class="fa-solid fa-arrow-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row d-flex align-items-stretch">
                                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch mt-4">
                                                <div class="mini-stat mini-stat-bg-1 w-100 witharw">
                                                    <div class="mini-stat-img">
                                                        <img src="{{asset('')}}upnl/images/deposit.svg"
                                                            alt="Deposit Icon">
                                                        <div class="custom-box-desc">
                                                            <a href="{{route('user.AddFund')}}">
                                                                <h5 class="mt-1 mb-2">Deposit</h5>
                                                                <h3 class="mt-0 mb-0">Fund Deposit <i
                                                                        class="fa-solid fa-arrow-right"></i></h3>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mini-stat-bg"></div>
                                                </div>
                                            </div>
                                            <!--column--->
                                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch mt-4">
                                                <div class="mini-stat mini-stat-bg-2 w-100">
                                                    <div class="mini-stat-img">
                                                        <img src="{{asset('')}}upnl/images/payment.svg"
                                                            alt="Invest Icon">
                                                        <div class="custom-box-desc">
                                                            <a href="{{route('user.withdraw-request')}}">
                                                                <h5 class="mt-1 mb-2">Payment</h5>
                                                                <h3 class="mt-0 mb-0">Withdrawal A/c <i
                                                                        class="fa-solid fa-arrow-right"></i></h3>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mini-stat-bg"></div>
                                                </div>
                                            </div>
                                            <!--column--->
                                        </div>
                                        <!---row--->
                                        <div class="row d-flex align-items-stretch mb-0">
                                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch mt-4">
                                                <div class="mini-stat mini-stat-bg-3 w-100">
                                                    <div class="mini-stat-img">
                                                        <img src="{{asset('')}}upnl/images/invest.svg"
                                                            alt="Invest Icon">
                                                        <div class="custom-box-desc">
                                                            <a href="{{route('user.DepositHistory')}}">
                                                                <h5 class="mt-1 mb-2">My Packages</h5>
                                                                <h3 class="mt-0 mb-0">Packages <i
                                                                        class="fa-solid fa-arrow-right"></i></h3>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mini-stat-bg"></div>
                                                </div>
                                            </div>
                                            <!--column--->
                                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch mt-4">
                                                <div class="mini-stat mini-stat-bg-4 w-100">
                                                    <div class="mini-stat-img">
                                                        <img src="{{asset('')}}upnl/images/withdraw.svg"
                                                            alt="Invest Icon">
                                                        <div class="custom-box-desc">
                                                            <a href="{{route('user.withdraw-request')}}">
                                                                <h5 class="mt-1 mb-2">Withdraw</h5>
                                                                <h3 class="mt-0 mb-0">Fund Withdraw <i
                                                                        class="fa-solid fa-arrow-right"></i></h3>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mini-stat-bg"></div>
                                                </div>
                                            </div>
                                            <!--column--->
                                        </div>
                                    </div>
                                    <!---dark-block---->
                                    <div class="user-card mt-6 mb-3">
                                        <div class="heading-with-link mb-1">
                                            <h3 class="dash-headings float-left mt-0">My Profile</h3>
                                            <a href="{{route('user.profile')}}"
                                                class="float-right arrow-right-wrap" title="View Profile">View Profile
                                                <i class="fa-solid fa-arrow-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="user-card-content">
                                            <div class="user-image">
                                                <img src="{{ asset('') }}assets/guest-assets/images/<?php if(Auth::user()->active_status=="Active"){echo "icon-member-active";}else{echo "icon-member-pending";}?>.png" alt="User">
                                            </div>
                                            <div class="profile-details">
                                                <table class="user-table">
                                                    <tr>
                                                        <td>Member ID:</td>
                                                        <td class="user-value">{{Auth::user()->username}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Registration Date:</td>
                                                        <td class="user-value"><?php echo date("D, d M Y", strtotime(Auth::user()->jdate))?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Country:</td>
                                                        <td class="user-value">{{Auth::user()->country}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email ID:</td>
                                                        <td class="user-value">{{Auth::user()->email}}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="dark-block w-100">
                                        <div class="heading-with-link mb-1">
                                            <h3 class="dash-headings float-left mt-0 text-dark">Wallet</h3>
                                            <!-- <a href="" class="float-right arrow-right-wrap" title="View Profile">View Wallet Report <i class="fa-solid fa-arrow-right"></i></a> -->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row mb-0 d-flex align-items-stretc">
                                            <div class="col-lg-6 mt-4 mb-4 d-flex align-items-stretc">
                                                <div class="info-box w-100">
                                                    <div class="icon">
                                                        <img src="{{asset('')}}upnl/images/f-wallet.svg" alt="">
                                                    </div>
                                                    <div class="text-content">
                                                        <h5>Account Balance</h5>
                                                        <h3>{{ currency() }}
                                                            {{ number_format(Auth::user()->available_balance(), 2) }}</h3>
                                                        <a href="#"
                                                            class="view-wallet-link  mt-2">View Wallet <i
                                                                class="fas fa-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-4 mb-4 d-flex align-items-stretc">
                                                <div class="info-box w-100">
                                                    <div class="icon">
                                                        <img src="{{asset('')}}upnl/images/i-wallet.svg" alt="">
                                                    </div>
                                                    <div class="text-content">
                                                        <h5>E Wallet</h5>
                                                        <h3>{{ currency() }}
                                                            {{ number_format(Auth::user()->FundBalance(), 2) }}</h3>
                                                        <a href="#"
                                                            class="view-wallet-link mt-2"> View Wallet <i
                                                                class="fas fa-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4 mb-0">
                                            <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Total Deposit</span>
                                                        <p>{{ currency() }}
                                                        {{ number_format(Auth::user()->investment->sum('amount'), 2) }}
                                                           </p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-diagram-3-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Direct Income</span>
                                                        <p>{{ currency() }}
                                                            {{ number_format(Auth::user()->sponsor_bonus->sum('comm'), 2) }}</p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-file-earmark-binary-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Level Income</span>
                                                        <p>{{ currency() }}
                                                        {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }} </p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-box-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Single Leg Income</span>
                                                        <p>
                                                        {{ currency() }}
                                                        {{ number_format(Auth::user()->sponsor_bonus->sum('comm'), 2) }}</p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-box-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Level Team</span>
                                                        <p>
                                                            {{$total_team}}</p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-diagram-3-fill"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Total Right Active Team</span>
                                                        <p>
                                                            {{$right_team }}</p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-diagram-3-fill"></i>
                                                    </div>
                                                </div>
                                            </div> -->


                                            <!-- <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Total Left Direct Team</span>
                                                        <p>
                                                            {{$left_direct_team }}</p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-box-fill"></i>
                                                    </div>
                                                </div>
                                            </div> -->


                                           

                                            <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Direct Team</span>
                                                        <p>
                                                            {{$user_direct}}</p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-currency-exchange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Total Withdrawal</span>
                                                        <p>{{ currency() }}
                                                            {{ number_format(Auth::user()->withdraw(), 2) }}</p>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-rocket-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4 mt-3 mb-3">
                                                <div class="dark-card-one">
                                                    <div class="dc-left">
                                                        <span>Email Status</span>
                                                        <div>
                                                            <button class="email-status email-status-unverified">Not
                                                                Verified</button>

                                                        </div>
                                                    </div>
                                                    <div class="dc-right">
                                                        <i class="bi bi-envelope-exclamation-fill"></i>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>

                                    </div>
                                    <!---dark-block---->
                                    <div class="rounded-box-wrap mt-5 mb-5">
                                        <div class="dark-block">
                                            <div class="heading-with-link mb-5">
                                                <h3 class="dash-headings float-left mt-0">Referrals</h3>
                                                <a href="{{route('user.referral-team')}}"
                                                    class="float-right arrow-right-wrap">Referral Report <i
                                                        class="fas fa-arrow-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 aflimg">
                                                    <img src="{{asset('')}}upnl/images/afl-ref.png" alt="">
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="afl-title">
                                                        <h2>Affiliate Income Status</h2>
                                                        <p>Total Active Affiliates: {{$user_direct}}</p>
                                                    </div>
                                                    <div class="b-top">
                                                        <div class="user-ils">
                                                            <div class="user-ils-center">
                                                                <i class="bi bi-person-fill"></i>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                          
                                                        </ul>
                                                    </div>


                                                    <div class="row d-flex clearfix">
    <div class="col-12 mb-4">
        <div class="afl-link">
            <label class="control-label mt-0">Referral Link</label>
            <div class="input-group">
                <input class="form-control ref-bg" type="text"
                    name="link" readonly="" id="clipboard"
                    value="{{ asset('') }}register?ref={{ Auth::user()->username }}">
                <span class="input-group-addon p-0">
                    <button class="btn-copy copyclipbtn"
                        onclick="copyclipboard('clipboard')"
                        style="border-radius: 0;">
                        <i class="fas fa-copy"></i>
                    </button>
                </span>
            </div>
            <small class="text-white">Copy and share your affiliate link to get more income.</small>
        </div>
    </div>
</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!---row--->
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->

                    <!-- Modal -->
                    <div id="show_popup">
                    </div>

               