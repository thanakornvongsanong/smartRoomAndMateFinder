
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Room {

    public $room_id;
    public $user_id;
    public $room_size;
    public $city_id;
    public $another_detail;
    public $rent_cost;
    public $animal_allow;
    public $deposit;
    public $elec_cost;
    public $water_cost;
    public $type;
    public $longitude;
    public $latitude;
    public $room_name;
    public $max_member;
    public $area_name;

    static function distance($lat1, $lon1, $lat2, $lon2, $check) {

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

    static function getRoomBydistance($lat, $lon, $check) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * from room";
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        $name = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($name == null) {
                $name = array();
            }
            $lon1 = $row["longitude"];
            $lat1 = $row["latitude"];
            if (Room::distance($lat, $lon, $lat1, $lon1, $check)) {
                array_push($name,Room::getRoomId($row["room_id"]));
            }
        }

        $conn->close();
        return $name;
    }

    static function getRoomId($id) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * from room where room_id =" . $id;
        $result = mysqli_query($conn, $sql) or die(mysql_error() . "555");
        $room = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($room == null) {
                $room = new Room;
            }$room->room_id = $row["room_id"];
            $room->user_id = $row["user_id"];
            $room->room_size = $row["room_size"];
            $room->city_id = $row["city_id"];
            $room->another_detail = $row["another_detail"];
            $room->rent_cost = $row["rent_cost"];
            $room->animal_allow = $row["animal_allow"];
            $room->deposit = $row["deposit"];
            $room->elec_cost = $row["elec_cost"];
            $room->water_cost = $row["water_cost"];
            $room->type = $row["type"];
            $room->longitude = $row["longitude"];
            $room->latitude = $row["latitude"];
            $room->room_name = $row["room_name"];
            $room->max_member = $row["max_member"];
            $room->area_name = $row["area_name"];
        }

        $conn->close();
        return $room;
    }

}

?>
