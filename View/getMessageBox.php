<?php
include '../model/user.php';
session_start();
$servername = "192.168.1.14";
$username = "kawotat";
$password = "1234";
$dbname = "project";
$a = $_SESSION["user"]->userid;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="select * from chat where user_id1 = ".$a." group by user_id2" ;

  $result = mysqli_query($conn, $sql) or die(mysql_error() . $sql);
  $name = array();
  while ($row = mysqli_fetch_assoc($result)) {
      array_push($name,User::findByid($row["user_id2"]));
    }
for($i  =0;$i<count($name);$i++){
   $image = 'https://graph.facebook.com/'.$name[$i]->fbid.'/picture?width=200';
    echo " 
            
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                    <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4' style='padding-top:10px;'>
                        <img src='".$image."' height='90px' width='100px'>
                    </div>
                    <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8 ' style='padding-top:10px' align='left' >
                        <b><font face='verdana' color='#0d0d0d'><a  id='".$name[$i]->userid."'href='#' onclick='loadwindow(this)'>".$name[$i]->first_name."</a></font></b>
                    </div>
                    <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8 ' style='padding-top:10px' align='left'>
                        <b><font face'verdana' color='#a6a6a6'>สวัสดี</font></b>
                    </div>
                    <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 ' style='padding-top:10px' align='left'>
                    </div>
                    <div>

                    </div>
                </div>
                <div style='padding-top:10px; padding-bottom:10px'>
                    <font color='d9d9d9'>-------------------------------------------------------------------------------------</font>
               
            ";
}
?>