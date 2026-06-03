<!DOCTYPE html>
<html lang="en">

<head>
    <title>Christine Rotua Deborah Hutabarat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Tambahan Bootstrap Icons untuk icon direct link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #fdf2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        .page-title {
            color: #d1618a;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .page-subtitle {
            color: #d1618a;
            font-weight: 600;
            margin-bottom: 40px;
            opacity: 0.85;
        }

        /* Base styling untuk card */
        .custom-card {
            border: 1px solid #ead0d9;
            border-radius: 16px;
            background-color: #ffffff;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(234, 208, 217, 0.15);
            display: flex;
            flex-direction: column;
            padding: 24px;
        }
        .custom-card:hover {
            transform: translateY(-4px);
            border-color: #ea93a9;
            box-shadow: 0 8px 25px rgba(209, 97, 138, 0.1);
        }
        .card-body {
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Menjaga judul di kiri, icon di kanan */
            width: 100%;
        }
        .card-title {
            font-weight: 600;
            color: #4a4a4a;
            margin-bottom: 0;
        }

        /* Bulatan Icon untuk Direct Link */
        .btn-icon-link {
            background-color: #ea93a9;
            color: white;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.2s ease;
            text-decoration: none;
        }
        .btn-icon-link:hover {
            background-color: #e57c96;
            color: white;
            transform: scale(1.05);
        }

        /* LAYOUT GRID - Semua item berukuran rata */
        .card-flow-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            align-items: stretch;
        }

        /* Pengaturan grup tombol khusus untuk card News & News 1 */
        .news-btn-group {
            display: flex;
            gap: 10px;
        }
        .news-btn-group a {
            font-size: 0.85rem;
            padding: 4px 12px;
            border-radius: 20px;
            background-color: #ea93a9;
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .news-btn-group a:hover {
            background-color: #e57c96;
        }

        /* Background Pattern Halus */
        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image:
                radial-gradient(circle at 15% 15%, rgba(209, 97, 138, 0.02) 0%, transparent 10%),
                radial-gradient(circle at 85% 85%, rgba(209, 97, 138, 0.02) 0%, transparent 10%);
            pointer-events: none;
            z-index: -1;
        }
    </style>
</head>

<body class="py-5">
    <div class="container">

        <!-- JUDUL TANPA STRIP -->
        <div class="text-center">
            <h2 class="page-title">Kumpulan Tugas Christine Rotua D H</h2>
            <h4 class="page-subtitle">NRP 5026241028</h4>
        </div>

        <div class="card-flow-container">

            <!-- Index Card (Sekarang ukurannya sama rata dengan yang lain) -->
            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Index</h5>
                        <a href="{{ url('/idx') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <!-- Tugas-Tugas Lainnya -->
            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Contoh</h5>
                        <a href="{{ url('/example') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Intro</h5>
                        <a href="{{ url('/int') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Linktree</h5>
                        <a href="{{ url('/linktr') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">News & News 1</h5>
                        <div class="news-btn-group">
                            <a href="{{ url('/berita1') }}">News</a>
                            <a href="{{ url('/berita2') }}">News 1</a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Pertemuan 4</h5>
                        <a href="{{ url('/pert4') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Pertemuan 5</h5>
                        <a href="{{ url('/pert5') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Responsive</h5>
                        <a href="{{ url('/respons') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Template</h5>
                        <a href="{{ url('/temp') }}" class="btn-icon-link" title="Buka Halaman"><i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
