<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mate Finder</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

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
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                    <li class="dropdown-content active">
                        <a class="page-scroll" href="Findfriend.html">Find Friend</a>
                    </li>
                    <li class="dropdown-content">
                        <a class="page-scroll" href="Findroom.html">Find Room</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="request.html">Request</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->

  <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fill your profile data.</h2>
                    <h3 class="section-subheading text-muted">all of these data will use for other people to find you or you find other people</h3>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <form>
                            <div  class="col-lg-offset-2 col-lg-8">
                            <div class="panel panel-default">

                                <div class="form-group">  
                                    <div class="row">
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                                        <div  class="col-lg-8 text-left " style="padding-left: 0.5cm; padding-right: 0.5cm; padding-top: 1.0cm">
                                            <div  class="col-lg-12">
                                            Clean level
                                                <select name="cleanlevel" id="inputClean" class="form-control" required="required">
                                                  <option value="%">Not specified</option>
                                                  <option value="5">Very clean</option>
                                                  <option value="4">Relatively clean</option>
                                                  <option value="3">Clean medium</option>
                                                  <option value="2">Quite not clean</option>
                                                  <option value="1">Not clean</option>
                                                </select>
                                            </div>

                                            <div  class="col-lg-12">
                                                The frequency of parties
                                                <select name="partylevel" id="inputPartylevel" class="form-control" required="required">
                                                  <option value="%">Not specified</option>
                                                  <option value="5">Everyday</option>
                                                  <option value="4">Quite often</option>
                                                  <option value="3">Sometime</option>
                                                  <option value="2">Rarely</option>
                                                  <option value="1">Never</option>
                                                </select>
                                           </div>
                                           <div  class="col-lg-12">
                                                Snore level
                                                <select name="snorelevel" id="inputSnorelevel" class="form-control" required="required">
                                                  <option value="%">Not specified</option>
                                                  <option value="5">Very Lound</option>
                                                  <option value="4">Lound</option>
                                                  <option value="3">Middle</option>
                                                  <option value="2">Low</option>
                                                  <option value="1">Non-snoring</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Smoke level
                                                <select name="smokelevel" id="inputSmokelevel" class="form-control" required="required">
                                                 <option value="%">Not specified</option>
                                                  <option value="5">All the time</option>
                                                  <option value="4">Quite often</option>
                                                  <option value="3">Sometime</option>
                                                  <option value="2">Rarely</option>
                                                  <option value="1">Never</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Status
                                                <select name="status" id="inputStatus" class="form-control" required="required">
                                                  <option value="%">Not specified</option>
                                                  <option value="1">Single</option>
                                                   <option value="0">Married</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Rental period
                                                <select name="rentperiod" id="inputRentperiod" class="form-control" required="required">
                                                   <option value="%">Not specified</option>
                                                  <option value="3">6-12 Months</option>
                                                  <option value="2">3-6 Months</option>
                                                  <option value="1">1-3 Months</option>
                                                </select>
                                            </div>

                                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> Rent cost </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                  <input type="number" name="minrentcost" id="inputMinrentcost" class="form-control"  required="required" placeholder="Min">
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                  <input type="number" name="maxrentcost" id="inputMaxrentcost" class="form-control"  required="required" placeholder="Max">
                                                </div>

                                             <div  class="col-lg-12">
                                                Do you have a room yet?
                                                <select name="room" id="inputRoom" class="form-control" required="required">
                                                  <option value="0">No</option>
                                                  <option value="1">Yes</option>
                                                </select>
                                            </div>

                                            <div  class="col-lg-12">
                                                Do you want to feed  pets in room?
                                                <select name="animal" id="inputAnimal" class="form-control" required="required">
                                                  <option value="0">No</option>
                                                  <option value="1">Yes</option>
                                                </select>
                                            </div>

                                            <div  class="col-lg-12">
                                                Do you have  children?
                                                <select name="children" id="inputChildren" class="form-control" required="required">
                                                  <option value="0">No</option>
                                                  <option value="1">Yes</option>
                                                </select>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                              Approx. move in date
                                              <input type="date" name="movedate" id="inputMovedate" class="form-control" value="" required="required" title="">
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                                            <br>
                                              <button type="submit" class="btn btn-success">Done</button>
                                            </div>
                                       </div>
                                       <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </form> 
                    </div>
                </div>


                


            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Smart Room and Mate Finder</p>
                </div>
            </div>
        </div>
    </section>

    <div class="portfolio-modal modal fade" id="mate1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body" >
                            <!-- Project Details Go Here -->
                            <h2>Kay Garland</h2>
                            <p class="item-intro text-muted">Lead Designer</p>
                            <img class="img-responsive img-centered" src="images/f1.jpg" alt="">
                            <form>
                                <div style="margin-bottom:7px;"><strong>#Book #Movie #Football #Fitness</strong> </div>
                                <div style="margin-bottom:5px;">Looking for room in Thung Khru district</div>
                            </form>

                          <div class="row">
  
                            <div class="col-lg-6" style="background-color:#e0e0d1">
                                <strong>Detail of finding a room</strong>
                                <div style="border-color:white">
                                    <div style="margin-bottom:5px">
                                      Room type : 2 people
                                    </div>
                                    <div style="margin-bottom:5px">
                                      Prices : 7501 - 10000 bath
                                    </div>
                                    <div style="margin-bottom:5px">
                                      Rent periods : 12 months
                                    </div>
                                </div>

                                <div>
                                    <div style="margin-bottom:5px">
                                      Moving date 1/10/2016
                                    </div>
                                    <div style="margin-bottom:5px">
                                      Animal : <strong style="color:#00ff00">Yes</strong>
                                    </div>
                                    <div style="margin-bottom:5px">
                                      Smoke : <strong style="color:#ff3300">No</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6" style="margin-bottom:5px; background-color:#d9d9d9;">
                                <strong>Detail of finding roommate</strong>
                           
                            <div style="margin-bottom:5px;"> Gender : Male </div>
                            <div style="margin-bottom:5px;"> Age : 25 - 35 years </div>
                            <div style="margin-bottom:5px;"> Cleanliness : Very clean </div>
                            <div style="margin-bottom:5px;"> Party habits : Not at all </div>
                            <div style="margin-bottom:5px;"> Habit : Friendly </div>
                            <div style="margin-bottom:5px;">&nbsp;</div>

                            </div>
                            </div>

                            <div style="margin-bottom:5px;">

                            </div>
                            <div class="col-lg-12" style="margin-bottom:5px; background-color: #ff4d4d;">
                                <strong style="color:white;">Location</strong>
                            </div>

                            <div  class="col-lg-12" id="googleMap" style="width:100%;height:380px;margin-bottom:5px;"></div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
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
