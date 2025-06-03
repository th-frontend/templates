<!doctype html>
<?php
    $fullpage = array ("opinion",
        "index",
        "sitemap",
        "refer",
        "maintenance",
        "payment",
        "thank-you",
        "email",
        "opinion-service",
        "energy-review",
        "crew-review",
        "free-estimate",
        "free-estimate/confirmation",
        "survey",
        "privacy-policy",
        "search",
        "additional-comments",
        "mitigation-survey",
        "testing-survey",
        "service-area");
?>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>[[title]]</title>
    	<meta name="description" content="[[description]]">
    	<meta name="keywords" content="[[keywords]]">
        <link rel="icon" href="	https://cdn.treehouseinternetgroup.com/cms_images/4148/favicon.ico">
        [[custom_core_v3_5]]
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/weh7cpy.css">
<style>[[inline_css]]</style>
</head>


    <body>
  
        <div id="template-wrap" class="slim-header">
            <div class="container" id="header">
                <div class="row" data-equalizer>
                    <div class="small-8 medium-4 columns" id="logo" data-equalizer-watch>
                        <a href="/"><img src="	https://cdn.treehouseinternetgroup.com/cms_images/4148/DIMS-Roofing-Restoration.png" alt="[company]"></a>
                    </div>
                    <div class="small-12 medium-8 columns" id="contact" data-equalizer-watch>
                        <div>
                            <div class="row collapse" id="header-service-wrap">
                                <div class="columns medium-8 medium-offset-4" id="header-service-area">
                                    <p onclick="location.href='/service-area.html';" style="cursor:pointer;">Serving [territory], [major cities 3]</p>
                                </div>
                            </div>
                            <div class="row collapse">
                                <div class="columns" id="phone">

                                        <?php
                                            $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                                            $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                                            if($iphone || $android  == true)
                                            {
                                            ?>
                                            <a href="tel:<?php echo $phonenumber; ?>" class="phone_link">

                                            <?
                                            }
                                            else
                                            { ?>

                                            <a href="/free-estimate.html" class="phone_link">
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        $times = get_open_time();
                                        if($times or isset($_GET['open']))
                                        {
                                        ?>

                                        <div class="opensign"><span>open</span></div>

                                        <?php
                                        }
                                        ?>

                                        [phone]
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end #contact -->
                    <!--<div id="search-bar">-->
                    <!--  <form action="/search.html" method="get" class="search-form">-->
                    <!--    <div id="cse-wrap">-->
                    <!--      <div style="width: 100%; overflow: hidden; margin-top: 10px; display: flex; justify-content: end;">-->
                    <!--        <input style="width:219px;float: left;height:37px; margin-top: 1px;" type="text" name="q" size="28" id="cse-inputbox" value="Enter Keywords" onfocus="if(this.value == 'Enter Keywords') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter Keywords';}">-->
                    <!--        <input type="submit" name="sa" class="submit button small left" value="Search" style="width: 70px; margin: 0 0 5px 5px !important; padding:10px 10px !important; font-size: 14px !important;">-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </form>-->
                    <!--</div>-->
                </div>
            </div><!-- end #header -->

        <!-- SUPER NAV TOOL -->
        [[top_nav]]
        <!-- END SUPER NAV TOOL -->


        <?php if ($thePage == "index") { ?>

            
            <!-- HELLO AND WELCOME TO THE KLAUS TEMPLATE!
                 There are three versions of this bad boy within this devtest.
                 
                 Please use the correct, matching versions of the Main Message and WCU styling depending on your site's needs!
                 
                 Version 1: Main message features owner photo (or maybe Klaus placeholder)
                 with gradient shingle background, and WCU with black background. KRS branded colors must be used.
                 
                 Version 2: Main message features house photo background, with 
                 centered KRS tag and no owner photo. WCU has shingle gradient background. KRS branded colors must be used.
                 
                 Version 3: Same elements and WCU as Version 2, but dealer tag, branding, and colors are are used.
            -->
            
            <!-- TEMPLATE 1 MAIN MESSAGE -->
            <!--<div class="container" id="main-message-slider">-->
            <!--    <div class="main-content" style="background-image: url('/core/images/krs/roof-mm-bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">-->
            <!--        <div class="large-5 medium-6 small-4 columns" id="owner-bg">-->
            <!--            <p class="owner-name">Klaus Larsen, Owner</p>-->
            <!--            <img src="/core/images/krs/klaus-owner-photo.png">-->
            <!--        </div>-->
            
            <!--        <div class="large-7 medium-6 small-8 columns">-->
            <!--            <div id="main-text">-->
            <!--                <img src="/core/images/krs/svg/put-a-klaus-black.svg"  alt="Klaus on your House [state]">-->
            <!--                <p class="main-service-text">-->
            <!--                    <span class="main-service-item"><a href="/roof-repair.html">Roof Repair</a></span>-->
            <!--                    <span class="main-service-item"><a href="/roof-replacement.html">Roof Replacement</a></span>-->
            <!--    				<span class="main-service-item"><a href="/roof-inspection.html">Roof Inspections</a></span>-->
            <!--    				<span class="main-service-item"><a href="/skylights.html">Skylights</a></span>-->
            <!--                    <span class="main-service-item"><a href="/gutters-and-downspouts.html">Gutters & Downspouts</a></span>-->
            <!--                    <span class="main-service-item"><a href="/wind-mitigation.html">Wind Mitigation</a></span>-->
            <!--                </p> -->
            <!--                <a class="button" href="/free-estimate.html" title="Contact us for a Free Quote">Schedule A Free Estimate</a>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- END MAIN MESSAGE -->
               
            
                <div class="container" id="main-message">
            <div class="main-content">
                                <div class="mm-wrap">

    <a href="/about-us/coupons.html" class="tagline-link">
                <div class="tagline">
                  <img src="https://cdn.treehouseinternetgroup.com/cms_images/4148/raising_the_roof.png" alt="Raising the Roof on Reliability">
            </div>
            </a>
            <div class="mm-text-wrap">
                
                <a href="/about-us/coupons.html" class="tagline-link">
                    <h2>Stop the Leaks Before They Start</br><i>-Spring Roofing Sale</i></h2>
                    <p><strong class="offer">$500 Off</strong></br> <strong>A Complete Klaus Roofing System!</strong>*</p> 
                   <p> Limited Time Offer - Click <i>here</i> for coupon</p>
                    <p class="from">From [state]'s Most Trusted Roofer</p>
                    </a>
                    <a class="btn" href="/free-estimate.html" title="Get a free estimate">Schedule A Free Estimate</a>
                    </div> 
                </div>
                <div class="columns main-txt">
                        <div class="hero-message">
                            <img src="	https://cdn.treehouseinternetgroup.com/cms_images/4148/raising_the_roof.png" alt="Raising the Roof on Reliability">
                        </div>
                        <div class="mm-text-wrap">
                              <h2>Stop the Leaks Before They Start</br><i>Spring Roofing Sale</i></h2>
                            <p><strong class="offer">$500 Off</strong></br><strong>A Complete Klaus Roofing System!</strong><a href="about-us/coupons.html">*</a></p>
                            <p class="from">From [state]'s Most Trusted Roofer</p>
                            <a class="btn" href="/free-estimate.html">Schedule A Free Estimate</a>
                            </div>
                    </div>
                <div class="row">
               
          
                </div>
            </div>

        </div>
                                          <div class="warranty-banner-wrap desktop">
  <p>VALUE & HIGH QUALITY WORKMANSHIP BACKED BY A <strong>50 YEAR WARRANTY</strong></p>
<img src="	https://cdn.treehouseinternetgroup.com/cms_images/966/BANNER.png"/>
</div>  
              <div class="warranty-banner-wrap mobile">
  <p>VALUE & HIGH QUALITY WORKMANSHIP BACKED BY A <strong>50 YEAR WARRANTY</strong></p>
<img src="https://cdn.treehouseinternetgroup.com/cms_images/2936/banner-mobile.png"/>
</div>
            <!--END MAIN MESSAGE-->.


            <div class="container" id="homepage-content">

            <?php
            }
            elseif ( (in_array($thePage, $fullpage)) || ($isCityPage == true) )
            {
            ?>
            <div class="container" id="page-wrap">
                <div class="row">
                    <div class="columns full-width" id="content-wrap">
            <?php
            }
            else
            {
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
                    <div class="row">
                        <div class="columns">
                            <span class="page-title"><?php echo $cmsPageData['page.name']; ?></span>
                        </div>
                    </div>
                </div><!-- end #silo-header -->
                <div class="container" id="page-wrap">
                    <div class="row">
                        <div class="medium-9 medium-push-3 columns body" id="content-wrap">
                          [[breadcrumbs]]
            <?php
            }
            ?>
                                                    <!-- Zip search bar -->
            <?php if ($thePage === "service-area") { ?>
            <style>
            /* Zip search styling */
            #zip-lookup-bar {
                padding: 1.5rem 1rem;
                background: #d8340c;
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
                background: #000;
                font-weight: bold;
                text-transform: uppercase;
                width: 100%;
                color: #fff;
                border: none;
                transition: all .3s ease;
            }
            #zip-search-submit:hover {
                background:#000;
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
            <?php if ($thePage == "index") { ?>
            </div>
            <?php
            }
            elseif ( (in_array($thePage, $fullpage)) || ($isCityPage == true) )
            { ?>
                    </div><!-- end #content-wrap -->
                </div><!-- end .row -->
            </div><!-- end #page-wrap -->
            <?php
            }
            else
            { ?>
                        </div><!-- end #content-wrap (silo content column) -->
                        <div class="medium-3 medium-pull-9 columns subnav-bg">
                            <div id="subnav-left">
                                [[single_silo_nav]]
                            </div>
                        </div>
                    </div><!-- end .row -->
                </div><!-- end #page-wrap -->
            </div><!-- end #silo-page-wrap -->
            <?php
            }
            ?>



            <?php if ( (!in_array($thePage, $fullpage)) && ($isCityPage == 0) || ($thePage == "index") ) { ?>

            <div class="container home" id="service-area">
                <div class="container home" id="home-city-list-wrap">
                    <div class="row collapse">
                        <div class="large-4 columns">
                            <div id="home-city-list">
                                <p class="home-section-title">our service area</p>
                                [[city_scroll:50]]
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container home" id="service-map">
                        <div id="gmap-wrap">[[service_area_google_map]]</div>
                </div>
            </div><!-- end #service-area -->

            <?php
            }
            ?>

            <?php if (($thePage == "index")) { ?>

            <div class="container" id="cred">
                <?php
                    $meta = array();
                        $meta['useGeo'] = true;
                        $meta['manualAssetPage'] = false;
                        $meta['useFeatured'] = false;
                        $meta['siloMode'] = false;
                        $meta['qty'] = 20;
                        $meta['template'] = 5493;
                    $templates = array();
                    $templates['main'] = array('
                        <div class="row" id="inline-affil-slider">
                            
                            [[items]]
                        </div>');
                    $templates['item'] = array('
                        <div class="columns widget-item">
                            <div class="widget-affil-img">
                                [[logo]]
                            </div>
                        </div>');
                    $title = 'Affiliations';
                    require_once('widgets/affiliations_sidebar_widget.php');
                    echo($output);
                ?>
            </div><!-- end credibility -->

            <?php
            }
            ?>

            <div class="container home" id="footer">
                <div class="row" >
                    <div class="large-7 large-push-5 columns" >
                        <div id="footer-links">
                            <?php
                            $superNav = new nav();
                            $superNav->superMode = 'bottom';
                            echo $superNav->generateSuperMarkup();
                            ?>
                            [[social_footer]]
                        </div>
                    </div>
                    <div class="large-5 large-pull-7 columns" >
                        <div id="footer-contact">
                            <a href="/free-estimate.html" id="footer-btn">get a free quote</a>
                            <p class="footer-phone">
                                Or call us at
                                <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
                            </p>
                            <div class="center nail-badge"><img src="https://cdn.treehouseinternetgroup.com/cms_images/801/no-nail-pledge-web.png" alt="No Nail Pledge" width="120">
                             </div>
                            <p class="footer-address">
                                &copy; <?php echo(date('Y')); ?> [[display_addresses]] </p>
                                <!-----p>
                                Contractor ID: [license number]
                                </p------>
                                <p>[[cn-logo]]
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <a id="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i>Top</a>
        </div><!-- end template-wrap -->
        <!-- Fixed Mobile Footer -->
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
        <!-- / Fixed Mobile Footer -->
        [[custom_core_v3_js]]
        <?php if (!in_array($thePage, $fullpage)) { ?>
            <script src="https://a80427d48f9b9f165d8d-c913073b3759fb31d6b728a919676eab.ssl.cf1.rackcdn.com/v3/js/sticky-sidebar.js"></script>
        <?php
        }
        ?>   
        
        <?php if (($thePage == "index")) { ?>

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
            $('#inline-affil-slider').slick({
                autoplay: true,
                arrows: true,
                infinite: true,
                speed: 1000,
                cssEase: 'ease',
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                    {
                    breakpoint: 640,
                    settings: {
                        speed: 500,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
            });
        </script>

        <?php
        }
        ?>
    </body>
</html>
