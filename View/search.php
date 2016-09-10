<?php
        session_start();
        include '../model/user.php';
        include_once 'config.php';
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $city = '%';
        $party_lvl = $_POST["party_lvl"];
        $snoring = $_POST["snoring"];
        $status = $_POST["status"];
        $sex = $_POST["sex"];
        $smoke = $_POST["smoke"];
        $clean_lvl = $_POST["clean_lvl"]; 
        if($_POST["city"]!=null){
        $city = $_POST["city"];
        }
        $sql = "select * from users u join city c on u.city_id = c.city_id  where party_lvl like'".$party_lvl."' and snoring like '".$snoring."' and smoke like '".$smoke."' and clean_lvl like '".$clean_lvl."' and status ='".$status."' and city_name like '".$city."' and gender like '".$sex."' and TRUNCATE(DATEDIFF(SYSDATE(),birth_date)/365.25,0)  <= ".$_POST["max_age"]." and TRUNCATE(DATEDIFF(SYSDATE(),birth_date)/365.25,0)  >= ".$_POST["min_age"]." and period like '".$_POST["period"]."' and rent_cost >= ".$_POST["min_rent"]." and rent_cost <= ".$_POST["max_rent"]." order by user_id";
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
       
        $name = array();
        $name2 = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $user = User::findByid($row["user_id"]);
            array_push($name, $user);
            
        }
        $conn->close();
        for($i=0;$i<count($name);$i++){
            $image = 'https://graph.facebook.com/'.$name[$i]->fbid.'/picture?width=200';
            echo "<img src=".$image." data-toggle='modal' data-target='#myModal'  id =".$name[$i]->userid." onclick='getDetail(this)' >";
            echo " ชื่อ: ".$name[$i]->first_name;
        }
 
      
?>