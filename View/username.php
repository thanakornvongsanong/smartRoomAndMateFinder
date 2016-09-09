<?php 
    session_start();
    
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smart Room and Mate Finder</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
   
  

    <!--Font Awesome-->
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="js/myJS.js"></script>
</head>

<body id="page-top" class="index" style="background-color:#222222">

    <?php
                include "headerLogined.php";
    ?>
    <br><br><br><br><br><br><br>
    <div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="">
			<div class="container">
				<div class="col-sm-3" >
			            <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary" style="color:black">Tabs</a>
			            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well" >
			              <li class="active"><a href="#profile" data-toggle="tab" style="font-weight:bold;color:black;">Profile</a></li>
			              <li><a href="#vtab2" data-toggle="tab" style="font-weight:bold;color:black;">Room</a></li>
			              <li><a href="#vtab3" data-toggle="tab" style="font-weight:bold;color:black;">Requests</a></li>
			            </ul>
			          </div>
			        <div class="col-sm-9">
			            <div class="tab-content">
			                <div role="tabpanel" class="tab-pane fade in active" id="profile">
			                    <form action="">
			                    	 <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well" >
				              <h3 class="text-center">PERSONAL INFORMATIONS.</h3><br>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4>Clean level</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="cleanlevel" id="inputClean" class="form-control" required="required">
			                                                  <option value="%">Not specified</option>
			                                                  <option value="5">Very clean</option>
			                                                  <option value="4">Relatively clean</option>
			                                                  <option value="3">Clean medium</option>
			                                                  <option value="2">Quite not clean</option>
			                                                  <option value="1">Not clean</option>
		                                          	</select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4>The frequency of parties</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="partylevel" id="inputPartylevel" class="form-control" required="required">
			                                                  <option value="%">Not specified</option>
			                                                  <option value="5">Everyday</option>
			                                                  <option value="4">Quite often</option>
			                                                  <option value="3">Sometime</option>
			                                                  <option value="2">Rarely</option>
			                                                  <option value="1">Never</option>
			                                          </select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4>Snore level</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="snorelevel" id="inputSnorelevel" class="form-control" required="required">
			                                                  <option value="%">Not specified</option>
			                                                  <option value="5">Very Lound</option>
			                                                  <option value="4">Lound</option>
			                                                  <option value="3">Middle</option>
			                                                  <option value="2">Low</option>
			                                                  <option value="1">Non-snoring</option>
			                                          </select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4> Smoke level</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="smokelevel" id="inputSmokelevel" class="form-control" required="required">
			                                                 <option value="%">Not specified</option>
			                                                  <option value="5">All the time</option>
			                                                  <option value="4">Quite often</option>
			                                                  <option value="3">Sometime</option>
			                                                  <option value="2">Rarely</option>
			                                                  <option value="1">Never</option>
			                                          </select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4> Status</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="status" id="inputStatus" class="form-control" required="required">
			                                                  <option value="%">Not specified</option>
			                                                  <option value="1">Single</option>
			                                                   <option value="0">Married</option>
			                                          </select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4> Rental period</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="rentperiod" id="inputRentperiod" class="form-control" required="required">
			                                                  <option value="%">Not specified</option>
			                                                  <option value="3">6-12 Months</option>
			                                                  <option value="2">3-6 Months</option>
			                                                  <option value="1">1-3 Months</option>
			                                          </select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4> Rental cost</h4>
				             	 </div>
				             	 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				              		<input type="number" name="mincost" id="inputMincost" class="form-control" required="required" placeholder="Min">
				              	</div>
				              	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				              		<input type="number" name="maxcost" id="inputMaxcost" class="form-control" required="required" placeholder="Max">
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4> Do you have a room yet?</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="room" id="inputRoom" class="form-control" required="required">
			                                                  <option value="0">No</option>
			                                                  <option value="1">Yes</option>
			                                          </select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4>  Do you want to feed  pets in room?</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<select name="animal" id="inputAnimal" class="form-control" required="required">
			                                                  <option value="0">No</option>
			                                                  <option value="1">Yes</option>
			                                          </select>
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				              		<h4>  Approx. move in date</h4>
				             	 </div>
				             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				              		<input type="date" name="movedate" id="inputMovedate" class="form-control" value="" required="required" title="">
				              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
		                                            <br>
		                                              <button type="submit" class="btn btn-success">Done</button>
	                                            </div>


				             

				           </ul>
			                    </form>
			                    
			                </div>
			                <div role="tabpanel" class="tab-pane fade" id="vtab2">
			                    <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3 class="text-center">YOUR ROOM INFORMATIONS.</h3><br>
					              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					              		<h4>Limit of number people per room</h4>
					             	 </div>
					             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					              		<select name="limit" id="inputRentperiod" class="form-control" required="required">
				                                                   <option value="%">Not specified</option>
				                                                  <option value="4">4</option>
				                                                  <option value="3">3</option>
				                                                  <option value="2">2</option>
				                                                  <option value="1">1</option>
				                                          </select>
					              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					              		<h4>Smoking allowed</h4>
					             	 </div>
					             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					              		<select name="smokingallowed" id="inputSmokelevel" class="form-control" required="required">
				                                                <option value="%">Not specified</option>
				                                                  <option value="1">Yes</option>
				                                                  <option value="0">No</option>
				                                          </select>
					              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					              		<h4>Pets allow</h4>
					             	 </div>
					             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					              		<select name="petsallow" id="inputSmokelevel" class="form-control" required="required">
				                                                  <option value="%">Not specified</option>
				                                                  <option value="1">Yes</option>
				                                                  <option value="0">No</option>
				                                          </select>
					              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					              		<h4>Washing machine</h4>
					             	 </div>
					             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					              		<select name="washingmachine" id="inputSmokelevel" class="form-control" required="required">
				                                                  <option value="%">Not specified</option>
				                                                  <option value="1">Yes</option>
				                                                  <option value="0">No</option>
				                                          </select>
					              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					              		<h4>Internet</h4>
					             	 </div>
					             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					              		<select name="internet" id="inputSmokelevel" class="form-control" required="required">
				                                                  <option value="%">Not specified</option>
				                                                  <option value="1">Yes</option>
				                                                  <option value="0">No</option>
				                                         </select>
					              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              	 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					              		<h4>Cable TV</h4>
					             	 </div>
					             	 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					              		<select name="cabletv" id="inputSmokelevel" class="form-control" required="required">
				                                                  <option value="%">Not specified</option>
				                                                  <option value="1">Yes</option>
				                                                  <option value="0">No</option>
				                                          </select>
					              	</div>
				              </div>
				              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
		                                            <br>
		                                              <button type="submit" class="btn btn-success">Done</button>
		                                   </div>
			                    </ul>
			                </div>
			                <div role="tabpanel" class="tab-pane fade in" id="vtab3">
			                    <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              	 <h3 class="text-center">PEOPLE ARE INTERESTED YOU NOW</h3>
				              	</div>
				              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              	 <div class="table-responsive">
					              	 	<table class="table table-hover">
					              	 		<thead>
					              	 			<tr>
					              	 				<th>#</th>
					              	 				<th>Name</th>
											<th>Date and Time</th>
											<th>Confirmation</th>
					              	 			</tr>
					              	 		</thead>
					              	 		<tbody>
					              	 			<tr>
					              	 				<td>1</td>
											<td>
												<a href="#user link" style="color:black" id="myBtn" >KAW</a>
											</td>
											<td>20/06/2016 09:48:26</td>
											<td>
												<button id="btn-accept" type="submit" class="btn btn-warning" onclick="checkAccept()">Waiting</button>
											</td>
					              	 			</tr>
					              	 			<tr>
					              	 				<td>2</td>
											<td>
												<a href="#user link" style="color:black" id="myBtn" >OAT</a>
											</td>
											<td>20/06/2016 10:56:14</td>
											<td>
												<button id="btn-accept" type="submit" class="btn btn-warning" onclick="checkAccept()">Waiting</button>
											</td>
					              	 			</tr>
					              	 			<tr>
					              	 				<td>3</td>
											<td>
												<a href="#user link" style="color:black" id="myBtn" >JA</a>
											</td>
											<td>21/06/2016 18:13:47</td>
											<td>
												<button id="btn-accept" type="submit" class="btn btn-warning" onclick="checkAccept()">Waiting</button>
											</td>
					              	 			</tr>
					              	 		</tbody>
					              	 	</table>
					              	 </div>
				              	</div>
			                    </ul>
			                </div>
			            </div>
			        </div>
			</div>
		</form>

			
		
		</div>
	</div>
            


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
