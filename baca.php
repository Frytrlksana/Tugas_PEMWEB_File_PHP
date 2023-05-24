<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Mobil</h3>
    <table>
        <tr>
            <th>Merk Mobil</th>
            <th>Nama Mobil</th>
            <th>Type Mobil</th>
            <th>Type Mesin</th>
            <th>Tahun Rilis</th>
            <th>CC Mobil</th>
            <th>HP Mobil</th>
            <th>Bahan Bakar</th>
            <th>Upload File</th>
        </tr>
        <?php
        $file_name = "mobildata.txt";
        $read = file($file_name, FILE_IGNORE_NEW_LINES);
        foreach ($read as $mobil) {
            $data_mobil = explode("-", $mobil);
            echo "<tr>";
            echo "<td>" . (isset($data_mobil[0]) ? htmlspecialchars($data_mobil[0]) : "") . "</td>";
            echo "<td>" . (isset($data_mobil[1]) ? htmlspecialchars($data_mobil[1]) : "") . "</td>";
            echo "<td>" . (isset($data_mobil[2]) ? htmlspecialchars($data_mobil[2]) : "") . "</td>";
            echo "<td>" . (isset($data_mobil[3]) ? htmlspecialchars($data_mobil[3]) : "") . "</td>";
            echo "<td>" . (isset($data_mobil[4]) ? htmlspecialchars($data_mobil[4]) : "") . "</td>";
            echo "<td>" . (isset($data_mobil[5]) ? htmlspecialchars($data_mobil[5]) : "") . "</td>";
            echo "<td>" . (isset($data_mobil[6]) ? htmlspecialchars($data_mobil[6]) : "") . "</td>";
            echo "<td>" . (isset($data_mobil[7]) ? htmlspecialchars($data_mobil[7]) : "") . "</td>";
            echo "<td><a href=\"uploads/" . (isset($data_mobil[8]) ? htmlspecialchars($data_mobil[8]) : "") . "\">Gambar</a></td>";
            
            echo "</tr>";
        }
        
        ?>
    </table>

    <div class="button-container">
        <a href="form.php" class="button">Kembali ke Form</a>
    </div>
</body>
</html>
