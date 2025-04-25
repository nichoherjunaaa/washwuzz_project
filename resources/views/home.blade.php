<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WashWuzz | Laundry Platform</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
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
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a href="/service">Layanan</a></li>
                    <li><a href="/order">Pesanan</a></li>
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="/contact">Kontak</a></li>
                    <li><a href="../login_page/login.html">Masuk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Pakaian Bersih. Hidup Bersih.</h1>
                <p>Biarkan kami yang mengurus cucian Anda, agar Anda bisa fokus pada hal yang lebih penting. Layanan laundry profesional dengan penjemputan dan pengantaran gratis ke rumah Anda.</p>
                <a href="./order_page/order.html" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Kenapa Memilih Kami</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Pelayanan Cepat</h3>
                    <p>Pakaian bersih kembali dalam 24 jam dengan opsi layanan ekspres kami.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Harga Terjangkau</h3>
                    <p>Harga bersaing dengan paket langganan untuk lebih hemat dalam penggunaan rutin.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✨</div>
                    <h3>Jaminan Kualitas</h3>
                    <p>Jaminan 100% kepuasan atau kami akan mencuci ulang tanpa biaya tambahan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Services Section -->
    <section class="services">
        <div class="container">
            <h2 class="section-title">Layanan Populer</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        👕
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Cuci & Lipat <span class="popular-tag">Populer</span></h3>
                        <div class="service-price">Mulai dari Rp7.000/kg</div>
                        <p class="service-description">Layanan standar kami untuk mencuci, mengeringkan, dan melipat pakaian. Cocok untuk kebutuhan harian Anda dengan deterjen dan pewangi premium.</p>
                        <a href="#" class="service-button">Pilih</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        👔
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Dry Cleaning</h3>
                        <div class="service-price">Mulai dari Rp20.000/item</div>
                        <p class="service-description">Layanan dry cleaning profesional untuk pakaian khusus, baju formal, dan bahan sensitif yang membutuhkan perawatan ekstra.</p>
                        <a href="#" class="service-button">Pilih</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        👗
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Setrika <span class="popular-tag">Populer</span></h3>
                        <div class="service-price">Mulai dari Rp5.000/item</div>
                        <p class="service-description">Hanya butuh setrika? Kami akan menyetrika pakaian Anda hingga rapi dan siap pakai.</p>
                        <a href="#" class="service-button">Pilih</a>
                    </div>
                </div>
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
