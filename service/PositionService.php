<?php
include_once RACINE .'/dao/IDao.php';
include_once RACINE .'/classe/Position.php';
include_once RACINE .'/connexion/Connexion.php';
class PositionService implements IDao {
 private $listPosition = array();
 private $connexion;
 private $position;
 public function __construct() {
 $this->connexion = new Connexion();
 $this->position = new Position("", "","","","","");
 
 }
 public function create($position) {
$query = "INSERT INTO position (latitude, longitude, date, imei,ip) VALUES (" .$position->getLatitude(). ",".$position->getLongitude().",'".$position->getDate()."','".$position->getImei()."','".$position->getIp()."')";
 $req = $this->connexion->getConnextion()->prepare($query);
 $req->execute() or die('SQL');
 }
 public function delete($obj) {
 
 }
 public function getAll() {
 $query = "select id,latitude,longitude,imei from position";
 $req = $this->connexion->getConnextion()->prepare($query);
 $req->execute();
 return $req->fetchAll(PDO::FETCH_ASSOC); 
 }
public function getById($obj) {
 
 }
 public function update($obj) {
 
 }
}