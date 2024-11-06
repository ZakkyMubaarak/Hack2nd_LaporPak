<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporpak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="\assets\css\style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
 <!-- Favicon Icon -->
<link rel="icon" href="Logo/android-chrome-512x512.png" type="image/png"> <!-- Pastikan tipe sesuai dengan format gambar -->
<link rel="shortcut icon" href="img/laporpak_title.png" type="image/x-icon">

</head>
<body>

  <!-- Navbar -->
  @include('includes.landing.navbar')
    


  {{-- TEAM SECTION --}}
  

  <section id="tim" class="team-section py-5">
    <h1 class="text-center mb-5 team-heading mt-5">Temui Tim Kami</h1><br>
    <h2 class="team-heading">Tim kreatif yang cerdas dan bersemangat</h2><br>
    <div class="team-wrapper">
        <!-- Team Card 1 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\hafidz.jpg" alt="Team Member 1" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">Muhammad Hafidz</h4>
                <p class="team-position">Frontedn Development</p>
                <p class="team-description">sebagai ketua bertanggung jawab besar mengelola seluruh proses pengembangan.</p>
                <a href="https://www.linkedin.com/in/johndoe" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 2 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\samsu_Hidayattulah.jpg" alt="Team Member 2" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">Muhammad Samsu H</h4>
                <p class="team-position">Frontend Development</p>
                <p class="team-description">Merancang & mengimplementasikan desain visual serta mengoptimalkan pengalaman pengguna.</p>
                <a href="https://www.linkedin.com/in/janesmith" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 3 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\Zakky.png" alt="Team Member 3" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">ZAKKY MUBAARAK</h4>
                <p class="team-position">Backend Development</p>
                <p class="team-description">Bertanggung jawab untuk mengembangkan dan memelihara sistem yang berjalan.</p>
                <a href="https://www.linkedin.com/in/michaelbrown" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 4 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\Devanada.jpg" alt="Team Member 4" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">DEVA NADA NABILA</h4>
                <p class="team-position">UI/UX </p>
                <p class="team-description">Memvisualisasikan desain user interface platfrom Laporpak.com secara prototype</p>
                <a href="https://www.linkedin.com/in/emilywhite" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 5 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\michael.jpg" alt="Team Member 5" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">Michael Wutama</h4>
                <p class="team-position">UI/UX </p>
                <p class="team-description">Merancang alur kerja Laporpak.com untuk memastikan pengalaman efisien bagi pengguna.</p>
                <a href="https://www.linkedin.com/in/chrisevans" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 6 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\Dimas_wahyu.jpg" alt="Team Member 6" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">Dimas Wahyu Septian</h4>
                <p class="team-position">UI/UX</p>
                <p class="team-description">Membuat Wireframe dan Prototype, menggambarkan struktur dasar aplikasi dan interaksi pengguna.</p>
                <a href="https://www.linkedin.com/in/annalee" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 7 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\Shafa.jpeg" alt="Team Member 7" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">Shafa Putri Sasmito</h4>
                <p class="team-position">Digital Marketing</p>
                <p class="team-description">Bertanggung jawab dengan Copywriting untuk mengoptimalkan SEO Laporpak.com.</p>
                <a href="https://www.linkedin.com/in/davidclark" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 8 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\Ahmad.PNG" alt="Team Member 8" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">AHMAD RIZQI MUBAROK </h4>
                <p class="team-position">Digital Marketing</p>
                <p class="team-description">Menganalisis pasar audiens target serta menyusun deck proposal</p>
                <a href="https://www.linkedin.com/in/laurawilson" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
  
        <!-- Team Card 9 -->
        <div class="team-card">
            <div class="profile-picture">
                <img src="img\profil_team\Jesika_Yohanna.jpg" alt="Team Member 9" class="rounded-profile-img">
            </div>
            <div class="team-info">
                <h4 class="team-name">JESIKA YOHANNA SIMORANGKIR</h4>
                <p class="team-position">Digital Marketing</p>
                <p class="team-description">Memegang management tools dan mengkoordinasikan project.</p>
                <a href="https://www.linkedin.com/in/stevemiller" target="_blank" class="linkedin-btn">LinkedIn</a>
            </div>
        </div>
    </div>
  </section>

  {{-- end team section --}}

<!-- Footer Section -->
<footer class="footer-section py-4">
    <div class="container">
      <div class="footer-content d-flex justify-content-between align-items-start">
        <!-- Logo dan Alamat -->
        <div class="footer-logo-address">
          <img src="img/laporpak_title.png" alt="Logo" class="me-2" style="height: 100px;">
          <p class="footer-address">Jl Keceriaan No. 7, RT 1, RW 2, Desa Tertawa Bahagia, Kecamatan Ceria, Kota Senyum Sejahtera, Kabupaten Gembira, Provinsi Suka Hati, Indonesia. </p>
          <p class="footer-email">Surel: <a href="mailto:Laporpak@gmail.com">Laporpak@gmail.com</a></p>
        </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom d-flex justify-content-between align-items-center mt-4">
        <div class="footer-terms">
          <a href="#">Ketentuan Penggunaan</a> | <a href="#">Kebijakan Privasi</a>
        </div>
        <div class="footer-copyright">
          <p>Hak cipta © 2024 LaporPak. Seluruh hak cipta dilindungi undang-undang</p>
        </div>
        <div class="footer-language-social">
          <a href="#" class="footer-language">Bahasa Indonesia</a>
          <a href="#" class="footer-instagram">LaporPak</a>
        </div>
      </div>
    </div>
  </footer>
  
<script>
  window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-gradient-blue"); // Terapkan latar belakang gradien
    } else {
        navbar.classList.remove("bg-gradient-blue");
        navbar.classList.add("bg-transparent");
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
