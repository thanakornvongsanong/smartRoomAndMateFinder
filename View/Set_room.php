<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
        <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
        <!-- Theme CSS -->
        <link href="css/agency.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqgCoOIkJdpbK7OdgyUss5EC2_2yNTnFE&libraries=places&callback=initMap&language=TH&region=TH"async></script>
        <script src="googlemap.js" type="text/javascript"> </script>
          <script  type="text/javascript" src="jquery-3.1.0.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      
    </head>

    <body id="page-top" class="index">

        <?php
        //$_SESSION["user"]="gerg";
        if (isset($_SESSION["user"])) {
            include "headerLogined.php";
        } else {
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
                        <form action="insertRoom.php" >
                            <div  class="col-lg-offset-2 col-lg-8">
                                <div class="panel panel-default">

                                    <div class="form-group">  
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                                            <div  class="col-lg-8 text-left " style="padding-left: 0.5cm; padding-right: 0.5cm; padding-top: 1.0cm">

                                                <div  class="col-lg-12">
                                                    Limit of number people per room
                                                    <select name="limit" id="inputRentperiod" class="form-control" required="required">
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div  class="col-lg-12">
                                                    Rental period
                                                    <select name="rentperiod" id="inputRentperiod" class="form-control" required="required">
               
                                                        <option value="4">Ulinited</option>
                                                        <option value="3">6-12 Months</option>
                                                        <option value="2">3-6 Months</option>
                                                        <option value="1">1-3 Months</option>
                                                    </select>
                                                </div>
                                                <div  class="col-lg-12">
                                                    Room Size 
                                                    <input type="text" name="room_size"> ตารางเมตร
                                                </div>
                                                <div  class="col-lg-12">
                                                    Rent Cost
                                                    <input type="text" name="rent_cost"> บาท

                                                </div> 
                                                <div  class="col-lg-12">
                                                    Deposit
                                                    <input type="text" name="deposit">
                                                </div>  
                                                <div  class="col-lg-12">
                                                    Electronic Cost
                                                    <input type="text" name="electronic_cost"> Bath/Unit
                                                </div> 
                                                Water Cost
                                                <div  class="col-lg-12">
                                                    <input type="text" name="water_cost"> Bath/Unit

                                                </div>  
                                                <div  class="col-lg-12">
                                                    Room type
                                                    <select name="room_type" id="inputRentperiod" class="form-control" required="required">
                                                        <option value="condo">คอนโด</option>
                                                        <option value="renthouse">บ้านเช่า</option>
                                                        <option value="horpak">หอพัก</option>
                                                        <option value="appartment">อพาร์ทเม้น</option>
                                                        <option value="flat">แฟลต</option>
                                                        <option value="mansion">แมนชั่น</option>
                                                    </select>
                                                </div>  
                                                <div  class="col-lg-12">
                                                    Pets allow
                                                    <select name="petsallow" id="inputSmokelevel" class="form-control" >
                                                
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>


                                                <div  class="col-lg-12">
                                                    Select You Location
                                                    <input id="pac-input" class="controls" type="text"
                                                           placeholder="Enter a location">

                                                    <div id="map" style="width:300px;height: 300px" ></div>
                                                    <p id="in"></p>
                                                </div>
                                                 <div  class="col-lg-12">
                                                        <input type ="text" id="name" name="name" >
                                                        <input type ="text" id="route" name="route" >
                                                        <input type ="text" id="sub_local2" name="sub_local2" >
                                                     <input type ="text" id="sub_local" name="sub_local" >
                                                     <input type ="text" id="locality" name="locality" >
                                                     <input type="hidden" id="lat" name='lat'>
                                                     <input type='hidden' id='lng' name='lng'>
                                                     <input type="file" name="fileToUpload" id="fileToUpload">
                                                </div>
                                                <div  class="col-lg-12">
                                                    Another Detail
                                                    <input type="textBox" name="another_detail">

                                                </div>
                                                <div  class="col-lg-12">
                                                 Insert you accessory :  <input type="text" name="accessory" data-role="tagsinput">
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
