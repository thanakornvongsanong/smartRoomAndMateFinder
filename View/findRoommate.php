<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Find Roommate</title>
		<meta name="description" content="Blueprint: A basic responsive product grid layout with comparison functionality" />
		<meta name="keywords" content="blueprint, template, html, css, javascript, grid, layout, effect, product comparison" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- Modernizr is used for flexbox fallback -->
		<script src="js/modernizr.custom.js"></script>


		<!--JQuery-->
		<script src="vendor/jquery/jquery.js"></script>

		<!--Bootstrap-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
		<script src="vendor/bootstrap/js/bootstrap.js"></script>

	</head>
	<body>
	<?php include "topexpand.php"; ?>
		<!-- Compare basket -->
		<div class="compare-basket">
			<button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text">Compare</span></button>
		</div>

		<!-- Main view -->
		<div class="view">
			<!-- Blueprint header -->

			<header class="bp-header cf text-center" >
				<h1 style="color:white">Find your roommate</h1>
			</header>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="color:white;background-color:#24252A;border: 5px solid;border-color:#fed136;border-radius:30px" >
				<ul >
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
				              			<input type="number" name="mincost" id="inputMincost" class="form-control" required="required" placeholder="Min" style="font-size:5px">
					              	</div>
					              	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					              		<input type="number" name="maxcost" id="inputMaxcost" class="form-control" required="required" placeholder="Max" style="font-size:5px">
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
		                                             <div class="btn-group btn-group-justified" role="group" aria-label="...">
							  <div class="btn-group" role="group">
							    	<button type="button" class="btn " style="background-color:#fed136;color:black;font-weight:bold;">Search</button>
							  </div>
						   </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
		                                            <br>
	                                            </div>
				</ul>
			</div>
				
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<!-- Product grid -->
			<section class="grid">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia
							<a href="#Facebook">
								<span class=" fa fa-facebook-square" ></span>
							</a>
							<a href="#chat" >
								<span class="glyphicon glyphicon-envelope" style="color:#fed136;"></span>
							</a>
						</h3>
						<span class="product__any extra highlight">Clean: </span>
						<span class="product__any extra highlight">Party:</span>
						<span class="product__any extra highlight">Snore: </span>
						<span class="product__any extra highlight">Smoke: </span>
						<span class="product__any extra highlight">Status: </span>
						<span class="product__any extra highlight">Rental period: </span>
						<span class="product__any extra highlight">Rental cost: </span>
						<span class="product__any extra highlight">Room already has: </span>
						<span class="product__any extra highlight">Pets: </span>
						<span class="product__any extra highlight">Have children: </span>
						<span class="product__any  highlight">Approx. move in date: </span>

						<button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button>

					</div>
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</div>

			</section>
			</div>
			
		</div><!-- /view -->
		<!-- product compare wrapper -->
		<section class="compare"><!--class="fa fa-remove"-->
			<button class="action action--close"><i class="fa fa-remove fa-3x" style="color:#fed136"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
		</section>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
