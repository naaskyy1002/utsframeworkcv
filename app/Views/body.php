<?=$this->extend('layout')?>
<?=$this->section('bodycontent')?>
 
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Raina Rahmawati Fitri</h1>
      <p>Saya <span class="typed" data-typed-items=" Seorang Mahasiswi di Universitas Muhammadiyah Sukabumi"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php foreach ($cv as $c) :?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Saya</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/profil-img.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <p>
            Saya adalah mahasiswa semester 6 jurusan Teknik Informatika di Universitas Muhammadiyah Sukabumi yang memiliki pengalaman organisasi khususnya di bidang administrasi. 
            </p>
            <p>
            Selama masa studi, saya aktif mengikuti berbagai kepanitiaan dalam acara OSIS/MPK, himpunan, dan BEM, serta beberapa kali berperan sebagai MC dan moderator dalam acara-acara tersebut begitupun di tingkat fakultas. 
            </p>
            <p>
            Saya memiliki minat besar dalam bidang Web Engineer dan Konsultan IT, dan sudah terampil dalam menggunakan Microsoft Office serta mengerti bahasa pemrograman PHP. 
            </p>
            <p>
            Dengan latar belakang akademis di bidang Teknik Informatika dan pengalaman organisasi yang beragam, saya siap untuk kontribusi dalam dunia profesional. 
            </p>
            <p>
            Saya berharap dapat mengembangkan keterampilan lebih lanjut dan berkontribusi pada proyek-proyek yang menantang dan inovatif.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nama Panjang :</strong>   <?= $c['Nama_Panjang']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nama Pendek :</strong>    <?= $c['Nama_Pendek']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir :</strong>  <?= $c['Tanggal_Lahir']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Jenis Kelamin :</strong>  <?= $c['Jenis_Kelamin']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat :</strong>         <?= $c['Alamat']; ?></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>No. Telepon :</strong>    <?= $c['No_Telepon']; ?></li>  
                  <li><i class="bi bi-chevron-right"></i> <strong>E-mail :</strong>         <?= $c['E-mail']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>LinkedIn :</strong>       <?= $c['LinkedIn']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Github :</strong>         <?= $c['Github']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Instagram :</strong>      <?= $c['Instagram']; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <?php endforeach; ?><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informasi Riwayat Hidup</h2>
          <p>Saya adalah seorang mahasiswa yang berdedikasi di jurusan Teknik Informatika, dengan latar belakang pendidikan yang solid dan</p>
          <p>berbagai prestasi yang telah diraih. Selain itu, saya juga aktif dalam berbagai organisasi yang memperkaya pengalaman dan keahlian saya.</p>
          <p>Berikut adalah rincian riwayat pendidikan, prestasi, dan pengalaman organisasi saya:</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Riwayat Pendidikan</h3>
            <div class="resume-item pb-0">
              <h4>SMP Negeri 6 Kota Sukabumi</h4>
              <h5>2016 - 2018</h5>
            </div>
            <div class="resume-item pb-0">
              <h4>SMA Negeri 5 Kota Sukabumi</h4>
              <h6><em>Jurusan IPS</em></h6>
              <h5>2018 - 2021</h5>
            </div>
            <div class="resume-item pb-0">
              <h4>Universitas Muhammadiyah Sukabumi</h4>
              <h6><em> Jurusan Teknik Informatika | IPK 3,73</em></h6>
              <h5>2021 - sekarang</h5>
            </div>

            <h3 class="resume-title">Prestasi</h3>
            <div class="resume-item">
              <h4>Penegak Bantara</h4>
              <h5>2018</h5>
              <ul>
                <li>Memenuhi dan menguji Syarat Kecakapan Umum (SKU) Penegak Bantara.</li>
                <li>Melaksanakan pengembaraan sejauh 7 KM.</li>
                <li>Melakukan upacara pengukuhan Penegak Bantara pada tanggal 11 September 2018.</li>
              </ul>
              </div>
            <div class="resume-item">
              <h4>Penegak Laksana</h4>
              <h5>2019</h5>
              <ul>
                <li>Memenuhi dan menguji Syarat Kecakapan Umum (SKU) Penegak Laksana.</li>
                <li>Melaksanakan pengembaraan sejauh 15 KM.</li>
                <li>Melakukan upacara pengukuhan Penegak Laksana pada tanggal 24 November 2019.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Juara 1 Archery Putri</h4>
              <h6><em>Lomba Kreatifitas Pramuka III se-Wilayah I dan II Jawa Barat</em></h6>
              <h5>2018</h5>
            </div>
            <div class="resume-item">
              <h4>Juara 3 Terampil Putri</h4>
              <h6><em>Lomba Kreatifitas Pramuka III se-Wilayah I dan II Jawa Barat</em></h6>
              <h5>2018</h5>
            </div>
            <div class="resume-item">
              <h4>Juara 1 Archery Putri</h4>
              <h6><em>Lomba Kreatifitas Pramuka IV se-Wilayah I dan II Jawa Barat</em></h6>
              <h5>2019</h5>
            </div>
            <div class="resume-item">
              <h4>Juara 2 Wisata Kota Putri</h4>
              <h6><em>Lomba Kreatifitas Pramuka IV se-Wilayah I dan II Jawa Barat</em></h6>
              <h5>2019</h5>
            </div>
            <div class="resume-item">
              <h4>Juara 3 PUPK & Sejarah Pramuka Putri</h4>
              <h6><em>Lomba Kreatifitas Pramuka IV se-Wilayah I dan II Jawa Barat</em></h6>
              <h5>2019</h5>
            </div>
            <div class="resume-item">
              <h4>Juara Harapan 3 Lomba 3D Wall Magazine & Mini Pionering Putri</h4>
              <h6><em>Lomba Kreatifitas Pramuka IV se-Wilayah I dan II Jawa Barat</em></h6>
              <h5>2019</h5>
            </div>
            <div class="resume-item">
              <h4>Juara 1 Lomba Cerdas Cermat</h4>
              <h6><em>Kegiatan Gema Ramadan XXIX tingkat Kota/Kabupaten Sukabumi</em></h6>
              <h5>2019</h5>
            </div>
            <div class="resume-item">
              <h4>Lolos Pendanaan PPK ORMAWA</h4>
              <h6><em>Kegiatan yang diselenggarakan oleh Kemendikbudristek, dengan judul "Inovasi Desa Digital Berbasis Teknologi di Kelurahan Palabuhanratu" </em></h6>
              <h5>2023</h5>
              <ul>
                
              </ul>
            </div>
          </div>

          <div class="col-lg-6">
            <h3 class="resume-title">Pengalaman Organisasi</h3>
            <div class="resume-item">
              <h4>Sekretaris I MPK SMAN 5</h4>
              <h5>2018 - 2019</h5>
              <ul>
                <li>Membantu mencatat absensi kehadiran saat rapat rutinan selama 1 periode dan merekap absensi organisasi untuk di laporankan pada saat akhir kepengurusan.</li>
                <li>Membantu memberikan informasi untuk rapat rutinan kepada anggota MPK selama 1 periode.</li>
                <li>Membuat 5+ proposal dan laporan pertanggungjawaban acara dengan menggunakan Microsoft Word.</li>
                <li>Membantu menyusun laporan pertanggungjawaban selama 1 periode dan merekap absensi serta surat-menyurat MPK.</li>
                <li>Hasil yang dicapai mampu berpikir kritis, paham komunikasi yang baik secara lisan dan tulisan, lebih memahami dalam mengoperasikan PC atau laptop, dan mampu mengontrol waktu.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Sekretaris Umum MPK SMAN 5</h4>
              <h5>2019 - 2020</h5>
              <ul>
                <li>Menyusun program kerja selama 1 periode</li>
                <li>Mencatat absensi kehadiran dan notulensi saat rapat rutinan selama 1 periode.</li>
                <li>Menginformasikan untuk rapat rutin kepada anggota MPK selama 1 periode.</li>
                <li>Membuat 5+ proposal dan laporan pertanggungjawaban acara dengan menggunakan Microsoft Word.</li>
                <li>Menyusun laporan pertanggungjawaban selama 1 periode dan merekap administrasi, pemasukan dan pengeluaran keuangan MPK.</li>
                <li>Hasil yang dicapai mampu berpikir kritis, paham komunikasi yang baik secara lisan dan tulisan, lebih memahami dalam mengoperasikan PC atau laptop, dan mampu mengontrol waktu.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Sekretaris Umum Pramuka SMAN 5</h4>
              <h5>2019 - 2020</h5>
              <ul>
                <li>Menyusun program kerja selama 1 periode</li>
                <li>Mencatat absensi kehadiran dan notulensi saat rapat rutinan selama 1 periode.</li>
                <li>Membuat 8+ proposal kegiatan dan laporan pertanggungjawaban dengan menggunakan Microsoft Word.</li>
                <li>Menyusun laporan pertanggungjawaban selama 1 periode dan merekap administrasi serta dokumentasi kegiatan.</li>
                <li>Hasil yang dicapai mampu berpikir kritis, paham komunikasi yang baik secara lisan dan tulisan, lebih memahami dalam mengoperasikan PC atau laptop, dan mampu mengontrol waktu.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Sekretaris I BEM Fakultas Sains dan Teknologi UMMI</h4>
              <h5>2022 - 2023</h5>
              <ul>
                <li>Menyusun RKAT dan kalender kegiatan selama 1 periode</li>
                <li>Membuat buku saku pengurus BEM-FSAINTEK</li>
                <li>Mencatat dan merekap absensi kehadiran pada saat rapat selama 1 peiode</li>
                <li>Menyusun berita acara pada saat rapat selama 1 periode</li>
                <li>Merekap administrasi dan dokumentasi kegiatan yang telah dilakukan</li>
                <li>Mengarsipkan dokumen-dokumen</li>
                <li>Menginformasikan rapat rutin kepada anggota BEM selama 1 periode</li>
                <li>Membuat 5+ proposal dan laporan pertanggungjawaban serta surat-menyurat untuk kegiatan yang akan dilaksanakan dengan menggunakan Microsoft Office.</li>
                <li>Hasil yang dicapai mampu berpikir kritis, paham komunikasi yang baik secara lisan dan tulisan, dan lebih mampu mengontrol waktu.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Sekretaris Umum BEM Fakultas Sains dan Teknologi UMMI</h4>
              <h5>2023 - sekarang</h5>
              <ul>
                <li>Menyusun RKAT dan kalender kegiatan selama 1 periode</li>
                <li>Mencatat dan merekap absensi kehadiran pada saat rapat selama 1 peiode</li>
                <li>Menyusun berita acara pada saat rapat selama 1 periode</li>
                <li>Merekap administrasi dan dokumentasi kegiatan yang telah dilakukan</li>
                <li>Mengarsipkan dokumen-dokumen</li>
                <li>Menginformasikan rapat kepada anggota BEM selama 1 periode</li>
                <li>Membuat 5+ proposal dan laporan pertanggungjawaban serta surat-menyurat untuk kegiatan yang akan dilaksanakan dengan menggunakan Microsoft Office.</li>
                <li>Hasil yang dicapai mampu berpikir kritis, paham komunikasi yang baik secara lisan dan tulisan, dan lebih mampu mengontrol waktu.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Keahlian</h2>
          <p>Saya memiliki berbagai keahlian dan pengalaman yang relevan untuk mendukung kesuksesan saya di bidang Teknik Informatika dan organisasi.</p>
          <p>Berikut adalah beberapa keahlian yang saya kuasai:</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Berbicara Depan Umum <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bekerja Sama <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Manajement Waktu<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Penyelesaian Masalah<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Administrasi<i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Microsoft Office <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">HTML & CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PHP <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dokumentasi</h2>
          <p>Sebagai mahasiswa dengan pengalaman organisasi dan memiliki berbagai prestasi, saya telah mendokumentasikan seluruh pencapaian</p>
          <p>dan aktivitas yang mendukung perkembangan pribadi dan profesional saya. Berikut adalah dokumentasi yang telah saya kumpulkan:</p>
          <p></p>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Sertifikat</li>
              <li data-filter=".filter-card">Prestasi</li>
              <li data-filter=".filter-web">Organisasi</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sertifikat Sekretaris MPK</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pengurus Inti MPK</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>LKP III</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-Pengembaraan 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pengembaraan Laksana</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MC GPS V</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-Pengukuhan 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pengukuhan Bantara</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>AKSI XVII</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>GPS V</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nari</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>LCC Gema Ramadan</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>LKP IV</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tari AKSI XVII</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tari AKSI XVII</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sertifikat Partisipasi</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pengukuhan Bantara</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Upacara Pramuka</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan Lomba</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-Pengembaraan 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pengembaraan Laksana</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-Pengukuhan 2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pengukuhan Bantara</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Perwakilan sebagai OSIS/MPK</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-13.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Perwakilan sebagai Duta Literasi</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sertifikat Sekretaris I BEM</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sertifikat Sekretaris Umum BEM</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pengukuhan Laksana</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>UPGRADING FSAINTEK</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-10.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SAINTEK PEDULI BENCANA ALAM</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Peserta Stadium General</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>GDSC UMMI</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Or-12.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pelantikan Pengurus BEM</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-5.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MC Pelantikan Pengurus BEM</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-6.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MC UPGRADING FSAINTEK</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MC SITASMA FSAINTEK</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sertifikat Partisipasi Web</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sertifikat Partisipasi Mobile</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kunjungan ke Kelurahan Palabuhanratu</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Prestasi-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Seminar Teknologi PPK ORMAWA 2023</h4>
                <p>Prestasi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Sertif-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sertifikat PPK ORMAWA 2023</h4>
                <p>Sertifikat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Skill-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MC Seminar Teknologi PPK ORMAWA 2023</h4>
                <p>Organisasi</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Rekan Terdekat</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Nurul.png" class="testimonial-img" alt="">
                <h3>Nurul Fauziah Rahman</h3>
                <h4>Mahasiswa UPI</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Try to enjoy life. Don't rush cz we're all have our own pace
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Azizah.png" class="testimonial-img" alt="">
                <h3>Siti Nurazizah</h3>
                <h4>Mahasiswa UMMI</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Trust to god, everything is gonna be okay
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Sarah.png" class="testimonial-img" alt="">
                <h3>Sarah Syakira Rambe</h3>
                <h4>Mahasiswa UMMI</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tidak semua orang terluka di tempat yang sama
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Ruhu.png" class="testimonial-img" alt="">
                <h3>Siti Ruhu Salamah</h3>
                <h4>Mahasiswa UMMI</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  من جد وجد
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Dinda.png" class="testimonial-img" alt="">
                <h3>Dinda Putri Khoirunnisa</h3>
                <h4>Mahasiswa UMMI</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Prioritaskan dirimu, impianmu dan tujuanmu
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Najipa2.png" class="testimonial-img" alt="">
                <h3>Nazhifa Shofiya Ramadhani</h3>
                <h4>Guru TK</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Today must be better than yesterday
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Isti.png" class="testimonial-img" alt="">
                <h3>Istianah Tusadiah</h3>
                <h4>Mahasiswa UMMI</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I was born to be real, not to be perfect
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Sukabumi, Jawa Barat</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>rrahmawatif.23@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info">
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No. Telepon:</h4>
                <p>089523915026</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?=$this->endSection()?>