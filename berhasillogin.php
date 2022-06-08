<style>
    BODY {
        background-color: #eeebe3;
        color: #563d2d;
        font-family: 'Josefin Sans', sans-serif;
        text-align:center;
        padding-top:100px;
    }
</style>
<?php
include "conn.php";
date_default_timezone_set("Asia/Jakarta"); //untuk mengubah time default agar sesuai dengan domisili
$ambildata = mysqli_query($conn, "select username from user");
$tampil = mysqli_fetch_array($ambildata);
    echo "Selamat datang ".$tampil['username']." pada hari, ".date("l, d F Y")."<br>";

?>