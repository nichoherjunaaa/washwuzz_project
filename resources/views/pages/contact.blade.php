<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - WashWuzz</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

<body>
    <!-- Header -->
    @include('components.navbar');

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Kami siap membantu Anda dengan pertanyaan, saran, atau kebutuhan laundry Anda. Jangan ragu untuk
                menghubungi tim kami yang ramah.</p>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="section section-light">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Informasi Kontak</h2>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info-content">
                            <h3>Alamat Kantor Pusat</h3>
                            <p>Jl. Paingan, Maguwoharjo, Depok</p>
                            <p>Sleman, 23516</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone"></i></div>
                        <div class="info-content">
                            <h3>Telepon</h3>
                            <p>Layanan Pelanggan: (021) 123-4567</p>
                            <p>WhatsApp: 0812-2763-1975</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>Informasi: info@washwuzz.com</p>
                            <p>Layanan Pelanggan: cs@washwuzz.com</p>
                            <p>Karir: careers@washwuzz.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                        <div class="info-content">
                            <h3>Jam Operasional</h3>
                            <p>Senin - Jumat: 07:00 - 21:00</p>
                            <p>Sabtu - Minggu: 08:00 - 20:00</p>
                            <p>Libur Nasional: 09:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="social-contact">
                        <h3>Temukan Kami di</h3>
                        <div class="social-icons">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="WhatsApp"><i><i class="fab fa-whatsapp"></i></i></a>
                        </div>
                    </div>
                </div>
                <div class="contact-form-container">
                    <h2>Kirim Pesan</h2>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <select id="subject" name="subject">
                                <option value="info">Informasi Layanan</option>
                                <option value="order">Status Pesanan</option>
                                <option value="complaint">Keluhan</option>
                                <option value="feedback">Masukan</option>
                                <option value="partnership">Kerjasama</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="agree" name="agree" required>
                            <label for="agree">Saya setuju bahwa data saya akan diproses sesuai dengan <a
                                    href="#">Kebijakan Privasi</a>.</label>
                        </div>
                        <button type="submit" class="submit-button">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="section section-blue">
        <div class="container">
            <h2 class="section-title">Lokasi Kami</h2>
            <div class="locations-container">
                <div class="map-container">
                    <!-- Placeholder for map -->
                    <div id="map" style="height: 400px; width: 100%; border-radius: 8px;"></div>
                </div>
                <div class="branches-container">
                    <div class="branches-grid">
                        <div class="branch-card">
                            <h4>WashWuzz Maguwoharjo</h4>
                            <p>Jl. Paingan, Maguwoharjo, Depok</p>
                            <p>Sleman, 5321</p>
                            <p>Telp: (021) 123-4567</p>
                        </div>
                    </div>
                    <div class="view-all-branches">
                        <a href="#" class="view-all-button">Lihat Semua `Lokasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-light">
        <div class="container">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Berapa lama proses laundry di WashWuzz?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Waktu standar kami untuk layanan reguler adalah 2-3 hari kerja. Untuk layanan express, kami
                            dapat menyelesaikan dalam 24 jam dengan biaya tambahan. Sementara layanan super express kami
                            menawarkan penyelesaian dalam 6-8 jam.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Apakah WashWuzz menyediakan layanan antar-jemput?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, kami menyediakan layanan antar-jemput gratis bergantung pada jarak tempuh pelanggan.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Metode pembayaran apa saja yang diterima?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Kami menerima tunai, kartu kredit/debit, transfer bank, dan dompet digital (GoPay, OVO, DANA,
                            LinkAja, dan ShopeePay). Anda dapat memilih metode pembayaran yang paling nyaman saat
                            memesan atau saat pengantaran.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Bagaimana jika ada pakaian yang hilang atau rusak?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>WashWuzz bertanggung jawab penuh atas setiap item yang Anda percayakan kepada kami. Jika
                            terjadi kehilangan atau kerusakan, kami akan memberikan kompensasi sesuai dengan nilai item
                            tersebut. Silakan hubungi layanan pelanggan kami dalam 48 jam setelah menerima pesanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Siap Mendapatkan Layanan Premium?</h2>
            <p>Jangan habiskan waktu berharga Anda untuk urusan cucian. Percayakan pada para ahli di WashWuzz dan
                nikmati pakaian yang bersih, wangi, dan rapi.</p>
            <div class="cta-buttons">
                <a href="{{ route('service') }}" class="cta-button primary">Pesan Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer');

    <!-- JavaScript -->
    <script>
        // Toggle mobile menu
        document.getElementById('menuToggle').addEventListener('click', function () {
            document.getElementById('mainNav').classList.toggle('active');
        });

        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');

                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-toggle').textContent = '+';
                });

                if (!isActive) {
                    faqItem.classList.add('active');
                    question.querySelector('.faq-toggle').textContent = '-';
                }
            });
        });
    </script>
    <script>
        // Inisialisasi peta, sesuaikan koordinat (contoh: WashWuzz Maguwoharjo)
        var map = L.map('map').setView([-7.7532536,110.4255539], 17);

        // Tambahkan tile dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker lokasi
        L.marker([-7.7532536,110.4255539]).addTo(map)
            .bindPopup('WashWuzz Maguwoharjo<br>Jl. Paingan, Maguwoharjo, Depok')
            .openPopup();
    </script>
</body>

</html>