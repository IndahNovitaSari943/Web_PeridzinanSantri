<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$act = $_GET['act'];

if($act == 'input'){
    $NIS = $_POST["NIS"];
    $nama_santri = $_POST["nama_santri"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $asrama = $_POST["asrama"];
    $nama_ayah = $_POST["nama_ayah"];
    $nama_ibu = $_POST["nama_ibu"];

    $query = $db->query("INSERT INTO santri (NIS, nama_santri, tmpt_lahir, tgl_lahir, alamat, asrama, nama_ayah, nama_ibu)
                VALUE ('$NIS', '$nama_santri', '$tmpt_lahir', '$tgl_lahir', '$alamat', '$asrama', '$nama_ayah', '$nama_ibu')");
    if($query){
        echo "<script>
        alert('Data sukses disimpan');
        window.location.href='list_santri.php';
        </script>";
    } else{

        echo "<script>
        alert('Data gagal disimpan');
        window.location.href='form_santri.php';
        </script>";
    }
}
else if($act == 'edit'){
    $NIS_old = $_POST['NIS_old'];
    $NIS = $_POST["NIS"];
    $nama_santri = $_POST["nama_santri"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $asrama = $_POST["asrama"];
    $nama_ayah = $_POST["nama_ayah"];
    $nama_ibu = $_POST["nama_ibu"];

    $query = $db->query("UPDATE santri SET NIS = '$NIS', 
                                        nama_santri = '$nama_santri', 
                                        tmpt_lahir = '$tmpt_lahir', 
                                        tgl_lahir = '$tgl_lahir', 
                                        alamat = '$alamat', 
                                        asrama = '$asrama', 
                                        nama_ayah = '$nama_ayah', 
                                        nama_ibu = '$nama_ibu'
                                WHERE NIS='$NIS_old'");
    if($query){
        echo "<script>
        alert('Data sukses diubah');
        window.location.href='list_santri.php';
        </script>";
    }
    else{

        echo "<script>
        alert('Data gagal diubah');
        window.location.href='list_santri.php';
        </script>";
    }
}
else if($act == 'hapus'){
    $NIS = $_GET['NIS'];
    $query = $db->query("DELETE FROM santri WHERE NIS = '$NIS'");
    if($query){
        echo "<script>
        alert('Data sukses dihapus');
        window.location.href='list_santri.php';
        </script>";
    } else{

        echo "<script>
        alert('Data gagal dihapus');
        window.location.href='list_santri.php';
    </script>";
    }
}
else{
    echo "<script>
    alert('Maaf, parameter Anda tidak valid ');
    window.location.href='list_santri.php';
    </script>";
}
