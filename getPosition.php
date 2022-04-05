<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include_once("./racine.php");

 include_once RACINE.'/service/PositionService.php';
 showPositions();
}
function showPositions() {
 $cs = new PositionService();
 header('Content-type: application/json');
 echo json_encode($cs->getAll());

}
