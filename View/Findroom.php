<?php 
  include '../model/room.php';
  session_start(); 
  
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Find Room</title>
    <meta name="description" content="Blueprint: A basic responsive product grid layout with comparison functionality" />
    <meta name="keywords" content="blueprint, template, html, css, javascript, grid, layout, effect, product comparison" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- Modernizr is used for flexbox fallback -->
    <script src="js/modernizr.custom.js"></script>

    <!--Google Map-->
    
            

    <!--JQuery-->
    <script src="vendor/jquery/jquery.js"></script>

    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
  <script>
            function send(){
                
                var petallow =$("#petallow").val(); 
              
                var minsize = $("#minsize").val();
                var maxsize = $("#maxsize").val();
                var maxrent = $("#maxrent").val();
                var minrent = $("#minrent").val();
                var maxelec = $("#maxelec").val();
                var minelec = $("#minelec").val();
                var minwater =$("#minwater").val();
                var maxwater = $("#maxwater").val();
                var roomtype =$("#room_type").val();
                var maxmember =$("#maxmember").val();
                var area = $("#sub_local").val();
                var city = $("#locality").val();
                 $.ajax({
                    type: "POST",
                    url: "searchRoomCon.php",
                    cache: false,
                    data: {city:city,petallow: petallow,minsize:minsize,maxsize:maxsize,maxrent:maxrent,minrent:minrent,maxelec:maxelec,minelec:minelec,maxwater:maxwater,minwater:minwater,roomtype:roomtype,maxmember:maxmember,area:area},
                    success: function (msg) {
                        
                        $("#in2").html(msg);
                    }

                });
            }
        </script>
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
        <h1 style="color:white">Find your room</h1>
      </header>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="color:white;background-color:#24252A;border: 5px solid;border-color:#fed136;border-radius:30px" >
        <ul >
                      <h3 class="text-center">ROOM  INFORMATIONS.</h3><br>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>Room size (square meter)</h4>
                       </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="minsize" id="minsize" class="form-control" required="required" placeholder="Min" value="1" min="1" max="100" style="font-size:5px">
                          </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="maxsize" id="maxsize" class="form-control" required="required" value="325" min="1" max="325" placeholder="Max" style="font-size:5px">
                          </div>
                      </div>
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>Rent cost</h4>
                       </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="minrent" id="minrent" class="form-control" required="required" placeholder="Min" value="1" min="1" max="10000" style="font-size:5px">
                          </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="maxrent" id="maxrent" class="form-control" required="required" value="10000" min="1" max="10000" placeholder="Max" style="font-size:5px">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4> Animal allowable</h4>
                       </div>
                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <select name="petallow" id="petallow" class="form-control" required="required">
                                                        <option value="0">Not Allow</option>
                                                        <option value="1">Allow</option>
                                                         
                                                </select>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>Electronic cost</h4>
                       </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="minelec" id="minelec" class="form-control" required="required" placeholder="Min" value="1" min="1" max="100" style="font-size:5px">
                          </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="maxelec" id="maxelec" class="form-control" required="required" value="100" min="1" max="100" placeholder="Max" style="font-size:5px">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>Water cost</h4>
                       </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="minwater" id="minwater" class="form-control" required="required" placeholder="Min" value="1" min="1" max="100" style="font-size:5px">
                          </div>
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="number" name="maxwater" id="maxwater" class="form-control" required="required" value="100" min="1" max="100" placeholder="Max" style="font-size:5px">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>Room type</h4>
                       </div>
                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <select name="room_type" id="room_type" class="form-control" required="required">
                                <option value="condo">Condo</option>
                                <option value="renthouse">Rental house</option>
                                <option value="dormitory">Dormitory</option>
                                <option value="appartment">Apartment</option>
                                <option value="flat">Flat</option>
                                <option value="mansion">Mansion</option>
                        </select>
                      </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>Max member</h4>
                       </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <input type="number" name="maxmember" id="maxmember" class="form-control" required="required" value="4" min="1" max="15" placeholder="Max" style="font-size:5px">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>  Location</h4>
                       </div>
                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <input type="text" name="locality" id="pac-input" class="form-control" placeholder="Enter a location">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                          <h4>  Location range</h4>
                       </div>
                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div class="input-group">
                  <input type="text" name="locality" id="check" class="form-control" placeholder="Enter location range" value="3">
                  <span class="input-group-addon" id="basic-addon1">Kilometer</span>
              </div>
                        </div>
                      </div>
                      <!--Google Map-->
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div id="map" style="width:370px;height: 300px" ></div>
                         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqgCoOIkJdpbK7OdgyUss5EC2_2yNTnFE&libraries=places&callback=initMap&language=TH&region=TH"async></script>
                         <script src="js/googleuser.js" type="text/javascript"></script>
                         <br>
                      </div>
                      <!--Result of Google Map-->
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <input type ="text" class="form-control" id="name" name="name" >
                          <input type ="text" class="form-control" id="locality" name="locality" >
                          <input type ="text" class="form-control" id="sub_local" name="sub_local" >
                          <input type ="text" class="form-control" id="sub_local2" name="sub_local2" >
                          <input type ="text" class="form-control" id="route" name="route" >
                          <input type="hidden" class="form-control" id="lat" name='lat'>
                           <input type='hidden' class="form-control" id='lng' name='lng'>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                                                <br>
                      <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                              <button  class="btn " style="background-color:#fed136;color:black;font-weight:bold;" onclick="send()">Search</button>
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
 <p id="in2"></p>
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
            <span class="product__any extra highlight">Gender: </span>
            <span class="product__any extra highlight">Age: </span>
            <span class="product__any extra highlight">Status: </span>
            <span class="product__any extra highlight">Clean: </span>
            <span class="product__any extra highlight">Party:</span>
            <span class="product__any extra highlight">Snore: </span>
            <span class="product__any extra highlight">Smoke: </span>
            <span class="product__any extra highlight">Pets: </span>
            <span class="product__any extra highlight">Rental period: </span>
            <span class="product__any extra highlight">Rental cost: </span>
            <span class="product__any  highlight">Approx. move in date: </span>

            <button class="action action--button action--buy"><i class="fa fa-paper-plane"></i><span class="action__text">Send Request</span></button-->

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

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">โปรไฟล์</h4>
                        </div>
                        <div class="modal-body" >
                           
                            <input type="hidden" value="" id="iddd">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" onclick="sendInvite($('#iddd').val())">เชิญให้มาอยู่ด้วยกัน</button>
                        </div>
                    </div>
                </div>
    </div>
    <p id="in2"></p>

    <script src="js/classie.js"></script>
    <script src="js/main.js"></script>


  
          </div>

  </body>
</html>
