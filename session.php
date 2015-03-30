<?php
session_start();
if (isset($_SESSION['login'])) { 
echo "<h1>Halo ". $_SESSION['login'] ."</h1>";
} else {
header('location:warninglogin.php');
}
?>
