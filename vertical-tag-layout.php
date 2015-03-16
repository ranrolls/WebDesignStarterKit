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
                                    </select>
                                    <select class="prefrday form-control w30" name="prefr_min">
                                        <option value="">MIN</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
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
