<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$act = isset($_GET['act']) ? $_GET['act'] : false;
$nomor = isset($_GET['NIS']) ? $_GET['NIS'] : false;

if($act == 'edit'){
    $url = "controller_santri.php?act=edit";
    if($nomor){
        $query = $db->query("SELECT * FROM santri WHERE NIS = '$nomor'");   
        $row = $query->fetch_array();
    }
    else{
        echo "<script>
        alert('Parameter NIS santri tidak valid');
        window.location.href=''list_santri.php;
        </script>";
    }
}
else {
    $url = "controller_santri.php?act=input";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                Input Data Santri
            </div>
            <div class="card-body">
                <form action="<?php echo $url; ?>" method="post">
                <input type="hidden" name="NIS_old" id="NIS_old" value="<?php isset($row) ? $row['NIS'] : ''; ?>">
                    <div class="mb-3">
                        <label for="NIS">NIS</label>
                        <input type="text" class="form-control" name="NIS" id="NIS" value="<?php echo isset($row) ? $row['NIS'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_santri">Nama Santri</label>
                        <input type="text" class="form-control" name="nama_santri" id="nama_santri" value="<?php echo isset($row) ? $row['Nama_santri'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tmpt_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" value="<?php echo isset($row) ? $row['Tmpt_lahir'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo isset($row) ? $row['Tgl_lahir'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo isset($row) ? $row['Alamat'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="asrama">Asrama</label>
                        <input type="text" class="form-control" name="asrama" id="asrama" value="<?php echo isset($row) ? $row['Asrama'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo isset($row) ? $row['Nama_ayah'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?php echo isset($row) ? $row['Nama_ibu'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <a class="btn btn-danger btn-sm float-start" href="list_santri.php">
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