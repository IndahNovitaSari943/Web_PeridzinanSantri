<?php
require "config/config_global.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Peridzinan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <br>
        <!--NAVBAR-->
        <nav class="navbar bg-primary navbar navbar-expand-lg " data-bs-theme="dark">
        <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Web Peridzinan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo base_url() . "index.php?page=santri"; ?>">Santri</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo base_url() . "index.php?page=peridzinan"; ?>">Peridzinan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo base_url() . "index.php?page=petugas"; ?>">Petugas</a>
                    </li>
                </ul>
                </div>
            </div>
        <!--End Navbar Content-->
        </nav>
        <!--END NAVBAR-->

        <!--CONTENT-->
        <?php include "content.php"; ?>
        <!--END CONTENT-->
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