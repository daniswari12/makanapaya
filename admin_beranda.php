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
    <td width="100" style="font-size: 14px"><a href="admin_akun_user.php">Akun User</a></td>
    <td width="128" style="font-size: 14px"><a href="admin_tempatmakan.php">Tempat Makan</a></td>
    <td width="128" style="font-size: 14px">Testimoni</td>
    <td width="222" style="font-size: 14px">Setting</td>
  </tr>
</table>
<div align="left"></div>
<div id="conten">
  <table width="100%" height="30" border="0" align="center">
    <tr>
      <th width="800" height="26" align="left" bgcolor="#99CCCC" style="font-family: Arial; font-size: 14px;" scope="row">Halaman Admin</th>
      </tr>
    </table>
  <table width="100%" height="155">
    <tr>
      <th valign="bottom" scope="row">
      <form action="" method="post" name="input">
  <input type="submit" name="button" id="button" value="Log out" />
  </form>
<?php
if(isset($_POST['button'])){
session_start();
unset ($_SESSION);
session_destroy();
echo "<h1>Berhasil logout</h1>";
header('location:admin.php');
}
?>
      &nbsp;</th>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
</center>
</body>
</html>
