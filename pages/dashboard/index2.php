<?php
    require 'config/koneksi.php';
    $id_poli = $_SESSION['id_poli'];

    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result = mysqli_query($mysqli,$query_poli);

    if ($result) {
        // Ambil hasil query
        $row = mysqli_fetch_assoc($result);

        // Tampilkan nama poli
        $nama_poli = $row['nama_poli'];
    } else {
        // Handle error jika query gagal
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style umum untuk teks putih */
        .text-white {
            font-weight: 500;
        }

        h1.text-white {
            font-size: 2.2rem;
            font-family: 'Arial', sans-serif;
        }

        h4.text-white {
            font-size: 1.6rem;
            font-family: 'Arial', sans-serif;
        }

        .custom-header {
            background-color: #0056b3;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }

        .custom-box {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .custom-footer {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="custom-header">
        <h1>Selamat Datang <b>Dokter <?php echo $username ?></b></h1>
        <h4>Anda berada di <?php echo $nama_poli; ?></h4>
    </div>

    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <!-- Info Boxes -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="custom-box bg-info text-white">
                        <h3 class="text-white">10</h3>
                        <p>Pasien Hari Ini</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="custom-box bg-success text-white">
                        <h3 class="text-white">5</h3>
                        <p>Jadwal Praktik</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="custom-box bg-warning text-white">
                        <h3 class="text-white">15</h3>
                        <p>Pasien Tertunda</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="custom-box bg-danger text-white">
                        <h3 class="text-white">2</h3>
                        <p>Kasus Darurat</p>
                    </div>
                </div>
            </div>

            <!-- Additional Content -->
            <div class="custom-footer">
                <p>Selalu jaga kesehatan Anda dan tetap patuhi protokol kesehatan.</p>
            </div>
        </div>
    </section>

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
