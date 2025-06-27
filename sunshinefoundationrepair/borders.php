<?php
// Template customized for Sunshine Foundation Repair
global $cmsPageData, $thePage;
$fullpage = array (
    "index",
    "opinion",
    "sitemap",
    "refer",
    "maintenance",
    "free-inspection",
    "opinion-service",
    "energy-review",
    "crew-review",
    "free-inspection/confirmation",
    "survey",
    "privacy-policy",
    "service-area",
    "zip-search",
    "about-us/careers-with-lre",
    "crawl-space-florida",
    "foundation-repair-florida",
    "concrete-repair-florida",
        "about-us/refer",
        "payment",
        "thank-you",
        "email",
        "free-estimate",
        "free-estimate/confirmation",
        "search",
        "additional-comments",
        "mitigation-survey",
        "testing-survey",
        "city-page-redesign",
        "service-area",
        "free-estimate-fb",
        "raindrop-lp",
        "sanidry-lp",
        "ultra-sump-lp",
        "aspen-lp"    
);

$noHeader = array (
    "service-area",
    "free-inspection",
    "free-estimate"
);
$modulepages = array (
    "opinion",
    "before-after",
    "photo-gallery",
    "refer",
    "meet-the-team",
    "news-and-events",
    "blog",
    "reviews",
    "awards",
    "press-release",
    "crew-review",
    "case-studies",
    "affiliations",
    "technical-papers",
    "case-studies",
    "search",
    "service-area",
    "homeshows",
    "about-us"
);  

// Custom City Page Overrides
global $siteCityPageTemplateOverride, $siteCityPageTemplateOverrides;

$customCityPage = array (
    "link",
);

if (in_array($thePage, $customCityPage)) {
    $siteCityPageTemplateOverride = 7108;
    $siteCityPageTemplateOverrides = array(
        'template' => 7108,
        'contact_form' => array(
            'id' => 7022
        ),
        'testimonials' => array(
            'id' => 7015,
            'qty' => 3
        ),
        'before_after' => array(
            'id' => 7050,
            'qty' => 3
        ),
        'case_studies' => array(
            'id' => 7019,
            'qty' => 3
        ),
        'photo_gallery' => array(
            'id' => 7044,
            'qty' => 3
        ),
        'reviews' => array(
            'id' => 7017,
            'qty' => 3
        ),
        'awards' => array(
            'id' => 5605,
            'qty' => 1
        ),
        'videos' => array(
            'id' => 5542,
            'qty' => 1
        ),
        'blogs' => array(
            'id' => 5611,
            'qty' => 1
        ),
        'job_stories' => array(
            'id' => 7003
        )
    );
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>[[title]]</title>
    	<meta name="description" content="[[description]]">
    	<meta name="keywords" content="[[keywords]]">
        <meta name="referrer" content="no-referrer-when-downgrade">
    	<link rel="icon" href="https://cdn.treehouseinternetgroup.com/cms_images/3351/sunshine-foundation_repair_favicon.png">
    	<link rel="stylesheet" href="https://a80427d48f9b9f165d8d-c913073b3759fb31d6b728a919676eab.ssl.cf1.rackcdn.com/v3/min/nav.min.css" />
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php if ($thePage != "index") { ?>
    <link rel="stylesheet" href="https://cdn.treehouseinternetgroup.com/cms_core/assets/module-22-test.css?v999">
    <link rel="stylesheet" href="https://cdn.treehouseinternetgroup.com/cms_images/3351/core_template.css" />
    <link rel="stylesheet" href="https://cdn.treehouseinternetgroup.com/cms_core/assets/min/foundation.min.css">    
    <script type="text/javascript" src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/jquery.min.js"></script>
    <?php
        }
        ?>
    	<link rel="stylesheet" href="https://cdn.treehouseinternetgroup.com/cms_core/css/new-base-2025.css"> <!--New clean base stylesheet -->
    	[[css_head_helper]]
    	<style> [[inline_css]]</style>
    <!-- template css tab - for site specific customizations / as="style" onload="this.rel='stylesheet';this.onload=null;" -->
    <link rel="stylesheet" type="text/css" href="/inc/sb-styles.css?v=3"> 

    <?php if ($thePage == "index") { ?>
        <link rel="preload" fetchpriority="high" href="https://cdn.treehouseinternetgroup.com/cms_images/3351/sunshine-foundation_repair_logo.svg" as="image">
        <link rel="preload" fetchpriority="high" href="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/width=600,quality=85,format=auto/cms_images/3351/lj_sunshine_fr-mm.png" as="image" media="(max-width: 640px)">
        <link rel="preload" fetchpriority="high" href="https://cdn.treehouseinternetgroup.com/cdn-cgi/image/quality=85,format=auto/cms_images/3351/lj_sunshine_fr-mm.png" as="image" media="(min-width: 640.1px)">
    <?php } ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
        <style>.alert-box.warning{align-content:center;background-image:url(https://cdn.treehouseinternetgroup.com/cms_images/3443/dev-icon.svg);height:60px;position:fixed;bottom:0;z-index:9999999999999;width:60px;background-color:#ffea00;background-size:75%;background-position:center;background-repeat:no-repeat;border:0;text-indent:-9999px;border-radius:50px;box-shadow:0 0 20px rgb(0 0 0 / 20%);margin:0 0 10px 10px}.alert-box.warning a{color:#fff;position:absolute;display:flex;height:100%;width:100%;padding:0 .5rem;top:0;text-align:center;align-items:center;border-radius:50px;font-weight:800;font-size:12px;line-height:105%;text-transform:uppercase;font-family:Arial,sans-serif}.alert-box.warning:hover{background-image:none;background-color:green}.alert-box.warning:hover a{text-indent:0}</style>
        <!-- City Page CSS Overrides for not custom pages -->
    <?php if (($isCityPage == 1) && (!in_array($thePage, $customCityPage))) { ?>
        <style>.citypage_index .widget_contact .state, .citypage_index .widget_contact .zip {width: 48% !important;}.citypage_index h1{clear:both;order:-1;grid-row:1;grid-column:1/-1}.citypage_index.module{display:grid;column-gap:2rem}.citypage_main_content{grid-row:2/span 1;grid-column:1}.citypage_index .citypage_sidebar{width:100%;margin-left:0}.citypage_index .widget.widget_citypage_map{margin-bottom:2rem}.widget_citypage_map .widget_content{padding:0}.citypage_index .widget.widget_citypage_map .leaflet-overlay-pane,.leaflet-pane{z-index:1!important}.citypage_index .widget_contact .widget_content{padding:1rem}.citypage_index .widget_contact .widget_content form{width:90%}.citypage_index .contact_form .widget_contact .widget_title{background:var(--brand-dark);padding:1rem .5rem;color:#fff!important;line-height:1.3;font-family:sans-serif}.citypage_index .contact_form .widget_contact .widget_title *{font-size:clamp(1rem,2vw,1.25rem)}.reviews_sidebar_widget.widget{clear:both;}.citypage_index .widget_contact .widget_content form>div{width:100%;}.citypage_index .widget_contact .widget_content form>div select{height:40px;width:100%;padding:.75em;}.citypage_index .widget_contact .widget_content form>div label{margin-bottom:3px;display:inline-block;font-family:sans-serif;font-size:13px}.citypage_index .widget_contact .widget_content form label#sms_consent-label{font-weight:400;font-style:normal;font-size:10px}.citypage_index .widget_contact .widget_content form button.submit{padding:.5rem;border-radius:100px;text-transform:uppercase;font-family:sans-serif;font-weight:600}.widget_title{background-color:var(--brand-dark);color:#fff;text-align:center;padding:1rem}.reviews_sidebar_widget.widget .stars{display:flex;margin-bottom:5px}.citypage_sidebar .reviews_sidebar_widget li{margin:0;font-size:14px;line-height:1.3}.citypage_index .reviews_sidebar_widget .widget_items ul .text{margin-top:.5rem;font-style:italic}.citypage_sidebar .widget_services .widget_content{height:150px;overflow-y:scroll}.citypage_sidebar .widget{margin-bottom:1rem}.citypage_sidebar .contact_form.page_widget.us{margin-bottom:0}.contact_form.page_widget .fname input{margin:0}.citypage_sidebar .widget_awards .widget_thumbnail{width:60px;grid-column:1/3;padding:.5rem 0}.citypage_sidebar .widget_awards .widget_item{display:grid;grid-template-columns:repeat(6,1fr);padding:0 0 .75rem;margin:0 auto .75rem;border-bottom:1px solid #d9d9d9}.citypage_sidebar .widget_awards .widget_item_title{grid-column:3/-1;display:flex;align-items:center;font-size:14px;line-height:1.3}.citypage_sidebar .widget_awards .widget_preview{grid-column:1/-1}.citypage_index .widget_contact .widget_content form button.submit{width:100%}.citypage_text_generated_content .breakout.left{width:fit-content;clear:none;float:left;margin:0}.citypage_text_generated_content .breakout ul{padding-left:1rem!important;margin-block:0!important}.citypage_text_generated_content .breakout ul li{color:initial}.citypage_text_generated_content .breakout.left+:not(.breakout.left){margin-top:1rem!important;display:inline-block}@media screen and (min-width:1024px){.citypage_index.module{display:grid;grid-template-columns:1fr 250px;column-gap:2rem}.citypage_main_content{grid-row:2/span 1;grid-column:1}.citypage_index .citypage_sidebar{grid-row:2;grid-column:2;width:300px}}</style>
        <script type="text/javascript" src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.31/example1/colorbox.min.css">
    <?php } elseif (in_array($thePage, $customCityPage)) { ?>
        <style>.citypage_index .citypage_text_generated_content{padding:0}.citypage_index .panel_split_content{padding:2rem 0}.citypage_index .inline-free-estimate-container textarea{padding-inline:1rem}.citypage_index .inline-free-estimate-container select{padding-inline:.5rem}.citypage_index .top-sec-box{display:block}.citypage_index hr{border:3px dotted #ddd;margin-block:4rem;border-width:3px 0 0 0;display:block}#content-wrap .panel_split_btn :is(ul,li){padding-inline:0;margin-inline:0}.citypage_index button.cp-scroll-btn.btn{color:#fff;background-color:var(--brand-default);padding-block:.75rem;transition:.2s ease;border-radius:0}.citypage_index button.cp-scroll-btn.btn:hover{background-color:var(--brand-accent)}.citypage_index .accordion-style summary{color:var(--brand-dark);border:0;font-size:clamp(1.1rem, 3vw, 1.25rem);padding-right:3rem}.citypage_index .accordion-style details summary::before,.citypage_index .accordion-style details summary::after{background-color:var(--brand-dark)}.citypage_index .accordion-style details summary::before{right:1rem}.citypage_index .accordion-style details summary::after{right:calc(1rem + 4px)}.citypage_index .accordion-style__content{border:0;padding:0 .75rem .75rem}.citypage_index .accordion-style details{border-bottom:1px solid #757575}.citypage_index .accordion-img{aspect-ratio:1 / 1}.citypage_index .accordion-img img{object-fit:cover;height:100%;width:100%}.citypage_index .widget-component,.citypage_index .widget,.citypage_index .cp-reviews{border-top:3px dotted #ddd;padding-top:4rem;margin-top:4rem}</style>
    <?php
    }
    ?>
        <?php if (!in_array($thePage, $fullpage)) { ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <? }?>

         <!---Facebook Tag------>
        <meta property="fb:pages" content="146379158707097">
        <script>  (async function () { new Image().src = `https://smart-pixl__com/12710/00001_connecticutbasementsystems__com_SMART__GIF?ref=${encodeURIComponent(window__location__href)}`; })(); </script>
     
        <meta name="ahrefs-site-verification" content="06b55c0e0b6410adb261079a7020da80954b263f5aa13211d5454e27cc1e28a6">
        <script src="https://analytics.ahrefs.com/analytics.js" data-key="t7Hy+gTEBNztRJYe8GNdvQ" defer="true"></script>
        
           <!-- Start VWO Async SmartCode -->
        <link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" />
        <script type='text/javascript' id='vwoCode'>
        window._vwo_code || (function() {
        var account_id=945775,
        version=2.1,
        settings_tolerance=2000,
        hide_element='body',
        hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;transition:none !important;',
        /* DO NOT EDIT BELOW THIS LINE */
        f=false,w=window,d=document,v=d.querySelector('#vwoCode'),cK='_vwo_'+account_id+'_settings',cc={};try{var c=JSON.parse(localStorage.getItem('_vwo_'+account_id+'_config'));cc=c&&typeof c==='object'?c:{}}catch(e){}var stT=cc.stT==='session'?w.sessionStorage:w.localStorage;code={use_existing_jquery:function(){return typeof use_existing_jquery!=='undefined'?use_existing_jquery:undefined},library_tolerance:function(){return typeof library_tolerance!=='undefined'?library_tolerance:undefined},settings_tolerance:function(){return cc.sT||settings_tolerance},hide_element_style:function(){return'{'+(cc.hES||hide_element_style)+'}'},hide_element:function(){if(performance.getEntriesByName('first-contentful-paint')[0]){return''}return typeof cc.hE==='string'?cc.hE:hide_element},getVersion:function(){return version},finish:function(e){if(!f){f=true;var t=d.getElementById('_vis_opt_path_hides');if(t)t.parentNode.removeChild(t);if(e)(new Image).src='https://dev.visualwebsiteoptimizer.com/ee.gif?a='+account_id+e}},finished:function(){return f},addScript:function(e){var t=d.createElement('script');t.type='text/javascript';if(e.src){t.src=e.src}else{t.text=e.text}d.getElementsByTagName('head')[0].appendChild(t)},load:function(e,t){var i=this.getSettings(),n=d.createElement('script'),r=this;t=t||{};if(i){n.textContent=i;d.getElementsByTagName('head')[0].appendChild(n);if(!w.VWO||VWO.caE){stT.removeItem(cK);r.load(e)}}else{var o=new XMLHttpRequest;o.open('GET',e,true);o.withCredentials=!t.dSC;o.responseType=t.responseType||'text';o.onload=function(){if(t.onloadCb){return t.onloadCb(o,e)}if(o.status===200||o.status===304){_vwo_code.addScript({text:o.responseText})}else{_vwo_code.finish('&e=loading_failure:'+e)}};o.onerror=function(){if(t.onerrorCb){return t.onerrorCb(e)}_vwo_code.finish('&e=loading_failure:'+e)};o.send()}},getSettings:function(){try{var e=stT.getItem(cK);if(!e){return}e=JSON.parse(e);if(Date.now()>e.e){stT.removeItem(cK);return}return e.s}catch(e){return}},init:function(){if(d.URL.indexOf('__vwo_disable__')>-1)return;var e=this.settings_tolerance();w._vwo_settings_timer=setTimeout(function(){_vwo_code.finish();stT.removeItem(cK)},e);var t;if(this.hide_element()!=='body'){t=d.createElement('style');var i=this.hide_element(),n=i?i+this.hide_element_style():'',r=d.getElementsByTagName('head')[0];t.setAttribute('id','_vis_opt_path_hides');v&&t.setAttribute('nonce',v.nonce);t.setAttribute('type','text/css');if(t.styleSheet)t.styleSheet.cssText=n;else t.appendChild(d.createTextNode(n));r.appendChild(t)}else{t=d.getElementsByTagName('head')[0];var n=d.createElement('div');n.style.cssText='z-index: 2147483647 !important;position: fixed !important;left: 0 !important;top: 0 !important;width: 100% !important;height: 100% !important;background: white !important;';n.setAttribute('id','_vis_opt_path_hides');n.classList.add('_vis_hide_layer');t.parentNode.insertBefore(n,t.nextSibling)}var o=window._vis_opt_url||d.URL,s='https://dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(o)+'&vn='+version;if(w.location.search.indexOf('_vwo_xhr')!==-1){this.addScript({src:s})}else{this.load(s+'&x=true')}}};w._vwo_code=code;code.init();})();
        </script>
        <!-- End VWO Async SmartCode -->
        
    
    </head>
<body>
<header id="header" class="header__style3">
        <!-- Start header__style3 token content -->
            <div id="header--logo">
                <a href="/" title="[company]">
                    <img src="https://cdn.treehouseinternetgroup.com/cms_images/3351/sunshine-foundation_repair_logo.svg" alt="[company]">
                </a>
            </div>
        <div id="header--territory">
            <p id="header--serving-text">
                <a href="/schedule-service.html">Schedule Annual Maintenance</a>
            </p>
        </div>
        <div id="header--phone-text">
        <div id="header--nav">
            <!-- SUPER NAV TOOL -->
            [[top_nav]]
            <!-- END SUPER NAV TOOL -->
        </div>            
            <?php
                    $times = get_open_time();
                    if($times or isset($_GET['open']))
                    {
                        ?>
            <p id="header--open-text">Open</p>
            <?php
                    }
                ?>
            <a class="phone-txt" href="tel:<?php echo $phonenumber; ?>">[phone]</a>
        </div>
        <div id="header--phone-mobile">
            <p>
                <svg class="rotate-45" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <a href="tel:<?php echo $phonenumber; ?>">Call Now</a>
            </p>
        </div>
        <!-- END header__style3 token content -->
    </header>
    
    <?php if ($thePage == "index") { ?>


        <?php
        }
        else
        {
        ?>

            <?php if ( (!in_array($thePage, $fullpage)) && ($isCityPage == 0) ) { ?>  
<div id="siloBanner"> <img src=
                        <?php
                            if (stristr($thePage,"basement-waterproofing"))
                            {
                                ?>
                                 "/core/images/templates/health/silo-waterproofing-retemp.jpg"
                            <?php
                            }
                            elseif (stristr($thePage,"foundation-repair"))
                            {
                                ?>
                                 "/core/images/templates/health/silo-foundation-retemp.jpg"
                            <?php
                            }
                            elseif (stristr($thePage,"about-us"))
                            {
                                ?>
                                 "/core/images/templates/spruce/headers/silo-roofing-2.jpg"
                            <?php
                            }
                            elseif (stristr($thePage,"spray-foam"))
                            {
                                ?>
                                 "/core/images/templates/des/headers/silo-spray-foam-des.jpg"
                            <?php
                            }
                            elseif (stristr($thePage,"attic-insulation"))
                            {
                                ?>
                                 "/core/images/templates/des/headers/silo-attic-insulation-des.jpg"
                            <?php
                            }
                            elseif (stristr($thePage,"ice-damming"))
                            {
                                ?>
                                 "/core/images/templates/des/headers/silo-ice-damming.jpg"
                            <?php
                            }
                            elseif (stristr($thePage,"crawl-space"))
                            {
                                ?>
                                 "/core/images/templates/health/silo-crawl-retemp.jpg"
                            <?php
                            }
                            elseif (stristr($thePage,"mold"))
                            {
                                ?>
                                 "/core/images/templates/health/headers/mold-silo-test.jpg"
						   <?php
                            }
                            elseif (stristr($thePage,"finishing"))
                            {
                                ?>
                                 "/core/images/templates/health/silo-finishing-retemp.jpg"			
						   <?php
                            }
                            elseif (stristr($thePage,"commercial-foundation"))
                            {
                                ?>
                                 "/core/images/templates/health/headers/commercial-silo-test.jpg"			
						   <?php
                            }
                            elseif (stristr($thePage,"home-energy-evaluation"))
                            {
                                ?>
                                 "/core/images/templates/des/headers/silo-audit-des.jpg"			
						   <?php
                            }
                            elseif (stristr($thePage,"commercial-roofing"))
                            {
                                ?>
                                 "/core/images/templates/spruce/headers/silo-commercial-roofing.jpg"			
						   <?php
                            }
                            elseif (stristr($thePage,"gutters-and-downspouts"))
                            {
                                ?>
                                 "/core/images/templates/spruce/headers/silo-gutters.jpg"			
						   <?php
                            }
                            elseif (stristr($thePage,"siding"))
                            {
                                ?>
                                 "/core/images/templates/spruce/headers/silo-siding.jpg"			
						   <?php
                            }
                            elseif (stristr($thePage,"remodeling"))
                            {
                                ?>
                                 "/core/images/templates/spruce/headers/silo-kitchen.jpg"			
						   
                            <?php
                            }
                            else
                            {
                                ?>
                                "/core/images/templates/spruce/headers/silo-roofing-2.jpg"
                        <?php
                        }
                        ?>
                    alt="<?php echo $cmsPageData['page.name']; ?>" /><!-- end #siloBanner img -->
  <p> <?php echo $cmsPageData['page.name']; ?> </p>
</div>
<!-- end #siloBanner -->
          <div id="page-wrap"> 
                    <div id="silo-sidebar">
                        <div id="sidebar-nav">[[single_silo_nav]]</div>
                    </div>
                    <div id="content-wrap">
            <?php
                }
            else
            {
                ?>
                    <div id="content-wrap" class="full-width">
                <?php
                }
                ?>
            
                [[breadcrumbs]]
        <?php
        }
        ?>
                [[content]]
        <?php if ($thePage != "index") { ?>
                </div><!-- end #content-wrap for child pages -->
            </div><!-- end #page-wrap for child pages -->
        <?php
        }
        ?>
        
        <?php if ( ($thePage != "service-area") && ($isCityPage == 0) ) { ?>
            <!-- Territory map & cities -->        
            <div id="service-area-map" class="container">
                <img src="https://cdn.treehouseinternetgroup.com/cms_images/1667/generic-map-bg.jpg" alt="[company] service area">
                <div id="map-target">
                    <img src="https://cdn.treehouseinternetgroup.com/cms_images/3351/sunshine-foundation-map-december2022-circle.png">
                </div>
                <div id="cities-served">
                    <h2>Our Service Area</h2>
                    <p>We service the following areas</p>
                    [[city_scroll:50]]
                    <a class="cta-btn" href="/service-area.html">View Service Area</a>
                </div>
            </div>        
            <!-- End territory -->
        <?php
        }
        ?>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Phone and CTA Button -->
            <div class="footer-contact">
                <div class="footer-phone"><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></div>
                <a href="/free-estimate.html" class="footer-button">Get a Free Estimate</a>
                                [[display_addresses]]
                <p> Contractor ID: [license number]</p>
            </div>
            
            <!-- Address Information -->
            <div class="footer-links">
                    <?php
                        $superNav = new nav();
                        $superNav->superMode = 'bottom';
                        $superNav->superSplitAboutWork = true;
                        echo $superNav->generateSuperMarkup();
                    ?>
                    [[social_footer]]
                </div>
        </div>
    <!-- Copyright Bar -->
    <div class="footer-bottom">
        &copy; <? echo date('Y'); ?> [[company]], Inc. | <a href="/privacy-policy.html">Privacy Policy</a> | <a href="/terms-of-use.html">Terms of Use</a> | <a href="/sitemap.html">Sitemap</a>
    </div>        
    </footer>
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
  <script>
// Sticky Header/Nav
    let scrollpos = window.scrollY
    const pageBody = document.querySelector("body")  
    const header = document.getElementById("header")
    const header_height = header.offsetHeight - 1
    
    const add_class_on_scroll = () => pageBody.classList.add("stuck")
    const remove_class_on_scroll = () => pageBody.classList.remove("stuck")
    
    window.addEventListener('scroll', function() { 
      scrollpos = window.scrollY;
    
      if (scrollpos > header_height) { add_class_on_scroll() }
      else { remove_class_on_scroll() }
    });
    
// Sticky Sidebar Nav
(function () {
    var subnav = document.getElementById("sidebar-nav");
    if (!subnav) return;
    var content = document.getElementById("content-wrap");
    var sidebar = subnav.parentElement;
    if (window.innerWidth >= 1024 && content.offsetHeight > subnav.offsetHeight) {
        var banner = document.getElementById("siloBanner");
        contentMT = window.getComputedStyle(content).getPropertyValue("margin-top");
        contentMT = parseInt(contentMT.slice(0, -2));
        
        window.addEventListener("scroll", stickySubnav);
    }
    function stickySubnav() {
        if (banner.getBoundingClientRect().top < 0) {
            var contentOffset = content.getBoundingClientRect();
            var fixednav = document.getElementById("header");
            if (contentOffset.top <= fixednav.offsetHeight + contentMT && contentOffset.bottom > subnav.offsetHeight + fixednav.offsetHeight) {
                subnav.style.position = "fixed";
                subnav.style.top = fixednav.offsetHeight + "px";
            } else if (contentOffset.bottom <= subnav.offsetHeight + fixednav.offsetHeight) {
                subnav.style.position = "relative";
                subnav.style.top = content.offsetHeight + contentMT - subnav.offsetHeight + "px";
            } else {
                subnav.style.position = "";
                subnav.style.top = "";
            }
        } else {
            subnav.style.position = "";
            subnav.style.top = "";
        }
    }
})();

</script>
<!-- TH Modal Popup -->
<script src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/th_modals.js" type="text/javascript"></script>
<script>
    const imagePopups = new ThModal({mode:'image', groupSelector: '[data-modal-gallery]', itemSelector: '[data-modal-image]'});
    const videoPopups = new ThModal({mode:'video', groupSelector: '[data-modal-videos]', itemSelector: '[data-modal-video]',useVideoElement: true});
</script>
    <?php if ($thePage != "index") { ?>
<script src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/foundation.min.js"></script> 
<script src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/slick.min.js"></script> 
<script src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/jquery.colorbox-min.js" defer></script>
<script src="https://cdn.treehouseinternetgroup.com/cms_core/assets/site.js" defer></script> 
    <?php } ?>   
 <script type="text/javascript" src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/contact-zip-lookup.js"></script>
        
        <?php if ($thePage == "schedule-service/emergency-service") { ?>
        <script>
        //page callout switch
        const pageCallout = document.querySelector('p.page_bottom_estimate_callout');
        pageCallout.innerHTML = "Not an emergency but looking for additional service to be done? Click here for a <a href=\"https://www.connecticutbasementsystems.com/free-estimate.html\">free estimate</a>.";
        </script>
        
        <?php } ?>    

  </body>

</html>
