<?php global $siteTokens, $phonenumber, $isTrafficPpc, $cmsPageData;

$siteTokens['[[sidebar_nav_css]]'] = '
<style>
#pageWrap {
    display: grid;
}
#contentWrap {
    width: 100vw;
}
#silo-sidebar {
    order: 1;
    position: relative;
    width: 100%;
    padding: 1.5rem 1.25rem;
}
#sidebar-nav {
    height: fit-content;
    padding: 1rem 2rem;
    border-top: 3px solid rgb(0 149 218);
    background: #fff;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    border-radius: 0.25rem;
}
#sidebar-nav ul ul {
    margin-block:0;
}
#sidebar-nav>ul>li>a {
    font-size: 1.5rem;
    font-weight: 800;

}
#sidebar-nav ul li ul li a {
    margin: 0.5rem 0;
    display: block;
}
#sidebar-nav ul li ul li:not(:last-child) {
    border-bottom: 1px solid #dddddd;
}
#sidebar-nav a {
    color: #333;
    font-weight: 600;
}
#sidebar-nav a:hover {
    color: rgb(0 149 218);
    text-decoration: none;
}
#sidebar-nav li {
    position: relative;
}
#sidebar-nav ul li ul li::before {
    content: "";
    display: inline-block;
    height: 8px;
    width: 8px;
    border: 1px solid rgb(0 149 218);
    border-width: 3px 3px 0 0;
    transform: translate(-25px, 8px) rotateZ(45deg);
    position: absolute;
    opacity: 0;
    top: 3px;
    transition: 0.2s ease;
}
#sidebar-nav li:hover::before {
    opacity: 1;
    transform: translate(-16px, 8px) rotateZ(45deg);
}
@media screen and (min-width: 1024px){
    #siloBanner {
        grid-column: span 2;
        margin-bottom: 2.5rem;
    } 
    #pageWrap {
        grid-template-columns: auto auto;
        margin-bottom: 2.5rem;
    }
    #contentWrap {
        margin-right: 0;
        padding-block: 0;
        width: 65vw;
    }
    #silo-sidebar {
        width:300px;
        padding:0 0 0 1.25rem;
    }
    #sidebar-nav {
        width:calc(300px - 1.25rem);
    }
}
</style>';

$siteTokens['[[citypage_css]]'] = '
<style>
/*** City Pages ***/
.citypage_index.module{
    --cp-clr-primary:rgb(0 149 218);
    --cp-clr-dark: rgb(17 60 100);
}
.citypage_index.module #bread_crumbs {
    display:none;
}
.citypage_index img {
    margin-block: 0;
}
/** CP FORM **/
.cp-inline-form {
    box-shadow: 0px 3px 16px #00000027;
}
.inline-free-estimate-container .free-estimate-form-heading {
    color: var(--cp-clr-dark) !important;
}
.inline-free-estimate-container .step {
    background-color: var(--cp-clr-dark) !important;
    border:2px solid var(--cp-clr-dark) !important;
    opacity: .7
}
.inline-free-estimate-container .step small {
    color:#fff !important;
}
.inline-free-estimate-container .step.active {
    opacity: 1;
    color: var(--cp-clr-dark) !important;
    background-color: #fff !important;
}
.inline-free-estimate-container .step.active small {
    color: var(--cp-clr-dark) !important;
}
.inline-free-estimate-container .step.finish {
    opacity: 1;
    background-color: var(--cp-clr-dark) !important;
}
.inline-free-estimate-container .step-lines::after, .inline-free-estimate-container .step-lines::before {
    background-color: var(--cp-clr-dark) !important;
}
.inline-free-estimate-container #contact_form button, .inline-free-estimate-container #contact_form button, .inline-free-estimate-container #contact_form input[type="submit"]{
    background-color: var(--cp-clr-dark) !important;
    font-size: 1em;
    line-height: 1;
}
.inline-free-estimate-container #contact_form #prevBtn {
    border-color: currentColor !important;
    background-color: transparent !important;
    color: var(--cp-clr-dark) !important;
}

.inline-free-estimate-container #contact_form #prevBtn:hover {
    color: var(--cp-clr-dark) !important;
}
.inline-free-estimate-container .free-estimate-form-heading,
.inline-free-estimate-container label,
.inline-free-estimate-container span.step small {
    font-family: inherit !important;
}
.cp-review-stars img, .cp-case-study img, .widget_job_stories img {
    display: inline-block;
}
.citypage_map_legend p {
    font-size:1rem !important;
}
.citypage_index h2, .citypage_index p, .citypage_index a {
    font-family: inherit !important;
}
.citypage_index h2 {
    font-weight: 600;
}
.citypage_index .widget_title, 
.citypage_index .widget_work_requests .widget_title {
    font-family: inherit !important;
    background-color: var(--cp-clr-dark) !important;
    color: #fff !important;
    font-size: 1.5rem;
    font-weight: 600;
    padding: 1rem;
}
.cp-header.cp-container-gray {
    background-color: transparent;
}

.cp-header .cp-row {
    padding: 0;
}

.widget_citypage_map .widget_content {
    padding: 0;
}
.widget_citypage_map .widget_title {
    font-size: 1.2rem;
    padding: 0.5rem 1rem;
}
.citypage_map_legend {
    border: 0;
    padding-top: .5rem;
}
.citypage_index .cp-ba-slider {
    margin-bottom: 0;
}
.citypage_index span.cp-ba-slide-title {
    background: rgba(15 23 42 / 70%);
    font-size: 1rem;
}
.citypage_index .cp-ba-desc p {
    margin: 0;
    padding: 1rem;
    background: #f8f8f8;
}
.citypage_index .widget.widget_job_stories,
.citypage_index .widget.widget_citypage_list{
    margin-inline: auto;
    max-width: 100%;
}
.citypage_index .widget.widget_job_stories .widget_content {
    font-size: inherit;
}

.citypage_index .job_summary_image img {
    padding: .5rem;
}
.citypage_index .widget_job_stories .widget_item {
    padding-bottom: 2rem;
    margin-bottom: 2rem;
}
</style>
';

$siteTokens['[[inline_step_form]]'] = '
<div id="inline-contact">
    <div class="wrapper contact_form">
            <div class="inline-free-estimate-container">
                <div id="form-heading">
                    <p class="free-estimate-form-heading">$1000 off a complete Gutter Shutter System!*</p>
                    <span>Never Clean Your Gutters Again!</span>
                </div>
                <form id="contact_form" action="/free-estimate/confirmation.html" method="post">
        <div id="submit-loader">
                <div class="loader-container">
                    <div class="loader load-1"></div>
                    <div class="loader load-2"></div>
                    <div class="loader load-3"></div>
                </div>
        </div>
        <input type="hidden" name="save" value="1">
        <!-- Circles which indicates the steps of the form: -->
        <div class="step-dot-container">
            <span class="step active"><small>1</small></span>
            <span class="step step-lines"><small>2</small></span>
            <span class="step"><small>3</small></span>
        </div>
        <!-- One "tab" for each step in the form: -->
        <div class="tab current">
            <div class="tab-content-wrap">
                <div id="fname-wrap" class="grid-span-6">
                    <label class="input-labels" for="First_Name">First Name</label>
                    <input type="text" id="First_Name" name="First_Name" placeholder="First Name" maxlength="50" required>
                </div>
                <div id="lname-wrap" class="grid-span-6">
                    <label class="input-labels" for="Last_Name">Last Name</label>
                    <input type="text" id="Last_Name" name="Last_Name" placeholder="Last Name" maxlength="50" required>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="tab-content-wrap">
                <div id="street-wrap" class="grid-span-12">
                    <label class="input-labels" for="Street_Address">Street Address</label>
                    <input id="Street_Address" name="Street" placeholder="Street Address" type="text" title="please enter a valid street address" required>
                </div>
                <div id="city-wrap" class="grid-span-4">
                    <label class="input-labels" for="City">City</label>
                    <input id="City" name="City" placeholder="City" type="text" title="please enter a valid city" required>
                </div>
                <div id="state-wrap" class="grid-span-4">
                    <label class="input-labels" for="State">State</label>
                    <select name="State" id="State" required="required">
                    <option value="">Please select...</option>
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
                <div id="zip-wrap" class="grid-span-4">
                    <label class="input-labels" for="Zip_Code">Your Zip Code</label>
                    <input type="text" id="Zip" name="Zip_Code" placeholder="Zip Code" maxlength="10" data-validate-zip required>
                </div>
                <div id="phone-wrap" class="grid-span-6">
                    <label class="input-labels" for="Phone">Phone Number</label>
                    <input type="text" id="Phone" name="Phone" placeholder="Phone" data-validate-phone required>
                </div>
                <div id="email-wrap" class="grid-span-6">
                    <label class="input-labels" for="Email_Address">Email Address</label>
                    <input id="Email_Address" name="Email_Address" placeholder="Email Address" type="email" title="please enter a valid email address" required>
                </div>
                
                
            </div>
        </div>
        <div class="tab">
            <div class="tab-content-wrap">
                <div id="prompted-wrap" class="grid-span-12">
                    <label class="input-labels" for="What_Prompted_Id">What prompted you to contact us?</label>
                    <input type="hidden" id="lead_what_prompted_response" name="What_Prompted_Response" value="">
                    <select id="lead_what_prompted_id" name="What_Prompted_Id" required>
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
                <div id="message-wrap" class="grid-span-12">
                    <label class="input-labels" for="Message">Describe your concerns:</label>
                    <textarea id="Message" type="text" name="Message" placeholder="Briefly describe the problem"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="btn-container">
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next Step</button>
                <input class="hidden" type="submit" value="Send" style="display: none;">
                <button type="button" id="prevBtn" class="hidden" onclick="nextPrev(-1)" style="display: none;">Previous Step</button>
            </div>
        </div>
    </form>
    </div>
    <div id="headerImg"><img src="https://cdn.treehouseinternetgroup.com/cms_images/3289/MattW_Barn-Hang-NoWindows.jpg" width="1000" height="400"></div>
    <script type="text/javascript" src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/th_form_validator.js?v=1"></script>
    <script>
        const validator = new ThFormValidator("contact_form", {disableSubmit: true});
    </script>
    <script>
        var currentTab = 0;
        const emailAddress = document.querySelector("#Email_Address");
        const phone = document.querySelector("#Phone");
        const zip = document.querySelector("#Zip");
        const submit = document.querySelector("input[type=\'submit\']");
        const prevBtn = document.querySelector("#prevBtn");
        const nextBtn = document.querySelector("#nextBtn");
        const form = document.querySelector("#contact_form");
        const tabs = document.querySelectorAll("#contact_form .tab");
        const steps = document.querySelectorAll("#contact_form .step");
        const whatPromptedSelect = document.getElementById("lead_what_prompted_id");
        const whatPromptedResponse = document.getElementById("lead_what_prompted_response");
        
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            const errorFields = validator.validateAll();
            if(errorFields.length) {
                errorFields[0].focus();
                return;
            }
            document.querySelector(\'#contact_form [type="submit"]\').setAttribute("disabled", "disabled");
            document.querySelector(\'#submit-loader\').classList.add("loading");
            this.submit();
        });
        
        whatPromptedSelect.addEventListener("change", (e) => {
            whatPromptedResponse.value = whatPromptedSelect.value;
        });
    
        function showTab(n) {
            document.querySelector("#contact_form .tab.current").classList.remove("current");
            tabs[n].classList.add("current");
            document.querySelector("#contact_form .step.active").classList.remove("active");
            steps[n].classList.add("active");
            steps[n].classList.remove("finish");

            if (n == 0) {
                prevBtn.style.display = "none";
            } else {
                prevBtn.style.display = "inline-block";
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
            let header = document.getElementById("header");
            let headerOffset = header.offsetHeight;
            let elementPosition = element.getBoundingClientRect().top;
            let offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            
            if (window.innerWidth < 768)  {
                if (n >= 1) {
                    window.scrollTo({
                         top: offsetPosition,
                         behavior: "smooth"
                    });
                }
            }
        }
    
        function nextPrev(n) {
            if (n == 1 && validator) {
                const errorFields = validator.validateAll(tabs[currentTab]);
                if(errorFields.length) {
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
            <style>
                /*  Inline Contact Form Container Styles */
                #inline-contact {
                    margin-block: 1rem 3rem;
                    width: min(1200px,100%);
                    margin-inline: auto;
                    padding-inline: .9375rem;
                }
                #inline-contact .wrapper {
                    display: grid;
                }
                #inline-contact .content_overlay {
                    padding: 2rem;
                    background-color: #fff;
                    max-width: 500px;
                }
                /* Form container and heading */
                .inline-free-estimate-container {
                    border: 0;
                    background-color: #e3ecf1;
                    position: relative;
                    box-shadow: 0 5px 15px rgb(0 0 0 / 15%);
                    z-index: 1;
                }
                .inline-free-estimate-container #form-heading {
                    text-align: center;
                    text-transform: none;
                    padding: 1.5rem;
                    color: #fff;
                    background-color: #173964;
                }
                .inline-free-estimate-container #form-heading p {
                    margin: 0 auto 1rem;
                    font-size: clamp(1.25rem, 3vw,1.75rem);
                    line-height: 2rem;
                    font-weight: 700;
                    text-transform: uppercase;
                }
                .inline-free-estimate-container #form-heading span {
                    font-size: clamp(1rem, 3vw, 1.25rem);
                    letter-spacing: .025rem;
                }
                #headerImg {
                        order:-1;
                    }
                #headerImg img {
                    object-fit: cover;
                    width: 100%;
                    object-position: left;
                }
                @media screen and (min-width: 969px){
                    #inline-contact .wrapper {
                        grid-template-columns: repeat(12, 1fr);
                        grid-template-rows: repeat(12,1fr);
                    }
                    .inline-free-estimate-container {
                        margin-top: 2rem;
                        grid-column: 6/-1;
                        grid-row: 1/-1;
                    }
                    #headerImg {
                        grid-column: 1/-1;
                        grid-row: 1/-1;
                        order:0;
                    }
                    #headerImg img {
                        -webkit-mask: linear-gradient(to right, #fff 50%, transparent);
                        height: 400px;
                    }
                }
                /* Hide all tabs by default: */
                .inline-free-estimate-container .tab-content-wrap {
                    display: grid;
                    grid-template-columns: repeat(12, 1fr);
                    grid-gap: 0 clamp(.75rem, 2vw, 1.5rem);
                }
                .inline-free-estimate-container .tab-content-wrap>div {
                    margin-bottom: 15px;
                }
                .inline-free-estimate-container .tab {
                    display: none;
                }
                .inline-free-estimate-container .tab.current {
                    display: block;
                }
                /* Make circles that indicate the steps of the form: */
                .inline-free-estimate-container .step-dot-container {
                    display: grid;
                    grid-template-columns: repeat(3, auto);
                    justify-content: center;
                    width: 100%;
                    grid-gap: 75px;
                    max-width: unset;
                    margin: 0 auto 1rem;
                }
                .inline-free-estimate-container .step {
                    height: 30px;
                    width: 30px;
                    margin: 0 2px;
                    border: 2px solid rgb(0 57 92 / 40%);
                    background-color: rgb(255 255 255 / 40%);
                    border-radius: 50%;
                    display: inline-block;
                    transition: none;
                    position: relative;
                    text-align: center;
                }
                .inline-free-estimate-container .step-lines {
                    position: relative;
                }
                .inline-free-estimate-container .step-lines::after,
                .inline-free-estimate-container .step-lines::before {
                    content: "";
                    position: absolute;
                    height: 2px;
                    background-color: rgb(0 57 92 / 40%);
                    width: 79px;
                }
                .inline-free-estimate-container .step-lines::before {
                    right: 28px;
                    top: 13px;
                }
                .inline-free-estimate-container .step-lines::after {
                    left: 28px;
                    top: 13px;
                }
                .inline-free-estimate-container span.step small {
                    font-size: 1rem;
                    display: inline-block;
                    text-align: center;
                    text-transform: uppercase;
                    font-weight: 700;
                    line-height: 0;
                    color: #003a5d;
                    position: absolute;
                    transform: translateX(-50%);
                    top: 50%;
                    opacity: .4;
                }
                /* Mark the active step: */
                .inline-free-estimate-container .step.active {
                    border: 2px solid #003a5d;
                    background-color: #fff;
                }
                .inline-free-estimate-container .step.active small {
                    color: #003a5d;
                    opacity: 1;
                }
                /* Mark the steps that are finished and valid: */
                .inline-free-estimate-container .step.finish {
                    background-color: #003a5d;
                    border: 2px solid #003a5d;
                }
                .inline-free-estimate-container .step.finish small {
                    color: #fff;
                    opacity: 1;
                }
                .inline-free-estimate-container .step.finish+.step-lines::before,
                .inline-free-estimate-container .step.finish.step-lines::after {
                    background-color: #003a5d;
                }
                /* Style the form */
                .inline-free-estimate-container #contact_form {
                    padding: 2rem;
                    width: min(650px, 100%);
                    margin-inline: auto;
                }
                /* Form layout grid */
                .inline-free-estimate-container #contact_form .grid-span-12 {
                    grid-column: span 12;
                }
                .inline-free-estimate-container #contact_form .grid-span-8 {
                    grid-column: span 8;
                }
                .inline-free-estimate-container #contact_form .grid-span-6 {
                    grid-column: span 6;
                }
                .inline-free-estimate-container #contact_form .grid-span-4 {
                    grid-column: span 4;
                }
                @media screen and (max-width: 768px) {
                    .inline-free-estimate-container #contact_form {
                        padding: 2rem 1rem;
                    }
                    .inline-free-estimate-container #contact_form div[class*="grid-span"] {
                        grid-column: span 12;
                    }
                }
                /* Style the input fields */
                .inline-free-estimate-container #contact_form input,
                .inline-free-estimate-container #contact_form select {
                    box-sizing: border-box;
                    display: block;
                    width: 100%;
                    outline: none;
                    margin-bottom: 0;
                }
                .inline-free-estimate-container #contact_form input::placeholder {
                    color: #ccc;
                }
                .inline-free-estimate-container label.input-labels {
                    font-weight: 700;
                    line-height: 1.25;
                    font-size: .95rem;
                    margin-bottom: 5px;
                    display: block;
                }
                .inline-free-estimate-container #contact_form select,
                .inline-free-estimate-container #contact_form textarea,
                .inline-free-estimate-container input[type="email"],
                .inline-free-estimate-container input[type="submit"],
                .inline-free-estimate-container input[type="text"] {
                    height: 3rem !important;
                    border-radius: 0.5rem;
                    border: 1px solid #d9d9d9;
                    box-shadow: none;
                    padding: 0.5rem 1rem !important;
                    font-size: 1rem !important;
                }
                .inline-free-estimate-container #contact_form select,
                .inline-free-estimate-container #contact_form textarea {
                    background-color: #fff;
                    border-style: solid;
                    border-width: 1px;
                    color: rgba(0, 0, 0, 0.75);
                    display: block;
                    font-family: inherit !important;
                    font-size: 0.875rem;
                    width: 100%;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }
                .inline-free-estimate-container #contact_form textarea {
                    padding-top: 1rem !important;
                    padding-bottom: 1rem !important;
                    width: 100%;
                    height: clamp(100px, 10vw, 150px) !important;
                    font-size: 16px;
                    font-family: arial, sans-serif;
                    box-sizing: border-box;
                }
                /* Mark input boxes that gets an error on validation: */
                .inline-free-estimate-container .invalid-label-hidden {
                    visibility: hidden;
                }
                .inline-free-estimate-container .invalid+label.invalid-label {
                    display: block;
                }
                .inline-free-estimate-container #contact_form input.error, 
                .inline-free-estimate-container #contact_form select.error {
                    background-color: #FFF5F6 !important;
                    border: 1px solid red !important;
                }
                .inline-free-estimate-container .invalid-label {
                    color: #f04124;
                    font-size: 12px;
                    display: none;
                    margin-bottom: 13px;
                }
                /* Form navigation and submit buttons */
                .inline-free-estimate-container #contact_form .btn-container {
                    display: grid;
                    grid-template-columns: auto auto;
                    justify-content: center;
                    padding-top: 1rem;
                }
                .inline-free-estimate-container #contact_form button,
                .inline-free-estimate-container #contact_form input[type="submit"] {
                    display: block;
                    width: 133px;
                    border-radius: 50px !important;
                    color: #fff;
                    font-weight: 700;
                    text-transform: uppercase;
                    background-color: #003a5d;
                    padding: 15px 0;
                    margin-bottom: 10px;
                    transition: all 0.1s ease;
                    outline: 0;
                    font-size: 0.85rem;
                    letter-spacing: 0;
                    margin: 0 !important;
                }
                .inline-free-estimate-container button#nextBtn {
                    order: 1;
                }
                .inline-free-estimate-container #contact_form #prevBtn {
                    background-color: transparent;
                    border: 2px solid #003a5d;
                    color: #003a5d;
                    order: -2;
                    margin-right: 1rem !important;
                }
                .inline-free-estimate-container #contact_form button:hover {
                    cursor: pointer;
                    background-color: #00588e;
                }
                .inline-free-estimate-container #contact_form #prevBtn:hover {
                    color: #00588e;
                    border-color: currentColor;
                }
                .inline-free-estimate-container #contact_form input[type="submit"] {
                    background-color: #CF421B;
                    border: 2px solid #CF421B;
                    font-size: 0.85rem !important;
                    font-family: sans-serif;
                }
                .inline-free-estimate-container #contact_form input[type="submit"]:hover {
                    background-color: #f13f0d;
                }
        /* Loader */
        #submit-loader {
            position:absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background-color: rgb(227 236 241 / 90%);
            z-index:100;
            display: none;
            justify-content: center;
            align-items: center;
        }
        #submit-loader.loading {
            display:flex;
        }
        .loader-container {
            position:relative;
            border-radius:50%;
            width:50px;
            height:50px;
        }
        .loader {
            position:absolute;
            top: 0;
            left: 15px;
            background:#173964;
            border-radius:50%;
            width:20px;
            height:20px;
            transform-origin:10px 25px;
            animation: load 1s ease infinite;
        }
        .load-2 {
            opacity: .8;
            animation: load 1s ease .1s infinite;
        }
        .load-3 {
            opacity: .6;
            animation: load 1s ease .2s infinite;
        }
        @keyframes load {
            0% {transform: rotate(0deg)}
            100% {transform: rotate(360deg)}
        }
            </style>
        </div>
    </div>
';
?>
