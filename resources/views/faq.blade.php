<!DOCTYPE html>
<html lang="id">
  <head>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoatas.png') }}">
    @include('layouts.navbar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>

    <!-- Import Font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Import CSS utama -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>

  <body>
    <!-- ==================== FAQ SECTION ==================== -->
    <div class="faq-section">
      <!-- Judul FAQ -->
      <h1><span>Frequently Asked</span> Questions</h1>

      <!-- Kumpulan kartu pertanyaan FAQ -->
      <div class="faq-cards">

        <!-- FAQ Card 1 -->
        <div class="card">
          <img src="{{ asset('assets/img/kawung3.png') }}" alt="kawung" class="bg-pattern">
          <h3>Apa itu CBT dan ISMS?</h3>
          <p>Penjelasan tentang CBT (Computer Based Test) dan ISMS (Integrated School Management System).</p>
          <button class="detail-btn" data-faq="faq1">Detail</button>
        </div>

        <!-- FAQ Card 2 -->
        <div class="card">
          <img src="{{ asset('assets/img/kawung3.png') }}" alt="kawung" class="bg-pattern">
          <h3>Bagaimana cara mendapatkan fitur coba gratis?</h3>
          <p>Informasi cara mencoba layanan gratis melalui WhatsApp admin.</p>
          <button class="detail-btn" data-faq="faq2">Detail</button>
        </div>

        <!-- FAQ Card 3 -->
        <div class="card">
          <img src="{{ asset('assets/img/kawung3.png') }}" alt="kawung" class="bg-pattern">
          <h3>Bagaimana cara membeli paket CBT dan ISMS?</h3>
          <p>Langkah pembelian paket CBT & ISMS melalui WhatsApp admin.</p>
          <button class="detail-btn" data-faq="faq3">Detail</button>
        </div>

        <!-- FAQ Card 4 -->
        <div class="card">
          <img src="{{ asset('assets/img/kawung3.png') }}" alt="kawung" class="bg-pattern">
          <h3>Bagaimana cara menghubungi tim support jika ada kendala?</h3>
          <p>Informasi kontak tim support melalui halaman Hubungi Kami.</p>
          <button class="detail-btn" data-faq="faq4">Detail</button>
        </div>
      </div>

      <!-- Tempat untuk menampilkan jawaban detail FAQ -->
      <div class="faq-answer" id="faq-answer">
        <div class="faq-content" id="faq-content"></div>
      </div> 
    </div>
    
    <!-- ==================== CONTACT BANNER SECTION ==================== -->
      <section class="contact-cta fade-in">
        <div class="container">
          <div class="contact-card">
            <!-- Teks promosi hubungi tim -->
            <div class="contact-text">
              <h2> Punya pertanyaan lain seputar <br /> <span>SoloTechno–CBT?</span> </h2>
              <p> Klik tombol di samping untuk langsung terhubung dengan tim kami </p>
            </div>

            <!-- Tombol Hubungi WhatsApp -->
            <div class="contact-btn">
              <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20bertanya%20mengenai%20aplikasi%20SoloTechno%20CBT.%20Mohon%20dibantu%20ya." target="_blank" class="btn-primary3"> Hubungi Kami </a>
            </div>
          </div>
        </div>
      </section>

    <!-- ==================== FOOTER ==================== -->
    @include('layouts.footer')

    <!-- File JavaScript untuk interaksi FAQ -->
    <script src="{{ asset('assets/js/faq.js') }}"></script>
  </body>
</html>