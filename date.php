<?php
date_default_timezone_set('Asia/Kolkata');
echo date("d-M-y")."<br>";    //07-Apr-18
echo date("h:i:sa")."<br>";   //04:49:46pm
echo date('d-m-Y', strtotime("Monday"))."<br/>";    //09-04-2018
echo date('d/m/Y', strtotime("+3 Weeks"))."<br/>";  //28/04/2018
//strtotime with two parameters
$next_day = strtotime("Monday");
echo date('d-M-Y', strtotime("+10 days", $next_day))."<br/>";   //19-Apr-2018
$bd = mktime(03,30,9,05,8,1993);
echo "MK-Time ".date("d-M-y h:i:sa", $bd)."<br/>";    //MK-Time 08-May-93 03:30:09am
echo date('d-m-Y', strtotime("12-08-2017 -1 year"));  //12-08-2016
?>

----------------------------------------Output--------------------------------------------------------------






