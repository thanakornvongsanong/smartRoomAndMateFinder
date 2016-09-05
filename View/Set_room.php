<?php session_start(); ?>
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

   <?php 
    //$_SESSION["user"]="gerg";
            if (isset($_SESSION["user"])) {
                include "headerLogined.php";
            }else{
                include "headerNotLogin.php";
            }

    ?>

    <!-- Header -->

  <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fill your room data for search.</h2>
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
                                                 Limit of number people per room
                                                <select name="limit" id="inputRentperiod" class="form-control" required="required">
                                                   <option value="%">Not specified</option>
                                                  <option value="4">4</option>
                                                  <option value="3">3</option>
                                                  <option value="2">2</option>
                                                  <option value="1">1</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Rental period
                                                <select name="rentperiod" id="inputRentperiod" class="form-control" required="required">
                                                   <option value="%">Not specified</option>
                                                  <option value="4">12-24 Months</option>
                                                  <option value="3">6-12 Months</option>
                                                  <option value="2">3-6 Months</option>
                                                  <option value="1">1-3 Months</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Smoking allowed
                                                <select name="smokingallowed" id="inputSmokelevel" class="form-control" required="required">
                                                <option value="%">Not specified</option>
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Pets allow
                                                <select name="petsallow" id="inputSmokelevel" class="form-control" required="required">
                                                  <option value="%">Not specified</option>
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Washing machine
                                                <select name="washingmachine" id="inputSmokelevel" class="form-control" required="required">
                                                <option value="%">Not specified</option>
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Internet
                                                <select name="internet" id="inputSmokelevel" class="form-control" required="required">
                                                  <option value="%">Not specified</option>
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div  class="col-lg-12">
                                                Cable TV
                                                <select name="cabletv" id="inputSmokelevel" class="form-control" required="required">
                                                  <option value="%">Not specified</option>
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                                <button type="button" class="btn btn-default" style="active:">button</button>
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
