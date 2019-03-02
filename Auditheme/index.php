<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/audi-10-555177.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js.js"></script> <!-- Altid jquery linken först -->
    <!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/npm.js"></script> -->
    <title>Audi Sweden</title>
</head>
<body>
<!------------------------------ ### Header ### ----------------------------------------------------------->
   <header>
<!------------------------------ ### Nav ### -------------------------------------------------------------->
        <nav id="main-nav">
            <div class="responsiv-logga">       
                 <img class="audi-logga-mobil" src="<?php bloginfo('template_url'); ?>/images/logga.png">
            </div>      
        <i class="fas fa-bars"></i>
            <ul>
                <span>
                <a href="#home"><li>START</li><a/>
                <a href="#service"><li>SERVICE</li></a>
                <a href="#service"><li>ÅTERFÖRSÄLJARE</li></a>
                </span>
                    <div id="logo">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/images/logga.png"> 
                        </a>
                    </div>
                <span>
                <a href="#service"><li>PROVKÖR</li></a>
                <a href="#about"><li>OM</li></a>
                <a href="#footer-nav"><li>KONTAKT</li></a>
                </span>
        </ul>
        </nav>
   </header>

<!------------------------------ ### Home page ### -------------------------------------------------------->
   <section id="home">

       <!----Slide Show for homepage-->
       <div class="slideshow"> <?php echo do_shortcode('[smartslider3 slider=7]');?> </div>            
   </section>


<!------------------------------ ### Service page ### ------------------------------------------------------>
   <section id="service">
    
<!------------------------------ ### Header for service / Iconer -------------------------------------------->
    <div id="services-info">
        <ul class="ul-icon">
            <li class="li-icon">
                <a class="a-icon" href="">
                    <div class="icon">
                    <img src="<?php bloginfo('template_url'); ?>/images/car-front-in-magnifier-glass.svg"> 
                    </div>
                    <div class="name" data-text="Bygg din audi">Bygg din audi</div>
                </a>
            </li>  
        </ul>
        
        <ul class="ul-icon">
            <li class="li-icon">
                <a class="a-icon" href="">
                    <div class="icon">
                    <i class="fas fa-tools"></i>
                    </div>
                    <div class="name" data-text="Bygg din audi">Tekniska data</div>
                </a>
            </li>  
        </ul>

        <ul class="ul-icon">
            <li class="li-icon">
                <a class="a-icon" href="">
                    <div class="icon">
                    <img src="<?php bloginfo('template_url'); ?>/images/chassis.svg">
                    </div>
                    <div class="name" data-text="Bygg din audi">Mått</div>
                </a>
            </li>  
        </ul>
        <ul class="ul-icon">
            <li class="li-icon">
                <a class="a-icon" href="">
                    <div class="icon">
                    <img src="<?php bloginfo('template_url'); ?>/images/sedan-car-front.svg">
                    </div>
                    <div class="name" data-text="Bygg din audi">Standadutrustning</div>
                </a>
            </li>  
        </ul>
        <ul class="ul-icon">
            <li class="li-icon">
                <a class="a-icon" href="">
                    <div class="icon">
                    <img src="<?php bloginfo('template_url'); ?>/images/file.svg">
                    </div>
                    <div class="name" data-text="Bygg din audi">Tjänstebil</div>
                </a>
            </li>  
        </ul>
        <ul class="ul-icon">
            <li class="li-icon">
                <a class="a-icon" href="">
                    <div class="icon">
                    <img src="<?php bloginfo('template_url'); ?>/images/brochure.svg">
                    </div>
                    <div class="name" data-text="Bygg din audi">Broschyr & </br> Prisfaktablad</div>
                </a>
            </li>  
        </ul>
    </div>    
 <!------------------------------ ### 4 Boxar 2 text and 2 pictures -------------------------------------------->
 <div class="container">
     <div class="box">
         <img class="audi-blue-picture" src="<?php bloginfo('template_url'); ?>/images/front.jpg">
    </div>
     <div class="box">
         <h3 class="text1">hitta en återförsäljare nära dig</h3>
         <h3 class="text2">välkommen till våra</h3>
         <p class="text3">Du är alltid varmt välkommen till någon av våra återförsäljare. 
            De besvarar gärna alla dina frågor som rör Audi och bilägande och
            bjuder självkart på en schysst kopp kaffe under tiden.
         </p>
         <button>Provkör Idag</button>
     </div>
     
     <div class="box-responsive">
        <img class="audi-blue-picture" src="<?php bloginfo('template_url'); ?>/images/interior.jpg">
     </div>

     <div class="box">
        <h3 class="text1">design & utrustning</h3>
        <h3 class="text2">upplev audi a7</h3>
        <p class="text3">
            Audi A7 - en bil man inte missar: Från de uppgraderade lyktorna med sin
            unika design, via den upprätta fronten med den breda single frame-grillen
            till den coupeliknande silhutten och det skarpskurna bakpartiet - A7
            Sportback är ambassadör för ett nytt revolutionerande formspråk. 
        </p>
     </div>
     <div class="box-screen">
        <img class="audi-blue-picture" src="<?php bloginfo('template_url'); ?>/images/interior.jpg">
     </div>
 </div>     
</section>
<!------------------------------ ### Provkör page ### ------------------------------------------------------>
    <section id="provkör">
        <!--------------- ### Background Img ###----->
        <img class="cockpit-bcg" src="<?php bloginfo('template_url'); ?>/images/cockpitandroad.jpg">
    </section>
<!------------------------------ ### About page ### -------------------------------------------------------->
    <section id="about">
        <!--------------- ### Background Img ###----->
        <img class="cockpit-bcg" src="<?php bloginfo('template_url'); ?>/images/Audi mountainMedtext.jpg">
    </section>
<!------------------------------ ### Contact page ### ----------------------------------------------------->
    <section id="footer-nav">
        <img class="footer-nav-logga" src="<?php bloginfo('template_url'); ?>/images/logga.png">
            <div class="navbar">
                <a href="#home"> start</a> 
                <a href="#service"> service</a> 
                <a href="#service"> återförsäljare</a>
                <a href="#service"> provkör</a> 
                <a href="#provkör"> om oss</a> 
                <a href="#footer-nav"> kontakt</a> 
            </div>
    </section>
<!------------------------------ ### Footer ### ----------------------------------------------------------->
    <footer>
        <p>Digital dummy page by Adwise Media Byrå</p>
    </footer>


<!------------------------------ ### Jquery And Javascripts Link ### ----------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>../js/mobile-menu.js"></script>
</body>
</html>







<?php
// wp_nav_menu( array(
//     'theme_location'    => 'primary',
//     'depth'             => 2,
//     'container'         => 'div',
//     'container_class'   => 'collapse navbar-collapse',
//     'container_id'      => 'bs-example-navbar-collapse-1',
//     'menu_class'        => 'nav navbar-nav',
//     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
//     'walker'            => new WP_Bootstrap_Navwalker(),
// ) );
?>
 










