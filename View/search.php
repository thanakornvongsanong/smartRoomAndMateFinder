<?php
        session_start();
        include '../model/user.php';
        include 'config.php';
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

         $movedate = '31-12-2117';
        $city = '%';
        $party_lvl = $_POST["party_lvl"];
        $snoring = $_POST["snoring"];
        $status = $_POST["status"];
        $sex = $_POST["sex"];
        $smoke = $_POST["smoke"];
        $clean_lvl = $_POST["clean_lvl"];

         if($_POST["movedate"] !=null){
        $movedate = $_POST["movedate"];
        }
        if($_POST["city"]!=null){
        $city = $_POST["city"];
        }
        $sql = "select * from users u join city c on u.city_id = c.city_id  where party_lvl like'".$party_lvl."' and snoring like '".$snoring."' and smoke like '".$smoke."' and clean_lvl like '".$clean_lvl."' and status like'".$status."' and city_name like '".$city."' and gender like '".$sex."' and TRUNCATE(DATEDIFF(SYSDATE(),birth_date)/365.25,0)  <= ".$_POST["max_age"]." and TRUNCATE(DATEDIFF(SYSDATE(),birth_date)/365.25,0)  >= ".$_POST["min_age"]." and period like '".$_POST["period"]."' and rent_cost >= ".$_POST["min_rent"]." and rent_cost <= ".$_POST["max_rent"] ." and moving_date <= STR_TO_DATE('".$movedate."','%d-%m-%Y')  order by user_id";
        $result = mysqli_query($conn, $sql) or die(mysql_error() . $sql);

        $name = array();
        $name2 = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $user = User::findByid($row["user_id"]);
            array_push($name, $user);
        }
        $conn->close();
        
        //echo  "<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>";
       // echo  "<section class='grid'>";

        for($i=0;$i<count($name);$i++){
            $image = 'https://graph.facebook.com/'.$name[$i]->fbid.'/picture?width=200';
            //echo "<img src=".$image." data-toggle='modal' data-target='#myModal'  id =".$name[$i]->userid." onclick='getDetail(this)' >";
            //echo " ชื่อ: ".$name[$i]->first_name;

           echo "<div class='col-xs-12 col-sm-8 col-md-6 col-lg-4' >";
                //<!-- Products -->
           echo     "<div class='product'>";
           echo         "<div class='product__info'>";
           echo             "<img class='product__image' src=".$image." alt='Product 1' data-toggle='modal' data-target='#myModal' onclick='getDetail(this)' id='".$name[$i]->userid."''/>";
           echo             "<h3 class='product__title' data-toggle='modal' data-target='#myModal' onclick='getDetail(this)' id='".$name[$i]->userid."''>   &nbsp;  &nbsp;   ".$name[$i]->first_name;;
           echo                 "<a href='#Facebook'>";
           echo                     "<span class= 'fa fa-facebook-square' ></span>";
           echo                 "</a>";
           echo                " <a href='#chat' >";
           echo                     "<span class='glyphicon glyphicon-envelope' style='color:#fed136;'></span>";
           echo                 "</a>";
           echo            "</h3>";
           echo           "<span class='product__any extra highlight'>Gender:".$name[$i]->easyread()->gender." </span>";
           echo           "<span class='product__any extra highlight'>Age: ".$name[$i]->easyread()->getAge()."</span>";
            echo           "<span class='product__any extra highlight'>Status: ".$name[$i]->easyread()->status."</span>";
            echo            "<span class='product__any extra highlight'>Clean: ".$name[$i]->easyread()->clean_lvl."</span>";
            echo            "<span class='product__any extra highlight'>Party: ".$name[$i]->easyread()->party_lvl."</span>";
           echo             "<span class='product__any extra highlight'>Snore: ".$name[$i]->easyread()->snoring."</span>";
            echo            "<span class='product__any extra highlight'>Smoke: ".$name[$i]->easyread()->smoke."</span>";
           echo             "<span class='product__any extra highlight'>Rental period: ".$name[$i]->easyread()->period."</span>";
           echo             "<span class='product__any extra highlight'>Rental cost: ".$name[$i]->easyread()->gender."</span>";
           echo             "<span class='product__any extra highlight'>Approx. move in date: ".$name[$i]->easyread()->gender."</span>";

           echo             "<button class='action action--button action--buy'><i class='fa fa-paper-plane'></i><span class='action__text'>Send Request</span></button>";

           echo         "</div>";
            echo        "<label class='action action--compare-add'><input class='check-hidden' type='checkbox' /><i class='fa fa-plus'></i><i class='fa fa-check'></i><span class='action__text action__text--invisible'>Add to compare</span></label>";
           echo     "</div>";
           echo "</div>";

       
    

        }

        echo  "</div>";
       // echo "</section>";
        //echo  "</div>";

?>