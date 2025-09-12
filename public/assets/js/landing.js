document.addEventListener("DOMContentLoaded", () => {
  // === Pembelajaran Digital === //
  const digitalObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        obs.unobserve(entry.target); // animasi sekali aja
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll(".digital-header h2, .digital-subtitle, .digital-card")
    .forEach(el => digitalObserver.observe(el));


  // === Banner Utama === //
  const bannerObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        obs.unobserve(entry.target); // animasi sekali aja
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll(".fade-up, .decoration, .decoration-right")
    .forEach(el => bannerObserver.observe(el));
});
