<?php
header("Access-Control-Allow-Origin: http://10.30.29.100:63341");
header("Access-Control-Allow-Credentials: true");
session_start();
$data=array('userName'=> $_SESSION['name']);
//
echo json_encode($data);

?>