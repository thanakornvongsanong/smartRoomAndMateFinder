<?php

class User {

    public $userid;
    public $first_name;
    public $last_name;
    public $nick_name;
    public $eng_name;
    public $eng_last_name;
    public $birth_date;
    public $gender;
    public $clean_lvl;
    public $snoring;
    public $haveroom;
    public $smoke;
    public $children;
    public $status;
    public $party_lvl;
    public $description;
    public $country_id;
    public $job_id;
    public $city_id;
    public $email;
    public $user_name;
    public $password;
    public $fbid;
    public $religion;
    public $rent_cost;
    public $period;
    public $latitude;
    public $longitude;

    static function findByFacebookid($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT *  FROM users where fbid =" . $id;

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $us = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($us == null) {
                $us = new User;
            }
            $us->latitude = $row["latitude"];
            $us->longitude = $row["longitude"];
            $us->userid = $row["user_id"];
            $us->first_name = $row["first_name"];
            $us->last_name = $row["last_name"];
            $us->nick_name = $row["nick_name"];
            $us->eng_name = $row["eng_name"];
            $us->eng_last_name = $row["eng_last_name"];
            $us->birth_date = $row['birth_date'];
            $us->gender = $row["gender"];
            $us->clean_lvl = $row["clean_lvl"];
            $us->snoring = $row["snoring"];
            $us->haveroom = $row["haveroom"];
            $us->smoke = $row["smoke"];
            $us->children = $row["children"];
            $us->status = $row["status"];
            $us->party_lvl = $row["party_lvl"];
            $us->description = $row["description"];
            $us->country_id = $row["country_id"];
            $us->job_id = $row["job_id"];
            $us->city_id = $row["city_id"];
            $us->email = $row["email"];
            $us->user_name = $row["user_name"];
            $us->password = $row["password"];
            $us->fbid = $row["fbid"];
            $us->religion = $row["religion_id"];
            $us->rent_cost = $row["rent_cost"];
            $us->period = $row["period"];
            $us->latitude = $row["latitude"];
            $us->longitude = $row["longitude"];
        }

        $conn->close();
        return $us;
    }

    static function findByid($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT *  FROM users where user_id =" . $id;

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $us = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($us == null) {
                $us = new User;
            }
            $us->userid = $row["user_id"];
            $us->first_name = $row["first_name"];
            $us->last_name = $row["last_name"];
            $us->nick_name = $row["nick_name"];
            $us->eng_name = $row["eng_name"];
            $us->eng_last_name = $row["eng_last_name"];
            $us->birth_date = $row['birth_date'];
            $us->gender = $row["gender"];
            $us->clean_lvl = $row["clean_lvl"];
            $us->snoring = $row["snoring"];
            $us->haveroom = $row["haveroom"];
            $us->smoke = $row["smoke"];
            $us->children = $row["children"];
            $us->status = $row["status"];
            $us->party_lvl = $row["party_lvl"];
            $us->description = $row["description"];
            $us->country_id = $row["country_id"];
            $us->job_id = $row["job_id"];
            $us->city_id = $row["city_id"];
            $us->email = $row["email"];
            $us->user_name = $row["user_name"];
            $us->password = $row["password"];
            $us->fbid = $row["fbid"];
            $us->religion = $row["religion_id"];
            $us->rent_cost = $row["rent_cost"];
            $us->period = $row["period"];
            $us->latitude = $row["latitude"];
            $us->longitude = $row["longitude"];
        }

        $conn->close();
        return $us;
    }

    static function getSadsanaName($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select religion_name from religion where religion_id  =" . $id;

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["religion_name"];
        }

        $conn->close();
        return $name;
    }

    static function getCityName($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select city_name from city where city_id  =" . $id;

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["city_name"];
        }
        return $name;
    }

    static function getCityId($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select city_id from city where city_name  ='" . $id . "'";

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["city_id"];
        }


        $conn->close();
        return $name;
    }

    static function getCountryID($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select country_id from country where country_name  ='" . $id . "'";
        echo $sql;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["country_id"];
        }


        $conn->close();
        return $name;
    }

    static function getCountryName($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select country_name from country where country_id  =" . $id . "";

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["country_name"];
        }


        $conn->close();
        return $name;
    }

    static function getAreaId($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select city_id from area where area_name  ='" . $id . "'";
        echo $sql;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["city_id"];
        }


        $conn->close();
        return $name;
    }

    static function getRoomId($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select room_id from room where user_id  =" . $id . "";
        echo $sql;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["room_id"];
        }


        $conn->close();
        return $name;
    }

    static function getAccessoryId($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select accessory_id from accessory where accessory_name  ='" . $id . "'";

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["accessory_id"];
        }


        $conn->close();
        return $name;
    }

    function getAge() {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select TRUNCATE(DATEDIFF(SYSDATE(),birth_date)/365.25,0) as age from users where user_id = " . $this->userid;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["age"];
        }

        $conn->close();
        return $name;
    }

    /*static function getEducationName($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select education_name_primary from education where education_id  =" . $id;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["education_name_primary"];
        }

        $conn->close();
        return $name;
    }*/

    static function getJobName($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select job_name from jobs where job_id  =" . $id;

        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["job_name"];
        }

        $conn->close();
        return $name;
    }

    static function getGetHistory($id) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * from hstory_education where user_id  =" . $id;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($name == null) {
                $name = array();
            }
            array_push($name, $row["education_id"]);
        }

        $conn->close();
        return $name;
    }

    static function getAllCountry() {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select country_name from country";
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($name == null) {
                $name = array();
            }
            array_push($name, $row["country_name"]);
        }

        $conn->close();
        return $name;
    }

    static function getAllCity() {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select country_name from country";
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        ;
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($name == null) {
                $name = array();
            }
            array_push($name, $row["country_name"]);
        }

        $conn->close();
        return $name;
    }

    static function getByDistance($lat, $lon, $check) {
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * from users";
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($name == null) {
                $name = array();
            }
            $lon1 = $row["longitude"];
            $lat1 = $row["latitude"];
            if (User::distance($lat, $lon, $lat1, $lon1, $check)) {
                array_push($name, User::findByid($row["user_id"]));
            }
        }

        $conn->close();
        return $name;
    }

    static function distance($lat1, $lon1, $lat2, $lon2, $check) {
        settype($lat2, "double");
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $miles = $miles * 1.609344;
        if ($miles <= $check) {
            return true;
        } else {
            return false;
        }
    }
    static function getpartymember($id){
        $servername = "192.168.1.14";
        $username = "kawotat";
        $password = "1234";
        $dbname = "project";
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select party_id from party where user_id= ".$id;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        $x = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $x = $row["party_id"];
        }
        $sql = "select * from party where party_id= ".$x;
        echo $sql;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        $name = array();
        while ($row = mysqli_fetch_assoc($result)) {
        array_push($name, User::findByid($row["user_id"]));
        }
        $conn->close();
        return $name;
    }
    function easyread(){
        
if( $this->gender=="f"){
  $this->gender="Female" ;
}
else{
     $this->gender="Male" ;
}

if( $this->clean_lvl==5){
   $this->clean_lvl="สะอาดมาก";
}
elseif( $this->clean_lvl==4){
   $this->clean_lvl= "ค่อนข้างสะอาด";
}
elseif( $this->clean_lvl==3){
   $this->clean_lvl= "ปานกลาง";
}
elseif( $this->clean_lvl==2){
   $this->clean_lvl="ค่อนข้างรก";
}
elseif( $this->clean_lvl==1){
   $this->clean_lvl= "รกมาก";
}

if( $this->snoring==5){
  $this->snoring= "กรนบ่อยครั้ง";
}
elseif( $this->snoring==4){
    $this->snoring= "กรนค่อนข้างบ่อย";
}
elseif( $this->snoring==3){
   $this->snoring= "ปานกลาง";
}
elseif( $this->snoring==2){
   $this->snoring= "กรนน้อย";
}
elseif( $this->snoring==1){
   $this->snoring="ไม่กรน";
}
        if( $this->smoke==5){
  $this->smoke= "สะอาดมาก";
}
elseif( $this->smoke==4){
   $this->smoke="ค่อนข้างสะอาด";
}
elseif( $this->smoke==3){
   $this->smoke= "ปานกลาง";
}
elseif( $this->smoke==2){
    $this->smoke= "ค่อนข้างรก";
}
elseif( $this->smoke==1){
    $this->smoke= "รกมาก";
}
if( $this->status=="single"){
   $this->status= "โสด";
}
elseif( $this->status=="marry"){
    $this->status= "แต่งงานแล้ว";
}
 if( $this->party_lvl==5){
   $this->party_lvl= "บ่อยครั้ง";
}
elseif( $this->party_lvl==4){
   $this->party_lvl="ค่อนข้างบ่อย";
}
elseif( $this->party_lvl==3){
   $this->party_lvl= "ปานกลาง";
}
elseif( $this->party_lvl==2){
   $this->party_lvl="นานๆที";
}
elseif( $this->party_lvl==1){
    $this->party_lvl= "ไม่เลย";
}
return  $this;
    }
   }
?>

