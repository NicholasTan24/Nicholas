<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Daftar</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
    //Disini kita tangkap 3 variabel yang dikirim
    //dari halaman index.php
    $tangkap_npm = $_POST["var_npm"] ?? null;
    $tangkap_nama = $_POST["var_nama"] ?? null;
    $tangkap_ukm = $_POST["var_ukm"] ?? null;
    ?>
    <div class="container-fluid">
        <div class="mt-1 p-3 bg-primary text-white rounded">
            <h1 style="text-align: center">Informasi Pendaftaran</h1>
        </div>
        <div class="mt-2 card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="var_npm" class="form-label"><strong>Nomor Pengenal Mahasiswa (NPM):</strong></label>
                    <?= $tangkap_npm?? "";?>
                </div>
                <div class="mb-3">
                    <label for="var_nama" class="form-label"><strong>Nama Lengkap Mahasiswa:</strong></label>
                    <?= $tangkap_nama?? "";?>
                </div>
                <div class="mb-3">
                    <label for="var_npm" class="form-label"><strong>Unit Kegiatan Mahasiswa (UKM) yang Diikuti:</strong></label>
                    <?= $tangkap_ukm ?? "";?>
                </div>
            </div>
            <div class="card-footer">
                <form action="index.php" method="Post">
                <a href="../ukm/index.php" type="Selesai" class="btn btn-success">Selesai</a>
            </form>
            </div>
        
</body>
</html>
