<?php
$requesturi = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
date_default_timezone_set("Asia/Kolkata");
$pos = strpos($requesturi, "duniya");

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
    <p class="chromeframe">
        You are using an <strong>outdated</strong> browser. 
        Please <a href="http://browsehappy.com/">upgrade your browser</a> or
        <a href="http://www.google.com/chromeframe/?redirect=true">activate 
        Google Chrome Frame</a> to improve your experience.
    </p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <div class="wrap">
        <?php
        include_once FP_ROOT . 'includes/fp-beforeContent.php';
        ?>
        <section class="mainContent home" data-role="content">
            <div class="row">
                <div class="col-md-4 features">
                    <span>features</span>
                    <div id="accordion1">
                            <h3>Large Tank </h3>
                            <div>
                                <p>
                                    Enough space in all domestic model BluebirdPure Water storage Tanks for a family of 5 people.
                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Make better Quality water at home than any other bottled water</h3>
                            <div>
                                <p>
                                    Whatever source of water you provide the machine with, it purifies that water into a better quality water than the market available bottled water.

                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Better Taste As per Each Individual Customer</h3>
                            <div>
                                <p>
                                    Choose your own taste of water at the time of installation by asking our service executive for the same. Call our customer support for any help.

                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Automatic On and Off and Flushing</h3>
                            <div>
                                <p>
                                    The whole RO purification system switches On and Off automatically and also flushes out the dirty elements in the filters after it is done filtering, providing a longer life span for each filter.

                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Great purification Capacity</h3>
                            <div>
                                <p>
                                    At 15L/Hr purification capacity, and many times purifying water almost 1 Liter per minute, it’s ideal for a whole family. 

                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Hard Plastic Cabinet</h3>
                            <div>
                                <p>
                                    Made by food grade ABS plastic.

                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Friendly Helpline Support</h3>
                            <div>
                                <p>
                                    Service Executive available at your home within 24hrs of your call made to our friendly customer support center. 

                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Works against all water sources</h3>
                            <div>
                                <p>
                                    Our systems can purify any water source applied to it. Stored tank water, borewell, tap, municipal water, brackish or salty water.

                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                    </div>
                </div>
                <div id="myCarousel" class="col-md-4 teaser carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="teaserBg">
                                <!--        <h4>Did You Know?</h4>      -->
                            </div>
                            <div class="dbg">
                                <p>
                                    Toxic Chemicals, bacteria and viruses routinely penetrate our natural water sources. And also the water coming from our taps due to heavy industrial and environmental pollution.

                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="teaserBg">
                                <!--        <h4>Did You Know?</h4>      -->
                            </div>
                            <div class="dbg">
                                <p>
                                    Most Conventional RO systems remove all the essential minerals from the water too.

                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="teaserBg">
                                <!--        <h4>Did You Know?</h4>      -->
                            </div>
                            <div class="dbg">
                                <p>
                                    Boiling of water does not completely purify the water!

                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="teaserBg">
                                <!--        <h4>Did You Know?</h4>      -->
                            </div>
                            <div class="dbg">
                                <p>
                                    BluebirdPure RO are made by following very stringent quality quality standards

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <p class="title">Did You Know?</p>
                </div>
                <div class="col-md-4 advantages">
                    <span>advantages</span>
                    <div id="accordion2">
                            <h3>Makes Water alkaline in nature</h3>
                            <div>
                                <p>
                                    Increases the pH value of the water by serving minerals like Ca, Mg, Na and K needed for a healthy body. 
                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Bio-Green Technology</h3>
                            <div>
                                <p>
                                    All Natural mineral ceramic balls and anti-bacterial ceramic balls, keeping it clean and natural.
                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Ice-Tray</h3>
                            <div>
                                <p>
                                    An Extra Ice-tray for the water storage tank to easily add ice to a room temperature stored water. 
                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Removes all Impurities</h3>
                            <div>
                                <p>
                                    Removes all Impurities in water including harmful elements like lead, arsenic, pesticides and fluorides etc.
                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Drink pure, healthy and Tasty Water!</h3>
                            <div>
                                <p>
                                    Ask our service guy to make the purified output water according to your taste preference! 
                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
                            </div>
                            <h3>Auto-Flushing System</h3>
                            <div>
                                <p>
                                    Flushing out all the filters once, after the purification system has automatically stopped. Giving longer life for all filters. 
                                </p>
                                <button data-role="none" type="button" class="btn btn-primary btn-xs"><a data-role="none" href="#" title="read more">Read More...</a></button>
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
    include_once FP_ROOT . 'includes/fp-afterContent.php';
    include_once FP_ROOT . 'includes/fp-footerLinks.php';
    include_once FP_ROOT . 'includes/foot-script.php';
    ?>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="_/js/vendor/jquery-ui-1-11-3.min.js" type="text/javascript"></script>
    <script>
        $(function () {
            var icons = {
                header: "ui-icon-plus",
                activeHeader: "ui-icon-minus"
            };
            $("#accordion1").accordion({
                icons: icons,  heightStyle: "content"
            });
            $("#accordion2").accordion({
                icons: icons,  heightStyle: "content"
            });
        });
    </script>

    <link href="_/css/carousel.css" rel="stylesheet">
    <script src="_/js/vendor/carousel.js"></script>

</body>
</html>
