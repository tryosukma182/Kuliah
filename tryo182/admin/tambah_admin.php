<?php

  include"layout/header.php";

    if(!$_SESSION['login']){
      header('location:login.php');
    }

  if(isset($_POST['tambah_admin']) && $_POST['tambah_admin'] == "TAMBAH"){

    $nama = $_POST['nama'];
    $user = $_POST['user'];
    $pass = MD5($_POST['pass']);

    $query = mysql_query("insert into admin (nama_admin,user_admin,pass_admin) value ('$nama','$user','$pass')",$con);
    if($query){
      header('location:list_admin.php');
    }
  }

 ?>

<form action="" method="post">
  <lable>Nama Admin</lable><input type="text" name="nama"><br>
  <lable>Username</lable><input type="text" name="user"><br>
  <lable>Password</lable><input type="password" name="pass"><br>
  <input type="submit" name="tambah_admin" value="TAMBAH">
</form>
