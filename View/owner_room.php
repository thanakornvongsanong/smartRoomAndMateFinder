<?php  ?>
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

    <title>Agency - Start Bootstrap Theme</title>

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
   
  <script src="js/myJS.js"></script>
 <link href="css/myStyle.css" rel="stylesheet">
    <!--Font Awesome-->
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
</head>

<body id="page-top" class="index">

    <?php 
    //$_SESSION["user"]="gerg";
            if (isset($_SESSION["user"])) {
                include "headerLogined.php";
            }else{
                include "headerNotLogin.php";
            }

    ?>

  <section>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close fa fa-times fa-3x" ></span>
    <h1 class="text-center">Datails of User</h1>

	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Clean level</th>
					<th>The frequency of parties</th>
					<th>Smoke level</th>
					<th>Pets</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Kaw Oat Vongsanong</td>
					<td>Very clean</td>
					<td>Never</td>
					<td>Never</td>
					<td>No</td>
				</tr>
			</tbody>
		</table>
	</div>
  </div>

</div>
          <div class="container">
  	
  		<div class="row">
	  		<form action="" method="">
	  			<div class="col-lg-12">
					<h1 class="text-center">People are interested your room now</h1>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
						<div class="table-responsive col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
									<tr id="">
										<td>1</td>
										<td>
											<a href="#" style="color:black" id="myBtn" >Kaw</a>
										</td>
										<td>20/06/2016 09:48:26</td>
										<td>
											<button id="btn-accept" type="submit" class="btn btn-warning" onclick="checkAccept()">Waiting</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td><a href="#" style="color:black" id="myBtn" >Oat</a></td>
										<td>20/06/2016 09:48:26</td>
										<td><button id="btn-accept" type="button" class="btn btn-warning" onclick="checkAccept()">Waiting</button></td>
									</tr>
									<tr>
										<td>3</td>
										<td><a href="#" style="color:black" id="myBtn2" >Ja</a></td>
										<td>20/06/2016 09:48:26</td>
										<td><button id="btn-accept" type="button" class="btn btn-warning" onclick="checkAccept()">Waiting</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
	  			</div>
  			</form>
  		</div>
  	
  </section>
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

	<script>

var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
	modal.style.display = "block";
}

span.onclick = function() {
	 modal.style.display = "none";
}

window.onclick = function(event) {
	 if (event.target == modal) {
	       modal.style.display = "none";
	}
}

</script>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
