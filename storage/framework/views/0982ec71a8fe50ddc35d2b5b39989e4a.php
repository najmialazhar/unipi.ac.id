<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Universitas Persatuan Islam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('iportofolio/assets/img/logo/unipi bg putih.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('iportofolio/assets/img/logo/unipi.png')); ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('iportofolio/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('iportofolio/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('iportofolio/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('iportofolio/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('iportofolio/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo e(asset('iportofolio/assets/css/main.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="<?php echo e(asset('iportofolio/assets/img/logo/unipi bg putih.png')); ?>" alt="Logo Universitas Pancasila" class="img-fluid">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="<?php echo e(asset('iportofolio/assets/img/logo.png')); ?>" alt=""> -->
      <h1 class="sitename">Universitas Persatuan Islam</h1>
    </a>

    <button id="theme-toggle" class="theme-toggle" type="button" aria-label="Toggle tema">
      <i class="bi bi-moon-stars"></i>
      <span>Dark</span>
    </button>

    <div class="social-links text-center">
      <a href="https://www.facebook.com/UniversitasPersis" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/universitaspersatuanislam/" class="instagram"><i class="bi bi-instagram"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li class="dropdown"><a href="#akademik"><i class="bi bi-mortarboard navicon"></i> <span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li class="dropdown"><a href="#"><span>Fakultas Keguruan dan Ilmu Pendidikan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#fkip">Pendidikan Sejarah</a></li>
                <li><a href="#fkip">Pendidikan Bahasa Inggris</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Fakultas Bisnis dan Informatika</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#fbi">Informatika</a></li>
                <li><a href="#fbi">Bisnis Digital</a></li>
                <li><a href="#fbi">Pariwisata</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Fakultas Ilmu Pengetahuan Alam</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#fipa">Ilmu Lingkungan</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Fakultas Peternakan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#fapet">Peternakan</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Galeri</a></li>
        <li class="dropdown"><a href="#"><i class="bi bi-building navicon"></i> <span>Lembaga</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="/lembaga/lpm">LPM</a></li>
            <li><a href="/lembaga/lppm">LPPM</a></li>
            <li><a href="/dosen">Dosen</a></li>
          </ul>
        </li>
        <li><a href="#beasiswa"><i class="bi bi-mortarboard-fill navicon"></i> Beasiswa</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?php echo e(asset('iportofolio/assets/img/kampus/GD UNIPI DEPAN 1.jpeg')); ?>" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Universitas Persatuan Islam</h2>
        <p><span class="typed" data-typed-items="Based On, Tafaquh Fiddien, and Modern University">and Modern University</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- Quick Links Section -->
    <section id="quick-links" class="quick-links section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Akses Cepat</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="quick-links-placeholder">
          <div class="quick-link-grid">
            <a href="https://siak.unipi.ac.id/" class="quick-link-item" aria-label="SIAKAD">
              <i class="bi bi-mortarboard-fill"></i>
              <span>SIAKAD</span>
            </a>
            <a href="https://pmb.unipi.ac.id/" class="quick-link-item" aria-label="PMB">
              <i class="bi bi-person-plus-fill"></i>
              <span>PMB</span>
            </a>
            <a href="https://perpustakaan.unipi.ac.id/" class="quick-link-item" aria-label="Perpustakaan">
              <i class="bi bi-journal-bookmark-fill"></i>
              <span>Perpustakaan</span>
            </a>
            <a href="sdm.unipi.ac.id" class="quick-link-item" aria-label="SDM">
              <i class="bi bi-people-fill"></i>
              <span>SDM</span>
            </a>
            <a href="https://arsip.unipi.ac.id" class="quick-link-item" aria-label="Arsip">
              <i class="bi bi-archive-fill"></i>
              <span>Arsip</span>
            </a>
            <a href="https://repository.unipi.ac.id" class="quick-link-item" aria-label="Repository">
              <i class="bi bi-database-fill"></i>
              <span>Repository</span>
            </a>
            <a href="https://jurnal.unipi.ac.id" class="quick-link-item" aria-label="Jurnal">
              <i class="bi bi-journal-text"></i>
              <span>Jurnal</span>
            </a>
            <a href="https://inventaris.unipi.ac.id" class="quick-link-item" aria-label="Inventaris">
              <i class="bi bi-box-seam-fill"></i>
              <span>Inventaris</span>
            </a>
          </div>
        </div>
      </div>

    </section><!-- /Quick Links Section -->

    <!-- Welcome UNIPI Section -->
    <section id="welcome-unipi" class="welcome-unipi section">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 align-items-center">
          <aside class="col-lg-7">
            <h2>Selamat datang di UNIPI</h2>
            <p>
              Sebagai salah satu Organisasi Islam yang concern dalam bidang Tarbiyah, Jam'iyah Persatuan Islam membuka lembaran baru dengan mendirikan Perguruan Tinggi berbentuk Universitas. Cita-cita yang selalu menjadi rekomendasi dari Muktamar ke Muktamar, terjawab sudah di penghujung tahun 2018 kemarin. Melalui SK Kemenristekdikti Republik Indonesia Nomor 1271/KPT/1/2018 tanggal 31 Desember 2018 tentang izin perubahan bentuk STKIP Persatuan Islam menjadi Universitas Persatuan Islam.
            </p>
          </aside>
          <aside class="col-lg-5">
            <div class="welcome-unipi-photo">
              <img src="<?php echo e(asset('iportofolio/assets/img/kampus/droneunipi1.jpeg')); ?>" alt="Foto sambutan" class="img-fluid">
            </div>
          </aside>
        </div>
      </div>
    </section><!-- /Welcome UNIPI Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Tiga pilar utama informasi Universitas Persatuan Islam.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-12">
            <article class="about-point h-100">
              <div class="about-point-icon"><i class="bi bi-diagram-3-fill"></i></div>
              <h3>Struktur</h3>
              <p>
                Struktur organisasi UNIPI dirancang kolaboratif antara pimpinan universitas, fakultas, program studi,
                dan unit penunjang agar layanan akademik, kemahasiswaan, serta administrasi berjalan terukur dan
                akuntabel.
              </p>
            </article>
          </div>
          <div class="col-12">
            <article class="about-point h-100">
              <div class="about-point-icon"><i class="bi bi-bullseye"></i></div>
              <h3>Visi dan Misi</h3>
              <p>
                UNIPI berkomitmen menjadi universitas unggul berbasis nilai Islam, keilmuan, dan kemodernan dengan
                misi membangun lulusan berkarakter, memperkuat riset terapan, serta menghadirkan pengabdian yang
                berdampak bagi masyarakat.
              </p>
            </article>
          </div>
          <div class="col-12">
            <article class="about-point h-100">
              <div class="about-point-icon"><i class="bi bi-clock-history"></i></div>
              <h3>Sejarah</h3>
              <p>
                Perjalanan UNIPI berakar dari semangat Jam'iyah Persatuan Islam dalam bidang tarbiyah. Transformasi
                kelembagaan dari STKIP Persatuan Islam menuju Universitas Persatuan Islam menandai komitmen baru untuk
                memperluas kontribusi pendidikan tinggi Islam di Indonesia.
              </p>
            </article>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="stats-item">
              <i class="bi bi-person-workspace"></i>
              <span data-purecounter-start="0" data-purecounter-end="146" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Dosen</strong> <span>aktif mengajar dan membina</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item">
              <i class="bi bi-mortarboard-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="8245" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Lulusan</strong> <span>telah tersebar di berbagai bidang</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="3672" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Mahasiswa Aktif</strong> <span>belajar di berbagai program studi</span></p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Akademik Section -->
    <section id="akademik" class="akademik section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Akademik</h2>
        <p>Garis besar program akademik UNIPI pada empat fakultas dan tujuh program studi.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <article id="fkip" class="akademik-card h-100">
              <h3>Fakultas Keguruan dan Ilmu Pendidikan</h3>
              <div class="akademik-prodi">
                <a href="/prodi/pendidikan-sejarah" class="akademik-prodi-item">
                  <i class="bi bi-clock-history"></i>
                  <div>
                    <h4>Pendidikan Sejarah</h4>
                    <p>Mengkaji sejarah dan pembelajaran kritis untuk membentuk pendidik yang berwawasan kebangsaan.</p>
                  </div>
                </a>
                <a href="/prodi/pendidikan-bahasa-inggris" class="akademik-prodi-item">
                  <i class="bi bi-flag-fill"></i>
                  <div>
                    <h4>Pendidikan Bahasa Inggris</h4>
                    <p>Menyiapkan pendidik bahasa Inggris yang komunikatif, adaptif, dan relevan dengan kebutuhan global.</p>
                  </div>
                </a>
              </div>
            </article>
          </div>
          <div class="col-lg-6">
            <article id="fbi" class="akademik-card h-100">
              <h3>Fakultas Bisnis dan Informatika</h3>
              <div class="akademik-prodi">
                <a href="/prodi/informatika" class="akademik-prodi-item">
                  <i class="bi bi-cpu-fill"></i>
                  <div>
                    <h4>Informatika</h4>
                    <p>Fokus pada pengembangan perangkat lunak, data, dan teknologi cerdas untuk solusi masa depan.</p>
                  </div>
                </a>
                <a href="/prodi/bisnis-digital" class="akademik-prodi-item">
                  <i class="bi bi-graph-up-arrow"></i>
                  <div>
                    <h4>Bisnis Digital</h4>
                    <p>Mengintegrasikan strategi bisnis dengan ekosistem digital untuk membangun pelaku usaha modern.</p>
                  </div>
                </a>
                <a href="/prodi/pariwisata" class="akademik-prodi-item">
                  <i class="bi bi-airplane-engines-fill"></i>
                  <div>
                    <h4>Pariwisata</h4>
                    <p>Menyiapkan SDM pariwisata yang kreatif, berdaya saing, dan berorientasi pada layanan berkualitas.</p>
                  </div>
                </a>
              </div>
            </article>
          </div>
          <div class="col-lg-6">
            <article id="fipa" class="akademik-card h-100">
              <h3>Fakultas Ilmu Pengetahuan Alam</h3>
              <div class="akademik-prodi">
                <a href="/prodi/ilmu-lingkungan" class="akademik-prodi-item">
                  <i class="bi bi-globe-asia-australia"></i>
                  <div>
                    <h4>Ilmu Lingkungan</h4>
                    <p>Mempelajari pengelolaan lingkungan berkelanjutan berbasis sains, kebijakan, dan teknologi.</p>
                  </div>
                </a>
              </div>
            </article>
          </div>
          <div class="col-lg-6">
            <article id="fapet" class="akademik-card h-100">
              <h3>Fakultas Peternakan</h3>
              <div class="akademik-prodi">
                <a href="/prodi/peternakan" class="akademik-prodi-item">
                  <i class="bi bi-egg-fried"></i>
                  <div>
                    <h4>Peternakan</h4>
                    <p>Mengembangkan ilmu produksi ternak, nutrisi, dan manajemen usaha peternakan berkelanjutan.</p>
                  </div>
                </a>
              </div>
            </article>
          </div>
        </div>
      </div>

    </section><!-- /Akademik Section -->

    <!-- Galeri Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeri</h2>
        <p>Dokumentasi kegiatan kampus, aktivitas staf, dan momen lainnya di lingkungan UNIPI.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter=".category-kampus" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter=".category-kampus" class="filter-active">Kampus</li>
            <li data-filter=".category-staff">Staff</li>
            <li data-filter=".category-other">Other</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-kampus">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/kampus/GD UNIPI DEPAN 1.jpeg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kampus</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/kampus/GD UNIPI DEPAN 1.jpeg')); ?>" title="Gedung UNIPI" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-staff">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/product-1.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Staff</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/product-1.jpg')); ?>" title="" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-other">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/branding-1.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Other</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/branding-1.jpg')); ?>" title="" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-other">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/books-1.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Other</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/books-1.jpg')); ?>" title="" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-kampus">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/kampus/droneunipi1.jpeg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kampus</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/kampus/droneunipi1.jpeg')); ?>" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-staff">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/product-2.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Staff</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/product-2.jpg')); ?>" title="" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-other">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/branding-2.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Other</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/branding-2.jpg')); ?>" title="" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-other">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/books-2.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Other</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/books-2.jpg')); ?>" title="" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-kampus">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/kampus/droneunipi2.jpeg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kampus</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/kampus/droneunipi2.jpeg')); ?>" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-staff">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/product-3.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Staff</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/product-3.jpg')); ?>" title="" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-other">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/branding-3.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Other</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/branding-3.jpg')); ?>" title="" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item category-other">
              <div class="portfolio-content h-100">
                <img src="<?php echo e(asset('iportofolio/assets/img/portfolio/books-3.jpg')); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Other</h4>
                  <a href="<?php echo e(asset('iportofolio/assets/img/portfolio/books-3.jpg')); ?>" title="" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Galeri Section -->

    <!-- Beasiswa Section -->
    <section id="beasiswa" class="section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Beasiswa</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Konten beasiswa akan ditambahkan di sini -->
      </div>

    </section><!-- /Beasiswa Section -->

    <!-- Dari Para Alumni Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Dari Para Alumni</h2>
        <p>Suara dan pengalaman alumni setelah menempuh pendidikan di Universitas Persatuan Islam.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Belajar di UNIPI membuat saya tidak hanya memahami teori, tetapi juga terbiasa berpikir kritis dan bekerja kolaboratif. Bekal itu sangat membantu saya saat masuk dunia kerja.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="<?php echo e(asset('iportofolio/assets/img/testimonials/testimonials-1.jpg')); ?>" class="testimonial-img" alt="">
                <h3>Rizky Maulana</h3>
                <h4>Alumni Informatika</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Dosen-dosen di UNIPI sangat terbuka untuk berdiskusi, bahkan di luar jam kelas. Lingkungan akademiknya suportif dan mendorong mahasiswa untuk terus berkembang.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="<?php echo e(asset('iportofolio/assets/img/testimonials/testimonials-2.jpg')); ?>" class="testimonial-img" alt="">
                <h3>Nadia Salsabila</h3>
                <h4>Alumni Pendidikan Bahasa Inggris</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Program magang dan kegiatan organisasi selama kuliah membuat saya lebih siap memimpin tim. Pengalaman ini jadi nilai tambah yang nyata setelah lulus.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="<?php echo e(asset('iportofolio/assets/img/testimonials/testimonials-3.jpg')); ?>" class="testimonial-img" alt="">
                <h3>Fajar Ramdani</h3>
                <h4>Alumni Bisnis Digital</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Saya merasa bangga pernah menjadi bagian dari UNIPI. Nilai integritas, kedisiplinan, dan semangat kontribusi sosial yang diajarkan kampus masih saya pegang sampai sekarang.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="<?php echo e(asset('iportofolio/assets/img/testimonials/testimonials-4.jpg')); ?>" class="testimonial-img" alt="">
                <h3>Intan Permata</h3>
                <h4>Alumni Ilmu Lingkungan</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Kurikulum yang aplikatif membuat proses adaptasi saya di industri peternakan berjalan lebih cepat. Materi perkuliahan relevan dengan kebutuhan lapangan saat ini.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="<?php echo e(asset('iportofolio/assets/img/testimonials/testimonials-5.jpg')); ?>" class="testimonial-img" alt="">
                <h3>Ahmad Fauzi</h3>
                <h4>Alumni Peternakan</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Dari Para Alumni Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-12">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Jl. Peta 154 Bojongloa Kaler Bandung</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>081222699980</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@unipi.ac.id</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps?q=Jl.%20Peta%20154%20Bojongloa%20Kaler%20Bandung&output=embed" frameborder="0" style="border:0; width: 100%; height: 320px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p><span>©</span> <strong class="px-1 sitename">Universitas Persatuan Islam 2026</strong></p>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('iportofolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/typed.js/typed.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('iportofolio/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo e(asset('iportofolio/assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\unipi.ac.id\resources\views/landing.blade.php ENDPATH**/ ?>