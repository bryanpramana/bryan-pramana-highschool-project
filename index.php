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
  <center>Artis Favorit 2015</center>

<?php
   include "koneksi.inc";
   $hasil=mysql_query("select * from ltsp");
   $t1=0; $t2=0; $t3=0;
   while ($data=mysql_fetch_array($hasil))
   {
     if ($data['artis']=="Tailor Swift") $t1++;
	 else if ($data['artis']=="Meghan Trainor") $t2++;
	 else $t3++;
   }
   $pt1=$t1/($t1+$t2+$t3)*100;
   $pt2=$t2/($t1+$t2+$t3)*100;
   $pt3=$t3/($t1+$t2+$t3)*100;
   echo "<table>
  <table border align=center>
  <tr><td><img src=tailor.jpg width=200 height=200>
  <tr><td align=center>$pt1%
  <tr><td><img src=meghan.jpg width=200 height=200>
  <tr><td align=center>$pt2%  
  <tr><td><img src=katy.jpg width=200 height=200>
  <tr><td align=center>$pt3%  
  </table>";
?>
  <pre>
  Cari lagu Anda di sini  
  <form method=post action=guestbook.php>  
  Judul : <input type=text name=j>
  <input type=submit value=Cari>
  </form>
  </pre>
  </div>  
  <div id=rightcontent>
  <img src=banner.jpg><br>
  <center>Selamat datang di website lagu favorit 2015</center>
  <pre>
  Daftar Pengunjung
  <form method=post action=guestbook.php>
  Nama Pengunjung    : <input type=text name=n>
  Musik yang disukai : <input type=radio name=m value=Pop>Pop <input type=radio name=m value=Rock>Rock <input type=radio name=m value=Hiphop>Hiphop
  Asal               : <select name=a>
                       <option value=Jawa>Jawa
					   <option value=Bali>Bali
					   <option value=Papua>Papua
					   <option value=Sumatera>Sumatera
                       </select>
  Komentar           : <textarea name=k></textarea>
  <input type=submit value=Kirim><input type=reset value=Batal>
  </form>
  </pre>
  </div>  
  <div id=footer>
  <center>Copyright &copy 2015 by LPK Kosayu</center>
  </div>  
</div>