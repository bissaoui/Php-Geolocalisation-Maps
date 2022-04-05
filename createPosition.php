<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include_once("./racine.php");
 include_once RACINE.'/service/PositionService.php';
 create();
}
function create (){
 $latitude = $_POST['latitude'];
 $longitude = $_POST['longitude'];
 $date = $_POST['date'];
 $imei = $_POST['imei'];
 $ip=$_SERVER['REMOTE_ADDR'];
 $ss = new PositionService();
 
 $ss->create(new Position(1, $latitude, $longitude, $date, $imei,$ip));
}