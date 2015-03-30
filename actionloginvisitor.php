<?php

include('connect.php');

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

if (empty($user) && empty($pass)) {
    //username dan password kosong
    header('location:index.php?error=1');
    break;
} else if (empty($user)) {
    //hanya username yang kosong
    header('location:index.php?error=2');
    break;
} else if (empty($pass)) {
    //password yang kosong
    //redirect ke halaman index
    header('location:index.php?error=3');
    break;
}

$sql="Select * from signup where username='" . $user . "' and password='". $pass ."'";
$result = mysql_query($sql, $conn);
$num=mysql_num_rows($result);

if ($num == 1) {
	$_SESSION['login'] = $user;
    //username dan password sudah terdaftar di database
    header('location:index.php');
} else {
	echo '<h3>Username dan Password belum terdaftar!</h3>';
    //username ataupun password tidak terdaftar di database
    //header('location:admin.php?error=4');
}

?>
