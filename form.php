<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h3>Input Data Mobil</h3>
    <form action="simpan.php" method="get">
        <table>
            <tr>
                <td>Merk Mobil</td>
                <td><input type="text" name="MerkMobil"></td>
            </tr>
            <tr>
                <td>Nama Mobil</td>
                <td><input type="text" name="NamaMobil"></td>
            </tr>
            <tr>
                <td>Type Mobil</td>
                <td><input type="text" name="TypeMobil"></td>
            </tr>
            <tr>
                <td>Type Mesin</td>
                <td><input type="text" name="TypeMesin"></td>
            </tr>
            <tr>
                <td>Tahun Rilis</td>
                <td><input type="text" name="TahunRilis"></td>
            </tr>
            <tr>
                <td>CC Mobil</td>
                <td><input type="text" name="CCMobil"></td>
            </tr>
            <tr>
                <td>HP Mobil</td>
                <td><input type="text" name="HPMobil"></td>
            </tr>
            <tr>
                <td>Bahan Bakar</td> 
                <td><input type="text" name="BahanBakar"></td>
            </tr>
            <tr>
                <td>Upload File</td> 
                <td><input type="file" name="Upload"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tulis ke FILE"></td>
            </tr>
        </table>
    </form>
</body>

</html>