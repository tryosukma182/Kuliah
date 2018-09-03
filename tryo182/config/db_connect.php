<?php

$con = mysql_connect('sql202.byethost.com','b7_22657898','Blink182');
$db  = mysql_select_db('b7_22657898_tryo182',$con);

if(!$db){
  echo"Database Tidak Ditemukan";
}
?>
