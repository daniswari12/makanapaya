<?php

include('connect.php');

session_start();

$user = $_POST['ausername'];
$pass = $_POST['apassword'];

if (empty($user) && empty($pass)) {
    //username dan password kosong
    header('location:admin.php?error=1');
    break;
} else if (empty($user)) {
    //hanya username yang kosong
    header('location:admin.php?error=2');
    break;
} else if (empty($pass)) {
    //password yang kosong
    //redirect ke halaman index
    header('location:admin.php?error=3');
    break;
}

$sql="Select * from admin where username='" . $user . "' and password='". $pass ."'";
$result = mysql_query($sql, $conn);
$num=mysql_num_rows($result);

if ($num == 1) {
	$_SESSION['login'] = $user;
    //username dan password sudah terdaftar di database
    header('location:notifikasi.php');
} else {
	echo '<h3>Username dan Password belum terdaftar!</h3>';
    //username ataupun password tidak terdaftar di database
    //header('location:admin.php?error=4');
}

?>
