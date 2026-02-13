<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BosonValue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
            scroll-behavior: smooth;
        }

        .hero {
            padding: 100px 0;
        }

        .hero h1 {
            font-weight: 700;
        }

        .btn-custom {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            color: white;
            padding: 10px 25px;
            border-radius: 10px;
            border: none;
        }

        .btn-custom:hover {
            opacity: 0.9;
            color: white;
        }

        #toggleBtn {
            color: #000;
            cursor: pointer;
            font-weight: 600;
        }

        #toggleBtn:hover {
            color: #000;
        }

        .feature-card {
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 30px;
            transition: 0.4s;
            background: white;
        }

        .feature-card:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            transform: translateY(-8px);
        }

        #fiturSection {
            border-top: 1px solid #e5e7eb;
        }
        .feature-icon {
        width: 48px;
        height: 48px;
        color: #2563eb;
        margin-bottom: 15px;
        }
    </style>
</head>
<body>

{{-- Navbar --}}
<nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold">BosonValue</span>
        <a href="{{ route('filament.admin.auth.login') }}" class="text-decoration-none">Masuk</a>
    </div>
</nav>

{{-- Hero Section --}}
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-6">
                <h1>Kami Mengelola Sistem BosonValue Untuk Monitoring & Kontrol Reward</h1>
                <p class="mt-3 text-muted">
                    Halaman admin BOSONVALUE berfungsi sebagai pusat pengelolaan sistem.
                    Admin dapat memantau data pengguna, memverifikasi aktivitas,
                    serta memastikan proses perolehan reward berjalan dengan aman dan terstruktur.
                </p>

                <a href="{{ route('filament.admin.auth.login') }}" class="btn btn-custom mt-3">
                    Masuk Dashboard
                </a>

                <p class="mt-5">
                    <a href="#fiturSection"
                       id="toggleBtn"
                       data-bs-toggle="collapse"
                       class="text-decoration-none">
                       Pelajari Lebih Lanjut ˅
                    </a>
                </p>
            </div>

            <div class="col-md-6 text-center">
                <img src="{{ asset('images/landing_page.png') }}" 
                     style="max-height:420px;">
            </div>

        </div>
    </div>
</section>

{{-- Fitur --}}
<section class="py-5 bg-light collapse" id="fiturSection">
    <div class="container text-center">
        <h3 class="fw-bold mb-3">Fitur Utama Admin BosonValue</h3>
        <p class="text-muted mb-5">
            Kelola seluruh proses sistem BosonValue secara terpusat dan efisien.
        </p>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="feature-card">
        <!-- Heroicon: Shield Check -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
            viewBox="0 0 24 24" stroke-width="1.5" 
            stroke="currentColor" class="feature-icon">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75l2.25 2.25L15 9.75m6 2.25
                c0 5.25-3.75 8.25-9 10.5C6.75 20.25 3 17.25 3 12
                V6.75l9-3 9 3V12z" />
        </svg>

        <h5 class="fw-bold">Verifikasi & Validasi</h5>
        <p class="text-muted">
            Melakukan pengecekan dan validasi data untuk memastikan
            pengguna memenuhi syarat dalam menjadi content creator.
        </p>
    </div>

            </div>

            <div class="col-md-6 mb-4">
                <div class="feature-card">
                <!-- Heroicon: Chart Bar -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="feature-icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3v18h18M9 17V9m4 8V5m4 12v-6" />
                </svg>

                <h5 class="fw-bold">Monitoring Reward</h5>
                <p class="text-muted">
                    Memantau perolehan dan distribusi reward agar berjalan
                    sesuai dengan ketentuan sistem.
                </p>
            </div>
            </div>
        </div>
    </div>
</section>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const toggleBtn = document.getElementById('toggleBtn');
    const fiturSection = document.getElementById('fiturSection');

    fiturSection.addEventListener('shown.bs.collapse', function () {
        toggleBtn.innerHTML = "Pelajari Lebih Lanjut ˄";
        fiturSection.scrollIntoView({ behavior: 'smooth' });
    });

    fiturSection.addEventListener('hidden.bs.collapse', function () {
        toggleBtn.innerHTML = "Pelajari Lebih Lanjut ˅";
    });
</script>

</body>
</html>
