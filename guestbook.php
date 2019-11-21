<title>Musik Kita 2015</title>
<style>
  #main { width:950px; background:white; margin:auto }
  #header { background:cyan }
  #leftcontent { width:300px; float:left }
  #rightcontent { width:650px; float:right }
  #footer { clear:both; background:green }
</style>
<div id=main>
  <div id=header>
  <a href=index.php>Home</a> | <a href=guestbook.php>Guest Book</a>
  </div>
  <div id=leftcontent>
  Guestbook<br>
  
<?php
 include "koneksi.inc";
 if (!empty($_POST['n']))
 { 
   $n=$_POST['n'];
   $m=$_POST['m'];
   $a=$_POST['a'];
   $k=$_POST['k'];   
   $hasil=mysql_query("insert into tamultsp (nama,musik,asal,komentar) values ('$n','$m','$a','$k')");
   echo "Terima kasih atas pendaftaran";
 }
 else
 {
   $hasil=mysql_query("select * from tamultsp");
   echo "<table border>";
   while ($data=mysql_fetch_array($hasil))
   {
     echo "<tr><td>Nama<td>$data[nama]";
     echo "<tr><td>Musik<td>$data[musik]";
     echo "<tr><td>Asal<td>$data[asal]";
     echo "<tr><td>Komentar<td>$data[komentar]";
   }
   echo "</table>";
 }
?>

  </div>
  <div id=rightcontent>
  <img src=banner.jpg><br>
  Hasil Pencarian Data<br>
<?php
 include "koneksi.inc";
 if (!empty($_POST['j']))
 {
   $j = $_POST['j'];
   $hasil=mysql_query("select * from ltsp where judul like '%$j%'");
   while ($data=mysql_fetch_array($hasil))
   {
     echo "Judul : $data[judul]<br>";
     echo "Artis : $data[artis]<br>";
     echo "<embed src=$data[musik]><br>";  
   }
 }
?>
  </div>  
  <div id=footer>
  <center>Copyright &copy 2015 by LPK Kosayu</center>
  </div>  