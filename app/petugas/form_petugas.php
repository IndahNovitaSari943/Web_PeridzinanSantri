<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$act = isset($_GET['act']) ? $_GET['act'] : false;
$nomor = isset($_GET['kd_petugas']) ? $_GET['kd_petugas'] : false;

if($act == 'edit'){
    $url = "controller_petugas.php?act=edit";
    if($nomor){
        $query = $db->query("SELECT * FROM petugas WHERE kd_petugas = '$nomor'");   
        $row = $query->fetch_array();
    }
    else{
        echo "<script>
        alert('Parameter kd_petugas tidak valid');
        window.location.href=''list_petugas.php;
        </script>";
    }
}
else {
    $url = "controller_petugas.php?act=input";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                Input Data Petugas
            </div>
            <div class="card-body">
                <form action="<?php echo $url; ?>" method="post">
                <input type="hidden" name="kd_petugas_old" id="kd_petugas_old" value="<?php isset($row) ? $row['kd_petugas'] : ''; ?>">
                    <div class="mb-3">
                        <label for="kd_petugas">Kode Petugas</label>
                        <input type="text" class="form-control" name="kd_petugas" id="kd_petugas" value="<?php echo isset($row) ? $row['kd_petugas'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" value="<?php echo isset($row) ? $row['nama_petugas'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <a class="btn btn-danger btn-sm float-start" href="list_petugas.php">
                            <i class="fa-solid fa-chevron-left"></i>
                                Kembali</a>
                        <button class="btn btn-primary btn-sm float-end" type="submit">
                            <i class="fa-regular fa-floppy-disk"></i>
                                Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </br>
    </div>
    


    <!--js bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

     <!--font awesome-->
     <script src="../../assets/fontawesome/js/all.min.js"></script>
</body>
</html>