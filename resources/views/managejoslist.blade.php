@extends('layout')
@section('container')


         <div class="margin-top-90"></div>
         <!-- Page Content
            ================================================== -->
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4">
                  <div class="sidebar-container">
                     <!-- Location -->
                     <div class="sidebar-widget">
                        <h3>Location</h3>
                        <div class="input-with-icon">
                           <div id="autocomplete-container">
                              <input id="autocomplete-input" type="text" placeholder="Location">
                           </div>
                           <i class="icon-material-outline-location-on"></i>
                        </div>
                     </div>
                     
                     <!-- Category -->
                     <div class="sidebar-widget">
                        <h3>job Category</h3>
                        <div class="btn-group bootstrap-select show-tick">
                           <select class="selectpicker" multiple="" data-selected-text-format="count" data-size="7" title="All Categories" tabindex="-98">
                              <option>Accounting and Finance</option>
                              <option>Clerical &amp; Data Entry</option>
                              <option>Counseling</option>
                              <option>Court Administration</option>
                              <option>Human Resources</option>
                              <option>Investigative</option>
                              <option>IT and Computers</option>
                              <option>Law Enforcement</option>
                              <option>Management</option>
                              <option>Miscellaneous</option>
                              <option>Public Relations</option>
                           </select>
                        </div>
                     </div>
					 
					 <div class="sidebar-widget">
                        <h3>job Sub Category</h3>
                        <div class="btn-group bootstrap-select show-tick">
                           <select class="selectpicker" multiple="" data-selected-text-format="count" data-size="7" title="All Categories" tabindex="-98">
                              <option>Accounting and Finance</option>
                              <option>Clerical &amp; Data Entry</option>
                              <option>Counseling</option>
                              <option>Court Administration</option>
                              <option>Human Resources</option>
                              <option>Investigative</option>
                              <option>IT and Computers</option>
                              <option>Law Enforcement</option>
                              <option>Management</option>
                              <option>Miscellaneous</option>
                              <option>Public Relations</option>
                           </select>
                        </div>
                     </div>
                    
                  </div>
               </div>
               <div class="col-xl-9 col-lg-8 content-left-offset">
                  <h3 class="page-title">Search Results</h3>
                  <div class="notify-box margin-top-15">
                     <div class="switch-container">
                        <label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
                     </div>
                     <div class="sort-by">
                        <span>Sort by:</span>
                        <div class="btn-group bootstrap-select hide-tick">
                           <select class="selectpicker hide-tick" tabindex="-98">
                              <option>Relevance</option>
                              <option>Newest</option>
                              <option>Oldest</option>
                              <option>Random</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="listings-container compact-list-layout margin-top-35">
				  
				  <div class="tabs">
				<div class="tabs-header">
					<ul>
						<li class="active"><a href="#tab-1" data-tab-id="1">Active Jobs</a></li>
						<li class=""><a href="#tab-2" data-tab-id="2">Job completed</a></li>
						
					</ul>
					
					<div class="sort-by" style="margin-top: -57px;">
								<div class="intro-banner-search-form mysearch" style="    margin: 6px auto;">
										<!-- Search Field -->
										
										<!-- Search Field -->
										<div class="intro-search-field with-label">
										   
										   <input id="intro-keywords" type="text" placeholder="Job categories">
										</div>
										<!-- Button -->
										<div class="intro-search-button">
										   <button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Search</button>
										</div>
									 </div>
							</div>
				</div>
				<!-- Tab Content -->
				<div class="tabs-content" style="height: 336px;">
					<div class="tab active" data-tab-id="1" style="display: block;">
						  <div class="content">
                                 <!-- Job Listing -->
                                 <div  class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														
														<li><button class="editbtn"><a href="https://webhosting.busybanda.com/Prime_Professional_Portal/listinngprofessionals.html" style="color: #fff"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</a></button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </div>
								  <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a> <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a> <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a> <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a> <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a> <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a> <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Pending Approval</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												<div class="job-listing-footer">
													<ul>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Edit job</button></li>
														<li><button class="editbtn"><i class="fa-solid fa-pen-to-square"></i>Manage Professional</button></li>
														
													</ul>
												</div>
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a>
                                 
                              </div>
					</div>
					<div class="tab" data-tab-id="2" style="display: none;">
						  <div class="content">
							   <!-- Job Listing -->
                                 <a href="single-job-page.html" class="job-listing">
                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details">
                                       <!-- Logo -->
                                       <div class="job-listing-company-logo">
                                          <img src="images/company-logo-01.png" alt="">
                                       </div>
                                       <!-- Details -->
                                       <div class="job-listing-description">
                                          
										         <h3 class="job-listing-title">Smart Home Automation<span class="dashboard-status-button green">Job Completed</span></h3>
										       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Posted on 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Expiring on 10 August, 2019</li>
														<li><i class="fa-solid fa-gavel"></i>Total Bid:500</li>
													</ul>
												</div>
												
												
                                          <!-- Job Listing Footer -->
                                          
                                       </div>
                                       <!-- Bookmark -->
                                       <span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;"><i class="fa-solid fa-trash-can"></i></span>
                                    </div>
                                 </a>
                              </div>
					</div>
					
				</div>
			</div>
                   
                  </div>
                  <!-- Pagination -->
                  <div class="clearfix"></div>
                  <div class="row">
                     <div class="col-md-12">
                        <!-- Pagination -->
                        <div class="pagination-container margin-top-60 margin-bottom-60">
                           <nav class="pagination">
                              <ul>
                                 <li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                 <li><a href="#">1</a></li>
                                 <li><a href="#" class="current-page">2</a></li>
                                 <li><a href="#">3</a></li>
                                 <li><a href="#">4</a></li>
                                 <li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <!-- Pagination / End -->
               </div>
            </div>
         </div>
         <!-- Spacer -->
         <div class="margin-top-15"></div>
         <!-- Spacer / End-->