<?php
  $server="localhost";
  $user="root";
  $pass="";
  mysql_connect($server,$user,$pass) or die("Koneksi gagal");
  mysql_query("create database dblatsp11mia");
  mysql_select_db("dblatsp11mia") or die("Database Tidak Ada");
  $sql = "create table ltsp(id int(2), judul varchar(50), artis varchar(20), musik varchar(50), primary key(id))";
  mysql_query($sql);
  $sql = "insert into ltsp values (1,'that one who go away','Katy Perry','Katy1-thatonewhogoaway.mp3')";
  mysql_query($sql);
   $sql = "insert into ltsp values (2,'Roar','Katy Perry','Katy2-roar.mp3')";
  mysql_query($sql);
  $sql = "insert into ltsp values (3,'All About that bass','Meghan Trainor','Meghan1-allaboutthatbass.mp3')";
  mysql_query($sql);
  $sql = "insert into ltsp values (4,'shake it off','Tailor Swift','Tailor1-shakeitoff.mp3')";
  mysql_query($sql);
  $sql = "insert into ltsp values (5,'blank space','Tailor Swift','Tailor2-blankspace.mp3')";
  mysql_query($sql);
  $sql = "create table tamultsp(id int(2) auto_increment, nama varchar(20), musik varchar(20), asal varchar(20), komentar text, primary key(id))";
  mysql_query($sql);

?>