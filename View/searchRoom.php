<header><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqgCoOIkJdpbK7OdgyUss5EC2_2yNTnFE&libraries=places&callback=initMap&language=TH&region=TH"async></script>
       
        <script  type = "text/javascript" src = "vendor/jquery/jquery.min.js" ></script>
        <script>
            function send(){
                
                var petallow =$('[name="petallow"]:checked').val(); 
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
                    data: {city:city,petallow:petallow,minsize:minsize,maxsize:maxsize,maxrent:maxrent,minrent:minrent,maxelec:maxelec,minelec:minelec,maxwater:maxwater,minwater:minwater,roomtype:roomtype,maxmember:maxmember,area:area},
                    success: function (msg) {
                        $("#in2").html(msg);
                    }

                });
            }
            
        </script>
</header>
<body>
    Roomsize<br>
    <input type="text" name="maxsize" id="minsize" value="1">
    <input type="text" name="minsize" id="maxsize" value="1000"><br>
    Rent Cost<br>
    <input type="text" name="maxrent" id="minrent" value="1">
    <input type="text" name="minrent" id="maxrent" value="10000"><br>
    animal allowable<br>
    <input type="radio" name="petallow" value="0" checked>NotAllow
    <input type="radio" name="petallow" value="1">Allow<br>
    Electronic Cost<br>
    <input type="text" name="minelec" id="minelec" value="1">
    <input type="text" name="maxelec" id="maxelec" value="100"><br>
    Water COst<br>
    <input type="text" name="maxwater" id="minwater" value="1">
    <input type="text" name="minwater" id="maxwater" value="100">
    <br>
    Room type<br>
    <select name="room_type" id="room_type" class="form-control" required="required">
        <option value="condo">คอนโด</option>
        <option value="renthouse">บ้านเช่า</option>
        <option value="dormitory">หอพัก</option>
        <option value="appartment">อพาร์ทเม้น</option>
        <option value="flat">แฟลต</option>
        <option value="mansion">แมนชั่น</option>
    </select><br>
    Maxmember<br>
    <input type="text" name="maxmember" id="maxmember" value="4"><br>
    <input id="pac-input" class="controls" type="text"
                   placeholder="Enter a location">
    <input type='text' id='check' value="3">
            <div id="map" style="width:300px;height: 300px" ></div>
             <script src="js/googlemap.js" type="text/javascript"></script>
    <input type="text" id="sub_local">
    <input type="text" id="locality">
    <button onclick="send()"></button>
    <p id="in2"></p>
</body>