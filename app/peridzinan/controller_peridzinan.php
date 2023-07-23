<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$act = $_GET['act'];

if($act == 'input'){
    $tanggal = $_POST["tanggal"];
    $kd_petugas = $_POST["kd_petugas"];
    $NIS = $_POST["NIS"];
    $lama = $_POST["lama"];
    $alasan = $_POST["alasan"];
    $tujuan = $_POST["tujuan"];

    $query = $db->query("INSERT INTO peridzinan (tanggal, kd_petugas, NIS, lama, alasan, tujuan)
                VALUE ('$tanggal', '$kd_petugas', '$NIS', '$lama', '$alasan', '$tujuan')");
    if($query){
        echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_peridzinan.php';
        </script>";
    } else{

        echo "<script>
        alert('Data gagal disimpan');
        window.location.href='form_peridzinan.php';
        </script>";
    }
}
else if($act == 'edit'){
    $tanggal_old = $_POST['tanggal_old'];
    $kd_petugas = $_POST["kd_petugas"];
    $NIS = $_POST["NIS"];
    $lama = $_POST["lama"];
    $alasan = $_POST["alasan"];
    $tujuan = $_POST["tujuan"];

    $query = $db->query("UPDATE peridzinan SET tanggal = '$tanggal', 
                                        kd_petugas = '$kd_petugas', 
                                        NIS = '$NIS', 
                                        lama = '$lama', 
                                        alasan = '$alasan', 
                                        tujuan = '$tujuan', 
                                WHERE tanggal='$tanggal_old'");
    if($query){
        echo "<script>
        alert('Data sukses diubah');
        window.location.href='list_peridzinan.php';
        </script>";
    }
    else{

        echo "<script>
        alert('Data gagal diubah');
        window.location.href='list_peridzinan.php';
        </script>";
    }
}
else if($act == 'hapus'){
    $tanggal = $_GET['tanggal'];
    $query = $db->query("DELETE FROM peridzinan WHERE tanggal = '$tanggal'");
    if($query){
        echo "<script>
        alert('Data sukses dihapus');
        window.location.href='list_peridzinan.php';
        </script>";
    } else{

        echo "<script>
        alert('Data gagal dihapus');
        window.location.href='list_peridzinan.php';
    </script>";
    }
}
else{
    echo "<script>
    alert('Maaf, parameter Anda tidak valid ');
    window.location.href='list_peridzinan.php';
    </script>";
}
