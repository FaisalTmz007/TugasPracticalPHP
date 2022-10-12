<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th {
            border: 1px black solid;
            height: 35px;
            text-align: left;
            padding: 0 10px;
        }
        td{
            height: 35px;
            padding: 0 10px;
            text-align: left;
            border: 1px black solid;

        }
    </style>
</head>
<body>

    <h1 style="padding: 0 180px; font-weight: 500;">Praktikum 07 - PHP Practical</h1>

    <table align="center">
        <tr>
            <th style="width: 50px;">No.</th>
            <th style="width: 250px;">Tanggal</th>
            <th style="width: 500px;">Keterangan</th>
            <th style="width: 250px; text-align: right;">Jumlah  </th>
        </tr>
            <?php

            for ($i=0; $i < 999; $i++) {
                echo "<tr>"; 
                echo "<td>",$i+1,"</td>";
                $date=date("d-F-Y",gmmktime(0,0,0,1,$i+1,2022));
                echo "<td>$date</td>";
                $date=date("Y-m-d",gmmktime(0,0,0,1,$i+1,2022));
                echo "<td>TRN-$date-",str_pad($i+1, 3, '0', STR_PAD_LEFT),"</td>";
                echo "<td>Rp. ", $i+1,".000</td>";
                echo "</tr>";
            }

            ?>
    </table>

    <footer style="text-align: center;">
        <p>{212410102030} - {Muhamad Faisal Fachrul Ulum}</p>
    </footer>
    
</body>
</html>