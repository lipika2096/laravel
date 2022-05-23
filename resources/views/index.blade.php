@extends('layout')
@section('container')


<!-- Intro Banner
            ================================================== -->
         <!-- add class "disable-gradient" to enable consistent background overlay -->
         <div class="intro-banner" data-background-images="{{asset('images/home-background.jpg')}}">
            <div class="container">
               <!-- Intro Headline -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="banner-headline">
                        <h3>
                           <strong>Hire experts or be hired for any job, any time.</strong>
                           <br>
                           <span>Thousands of small businesses use <strong class="color">Prime</strong> to turn their ideas into reality.</span>
                        </h3>
                     </div>
                  </div>
               </div>
               <!-- Search Bar -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="intro-banner-search-form margin-top-95">
                        <!-- Search Field -->
                        <div class="intro-search-field with-autocomplete with-label">
                           <label for="autocomplete-input" class="field-title ripple-effect">Where?</label>
                           <div class="input-with-icon">
                              <input id="autocomplete-input" type="text" placeholder="Online Job" class="pac-target-input" autocomplete="off">
                              <i class="icon-material-outline-location-on"></i>
                           </div>
                        </div>
                        <!-- Search Field -->
                        <div class="intro-search-field with-label">
                           <label for="intro-keywords" class="field-title ripple-effect">What job you want?</label>
                           <input id="intro-keywords" type="text" placeholder="Job Title or Keywords">
                        </div>
                        <!-- Button -->
                        <div class="intro-search-button">
                           <button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Search</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Stats -->
               <div class="row">
                  <div class="col-md-12">
                     <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                           <strong class="counter">1,533</strong>
                           <span>Jobs Posted</span>
                        </li>
                        <li>
                           <strong class="counter">3,307</strong>
                           <span>Recent Posted Jobs</span>
                        </li>
                        <li>
                           <strong class="counter">1,150</strong>
                           <span>Professional </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="background-image-container" style="background-image: url(images/home-background.jpg);""></div>
         </div>
         <!-- Content
            ================================================== -->
         <!-- Category Boxes -->
         <div class="section margin-top-65">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="section-headline centered margin-bottom-15">
                        <h3>Popular Job Categories</h3>
                     </div>
                     <!-- Category Boxes Container -->
                     <div class="categories-container">
                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-file-code"></i>
                           </div>
                           <div class="category-box-counter">612</div>
                           <div class="category-box-content">
                              <h3>Web &amp; Software Dev</h3>
                              <p>Software Engineer, Web / Mobile Developer &amp; More</p>
                           </div>
                        </a>
                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-cloud-arrow-up"></i>
                           </div>
                           <div class="category-box-counter">113</div>
                           <div class="category-box-content">
                              <h3>Data Science &amp; Analitycs</h3>
                              <p>Data Specialist / Scientist, Data Analyst &amp; More</p>
                           </div>
                        </a>
                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-suitcase"></i>
                           </div>
                           <div class="category-box-counter">186</div>
                           <div class="category-box-content">
                              <h3>Accounting &amp; Consulting</h3>
                              <p>Auditor, Accountant, Fnancial Analyst &amp; More</p>
                           </div>
                        </a>
                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-pen"></i>
                           </div>
                           <div class="category-box-counter">298</div>
                           <div class="category-box-content">
                              <h3>Writing &amp; Translations</h3>
                              <p>Copywriter, Creative Writer, Translator &amp; More</p>
                           </div>
                        </a>
                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-chart-pie"></i>
                           </div>
                           <div class="category-box-counter">549</div>
                           <div class="category-box-content">
                              <h3>Sales &amp; Marketing</h3>
                              <p>Brand Manager, Marketing Coordinator &amp; More</p>
                           </div>
                        </a>
                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-images"></i>
                           </div>
                           <div class="category-box-counter">873</div>
                           <div class="category-box-content">
                              <h3>Graphics &amp; Design</h3>
                              <p>Creative Director, Web Designer &amp; More</p>
                           </div>
                        </a>
                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-bullhorn"></i>
                           </div>
                           <div class="category-box-counter">125</div>
                           <div class="category-box-content">
                              <h3>Digital Marketing</h3>
                              <p>Darketing Analyst, Social Profile Admin &amp; More</p>
                           </div>
                        </a>
                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                           <div class="category-box-icon">
                              <i class="fa-solid fa-graduation-cap"></i>
                           </div>
                           <div class="category-box-counter">445</div>
                           <div class="category-box-content">
                              <h3>Education &amp; Training</h3>
                              <p>Advisor, Coach, Education Coordinator &amp; More</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Category Boxes / End -->
         <!-- Features Jobs -->
         <div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <!-- Section Headline -->
                     <div class="section-headline margin-top-0 margin-bottom-35">
                        <h3>Recent Jobs</h3>
                        <a href="jobs-list-layout-full-page-map.html" class="headline-link">Browse All Jobs</a>
                     </div>
                     <!-- Jobs Container -->
                     <div class="listings-container compact-list-layout margin-top-35">
                        <!-- Job Listing -->
                        <div href="single-job-page.html" class="job-listing with-apply-button">
                           <!-- Job Listing Details -->
                           <div class="job-listing-details">
                              <!-- Logo -->
                              <div class="job-listing-company-logo">
                                 <img src="{{asset('images/company-logo-01.png')}}" alt="">
                              </div>
                              <!-- Details -->
                              <div class="job-listing-description">
                                 <h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
                                 <!-- Job Listing Footer -->
                                 <div class="job-listing-footer">
                                    <ul>
                                       <li>
                                          <i class="icon-material-outline-business"></i> Hexagon 
                                          <div class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></div>
                                       </li>
                                       <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                       <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                       <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-- Apply Button -->
                              <span class="list-apply-button ripple-effect"><a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services">Apply Now</a></span>
                           </div>
                        </div>
                        <!-- Job Listing -->
                        <div href="single-job-page.html" class="job-listing with-apply-button">
                           <!-- Job Listing Details -->
                           <div class="job-listing-details">
                              <!-- Logo -->
                              <div class="job-listing-company-logo">
                                 <img src="{{asset('images/company-logo-05.png')}}" alt="">
                              </div>
                              <!-- Details -->
                              <div class="job-listing-description">
                                 <h3 class="job-listing-title">Competition Law Officer</h3>
                                 <!-- Job Listing Footer -->
                                 <div class="job-listing-footer">
                                    <ul>
                                       <li><i class="icon-material-outline-business"></i> Laxo</li>
                                       <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                       <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                       <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-- Apply Button -->
                              <span class="list-apply-button ripple-effect"><a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services">Apply Now</a></span>
                           </div>
                        </div>
                        <!-- Job Listing -->
                        <div href="single-job-page.html" class="job-listing with-apply-button">
                           <!-- Job Listing Details -->
                           <div class="job-listing-details">
                              <!-- Logo -->
                              <div class="job-listing-company-logo">
                                 <img src="{{asset('images/company-logo-02.png')}}" alt="">
                              </div>
                              <!-- Details -->
                              <div class="job-listing-description">
                                 <h3 class="job-listing-title">Barista and Cashier</h3>
                                 <!-- Job Listing Footer -->
                                 <div class="job-listing-footer">
                                    <ul>
                                       <li><i class="icon-material-outline-business"></i> Coffee</li>
                                       <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                       <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                       <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-- Apply Button -->
                              <span class="list-apply-button ripple-effect"><a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services">Apply Now</a></span>
                           </div>
                        </div>
                        <!-- Job Listing -->
                        <div href="single-job-page.html" class="job-listing with-apply-button">
                           <!-- Job Listing Details -->
                           <div class="job-listing-details">
                              <!-- Logo -->
                              <div class="job-listing-company-logo">
                                 <img src="{{asset('images/company-logo-03.png')}}" alt="">
                              </div>
                              <!-- Details -->
                              <div class="job-listing-description">
                                 <h3 class="job-listing-title">Restaurant General Manager</h3>
                                 <!-- Job Listing Footer -->
                                 <div class="job-listing-footer">
                                    <ul>
                                       <li>
                                          <i class="icon-material-outline-business"></i> King 
                                          <div class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></div>
                                       </li>
                                       <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                       <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                       <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-- Apply Button -->
                              <span class="list-apply-button ripple-effect"><a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services">Apply Now</a></span>
                           </div>
                        </div>
                        <!-- Job Listing -->
                        <div href="single-job-page.html" class="job-listing with-apply-button">
                           <!-- Job Listing Details -->
                           <div class="job-listing-details">
                              <!-- Logo -->
                              <div class="job-listing-company-logo">
                                 <img src="{{asset('images/company-logo-05.png')}}" alt="">
                              </div>
                              <!-- Details -->
                              <div class="job-listing-description">
                                 <h3 class="job-listing-title">International Marketing Coordinator</h3>
                                 <!-- Job Listing Footer -->
                                 <div class="job-listing-footer">
                                    <ul>
                                       <li><i class="icon-material-outline-business"></i> Skyist</li>
                                       <li><i class="icon-material-outline-location-on"></i> San Francissco</li>
                                       <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                       <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-- Apply Button -->
                              <span class="list-apply-button ripple-effect"><a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services">Apply Now</a></span>
                           </div>
                        </div>
                     </div>
                     <!-- Jobs Container / End -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Featured Jobs / End -->
         <!-- Features Cities -->
         <div class="section margin-top-65 margin-bottom-65">
            <div class="container">
               <div class="row">
                  <!-- Section Headline -->
                  <div class="col-xl-12">
                     <div class="section-headline centered margin-top-0 margin-bottom-45">
                        <h3>Featured Cities</h3>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <!-- Photo Box -->
                     <a href="jobs-list-layout-1.html" class="photo-box" data-background-image="{{asset('images/featured-city-01.jpg')}}" style="background-image: url(images/featured-city-01.jpg;);">
                        <div class="photo-box-content">
                           <h3>San Francisco</h3>
                           <span>376 Jobs</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <!-- Photo Box -->
                     <a href="jobs-list-layout-full-page-map.html" class="photo-box" data-background-image="{{asset('images/featured-city-02.jpg')}}" style="background-image: url(images/featured-city-02.jpg;);">
                        <div class="photo-box-content">
                           <h3>New York</h3>
                           <span>645 Jobs</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <!-- Photo Box -->
                     <a href="jobs-grid-layout-full-page.html" class="photo-box" data-background-image="{{asset('images/featured-city-03.jpg')}}" style="background-image: url(images/featured-city-03.jpg);">
                        <div class="photo-box-content">
                           <h3>Los Angeles</h3>
                           <span>832 Jobs</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <!-- Photo Box -->
                     <a href="jobs-list-layout-2.html" class="photo-box" data-background-image="{{asset('images/featured-city-04.jpg')}}" style="background-image: url(images/featured-city-04.jpg);">
                        <div class="photo-box-content">
                           <h3>Miami</h3>
                           <span>513 Jobs</span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Features Cities / End -->
         <div class="container">
            <div class="row">
               <section class="center slider col-xl-12">
                  <div class="freelancer">
                     <!-- Overview -->
                     <div class="freelancer-overview">
                        <div class="freelancer-overview-inner">
                           <!-- Bookmark Icon -->
                           <span class="bookmark-icon"></span>
                           <!-- Avatar -->
                           <div class="freelancer-avatar">
                              <a href="single-freelancer-profile.html" tabindex="0"><img src="{{asset('images/user-avatar-placeholder.png')}}" alt=""></a>
                           </div>
                           <!-- Name -->
                           <div class="freelancer-name">
                              <h4><a href="#" tabindex="0">Marcin Kowalski <img class="flag" src="{{asset('images/flags/pl.svg')}}" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Poland"></a></h4>
                              <span>Front-End Developer</span>
                           </div>
                           <!-- Rating -->
                           <div class="freelancer-rating">
                              <div class="star-rating" data-rating="4.9"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                           </div>
                        </div>
                     </div>
                     <!-- Details -->
                     <div class="freelancer-details">
                        
                        <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" tabindex="0" >View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                     </div>
                  </div>
                  <div class="freelancer ">
                     <!-- Overview -->
                     <div class="freelancer-overview">
                        <div class="freelancer-overview-inner">
                           <!-- Bookmark Icon -->
                           <span class="bookmark-icon"></span>
                           <!-- Avatar -->
                           <div class="freelancer-avatar">
                              <div class="verified-badge"></div>
                              <a href="single-freelancer-profile.html" tabindex="0"><img src="{{asset('images/user-avatar-big-03.jpg')}}" alt=""></a>
                           </div>
                           <!-- Name -->
                           <div class="freelancer-name">
                              <h4><a href="#" tabindex="0">Sindy Forest <img class="flag" src="{{asset('images/flags/au.svg')}}" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Australia"></a></h4>
                              <span>Magento Certified Developer</span>
                           </div>
                           <!-- Rating -->
                           <div class="freelancer-rating">
                              <div class="star-rating" data-rating="5.0"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                           </div>
                        </div>
                     </div>
                     <!-- Details -->
                     <div class="freelancer-details">
                        
                        <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" tabindex="0" >View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                     </div>
                  </div>
                  <div class="freelancer ">
                     <!-- Overview -->
                     <div class="freelancer-overview">
                        <div class="freelancer-overview-inner">
                           <!-- Bookmark Icon -->
                           <span class="bookmark-icon"></span>
                           <!-- Avatar -->
                           <div class="freelancer-avatar">
                              <div class="verified-badge"></div>
                              <a href="single-freelancer-profile.html" tabindex="0"><img src="{{asset('images/user-avatar-big-02.jpg')}}" alt=""></a>
                           </div>
                           <!-- Name -->
                           <div class="freelancer-name">
                              <h4><a href="#" tabindex="0">David Peterson <img class="flag" src="{{asset('images/flags/de.svg')}}" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Germany"></a></h4>
                              <span>iOS Expert + Node Dev</span>
                           </div>
                           <!-- Rating -->
                           <div class="freelancer-rating">
                              <div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                           </div>
                        </div>
                     </div>
                     <!-- Details -->
                     <div class="freelancer-details">
                        
                        <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" tabindex="0" >View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                     </div>
                  </div>
                  <div class="freelancer">
                     <!-- Overview -->
                     <div class="freelancer-overview">
                        <div class="freelancer-overview-inner">
                           <!-- Bookmark Icon -->
                           <span class="bookmark-icon"></span>
                           <!-- Avatar -->
                           <div class="freelancer-avatar">
                              <div class="verified-badge"></div>
                              <a href="single-freelancer-profile.html" tabindex="0"><img src="{{asset('images/user-avatar-big-01.jpg')}}" alt=""></a>
                           </div>
                           <!-- Name -->
                           <div class="freelancer-name">
                              <h4><a href="single-freelancer-profile.html" tabindex="0">Tom Smith <img class="flag" src="{{asset('images/flags/gb.svg')}}" alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></a></h4>
                              <span>UI/UX Designer</span>
                           </div>
                           <!-- Rating -->
                           <div class="freelancer-rating">
                              <div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                           </div>
                        </div>
                     </div>
                     <!-- Details -->
                     <div class="freelancer-details">
                        
                        <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" tabindex="0" >View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                     </div>
                  </div>
                  <div class="freelancer">
                     <!-- Overview -->
                     <div class="freelancer-overview">
                        <div class="freelancer-overview-inner">
                           <!-- Bookmark Icon -->
                           <span class="bookmark-icon"></span>
                           <!-- Avatar -->
                           <div class="freelancer-avatar">
                              <a href="single-freelancer-profile.html" tabindex="0"><img src="{{asset('images/user-avatar-placeholder.png')}}" alt=""></a>
                           </div>
                           <!-- Name -->
                           <div class="freelancer-name">
                              <h4><a href="#" tabindex="0">Marcin Kowalski <img class="flag" src="{{asset('images/flags/pl.svg')}}" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Poland"></a></h4>
                              <span>Front-End Developer</span>
                           </div>
                           <!-- Rating -->
                           <div class="freelancer-rating">
                              <div class="star-rating" data-rating="4.9"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                           </div>
                        </div>
                     </div>
                     <!-- Details -->
                     <div class="freelancer-details">
                       
                        <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" tabindex="0" >View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                     </div>
                  </div>
                  <div class="freelancer">
                     <!-- Overview -->
                     <div class="freelancer-overview">
                        <div class="freelancer-overview-inner">
                           <!-- Bookmark Icon -->
                           <span class="bookmark-icon"></span>
                           <!-- Avatar -->
                           <div class="freelancer-avatar">
                              <a href="single-freelancer-profile.html" tabindex="0"><img src="{{asset('images/user-avatar-placeholder.png')}}" alt=""></a>
                           </div>
                           <!-- Name -->
                           <div class="freelancer-name">
                              <h4><a href="#" tabindex="0">Marcin Kowalski <img class="flag" src="{{asset('images/flags/pl.svg')}}" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Poland"></a></h4>
                              <span>Front-End Developer</span>
                           </div>
                           <!-- Rating -->
                           <div class="freelancer-rating">
                              <div class="star-rating" data-rating="4.9"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
                           </div>
                        </div>
                     </div>
                     <!-- Details -->
                     <div class="freelancer-details">
                       
                        <a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" tabindex="0">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <!-- Highest Rated Freelancers -->
         <!-- Highest Rated Freelancers / End-->
        