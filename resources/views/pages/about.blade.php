<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - WashWuzz</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    @include('components.navbar');

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Tentang WashWuzz</h1>
            <p>Mengenal lebih dekat dengan tim, nilai, dan perjalanan kami dalam membangun layanan laundry terpercaya di Indonesia.</p>
        </div>
    </section>

    <!-- About Intro Section -->
    <section class="section section-light">
        <div class="container">
            <div class="about-intro">
                <div class="about-content">
                    <h2>Siapa Kami ?</h2>
                    <p>WashWuzz adalah layanan laundry premium yang didirikan pada tahun 2017 dengan visi sederhana - membuat hidup pelanggan lebih mudah dengan memberikan solusi laundry terbaik.</p>
                    <p>Kami memulai perjalanan ini dari sebuah toko kecil dengan dua mesin cuci. Sekarang, kami telah tumbuh menjadi laundry modern yang melayani pemesanan melalui platform online berbasis website</p>
                    <p>Di WashWuzz, kami percaya bahwa cucian bersih adalah hak setiap orang. Kami berdedikasi untuk memberikan hasil terbaik dengan menggunakan teknologi modern dan produk ramah lingkungan, sambil tetap mempertahankan layanan personal yang hangat kepada setiap pelanggan.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.pexels.com/photos/271711/pexels-photo-271711.jpeg" alt="WashWuzz Laundry">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="section section-blue">
        <div class="container">
            <h2 class="section-title">Nilai-Nilai Kami</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3>Kualitas Tanpa Kompromi</h3>
                    <p>Kami tidak pernah berkompromi dalam hal kualitas layanan. Setiap cucian diperlakukan dengan standar tertinggi untuk memberikan hasil terbaik.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-earth-asia"></i>
                    </div>
                    <h3>Ramah Lingkungan</h3>
                    <p>Kami berkomitmen untuk menggunakan produk dan proses yang ramah lingkungan, mengurangi jejak karbon, dan berkontribusi pada planet yang lebih sehat.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3>Integritas & Kejujuran</h3>
                    <p>Kami menjalankan bisnis kami dengan integritas dan kejujuran tertinggi, membangun kepercayaan dengan pelanggan melalui transparansi dalam setiap interaksi.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h3>Inovasi Berkelanjutan</h3>
                    <p>Kami terus berinovasi untuk meningkatkan proses dan layanan kami, mengadaptasi teknologi baru untuk memberikan pengalaman terbaik kepada pelanggan.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3>Berfokus Pada Pelanggan</h3>
                    <p>Kebutuhan dan kepuasan pelanggan adalah pusat dari segala yang kami lakukan. Kami berusaha untuk melebihi ekspektasi dalam setiap interaksi.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <h3>Keberlanjutan</h3>
                    <p>Kami berkomitmen untuk praktik bisnis yang berkelanjutan dan bertanggung jawab secara sosial, memberi dampak positif pada komunitas kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey Section -->
    <section class="section section-light">
        <div class="container">
            <h2 class="section-title">Perjalanan Kami</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2017</div>
                        <h3>Awal Mula</h3>
                        <p>WashWuzz didirikan di sebuah toko kecil di Maguwoharjo, Sleman dengan dua mesin cuci dan hasrat untuk memberikan layanan laundry berkualitas tinggi.</p>
                    </div>
                </div>
                <!-- <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2013</div>
                        <h3>Ekspansi Pertama</h3>
                        <p>Membuka cabang kedua dan ketiga di Jakarta. Meluncurkan layanan antar-jemput pertama untuk kenyamanan pelanggan.</p>
                    </div>
                </div> -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2025</div>
                        <h3>Inovasi Digital</h3>
                        <p>Meluncurkan sistem mobile dan platform berbasis website pemesanan online untuk memudahkan pelanggan memesan layanan kami.</p>
                    </div>
                </div>
                <!-- <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2019</div>
                        <h3>Go Green</h3>
                        <p>Beralih sepenuhnya ke deterjen dan proses ramah lingkungan. Memperkenalkan program daur ulang kantong plastik.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2022</div>
                        <h3>Ekspansi Nasional</h3>
                        <p>Membuka cabang di lima kota besar di Indonesia. Mencapai tonggak 10.000 pelanggan aktif bulanan.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2025</div>
                        <h3>WashWuzz Sekarang</h3>
                        <p>15 lokasi di seluruh Indonesia dengan lebih dari 150 karyawan berdedikasi, melayani ribuan pelanggan setiap hari.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="section section-blue">
        <div class="container">
            <h2 class="section-title">Tim Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-photo">
                        👨
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Roganda Liehtakian</h3>
                        <div class="team-position">Pendiri & CEO</div>
                        <p class="team-bio">Roganda memiliki pengalaman lebih dari 15 tahun dalam industri layanan. Visinya untuk layanan laundry berkualitas tinggi yang mudah diakses menjadi dasar dari WashWuzz.</p>
                        <div class="social-links">
                            <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        👨
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Alfeus Galih Putra</h3>
                        <div class="team-position">Pendiri & CEO</div>
                        <p class="team-bio">Alfeus memiliki pengalaman lebih dari 15 tahun dalam industri layanan. Visinya untuk layanan laundry berkualitas tinggi yang mudah diakses menjadi dasar dari WashWuzz.</p>
                        <div class="social-links">
                            <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        <img src="assets/hero/nicho_juna.png" alt="" style="height: 100%; object-fit: cover">
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Nicho Herjuna</h3>
                        <div class="team-position">Direktur Operasional</div>
                        <p class="team-bio">Nicho mengawasi semua operasi sehari-hari di WashWuzz. Keahliannya dalam manajemen operasi telah membantu menciptakan proses yang efisien dan berkualitas.</p>
                        <div class="social-links">
                            <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/nichoherjunaa" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        👨
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Abdiel Hosana</h3>
                        <div class="team-position">Manajer Teknologi</div>
                        <p class="team-bio">Abdiel memimpin tim pengembangan teknologi yang membangun aplikasi dan infrastruktur digital yang memudahkan pengalaman pelanggan di WashWuzz.</p>
                        <div class="social-links">
                            <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section section-light">
        <div class="container">
            <h2 class="section-title">Apa Kata Pelanggan</h2>
            <div class="testimonials-container">
                <div class="testimonial">
                    <div class="testimonial-content">
                        Saya selalu puas dengan hasil cucian dari WashWuzz. Pakaian selalu bersih, wangi, dan rapi. Layanan antar jemput mereka sangat menghemat waktu saya sebagai profesional yang sibuk.
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">👨</div>
                        <div>
                            <div class="author-name">Rudi Hermawan</div>
                            <div class="author-title">Pelanggan Sejak 2020</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        Sebagai ibu dengan tiga anak kecil, WashWuzz benar-benar menyelamatkan hidup saya. Mereka menangani semua noda membandel dengan baik, dan saya menyukai komitmen mereka terhadap produk ramah lingkungan.
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">👩</div>
                        <div>
                            <div class="author-name">Anita Wijaya</div>
                            <div class="author-title">Pelanggan Sejak 2023</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        Kualitas dry cleaning mereka sangat luar biasa. Saya telah mempercayakan jas dan pakaian formal saya selama bertahun-tahun, dan mereka selalu mengembalikannya dalam kondisi sempurna.
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">👨</div>
                        <div>
                            <div class="author-name">Denny Pratama</div>
                            <div class="author-title">Pelanggan Sejak 2021</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Bergabunglah dengan Keluarga WashWuzz</h2>
            <p>Lebih dari 20.000 pelanggan mempercayakan cucian mereka kepada kami. Rasakan sendiri perbedaan layanan laundry profesional yang dihadirkan oleh WashWuzz.</p>
            <a href="/service" class="cta-button">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        // Toggle menu untuk tampilan mobile
        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');
        
        menuToggle.addEventListener('click', () => {
            mainNav.classList.toggle('active');
        });
    </script>
</body>
</html>