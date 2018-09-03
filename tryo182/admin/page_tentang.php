<?php

include"layout/header.php";
if(!$_SESSION['login']){
  header('location:login.php');
}


$id = $_GET['id'];
if(isset($_POST['edit']) && $_POST['edit'] == "SIMPAN"){

  $judul = $_POST['judul'];
  $isi = $_POST['isi'];

  $query = mysql_query("UPDATE pages set nama_pages = '$judul', isi_pages = '$isi' where id_pages = '$id'",$con);

  if($query){
      echo "<script>if(alert('Data Berhasil Di Simpan...')){window.location.href='page_kontak.php';}</script>";
  }

}

//BERITA
$query = mysql_query("SELECT * FROM pages where id_pages = '$id'",$con);
$data = mysql_fetch_assoc($query);

?>

<form action="" method="post">

  <lable>Judul :</lable><input type="text" name="judul" value="<?=$data['nama_pages'];?>"><br>
  <lable>Isi :</lable><textarea name="isi"><?=$data['isi_pages'];?></textarea><br>
  <input type="submit" name="edit" value="SIMPAN">

</form>
