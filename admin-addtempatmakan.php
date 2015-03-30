<?php
session_start();
if (isset($_SESSION['login'])) { 
echo "<h2>Halo ". $_SESSION['login']."</h2>";
} else {
header('location:warninglogin.php');
}
?>
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
  Halaman Backpanel Admin
    <br />
  </label>
</div>
<table width="900" border="0" cellspacing="5">
  <tr>
    <td width="80" style="font-size: 14px">Beranda</td>
    <td width="100" style="font-size: 14px">Akun Klien</td>
    <td width="100" style="font-size: 14px">Akun User</td>
    <td width="128" style="font-size: 14px">Tempat Makan</td>
    <td width="128" style="font-size: 14px">Testimoni</td>
    <td width="222" style="font-size: 14px">Setting</td>
  </tr>
</table>
<div align="left"></div>
<div id="conten">
  <table width="100%" height="30" border="0" align="center">
    <tr>
      <th width="800" height="26" align="left" bgcolor="#99CCCC" style="font-family: Arial; font-size: 14px;" scope="row">Tempat Makan</th>
      </tr>
    </table>
    
  <table width="100%" height="155">
    <tr>
      <th valign="top" scope="row"><table width="100%" border="0">
        <tr>
          <th align="left" style="font-size: 18px; font-family: Arial;" scope="row">Tambah Tempat Makan</th>
        </tr>
      </table>
      
        <table width="100%" border="0">
        <form action="" method="post" name="input">
        <tr>
          <th width="63%" style="font-family: Arial" scope="row">Nama Restoran</th>
          <td width="37%"><label for="nm_restoran">:</label>
            <input type="text" name="nm_restoran" id="nm_restoran" /></td>
        </tr>
        <tr>
          <th style="font-family: Arial" scope="row">Alamat Restoran</th>
          <td><label for="almt_restoran">:</label>
            <input type="text" name="almt_restoran" id="almt_restoran" /></td>
        </tr>
        <tr>
          <th style="font-family: Arial" scope="row">Nomor Telepon Restoran</th>
          <td><label for="tlp_restoran">:</label>
            <input type="text" name="tlp_restoran" id="tlp_restoran" /></td>
        </tr>
        <tr>
          <th style="font-family: Arial" scope="row">Email Restoran</th>
          <td><label for="email_restoran">:</label>
            <input type="text" name="email_restoran" id="email_restoran" /></td>
        </tr>
        <tr>
          <th style="font-family: Arial" scope="row">Deskripsi Restoran</th>
          <td><label for="dk_restoran">:</label>
            <input type="text" name="dk_restoran" id="dk_restoran" /></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><p>&nbsp;
            </p>
            <p>
              <input type="submit" name="simpan" id="simpan" value="Simpan" />
              </p> </th>
        </tr></form>
          <?php
if (isset($_POST['simpan'])) {
	include('connect.php');
 $nama = addslashes (strip_tags ($_POST['nm_restoran'])); 
 $alamat = addslashes (strip_tags ($_POST['almt_restoran'])); 
 $tlp = addslashes (strip_tags ($_POST['tlp_restoran'])); 
 $email = addslashes (strip_tags ($_POST['email_restoran'])); 
 $deskripsi = addslashes (strip_tags ($_POST['dk_restoran'])); 
 
 //insert ke tabel 
 $query ="INSERT INTO `tempatmakan`(`nama`, `alamat`, `tlp`, `email`, `deskripsi`) VALUES ('".$nama."','".$alamat."','".$tlp."','".$email."','".$deskripsi."')"; 
 $sql = mysql_query ($query); 
 if ($sql) { 
 echo "<h2><font color=red>Anda berhasil menambah tempat makan!</font></h2>"; 
 } else { 
 echo "<h2><font color=red>Tempat makan belum berhasil ditambah</font></h2>"; 
 } }
?>

      </table>
        <table width="100%" border="0">
          <tr>
            <th width="63%" scope="row"><p>&nbsp;</p>
              <p style="font-family: Arial">Gambar restoran</p></th>
            <th width="37%" align="left" scope="row"><p>&nbsp;</p>
              <p>
                <input type="file" name="fileField" id="fileField" />
              </p></th>
          </tr>
          <tr>
            <th colspan="2" scope="row"><p>&nbsp;
              </p>
              <p>
                <input type="submit" name="upload" id="upload" value="Upload" />
              </p></th>
            </tr>
        </table>
        <p>&nbsp;</p></th>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
</center>
</body>
</html>
