
<?php

include"layout/header.php";

$id = $_GET['id'];

$query = mysql_query("select * from pages where id_pages = '$id'");
$data = mysql_fetch_assoc($query);

?>
<h2><?=$data['nama_pages'];?></h2>
<br><br>
<p><?=$data['isi_pages'];?></p>

<?php include"layout/footer.php";?>
