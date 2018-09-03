<?php

require "layout/header.php";
$key = '%'.$_GET['cari'].'%';
$query  = mysql_query("select kategori.* ,berita.* from berita left join kategori on berita.id_kategori = kategori.id_kategori where judul_berita
like '$key' order by berita.id_berita DESC",$con);
$data = mysql_fetch_assoc($query);
$row  = mysql_num_rows($query);

?>

<p>Terdapat <?=$row;?> Berita Dari Keyword "<?=$_GET['cari'];?>"</P>
<?php do{ ?>
<div class="grid">
  <div class="cover-grid-news">
    <img src="upload/<?=$data['gambar_berita'];?>" width="200px">
  </div>
  <div class="judul">
    <h5><a href="lihat_berita.php?id=<?=$data['id_berita'];?>"><?=$data['judul_berita'];?></a></h5>
  </div>
  <div class="attr">
    <ul>
      <li><a href="kategori.php?id=<?=$data['id_kategori'];?>"><?=$data['nama_kategori'];?></a></li>
      <li><?=tanggal($data['tanggal_berita']);?></li>
    </ul>
  </div>
  <div class="tombol-lihat">
    <a href="lihat_berita.php?id=<?=$data['id_berita'];?>">LIHAT</a>
  </div>
</div>
<?php }while($data = mysql_fetch_assoc($query));?>
<?php require "layout/footer.php";?>
