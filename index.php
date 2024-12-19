<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HaHa Clinic</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
        }

        header {
            height: 60vh;
            background-image: url('assets/images/backgroundindex.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        header p {
            font-size: 1.2rem;
            font-weight: 500;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        header .marquee {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 10px;
            font-size: 1rem;
            text-align: center;
        }

        .content-section {
            padding: 3rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card i {
            font-size: 3rem;
            color: #4CAF50;
            margin-bottom: 1rem;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .card a {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            color: white;
            background: #4CAF50;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
        }

        .card a:hover {
            background: #45A049;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            background: #333;
            color: white;
            margin-top: 3rem;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }

            header p {
                font-size: 1rem;
            }

            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>HaHa Clinic</h1>
        <p>Platform Layanan Kesehatan Modern</p>
        <div class="marquee">Pakai Masker - Tetap Jaga Protokol Kesehatan!</div>
    </header>

    <section class="content-section">
        <!-- Card Pasien -->
        <div class="card">
            <i class="fas fa-user-injured"></i>
            <h3>Pasien</h3>
            <p>Login untuk mendapatkan layanan kesehatan terbaik dari HaHa Clinic.</p>
            <a href="loginUser.php">Masuk</a>
        </div>

        <!-- Card Dokter -->
        <div class="card">
            <i class="fas fa-user-md"></i>
            <h3>Dokter</h3>
            <p>Login untuk mulai melayani pasien di HaHa Clinic.</p>
            <a href="login.php">Masuk</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 HaHa Clinic. Semua Hak Dilindungi.</p>
    </footer>
</body>

</html>
