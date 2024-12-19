<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }

        .banner-section {
            background-color: #007bff;
            color: white;
            padding: 50px 0;
            text-align: center;
            border-radius: 8px;
        }

        .banner-section h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .banner-section p {
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        .list-section {
            padding: 30px;
        }

        .list-section h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #007bff;
        }

        .service-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .service-list li {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 200px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .service-list li:hover {
            transform: translateY(-5px);
        }

        .service-list .icon {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .service-text {
            font-size: 1rem;
            color: #343a40;
        }
    </style>
</head>

<body>
    <section class="banner-section">
        <h1>HaHa Clinic</h1>
        <p>Selamat Datang di Aplikasi Layanan Kesehatan</p>
    </section>

    <section class="list-section">
        <div class="list-container">
            <h2>Layanan Kami</h2>
            <ul class="service-list">
                <li>
                    <i class="icon fas fa-stethoscope"></i>
                    <span class="service-text">Layanan Medis Umum</span>
                </li>
                <li>
                    <i class="icon fas fa-user-md"></i>
                    <span class="service-text">Pemeriksaan Spesialis</span>
                </li>
                <li>
                    <i class="icon fas fa-hospital"></i>
                    <span class="service-text">Fasilitas Kesehatan Modern</span>
                </li>
                <li>
                    <i class="icon fas fa-comments"></i>
                    <span class="service-text">Konsultasi Kesehatan</span>
                </li>
                <li>
                    <i class="icon fas fa-heartbeat"></i>
                    <span class="service-text">Program Kesehatan Preventif</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- Link to Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
