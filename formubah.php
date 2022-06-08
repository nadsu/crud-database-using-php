<link href="https://fonts.googleapis.com/css2?family=Alata&family=Alfa+Slab+One&family=Baloo+Paaji+2&family=Bebas+Neue&family=Black+Han+Sans&family=Bree+Serif&family=Coda+Caption:wght@800&family=Coiny&family=Fredoka+One&family=Josefin+Sans:ital,wght@0,200;1,700&family=Jost:wght@100&family=Monoton&family=Pacifico&family=Palette+Mosaic&family=Passion+One&family=Patrick+Hand&family=Secular+One&family=Unica+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Alfa+Slab+One&family=Baloo+Paaji+2&family=Bebas+Neue&family=Black+Han+Sans&family=Bree+Serif&family=Coda+Caption:wght@800&family=Coiny&family=Fredoka+One&family=Josefin+Sans:ital,wght@0,200;0,500;0,600;1,700&family=Jost:wght@100&family=Monoton&family=Pacifico&family=Palette+Mosaic&family=Passion+One&family=Patrick+Hand&family=Secular+One&family=Unica+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Alfa+Slab+One&family=Baloo+Paaji+2&family=Bebas+Neue&family=Black+Han+Sans&family=Bree+Serif&family=Coda+Caption:wght@800&family=Coiny&family=Fredoka+One&family=Josefin+Sans:ital,wght@0,200;0,500;0,600;1,700&family=Jost:wght@100&family=Monoton&family=Orelega+One&family=Pacifico&family=Palette+Mosaic&family=Passion+One&family=Patrick+Hand&family=Secular+One&family=Unica+One&display=swap" rel="stylesheet">
<style type="text/css"> 
        BODY {
            background-color: black;
            color: #563d2d;
            font-family: 'Josefin Sans', sans-serif;
        }
        #font1 {
            font-family: 'Orelega One', cursive;
            color: white;
            font-size: 60px;
            text-align: center;
            padding-top: 150px;

        }

        table {
            width: 600px;
            border-radius: 30px;
            align-items: center;
            margin-top: 30px;
            padding-left: 90px;
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: #eeebe3;
            border: 3px solid #5c4033;
        }
        #kolom {
            background-color: #e1cbb1;
            width: 260px;
            height: 40px;
            text-align: center;
            font-family: 'Josefin Sans', sans-serif;
            font-size: 16px;
            border: 2px solid #a88877;
        }
        #button {
            margin-top: 5px;
            margin-left: 3px;
            border-radius: 7px;
            background-color: #a88877;
            width: 100px;
            height: 30px;
            text-align: center;
            font-family: 'Josefin Sans', sans-serif;
            font-size: 16px;

        }
    </style>
    <h1 id="font1"> UBAH DATA </h1>
<!-- membuat form untuk input data baru -->
<?php
include "conn.php";
$sql=mysqli_query($conn, "select * from guestbook where posted='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

<form action="" method="post">
<table align="center" cellpadding="2" cellspacing="2">
    <tr>
        <td width="120" style="font-size: 20px;"> Posted </td>
        <td> <input type="date" name="posted" value="<?php echo $data['posted']; ?>"> </td>
    </tr>
    <tr> 
        <td style="font-size: 20px;"> Name </td>
        <td> <input type="text" name="name" value="<?php echo $data['name'];?>"> </td>
    </tr>
    <tr> 
        <td style="font-size: 20px;"> Email </td>
        <td> <input type="email" name="email" value="<?php echo $data['email'];?>"> </td>
    </tr>
    <tr> 
        <td style="font-size: 20px;"> Address </td>
        <td> <input type="text" name="address" value="<?php echo $data['address'];?>"> </td>
    </tr>
    <tr> 
        <td style="font-size: 20px;"> City </td>
        <td> <input type="text" name="city" value="<?php echo $data['city'];?>"> </td>
    </tr>
    <tr> 
        <td style="font-size: 20px;"> Message </td>
        <td> <input type="text" name="message" value="<?php echo $data['message'];?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td> <input id="button" type="submit" name="proses" value="Update"> <td>
    </tr>
</table>
</form>

<!-- query update data sesuai dengan data baru yang -->
<?php
include "conn.php";

if(isset($_POST['proses'])){
    mysqli_query($conn, "update guestbook set
    name = '$_POST[name]',
    email = '$_POST[email]',
    address = '$_POST[address]',
    city = '$_POST[city]',
    message = '$_POST[message]'
    where posted = '$_GET[kode]'");

    echo "Data telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='tampil.php'>";

}

?>