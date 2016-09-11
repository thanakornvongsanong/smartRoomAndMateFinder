
<?php 
session_start();
        include '../model/user.php';
        include 'config.php';
        include '../model/Room.php';
        // Check connection
        
        
        $a =$_POST["area"]; 

        
        if($_POST["area"]==null){
            $a = '%';
        }
        if($_POST["area"])
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "select * from room where animal_allow =".$_POST["petallow"]." and room_size >=".$_POST["minsize"]." and room_size <=".$_POST["maxsize"]." and rent_cost >=".$_POST["minrent"]." and rent_cost <=".$_POST["maxrent"]." and elec_cost >= ".$_POST["minelec"]." and elec_cost <=".$_POST["maxelec"]." and water_cost >=".$_POST["minwater"]." and water_cost <=".$_POST["maxwater"]." and type = '".$_POST["roomtype"]."' and max_member =".$_POST["maxmember"]."  and area_name like '".$a."'";
         $result = mysqli_query($conn, $sql) or die(mysql_error() . $sql);
         $name = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($name, Room::getRoomId($row["room_id"]));
        }   
        
        if(count($name)==0){
            echo "Not Found";
        }
           for($i =0;$i<count($name);$i++){
           // echo "<img class='product__image' src='../view/img/up/".$name[$i]->user_id.".jpg' style='width:300px;height:300px'>";
          //  echo "ชื่อ: ".$name[$i]->room_name;
          //  echo "เขตุที่อยู่: ".$name[$i]->area_name;
          //  echo "ค่าไฟ: ".$name[$i]->elec_cost;
          //  echo "ค่าน้ำ: ".$name[$i]->water_cost;
//            echo "ขนาดห้อง  ".$name[$i]->room_size;

           echo "<div class='col-xs-12 col-sm-8 col-md-6 col-lg-4'>";
      
        //<!-- Products -->

            echo "<div class='product'>";

            echo " <div class='product__info'>";

            echo "<img class='product__image' src='../view/img/up/".$name[$i]->user_id.".jpg' style='width:100%;height:100%'>";
            echo "<h3 class='product__title' >".$name[$i]->room_name."<br>";
            echo "<a href='#Facebook'>";
            echo    "<span class=' fa fa-facebook-square' ></span>";
            echo "</a>&nbsp;";
            echo  "<a href='#chat' >";
            echo   "<span class='glyphicon glyphicon-envelope' style='color:#fed136;'></span>";
            echo  "</a>";
            echo "</h3>";
            echo "<span class='product__any extra highlight'> ชื่อ  &nbsp;  &nbsp;".$name[$i]->room_name."</span>";
            echo "<span class='product__any extra highlight'> ขนาดห้อง".$name[$i]->room_size."</span>";
            echo "<span class='product__any extra highlight'>ค่าเช่า".$name[$i]->rent_cost."</span>";
            echo "<span class='product__any extra highlight'>อนุญาติให้เลี้ยงสัตว์".$name[$i]->animal_allow."</span>";
            echo "<span class='product__any extra highlight'>ค่าไฟ".$name[$i]->elec_cost."</span>";
            echo "<span class='product__any extra highlight'>ค่าน้ำ".$name[$i]->water_cost."</span>";
            echo "<span class='product__any extra highlight>ประเภท".$name[$i]->type."</span>";
            echo "<span class='product__any extra highlight>จำกัดจำนวนคน".$name[$i]->max_member."</span>";
            echo "<span class='product__any extra highlight>ที่อยู่".$name[$i]->area_name."</span>";

            echo "<button class='action action--button action--buy'><i class='fa fa-paper-plane'></i><span class='action__text'>Send Request</span></button>";

          echo "</div>";
          echo "<label class='action action--compare-add'><input class='check-hidden' type='checkbox' /><i class='fa fa-plus'></i><i class='fa fa-check'></i><span class='action__text action__text--invisible'>Add to compare</span></label>";
          echo "</div>";
          echo "</div>";



           }
?>