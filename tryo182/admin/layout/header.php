<?php

require '../config/db_connect.php';
require '../config/function.libs.php';
session_start();

 ?>

 <html>
  <head>
      <title>Login Admin</title>
      <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div class="logo">
          <img src="../asset/images/iklan.png" height="61px;" width="225px;">
      </div>
        <div class="panel">
          <ul>
            <li><a href="list_berita.php">List Berita</a></li>
            <li><a href="list_kategori.php">List Kategori</a></li>
            <li><a href="list_admin.php">List Admin</a></li>
            <li><a href="page_kontak.php?id=1">Page::Profil</a></li>
            <li><a href="page_tentang.php?id=2">Page::Tentang</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="content">
