<?php
include "conn.php";
if(isset($_POST['btnlogin'])){
        mysqli_query($conn, "insert into guestbook set
        posted = '$_POST[posted]',
        name = '$_POST[name]',
        email = '$_POST[email]',
        address = '$_POST[address]',
        city = '$_POST[city]',
        message = '$_POST[message]'
        ");
}

mysqli_close($conn);
header("location:formguestbook.php");

?>