<?php
include '../model/user.php';
session_start();
?>
<html>
    <head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqgCoOIkJdpbK7OdgyUss5EC2_2yNTnFE&libraries=places&callback=initMap&language=TH&region=TH"async></script>
        <script src="js/googleuser.js" type="text/javascript"></script>
        <script  type = "text/javascript" src = "vendor/jquery/jquery.min.js" ></script>
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script>
            function send() {
                var clean_lvl = $('[name="clean_lvl"]:checked').val();
                var party_lvl = $('[name="party_lvl"]:checked').val();

                var snoring = $('[name="snoring"]:checked').val();

                var status = $('[name="status"]:checked').val();

                var sex = $('[name="sex"]:checked').val();

                var smoke = $('[name="smoke"]:checked').val();

                var period = $('[name="period"]:checked').val();

                var min_rent = $("#minrent").val();
                var max_rent = $("#maxrent").val();

                var min_age = $("#minage").val();

                var max_age = $("#maxage").val();

                var locality = $("#locality").val();

                $.ajax({
                    type: "POST",
                    url: "search.php",
                    cache: false,
                    data: {clean_lvl: clean_lvl, party_lvl: party_lvl, snoring: snoring, status: status, sex: sex, smoke: smoke, period: period, min_rent: min_rent, max_rent: max_rent, min_age: min_age, max_age: max_age, city: locality,movedate:$("#movedate").val() },
                    success: function (msg) {
                        $("#in").html(msg);
                    }

                });
            }
            function getDetail(id) {
                $("#iddd").val(id.id);
                $.ajax({
                    type: "POST",
                    url: "getDetail.php",
                    cache: false,
                    data: {id: id.id},
                    success: function (msg) {
                        $("#in2").html(msg);
                    }
                });
            }
            function sendInvite(input) {
                var message = "สวัสดีเราสนใจจะ สนใจมาแชร์ห้อง ร่วมกันไหม ถ้าสนใจ คลิ้กนี่เลย ";
                var partylink = "<a href=\"joinparty.php?id=<?php echo $_SESSION["user"]->userid; ?>" + "&id2=" + input + "\">Join Room</a>";
                alert(message + partylink);
                $.ajax({
                type: "POST",
                        url: "sendChat.php",
                        cache: false,
                        data: {user_id: input, message: message + partylink},
                                success: function (msg) {
                                    alert(msg);
                                    }
                        });
                }

        </script>

    </head>
    <body >
        <form method="POST">

            <h2>Clean</h2>
            <input type="radio" id = "clean" name="clean_lvl" value="5" onclick="send()" > มาก
            <input type="radio" name="clean_lvl" value="4" onclick="send()"> ค่อนข้างมาก
            <input type="radio" name="clean_lvl" value="3" onclick="send()"> ปานกลาง
            <input type="radio" name="clean_lvl" value="2" onclick="send()"> น้อย
            <input type="radio" name="clean_lvl" value="1" onclick="send()"> น้อยมาก
            <input type="radio" name="clean_lvl" value="%" onclick="send()" checked> any
            <br>
            <h2>Party Time</h2>
            <input type="radio" name="party_lvl" value="5" > มาก
            <input type="radio" name="party_lvl" value="4"> ค่อนข้างมาก
            <input type="radio" name="party_lvl" value="3"> ปานกลาง
            <input type="radio" name="party_lvl" value="2"> น้อย
            <input type="radio" name="party_lvl" value="1"> น้อยมาก
            <input type="radio" name="party_lvl" value="%" checked> any
            <br>
            <h2>กรน</h2>
            <input type="radio" name="snoring" value="5" > มาก
            <input type="radio" name="snoring" value="4"> ค่อนข้างมาก
            <input type="radio" name="snoring" value="3"> ปานกลาง
            <input type="radio" name="snoring" value="2"> น้อย
            <input type="radio" name="snoring" value="1"> น้อยมาก
            <input type="radio" name="snoring" value="%" checked> any
            <br>
            <h2>Smoking</h2>
            <input type="radio" name="smoke" value="5" > มาก
            <input type="radio" name="smoke" value="4"> ค่อนข้างมาก
            <input type="radio" name="smoke" value="3"> ปานกลาง
            <input type="radio" name="smoke" value="2"> น้อย
            <input type="radio" name="smoke" value="1"> น้อยมาก
            <input type="radio" name="smoke" value="%" checked> any
            <br>
            <h2>Status</h2>
            <input type="radio" name="status" value="single" checked> โสด
            <input type="radio" name="status" value="marry"> แต่งงานแล้ว
            <input type="radio" name="status" value="die"> ม่าย
            <br>
            <h2>Sex</h2>
            <input type="radio" name="sex" value="m" > Male
            <input type="radio" name="sex" value="f" > Female
            <input type="radio" name="sex" value="%" checked > Any
            <br>
            <h2>Period</h2>
            <input type="radio" name="period" value="1" > 1-3 Mounth
            <input type="radio" name="period" value="2" > 3-6 Mounth
            <input type="radio" name="period" value="3" > 6-12 Mounth
            <input type="radio" name="period" value="4" > 6-12 Mounth
            <input type="radio" name="period" value="%" checked > any
            <br>
            <h2>Rent Cost</h2>
            <input  type="text" name ="min_rent" value="2000"id="minrent" > Min Rent
            <input  type="text" name ="max_rent" value="12000" id="maxrent" > Max Rent
            <br>
            <h2>Age</h2>
            <input  type="text" name ="min_age" value="16" id="minage"> Min age
            <input  type="text" name ="max_age" value="99" id="maxage"> Max age
            <br>
            Moving Date <input type="date" name="movedate" id="movedate" class="form-control" value="" required="required" title="">
            <br>
            <input id="pac-input" class="controls" type="text"
                   placeholder="Enter a location">
            <input type="text" id="check" value="3">
            <div id="map" style="width:300px;height: 300px" ></div>
            <input type ="text" id="name" name="name" >
            <input type ="text" id="route" name="route" >
            <input type ="text" id="sub_local2" name="sub_local2" >
            <input type ="text" id="sub_local" name="sub_local" >
            <input type ="text" id="locality" name="locality" >
            <input type="hidden" id="lat" name='lat'>
            <input type='hidden' id='lng' name='lng'>
            <p id="in"></p>
    


        </form>
        <button onclick="send()">Refresh</button>
        <p id="in"></p>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">โปรไฟล์</h4>
                    </div>
                    <div class="modal-body" >
                        <p id="in2"></p>
                        <input type="hidden" value="" id="iddd">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" onclick="sendInvite($('#iddd').val())">เชิญให้มาอยู่ด้วยกัน</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>