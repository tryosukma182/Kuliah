<?php

require "config/db_connect.php";
require "config/function.libs.php";

?>
<html>
  <head>
    <title>Music News</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <header>
        <bold><a href="admin/login.php"style="margin-right: -26; padding: 10px; margin-top: 9px; float: right;">LOGIN ADMIN</a></bold>
        <img src="asset/images/iklan.png">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="pages.php?id=1">Profil</a></li>
          <li><a href="pages.php?id=2">Tryo182 Music</a></li>
        </ul>
        <img class="iklan" src="asset/images/music.jpg">

      </header>
      <nav>
      <ul><li class="active"><a href="index.html" title="News">News</a></li>
          <li><a href="#" title="Form">Formulir Pendaftaran</a></li>
          <li><a href="#" title="Profile">Profil</a></li>
          <li><a href="#" title="	Music Luar Negeri">Music Barat</a></li>
          <li><a href="#" title="Music Dalam Negeri">Music Local</a></li>
          <li><a href="#" title="Music Rock">Rock</a></li>
          <li><a href="#" title="Music POP">POP</a></li>
          <li><a href="#" title="Music Reage">Reage</a></li>
          <form action="cari.php" class="cari" method="get">
            <input type="text" name="cari" placeholder="Cari">
            <button type="submit">Cari</button>  <br><br>
          </form>
      </ul>
    </nav>
      <div class="clear"></div>
      <div class="content">
