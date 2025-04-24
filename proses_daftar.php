<?php
    //Disini kita tangkap 3 variabel yang dikirim
    //dari halaman index.php
    $tangkap_npm = $_POST["var_npm"];
    $tangkap_nama = $_POST["var_nama"];
    $tangkap_ukm = $_POST["var_ukm"];

    //tampilin yang udah ditangkap pake echo atau print
    echo $tangkap_npm;
    echo "<br/>";
    echo $tangkap_nama;
    echo "<br/>";
    echo $tangkap_ukm;
    echo "<br/>";
    ?>