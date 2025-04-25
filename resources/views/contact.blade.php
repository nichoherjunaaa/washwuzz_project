<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - WashWuzz</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content">
            <div class="logo">
                <span class="logo-icon">🧺</span>
                <span>WashWuzz</span>
            </div>
            <button class="mobile-menu-btn" id="menuToggle">☰</button>
            <nav id="mainNav">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/service">Layanan</a></li>
                    <li><a href="/order">Pesanan</a></li>
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="/contact" class="active">Kontak</a></li>
                    <li><a href="../login_page/login.html">Masuk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Kami siap membantu Anda dengan pertanyaan, saran, atau kebutuhan laundry Anda. Jangan ragu untuk menghubungi tim kami yang ramah.</p>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="section section-light">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Informasi Kontak</h2>
                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h3>Alamat Kantor Pusat</h3>
                            <p>Jl. Paingan, Maguwoharjo, Depok</p>
                            <p>Sleman, 23516</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">📞</div>
                        <div class="info-content">
                            <h3>Telepon</h3>
                            <p>Layanan Pelanggan: (021) 123-4567</p>
                            <p>WhatsApp: 0812-2763-1975</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">✉️</div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>Informasi: info@washwuzz.com</p>
                            <p>Layanan Pelanggan: cs@washwuzz.com</p>
                            <p>Karir: careers@washwuzz.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">🕒</div>
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
                            <a href="#" aria-label="Facebook">📘</a>
                            <a href="#" aria-label="Twitter">🐦</a>
                            <a href="#" aria-label="Instagram">📷</a>
                            <a href="#" aria-label="TikTok">📱</a>
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
                            <label for="agree">Saya setuju bahwa data saya akan diproses sesuai dengan <a href="#">Kebijakan Privasi</a>.</label>
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
                    <div class="map-placeholder">
                        <div class="map-placeholder-text">Peta Lokasi WashWuzz</div>
                    </div>
                </div>
                <div class="branches-container">
                    <h3>Cabang Utama Kami</h3>
                    <div class="branches-grid">
                        <div class="branch-card">
                            <h4>WashWuzz Maguwoharjo</h4>
                            <p>Jl. Paingan, Maguwoharjo, Depok</p>
                            <p>Sleman, 5321</p>
                            <p>Telp: (021) 123-4567</p>
                        </div>
                        <!-- <div class="branch-card">
                            <h4>WashWuzz Jakarta Barat</h4>
                            <p>Jl. Cuci No.45, Green Garden</p>
                            <p>Jakarta Barat, 11530</p>
                            <p>Telp: (021) 765-4321</p>
                        </div>
                        <div class="branch-card">
                            <h4>WashWuzz Jakarta Timur</h4>
                            <p>Jl. Kering No.78, Washtown</p>
                            <p>Jakarta Timur, 13750</p>
                            <p>Telp: (021) 555-7890</p>
                        </div>
                        <div class="branch-card">
                            <h4>WashWuzz Bandung</h4>
                            <p>Jl. Setrika No.15, Laundville</p>
                            <p>Bandung, 40115</p>
                            <p>Telp: (022) 123-4567</p>
                        </div>
                        <div class="branch-card">
                            <h4>WashWuzz Surabaya</h4>
                            <p>Jl. Deterjen No.99, Clean Park</p>
                            <p>Surabaya, 60115</p>
                            <p>Telp: (031) 987-6543</p>
                        </div>
                        <div class="branch-card">
                            <h4>WashWuzz Bali</h4>
                            <p>Jl. Sabun No.33, Freshtown</p>
                            <p>Denpasar, 80115</p>
                            <p>Telp: (0361) 234-5678</p>
                        </div> -->
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
                        <p>Waktu standar kami untuk layanan reguler adalah 2-3 hari kerja. Untuk layanan express, kami dapat menyelesaikan dalam 24 jam dengan biaya tambahan. Sementara layanan super express kami menawarkan penyelesaian dalam 6-8 jam.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Apakah WashWuzz menyediakan layanan antar-jemput?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ya, kami menyediakan layanan antar-jemput gratis untuk pesanan dengan nilai minimum Rp 100.000. Untuk pesanan di bawah nilai tersebut, dikenakan biaya transportasi sebesar Rp 15.000 - Rp 30.000 tergantung jarak.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Bagaimana cara melacak pesanan saya?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Anda dapat melacak status pesanan melalui aplikasi mobile WashWuzz atau situs web kami. Masukkan nomor pesanan yang diberikan saat Anda memesan, atau masuk ke akun Anda untuk melihat semua pesanan aktif.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Metode pembayaran apa saja yang diterima?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Kami menerima tunai, kartu kredit/debit, transfer bank, dan dompet digital (GoPay, OVO, DANA, LinkAja, dan ShopeePay). Anda dapat memilih metode pembayaran yang paling nyaman saat memesan atau saat pengantaran.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Bagaimana jika ada pakaian yang hilang atau rusak?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>WashWuzz bertanggung jawab penuh atas setiap item yang Anda percayakan kepada kami. Jika terjadi kehilangan atau kerusakan, kami akan memberikan kompensasi sesuai dengan nilai item tersebut. Silakan hubungi layanan pelanggan kami dalam 48 jam setelah menerima pesanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Siap Mendapatkan Layanan Premium?</h2>
            <p>Jangan habiskan waktu berharga Anda untuk urusan cucian. Percayakan pada para ahli di WashWuzz dan nikmati pakaian yang bersih, wangi, dan rapi.</p>
            <div class="cta-buttons">
                <a href="#" class="cta-button primary">Pesan Sekarang</a>
                <a href="#" class="cta-button secondary">Unduh Aplikasi</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div class="footer-info">
                <h3>WashWuzz Laundry</h3>
                <p>Penyedia layanan laundry terpercaya Anda sejak 2017. Kami bangga memberikan pakaian bersih dan segar langsung ke rumah Anda.</p>
                <p>📍 Jl. Paingan, Maguwoharjo, Depok, Sleman</p>
                <p>📞 (021) 123-4567</p>
                <p>✉️ info@washwuzz.com</p>
            </div>
            <div class="footer-links">
                <h4>Tautan Cepat</h4>
                <ul>
                    <li><a href="#">Layanan Kami</a></li>
                    <li><a href="#">Paket Harga</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Ikuti Kami</h4>
                <div class="social-icons">
                    <a href="#">📘</a>
                    <a href="#">🐦</a>
                    <a href="#">📷</a>
                    <a href="#">📱</a>
                </div>
                <h4 style="margin-top: 1.5rem;">Newsletter</h4>
                <p>Berlangganan untuk info terbaru dan promo spesial</p>
                <form style="margin-top: 0.5rem;">
                    <input type="email" placeholder="Email Anda" style="padding: 0.5rem; width: 100%; margin-bottom: 0.5rem; border-radius: 4px; border: none;">
                    <button type="submit" style="background-color: #2c7bfe; color: white; border: none; padding: 0.5rem 1rem; border-radius: 4px; cursor: pointer; width: 100%;">Langganan</button>
                </form>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 WashWuzz Laundry. Hak cipta dilindungi undang-undang.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Toggle mobile menu
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('mainNav').classList.toggle('active');
        });

        // FAQ accordion functionality
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-toggle').textContent = '+';
                });
                
                // If clicked item wasn't active, open it
                if (!isActive) {
                    faqItem.classList.add('active');
                    question.querySelector('.faq-toggle').textContent = '-';
                }
            });
        });
    </script>
</body>
</html>