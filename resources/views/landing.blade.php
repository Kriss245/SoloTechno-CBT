<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoloTechno CBT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoatas.png') }}">
</head>
<body>
    @include('layouts.navbar')
 <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1><span class="highlight">SoloTechno</span> <span class="accent">CBT</span></h1>
            <p>
                Sistem tes berbasis komputer yang memfasilitasi kegiatan evaluasi belajar, 
                dari pembuatan soal, ujian serentak, pengawasan ujian, hingga analisis hasil ujian di akhir secara online.
            </p>
            <div class="buttons">
                <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20untuk%20mencoba%20demo%20aplikasi%20SoloTechno%20CBT.%20Mohon%20informasinya%20lebih%20lanjut%20ya." class="btn-primary">Coba Gratis</a>
                <a href="{{ url('/opsi-paket') }}" class="btn-secondary">Opsi Paket</a>
            </div>    
        </div>
        <div class="hero-image">
            <img src="{{ asset('assets/img/ilustrasi.png') }}" alt="Ilustrasi Manusia di Komputer">
        </div>
    </section>
        
     <!-- Section Pembelajaran Digital -->
    <section class="digital-section">
        <div class="digital-header">
            <h2>
                <span class="highlight-kuning">Pembelajaran</span> 
                <span class="highlight-kuning">Digital</span> 
                Lebih Praktis dan Berkualitas
            </h2>
            <p class="digital-subtitle">
                Platform SoloTechno-CBT telah dirancang khusus untuk memudahkan Sekolah, Guru, dan Siswa dalam 
                mengelola proses belajar mengajar secara efektif dan terintegrasi
            </p>
        </div>

        <div class="digital-cards">
            <!-- Card Sekolah -->
            <div class="digital-card">
                <img src="{{ asset('assets/img/school.png') }}" alt="Ikon Sekolah">
                <h3>Aplikasi Sekolah</h3>
                <p>
                    Mempermudah sekolah dalam mengelola keseluruhan proses ujian berbasis komputer, 
                    mulai dari penjadwalan, monitoring, hingga rekap hasil.
                </p>
            </div>

            <!-- Card Guru -->
            <div class="digital-card">
                <img src="{{ asset('assets/img/teacher.png') }}" alt="Ikon Guru">
                <h3>Aplikasi Guru</h3>
                <p>
                    Membantu guru membuat soal, mengatur kelas ujian, hingga menganalisis hasil 
                    dengan cepat dan akurat.
                </p>
            </div>

            <!-- Card Siswa -->
            <div class="digital-card">
                <img src="{{ asset('assets/img/student.png') }}" alt="Ikon Siswa">
                <h3>Aplikasi Siswa</h3>
                <p>
                    Memberikan pengalaman ujian yang lebih mudah, transparan, dan nyaman melalui 
                    perangkat digital yang terhubung dengan internet.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Keunggulan -->
    <section class="keunggulan-section">
        <div class="keunggulan-header">
            <h2>
                <span class="highlight-kuning">Keunggulan</span> 
                <span class="highlight-biru">SoloTechno–CBT</span>
            </h2>
            <p class="keunggulan-subtitle">
                Rasakan masa depan penilaian dengan solusi CBT yang lebih cerdas, lebih cepat, dan lebih andal
            </p>
        </div>

        <!-- Keunggulan Item 1 -->
        <div class="keunggulan-item">
            <div class="keunggulan-image">
                <img src="{{ asset('assets/img/gif1.gif') }}" alt="Keunggulan 1">
            </div>
            <div class="keunggulan-text">
                <h3 class="highlight-biru">Bantu Siswa Lebih Jujur</h3>
                <p>
                    Tidak perlu khawatir soal kecurangan siswa! Dengan Fitur Penalti Waktu, sistem mampu mendeteksi aktivitas tidak wajar saat ujian berlangsung. Siswa yang terindikasi curang akan otomatis dikenakan pengurangan waktu pengerjaan, sehingga mengurangi potensi kecurangan sekaligus menumbuhkan kejujuran.
                </p>
            </div>
        </div>

        <!-- Keunggulan Item 2 -->
        <div class="keunggulan-item item-left-text">
            <div class="keunggulan-text">
                <h3 class="highlight-biru">Hasil Ujian Lengkap & Analisis Otomatis</h3>
                <p>
                    Analisis hasil asesmen kini lebih praktis. Fitur Analisis Butir Soal memudahkan guru mengevaluasi kualitas soal yang diberikan, meliputi tingkat kesulitan, daya pembeda, kelayakan soal, hingga efektivitas pilihan jawaban. Semua hasil analisis dapat diunduh langsung dalam format Microsoft Excel.
                </p>
            </div>
            <div class="keunggulan-image">
                <img src="{{ asset('assets/img/gif2.gif') }}" alt="Keunggulan 2">
            </div>
        </div>

        <!-- Keunggulan Item 3 -->
        <div class="keunggulan-item">
            <div class="keunggulan-image">
                <img src="{{ asset('assets/img/gif3.gif') }}" alt="Keunggulan 3">
            </div>
            <div class="keunggulan-text">
                <h3 class="highlight-biru">Variasi Soal & Tipe Jawaban</h3>
                <p>
                    SoloTechno-CBT mendukung berbagai bentuk soal seperti Pilihan Ganda, Esai, Uraian, hingga Benar-Salah, serta terus dikembangkan sesuai kurikulum merdeka. Guru juga bisa menambahkan gambar, audio, video, atau media pembelajaran lain untuk mendukung penugasan maupun ujian.
                </p>
            </div>
        </div>

        <!-- Keunggulan Item 4 -->
        <div class="keunggulan-item item-left-text">
            <div class="keunggulan-text">
                <h3 class="highlight-biru">Bank Soal Tersimpan Otomatis</h3>
                <p>
                    Guru bebas membuat dan menyimpan soal tanpa batas melalui Bank Soal SoloTechno-CBT. Soal-soal tersebut bisa digunakan kembali kapan saja, baik hanya untuk guru pembuat soal maupun dibagikan dengan guru lain di sekolah yang sama.
                </p>
            </div>
            <div class="keunggulan-image">
                <img src="{{ asset('assets/img/gif4.gif') }}" alt="Keunggulan 4">
            </div>
        </div>

        <!-- Keunggulan Item 5 -->
        <div class="keunggulan-item">
            <div class="keunggulan-image">
                <img src="{{ asset('assets/img/gif5.gif') }}" alt="Keunggulan 5">
            </div>
            <div class="keunggulan-text">
                <h3 class="highlight-biru">Dilengkapi Learning Management System </h3>
                <p>
                    LMS SoloTechno-CBT mempermudah pengelolaan pembelajaran, mulai dari membagikan materi dalam berbagai format (teks, dokumen, audio, video) hingga mengatur bank materi yang terstruktur dan mudah diakses.
                </p>
            </div>
        </div>

        <!-- Keunggulan Item 6 -->
        <div class="keunggulan-item item-left-text">
            <div class="keunggulan-text">
                <h3 class="highlight-biru">Dilengkapi School Management System</h3>
                <p>
                    SMS SoloTechno-CBT menghadirkan fitur manajemen sekolah yang komprehensif, meliputi pengaturan kelas & mata pelajaran, penjadwalan ujian, data siswa, guru, dan staf, ikhtisar murid, pencatatan prestasi, ekskul, organisasi, tata tertib & aduan, e-rapor, serta pengumuman sekolah.
                </p>
            </div>
            <div class="keunggulan-image">
                <img src="{{ asset('assets/img/gif6.gif') }}" alt="Keunggulan 6">
            </div>
        </div>
    </section>

    <!-- Popup Overlay untuk GIF -->
    <div id="gifPopup" class="gif-popup">
        <span class="close-popup">&times;</span>
        <img class="gif-popup-content" id="popupImg" src="" alt="Popup GIF">
    </div>

    @include('layouts.banner1')
    @include('layouts.footer')
<script src="{{ asset('assets/js/gif-popup.js') }}"></script>
<script src="{{ asset('assets/js/landing.js') }}"></script>
</body>
</html>
