<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>[[title]]</title>
    	<meta name="description" content="[[description]]">
    	<meta name="keywords" content="[[keywords]]">
    	<link rel="icon" href="https://cdn.treehouseinternetgroup.com/cms_images/3168/favicon.png">
		[[css_head_helper]]
		<link rel="stylesheet" href="https://cdn.treehouseinternetgroup.com/cms_core/assets/[[page_type]]-22-test.css?v12345">
        <style>
        [[inline_css]]
        /* Dev warning banner */
            .alert-box.warning {
                position: fixed;
                bottom: 0;
                z-index: 1000;
                width: 100%;
                margin: 0;
                background: #000;
                padding: 10px 20px;
                font-size: 14px;
                color: #fff
            }
            
            .alert-box.warning a {
                color: #fffb6b;
                text-decoration: underline;
                font-weight: bold;
                font-size: 12px;
                text-transform: uppercase;
            }
            
            .alert-box.warning br {
                display: none;
            }
        </style>
        <link rel="stylesheet" as="style" onload="this.rel='stylesheet';this.onload=null;" href="/inc/sb-styles.css">
        <?php if ($isCityPage == true) { ?>
            [[citypage_css]]
        <?php 
        }
        ?>

        
	</head>

	<body>
		<div id="template-wrap"
			class="prose max-w-none md:prose-lg prose-h1:text-brand-dark prose-h2:font-semibold prose-ul:list-none prose-ul:pl-0 prose-li:pl-0">
			<!--------------
      **** HEADER ****
      --------------->
			<div
				id="header"
				class="not-prose relative mx-auto grid max-w-7xl grid-cols-[auto,1fr] grid-rows-[auto,auto] items-center md:gap-y-5 md:px-4">
				<div
					id="logo"
					class="p-3 md:row-span-full md:px-0">
					<a href="/">
						<img
							class="h-16 md:h-24 w-auto"
							src="https://cdn.treehouseinternetgroup.com/cms_images/3289/gs-triangle-logo-stacked.svg" width="250" />
					</a>
				</div>
				<div
					id="header--phone"
					class="col-span-full row-start-1 flex h-fit justify-center gap-8 bg-brand-dark px-6 py-3 text-white md:col-start-2 md:row-span-1 md:w-fit md:items-center md:justify-between md:justify-self-end md:rounded-b-xl">
					<p class="hidden md:block">Proudly serving [territory]</p>
					<p class="flex items-center gap-2 font-extrabold">
						<?php
						    $times = get_open_time();
                                if($times or isset($_GET['open'])) { ?>
                                    <span
							class="flex items-center rounded-lg bg-brand px-2 py-1 text-base uppercase">
							open
						</span>
                                <?php }
                            $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                            $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                            if($iphone || $android  == true) { ?>
						
						    <a href="tel:<?php echo $phonenumber; ?>" class="phone_link text-2xl">
    
                                <? } else { ?>
    
                                <a href="/free-estimate.html" class="phone_link text-2xl">
                            <?php } ?>
                            
                            [[phone]]
                            </a>
					</p>
				</div>
				<!-- SUPER NAV TOOL -->
                  [[top_nav]]
                <!-- END SUPER NAV TOOL -->
		    </div>
			<?php if ($thePage == "index") { ?>
			<!--------------
  ***** HERO *****
  --------------->
			<div
				id="hero"
				class="not-prose relative mb-20 max-w-full md:p-20">
				<picture>
					<source
						media="(min-width:768px)"
						srcset="
							https://cdn.treehouseinternetgroup.com/cms_images/3289/gs-barn-hang-hires.jpg
						" />
					<img
						class="md:absolute inset-0 w-full h-[200px] md:h-full object-cover object-left sm:object-center"
						src="https://cdn.treehouseinternetgroup.com/cms_images/3289/gs-barn-hang-767.jpg" />
				</picture>
				<!--<img class="md:absolute inset-0 w-full h-[200px] md:h-full object-cover object-left sm:object-center"
        src="https://cdn.treehouseinternetgroup.com/cms_images/3289/Matt-W-Barn-Hang-New-Gtter-Shutter-photo-June-2022(1300).png" />-->
			
				<div
					class="relative mx-auto flex h-full max-w-5xl items-center justify-center sm:justify-end">
					<div
						id="hero--text"
						class="w-full pt-6 text-center text-white md:w-fit md:bg-opacity-80 md:pt-8">
					
						<div class="block w-full bg-white">
						    <h1>[[Main Message Text]]</h1>
						    	 <!--<img
							src="https://cdn.treehouseinternetgroup.com/cms_images/3289/spring_flowers_img.jpg"
						/>-->
		
						    		<p
							class="mx-4 block text-lg font-normal text-black md:mx-8 md:text-2xl">
							<span class="block text-3xl font-extrabold uppercase md:text-4xl">
								XXXXX off
							</span>
							a complete Gutter Shutter System!
							<sup><a href="/about-us/coupons.html">*</a></sup>
						</p>
							<p class="text-lg font-semibold text-black md:text-2xl">
								From [state]'s Most Trusted Gutter Company
							</p>
							<a class="btn btn--cta mt-3" href="/free-estimate.html" title="Get a free estimate">Get Your Free Estimate</a>
							</div>
					
					</div>
				</div>
			</div>
			<?php
            }
            else
            {
            ?>
                <!---------------
                *** Page Wrap ***
                ---------------->
                <div id="pageWrap"
                    class="max-w-full border-t border-slate-200">
                    
                    <?php if (stristr($thePage,"gutter-installation"))
                    {
                    ?>
    <!-----------------
    *** Banner Form ***
    ------------------>
	<div class="not-prose relative mb-16">
		<div class="inset-0 mx-auto max-w-5xl md:absolute md:max-w-none md:px-0">
			<div
				class="absolute inset-0 from-white to-transparent to-60% md:bg-gradient-to-l"></div>
			<picture>
				<source
					media="(min-width:768px)"
					srcset="
						https://cdn.treehouseinternetgroup.com/cms_core/images/gs/gs-beauty-banner.jpg
					" />
				<img
					class="h-44 w-full object-cover md:h-[415px] md:object-left-top"
					src="https://cdn.treehouseinternetgroup.com/cms_core/images/gs/gs-beauty-banner-sm.jpg" />
			</picture>
		</div>
		<div class="mx-auto justify-end md:flex md:max-w-5xl md:px-5">
			<div
				id="form-wrap"
				class="relative shadow-xl md:max-w-lg md:translate-y-10">
				<div
					id="submit-loader"
					class="absolute inset-0 z-10 hidden items-center justify-center bg-slate-100 bg-opacity-90">
					<div class="relative h-16 w-16 rounded-full">
						<div
							class="absolute left-[16px] top-0 h-5 w-5 origin-[16px_32px] animate-[spin_1s_ease_infinite] rounded-full bg-brand-dark"></div>
						<div
							class="absolute left-[16px] top-0 h-5 w-5 origin-[16px_32px] animate-[spin_1s_ease_.1s_infinite] rounded-full bg-brand-dark opacity-80"></div>
						<div
							class="absolute left-[16px] top-0 h-5 w-5 origin-[16px_32px] animate-[spin_1s_ease_.2s_infinite] rounded-full bg-brand-dark opacity-60"></div>
					</div>
				</div>
				<div class="bg-brand-dark px-6 py-6 text-center text-white md:px-10">
					<p class="mb-2 text-2xl font-extrabold md:text-3xl">
						xxx off a complete Gutter Shutter System!*
					</p>
					<p class="text-lg font-thin md:text-2xl">
						Never Clean Your Gutters Again!
					</p>
				</div>
				<div class="bg-slate-100 px-6 py-8 md:px-10">
					<form id="contact_form" action="/free-estimate/confirmation.html" method="post" novalidate="true">
					    <input type="hidden" name="save" value="1">
						<div
							id="step-dot-container"
							class="mx-auto mb-6 flex w-fit items-center">
							<span class="step active"><small>1</small></span>
							<div class="w-16 border-y border-brand-dark opacity-40"></div>
							<span class="step"><small>2</small></span>
							<div class="w-16 border-y border-brand-dark opacity-40"></div>
							<span class="step"><small>3</small></span>
						</div>
						<!-- TAB 1 -->
						<div class="tab current grid-cols-6 gap-4 md:gap-6">
							<div class="col-span-3 flex flex-col">
								<label for="First_Name">First Name</label>
								<input
									type="text"
									id="First_Name"
									name="First_Name"
									placeholder=""
									maxlength="50"
									required="" />
							</div>
							<div class="col-span-3 flex flex-col">
								<label for="Last_Name">Last Name</label>
								<input
									type="text"
									id="Last_Name"
									name="Last_Name"
									placeholder=""
									maxlength="50"
									required="" />
							</div>
						</div>
						<!-- TAB 2 -->
						<div class="tab grid-cols-6 gap-4 md:gap-6">
							<div class="col-span-full flex flex-col">
								<label for="Street_Address">Street Address</label>
								<input
									id="Street_Address"
									name="Street"
									type="text"
									title="please enter a valid street address"
									required="" />
							</div>
							<div class="col-span-3 flex flex-col md:col-span-2">
								<label for="City">City</label>
								<input
									id="City"
									name="City"
									type="text"
									title="please enter a valid city"
									required="" />
							</div>
							<div class="col-span-3 flex flex-col md:col-span-2">
								<label for="State">State</label>
								<select
									name="State"
									id="State"
									required="required">
									<option value="">Select...</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>
							</div>
							<div class="col-span-3 flex flex-col md:col-span-2">
								<label for="Zip_Code">Zip Code</label>
								<input
									type="text"
									id="Zip"
									name="Zip_Code"
									maxlength="10"
									data-validate-zip=""
									required="" />
							</div>
							<div class="col-span-3 flex flex-col">
								<label for="Phone">Phone Number</label>
								<input
									type="text"
									id="Phone"
									name="Phone"
									data-validate-phone=""
									required="" />
							</div>
							<div class="col-span-full flex flex-col md:col-span-3">
								<label for="Email_Address">Email Address</label>
								<input
									id="Email_Address"
									name="Email_Address"
									type="email"
									title="please enter a valid email address"
									required="" />
							</div>
						</div>
						<!-- TAB 3 -->
						<div class="tab grid-cols-6 gap-4 md:gap-6">
							<div class="col-span-full flex flex-col">
								<label for="What_Prompted_Id">
									What prompted you to contact us?
								</label>
								<input
									type="hidden"
									id="lead_what_prompted_response"
									name="What_Prompted_Response"
									value="" />
								<select
									id="lead_what_prompted_id"
									name="What_Prompted_Id"
									required="">
									<option value="">Please select...</option>
									<option value="1">Referral</option>
									<option value="2">Previous Customer</option>
									<option value="3">Internet / Web Search</option>
									<option value="4">TV</option>
									<option value="5">Radio</option>
									<option value="6">Mail</option>
									<option value="7">Billboards</option>
									<option value="8">Other</option>
								</select>
							</div>
							<div class="col-span-full flex flex-col">
								<label for="Message">
									What type of service are you requesting?
								</label>
								<textarea
									id="Message"
									name="Message"
									rows="3"></textarea>
							</div>
						</div>
						<!-- NAV BUTTONS -->
						<div>
							<div
								id="btn-container"
								class="mx-auto mt-8 flex w-fit justify-between gap-4">
								<button
									type="button"
									id="prevBtn"
									class="rounded-full border-2 border-brand-dark px-6 py-1 text-base font-semibold text-brand-dark"
									onclick="nextPrev(-1)"
									style="display: none">
									Previous Step
								</button>
								<button
									class="rounded-full border-2 border-brand-dark bg-brand-dark px-6 py-1 text-base font-semibold text-white"
									type="button"
									id="nextBtn"
									onclick="nextPrev(1)">
									Next Step
								</button>
								<input
									class="rounded-full border-2 border-brand-dark bg-brand-dark px-6 py-1 text-base font-semibold text-white"
									type="submit"
									value="Send Request"
									style="display: none" />
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /#form-wrap -->
			<style>
				#contact_form .tab {
					display: none;
				}
				#contact_form .tab.current {
					display: grid;
				}
				label.error {
					color: #f04124;
					font-weight: normal;
					font-size: 0.85rem;
					line-height: 1;
					padding-top: 0.35rem;
				}
				input.error,
				select.error,
				textarea.error {
					background-color: #fff5f6 !important;
					border: 1px solid red !important;
				}
			</style>
			<script
				type="text/javascript"
				src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/th_form_validator.js?v=1"></script>
			<script>
				const validator = new ThFormValidator("contact_form", {
					disableSubmit: true,
				});
			</script>
			<script>
				var currentTab = 0;
				const emailAddress = document.querySelector("#Email_Address");
				const phone = document.querySelector("#Phone");
				const zip = document.querySelector("#Zip");
				const btns = document.querySelector("#btn-container");
				const submit = document.querySelector("input[type='submit']");
				const prevBtn = document.querySelector("#prevBtn");
				const nextBtn = document.querySelector("#nextBtn");
				const form = document.querySelector("#contact_form");
				const tabs = document.querySelectorAll("#contact_form .tab");
				const steps = document.querySelectorAll("#contact_form .step");
				const whatPromptedSelect = document.getElementById(
					"lead_what_prompted_id"
				);
				const whatPromptedResponse = document.getElementById(
					"lead_what_prompted_response"
				);

				form.addEventListener("submit", function (e) {
					e.preventDefault();
					const errorFields = validator.validateAll();
					if (errorFields.length) {
						errorFields[0].focus();
						return;
					}
					document
						.querySelector('#contact_form [type="submit"]')
						.setAttribute("disabled", "disabled");
					document.querySelector("#submit-loader").classList.add("loading");
					this.submit();
				});

				whatPromptedSelect.addEventListener("change", (e) => {
					whatPromptedResponse.value = whatPromptedSelect.value;
				});

				function showTab(n) {
					document
						.querySelector("#contact_form .tab.current")
						.classList.remove("current");
					tabs[n].classList.add("current");
					document
						.querySelector("#contact_form .step.active")
						.classList.remove("active");
					steps[n].classList.add("active");
					steps[n].classList.remove("finish");

					if (n == 0) {
						prevBtn.style.display = "none";
						btns.classList.add("w-fit");
						btns.classList.remove("w-full");
					} else {
						prevBtn.style.display = "inline-block";
						btns.classList.add("w-full");
						btns.classList.remove("w-fit");
					}
					if (n == 1) {
						nextBtn.style.display = "inline-block";
					}
					if (n == 2) {
						nextBtn.style.display = "none";
						submit.style.display = "inline-block";
					} else {
						submit.style.display = "none";
					}

					let element = document.getElementById("contact_form");
					//let header = document.getElementById("header");
					//let headerOffset = header.offsetHeight;
					let paddingOffset = "30";
					let elementPosition = element.getBoundingClientRect().top;
					let offsetPosition =
						elementPosition + window.pageYOffset - paddingOffset;

					if (window.innerWidth < 768) {
						if (n >= 1) {
							window.scrollTo({
								top: offsetPosition,
								behavior: "smooth",
							});
						}
					}
				}

				function nextPrev(n) {
					if (n == 1 && validator) {
						const errorFields = validator.validateAll(tabs[currentTab]);
						if (errorFields.length) {
							errorFields[0].focus();
							return false;
						}
						steps[currentTab].classList.add("finish");
					}
					currentTab = currentTab + n;
					showTab(currentTab);
					return false;
				}
			</script>
		</div>
	</div>
                    <?php
                }
                else
                {
                ?>
    <?php 
    if ((strpos($thePage, "free-estimate") === false) && ($isCityPage == 0)) { ?>
    <!-----------------
        *** Silo Banner ***
        ------------------>
                    <div
        				id="siloBanner"
        				class="not-prose relative flex h-20 max-w-full items-center justify-center overflow-hidden bg-brand-dark md:h-40">
        				<img
        					class="absolute inset-0 h-full w-full object-cover opacity-30"
        					src="https://cdn.treehouseinternetgroup.com/cms_core/images/gs/gutter-shutter-default.jpg"
        					alt="Gutter Shutter no-clog gutter guards" />
        				<div class="absolute h-full w-full bg-brand-dark opacity-80"></div>
        				<div class="relative text-center">
        					<p class="z-10 text-2xl font-light text-white md:text-4xl">
        						<?php echo $cmsPageData['page.name']; ?>
        					</p>
        				</div>
        			</div>
    <?php 
    }
    ?>
                <?php 
                }
                ?>
                    
                    <?php if (stristr($thePage,"about-us")) { ?>
                        [[sidebar_nav_css]]
                        <div id="silo-sidebar">
                            <div id="sidebar-nav">[[single_silo_nav]]</div>
                        </div>
                    <?php } ?>
                    
                    <div id="contentWrap" class="mx-auto max-w-5xl px-5 py-10">
		                <div id="crumbs" class="not-prose mb-10">[[breadcrumbs]]</div>    
                
            <?php
            }
            ?>
            
			[[content]]
		        
		  <?php if ($thePage != "index") { ?>
		        </div><!-- End contentWarp -->
		        
		    </div><!-- End pageWrap -->
		  <?php
		  }
		  ?>
<!---------
  *** Map ***
  ---------->
        <?php if ((strpos($thePage, "free-estimate") === false) && ($isCityPage == 0) && (strpos($thePage, "service-area") === false) ) { ?>
			<div
				id="map"
				class="relative text-white">
				<div class="not-prose inset-0 h-72 md:absolute md:h-full z-0">
					[[service_area_google_map]]
				</div>
				<div class="relative mx-auto max-w-7xl z-10">
					<div
						class="w-full bg-brand-dark px-10 pb-16 pt-1 md:w-fit md:bg-opacity-90 md:shadow-xl">
						<h2 class="text-brand-bright">Our Service Area</h2>
						<div class="not-prose">
						[[city_scroll:50]]
						</div>
					</div>
				</div>
			</div>
		<?php
    	}
    	?>
			<!------------
  *** Footer ***
  ------------->
			<div
				id="footer"
				class="not-prose max-w-full bg-gray-800 text-gray-300">
				<div
					class="mx-auto grid max-w-7xl justify-center gap-8 px-5 py-20 md:grid-cols-[30%,1fr]">
					<div class="text-center">
						<a
							href=""
							class="btn btn--cta mb-5 !rounded-full text-2xl">
							Get a Free Quote
						</a>
					
						<p class="mt-8 text-base">Or call us at:</p>
						<div class="mb-4 block text-3xl font-semibold text-brand-bright">
							[[phone]]
						</div>
						<p class="text-base">
							&copy; <?php echo(date('Y')); ?> [[display_addresses]]
						</p>
						<div class="mt-4">[[social_footer]]</div>
					</div>
					<div id="footer-nav">
					    [[footer_nav]]
					</div>
				</div>
			</div>
		</div>
		<!-- end #template-wrap -->
		
		<script>
		// Sticky Header & Nav

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
    var content = document.getElementById("contentWrap");
    var sidebar = subnav.parentElement;
    if (window.innerWidth >= 1024 && content.offsetHeight > subnav.offsetHeight) {
        var banner = document.getElementById("siloBanner");
        contentMT = window.getComputedStyle(content).getPropertyValue("margin-top");
        contentMT = parseInt(contentMT.slice(0, -2));
        window.addEventListener("load", function () {
            subnav.style.width = sidebar.offsetWidth - 30 + "px";
        });
        window.addEventListener("resize", function () {
            subnav.style.width = sidebar.offsetWidth - 30 + "px";
        });
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
		<!-- Popup Modals -->
        <script src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/th_modals.js?v=1" type="text/javascript"></script>
        <script>
            const imagePopups = new ThModal({mode:'image', groupSelector: '[data-modal-gallery]', itemSelector: '[data-modal-image]'});
            const videoPopups = new ThModal({mode:'video', groupSelector: '[data-modal-videos]', itemSelector: '[data-modal-video]'});
        </script>
	</body>
</html>
