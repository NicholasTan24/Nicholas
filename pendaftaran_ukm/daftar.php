<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran UKM</title>
</head>
<body>
    <h1>Data Pendaftaran UKM</h1>
    <p><a href="index.php">Kembali</a></p>

    <form action="proses-daftar.php" method="POST">
        <table>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input type="text" name="var_npm" required/>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="var_nama" required/>
                </td>
            </tr>
            <tr>
                <td>UKM</td>
                <td>:</td>
                <td>
                    <select name="var_ukm">
                        <option value="UKM Programming">UKM Programming</option>
                        <option value="UKM Mapala">UKM Mapala</option>
                        <option value="UKM Futsal">UKM Futsal</option>
                        <option value="UKM Basket">UKM Basket</option>
                        <option value="UKM Band">UKM Band</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <br/>
                    <input type="reset" value="Batal"/>
                    <input type="submit" value="Simpan"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>