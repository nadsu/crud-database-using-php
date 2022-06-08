<?php
$servername = "localhost";//mendefinisikan variable servername
$username = "root";//mendefinisikan variable username
$password = "";//mendefinisikan variable password
$dbname = "myweb";//mendefinisikan variable dbname

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname) or die(mysqli_connect_error());
?>