<?php

require "layout/header.php";

if(!$_SESSION['login']){
  header('location:login.php');
}
?>
<h1>Welcome to Dashboard</h1>
