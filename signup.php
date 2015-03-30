<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Makan Apa Ya ?</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>
<div id="header">
  <div align="center"> <img src="images/b.png" width="118" height="80" border="0" align="absmiddle" />Makan Apa Ya ? 
    <h6>Portal Informasi Pencarian Tempat Makan di Surabaya </h6>
  </div>
</div>
<div id="navigasi">
  <label for="username2"><br />
  </label>
  <table width="100%" border="0">
    <tr>
      <th width="100%" align="right" valign="middle" scope="row"><input name="username2" type="text" id="username2" value="username" />
        <input name="password2" type="password" id="password2" value="password" />
        <input type="submit" name="login" id="login" value="Sign in" /></th>
      <th width="67" align="right" valign="middle" scope="row"> <form action="signup.php">
      </form></th>
    </tr>
  </table>
</div>
<table width="900" border="0" cellspacing="5">
  <tr>
    <td width="57" style="font-size: 14px"><a href="index.php">Beranda</a></td>
    <td width="97" style="font-size: 14px"><a href="tentangkami.php">Tentang Kami</a></td>
    <td width="158" style="font-size: 14px"><a href="daftartempatmakan.php">Daftar Tempat Makan</a></td>
    <td width="271" style="font-size: 14px"><a href="kontak.php">Kontak</a></td>
    <td width="222"><label for="search"></label>
    <input name="search" type="text" id="search" value="search" /></td>
  </tr>
</table>
<div align="left"></div>
<div id="conten">
  <table width="200" height="307" border="0" align="left">
    <tr>
      <th align="left" style="font-size: 16px; font-family: Arial;" scope="row"><strong>Cari Berdasarkan Kategori</strong></th>
    </tr>
    <tr>
      <th align="left" style="font-size: 12px; font-family: Arial;" scope="row"><p align="justify">
        <label for="harga">Harga</label>
          <select name="harga" id="harga">
          </select>
        </p>
        <p align="justify">
          <label for="lokasi">Lokasi</label>
          <select name="lokasi" id="lokasi">
          </select>
      </p>
        <p align="justify">
          <label for="jenismakanan">Jenis Makanan</label>
          <select name="jenismakanan" id="jenismakanan">
          </select>
        </p>
        <p align="justify">
          <label for="jenistempatmakanan">Jenis Tempat Makanan</label>
          <select name="jenistempatmakanan" id="jenistempatmakanan">
          </select>
        </p>
        <p align="justify">
          <label for="rating">Rating</label>
          <select name="rating" id="rating">
          </select>
        </p></th>
    </tr>
</table>
<form action="" method="post" name="input">
  <table width="600" border="0" align="center">
    <tr>
      <th align="left" style="font-size: 18px; font-family: Arial;" scope="row"><p>&nbsp;</p>
        <p><em>Sign up</em></p></th>
      <th align="left" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th width="190" height="206" align="left" style="font-size: 16px; font-family: Arial;" scope="row"><p>Nama</p>
        <p>Tempat, Tanggal Lahir</p>
        <p>Email</p>
        <p>Username</p>
        <p>Password</p></th>
      <th width="400" align="left" style="font-size: 14px" scope="row"><p>
        <label for="nama">:</label>
          <input name="nama" type="text" required="required" id="nama" />
        </p>
        <p>
          <label for="ttl">:</label>
          <input name="ttl" type="text" required="required" id="ttl" />
</p>
        <p>
          <label for="email">:</label>
          <input name="email" type="text" required="required" id="email" />
        </p>
        <p>
          <label for="username">:</label>
          <input name="username" type="text" required="required" id="username" />
        </p>
        <p>
          <label for="password">:</label>
          <input name="password" type="text" required="required" id="password" />
        </p></th>
    </tr>
  </table>
  <table width="600" border="0">
    <tr>
      <th height="30" scope="row"><input type="submit" name="submit" id="submit" value="signup" /></th>
    </tr>
  </table></form>
<?php
if (isset($_POST['submit'])) {
	include('connect.php');
 $nama = addslashes (strip_tags ($_POST['nama'])); 
 $ttl = addslashes (strip_tags ($_POST['ttl'])); 
 $email = addslashes (strip_tags ($_POST['email'])); 
 $uname = addslashes (strip_tags ($_POST['username'])); 
 $password = addslashes (strip_tags ($_POST['password'])); 
 
 //insert ke tabel 
 $query ="INSERT INTO `signup`(`nama`, `ttl`, `email`, `username`, `password`) VALUES ('".$nama."','".$ttl."','".$email."','".$uname."','".$password."')"; 
 $sql = mysql_query ($query); 
 if ($sql) { 
 echo "<h2><font color=red>Anda berhasil Sign Up!</font></h2>"; 
 } else { 
 echo "<h2><font color=red>Sign Up Gagal</font></h2>"; 
 } }
?>
</div>
<table width="900" border="0" cellpadding="8" cellspacing="10">
  <tr>
    <td width="254" bgcolor="#99CCCC" style="font-family: Arial">Tambah Makan Populer Bulan Ini</td>
    <td colspan="2" bgcolor="#99CCCC" style="font-family: Arial">Tempat Makan Baru</td>
  </tr>
  <tr>
    <td height="238" bgcolor="#D6D6D6">&nbsp;</td>
    <td width="291" bgcolor="#D6D6D6">&nbsp;</td>
    <td width="299" bgcolor="#D6D6D6">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</center>
</body>
</html>
