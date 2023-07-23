<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$act = $_GET['act'];

if($act == 'input'){
    $kd_petugas = $_POST["kd_petugas"];
    $nama_petugas = $_POST["nama_petugas"];

    $query = $db->query("INSERT INTO petugas (kd_petugas, nama_petugas)
                VALUE ('$kd_petugas', '$nama_petugas')");
    if($query){
        echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_petugas.php';
        </script>";
    } else{

        echo "<script>
        alert('Data gagal disimpan');
        window.location.href='form_petugas.php';
        </script>";
    }
}
else if($act == 'edit'){
    $kd_petugas_old = $_POST['kd_petugas_old'];
    $kd_petugas = $_POST["kd_petugas"];
    $NIS = $_POST["nama_petugas"];

    $query = $db->query("UPDATE petugas SET kd_petugas = '$kd_petugas', 
                                        nama_petugas = '$nama_petugas', 

                                WHERE kd_petugas='$kd_petugas_old'");
    if($query){
        echo "<script>
        alert('Data sukses diubah');
        window.location.href='list_petugas.php';
        </script>";
    }
    else{

        echo "<script>
        alert('Data gagal diubah');
        window.location.href='list_petugas.php';
        </script>";
    }
}
else if($act == 'hapus'){
    $kd_petugas = $_GET['kd_petugas'];
    $query = $db->query("DELETE FROM petugas WHERE kd_petugas = '$kd_petugas'");
    if($query){
        echo "<script>
        alert('Data sukses dihapus');
        window.location.href='list_petugas.php';
        </script>";
    } else{

        echo "<script>
        alert('Data gagal dihapus');
        window.location.href='list_petugas.php';
    </script>";
    }
}
else{
    echo "<script>
    alert('Maaf, parameter Anda tidak valid ');
    window.location.href='list_petugas.php';
    </script>";
}
