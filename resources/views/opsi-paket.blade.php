
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opsi Paket - SoloTechno CBT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>  
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Banner -->
    <section class="paket-banner">
        <div class="banner-content">
            <h1>
                <span class="highlight-kuning">Digitalisasi</span> Ujian Jadi Lebih <br>
                Mudah dengan <span class="highlight-biru">SoloTechno-CBT</span>
            </h1>
            <p>
                Mulai dari paket gratis hingga premium, semua dirancang <br>
                untuk memudahkan proses ujian digital dengan fitur lengkap
            </p>
        </div>
        <div class="banner-image">
            <img src="{{ asset('assets/img/bannerpaket.png') }}" alt="Ilustrasi Ujian Digital">
        </div>
    </section>

    <!-- Opsi Paket -->
    <section class="paket-section">
        <div class="container">
            <h2 class="section-title">Opsi <span class="highlight-biru">Paket</span></h2>
            <p class="section-subtitle">
                Temukan paket yang sesuai dengan kebutuhan Anda dan mulai belajar lebih efektif bersama SoloTechno-CBT
            </p>

            <div class="paket-list">
                <!-- Paket CBT -->
                <div class="paket-card">
                    <div class="paket-header">
                        <h3>CBT</h3>
                        <span class="subjudul">(Computer-Based Test)</span>
                        <p class="harga">Rp7.000 <span>/ siswa / bulan</span></p>
                    </div>
                    <ul class="paket-fitur">
                        <li>Manajemen bank soal yang mudah dan terstruktur</li>
                        <li>Fasilitas bagi siswa untuk mengerjakan ujian secara online</li>
                        <li>Akses materi pembelajaran digital</li>
                        <li>Analisis hasil ujian otomatis dan detail</li>
                        <li>Penjadwalan serta pengawasan ujian yang fleksibel</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20melakukan%20pembelian%20paket%20CBT.%20Mohon%20informasinya%20lebih%20lanjut%20ya." class="btn-pilih"> Pilih Sekarang </a>
                </div>

                <!-- Paket ISMS -->
                <div class="paket-card">
                    <div class="paket-header">
                        <h3>ISMS</h3>
                        <span class="subjudul">(Integrated School Management System)</span>
                        <p class="harga">Rp14.000 <span>/ siswa / bulan</span></p>
                    </div>
                    <ul class="paket-fitur">
                        <li>Pengelolaan kelas dan mata pelajaran</li>
                        <li>Penjadwalan ujian terintegrasi</li>
                        <li>Pendataan siswa, guru, dan karyawan</li>
                        <li>Ikhtisar profil siswa lengkap</li>
                        <li>Pencatatan prestasi akademik maupun non-akademik</li>
                        <li>Pengelolaan kegiatan ekstrakurikuler dan organisasi</li>
                        <li>Fitur aduan serta tata tertib sekolah</li>
                        <li>E-Rapor digital otomatis</li>
                        <li>Penyampaian informasi melalui pengumuman sekolah</li>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20melakukan%20pembelian%20paket%20ISMS.%20Mohon%20informasinya%20lebih%20lanjut%20ya." class="btn-pilih"> Pilih Sekarang </a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-cta fade-in">
        <div class="container">
            <div class="contact-card1">
            <div class="contact-text">
                <h2> Masih ragu memilih <span> paket? </span> </h2>
                <p> Coba dulu Demo Aplikasi SoloTechno-CBT dan rasakan langsung kemudahan fitur-fiturnya! </p>
            </div>
            <div class="contact-btn">
                <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20untuk%20mencoba%20demo%20aplikasi%20SoloTechno%20CBT.%20Mohon%20informasinya%20lebih%20lanjut%20ya." target="_blank" class="btn-primary2"> Demo Aplikasi </a>
            </div>
            </div>
        </div>
    </section>
</body>
@include('layouts.footer')
</html>
