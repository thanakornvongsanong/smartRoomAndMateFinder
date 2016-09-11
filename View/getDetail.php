<?php

include '../model/user.php';
session_start();
$user = User::findByid($_POST["id"]);
echo "<div class='row'>
 <div class='col-md-6'>";
echo "ชื่อ: ".$user->first_name."<br>";
echo "นามสกุล: ".$user->last_name."<br>";
echo "อายุ ".$user->getAge();
echo "เพศ: ";
if($user->gender=="f"){
  echo "หญิง"."<br>";
}
else{
   echo "ชาย"."<br>";
}
echo "ความสะอาด: ";
if($user->clean_lvl==5){
  echo "สะอาดมาก"."<br>";
}
elseif($user->clean_lvl==4){
   echo "ค่อนข้างสะอาด"."<br>";
}
elseif($user->clean_lvl==3){
   echo "ปานกลาง"."<br>";
}
elseif($user->clean_lvl==2){
   echo "ค่อนข้างรก"."<br>";
}
elseif($user->clean_lvl==1){
   echo "รกมาก"."<br>";
}
echo "การกรน: ";
if($user->snoring==5){
  echo "กรนบ่อยครั้ง"."<br>";
}
elseif($user->snoring==4){
   echo "กรนค่อนข้างบ่อย"."<br>";
}
elseif($user->snoring==3){
   echo "ปานกลาง"."<br>";
}
elseif($user->snoring==2){
   echo "กรนน้อย"."<br>";
}
elseif($user->snoring==1){
   echo "ไม่กรน"."<br>";
}
echo "การดูดบุหรี่: ";
        if($user->smoke=5){
  echo "สูบบุหรี่หนัก"."<br>";
}
elseif($user->smoke==4){
   echo "สูบบุหรี่ค่อนข้างหนัก"."<br>";
}
elseif($user->smoke==3){
   echo "ปานกลาง"."<br>";
}
elseif($user->smoke==2){
   echo "ไม่ค่อยสูบบุหรี่"."<br>";
}
elseif($user->smoke==1){
   echo "ไม่สูบบุหรี่"."<br>";
}
echo "สถานะ: ";
if($user->status=="single"){
  echo "โสด"."<br>";
}
elseif($user->status=="marry"){
   echo "แต่งงานแล้ว"."<br>";
}

echo "อัตตราการจัดปาตี้: ";
 if($user->party_lvl=5){
  echo "บ่อยครั้ง"."<br>";
}
elseif($user->party_lvl==4){
   echo "ค่อนข้างบ่อย"."<br>";
}
elseif($user->party_lvl==3){
   echo "ปานกลาง"."<br>";
}
elseif($user->party_lvl==2){
   echo "นานๆที"."<br>";
}
elseif($user->party_lvl==1){
   echo "ไม่เลย"."<br>";
}

echo "เกี่ยวกับตัวฉัน: ".$user->description."<br>";
echo "ประเทศ: ".User::getCountryName($user->country_id)."<br>";
echo "อาชีพ: ".User::getJobName($user->job_id)."<br>";
echo "จังหวัด: ".User::getCityName($user->city_id)."<br>";
echo "Email: ".$user->email."<br>";
echo "ศาสนา".User::getSadsanaName($user->religion)."<br>";
echo "ค่าเช่าที่ต้องการ: ".$user->rent_cost."<br>";
echo "ระยะเวลา: ".$user->period."<br>";
echo "</div>";
echo  "<div class='col-md-6'>";
$image = 'https://graph.facebook.com/'.$user->fbid.'/picture?width=200';
 echo "<img src=".$image." class='img-circle'>";
 echo "</div></div>";
?>