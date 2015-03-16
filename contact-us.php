<?php
$requesturi = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
date_default_timezone_set("Asia/Kolkata");
$pos = strpos($requesturi, "bluebirdwaterpurifiers");

if ($pos) {
    define('DP_ROOT', '');
    define('FP_ROOT', '');
} else {
    define('DP_ROOT', '');
    define('FP_ROOT', '');
}
include_once FP_ROOT . 'includes/header.php';
?>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="wrap">
        <div class="row contactUsBanner">
            <img src="img/contactus-header.jpg" class="img-responsive" alt=""/>
        </div>
        <section class="mainContent row">
            <div class="col-xs-3"> <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#feedback" data-toggle="tab">Feedback</a></li>
                    <li><a href="#office" data-toggle="tab">Offices Locations</a></li>
                    <li><a href="#customer" data-toggle="tab">Customer Service</a></li>
                    <li><a href="#free" data-toggle="tab">Request for Free Demo</a></li>
                    <li><a href="#partner" data-toggle="tab">Become a Trade Partner</a></li>
                </ul>
            </div>

            <div class="col-xs-9">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="feedback">
                        <h4>Feedback Form</h4>												
                        <div class="content form-content">
                            <p>Being a customer oriented company we would love to hear your valuable feedback, which would help us serve you better.</p>
                            <form method="post" name="feedback_form" action="thanks_contact.php">
                                <input type="hidden" name="feedback_form" value="feedback" />
                                <div class="field half left">
                                    <label>First Name<span>*</span> :</label>
                                    <input type="text" name="f_name" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Last Name<span>*</span> :</label>
                                    <input type="text" name="l_name" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Contact Number<span>*</span> :</label>
                                    <input type="text" name="contact_number" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Email<span>*</span> :</label>
                                    <input type="text" name="email" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Company Name :</label>
                                    <input type="text" name="company" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Designation :</label>
                                    <input type="text" name="designation" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Address Line 1 :</label>
                                    <input type="text" name="address1" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Address Line 2 :</label>
                                    <input type="text" name="address2" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>City :</label>
                                    <input type="text" name="city" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>State :</label>
                                    <input type="text" name="state" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Pin :</label>
                                    <input type="text" name="pin" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Country :</label>
                                    <select name="country" class="form-control">
                                        <option value="">Select Country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AG">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AG">Antigua &amp; Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AA">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BL">Bonaire</option>
                                        <option value="BA">Bosnia &amp; Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BC">British Indian Ocean Ter</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="IC">Canary Islands</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CD">Channel Islands</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CI">Christmas Island</option>
                                        <option value="CS">Cocos Island</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CC">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CT">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CB">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="TM">East Timor</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FA">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="FS">French Southern Ter</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GB">Great Britain</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HW">Hawaii</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IA">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IR">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="NK">Korea North</option>
                                        <option value="KS">Korea South</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia</option>
                                        <option value="MG">Madagaskent</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="ME">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MI">Midway Islands</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Nambia</option>
                                        <option value="NU">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="AN">Netherland Antilles</option>
                                        <option value="NL">Netherlands (Holland, Europe)</option>
                                        <option value="NV">Nevis</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nikentagua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NW">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau Island</option>
                                        <option value="PS">Palestine</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PO">Pitcairn Island</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="ME">Republic of Montenegro</option>
                                        <option value="RS">Republic of Serbia</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="NT">St Barthelemy</option>
                                        <option value="EU">St Eustatius</option>
                                        <option value="HE">St Helena</option>
                                        <option value="KN">St Kitts-Nevis</option>
                                        <option value="LC">St Lucia</option>
                                        <option value="MB">St Maarten</option>
                                        <option value="PM">St Pierre &amp; Miquelon</option>
                                        <option value="VC">St Vincent &amp; Grenadines</option>
                                        <option value="SP">Saipan</option>
                                        <option value="SO">Samoa</option>
                                        <option value="AS">Samoa American</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome &amp; Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="OI">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TA">Tahiti</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad &amp; Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TU">Turkmenistan</option>
                                        <option value="TC">Turks &amp; Caicos Is</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States of America</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VS">Vatican City State</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VB">Virgin Islands (Brit)</option>
                                        <option value="VA">Virgin Islands (USA)</option>
                                        <option value="WK">Wake Island</option>
                                        <option value="WF">Wallis &amp; Futana Is</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZR">Zaire</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="field full clearfix">
                                    <label>Feedback<span>*</span> :</label>
                                    <textarea name="feedback" class="form-control"></textarea>
                                </div>
                                <div class="field half right submit">
                                    <input type="submit" class="btn btn-primary btn-sm" value="SUBMIT" onClick="return chk_feedback();" />
                                    <input type="reset" class="btn btn-primary btn-sm" value="CLEAR" style="margin-left:10px;" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="office">
                        <div class="col-md-6">
                            <h4>Head Office</h4>
                            <div class="quick-info-content clearfix">
                                <div class="left">
                                    <p class="clearfix address">
                                        <span>Address :</span>
                                        <span class="address-detail">
                                            KENT RO Systems Ltd.<br>
                                            A-2,  Sector-59<br>
                                            Noida 201309,<br>
                                            Uttar Pradesh, India
                                        </span>
                                    </p>
                                    <p class="phone">Phone : +91-120-3075075</p>
                                    <p class="email">Email : <a href="mailto:sales@kent.co.in">sales@kent.co.in</a></p>
                                </div>								
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Other Office Locations</h4>
                            <p>For Branch Offices, Please select your state below.</p>
                            <div class="field full clearfix">
                                <select name="office_state" id="office_state" class="form-control left">
                                    <option>Select States</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>									 
                            </div>
                            <div class="field full" style="margin-top:7px;">
                                <input type="submit" class="btn btn-primary btn-sm left" value="FIND" id="ajaxButton"  >
                            </div>
                        </div>						
                        <div class="office-locations">						 
                            <div class="clearfix locations-result">
                                <div id="LoadingImage" style="display:none">
                                    <img src="http://www.kent.co.in/assets/images/ajax-loader.gif">
                                </div>
                                <div id="result"></div>
                            </div>
                        </div>	
                    </div>
                    <div class="tab-pane" id="customer">
                        <h4>Customer Service</h4>
                        <div class="customer-service">
                            <p>For service related queries in Delhi/NCR only, call our helpline number on<br/>+91-120-4669666 (Monday to Saturday, 9:00am to 5:30pm) or you can contact us at<br/>the following address:</p>
                            <p>
                                KENT RO Systems Ltd<br />
                                C-15,<br />
                                Sector-7,
                                <br />
                                Noida - 201301,<br />
                                Uttar Pradesh, India<br />
                                E-mail : <a href="mailto:service@kent.co.in">service@kent.co.in</a>
                            </p>
                            <p>We do not have any authorized service franchisee in Delhi/NCR<br />Kindly contact the above mention number only for service in Delhi/NCR</p>
                            <p><strong>For areas outside Delhi/NCR, kindly contact the authorized service franchisee of your area.</strong></p>
                            <div class="clearfix"></div>
                            <div class="field">
                                <form>
                                    <div class="col-md-12">
                                        <select name="state_franchisee" id="state_franchisee" class="form-control left" >
                                            <option value="">Select State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chattisgarh">Chattisgarh</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Tripura">Tripura</option>
                                        </select>
                                    </div>
                                    <div class="full col-md-12">
                                        <input type="submit" class="btn btn-primary btn-sm left" value="FIND" id="ajaxButton_franchisee" />
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix locations-result">
                                <div id="LoadingImage" style="display:none">
                                    <img src="http://www.kent.co.in/assets/images/ajax-loader.gif">
                                </div>
                                <div id="result_franchisee"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="free">
                        <h4>Request for Free Demo</h4>												
                        <div class="content form-content request">
                            <p>To take a closer look at our products, request a free demo right at your doorstep.</p>
                            <form name="demo_form" method="post" action="thanks_contact.php">
                                <input type="hidden" name="feedback_form" value="demo_request" />
                                <div class="field half left">
                                    <label>First Name<span>*</span> :</label>
                                    <input type="text" name="f_name" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Last Name<span>*</span> :</label>
                                    <input type="text" name="l_name" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Contact Number<span>*</span> :</label>
                                    <input type="text" name="contact_number" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Email<span>*</span> :</label>
                                    <input type="text" name="email" class="form-control" />
                                </div>								
                                <div class="field half left">
                                    <label>Address Line 1<span>*</span> :</label>
                                    <input type="text" name="address1" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Address Line 2 :</label>
                                    <input type="text" name="address2" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>City<span>*</span> :</label>
                                    <input type="text" name="city" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>State<span>*</span> :</label>
                                    <select name="state" class="form-control">
                                        <option value="">Select State</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Orissa">Orissa</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="field half left">
                                    <label>Country<span>*</span> :</label>
                                    <input type="text" value="India" disabled="disabled" name="country" class="form-control" />
                                </div>
                                <div class="clearfix"></div>
                                <div class="field half left">
                                    <label>Preferred Date<span>*</span> :</label>
                                    <input type="date" id="datepicker" name="prefer_date" value="Select a Date" class="form-control" />
                                </div>
                                <div class="field half right time col-md-6 parent-3">
                                    <label>Preferred Time :</label><br />
                                    <select class="prefrday form-control w30" name="prefr_hour">
                                        <option value="">HR</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                    <select class="prefrday form-control w30" name="prefr_min">
                                        <option value="">MIN</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                    </select>
                                    <select class="prefrday form-control w30" name="prefr_time">
                                        <option>AM</option>
                                        <option>PM</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <div class="field full product-list">
                                    <label>Products<span>*</span> (Select Minimum 1):</label><br />
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Mineral RO Water Purifiers" name="Mineral_RO_Water_Purifiers"> KENT's Mineral RO Water Purifiers 
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Gravity based UF Water Purifiers" name="Gravity_based_UF_Water_Purifiers"> Gravity based UF Water Purifiers
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="UV Water Purifiers" name="UV_Water_Purifiers"> UV Water Purifiers
                                    </label>
                                </div>
                                <div class="field full">
                                    <label>Comments<span>*</span></label>
                                    <textarea class="form-control" name="comments"></textarea>
                                </div>
                                <div class="field half right submit">
                                    <input type="submit" class="btn btn-primary btn-sm" value="SUBMIT" onClick="return chk_demoform();" />
                                    <input type="reset" class="btn btn-primary btn-sm" value="CLEAR" style="margin-left:10px;" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="partner">
                        <h4>Become a Trade Partner</h4>												
                        <div class="content form-content trade-partner">
                            <p>Are you a retailer? Freelancer? Entrepreneur? Service Provider?</p>
                            <p>With the penetration of water purifiers still being less than 5% in India, there is a huge opportunity for growth in this category. With the quality of water, air and food deteriorating day by day, the market is only bound to grow. In order to further establish ourselves as market leaders within the water purification industry, we are constantly striving to expand our network and reach with our innovative products.</p>
                            <p>The KENT brand is recognized for its industry leading innovation, quality and certified performance. Whether you are a distributor, retailer, entrepreneur or a freelance sales agent, we have tailored solutions to help you in becoming a trade partner. Becoming a trade partner provides you with the benefits of our existing values along with comprehensive sales and marketing support designed to maximize your profit. Your success is our success and to ensure that, we help you in setting goals, perform periodic reviews and provide feedback which will lead to successful execution.</p>
                            <form name="trade_partner_form" method="post" action="thanks_contact.php">
                                <input type="hidden" name="trade_partner_form" value="trade_partner" />
                                <div class="field half left">
                                    <label>First Name<span>*</span> :</label>
                                    <input type="text" name="f_name" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Last Name<span>*</span> :</label>
                                    <input type="text" name="l_name" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Contact Number<span>*</span> :</label>
                                    <input type="text" name="contact_number" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Email<span>*</span> :</label>
                                    <input type="text" name="email" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Company Name :</label>
                                    <input type="text" name="company" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Designation :</label>
                                    <input type="text" name="designation" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Address Line 1 :</label>
                                    <input type="text" name="address1" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Address Line 2 :</label>
                                    <input type="text" name="address2" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>City<span>*</span> :</label>
                                    <input type="text" name="city" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>State<span>*</span> :</label>
                                    <input type="text" name="state" class="form-control" />
                                </div>
                                <div class="field half left">
                                    <label>Pin :</label>
                                    <input type="text" name="pin" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Country<span>*</span> :</label>
                                    <select name="country" class="form-control">
                                        <option value="">Select Country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AG">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AG">Antigua &amp; Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AA">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BL">Bonaire</option>
                                        <option value="BA">Bosnia &amp; Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BC">British Indian Ocean Ter</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="IC">Canary Islands</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CD">Channel Islands</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CI">Christmas Island</option>
                                        <option value="CS">Cocos Island</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CC">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CT">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CB">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="TM">East Timor</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FA">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="FS">French Southern Ter</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GB">Great Britain</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HW">Hawaii</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IA">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IR">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="NK">Korea North</option>
                                        <option value="KS">Korea South</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia</option>
                                        <option value="MG">Madagaskent</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="ME">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MI">Midway Islands</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Nambia</option>
                                        <option value="NU">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="AN">Netherland Antilles</option>
                                        <option value="NL">Netherlands (Holland, Europe)</option>
                                        <option value="NV">Nevis</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nikentagua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NW">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau Island</option>
                                        <option value="PS">Palestine</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PO">Pitcairn Island</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="ME">Republic of Montenegro</option>
                                        <option value="RS">Republic of Serbia</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="NT">St Barthelemy</option>
                                        <option value="EU">St Eustatius</option>
                                        <option value="HE">St Helena</option>
                                        <option value="KN">St Kitts-Nevis</option>
                                        <option value="LC">St Lucia</option>
                                        <option value="MB">St Maarten</option>
                                        <option value="PM">St Pierre &amp; Miquelon</option>
                                        <option value="VC">St Vincent &amp; Grenadines</option>
                                        <option value="SP">Saipan</option>
                                        <option value="SO">Samoa</option>
                                        <option value="AS">Samoa American</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome &amp; Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="OI">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TA">Tahiti</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad &amp; Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TU">Turkmenistan</option>
                                        <option value="TC">Turks &amp; Caicos Is</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States of America</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VS">Vatican City State</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VB">Virgin Islands (Brit)</option>
                                        <option value="VA">Virgin Islands (USA)</option>
                                        <option value="WK">Wake Island</option>
                                        <option value="WF">Wallis &amp; Futana Is</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZR">Zaire</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="field half left">
                                    <label>Geographical Area of Interest<span>*</span> :</label>
                                    <input type="text" name="geographical_area" class="form-control" />
                                </div>
                                <div class="field half right">
                                    <label>Interested Partner Type<span>*</span> :</label>
                                    <select class="form-control" id="Partner_type" name="Partner_type">
                                        <option value="0" selected="selected">Select Partner Type</option>
                                        <option value="Retail Distributor">Retail Distributor</option>
                                        <option value="Retail Outlet">Retail Outlet</option>
                                        <option value="Direct Sales Distributor">Direct Sales Distributor</option>
                                        <option value="Direct Sales Dealer">Direct Sales Dealer</option>
                                        <option value="Kent Shoppee (Excusive Kent Outlet)">KENT Shoppee (Excusive KENT Outlet)</option>
                                        <option value="Service Franchisee">Service Franchisee</option>
                                    </select>
                                </div>
                                <div class="field full clearfix business-list">
                                    <label>Current Business<span>*</span> :</label><br />
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="current_bussiness_sales" value="sales">Sales
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="current_bussiness_service" value="kent">Service
                                    </label>
                                </div>
                                <div class="field half left">
                                    <label>Products Dealing In<span>*</span></label>
                                    <input type="text" name="products_dealing" class="form-control" />
                                </div>
                                <div class="field half right" style="position:relative;">
                                    <label>Brands Dealing In<span>*</span></label>
                                    <input type="text" name="brands_dealing" class="form-control" />
                                    <!--
                                    <div id="Retail-Distributor" class="Interested-Partner">
                                        Parties interested in distribution of KENT products to retail outlets dealing in white goods and/or home appliances 
                                    </div>
                                    <div id="Retail-Outlet" class="Interested-Partner">
                                        Parties involved in running a retail shop selling white goods and/or home appliances and interested in representing KENT products 
                                    </div>
                                    <div id="Direct-Sales-Distributor" class="Interested-Partner">
                                        Parties interested in hiring 15+ direct sales executives and engaging in door to door sales of KENT Products 
                                    </div>
                                    <div id="Direct-Sales-Dealer" class="Interested-Partner">
                                        Parties interested in hiring 5+ direct sales executives and engaging in door to door sales of KENT Products
                                    </div>
                                    <div id="Kent-Shoppe" class="Interested-Partner">
                                        Parties interested in opening an exclusive KENT only retail outlet
                                    </div>
                                    <div id="Service-Franchisee" class="Interested-Partner">
                                        Parties interested in doing after-sales service and installation of KENT products
                                    </div>
                                    -->
                                </div>
                                <div class="field full clearfix">
                                    <label>Comments :</label>
                                    <textarea name="feedback" class="form-control"></textarea>
                                </div>
                                <div class="field half right submit">
                                    <input type="submit" class="btn btn-primary btn-sm" value="SUBMIT" onClick="return chk_tradeform();" />
                                    <input type="reset" class="btn btn-primary btn-sm" value="CLEAR" style="margin-left:10px;" />
                                </div>

                            </form>							
                        </div>
                    </div>
                </div>
            </div>  
        </section>
    </div><!-- wraper ends here -->
    <!-- Navigation -->
    <?php
    include_once FP_ROOT . 'includes/nav-home.php';
    ?>                
    <?php
    include_once FP_ROOT . 'includes/fp-footerLinks.php';
    include_once FP_ROOT . 'includes/foot-script.php';
    include_once FP_ROOT . 'includes/fp-innerScript.php';
    ?>
    <link href="./_/css/bootstrap.vertical-tabs.min.css" type="text/css" rel="stylesheet" />
</body>
</html>
