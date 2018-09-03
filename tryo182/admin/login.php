<?php
  include"../config/db_connect.php";

  $err = '';
  if(isset($_POST['login']) && $_POST['login'] == "LOGIN"){

    $name = $_POST['user'];
    $pass = MD5($_POST['pass']);

    $query = mysql_query("select * from admin where user_admin = '$name' and pass_admin = '$pass'",$con);
    $data = mysql_fetch_assoc($query);

    if(mysql_num_rows($query) > 0){
      session_start();

      $_SESSION['id_admin'] = $data['id_admin'];
      $_SESSION['login'] = true;
      header('location:index.php');
    }else{
      $err = "Username atau Password salah !!";
    }
  }
 ?>
<html>
  <head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body style="background-image:url(../asset/images/gbr.jpg)">
    <div class="login-page">
      <form action="" method="post">
        <h3><img src="../asset/images/iklan.png" width="200px"></h3>
        <input type="text" name="user"> <br>
        <input type="password" name="pass"> <br>
        <input type="submit" name="login" value="LOGIN"> <br>
        <br>
        <font color="red"><?php echo $err ?></p></font>
      </form>
    </div>
  </body>
</html>
