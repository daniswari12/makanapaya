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
      <th width="100%" align="right" valign="middle" scope="row"><form action="actionloginvisitor.php" method="post">
      <input name="username" type="text" id="username2" value="username" />
        <input name="password" type="password" id="password" value="password" />
        <input type="submit" name="login" id="login" value="Sign in" /></th>
      <th width="67" align="right" valign="middle" scope="row"> <form action="signup.php">
        <input name="signup" type="submit" id="signup" formaction="signup.php" value="Sign up" />
      </form></th>
    </tr>
  </table>
</div>
<table width="900" border="0" cellspacing="5">
  <tr>
    <td width="57" style="font-size: 14px"><a href="index.php">Beranda</a></td>
    <td width="97" style="font-size: 14px">Tentang Kami</td>
    <td width="158" style="font-size: 14px"><a href="daftartempatmakan.php">Daftar Tempat Makan</a></td>
    <td width="271" style="font-size: 14px"><a href="kontak.php">Kontak</a></td>
    <td width="239"><label for="search"></label>
      <input name="search" type="text" id="search" value="search" /></td>
  </tr>
</table>
<div align="left"></div>
<div id="conten">
  <table width="200" height="307" border="0" align="left">
    <tr>
      <th align="left" scope="row"><strong style="font-family: Arial; font-size: 16px;">Cari Berdasarkan Kategori</strong></th>
    </tr>
    <tr>
      <th align="left" scope="row"><p align="justify">
        <label for="harga"><span style="font-family: Arial; font-size: 12px;">Harga</span></label>
        <span style="font-family: Arial">
          <select name="harga" id="harga">
          </select>
        </span></p>
        <p align="justify"> <span style="font-family: Arial; font-size: 12px;">
          <label for="lokasi">Lokasi</label>
          <select name="lokasi" id="lokasi">
          </select>
        </span></p>
        <p align="justify"> <span style="font-family: Arial; font-size: 12px;">
          <label for="jenismakanan">Jenis Makanan</label>
          <select name="jenismakanan" id="jenismakanan">
          </select>
        </span></p>
        <p align="justify"> <span style="font-family: Arial; font-size: 12px;">
          <label for="jenistempatmakanan">Jenis Tempat Makanan</label>
          <select name="jenistempatmakanan" id="jenistempatmakanan">
          </select>
        </span></p>
        <p align="justify"> <span style="font-family: Arial; font-size: 12px;">
          <label for="rating">Rating</label>
          <select name="rating" id="rating">
          </select>
        </span><span style="font-size: 12px"> </span></p></th>
    </tr>
    </table>
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
