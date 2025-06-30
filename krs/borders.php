
<?php

  $times = get_open_time();
  $openContent = "";

      if($times || isset($_GET['open'])) {
        $openContent = "
          <div class=\"closing-at-container\">
            Open Now</i>
          </div>
          <div class=\"banner-separator\"></div>
        ";
      } else {
        $openContent = "
          <div class=\"closing-at-container\"></div>
        ";
      }
  
?>

<?php if (stristr($thePage,"about-us")) { 
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-roofing-2.jpg';
} elseif (stristr($thePage,"spray-foam-insulation")) { 
    $siloHeaderImg = '/core/images/templates/des/headers/silo-spray-foam-des.jpg';
} elseif (stristr($thePage,"attic-insulation")) {
    $siloHeaderImg = '/core/images/templates/des/headers/silo-attic-insulation-des.jpg';
} elseif (stristr($thePage,"ice-damming")) {
    $siloHeaderImg = '/core/images/templates/des/headers/silo-ice-damming.jpg';
} elseif (stristr($thePage,"crawl-space-insulation")) {
    $siloHeaderImg = '/core/images/templates/des/headers/silo-crawl-insulation-des.jpg';
} elseif (stristr($thePage,"home-insulation")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-windows.jpg';
} elseif (stristr($thePage,"indoor-air-quality")) {
    $siloHeaderImg = '/core/images/templates/des/headers/silo-airq-des.jpg';
} elseif (stristr($thePage,"home-energy-evaluation")) {
    $siloHeaderImg = '/core/images/templates/des/headers/silo-audit-des.jpg';
} elseif (stristr($thePage,"roof-repair")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-roofing-tools-2.jpg';
} elseif (stristr($thePage,"roof-replacement")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-roofing-worker-1.jpg';
} elseif (stristr($thePage,"commercial-roofing")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-commercial-roofing.jpg';
} elseif (stristr($thePage,"gutters-and-downspouts")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-gutters.jpg';
} elseif (stristr($thePage,"siding")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-siding.jpg';
} elseif (stristr($thePage,"windows-doors")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-windows.jpg';
} elseif (stristr($thePage,"remodeling")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-kitchen.jpg';
} elseif (stristr($thePage,"service-area")) {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-roofing-2.jpg';
} else {
    $siloHeaderImg = '/core/images/templates/spruce/headers/silo-roofing-2.jpg';
} ?>

<!doctype html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>[[title]]</title>
    	<meta name="description" content="[[description]]">
    	<meta name="keywords" content="[[keywords]]">
    	<link rel="icon" href="https://cdn.treehouseinternetgroup.com/cms_images/1253/Klaus-Favicon.png">
        <link rel="preload" fetchpriority="high" href="https://cdn.treehouseinternetgroup.com/cms_images/1253/new-brown-roofing-logo.svg" as="image">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">
    <!-- preload first mm image for responsive, hp only -->
    <?php if ($thePage == "index") { ?>
        <link rel="preload" fetchpriority="high" href="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/format=auto,quality=75/cms_images/1253/mm-500.jpg" as="image" media="(max-width: 500px)">
        <link rel="preload" fetchpriority="high" href="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/format=auto,quality=75/cms_images/1253/mm-800.jpg" as="image" media="(min-width: 500.1px) and (max-width: 1024px)">
        <link rel="preload" fetchpriority="high" href="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/format=auto,quality=75/cms_images/1253/mm-1600.jpg" as="image" media="(min-width: 1024.1px)">
    <?php } ?>
    <?php if ($isCityPage == 0) { ?>
        <link rel="preload" fetchpriority="high" href="<?php echo $siloHeaderImg ?>" as="image">
    <?php } ?>
        <link rel="preconnect" href="https://connect.facebook.net">
        <link rel="preconnect" href="https://tags.w55c.net">
        <link rel="preconnect" href="https://script.hotjar.com">
        <!--<link rel="preconnect" href="https://use.typekit.net">-->
        [[custom_core_v3_9]]
        <style>[[inline_css]]{}</style>
        <!--<script src="https://use.typekit.net/kan2tkp.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>-->
        <!--<script src="https://cdn.jsdelivr.net/npm/pristinejs@0.1.9/dist/pristine.min.js"></script>-->
         <script src="//cdata.mpio.io/js/E35096D329BA0F.js" async defer></script>
    </head>


    <body>
        <div id="template-wrap">
            <nav>
              <section class="navigation-layout">
                <div class="banner"></div>
                <div class="banner-text">

                    <?php echo $openContent; ?>
                  <div class="serving"><b>Serving Fairfield, New Haven and Litchfield Counties</b>
                  </div>

                  <div class="banner-separator"></div>
                  <div class="cta">
                    <span class="cta-text">
                      <a href="tel:<?= $phonenumber; ?>">
                        <svg
                          class="phone"
                          viewBox="0 0 24 24"
                          fill="none"
                          width="20"
                          height="20"
                        >
                          <path
                            d="M22 12C22 10.6868 21.7413 9.38647 21.2388 8.1731C20.7362 6.95996 19.9997 5.85742 19.0711 4.92896C18.1425 4.00024 17.0401 3.26367 15.8268 2.76123C14.6136 2.25854 13.3132 2 12 2V4C13.0506 4 14.0909 4.20703 15.0615 4.60889C16.0321 5.01099 16.914 5.60034 17.6569 6.34326C18.3997 7.08594 18.989 7.96802 19.391 8.93848C19.7931 9.90918 20 10.9495 20 12H22Z"
                            fill="white"
                          />
                          <path
                            d="M2 10V5C2 4.44775 2.44772 4 3 4H8C8.55228 4 9 4.44775 9 5V9C9 9.55225 8.55228 10 8 10H6C6 14.4182 9.58173 18 14 18V16C14 15.4478 14.4477 15 15 15H19C19.5523 15 20 15.4478 20 16V21C20 21.5522 19.5523 22 19 22H14C7.37259 22 2 16.6274 2 10Z"
                            fill="white"
                          />
                          <path
                            d="M17.5433 9.70386C17.8448 10.4319 18 11.2122 18 12H16.2C16.2 11.4485 16.0914 10.9023 15.8803 10.3928C15.6692 9.88306 15.3599 9.42017 14.9698 9.03027C14.5798 8.64014 14.1169 8.33081 13.6073 8.11963C13.0977 7.90869 12.5515 7.80005 12 7.80005V6C12.7879 6 13.5681 6.15527 14.2961 6.45679C15.024 6.7583 15.6855 7.2002 16.2426 7.75732C16.7998 8.31445 17.2418 8.97583 17.5433 9.70386Z"
                            fill="white"
                          />
                        </svg>
                        [[phone]]
                      </a>
                    </span>
                  </div>
                </div>
        
                [[top_nav]]
        
                <div class="logo-container">
                  <a href='/' title="Brown Roofing Company, Inc.">
                    <img class="img" src="https://cdn.treehouseinternetgroup.com/cms_images/1253/new-brown-roofing-logo.svg" alt="Brown Roofing Company, Inc." width="300" height="103" />
                  </a>
                </div>
                <div class="nav-triangle"></div>
                
              </section>
            </nav> 


                <?php if ($thePage == "index") { ?>
                <div id="main-message-slider">
                <div class="container slide" id="main-message">
                    <div class="main-text medium-centered">
                        <h1>
                             <a href="/about-us/coupons.html" class="tagline-link">
                          <span>Splash Into Summer Savings</br><i>-Big Deals on Roofing!</i></span>
                          </a>
                        </h1>
                        <div class="coupon-area">
                             <a href="/about-us/coupons.html" class="tagline-link">
                            <p><strong>$500 OFF</strong></br> A Complete Brown Roofing System!*</p>
                              <p> Limited Time Offer - Click <i>here</i> for coupon</p>
                            <h4 style="font-family: 'Montserrat', sans-serif;">From Western Connecticut's Most Trusted Roofer</h4>
                            </a>
                            <a href="/free-estimate.html" class="button"
                              >Schedule A Free Estimate</a
                            >
                        </div>
                    </div>

                    <?php if ($isMobile == false) { ?>
                    <div class="mm-video-wrap">
                        <video id="mm-video" autoplay muted loop playsinline preload="metadata" width="1920" poster="https://cdn.treehouseinternetgroup.com/cms_images/1253/brown-roofing-5-21-25_bg.jpg" onclick="this.paused ? this.play() : this.pause();">
                            <source src="https://cdn.treehouseinternetgroup.com/cms_images/1253/brown-roofing-5-21-25.mp4" type="video/mp4" />
                        </video>
                    </div>   
                    <?php } ?>
                      <svg
                    class="mm-divider"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1600.01 44.37"
                  >
                    <g id="uuid-45f26e87-d75b-40bc-bfb4-fd8532e1fb76" data-name="Layer 1">
                      <path
                        d="m0,34.91v9.46h1600v-22.56C847.68,66.89,505.82-48.23,0,34.91Z"
                        style="fill: #fff"
                      />
                    </g>
                    <g id="uuid-23f20646-c215-4e43-84ba-066e88cf1508" data-name="Layer 3">
                      <path
                        d="m.05,29.55C258.05-12.12,437-1.53,752.87,12.05c392.71,16.89,499.36,16.87,596.83,15.07,39.13-.72,131.24-2.72,250.31-9.82v12.02s-125.01,7.44-250.93,9.82c-180.76,3.41-596.85-15.11-596.85-15.11C438.45,7.35,258.77-.29,0,41.72l.05-12.16Z"
                        style="fill: #ec2027"
                      />
                    </g>
                  </svg>
                    </div>
                <div id="main-message" class="slide">
                  <picture class="mm-hero">
                    <source
                      media="(max-width: 500px)"
                      srcset="https://cdn.treehouseinternetgroup.com/cms_images/1253/krs-ridge-vent-bg-500.jpg"
                    />
                    <source
                      media="(max-width: 1024px)"
                      srcset="	https://cdn.treehouseinternetgroup.com/cms_images/1253/krs-ridge-vent-bg-800.jpg"
                    />
                    <source
                      media="(min-width: 1025px)"
                      srcset="https://cdn.treehouseinternetgroup.com/cms_images/2721/krs-ridge-vent-bg.jpg"
                    />
                    <img
                      src="	https://cdn.treehouseinternetgroup.com/cms_images/1253/krs-ridge-vent-bg-800.jpg"
                      alt="A roof being repaired"
                    />
                  </picture>
                   <div class="mm-text">
                    <h1>
                      <span>Value &amp; High Quality<br> Workmanship</br> 
                      </span>
                    </h1>
                    <div class="hero-message">
                    <p>Backed By A 50 Year Warranty</p>
                    <h4>From Western Connecticut's Most Trusted Roofer</h4>
                    <a href="/free-estimate.html" class="button"
                      >Schedule A Free Estimate</a
                    >
                     </div>
                  </div>
                  <svg
                    class="mm-divider"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1600.01 44.37"
                  >
                    <g id="uuid-45f26e87-d75b-40bc-bfb4-fd8532e1fb76" data-name="Layer 1">
                      <path
                        d="m0,34.91v9.46h1600v-22.56C847.68,66.89,505.82-48.23,0,34.91Z"
                        style="fill: #fff"
                      />
                    </g>
                    <g id="uuid-23f20646-c215-4e43-84ba-066e88cf1508" data-name="Layer 3">
                      <path
                        d="m.05,29.55C258.05-12.12,437-1.53,752.87,12.05c392.71,16.89,499.36,16.87,596.83,15.07,39.13-.72,131.24-2.72,250.31-9.82v12.02s-125.01,7.44-250.93,9.82c-180.76,3.41-596.85-15.11-596.85-15.11C438.45,7.35,258.77-.29,0,41.72l.05-12.16Z"
                        style="fill: #ec2027"
                      />
                    </g>
                  </svg>
                </div>
                <div id="main-message" class="slide">
                  <picture class="mm-hero">
                    <source
                      media="(max-width: 500px)"
                      srcset="	https://cdn.treehouseinternetgroup.com/cms_images/1253/imroved_new_drip_edge-500.jpg"
                    />
                    <source
                      media="(max-width: 1024px)"
                      srcset="	https://cdn.treehouseinternetgroup.com/cms_images/1253/imroved_new_drip_edge-800.jpg"
                    />
                    <source
                      media="(min-width: 1025px)"
                      srcset="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/quality=75,format=auto/cms_images/3518/imroved_new_drip_edge.jpg"
                    />
                    <img
                      src="	https://cdn.treehouseinternetgroup.com/cms_images/1253/imroved_new_drip_edge-800.jpg"
                      alt="Gutter Shutter"
                    />
                  </picture>
                  <div class="mm-text">
                    <h1>
                      <span>Value &amp; High Quality</br> Workmanship 
                      </span>
                    </h1>
                    <div class="hero-message">
                    <p>Backed By A 50 Year Warranty</p>
                    <h4>From Western Connecticut's Most Trusted Roofer</h4>
                    <a href="/free-estimate.html" class="button"
                      >Schedule A Free Estimate</a
                    >
                     </div>
                  </div>
                  <svg
                    class="mm-divider"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1600.01 44.37"
                  >
                    <g id="uuid-45f26e87-d75b-40bc-bfb4-fd8532e1fb76" data-name="Layer 1">
                      <path
                        d="m0,34.91v9.46h1600v-22.56C847.68,66.89,505.82-48.23,0,34.91Z"
                        style="fill: #fff"
                      />
                    </g>
                    <g id="uuid-23f20646-c215-4e43-84ba-066e88cf1508" data-name="Layer 3">
                      <path
                        d="m.05,29.55C258.05-12.12,437-1.53,752.87,12.05c392.71,16.89,499.36,16.87,596.83,15.07,39.13-.72,131.24-2.72,250.31-9.82v12.02s-125.01,7.44-250.93,9.82c-180.76,3.41-596.85-15.11-596.85-15.11C438.45,7.35,258.77-.29,0,41.72l.05-12.16Z"
                        style="fill: #ec2027"
                      />
                    </g>
                  </svg>
                </div>
                <div id="main-message" class="slide">
                  <picture class="mm-hero">
                    <source
                      media="(max-width: 500px)"
                      srcset="	https://cdn.treehouseinternetgroup.com/cms_images/1253/roofing_set_klaus-hp-500.jpg"
                    />
                    <source
                      media="(max-width: 1024px)"
                      srcset="	https://cdn.treehouseinternetgroup.com/cms_images/1253/roofing_set_klaus-hp-800.jpg"
                    />
                    <source
                      media="(min-width: 1025px)"
                      srcset="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/quality=75,format=auto/cms_images/2721/roofing_set_klaus-hp.jpg"
                    />
                    <img
                      src=""
                      alt=""
                    />
                  </picture>
                  <div class="mm-text">
                      <h1>
                      <span>Value &amp; High Quality</br> Workmanship</br> 
                      </span>
                    </h1>
                    <div class="hero-message">
                    <p>Backed By A 50 Year Warranty</p>
                    <h4>From Western Connecticut's Most Trusted Roofer</h4>
                    <a href="/free-estimate.html" class="button"
                      >Schedule A Free Estimate</a
                    >
                     </div>
                  </div>
                  <svg
                    class="mm-divider"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1600.01 44.37"
                  >
                    <g id="uuid-45f26e87-d75b-40bc-bfb4-fd8532e1fb76" data-name="Layer 1">
                      <path
                        d="m0,34.91v9.46h1600v-22.56C847.68,66.89,505.82-48.23,0,34.91Z"
                        style="fill: #fff"
                      />
                    </g>
                    <g id="uuid-23f20646-c215-4e43-84ba-066e88cf1508" data-name="Layer 3">
                      <path
                        d="m.05,29.55C258.05-12.12,437-1.53,752.87,12.05c392.71,16.89,499.36,16.87,596.83,15.07,39.13-.72,131.24-2.72,250.31-9.82v12.02s-125.01,7.44-250.93,9.82c-180.76,3.41-596.85-15.11-596.85-15.11C438.45,7.35,258.77-.29,0,41.72l.05-12.16Z"
                        style="fill: #ec2027"
                      />
                    </g>
                  </svg>
                </div>
            </div>


              
                        <div class="container" id="homepage-content">

            <?php
            }
            elseif ((stristr($thePage,"free-estimate")) || ($isCityPage == true) || (stristr($thePage,"service-area")) || (stristr($thePage,"roofle")))
            {
            ?>
                <div class="container" id="page-wrap">
                  <div class="row">
                      <div class="columns full-width" id="content-wrap">
            <?php
            }
            else
            {
            ?>
            <?php
            if (stristr($thePage,"about-us"))
            {
            ?>
                <div id="about" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"spray-foam-insulation"))
            {
            ?>
                <div id="spray-foam" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"attic-insulation"))
            {
            ?>
                <div id="attic-insulation" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"ice-damming"))
            {
            ?>
                <div id="ice-damming" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"crawl-space-insulation"))
            {
            ?>
                <div id="crawl-space-insulation" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"home-insulation"))
            {
            ?>
                <div id="home-insulation" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"windows-doors"))
            {
            ?>
                <div id="windows-doors" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"indoor-air-quality"))
            {
            ?>
                <div id="indoor-air-quality" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"home-energy-evaluation"))
            {
            ?>
                <div id="home-energy-evaluation" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"roof-repair"))
            {
            ?>
                <div id="roof-repair" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"roof-replacement"))
            {
            ?>
                <div id="roof-replacement" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"commercial-roofing"))
            {
            ?>
                <div id="commercial-roofing" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"gutters-and-downspouts"))
            {
            ?>
                <div id="gutters-and-downspouts" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"siding"))
            {
            ?>
                <div id="siding" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"windows-doors"))
            {
            ?>
                <div id="windows-doors" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"remodeling"))
            {
            ?>
                <div id="remodeling" class="silo-page-wrap">
            <?php
            }
            elseif (stristr($thePage,"service-area"))
            {
            ?>
                <div id="territory" class="silo-page-wrap">
            <?php
            }
            else
            {
            ?>
                <div id="about" class="silo-page-wrap">
            <?php
            }
            ?>
                  <div class="container" id="silo-header">
                    <div class="silo-header--img">
                        <picture>
                            <img src="<?php echo $siloHeaderImg ?>" alt="header image" width="1300" height="120" >
                        </picture>
                    </div>

                      <div class="row">
                          <div class="columns">
                              <span class="page-title"><?php echo $cmsPageData['page.name']; ?></span>
                          </div>
                      </div>
                  </div><!-- end #silo-header -->
                  <div class="container" id="page-wrap">
                      <div class="row">
                          <div class="medium-9 medium-push-3 columns body" id="content-wrap">
            <?php
            }
            ?>
                                    <!-- Zip search bar -->
            <?php if ($thePage === "service-area") { ?>
            <style>
            /* Zip search styling */
            #zip-lookup-bar {
                padding: 1.5rem 1rem;
                background: #000;
                border-bottom: 2px solid #fff;
            }
            #zip-lookup-bar p {
                color: #fff;
                text-align: center;
                margin-bottom: .5rem;
                font-size: 20px;
            }
            #zip-lookup {
                max-width: 300px;
                margin: 0 auto;
            }
            #zip-search {
                margin: 0;
                font-size: 15px;
                padding: 10px 20px;
                height: 40px;
                margin-bottom: 1rem;
                width: 100%;
            }
            #zip-search-submit {
                margin: 0 !important;
                border-radius: 0 !important;
                height: 40px;
                background: var(--primary-red);
                font-weight: bold;
                text-transform: uppercase;
                width: 100%;
                color: #fff;
                border: none;
                transition: all .3s ease;
            }
            #zip-search-submit:hover {
                background: var(--primary-red);
                color: #fff;
                text-decoration: underline;
                cursor: pointer;
            }
            @media screen and (min-width:440px) {
                #zip-lookup {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                #zip-search {
                    margin-bottom: 0;
                }
            }
            </style>
            
            <div id="zip-lookup-bar">
                <p>Enter your Zip Code to see if we serve your area:</p>
                <form id="zip-lookup" method="GET" action="/zip-search.html">
                    <label for="zip-search" style="display: none;">Zip Code</label>
                    <input type="text" id="zip-search" name="zip" size="16" max-length="10" placeholder="Enter Zip Code"
                        pattern="\d{5}(-\d{4})?" title="Please enter a valid ZIP code">
                    <input id="zip-search-submit" type="submit" class="submit" value="Submit">
                </form>
            </div>
            <?php } ?>
                            [[content]]
                            <?php if($thePage == 'zip-search' && !empty($_GET['zip'])) {
                require_once(ENV_ROOT.'/cms/classes/nav.class.php');
                $confirmationUrl = '/free-estimate';
                $contactWidget = array('isContactWidget' => true, 'confirmationUrl' => $confirmationUrl);
                ob_start();
                require(ENV_ROOT.'/cms/modules/contact.php');
                $contactForm = ob_get_clean();
                $contactForm = preg_replace('/<h1>[\w\s<\/>\S]*<form/','<form', $contactForm);
                echo $contactForm;
                } ?>
                          </div>
            <?php if (($thePage != "index") && ($thePage != "service-area") && ($isCityPage == 0) && ($thePage != "free-estimate") && ($thePage != "free-estimate-fb") && ($thePage != "free-estimate/confirmation"))
           { ?>
                <div class="medium-3 medium-pull-9 columns" id="subnav-left">
                    [[single_silo_nav]]
                </div>
            <?php
            }
            ?>
                  
            <?php if ($thePage != "index") { ?>
                        </div>
                    </div>
            <?php
            }
            ?>

            <?php if (($thePage != "index") && ($thePage != "service-area") && ($isCityPage == 0) && ($thePage != "free-estimate") && ($thePage != "free-estimate-fb") && ($thePage != "free-estimate/confirmation"))
            { ?>
                </div><!-- end #silo-page-wrap -->
            <?php
            }
            ?>

              <?php if (($thePage != "service-area") && ($isCityPage == 0) && ($thePage != "free-estimate") && ($thePage != "free-estimate-fb") ) { ?>

                <div class="container home" id="service-area">
                    <div class="sa-title">
                        <p class="sa-sub">Our Service Area</p>
                        <p class="sa-head">Proudly Serving Connecticut</p>
                    </div>
                    <div class="container home" id="service-map">
                            <div id="gmap-wrap">[[service_area_google_map]]</div>
                    </div>
                    <div class="sa-cities">
                        <div class="sa-city-list">
                            [[city_scroll:100]]
                        </div>
                        <div class="ctr">
                            <a class="btn-gray" href="/service-area.html">View Service Area</a>
                        </div>
                    </div>
                </div>

              <?php
              }
              ?>
            <div class="row" id="fixed-contact">
                <div class="columns area-btn">
                <a href="/service-area.html">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>Service Area</span>
                </a>
                </div>
                <div class="columns phone-btn">
                <a title="[[company]]" href="tel:<?php echo $phonenumber; ?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
                </div>
                <div class="columns quote-btn">
                <a href="/free-estimate.html">
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <span>Free Quote</span>
                </a>
                </div>
            </div>
            <div class="container home" id="footer">
                <div class="row" data-equalizer>
                    <div class="large-7 large-push-5 columns" data-equalizer-watch>
                        <div id="footer-links">
                          <?php
                          $superNav = new nav();
                          $superNav->superMode = 'bottom';
                          echo $superNav->generateSuperMarkup();
                          ?>
                           [[social_footer]]
                        </div>
                    </div>
                    <div class="large-5 large-pull-7 columns" data-equalizer-watch>
                        <div id="footer-contact">
                            <p class="footer-contact-text">Contact Us Online</p>
                            <div class="footer-btn-wrap">
                                <a href="/free-estimate.html" id="footer-btn" class="button btn-round">get a free quote</a>
                            </div>
                            <p class="footer-phone">
                              Or call us at
                                <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
                            </p>
                              <p>
                                Contractor ID: [license number]
                              </p>
                              <p>[[cn-logo]] 
                              </p>
                              <p><img src="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/format=auto,width=145/cms_images/1253/BR_Badge.png" style="max-width: 145px;" width="145" height="135" decoding="async" loading="lazy" alt="badge image" ></p>
                        </div>
                    </div>
          <div> 
          
                <p>[company], 12 Progress Ave., Seymour, CT 06483</p>
            </div>
                </div>
            </div>
            <div class="footer-bar">
                <p>&copy; <?php echo(date('Y')); ?> [company] | <a href="/privacy-policy.html">Privacy Policy</a> | <a href="/terms-of-use.html">Terms of Use</a> | <a href="/sitemap.html">Sitemap</a>
    </div></p>
     
        </div>

         [[custom_core_v3_js]]
 <script src="/core/js/jquery.thScrollable.js" type="text/javascript" defer></script>

 
 <!-- nav / sticky functionality -->
 <script>
!(function () {
  class e {
    realSupernavTag = "real-supernav";
    cloneSupernavTag = "cloned-supernav";
    previousTop = window.scrollY;
    currentTop = 0;
    viewportWidth = window.innerWidth;
    scrollThreshold = 1;

    constructor() {
      this._createClassDefinitions(),
        this._siloFixes(),
        this._cloneNav(),
        this._handleScroll(),
        this._handleResizing();
    }

    _createClassDefinitions() {
      const e =
        "\n      .navigation-clone {\n        position: fixed;\n   display: none;    background:#fff;\n        top: 0;\n        left: 0;\n        right: 0;\n        z-index: 1000;\n        pointer-events: none;\n        transition: all 100ms ease-in-out;\n    opacity:0\n     }\n\n      .navigation-clone .supernav {\n        opacity: 1;\n        transition: all 150ms ease-in-out;\n      }\n\n      .navigation-clone .banner-text {\n        pointer-events: auto;\n      }\n\n      .navigation-clone .logo-container {\n        opacity: 1;\n        transition: all 150ms ease-in-out;\n      }\n\n      .sticky-nav-show {\n   display: block;\n       box-shadow:0 3px 6px #0000004a;\n        background-color: white;\n        opacity: 1;\n        pointer-events: auto;\n      }\n\n      .sticky-nav-show.navigation-clone .supernav {\n        opacity: 1;\n      }\n\n      .sticky-nav-show.navigation-clone .logo-container {\n        opacity: 1;\n      }\n    ";
      this.styleClassDefRef
        ? (this.styleClassDefRef.innerHTML = e)
        : ((this.styleClassDefRef = document.createElement("style")),
          (this.styleClassDefRef.type = "text/css"),
          (this.styleClassDefRef.innerHTML = e),
          document
            .getElementsByTagName("head")[0]
            .appendChild(this.styleClassDefRef));
    }

    _createCompansatingStyles() {
      let e = "";
      (e +=
        "\n      @media (min-width: 1023px) {\n        #silo-container {\n          top: 88px !important;\n        }\n      }\n    "),
        this.styleCompansationDefRef
          ? (this.styleCompansationDefRef.innerHTML = e)
          : ((this.styleCompansationDefRef = document.createElement("style")),
            (this.styleCompansationDefRef.type = "text/css"),
            (this.styleCompansationDefRef.innerHTML = e),
            document
              .getElementsByTagName("head")[0]
              .appendChild(this.styleCompansationDefRef));
    }

    _siloFixes() {
      const e = document
          .querySelector(".banner")
          .getBoundingClientRect().height,
        t = document.querySelector(".supernav").getBoundingClientRect().height,
        n = window.innerHeight;
      let s = "";

      (s += `\n @media (min-width: 1023px) {
                  \n #silo-container {
                      \n top: ${18 + e}px !important;
                      \n max-height: ${n - (36 + e)}px !important;
                      \n transition: all 125ms ease-in-out;
                      \n overflow: overlay;
                      \n
                  }
  
                  \n\n\n #silo-container__push-down {
                      \n top: ${18 + e + t}px !important;
                      \n max-height: ${n - (36 + e + t)}px !important;
                      \n
                  }
  
                  \n
              }
  
              \n\n\n @media (min-width: 1279px) {
                  \n #silo-container {
                      \n top: 18px !important;
                      \n
                  }
  
                  \n
              }
  
              \n `),
        this.styleCompansationDefRef
          ? (this.styleCompansationDefRef.innerHTML = s)
          : ((this.styleCompansationDefRef = document.createElement("style")),
            (this.styleCompansationDefRef.type = "text/css"),
            (this.styleCompansationDefRef.innerHTML = s),
            document
              .getElementsByTagName("head")[0]
              .appendChild(this.styleCompansationDefRef));
    }

    _cloneNav() {
      const e = document.body,
        t = document.querySelector(".navigation-layout"),
        n = t.cloneNode(!0),
        s = document.createElement("nav");
      s.classList.add("navigation-clone"),
        t.parentElement.classList.add("navigation-real"),
        s.append(n),
        e.prepend(s),
        (this.navClone = s),
        (this.navReal = t.parentElement);
    }

    _autoHideNavigation() {
      const e = document.querySelector("#silo-container");
      this.currentTop = window.scrollY;
      const t =
        Math.abs(this.previousTop - this.currentTop) > this.scrollThreshold;

      if (this.currentTop >= this.navReal.getBoundingClientRect().height && t) {
        this.navClone.classList.add("sticky-nav-show");
        e?.classList?.add?.("push-down");
      } else {
        this.navClone.classList.remove("sticky-nav-show");
        e?.classList?.remove?.("push-down");
        this.previousTop = this.currentTop;
      }
    }

    _resizeHandler() {
      this.viewportWidth !== window.innerWidth &&
        (this._createClassDefinitions(),
        this._siloFixes(),
        (this.viewportWidth = window.innerWidth));
    }

    _handleScroll() {
      this._autoHideNavigation();

      window.addEventListener(
        "scroll",
        () =>
          window.requestAnimationFrame
            ? requestAnimationFrame(this._autoHideNavigation.bind(this))
            : setTimeout(this._autoHideNavigation.bind(this), 100),
        {
          passive: !0,
        }
      );
    }

    _handleResizing() {
      this._resizeHandler();

      window.addEventListener(
        "resize",
        () =>
          window.requestAnimationFrame
            ? requestAnimationFrame(this._resizeHandler.bind(this))
            : setTimeout(this._resizeHandler.bind(this), 100),
        {
          passive: !0,
        }
      );
    }
  }

  try {
    new e();
  } catch (e) {
    console.error(`Could not init Sticky Nav: ${e}`);
  }

  class t {
    previousTop = window.scrollY;
    currentTop = 0;
    viewportWidth = window.innerWidth;
    scrollThreshold = 1;

    constructor() {
      this._getSupernavs(),
        this._configureSuperNav(),
        this._handleScroll(),
        this._handleClickOutside();
    }

    _getSupernavs() {
      this.supernavs = document.querySelectorAll(".supernav");
    }

    _configureSuperNav() {
      this.supernavs.forEach((e) => {
        const t = e.querySelector(".menu-button"),
          n = e.querySelector(".level-1.small"),
          s = e.querySelectorAll(".with-children");
        t.addEventListener("click", () => {
          n.classList.contains("show") && this._resetAll(n, s),
            n.classList.toggle("show");
        }),
          s.forEach((e) => {
            const t = e.querySelector(".dropdown"),
              i = e.querySelector(".level-2");
            t.addEventListener("click", () => this._goDeeper(s, n, i)),
              i
                .querySelector(".return-level-1")
                .addEventListener("click", () => this._goShallow(n));
          });
      });
    }

    _goDeeper(e, t, n) {
      this._resetSubMenus(e), t.classList.add("nest"), n.classList.add("show");
    }

    _goShallow(e) {
      e.classList.remove("nest");
    }

    _resetSubMenus(e) {
      e.forEach((e) => {
        e.querySelector(".level-2").classList.remove("show");
      });
    }

    _resetAll(e, t) {
      e.classList.remove("nest"),
        t.forEach((e) => {
          e.querySelector(".level-2").classList.remove("show");
        });
    }

    _hideOnScroll() {
      if (window.innerWidth >= 768) {
        this.currentTop = window.scrollY;

        Math.abs(this.previousTop - this.currentTop) > this.scrollThreshold &&
          this.supernavs.forEach((e) => {
            const t = e.querySelector(".level-1.small"),
              n = e.querySelectorAll(".with-children");
            t.classList.contains("show") && this._resetAll(t, n),
              t.classList.remove("show");
          }),
          (this.previousTop = this.currentTop);
      }
    }

    _handleScroll() {
      document.addEventListener(
        "scroll",
        () =>
          window.requestAnimationFrame
            ? requestAnimationFrame(this._hideOnScroll.bind(this))
            : setTimeout(this._hideOnScroll.bind(this), 100),
        {
          passive: !0,
        }
      );
    }

    _handleClickOutside() {
      this.supernavs.forEach((e) => {
        const t = e.querySelector(".menu-button"),
          n = e.querySelector(".level-1.small"),
          s = e.querySelectorAll(".with-children");
        document.addEventListener("click", (e) => {
          const i = e.composedPath().includes(n),
            o = e.composedPath().includes(t);
          i ||
            o ||
            (n.classList.contains("show") && this._resetAll(n, s),
            n.classList.remove("show"));
        });
      });
    }
  }

  try {
    new t();
  } catch (e) {
    console.error(`Could not init Mobile supernav: ${e}`);
  }
})();

</script>
 <script>
            $('#main-message-slider').slick({
                autoplay: false,
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'ease',
                responsive: [
                    {
                        breakpoint: 640,
                        settings: {
                        arrows: false
                        }
                    }
                ]
            });
</script>

    
        <!-- Hotjar Tracking Code for https://www.brownroofing.org/ -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1082613,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
<?php
if($thePage !== 'roofle') { 
global $isTrafficPpc;
if(!$isTrafficPpc) {  ?>
<script src="https://app.roofle.com/roof-quote-pro-widget.js?id=dBs0H3pzfkTl2euhBp92w" async></script>
<?php } ?>
 <?php } ?> 
 <?php global $isTrafficDirect;
if($isTrafficDirect) {  ?>
<script>
  // Define the target URL you want to set
  const newHref = "https://www.brownroofing.org/roofle.html";

  // Function to update the href of the target link
  function updateLinkHref() {
    // Select the link with the specific href
    const link = document.querySelector('a[href="https://www.brownroofing.org/free-estimate.html"]');
    if (link && link.href !== newHref) {
      link.href = newHref;
      console.log("Link href updated to:", newHref);
    }
  }

  // Create a MutationObserver to monitor changes in the DOM
  const observer = new MutationObserver((mutationsList, observer) => {
    for (const mutation of mutationsList) {
      if (mutation.type === 'childList' || mutation.type === 'subtree') {
        updateLinkHref();
      }
    }
  });

  // Start observing the body for changes
  observer.observe(document.body, { childList: true, subtree: true });

  // Initial check in case the element is already present
  document.addEventListener("DOMContentLoaded", updateLinkHref);
</script>

 <?php } ?>  

 
    </body>
</html>
