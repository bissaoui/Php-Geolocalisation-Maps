<?php
class Position {
 private $id;
 private $latitude;
 private $longitude;
 private $date;
 private $imei;
 private $ip;
 function __construct($id, $latitude, $longitude, $date, $imei,$ip) {
 $this->id = $id;
 $this->latitude = $latitude;
 $this->longitude = $longitude;
 $this->date = $date;
 $this->imei = $imei;
 $this->ip=$ip;
 }
 function getIp() {
     return $this->ip;
 }

 function setIp($ip) {
     $this->ip = $ip;
 }

  function getId() {
 return $this->id;
 }
 function getLatitude() {
 return $this->latitude;
 }
 function getLongitude() {
 return $this->longitude;
 }
 function getDate() {
 return $this->date;
 }
 function setId($id) {
 $this->id = $id;
 }
 function setLatitude($latitude) {
 $this->latitude = $latitude;
 }
 function setLongitude($longitude) {
 $this->longitude = $longitude;
 }
 function setDate($date) {
 $this->date = $date;
 }
 function getImei() {
 return $this->imei;
 }
 function setImei($imei) {
 $this->imei = $imei;
 }
}
