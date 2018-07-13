<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"><html>
    <head>
        <title>| STUDIO GIGLIO |</title>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="title" content="Studio Giglio">
        <meta name="description" content="Studio Giglio">
        <meta name="keywords" content="Studio Giglio avvocati consolato filippine ">
        <meta name="author" content="Balbi Martino">
        <meta name="copyright" content="Io-Media">
        <meta http-equiv="content-language" content="IT">
        <meta name="robots" content="INDEX,FOLLOW">
        <meta name="creation_Date" content="12/06/2013">
        <meta name="revisit-after" content="7 days">


        <link href="css/core.css" rel="stylesheet" type="text/css" >
        <link href="css/stile.css" rel="stylesheet" type="text/css" >
        <link href="css/consolato.css" rel="stylesheet" type="text/css" >

        <script type="text/javascript" src="js/jquery.min.js"></script>

        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/jquery.hook.normalize.bgpos.js"></script>
        <script type="text/javascript" src="js/jquery.scrollto.js"></script>
        <script type="text/javascript" src="js/jquery.backgroundpos.js"></script>
        <script type="text/javascript" src="js/modernizer.js"></script>
        <script type="text/javascript" src="js/core.js"></script>

        <!--SLIDER-->
        <link rel='stylesheet' id='layerslider_css-css'  href='css/layerslider.css' type='text/css' media='all' >
        <script type='text/javascript' src='js/layerslider.kreaturamedia.jquery.js'></script>
        <script type='text/javascript' src='js/jquery-easing-1.3.js'></script>
        <script type='text/javascript' src='js/jquerytransite.js'></script>
        <script type='text/javascript' src='js/layerslider.transitions.js'></script>

        <!--Lightbox-->
        <script  type="text/javascript" src="js/lightbox.js"></script>
         <script  type="text/javascript" src="js/jquery.boxy.js"></script>
        <link href="css/lightbox.css" rel="stylesheet" >


        <!--slider news-->
        <script type="text/javascript" src="js/jquery.aw-showcase.js"></script>
        <link rel="stylesheet" href="css/style.aw-showcase.css" >

        <!--jpages-->
        <script type="text/javascript" src="js/jPages.js"></script>
        <link rel="stylesheet" href="css/jPages.css">
        <link rel="stylesheet" href="css/animate.css">
		<link href="css/boxy.css" rel="stylesheet" >


        <!--NyroModal-->
        <link rel="stylesheet" href="css/nyroModal.css" type="text/css" media="screen" >
        <script type="text/javascript" src="js/jquery.nyroModal.custom.js"></script>
        <!--[if IE 6]>
                <script type="text/javascript" src="js/jquery.nyroModal-ie6.min.js"></script>
        <![endif]-->

        <!--Switch lingua-->
        <link href="css/jquery.switch.css" type="text/css" rel="stylesheet" >
        <script type="text/javascript" src="js/jquery.switch.min.js"></script>


        <!--loader-->
              
        <script type="text/javascript" src="js/script.js"></script>
 

        
    </head>
    
    <body id="bodyhome" <?php if(!isset($_GET['lang'])){ ?> style="background:#445D7B;" <?php } ?> >
   
        <!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
 	</div>
        <?php
        include 'lib/funzioni.php';
        include 'lib/lingua.php';
        
        ?>
        <div id="corpo_index">
            <div id="header">
                <img alt="" src="img/logo_giglio.png">
            </div>
			
            <div id="freccia_header">
                <img alt="image" src="img/freccina_header.png">
            </div>
			<?php 
				if(!isset($_GET['lang']))
				{ ?>
				<div id="corpo">
					<div   style="background: none; float:left; text-align:center; position:absolute; left:50%; margin-left:-180px; top:250px;">
                    <a href="index.php?lang=it">
                        <img alt="image" id="img_giglio" src="img/it.png">
                        <p style="color:#fff;">Italiano</label></p>
                    </a>
					</div>

					<div  style="background: none; float:left; text-align:center;  position:absolute; left:50%; margin-left:50px; top:250px;">
                    <a href="index.php?lang=eng">
                        <img alt="image" id="img_consolato" src="img/en.png">
                        <p  style="color:#fff;">English</p>
                    </a>
                </div>
			</div>
					 <?php } else {   ?>
            <div id="corpo">
                <div class="cerchio_home" id="giglio_home">
                    <a>
                        <img alt="image" id="img_giglio" src="img/giglio_logo.png">
                        <p><?= $index_studio_p ?><br><label><?= $index_studio_l ?></label></p>
                    </a>
                </div>

                <div class="cerchio_home" id="filippine_home">
                    <a>
                        <img alt="image" id="img_consolato" src="img/consolato_logo.png">
                        <p><?= $index_cons1 ?><br> <?= $index_cons2 ?></p>
                    </a>
                </div>
            </div>
          <?php } ?>
        </div>

        <?php include 'giglio_index.php'; ?>
        <?php include 'consolato_index.php'; ?>
        <!-- Preloader -->
<script type="text/javascript">
	//<![CDATA[ 
		$(window).load(function() {
			
			
			// makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
setTimeout(function(){initsito();},1000);	
				 
            })
	//]]>
</script> 
    </body>
</html>