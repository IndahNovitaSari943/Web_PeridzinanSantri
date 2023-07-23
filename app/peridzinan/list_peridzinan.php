<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peridzinan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>

<body>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                Data Peridzinan
            </div>
            <div class="card-body">
                <a class="btn btn-primary btn-sm" href="form_peridzinan.php">
                <i class="fa-solid fa-circle-plus"></i> Tambah Data
                </a>
                <?php
                $query = $db->query("SELECT * FROM peridzinan");
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kd_petugas</th>
                            <th>NIS</th>
                            <th>Lama</th>
                            <th>Alasan</th>
                            <th>Tujuan</th>
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                            while($row = $query->fetch_array()){
                                ?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $row['Tanggal'];?></td>
                                        <td><?php echo $row['Kd_petugas'];?></td>
                                        <td><?php echo $row['NIS'];?></td>
                                        <td><?php echo $row['Lama'];?></td>
                                        <td><?php echo $row['Alasan'];?></td>
                                        <td><?php echo $row['Tujuan'];?></td>
                                        <td><a class="btn btn-outline-success btn-sm" href="form_peridzinan.php?act=edit&Tanggal=<?php echo $row['Tanggal'];?> "><i class="fa-regular fa-pen-to-square"></i></a> 
                                            <a class="btn btn-outline-danger btn-sm" href="controller_peridzinan.php?act=hapus&Tanggal=<?php echo $row['Tanggal'];?>"><i class="fa-solid fa-trash-can"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
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
</html>