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
    
<!-- Hero Section with Video Background -->
<section class="hero-section d-flex align-items-center text-center text-md-start">
    <!-- Video Background -->
    <video autoplay muted loop class="video-background">
      <source src="\img\video\Jakarta Cinematic -.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  
    <!-- Overlay -->
    <div class="overlay"></div>
  
<!-- Hero Content -->
<div class="container hero-content">
  <div class="row">
    <div class="col-md-8">
      <h1 class="display-4 fw-bold">
        Satu Platform untuk Kebutuhan Masyarakat
      </h1>
      <p class="lead">Mulai dari jalan rusak, sampah menumpuk, hingga fasilitas publik yang tidak berfungsi dengan baik.</p>
      <div class="d-flex gap-2">
        <a href="{{ url('login')}}" class="btn btn-custom-1">Mari Laporkan!</a>
      </div>
    </div>
  </div>
</div>
</section>


<!-- Persona Section -->
<section class="persona-section">
    <div class="container">
      <div class="persona-header">
        <h2 class="display-5 fw-bold">Laporkan Apapun Permasalahanmu</h2>
        <h4>Seperti Sedikit contoh kejadian dibawah ini</h4>
      </div>
  
      <!-- Tabs for Persona Types -->
      <div class="persona-tabs">
        <span class="persona-tab active" onclick="showPersona('Banjir')">Banjir</span>
        <span class="persona-tab" onclick="showPersona('Jalan rusak')">Jalan Rusak</span>
        <span class="persona-tab" onclick="showPersona('Kebakaran')">Kebakaran</span>
        <span class="persona-tab" onclick="showPersona('Pohon Tumbang')">Pohon Tumbang</span>
        <span class="persona-tab" onclick="showPersona('Lampumerah')">Lampu Merah Rusak</span>
      </div>
  
      <!-- Persona Content -->
      <div class="persona-content" id="Banjir">
        <img src="img/banjir.jpg" alt="banjir">
        <div class="persona-info">
          <h1>Banjir</h1>
          <p> fenomena alam yang terjadi ketika air menggenangi area yang biasanya kering, 
              biasanya disebabkan oleh curah hujan yang tinggi, meluapnya sungai, atau naiknya permukaan laut.</p>
          <ul>
            <li><strong> Kerusakan Infrastruktur:</strong> Jalan, jembatan, dan bangunan bisa hancur.</li>
            <li><strong> Kerugian Ekonomi:</strong>  Sektor pertanian dan bisnis sering terkena dampak.</li>
            <li><strong> Penyakit:</strong>  Genangan air bisa menjadi tempat berkembang biaknya penyakit, seperti demam berdarah dan kolera.</li>
          </ul>
          <a href="/login" class="btn btn-explore">Ayo Lapor!</a>
        </div>
      </div>
  
      <div class="persona-content hidden" id="Jalan rusak">
        <img src="img/jalan rusak.jpg" alt="Jalan Rusak">
        <div class="persona-info">
          <h1>Jalan Rusak</h1>
          <p>kondisi jalan yang mengalami kerusakan fisik, seperti lubang, retakan, atau permukaan yang tidak rata,
             yang dapat mengganggu lalu lintas dan menimbulkan risiko bagi pengguna jalan.</p>
          <ul>
            <li><strong>Kecelakaan Lalu Lintas: </strong> Jalan yang tidak rata atau berlubang dapat menyebabkan kecelakaan.</li>
            <li><strong> Kerugian Ekonomi: </strong>Sektor pertanian dan bisnis sering terkena dampak.</li>
            <li><strong> Dampak Lingkungan: </strong>Jalan yang rusak dapat mengganggu aliran air, menyebabkan genangan dan banjir.
          </ul>
          <a href="/login" class="btn btn-explore">Ayo Lapor!</a>
        </div>
      </div>
  
      <div class="persona-content hidden" id="Kebakaran">
        <img src="img/kebakaran.jpg" alt="Kebakaran">
        <div class="persona-info">
          <h1>Kebakaran</h1>
          <p> peristiwa ketika api muncul dan membakar material di sekitarnya, 
            yang dapat menyebabkan kerusakan besar, baik pada properti maupun lingkungan. .</p>
          <ul>
            <li><strong> Kerusakan Properti: </strong>Kebakaran dapat menghancurkan bangunan, kendaraan, dan barang-barang berharga.</li>
            <li><strong>Korban Jiwa: </strong> Kebakaran dapat menyebabkan cedera atau kematian, baik bagi penghuninya maupun petugas pemadam kebakaran.</li>
            <li><strong> Dampak Lingkungan:  </strong>Kebakaran hutan dapat merusak ekosistem, mengeluarkan asap berbahaya, dan menyebabkan polusi udara.</li>
          </ul>
          <a href="/login" class="btn btn-explore">Ayo Lapor!</a>
        </div>
      </div>
  
      <div class="persona-content hidden" id="Pohon Tumbang">
        <img src="img/pohon tumbang.jpeg" alt="Pohon Tumbang">
        <div class="persona-info">
          <h1>Pohon Tumbang</h1>
          <p> fenomena yang dapat menimbulkan risiko bagi keselamatan dan properti, 
            sehingga penting untuk mengambil langkah-langkah 
            pencegahan untuk mengurangi kemungkinan terjadinya kejadian ini.</p>
          <ul>
            <li><strong>Kerusakan Properti: </strong> Pohon yang tumbang dapat merusak rumah, kendaraan, atau infrastruktur lainnya.</li>
            <li><strong>Bahaya bagi Manusia:  </strong> Pohon tumbang dapat menyebabkan cedera atau bahkan kematian jika jatuh di dekat orang.</li>
          </ul>
          <a href="/login" class="btn btn-explore">Ayo Lapor!</a>
        </div>
      </div>
  
      <div class="persona-content hidden" id="Lampumerah">
        <img src="img/la.jpg" alt="Lampu Lalu Lintas">
        <div class="persona-info">
          <h1>Lampu Lalu lintas</h1>
          <p>kondisi di mana sinyal lalu lintas berwarna merah yang biasanya mengatur
            arus kendaraan dan pejalan kaki tidak berfungsi dengan baik. Ini dapat disebabkan oleh berbagai faktor, 
            seperti kerusakan perangkat keras, gangguan listrik, atau vandalisme.</p>
          <ul>
            <li><strong>Kecelakaan Lalu Lintas: L</strong> ampu merah yang tidak berfungsi dapat menyebabkan kebingungan bagi pengemudi, meningkatkan risiko kecelakaan, terutama di persimpangan yang sibuk.</li>
            <li><strong>Kemacetan: </strong>Ketika lampu merah tidak berfungsi, arus lalu lintas dapat terhambat, menyebabkan kemacetan dan ketidaknyamanan bagi pengguna jalan.</li>
            <li><strong>Keselamatan Pejalan Kaki: </strong>Pejalan kaki mungkin merasa tidak aman saat menyeberang jalan tanpa adanya sinyal yang jelas, meningkatkan risiko kecelakaan.</li>
          </ul>
          <a href="/login" class="btn btn-explore">Ayo Lapor!</a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- JavaScript untuk Menampilkan Konten yang Dipilih -->
  <script>
    function showPersona(personaId) {
      // Hapus semua tab aktif dan sembunyikan semua konten
      document.querySelectorAll('.persona-tab').forEach(tab => tab.classList.remove('active'));
      document.querySelectorAll('.persona-content').forEach(content => content.classList.add('hidden'));
  
      // Tampilkan konten persona yang dipilih dan beri tanda aktif pada tab
      document.getElementById(personaId).classList.remove('hidden');
      document.querySelector(`[onclick="showPersona('${personaId}')"]`).classList.add('active');
    }
  </script>

<!-- Testimonial Section -->
<section class="testimonial-section py-5">
    <div class="container">
      <h2 class="text-center mb-4 text-white">Apa kata Pengguna Kami?</h2>
      <div class="testimonial-wrapper">
        <!-- Testimonial Card 1 -->
        <div class="testimonial-card">
          <div class="profile-picture">
            <img src="img/pas foto 1.jpg" alt="John Doe" class="rounded-profile-img">
          </div>
          <div class="star-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
          <div class="testimonial-author">
            <div>
              <h4 class="author-name">John Doe</h4>
              <p class="author-position">Business Owner</p>
            </div>
          </div>
          <p class="testimonial-text">"LaporPak.com is a fantastic service! Reporting issues has never been easier, and the response time is amazing. Highly recommend!"</p>
        </div>
  
         <!-- Testimonial Card 2 -->
         <div class="testimonial-card">
            <div class="profile-picture">
              <img src="img/pas foto 2.jpg" alt="Michael Johnson" class="rounded-profile-img">
            </div>
            <div class="star-rating">
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
            </div>
            <div class="testimonial-author">
              <div>
                <h4 class="author-name">Michael Johnson</h4>
                <p class="author-position">Freelancer</p>
              </div>
            </div>
            <p class="testimonial-text">"Absolutely love the simplicity and efficiency of LaporPak.com. It has saved me so much time and effort!"</p>
          </div>
        <!-- Testimonial Card 3 -->
        <div class="testimonial-card">
          <div class="profile-picture">
            <img src="\img\pas foto 2.jpg" alt="Michael Johnson" class="rounded-profile-img">
          </div>
          <div class="star-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
          <div class="testimonial-author">
            <div>
              <h4 class="author-name">Michael Johnson</h4>
              <p class="author-position">Freelancer</p>
            </div>
          </div>
          <p class="testimonial-text">"Absolutely love the simplicity and efficiency of LaporPak.com. It has saved me so much time and effort!"</p>
        </div>
      </div>
    </div>
  </section>
  
  
  
  
<!-- Section untuk Informasi Kerja -->
<section class="work-info-section">
    <div class="container">
      <h2 class="section-title">Bagaimana cara <span class="highlight">Melaporkannya?</span></h2>
      <p class="section-description"></p>
      
      <!-- Kartu Informasi -->
      <div class="info-card">
        <div class="icon-circle"></div>
        <div class="card-content">
          <h3 class="card-title">DAFTAR</h3>
          <p class="card-description">
            Pengguna diharuskan mengisi formulir dengan informasi dasar seperti nama, 
            alamat email, nomor telepon, dan kata sandi.
          </p>
        </div>
      </div>
  
      <div class="info-card">
        <div class="icon-circle"></div>
        <div class="card-content">
          <h3 class="card-title">PILIH JENIS LAPORAN</h3>
          <p class="card-description">
            Setelah berhasil login, langkah berikutnya adalah memilih jenis laporan yang ingin diajukan. 
            Platform LaporPak biasanya menyediakan berbagai kategori laporan, seperti Banjir, Kebakaran, Pohon tumbang, Dan Lain-lain
          </p>
        </div>
      </div>
  
      <div class="info-card">
        <div class="icon-circle"></div>
        <div class="card-content">
          <h3 class="card-title">KIRIM LAPORAN</h3>
          <p class="card-description">Setelah memilih jenis laporan dan mengisi detail yang diperlukan,
             langkah terakhir adalah mengirim laporan. Proses ini melibatkan: Review Laporan, Mengirim Laporan.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Section FAQ -->
<section class="faq-section">
    <div class="container1">
      <h2 class="faq-title">Yang Sering Ditanyakan</h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question">
            <span>Apa itu Laporpak.com?</span>
            <span class="faq-toggle">&#9662;</span>
          </div>
          <div class="faq-answer">
            sebuah platform digital inovatif yang memberdayakan
            masyarakat Indonesia untuk berpartisipasi aktif dalam pembangunan daerah mereka.
            Melalui platform ini, masyarakat dapat melaporkan berbagai masalah yang mereka
            temui di lingkungan sekitar, mulai dari jalan rusak, sampah menumpuk, hingga fasilitas
            publik yang tidak berfungsi dengan baik.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <span>Apa Fungsi webiste ini?</span>
            <span class="faq-toggle">&#9662;</span>
          </div>
          <div class="faq-answer">
           LaporPak adalah platform digital yang dirancang untuk memberdayakan masyarakat 
            dalam melaporkan berbagai masalah dan kendala yang mereka hadapi di lingkungan sekitar.
            yang mecangkup pengumpulan laporan masalah, peningkatan kesadaran masyarakat, dan transparasi dan 
            Akuntabilitas
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <span>Apakah Laporpak.com Berbayar?</span>
            <span class="faq-toggle">&#9662;</span>
          </div>
          <div class="faq-answer">
            Tentu saya Tidak. Kami tidak melakukan pembayaran dari website ini.
          </div>
        </div>
        <div class="faq-answer">
          <div>
            Pembayaran bisa menggunakan berbagai e-wallet, QRIS, transfer bank hingga melalui swalayan terdekat.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <span>Kemana saya bisa mendapatkan informasi untuk bekerjasama atau jika terdapat kendala?</span>
            <span class="faq-toggle">&#9662;</span>
          </div>
          <div class="faq-answer">
            Silahkan, Kamu bisa menghubungi Laporpak melalui WhatsApp 08xxxxxxx atau kamu bisa klik WhatsApp button di halaman ini (terletak di kanan-bawah).
          </div>
        </div>
      </div>
    </div>
  </section>
  

  
<!-- Section untuk Promosi Aplikasi -->
<section class="promo-section">
    <div class="promo-content">
      <!-- Gambar Kiri -->
      <div class="promo-image">
        <img src="img/laporpak_title.png" alt="Gambar Kiri" class="img-fluid">
      </div>
  
      <!-- Teks di Tengah -->
      <div class="promo-text">
        <h1>Sudah<span class="highlight"> Mengirim Laporan?</span>?</h1>
        <p>Kami siap menerima apapun #laporain aja  </p>
      </div>

  </section>
  

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
          <a>Hak cipta © 2024 LaporPak. Seluruh hak cipta dilindungi undang-undang</a>
        </div>
        <div class="footer-language-social">
          <a href="#" class="footer-language">Bahasa Indonesia</a>
          <a href="#" class="footer-instagram">LaporPak</a>
        </div>
      </div>
    </div>
  </footer>
  
<script>
function showPersona(personaId) {
    // Sembunyikan semua konten persona
    document.querySelectorAll('.persona-content').forEach(content => {
      content.classList.add('hidden');
    });

    // Tampilkan konten persona yang dipilih
    document.getElementById(personaId).classList.remove('hidden');
  }

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

document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
        // Tutup item FAQ lain yang terbuka
        document.querySelectorAll('.faq-item').forEach(faq => {
            if (faq !== item) {
                faq.classList.remove('open');
                faq.querySelector('.faq-answer').style.maxHeight = null;
            }
        });

        // Toggle kelas 'open' untuk item yang diklik
        item.classList.toggle('open');

        // Buat animasi smooth untuk jawaban FAQ
        const answer = item.querySelector('.faq-answer');
        if (item.classList.contains('open')) {
            answer.style.maxHeight = answer.scrollHeight + "px"; // Set tinggi maksimal ke tinggi konten
        } else {
            answer.style.maxHeight = null; // Kembalikan ke tinggi nol untuk menutup
        }
    });
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
