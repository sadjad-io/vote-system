<?php
require 'db.php';
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
  $ip=$_SERVER['REMOTE_ADDR'];
}
$ip = ip2long($ip);
$t = $database->select("shit", "ip", [
	"ip" => $ip
]);
$t = $database->select("shit", "ip", [
	"ip" => $ip
]);$database->insert('shit', [
    'ip' => $ip,
    'ideas' => $_POST['ideas'],
    'three' => $_POST['optionsRadios'],
    'amir' => $_POST['optionsRadios2'],
    'sadegh' => $_POST['optionsRadios3'],
    'saied' => $_POST['optionsRadios1']
]);
if($t[0]==$ip){
echo "true";
} else  {
echo "false";
}