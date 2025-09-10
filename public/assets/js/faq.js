const faqAnswer = document.getElementById("faq-answer");
const faqContent = document.getElementById("faq-content");

const faqData = {
  faq1: {
    title: "Apa itu CBT dan ISMS?",
    content: `
      <p><b>CBT (Computer Based Test)</b> adalah sistem ujian digital yang dirancang untuk memudahkan sekolah dalam mengelola ujian. Dengan CBT, sekolah dapat menyusun dan mengatur bank soal secara terstruktur, memberikan akses ujian online kepada siswa, serta menyediakan materi pembelajaran digital. Hasil ujian juga akan dianalisis secara otomatis dan detail, ditambah dengan fitur penjadwalan dan pengawasan ujian yang fleksibel sehingga pelaksanaan ujian menjadi lebih praktis dan efisien.</p>
      <p><b>ISMS (Integrated School Management System)</b> adalah sistem manajemen sekolah yang terintegrasi untuk mempermudah pengelolaan akademik maupun non-akademik. Melalui ISMS, sekolah dapat mengatur kelas, mata pelajaran, serta jadwal ujian secara terpusat. Selain itu, tersedia fitur pendataan siswa, guru, dan karyawan, ikhtisar profil siswa, pencatatan prestasi akademik maupun non-akademik, hingga pengelolaan kegiatan ekstrakurikuler dan organisasi. ISMS juga dilengkapi dengan fitur aduan, tata tertib sekolah, e-rapor digital otomatis, serta penyampaian informasi melalui pengumuman sekolah sehingga pengelolaan sekolah menjadi lebih tertib, transparan, dan efisien.</p>
    `
  },
  faq2: {
    title: "Bagaimana cara mendapatkan fitur coba gratis?",
    content: `
      <p>Anda dapat mencoba layanan kami secara gratis dengan menekan tombol <b>Coba Gratis</b> di halaman beranda. Tombol ini akan menghubungkan Anda langsung ke WhatsApp admin untuk mendapatkan akun uji coba.</p>
    `
  },
  faq3: {
    title: "Bagaimana cara membeli paket CBT dan ISMS?",
    content: `
      <p>Untuk melakukan pembelian, cukup tekan tombol <b>Pilih Sekarang</b> pada halaman opsi paket. Setelah itu, Anda akan diarahkan ke WhatsApp admin untuk proses pembuatan akun dan pembayaran.</p>
    `
  },
  faq4: {
    title: "Bagaimana cara menghubungi tim support jika ada kendala?",
    content: `
      <p>Jika Anda mengalami kendala, silakan tekan tombol <b>Hubungi Kami</b> yang tersedia di halaman Hubungi Kami. Anda akan langsung terhubung dengan tim support melalui WhatsApp admin.</p>
    `
  }
};

let activeFaq = null; // simpan faq yang sedang aktif

// Fungsi custom smooth scroll
function smoothScrollTo(targetY, duration = 600) {
  const startY = window.pageYOffset;
  const diff = targetY - startY;
  let start;

  function step(timestamp) {
    if (!start) start = timestamp;
    const time = timestamp - start;
    const percent = Math.min(time / duration, 1);

    window.scrollTo(0, startY + diff * percent);

    if (time < duration) {
      requestAnimationFrame(step);
    }
  }

  requestAnimationFrame(step);
}

document.querySelectorAll(".detail-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    const faqKey = btn.getAttribute("data-faq");

    // jika klik lagi tombol yg sama → tutup
    if (activeFaq === faqKey && faqAnswer.classList.contains("active")) {
      faqAnswer.classList.remove("active");
      faqContent.innerHTML = "";
      activeFaq = null;
      return;
    }

    // tampilkan konten baru
    const data = faqData[faqKey];
    faqContent.innerHTML = `<h2>${data.title}</h2>${data.content}`;
    faqAnswer.classList.add("active");

    // tunggu render, lalu scroll halus ke posisi yang pas
    setTimeout(() => {
      const yOffset = -100; // atur sesuai tinggi navbar/header
      const y = faqAnswer.getBoundingClientRect().top + window.pageYOffset + yOffset;
      smoothScrollTo(y, 700); // durasi 700ms
    }, 0);

    // simpan yang aktif
    activeFaq = faqKey;
  });
});
