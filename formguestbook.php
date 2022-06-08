<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Alfa+Slab+One&family=Baloo+Paaji+2&family=Bebas+Neue&family=Black+Han+Sans&family=Bree+Serif&family=Coda+Caption:wght@800&family=Coiny&family=Fredoka+One&family=Josefin+Sans:ital,wght@0,200;1,700&family=Jost:wght@100&family=Monoton&family=Pacifico&family=Palette+Mosaic&family=Passion+One&family=Patrick+Hand&family=Secular+One&family=Unica+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Alfa+Slab+One&family=Baloo+Paaji+2&family=Bebas+Neue&family=Black+Han+Sans&family=Bree+Serif&family=Coda+Caption:wght@800&family=Coiny&family=Fredoka+One&family=Josefin+Sans:ital,wght@0,200;0,500;0,600;1,700&family=Jost:wght@100&family=Monoton&family=Pacifico&family=Palette+Mosaic&family=Passion+One&family=Patrick+Hand&family=Secular+One&family=Unica+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Alfa+Slab+One&family=Baloo+Paaji+2&family=Bebas+Neue&family=Black+Han+Sans&family=Bree+Serif&family=Coda+Caption:wght@800&family=Coiny&family=Fredoka+One&family=Josefin+Sans:ital,wght@0,200;0,500;0,600;1,700&family=Jost:wght@100&family=Monoton&family=Orelega+One&family=Pacifico&family=Palette+Mosaic&family=Passion+One&family=Patrick+Hand&family=Secular+One&family=Unica+One&display=swap" rel="stylesheet">
    <title> Forum Data </title>
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
</head>

<body>
<form method="POST" action="inputguestbook.php"> 
    <table align="center" cellpadding="2" cellspacing="2">
        <h1 id="font1"> Forum Guestbook </h1>
        <tr>
            <td width="130" style="font-size: 20px;"> Posted </td>
            <td> <input id="kolom" type="date" name="posted"> </td>
        </tr>
        <tr>
            <td width="130" style="font-size: 20px;"> Name </td>
            <td> <input id="kolom" type="text" name="name"> </td>
        </tr>
        <tr>
            <td width="130" style="font-size: 20px;"> Email </td>
            <td> <input id="kolom" type="email" name="email"> </td>
        </tr>
        <tr>
            <td width="130" style="font-size: 20px;"> Address </td>
            <td> <input id="kolom" type="text" name="address"> </td>
        </tr>
        <tr>
            <td width="130" style="font-size: 20px;"> City </td>
            <td> <input id="kolom" type="text" name="city"> </td>
        </tr>

        <tr>
            <td width="130" style="font-size: 20px;"> Message </td>
            <td> <input id="kolom" type="text" name="message"> </td>
        </tr>
       
        <tr>
            <td colspan="2" align="center">
                <input id="button" type="submit" name="btnlogin" value="Masukkan">
                <input id="button" type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>
</body>
</html>