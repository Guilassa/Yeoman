<?php
//database settings
include "connectdb.php";

$query="select `Nombre`,`Apellido1` from hoja1";
//$data = array();
$rs=$dbhandle->query($query);

while ($row = $rs->fetch_array()) {
  $data[] = $row;
}

	//print_r($data);
    
    print json_encode($data);
?>


