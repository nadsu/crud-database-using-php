<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
//periksa koneksi
if (!$conn) {
    die("Connection failed: ".mysqli_connection_error());
}
$sql = "CREATE TABLE guestbook (
        id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        posted DATE,
        name VARCHAR(50),
        email VARCHAR(75),
        address VARCHAR (75),
        city VARCHAR (75),
        message LONGBLOB 
        )";
if (mysqli_query($conn, $sql)) {
    echo "Tabel created successfully";
}else {
    echo "Error creating database: ".mysqli_error($conn);
}
mysqli_close($conn);
?>