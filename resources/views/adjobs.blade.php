@extends('layout')
@section('container')






<!-- Page Content
================================================== -->
<div class="container">
	<div class="dashboard-content-inner" style="min-height: 485px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Job</h3>

				<!-- Breadcrumbs -->
				
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Title</h5>
										<input type="text" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Category</h5>
										<div class="btn-group bootstrap-select with-border">
									        <select class="selectpicker with-border" data-size="7" title="Select Job Type" tabindex="-98"><option class="Select Category" value="">Select Job Type</option>
											<option>Full Time</option>
											<option>Freelance</option>
											<option>Part Time</option>
											<option>Internship</option>
											<option>Temporary</option>
										</select></div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Sub Category</h5>
										<div class="btn-group bootstrap-select with-border">
										<select class="selectpicker with-border" data-size="7" title="Select Sub Category" tabindex="-98">
										<option class="bs-title-option" value="">Select Category</option>
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

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Location</h5>
										<div class="input-with-icon">
											<div id="autocomplete-container">
												<input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address">
											</div>
											<i class="icon-material-outline-location-on"></i>
										</div>
									</div>
								</div>

								

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Tags <span>(optional)</span>  <i class="help-icon" data-tippy-placement="right" data-tippy="" data-original-title="Maximum of 10 tags"></i></h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="text" class="keyword-input with-border" placeholder="e.g. job title, responsibilites">
												<button class="keyword-input-button ripple-effect"><i class="fa-solid fa-plus"></i></button>
											</div>
											<div class="keywords-list" style="height: auto;"><!-- keywords go here --></div>
											<div class="clearfix"></div>
										</div>

									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Job Description</h5>
										<textarea cols="30" rows="5" class="with-border"></textarea>
										<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple="">
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<a href="#" class="button ripple-effect big margin-top-30"><i class="fa-solid fa-plus"></i>Post a Job</a>
				</div>

			</div>
			<!-- Row / End -->


		</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->