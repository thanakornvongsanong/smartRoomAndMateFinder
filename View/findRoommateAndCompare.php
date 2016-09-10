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
		
		<Menu CSS >
		<link rel="stylesheet" type="text/css" href="css/normalizeMenu.css" />
		<link rel="stylesheet" type="text/css" href="css/demoMenu.css"/>
		<link rel="stylesheet" type="text/css" href="css/menu_topexpand.css" />

		<!--JQuery-->
		<script src="vendor/jquery/jquery.js"></script>

		<!--Bootstrap-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		
		<!--BTN toggle-->
		<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
		<!-- Modernizr is used for flexbox fallback -->
        		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<!-- Compare basket -->
		<div class="compare-basket">
			<button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text">Compare</span></button>
		</div>
		
		<!--Menu Hide-->
			<div class="menu-wrap">
				<nav class="menu" style="background-color:black">
					<div class="icon-list">
						<a href="index.php"><i class="fa fa-home fa-2x"></i><span>Home</span></a>
						<a href="search_room.php"><i class="fa fa-search fa-2x"></i><span >Find Room</span></a>
						<a href="username.php"><i class="fa fa-user fa-2x"></i><span>Username</span></a>

					</div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"></button>

		
		<!-- Main view -->
		<div class="view">
			<!-- Blueprint header -->
			<header class="bp-header cf" id="wow">

				<h1 style="color:white">Find your roommate</h1>
			</header>
			<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       Rent cost
    </div>
           
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="minroom" id="inputMinroom" class="form-control" value="" required="required" pattern="" title="" placeholder="Min">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="maxroom" id="inputMaxroom" class="form-control" value="" required="required" pattern="" title="" placeholder="Max">
            </div>
       </div>
</div>
       

       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         Limit of number people per room
       </div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="btn-group" data-toggle="buttons" >
      <label class="btn btn-default active" style="background-color:#fed136;color:white;font-weight: bold;">Unlimit
        <input type="radio" name="limit0" id="limit0" autocomplete="off" chacked>
        <span class="glyphicon glyphicon-ok"></span>
      </label>

      <label class="btn btn-default" style="background-color:#fed136;color:white;font-weight: bold;">1
        <input type="radio" name="limit1" id="limit1" autocomplete="off">
        <span class="glyphicon glyphicon-ok"></span>
      </label>
      <label class="btn btn-default" style="background-color:#fed136;color:white;font-weight: bold;">2
        <input type="radio" name="limit2" id="limit2" autocomplete="off">
        <span class="glyphicon glyphicon-ok"></span>
      </label>
      <label class="btn btn-default" style="background-color:#fed136;color:white;font-weight: bold;">3
        <input type="radio" name="limit3" id="limit3" autocomplete="off">
        <span class="glyphicon glyphicon-ok"></span>
      </label>
      <label class="btn btn-default" style="background-color:#fed136;color:white;font-weight: bold;">4
        <input type="radio" name="limit4" id="limit4" autocomplete="off">
        <span class="glyphicon glyphicon-ok"></span>
      </label>
</div>
</div>

 
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <br>Facilities
          </div>
             
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          
          <label>
            <input type="checkbox" name="pets" value="pets" data-toggle="toggle" checked data-on="Pets" data-off="None" data-width="200">
          </label>
          
          <label>
            <input type="checkbox" name="washingmachine" value="washingmachine" data-toggle="toggle" checked data-on="Washing machine" data-off="None" data-width="200">
          </label>
          <label>
            <input type="checkbox" name="internet" value="internet" data-toggle="toggle" checked data-on="Internet" data-off="None" data-width="200">
          </label>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <label>
            <input type="checkbox" name="smoking" value="smoking" data-toggle="toggle" checked data-on="Smoking allowed" data-off="None" data-width="200">
          </label>
          
          <label>
            <input type="checkbox" name="air" value="air" data-toggle="toggle" checked data-on="Air condition" data-off="None" data-width="200">
          </label>
          <label>
            <input type="checkbox" name="cabletv" value="cabletv" data-toggle="toggle" checked data-on="Cable TV" data-off="None" data-width="200">
          </label>
        </div>
        <div>
                 <button type="submit" class="btn btn-large btn-block btn-default">Search</button>
               </div>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<!-- Product grid -->
			<section class="grid">
				<!-- Products -->
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />

						<h3 class="product__title ">Chryseia
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a></h3>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
				<div class="product">
					<div class="product__info">
						<img class="product__image" src="img/userCompare.png" alt="Product 1" />
						<h3 class="product__title ">Chryseia 
						<a href="#Facebook"> &nbsp;&nbsp;<span class=" fa fa-facebook-square"></span></a>
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
					<label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i class="fa fa-plus"></i><i class="fa fa-check" ></i><span class="action__text action__text--invisible">Add to compare</span></label>
				</div>
			</section>
			</div>
			</div>
		</div><!-- /view -->
		<!-- product compare wrapper -->
		<section class="compare"><!--class="fa fa-remove"-->
			<button class="action action--close"><i class="fa fa-remove" style="color:black"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
		</section>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>

		<!--Script Menu-->
		<script src="js/classieMenu.js"></script>
		<script src="js/mainMenu.js"></script>

		<!--Script Toggle-->
		<script src="js/bootstrap-toggle.min.js"></script>
	</body>
</html>
