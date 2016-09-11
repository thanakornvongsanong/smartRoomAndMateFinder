<!DOCTYPE html>
<?php
include '../model/user.php';
session_start();
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Profile</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->

        <link href=" http://gudh.github.io/ihover/dist/styles/main.css" rel="stylesheet" type="text/css">
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

    <body id="page-top" class="index" style="color:262626">

        <?php include "headerLogined.php"; ?>

        <!-- Header -->
        <?php
        $us = $_SESSION["fbdata"];
        $image = 'https://graph.facebook.com/' . $us["id"] . '/picture?width=200';
            if($us["birthday"]==''){
        $us["birthday"] = date_create("2013-03-15");
       }
      
        ?>
        <section id="team" class="bg-light-gray">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="col-lg-12 text-center ih-item circle effect3 left_to_right"><a href="https://facebook.com/<?php $us->fbid ?>">
                                <div class="img"><img src="<?php echo $image ?>" alt="img"></div>
                                <div class="info" >
                                    <img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-512.png" alt="img">

                                </div></a></div>
                        <h2 class="section-heading">Fill your profile data.</h2>
                        <h3 class="section-subheading text-muted">all of these data will use for other people to find you or you find other people</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <form action="insertUser.php" method="POST">
                            <div  class="col-lg-offset-2 col-lg-8">
                                <div class="panel panel-default">

                                    <div class="form-group">  
                                        <div class="row">
                                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                                            <div  class="col-lg-8 text-left " style="padding-left: 0.5cm; padding-right: 0.5cm; padding-top: 1.0cm">

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                        Name 
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                         <input type="text" name="first_name" id="first_name" class="form-control" value='<?php echo $us["name"]; ?>'>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                         Surname
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                        <input type="text" name="last_name" id="first_name" class="form-control" value='<?php echo $us["last"]; ?>'>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Email 
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <input type="text" name="emai" id="emai" class="form-control" value='<?php echo $us["email"]; ?>' >
                                                </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Birthdate
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <input type="text" name="birthday" id="birthday" class="form-control" value='<?php echo date_format($us["birthday"], 'Y-m-d'); ?>' >
                                                </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Clean level
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <select name="clean_lvl" id="inputClean" class="form-control" required="required">
                                                        <option value="5">Very clean</option>
                                                        <option value="4">Relatively clean</option>
                                                        <option value="3">Clean medium</option>
                                                        <option value="2">Quite not clean</option>
                                                        <option value="1">Not clean</option>
                                                    </select>
                                                </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    The frequency of parties
                                                </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                        <select name="party_lvl" id="inputPartylevel" class="form-control" required="required">
                                                        <option value="5">Everyday</option>
                                                        <option value="4">Quite often</option>
                                                        <option value="3">Sometime</option>
                                                        <option value="2">Rarely</option>
                                                        <option value="1">Never</option>
                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Snore level
                                                </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                        <select name="snore" id="inputSnorelevel" class="form-control" required="required">
                                                        <option value="5">Very Lound</option>
                                                        <option value="4">Lound</option>
                                                        <option value="3">Middle</option>
                                                        <option value="2">Low</option>
                                                        <option value="1">Non-snoring</option>
                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Smoke level
                                                </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                        <select name="smoke" id="inputSmokelevel" class="form-control" required="required">
                                                        <option value="5">All the time</option>
                                                        <option value="4">Quite often</option>
                                                        <option value="3">Sometime</option>
                                                        <option value="2">Rarely</option>
                                                        <option value="1">Never</option>
                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Status
                                                </div>
                                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                        <select name="status" id="inputStatus" class="form-control" required="required">
                                                        <option value="single">Single</option>
                                                        <option value="marry">Marry</option>
                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Rental period
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <select name="period" id="inputRentperiod" class="form-control" required="required">
                                                        <option value="4">Unlimited</option>
                                                        <option value="3">6-12 Months</option>
                                                        <option value="2">3-6 Months</option>
                                                        <option value="1">1-3 Months</option>
                                                    </select>
                                                </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                     Rent cost 
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <input type="number" name="rent_cost" id="inputMinrentcost" class="form-control"  required="required" placeholder="Min">
                                                </div>
                                                </div>

                                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                     Do you have a room yet?
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <select name="room" id="inputRoom" class="form-control" required="required">
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>

                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                                <br>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    Select You Location
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <input id="pac-input" class="controls form-control" type="text"
                                                       placeholder="Enter a location">
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                    <div id="map" style="width:300px;height: 300px" ></div>
                                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqgCoOIkJdpbK7OdgyUss5EC2_2yNTnFE&libraries=places&callback=initMap&language=TH&region=TH"async></script>
        <script src="js/googlemap.js" type="text/javascript"></script>
                                                </div>
                                                
                                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <br>
                                                 <input type="text" name="name" id="name" class="form-control" >
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <br>
                                                 <input type="text" name="locality" id="locality" class="form-control" >
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <br>
                                                 <input type="text" name="sub_local" id="sub_local" class="form-control" >
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <br>
                                                 <input type="text" name="sub_local2" id="sub_local2" class="form-control" >
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <br>
                                                 <input type="text" name="route" id="route" class="form-control" >
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <br>
                                                 <input type="hidden" name="lat" id="lat" class="form-control" >
                                                 <input type="hidden" name="lng" id="lng" class="form-control" >
                                                </div>


                                                <p id="in"></p>
                                               
                                                <div  class="col-lg-12">
                                                    Description
                                                    <input type="textfeild" name="description" id="description" class="form-control" >
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    Approx. move in date
                                                    <input type="date" name="movedate" id="inputMovedate" class="form-control" >
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
                                    <img class="img-responsive img-centered" src="" alt="">
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
