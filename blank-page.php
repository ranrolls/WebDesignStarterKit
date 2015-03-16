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
        <section class="mainContent row" data-role="content">
            <h1>Frequently Asked Questions</h1>
            <h3>How is the water quality degrading gradually in our time? </h3>
            <p> Most of the time, tap water is not safe for drinking due to heavy industrial and environmental pollution. Toxic bacteria, chemicals and heavy metals routinely penetrate and pollute our natural water sources making people sick while exposing them to long term health consequences. Municipal water supplied for drinking is also not safe due to poor pipeline quality, parallel sewage pipelines, low maintenance, etc. Contaminants range from naturally-occurring minerals to man-made chemicals and by-products and microbiological organisms like bacteria, viruses and other pathogens, which cause serious diseases like Gastro-enteritis, diarrhea, paratyphoid, dysentery, etc.
            </p><ul><li>
                    River water, which is our primary source of water, gets contaminated due to various reasons such as direct disposal of sewage by municipalities, excessive discharge of industrial pollutants, use for daily chores like washing, bathing, livestock bathing, garbage disposal, etc.
                </li><li>Water sourced from groundwater too has deteriorated due to the excessive use of pesticides & insecticides in agriculture, which seep into the groundwater as well as get washed away into the rivers. Decreasing levels of groundwater also attracts natural contaminants present in the earth such as Arsenic, Fluoride, Lead, Heavy Metals, which make the water hard.
                </li><li>Our municipalities are not well equipped to completely purify the water we drink. They are unable to remove harmful dissolved impurities as they use outdated methods of purification such as chlorination and filtration. The pipes in which the water is supplied are rusty which makes the municipal water polluted and the overhead tanks in which water is stored are breeding grounds for bacteria and viruses as they are seldom cleaned.
                </li></ul>
            </p>
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
