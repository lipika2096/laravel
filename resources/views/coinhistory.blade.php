@extends('layout')
@section('container')


<div class="margin-top-90"></div>


<div class="container">
	<div class="row">
		
		<div class="col-xl-12 col-lg-12 content-left-offset">

		


			<div class="row">
                 <div class=" d-flex flex-wrap justify-content-left align-items-center ">
				   <h3 class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" style="">Welcome Roger Johnson</h3>
				   <div class="text-end newdiv">
				       Total Coin Balance<br>
					   <span style="font-size: 28px;"><i class="fa-solid fa-coins" style="margin-right:20px;"></i>800 Coin Available</span>
				   </div>
				  
				 </div>
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i>Coin Transaction History</h3>
							<div class="sort-by">
								<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim" style="border-radius: 9%;background-color: #333333; box-shadow: 0 3px 8px rgb(0 0 0 / 10%);color: #fff;font-size: 15px;padding: 6px 15px !important;">Buy Coins<i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
                          
						 <table class="table table-bordered">
							<thead>
							  <tr>
								<th>Date</th>
								<th>Coins Bought</th>
								<th>Amount</th>
								<th>Created At</th>
								<th>Status</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>1/1/2022</td>
								<td>400</td>
								<td>10000</td>
								<td>1/1/2022</td>
								<td><span style="background: #9be79b52;padding: 5px 20px;color: green;">Completed</span></td>
							  </tr>
							  <tr>
								<td>1/1/2022</td>
								<td>400</td>
								<td>10000</td>
								<td>1/1/2022</td>
								<td><span style="background: #9be79b52;padding: 5px 20px;color: green;">Completed</span></td>
							  </tr>
							  <tr>
								<td>1/1/2022</td>
								<td>400</td>
								<td>10000</td>
								<td>1/1/2022</td>
								<td><span style="background: #9be79b52;padding: 5px 20px;color: green;">Completed</span></td>
							  </tr><tr>
								<td>1/1/2022</td>
								<td>400</td>
								<td>10000</td>
								<td>1/1/2022</td>
								<td><span style="background: #9be79b52;padding: 5px 20px;color: green;">Completed</span></td>
							  </tr><tr>
								<td>1/1/2022</td>
								<td>400</td>
								<td>10000</td>
								<td>1/1/2022</td>
								<td><span style="background: #9be79b52;padding: 5px 20px;color: green;">Completed</span></td>
							  </tr>

							</tbody>
						  </table>
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
