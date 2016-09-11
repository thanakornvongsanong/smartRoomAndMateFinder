<?php
include '../Model/user.php';
session_start();
?>

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
        <script  type = "text/javascript" src = "vendor/jquery/jquery.js" ></script>
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        <script>
            function getList() {
                $("#chatbox").hide();
                $.ajax({
                    type: "POST",
                    url: "getMessageBox.php",
                    cache: false,
                    data: {user_id: "<?php echo $_SESSION['user']->userid; ?>"},
                    success: function (msg) {
                        $("#in1").html(msg);
                    }

                });
            }
            function send() {
             $.ajax({
                 type: "POST",
                 url: "sendChat.php",
                 cache: false,
                 data: {user_id: $("#id").val(), message: $("#message").val()},
                 success: function (msg) {
                     $("#in").html(msg);
                 }

             });
         }
         function loadwindow(e) {

            $("#chatbox").show();
            $("#id").val(e.id);
            $.ajax({
                type: "POST",
                url: "getMessage.php",
                cache: false,
                data: {user_id: e.id},
                success: function (msg) {
                    $("#in").html(msg);
                }

            });

        }
    </script>
    <?php
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        echo $_SESSION['user']->userid;
    } else {
        echo "No";
    }
    ?>
</head>


<body onload="getList()" >
 <?php 
 include "headerLogined.php";
 ?>

 <section id="team" style="background-color:white">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">  
        </div>
        
<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4' style='height: 500px; width: 500px; border: solid; border-color: #d9d9d9; overflow: scroll;'>
       

            <p id="in1"></p>
        </div>


        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6' id="chatbox">
            <div style="height: 500px;width: 500px;border: solid; border-color: #d9d9d9;overflow: scroll;" >
                <div style="background-color:#5cd6d6; height: 30px; padding-bottom: 7.5px ">
                    <font color="#f2f2f2" face="verdana" style="padding-left:7px; padding-top:10.5px">Chanon Zazaza</font>
                </div>
                <p id="in"></p>
                <div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:83%;">
                        <input type="text" id="id" class="form-control col-xs-3" style="width:20%">
                        <input type="text" id="message" class="form-control col-xs-3" style="width:62%">
                        <input type="hidden" id="id2" value="<?php echo $_SESSION['user']->userid; ?>">
                        <button class="btn btn-primary col-xs-2" onclick="send()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>
</body>