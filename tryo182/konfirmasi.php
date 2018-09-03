<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$result=mysql_query("insert into data values('null','$nama','$email','$komentar')");
if ($result) {
echo "Data Berhasil Dikirim..<br>";
}
echo "<br><a href='index.php'>Lihat Komentar</a>";
?>
