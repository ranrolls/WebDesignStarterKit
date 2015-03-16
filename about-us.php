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
    <div class="wrap aboutUs" data-role="content">
        <div class="row aboutUsBanner">
            <div class="col-md-6">
                <img src="img/pages/About-Us-homepage.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-6">
                <h1 class="cW">About Us</h1>
                <p> 
                    bluebird is a reputed leading Brand of Automatic Voltage Stabilizers,Servo Voltage Stabilizers, Constant Voltage Transformers & Control/Isolation Transformers for more than past Three Decades.

                </p>
                <p> 
                    Our products are well appreciated and have received much recognition for their quality. We strive to offer Best Quality at best competitive rates.

                </p>
                <p>
                    Our company owns advanced equipment, talented and professional staff, and complete production and operation methods with high quality and at favourable price, our products have earned good reputation among customers.
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 ">
                <p>
                    Bluebird Water purifiers is the child company of Bluebird Power Controls Pvt. Ltd.. We are following in the same footsteps for our new venture of water purifying systems. With more experience and available resources, we are striving for highest innovations and insights about the role of technology in our industry. With a large dealer network of over 600 dealers and a strong foundation, our mission is to create millions of satisfied customers. 
                </p>
            </div>
        </div>
        <section class="mainContent row">
            <div class="col-md-4 pR0">
                <div class="teaser-img">
                    <img src="img/pages/our-vision.jpg" class="img-responsive" alt=""/>
                </div>
                
                <h2>Our Vision</h2>
                <p>
                    To make pure clean water available in all areas of India and to people who have little/no access to pure drinking water. To innovate and develop best possible water treatment systems. 
                </p>
            </div>
            <div class="col-md-4 pR0">
                <div class="teaser-img">
                    <img src="img/pages/mission.png" class="img-responsive" alt=""/>
                </div>
                
                <h2>Our Mission</h2>
                <p>
                    To create homely relationships with all our customers and our employees. To achieve highest quality providers in purification systems and at the cheapest prices available. 
                </p>
            </div>
            <div class="col-md-4">
                <div class="teaser-img">
                    <img src="img/pages/our-value.jpg" class="img-responsive" alt=""/>
                </div>
                <h2>Our Value</h2>
                <p>
                <ul>
                    <li>
                        To be able to proudly face God in any circumstance.
                    </li>
                    <li>
                        Honesty and fair dealing with everyone.
                    </li>
                    <li>
                        Talent Acquisition and promotion driven by honesty, loyalty and discipline.
                    </li>
                    <li>
                        Customer comes first.
                    </li>
                    <li>
                        Quality is more important than quantity.
                    </li>
                    <li>
                       Leadership through technology.
                    </li>
                </ul>
                </p>
            </div>
        </section>
    </div><!-- wraper ends here -->
    <!-- Navigation -->
    <?php
    include_once FP_ROOT . 'includes/nav-home.php';
    ?>                
    <?php
    include_once FP_ROOT . 'includes/fp-afterContent.php';
    include_once FP_ROOT . 'includes/fp-footerLinks.php';
    include_once FP_ROOT . 'includes/foot-script.php';
    include_once FP_ROOT . 'includes/fp-innerScript.php';
    ?>
</body>
</html>
