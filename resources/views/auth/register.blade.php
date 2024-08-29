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
    <script src="{{asset('')}}resources/general.js"></script>
</head>

<body>

    <!-- page-title -->
    <!-- page-title end -->

    <!--site-main start-->
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
                                <h3>Register</h3>
                                <h2 class="title">Join Now</h2>
                            </div>
                            <div class="logo-wrap">
                                <a href="/"><img src="{{asset('')}}upnl/images/1.png"
                                        alt=""></a>
                            </div>
                        </div><!-- section title end -->



                        <!-- Form content starts -->

                        <!-- Form starts -->
                        <form name="frmsubmit" id="theform" class="request_qoute_form wrap-form clearfix" method="POST"
                            action="{{route('registers')}}">
                            {{ csrf_field() }}
                            @php
                            $sponsor = @$_GET['ref'];
                            $pos = @$_GET['pos'];
                            $name = \App\Models\User::where('username', $sponsor)->first();
                            @endphp

                            <div class="row">

                                <div class="col-md-12">
                                    <span class="text-input mb-3">
                                        <input type="text" class="check_sponsor_exist" required data-response="sponsor_res" id="referralusername" name="sponsor"  placeholder="Your Referral ID."
                                             value="{{($sponsor)?$sponsor:""}}"></span>
                                    <span id="sponsor_res"> <?=($name)?$name->name:"";?></span>
                                </div>

                                <div class="col-md-12">
                                    <span class="text-input mb-3">
                                        <input name="name" type="text" value=""
                                            placeholder="Your Full Name*"></span>
                                </div>

                                <div class="col-md-12">
                                    <span class="text-input mb-3">
                                        <input name="email" type="text" value="" placeholder="Your Email ID*"></span>
                                </div>
                                <!-- <div class="col-md-12">
                                    <span class="text-input mb-3">
                                        <select id="country" name="country" onchange="setcode()">
                                            <option value="">-- Select Country --</option>
                                            <option value="Afghanistan-93">Afghanistan</option>
                                            <option value="Aland Islands-358">Aland Islands</option>
                                            <option value="Albania-355">Albania</option>
                                            <option value="Algeria-213">Algeria</option>
                                            <option value="American Samoa-684">American Samoa</option>
                                            <option value="Andorra-376">Andorra</option>
                                            <option value="Angola-244">Angola</option>
                                            <option value="Anguilla-264">Anguilla</option>
                                            <option value="Antarctica-672">Antarctica</option>
                                            <option value="Antigua and Barbuda-268">Antigua and Barbuda</option>
                                            <option value="Argentina-54">Argentina</option>
                                            <option value="Armenia-374">Armenia</option>
                                            <option value="Aruba-297">Aruba</option>
                                            <option value="Australia-61">Australia</option>
                                            <option value="Austria-43">Austria</option>
                                            <option value="Azerbaijan-994">Azerbaijan</option>
                                            <option value="Bahamas-242">Bahamas</option>
                                            <option value="Bahrain-973">Bahrain</option>
                                            <option value="Bangladesh-880">Bangladesh</option>
                                            <option value="Barbados-246">Barbados</option>
                                            <option value="Belarus-375">Belarus</option>
                                            <option value="Belgium-32">Belgium</option>
                                            <option value="Belize-501">Belize</option>
                                            <option value="Benin-229">Benin</option>
                                            <option value="Bermuda-441">Bermuda</option>
                                            <option value="Bhutan-975">Bhutan</option>
                                            <option value="Bolivia-591">Bolivia</option>
                                            <option value="Bosnia and Herzegovina-387">Bosnia and Herzegovina</option>
                                            <option value="Botswana-267">Botswana</option>
                                            <option value="Bouvet Island-">Bouvet Island</option>
                                            <option value="Brazil-55">Brazil</option>
                                            <option value="British Indian Ocean Territory-">British Indian Ocean
                                                Territory</option>
                                            <option value="Brunei Darussalam-673">Brunei Darussalam</option>
                                            <option value="Bulgaria-359">Bulgaria</option>
                                            <option value="Burkina Faso-226">Burkina Faso</option>
                                            <option value="Burundi-257">Burundi</option>
                                            <option value="Cambodia-855">Cambodia</option>
                                            <option value="Cameroon-237">Cameroon</option>
                                            <option value="Canada-1">Canada</option>
                                            <option value="Cape Verde-238">Cape Verde</option>
                                            <option value="Caribbean Netherlands-599">Caribbean Netherlands</option>
                                            <option value="Cayman Islands-345">Cayman Islands</option>
                                            <option value="Central African Republic-236">Central African Republic
                                            </option>
                                            <option value="Chad-235">Chad</option>
                                            <option value="Chile-56">Chile</option>
                                            <option value="China-86">China</option>
                                            <option value="Christmas Island-61">Christmas Island</option>
                                            <option value="Cocos Islands-61">Cocos Islands</option>
                                            <option value="Colombia-57">Colombia</option>
                                            <option value="Comoros-269">Comoros</option>
                                            <option value="Congo-242">Congo</option>
                                            <option value="Congo Democratic Republic-243">Congo Democratic Republic
                                            </option>
                                            <option value="Cook Islands-682">Cook Islands</option>
                                            <option value="Costa Rica-506">Costa Rica</option>
                                            <option value="Cote DIvoire-">Cote DIvoire</option>
                                            <option value="Croatia-385">Croatia</option>
                                            <option value="Cuba-53">Cuba</option>
                                            <option value="Curacao-599">Curacao</option>
                                            <option value="Cyprus-357">Cyprus</option>
                                            <option value="Czech Republic-420">Czech Republic</option>
                                            <option value="Denmark-45">Denmark</option>
                                            <option value="Djibouti-253">Djibouti</option>
                                            <option value="Dominica-767">Dominica</option>
                                            <option value="Dominican Republic-809">Dominican Republic</option>
                                            <option value="Ecuador-593">Ecuador</option>
                                            <option value="Egypt-20">Egypt</option>
                                            <option value="El Salvador-503">El Salvador</option>
                                            <option value="Equatorial Guinea-240">Equatorial Guinea</option>
                                            <option value="Eritrea-291">Eritrea</option>
                                            <option value="Estonia-372">Estonia</option>
                                            <option value="Ethiopia-251">Ethiopia</option>
                                            <option value="Falkland Islands-500">Falkland Islands</option>
                                            <option value="Faroe Islands-298">Faroe Islands</option>
                                            <option value="Federated States of Micronesia-243">Federated States of
                                                Micronesia</option>
                                            <option value="Fiji-679">Fiji</option>
                                            <option value="Finland-358">Finland</option>
                                            <option value="France-33">France</option>
                                            <option value="French Guiana-594">French Guiana</option>
                                            <option value="French Polynesia-689">French Polynesia</option>
                                            <option value="French Southern Territories-">French Southern Territories
                                            </option>
                                            <option value="Gabon-241">Gabon</option>
                                            <option value="Gambia-220">Gambia</option>
                                            <option value="Georgia-">Georgia</option>
                                            <option value="Germany-49">Germany</option>
                                            <option value="Ghana-233">Ghana</option>
                                            <option value="Gibraltar-350">Gibraltar</option>
                                            <option value="Greece-30">Greece</option>
                                            <option value="Greenland-299">Greenland</option>
                                            <option value="Grenada-">Grenada</option>
                                            <option value="Guadeloupe-">Guadeloupe</option>
                                            <option value="Guam-473">Guam</option>
                                            <option value="Guatemala-502">Guatemala</option>
                                            <option value="Guernsey-44">Guernsey</option>
                                            <option value="Guinea-224">Guinea</option>
                                            <option value="Guinea Bissau-245">Guinea Bissau</option>
                                            <option value="Guyana-">Guyana</option>
                                            <option value="Haiti-">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands-592">Heard Island and
                                                Mcdonald Islands</option>
                                            <option value="Holy See-509">Holy See</option>
                                            <option value="Honduras-504">Honduras</option>
                                            <option value="Hong Kong-852">Hong Kong</option>
                                            <option value="Hungary-36">Hungary</option>
                                            <option value="Iceland-354">Iceland</option>
                                            <option value="India-91" selected>India</option>
                                            <option value="Indonesia-62">Indonesia</option>
                                            <option value="Iran-98">Iran</option>
                                            <option value="Iraq-964">Iraq</option>
                                            <option value="Ireland-353">Ireland</option>
                                            <option value="Isle of Man-44">Isle of Man</option>
                                            <option value="Israel-972">Israel</option>
                                            <option value="Italy-39">Italy</option>
                                            <option value="ivory coast-225">ivory coast</option>
                                            <option value="Jamaica-876">Jamaica</option>
                                            <option value="Japan-81">Japan</option>
                                            <option value="Jersey-44">Jersey</option>
                                            <option value="Jordan-962">Jordan</option>
                                            <option value="Kazakhstan-7">Kazakhstan</option>
                                            <option value="Kenya-254">Kenya</option>
                                            <option value="Kiribati-686">Kiribati</option>
                                            <option value="Kosovo-383">Kosovo</option>
                                            <option value="Kuwait-965">Kuwait</option>
                                            <option value="Kyrgyzstan-996">Kyrgyzstan</option>
                                            <option value="Laos-856">Laos</option>
                                            <option value="Latvia-371">Latvia</option>
                                            <option value="Lebanon-961">Lebanon</option>
                                            <option value="Lesotho-266">Lesotho</option>
                                            <option value="Liberia-231">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya-218">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein-41">Liechtenstein</option>
                                            <option value="Lithuania-370">Lithuania</option>
                                            <option value="Luxembourg-352">Luxembourg</option>
                                            <option value="Macao-853">Macao</option>
                                            <option value="Macedonia-389">Macedonia</option>
                                            <option value="Madagascar-261">Madagascar</option>
                                            <option value="Malawi-265">Malawi</option>
                                            <option value="Malaysia-60">Malaysia</option>
                                            <option value="Maldives-960">Maldives</option>
                                            <option value="Mali-223">Mali</option>
                                            <option value="Malta-356">Malta</option>
                                            <option value="Marshall Islands-692">Marshall Islands</option>
                                            <option value="Martinique-596">Martinique</option>
                                            <option value="Mauritania-222">Mauritania</option>
                                            <option value="Mauritius-230">Mauritius</option>
                                            <option value="Mayotte-269">Mayotte</option>
                                            <option value="Mexico-52">Mexico</option>
                                            <option value="Micronesia-691">Micronesia</option>
                                            <option value="Moldova-373">Moldova</option>
                                            <option value="Monaco-377">Monaco</option>
                                            <option value="Mongolia-976">Mongolia</option>
                                            <option value="Montenegro-382">Montenegro</option>
                                            <option value="Montserrat-664">Montserrat</option>
                                            <option value="Morocco-212">Morocco</option>
                                            <option value="Mozambique-258">Mozambique</option>
                                            <option value="Myanmar-95">Myanmar</option>
                                            <option value="Namibia-264">Namibia</option>
                                            <option value="Nauru-674">Nauru</option>
                                            <option value="Nepal-977">Nepal</option>
                                            <option value="Netherlands-31">Netherlands</option>
                                            <option value="Netherlands Antilles-599">Netherlands Antilles</option>
                                            <option value="New Caledonia-687">New Caledonia</option>
                                            <option value="New Zealand-64">New Zealand</option>
                                            <option value="Nicaragua-505">Nicaragua</option>
                                            <option value="Niger-227">Niger</option>
                                            <option value="Nigeria-234">Nigeria</option>
                                            <option value="Niue-683">Niue</option>
                                            <option value="Norfolk Island-672">Norfolk Island</option>
                                            <option value="North Korea-850">North Korea</option>
                                            <option value="Northern Mariana Islands-850">Northern Mariana Islands
                                            </option>
                                            <option value="Norway-47">Norway</option>
                                            <option value="Oman-968">Oman</option>
                                            <option value="Pakistan-92">Pakistan</option>
                                            <option value="Palau-680">Palau</option>
                                            <option value="Palestine-">Palestine</option>
                                            <option value="Panama-507">Panama</option>
                                            <option value="Papua New Guinea-675">Papua New Guinea</option>
                                            <option value="Paraguay-595">Paraguay</option>
                                            <option value="Peru-51">Peru</option>
                                            <option value="Philippines-63">Philippines</option>
                                            <option value="Pitcairn-">Pitcairn</option>
                                            <option value="Poland-48">Poland</option>
                                            <option value="Portugal-351">Portugal</option>
                                            <option value="Puerto Rico-787">Puerto Rico</option>
                                            <option value="Qatar-974">Qatar</option>
                                            <option value="Reunion-262">Reunion</option>
                                            <option value="Romania-40">Romania</option>
                                            <option value="Russian Federation-7">Russian Federation</option>
                                            <option value="Rwanda-250">Rwanda</option>
                                            <option value="Saint Barthelemy-590">Saint Barthelemy</option>
                                            <option value="Saint Helena-290">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis-869">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia-758">Saint Lucia</option>
                                            <option value="Saint Martin-590">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon-508">Saint Pierre and Miquelon
                                            </option>
                                            <option value="Saint Vincent and the Grenadines-809">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="Samoa-">Samoa</option>
                                            <option value="San Marino-378">San Marino</option>
                                            <option value="Sao Tome and Principe-239">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia-966">Saudi Arabia</option>
                                            <option value="Senegal-221">Senegal</option>
                                            <option value="Serbia and Montenegro-381">Serbia and Montenegro</option>
                                            <option value="Seychelles-248">Seychelles</option>
                                            <option value="Sierra Leone-232">Sierra Leone</option>
                                            <option value="Singapore-65">Singapore</option>
                                            <option value="Sint Maarten-599">Sint Maarten</option>
                                            <option value="Slovakia-421">Slovakia</option>
                                            <option value="Slovenia-386">Slovenia</option>
                                            <option value="Solomon Islands-677">Solomon Islands</option>
                                            <option value="Somalia-252">Somalia</option>
                                            <option value="South Africa-27">South Africa</option>
                                            <option value="South Georgia-">South Georgia</option>
                                            <option value="South Korea-82">South Korea</option>
                                            <option value="South Sudan-211">South Sudan</option>
                                            <option value="Spain-34">Spain</option>
                                            <option value="Sri Lanka-94">Sri Lanka</option>
                                            <option value="Sudan-249">Sudan</option>
                                            <option value="Suriname-597">Suriname</option>
                                            <option value="Svalbard and Jan Mayen-">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland-">Swaziland</option>
                                            <option value="Sweden-46">Sweden</option>
                                            <option value="Switzerland-41">Switzerland</option>
                                            <option value="Syrian Arab Republic-963">Syrian Arab Republic</option>
                                            <option value="Taiwan-886">Taiwan</option>
                                            <option value="Tajikistan-7">Tajikistan</option>
                                            <option value="Tanzania-255">Tanzania</option>
                                            <option value="Thailand-66">Thailand</option>
                                            <option value="Timor Leste-">Timor Leste</option>
                                            <option value="Togo-228">Togo</option>
                                            <option value="Tokelau-690">Tokelau</option>
                                            <option value="Tonga-676">Tonga</option>
                                            <option value="Trinidad and Tobago-868">Trinidad and Tobago</option>
                                            <option value="Tunisia-216">Tunisia</option>
                                            <option value="Turkey-90">Turkey</option>
                                            <option value="Turkmenistan-993">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands-649">Turks and Caicos Islands
                                            </option>
                                            <option value="Tuvalu-688">Tuvalu</option>
                                            <option value="Uganda-256">Uganda</option>
                                            <option value="Ukraine-380">Ukraine</option>
                                            <option value="United Arab Emirates-971">United Arab Emirates</option>
                                            <option value="United Kingdom-44">United Kingdom</option>
                                            <option value="United States-1">United States</option>
                                            <option value="United States Minor Outlying Islands-">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay-598">Uruguay</option>
                                            <option value="Uzbekistan-998">Uzbekistan</option>
                                            <option value="Vanuatu-678">Vanuatu</option>
                                            <option value="Vatican City-379">Vatican City</option>
                                            <option value="Venezuela-58">Venezuela</option>
                                            <option value="Vietnam-84">Vietnam</option>
                                            <option value="Virgin Islands British-">Virgin Islands British</option>
                                            <option value="Virgin Islands US-">Virgin Islands US</option>
                                            <option value="Wallis and Futuna-681">Wallis and Futuna</option>
                                            <option value="Western Sahara-685">Western Sahara</option>
                                            <option value="Yemen-967">Yemen</option>
                                            <option value="Zambia-260">Zambia</option>
                                            <option value="Zimbabwe-263">Zimbabwe</option>
                                        </select>
                                </div> -->
                                <div class="col-md-12">
                                    <span class="text-input mb-3">
                                        <div class="input-group-prepend"><input name="countrycode" type="text"
                                                id="countrycode" readonly class="input-group-text" Placeholder="Code"
                                                style="max-width: 70px; padding: .375rem .8rem;" />
                                            <input name="phone" type="text" value="" placeholder="Mobile No.*">
                                        </div>
                                    </span>
                                </div>

                              

                              

                                <div class="col-md-12">
                                    <span class="text-input mb-3">
                                        <input name="password" type="password" value=""
                                            placeholder="Your Password*"></span>
                                </div>
                                <div class="col-md-12">
                                    <span class="text-input mb-3">
                                        <input name="password_confirmation" type="password" value=""
                                            placeholder="Re-enter Password*"></span>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <div class='input-group'>
                                        <div class='input-group-prepend captcha-wrap'>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="field-item terms">
                                        <input type="checkbox" name="termsandconditions" id="termsandconditions"
                                            value="agree">
                                        <label for="agree-term">I agree to <a href="/terms-and-conditions">Terms
                                                &conditions</a>.</label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="padding_top15 text-center">
                                        <button
                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor"
                                            type="submit" alt="Register" id="btnsubmit">Register<i
                                                class="flaticon flaticon-right-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Form ends -->
 
                        <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
                        <script>
                    
                            $('.check_sponsor_exist').keyup(function(e) {
                                var ths = $(this);
                                var res_area = $(ths).attr('data-response');
                                var sponsor = $(this).val();
                                // alert(sponsor); 
                                $.ajax({
                                    type: "POST"
                                    , url: "{{ route('getUserName') }}"
                                    , data: {
                                        "user_id": sponsor
                                        , "_token": "{{ csrf_token() }}"
                                    , }
                                    , success: function(response) {
                                        // alert(response);      
                                        if (response != 1) {
                                            // alert("hh");
                                            $(".submit-btn").prop("disabled", false);
                                            $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                                                .css('margin-buttom', '10px');
                                        } else {
                                            // alert("hi");
                                            $(".submit-btn").prop("disabled", true);
                                            $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                                                'margin-buttom', '10px');
                                        }
                                    }
                                });
                            });
                    
                        </script>

                                                
                        <script type="text/javascript">
                            
                        

                            function setcode() {
                                if (document.forms["frmsubmit"].country.value != "") {
                                    var codearr = document.forms["frmsubmit"].country.value.split("-");
                                    $("#countrycode").val("+" + codearr[1]);
                                }
                            }

                            $(document).ready(function() {
                                setcode();
                            });
                        
                        </script>
                                            
                    
                    
                    
                        @include('partials.notify')

                        <!-- Form content ends -->

                        <hr class="mt-4" />
                        <!-- section title -->
                        <div class="section-title title-style-center_text mb-0 pb-0">
                            <div class="title-header text-center mt-4">
                                <h3 class="mb-0">Login</h3>
                                <h2 class="title mb-2" style="font-size: 30px">Already a member?</h2>
                                <p>Login to your dashboard now.</p>
                                <a class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-bgcolor-grey border-0 ttm-btn-color-skincolor"
                                    href="{{route('login')}}">Login Now<i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                            <div class="text-center go-back-btn-wrap mt-3 mb-2">
                                <a href="/" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded  border-0">Go
                                    back to home</a>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </section>
    <!--  -->
