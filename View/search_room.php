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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <!-- Modernizr is used for flexbox fallback -->
        <script src="js/modernizr.custom.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
</head>

<body id="page-top" class="index">
<form action="test.php" method="GET">
  <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color:black">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Smart Room and Mate Finder</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Guide</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Login with Facebook</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
<section>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
    
            Rent cost

       <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="minroom" id="inputMinroom" class="form-control" value="" required="required" pattern="" title="" placeholder="Min">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input type="number" name="maxroom" id="inputMaxroom" class="form-control" value="" required="required" pattern="" title="" placeholder="Max">
            </div>
       </div>

       Limit of number people per room
  
                <div class="btn-group btn-group-justified" role="group" >
                      <div class="btn-group" role="group" >
                        <button type="button" class="btn btn-default " >None</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" >1</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" >2</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" >3</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" >4</button>
                      </div>
                      
                </div>
   
          Facilities
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
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
                
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
     <br>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" >
                <div class="thumbnail" >
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
           <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                  <img src="img/room.jpg" alt="...">
                  <div class="caption">
                    <h5>Hotel</h5>
                    <span>Test1</span><br>
                    <span>Test2</span><br>
                    <span>Test3</span><br>
                    <br>
                    <p class="text-center"><a href="#" class="btn btn-primary " role="button">Button</a> </p>
                  </div>
                </div>
            </div>
       
    </div>
</section>
    
</form>





    
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
<script src="js/bootstrap-toggle.min.js"></script>
</body>

</html>


