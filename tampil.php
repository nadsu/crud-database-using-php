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
    <h1 id="font1"> DATA GUESTBOOK </h1>
<table align="center" cellpadding="2" cellspacing="2" border="1"> 
    <!-- pembuatan struktur tabel -->
    <tr>
        <th> No </th>
        <th> Posted </th>
        <th> Name </th>
        <th> Email </th>
        <th> Address </th>
        <th> City </th>
        <th> Message </th>
        <th colspan="2">Aksi </th>
    </tr>

    <!-- membuat tampilan tabel dari data database -->
    <?php
    include "conn.php"; 
    $no=1; 
    $ambildata = mysqli_query($conn, "select * from guestbook");
    while ($tampil = mysqli_fetch_array($ambildata)){ 
        echo "
        <tr>
            <td> $no </td>
            <td> $tampil[posted]</td>
            <td> $tampil[name]</td>
            <td> $tampil[email]</td>
            <td> $tampil[address]</td>
            <td> $tampil[city]</td>
            <td> $tampil[message]</td>
            <td> <a href='?kode=$tampil[posted]'> Hapus </a> </td>
            <td> <a href='formdelete.php?kode=$tampil[posted]'> Ubah </td>
        </tr>";

        $no++;


    }
    ?>
</table>

<!-- membuat query delete data -->
<?php
if(isset($_GET['kode'])) {
    mysqli_query($conn, "delete from guestbook where posted='$_GET[kode]'");
    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='tampil.php'>";
}

?>