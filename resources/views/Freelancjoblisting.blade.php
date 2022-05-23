@extends('layout')
@section('container')


<div class="margin-top-90"></div>


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

				<!-- Keywords -->
				
				
				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
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
					</select></div>
				</div>
				<div class="sidebar-widget">
					<h3>Sub Category</h3>
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
					</select></div>
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
					</select></div>
				</div>
			</div>

			<div class="listings-container compact-list-layout margin-top-35">
				
				<!-- Job Listing -->
				<div href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-01.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title">Security Systems<span class="dashboard-status-button green">Andrus</span></h3>

							<!-- Job Listing Footer -->
							
							       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Due Date 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Deadline on 10 August, 2019</li>
														<li><i class="fa-solid fa-location-dot"></i>San Francissco</li>
													</ul>
												</div>
						</div>

						
						<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim" style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;font-size: 15px;">Buy Leads <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>	


				<!-- Job Listing -->
				<div href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title">Security Systems<span class="dashboard-status-button green">Andrus</span></h3>

							<!-- Job Listing Footer -->
							
							       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Due Date 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Deadline on 10 August, 2019</li>
														<li><i class="fa-solid fa-location-dot"></i>San Francissco</li>
													</ul>
												</div>
						</div>

						<span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;">Buy Leads</span>
					</div>
				</div>
				<!-- Job Listing -->
				<a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-02.png" alt="">
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

						<span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;">Buy Leads</span>
					</div>
				</a>
				

				<!-- Job Listing -->
				<a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-03.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title">Security Systems<span class="dashboard-status-button green">Andrus</span></h3>

							<!-- Job Listing Footer -->
							
							       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Due Date 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Deadline on 10 August, 2019</li>
														<li><i class="fa-solid fa-location-dot"></i>San Francissco</li>
													</ul>
												</div>
						</div>

						<span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;">Buy Leads</span>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title">Security Systems<span class="dashboard-status-button green">Andrus</span></h3>

							<!-- Job Listing Footer -->
							
							       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Due Date 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Deadline on 10 August, 2019</li>
														<li><i class="fa-solid fa-location-dot"></i>San Francissco</li>
													</ul>
												</div>
						</div>

						<span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;">Buy Leads</span>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-04.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title">Administrative Assistant</h3>

							<!-- Job Listing Footer -->
							<div class="job-listing-footer">
								<ul>
									<li><i class="icon-material-outline-business"></i> Mates</li>
									<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
									<li><i class="icon-material-outline-business-center"></i> Full Time</li>
									<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
								</ul>
							</div>
						</div>

						<span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;">Buy Leads</span>
					</div>
				</a>


				<!-- Job Listing -->
				<a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-05.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h3 class="job-listing-title">Security Systems</h3><span class="dashboard-status-button green">Andrus</span>

							<!-- Job Listing Footer -->
							
							       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Due Date 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Deadline on 10 August, 2019</li>
														<li><i class="fa-solid fa-location-dot"></i>San Francissco</li>
													</ul>
												</div>
						</div>

						<span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;">Buy Leads</span>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="https://webhosting.busybanda.com/Prime_Professional_Portal/freelance-services" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">

						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-06.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							
                             <h3 class="job-listing-title">Security Systems<span class="dashboard-status-button green">Andrus</span></h3>
							<!-- Job Listing Footer -->
							
							       <div class="job-listing-footer">
													<ul>
														<li><i class="fa-solid fa-calendar-days"></i> Due Date 10 July, 2019</li>
														<li><i class="fa-solid fa-calendar-days"></i>Deadline on 10 August, 2019</li>
														<li><i class="fa-solid fa-location-dot"></i>San Francissco</li>
													</ul>
												</div>
						</div>

						<span style="border-radius: 10%;padding: 10px;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;">Buy Leads</span>
					</div>
				</a>
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
