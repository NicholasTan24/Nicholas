<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah anggota</title>
</head>
<body>
    <?php
        include "koneksi.php";
        $get_id = $_GET["kirim_npm"];
        $perintah = "SELECT * FROM tbl_pendaftaran where npm='$get_id'";
        $eksekusi = mysqli_query($conn, $perintah);
        while ($data = mysqli_fetch_array($eksekusi)){       
    ?>
        <form action="proses-ubah.php" method="POST">
            <table>
            <input type="hidden" name="old_npm" value=<?= $get_id ?> required/>
                <tr>
                    <td>NPM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="var_npm" value=<?= $data["NPM"] ?> required/>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="var_nama" value=<?= $data["Nama"] ?> required/>
                    </td>
                </tr>
                <tr>
                    <td>UKM</td>
                    <td>:</td>
                    <td>
                        <select name="var_ukm">
                            <option value=<?= $data["UKM"] ?>><?= $data["UKM"] ?></option>
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
    <?php
         
        }
    ?>
</body>
</html>