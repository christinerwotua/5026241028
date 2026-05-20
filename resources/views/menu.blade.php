<!DOCTYPE html>
<html lang="en">

<head>
    <title>Christine Rotua Deborah Hutabarat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .custom-card {
            border: 1px solid #e3e6ec;
            border-radius: 12px;
            transition: all 0.3s ease;
            background-color: #ffffff;
        }
        .custom-card:hover {
            transform: translateY(-5px);
            border-color: #4e73df;
            box-shadow: 0 10px 20px rgba(78, 115, 223, 0.08);
        }
        .page-title {
            letter-spacing: 1px;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        .page-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #4e73df;
            border-radius: 2px;
        }
    </style>
</head>

<body class="bg-light py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="font-weight-bold text-dark page-title">Kumpulan Tugas Christine Rotua</h2>
        </div>

        <div class="row">

            {{-- Menggunakan Card sebagai Tampilan --}}
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Index</h5>
                        <p class="card-text text-muted small flex-grow-1">Tampilan utama dari christinerwotua.github.io</p>
                        <a href="{{ url('/idx') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a> {{-- Penamaan 'idx' harus konsisten dengan Route dan Controller, begitu pula untuk halaman lainnya --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Contoh</h5>
                        {{-- <p class="card-text text-muted small flex-grow-1">Tugas dari pertemuan 3</p> --}}
                        <a href="{{ url('/example') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Intro</h5>
                        <a href="{{ url('/int') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Linktree</h5>
                        {{-- <p class="card-text text-muted small flex-grow-1">Tugas dari pertemuan 5</p> --}}
                        <a href="{{ url('/linktr') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">News & News 1</h5>
                        {{-- <p class="card-text text-muted small flex-grow-1">File pembelajaran dari pertemuan 2</p> --}}
                        <div class="row no-gutters mt-3">
                            <div class="col-6 pr-1"><a href="{{ url('/berita1') }}" class="btn btn-primary btn-block shadow-sm" style="border-radius: 8px; font-size: 0.85rem;">News</a></div>
                            <div class="col-6 pl-1"><a href="{{ url('/berita2') }}" class="btn btn-primary btn-block shadow-sm" style="border-radius: 8px; font-size: 0.85rem;">News 1</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Pertemuan 4</h5>
                        <a href="{{ url('/pert4') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Pertemuan 5</h5>
                        <a href="{{ url('/pert5') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Responsive</h5>
                        <a href="{{ url('/respons') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 custom-card">
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title font-weight-bold text-dark">Template</h5>
                        <a href="{{ url('/temp') }}" class="btn btn-primary btn-block mt-3 shadow-sm" style="border-radius: 8px;">Buka Halaman</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
