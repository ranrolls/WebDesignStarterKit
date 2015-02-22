<?php 
	include 'plug/php-operation/compile.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--    
    
	****************    Welcome to   ***************
        
        Everything almost relating to __ used here
        
        My review is jq mobile or css grid system in jq is not as good as bootstrap has
        
        I have used jq here because of its mobile easy pagination system,
        
        its big ui gallary although it carousel is still not responsive,
        
        Its menu system is not good for extra small screen or 320px,
        
        and images are need to be made responsive in jq by giving them a custom class
        
        of width 100% .  jq ui and custom theme which you can download according to 
        
        your project requirement is good.
        
        This almost no content - blank page with jq + boilerplate embedded
    
-->   
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ran custom starter kit with boilerplate, modernizr, jquery, tinyjs, less, json</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory 
        <link rel="stylesheet" href="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.css" />
        -->
        <link rel="stylesheet" href="_/css/normalize.css" /><!-- browser reset included here -->
        <link rel="stylesheet" href="_/css/main.css" /><!-- special reset for chrome browsers here -->

		<link rel="stylesheet" type="text/css" href="_/css/jquery.mobile-1.4.0.min.css" />
        <link rel="stylesheet" type="text/css" href="_/css/jqm-demos.css" />
        
        <!-- Bootstrap core CSS 	-->
        <link href="_/css/bootstrap.min.css"" type="text/css" rel="stylesheet" />
        <link href="_/css/bootstrap-theme.min.css"" type="text/css" rel="stylesheet" />
  
        <!-- Custom styles for this template -->
        <link href="_/css/grid.css"" type="text/css" rel="stylesheet" />

        <script src="_/js/vendor/modernizr-2.6.2.min.js"></script>
        
      
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


<div class="wrap">      
<?php
	
	echo $content1;

?>
      
</div><!-- wraper ends here -->
	
	
        

<!-- 	<script src="http://code.jquery.com/jquery-[version].min.js"></script>
	<script src="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.js"></script>		-->
	
	
	<script src="_/js/vendor/jquery-1.9.1.min.js"></script>
<!--	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	-->
    <script>window.jQuery || document.write('<script src="_/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="_/js/vendor/jquery.mobile-1.4.0.min.js"></script>
    
    <link href="_/css/carousel.css" rel="stylesheet">
    <script src="_/js/vendor/bootstrap.min.js"></script>
    <script src="_/js/vendor/carousel.js"></script>

    <link rel="stylesheet/less" href="_/css/cs.less" type="text/css"><!-- your custom lesss css here -->
    <script src="_/js/vendor/less.js"></script>
    <link rel="stylesheet" href="_/css/cs.css"><!-- your custom css here -->  		
	
	
	<script src="_/js/plugins.js"></script><!-- plugin.js is your custom js use anyway you like in jQ  -->
    <script src="_/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
	</body>
</html>
