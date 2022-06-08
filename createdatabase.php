<?php
$servername = "localhost";//mendefinisikan variable servername
$username = "root";//mendefinisikan variable username
$password = "";//mendefinisikan variable password

//membuat koneksi
$conn = new mysqli($servername, $username, $password);
//periksa koneksi
if (!$conn) { //apabila koneksi tidak tersambung, maka
    die("Connection failed: ".mysqli_connection_error()); //memberikan output error koneksi
}
//query CREATE DATABASE untuk membuat database baru yaitu database db_pegawai
$sql = "CREATE DATABASE myweb"; 
if (mysqli_query($conn, $sql)) { //apabila database berhasil connect dan query berhasil dijalanlan maka
    echo "Database created successfully"; //menghasilkan output berhasil
}else {//apabila tidak gagal
    echo "Error creating database: ".mysqli_error($conn); //memberikan output error creating table
}
mysqli_close($conn);//menutup koneksi
?>