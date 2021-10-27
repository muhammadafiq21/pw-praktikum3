<?php
$nama_barang = array("Beras", "Gula", "Tepung terigu", "Sarden Kaleng");
$nomor = array(1, 2, 3, 4);
$berat = array(10, 2, 4, 1);
$stok = array(50, 10, 5, 0);
?>

<!DOCTYPE html>
<html style="background-image: url('w644.jpg');>


<head>
    <link rel="stylesheet" href "praktikum3.css">

    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            color: #342C7A;
        }
        td{
            border-radius:4px;
        }
        td:hover{
            background-color: powderblue;
            transition: .3s;
        }
        th {
            background-color: #12A0CA;
            color: white;
            border-radius:8px; 
        }
        .Table{
            background-color: LightGray;
            border-radius:8px; 
            margin-left: auto; 
            margin-right: auto; 
            margin-top : 15px;
        }
    </style>
    
</head>
<body>

<h1 style="Color:#FFFFFF; text-align:center; margin-top : 200px;"> Kedai Pak Joy</h1>
<h4 style="Color:#FFFFFF; text-align:center; margin-top : 2px;"> Dibeli Guys</h4>

    <table class="Table" border='2' bordercolor= '#000000';>
        <tr>
            <th>No</th>
            <th>Nama Barang </th>
            <th>Berat (kg) </th>
            <th>Berat (g) </th>
            <th>Berat (mg) </th>
            <th>Stok </th>
        </tr>
        <?php for ($i=0; $i < 4; $i++) { ?>
        
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $nama_barang[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] * 1000; ?> </td>
            <td> <?php echo $berat[$i] * 1000000; ?> </td>
                <?php 
                    if ($stok[$i] == 0 ){
                        echo "<td bgcolor='#FF0000'>Habis</td>";
                        }
                    else{
                        echo "<td>$stok[$i]</td>";
                    }?>
        </tr>
        <?php } ?>   


    </table>
</body>
</html> 
