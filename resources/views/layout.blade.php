<html lang="en">
   <head>
      <!-- Basic Page Needs
         ================================================== -->
      <title>Prime Professional </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- CSS
         ================================================== -->
      <style type="text/css">
         div#sign-in-dialog {
         top: 14%;
         position: fixed;
         margin: 0px auto;
         display: table;
         left: 0;
         right: 0;
         bottom: 0;
         width: 60%;
         } 
         a.button.button-sliding-icon.ripple-effect {
         width: 100% !important;
         }
         span.star {
         display: none !important;
         }
         .slider {
         width: 50%;
         margin: 100px auto;
         }
         .slick-slide {
         margin: 0px 10px;
         }
         .slick-slide img {
         width: 100%;
         }
         .slick-prev:before,
         .slick-next:before {
         color: black;
         }
      </style>
      <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
      <link rel="stylesheet" href="{{asset('css/blue.css')}}">
      <link href="{{asset('fontawesome-free-6.1.1-web/css/all.css')}}" rel="stylesheet">
      <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/48/9/intl/en_gb/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/48/9/intl/en_gb/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/48/9/intl/en_gb/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/48/9/intl/en_gb/places_impl.js"></script>
   </head>
   <body>
      <!-- Wrapper -->
      <div id="wrapper" style="padding-top: 82px;">
         <!-- Header Container
            ================================================== -->
         <header id="header-container" class="fullwidth" style="position: fixed;">
            <!-- Header -->
            <div id="header">
               <div class="container">
                  <!-- Left Side Content -->
                  <div class="left-side">
                     <!-- Logo -->
                     <div id="logo">
                        <a href="index.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
                     </div>
                     <!-- Main Navigation -->
                     <nav id="navigation">
                        <ul id="responsive">
                           <li>
                              <a href="#" class="current">Explore<i class="fa-solid fa-caret-down"></i></a>
                              <ul class="dropdown-nav">
                                 <li><a href="index.html">Security Systems</a></li>
                                 <li><a href="index-2.html">Electrical Services</a></li>
                                 <li><a href="index-3.html">Smart Home Automation</a></li>
                              </ul>
                           </li>
                           
                        </ul>
                     </nav>
                     <div class="clearfix"></div>
                     <!-- Main Navigation / End -->
                  </div>
                  <!-- Left Side Content / End -->
                  <!-- Right Side Content / End -->
                  <div class="right-side">
                     <div class="header-widget">
                        <a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
                     </div>
                     <!-- Mobile Navigation Button -->
                     <span class="mmenu-trigger">
                     <button class="hamburger hamburger--collapse" type="button">
                     <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                     </span>
                     </button>
                     </span>
                  </div>
                  <!-- Right Side Content / End -->
               </div>
            </div>
            <!-- Header / End -->
         </header>
         <div class="clearfix"></div>
         <!-- Header Container / End -->

         <div class="container">
            @section('container')
            @show
         </div>


         <!-- Footer
            ================================================== -->
         <div id="footer">
            <!-- Footer Top Section -->
            <div class="footer-top-section">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <!-- Footer Rows Container -->
                        <div class="footer-rows-container">
                           <!-- Left Side -->
                           <div class="footer-rows-left">
                              <div class="footer-row">
                                 <div class="footer-row-inner footer-logo">
                                    <img src="{{asset('images/logo2.png')}}" alt="">
                                 </div>
                              </div>
                           </div>
                           <!-- Right Side -->
                           <div class="footer-rows-right">
                              <!-- Social Icons -->
                              <div class="footer-row">
                                 <div class="footer-row-inner">
                                    <ul class="footer-social-links">
                                       <li>
                                          <a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="Facebook">
                                          <i class="fa-brands fa-facebook-f"></i>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="Twitter">
                                          <i class="fa-brands fa-twitter"></i>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="Google Plus">
                                          <i class="fa-brands fa-google-plus-g"></i>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="LinkedIn">
                                          <i class="fa-brands fa-linkedin-in"></i>
                                          </a>
                                       </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                              <!-- Language Switcher -->
                              <div class="footer-row">
                                 <div class="footer-row-inner">
                                    <div class="btn-group bootstrap-select language-switcher">
                                       <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="English"><span class="filter-option pull-left">English</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                       <div class="dropdown-menu open" role="combobox">
                                          <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                             <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">English</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                             <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Français</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                             <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Español</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                             <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Deutsch</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                          </ul>
                                       </div>
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Footer Rows Container / End -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Top Section / End -->
            <!-- Footer Middle Section -->
            <div class="footer-middle-section">
               <div class="container">
                  <div class="row">
                     <!-- Links -->
                     <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                           <h3>For Candidates</h3>
                           <ul>
                              <li><a href="#"><span>Browse Jobs</span></a></li>
                              <li><a href="#"><span>Add Resume</span></a></li>
                              <li><a href="#"><span>Job Alerts</span></a></li>
                              <li><a href="#"><span>My Bookmarks</span></a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Links -->
                     <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                           <h3>For Employers</h3>
                           <ul>
                              <li><a href="#"><span>Browse Candidates</span></a></li>
                              <li><a href="#"><span>Post a Job</span></a></li>
                              <li><a href="#"><span>Post a Task</span></a></li>
                              <li><a href="#"><span>Plans &amp; Pricing</span></a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Links -->
                     <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                           <h3>Helpful Links</h3>
                           <ul>
                              <li><a href="#"><span>Contact</span></a></li>
                              <li><a href="#"><span>Privacy Policy</span></a></li>
                              <li><a href="#"><span>Terms of Use</span></a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Links -->
                     <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                           <h3>Account</h3>
                           <ul>
                              <li><a href="#"><span>Log In</span></a></li>
                              <li><a href="#"><span>My Account</span></a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Newsletter -->
                     <div class="col-xl-4 col-lg-4 col-md-12">
                        <h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
                        <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                        <form action="#" method="get" class="newsletter">
                           <input type="text" name="fname" placeholder="Enter your email address">
                           <button type="submit"><i class="fa-solid fa-right-long"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Middle Section / End -->
            <!-- Footer Copyrights -->
            <div class="footer-bottom-section">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        © 2022 <strong>prime</strong>. All Rights Reserved.
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Copyrights / End -->
         </div>
         <!-- Footer / End -->
      </div>
      <!-- Wrapper / End -->
      <div id="sign-in-dialog" class="zoom-anim-dialog dialog-with-tabs">
         <!--Tabs -->
         <div class="sign-in-form">
            <ul class="popup-tabs-nav">
               <li class="active"><a href="#login">Log In</a></li>
               <li><a href="#register">Register</a></li>
            </ul>
            <div class="popup-tabs-container">
               <!-- Login -->
               <div class="popup-tab-content" id="login" style="">
                  <!-- Welcome Text -->
                  <div class="welcome-text">
                     <h3>We're glad to see you again!</h3>
                     <span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
                  </div>
				  <div class="account-type">
                     <div>
                        <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked="">
                        <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Customer</label>
                     </div>
                     <div>
                        <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio">
                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Professional</label>
                     </div>
                  </div>
                  <!-- Form -->
                  <form method="post" id="login-form">
                     <div class="input-with-icon-left">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required="">
                     </div>
                     <div class="input-with-icon-left">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required="">
                     </div>
                     <a href="#" class="forgot-password">Forgot Password?</a>
                  </form>
                  <!-- Button -->
                  <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form" style="width: 30px;"><a href="https://webhosting.busybanda.com/Prime_Professional_Portal/profile.html" style="color: fff;">Log In <i class="icon-material-outline-arrow-right-alt"></i></a></button>
                  <!-- Social Login -->
                  <div class="social-login-separator"><span>or</span></div>
                  <div class="social-login-buttons">
                     <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
                     <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
                  </div>
               </div>
               <!-- Register -->
               <div class="popup-tab-content" id="register" style="display: none;">
                  <!-- Welcome Text -->
                  <div class="welcome-text">
                     <h3>Let's create your account!</h3>
                  </div>
                  <!-- Account Type -->
                  <div class="account-type">
                     <div>
                        <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked="">
                        <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Customer</label>
                     </div>
                     <div>
                        <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio">
                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Professional</label>
                     </div>
                  </div>
                  <!-- Form -->
                  <form method="post" id="register-account-form">
                     <div class="input-with-icon-left">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required="">
                     </div>
                     <div class="input-with-icon-left" data-tippy-placement="bottom" data-tippy="" data-original-title="Should be at least 8 characters long">
                       <i class="fa-solid fa-lock"></i>
                        <input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required="">
                     </div>
                     <div class="input-with-icon-left">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required="">
                     </div>
					 <div class="input-with-icon-left">
                       <i class="fa-solid fa-address-book"></i>
                        <input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Address" required="">
                     </div>
					 <div class="input-with-icon-left">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Phone Number" required="">
                     </div>
					 
                  </form>
                  <!-- Button -->
                  <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form" style="width: 30px;">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
                  <!-- Social Login -->
                  <div class="social-login-separator"><span>or</span></div>
                  <div class="social-login-buttons">
                     <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
                     <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
                  </div>
               </div>
            </div>
         </div>
         <button title="Close (Esc)" type="button" class="mfp-close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <!-- Scripts
         ================================================== -->
      <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{asset('js/jquery-migrate-3.1.0.min.js')}}"></script>
      <script src="{{asset('slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
      <script src="{{asset('js/mmenu.min.js')}}"></script>
      <script src="{{asset('js/tippy.all.min.js')}}"></script>
      <script src="{{asset('js/simplebar.min.js')}}"></script>
      <script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
      <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('js/snackbar.js')}}"></script>
      <script src="{{asset('js/clipboard.min.js')}}"></script>
      <script src="{{asset('js/counterup.min.js')}}"></script>
      <script src="{{asset('js/magnific-popup.min.js')}}"></script>
      <script src="{{asset('js/slick.min.js')}}"></script>
      <script src="{{asset('js/slick.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
      <script type="text/javascript">
         $(document).on('ready', function() {
          
           $(".center").slick({
             dots: false,
             infinite: true,
             centerMode: true,
             slidesToShow: 3,
             slidesToScroll: 3
           });
           
         });
      </script>
      <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
	Snackbar.show({
		text: 'Copied to clipboard!',
	}); 
}); 
</script>

      <!-- Google Autocomplete -->
      <script>
         function initAutocomplete() {
         	 var options = {
         	  types: ['(cities)'],
         	  // componentRestrictions: {country: "us"}
         	 };
         
         	 var input = document.getElementById('autocomplete-input');
         	 var autocomplete = new google.maps.places.Autocomplete(input, options);
         }
         
         // Autocomplete adjustment for homepage
         if ($('.intro-banner-search-form')[0]) {
             setTimeout(function(){ 
                 $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
             }, 300);
         }
         
      </script>
      <!-- Google API -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>
      <div id="backtotop" class=""><a href="#"><i class="fa-solid fa-caret-up" style="margin-top: 10px !important;"></i></a></div>
      <div class="pac-container pac-logo" style="display: none; width: 504px; position: absolute; left: 374px; top: 466px;"></div>
   </body>
</html>