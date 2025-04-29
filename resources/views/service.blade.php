<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - WashWuzz Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
</head>
<body>
    <!-- Header -->
    @include('components.navbar')

    <!-- Judul Halaman -->
    <section class="page-header">
        <div class="container">
            <h1>Jelajahi Layanan Laundry Kami</h1>
            <p>Dari kebutuhan laundry harian hingga perawatan pakaian khusus, kami memiliki layanan yang tepat untuk Anda. Semua dengan layanan antar-jemput gratis ke depan pintu Anda.</p>
        </div>
    </section>

    <!-- Kategori Layanan -->
    <section class="service-categories">
        <div class="container">
            <div class="category-tabs">
                <div class="category-tab active">Semua Layanan</div>
                <div class="category-tab">Cuci Lipat</div>
                <div class="category-tab">Dry Cleaning</div>
                <div class="category-tab">Setrika</div>
                <div class="category-tab">Perawatan Premium</div>
            </div>
        </div>
    </section>

    <!-- Bagian Layanan -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
            <p class="section-subtitle">Pilih dari berbagai layanan laundry dan dry cleaning kami, semua dirancang untuk mempermudah hidup Anda dan menjaga pakaian Anda tetap terbaik.</p>
            
            {{-- <div class="services-grid">
                
                <!-- Cuci & Lipat Reguler -->
                <div class="service-card">
                    <div class="service-image">👕</div>
                    <div class="service-content">
                        <div class="service-name">
                            <span>Cuci & Lipat Reguler</span>
                            <span class="popular-tag">Populer</span>
                        </div>
                        <div class="service-price">Mulai dari Rp7.000/kg</div>
                        <p class="service-description">Layanan cuci, kering, dan lipat standar untuk kebutuhan laundry sehari-hari Anda.</p>
                        <ul class="service-features">
                            <li>Detergen premium termasuk</li>
                            <li>Pelembut kain tersedia</li>
                            <li>Dilipat dan diatur rapi</li>
                        </ul>
                        <a href="../service_detail/service_detail.html" class="service-button">Pilih</a>
                        <a href="#" class="learn-more">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            
                <!-- Dry Cleaning -->
                <div class="service-card">
                    <div class="service-image">🧥</div>
                    <div class="service-content">
                        <div class="service-name">
                            <span>Dry Cleaning</span>
                        </div>
                        <div class="service-price">Mulai dari Rp20.000/item</div>
                        <p class="service-description">Perawatan khusus untuk kain halus dan pakaian formal seperti jas, gaun, dan pakaian kerja.</p>
                        <ul class="service-features">
                            <li>Cocok untuk bahan sensitif</li>
                            <li>Teknologi pembersih non-air</li>
                            <li>Hasil akhir profesional</li>
                        </ul>
                        <a href="#" class="service-button">Pilih</a>
                        <a href="#" class="learn-more">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            
                <!-- Layanan Setrika Saja -->
                <div class="service-card">
                    <div class="service-image">🧼</div>
                    <div class="service-content">
                        <div class="service-name">
                            <span>Setrika Saja</span>
                        </div>
                        <div class="service-price">Mulai dari Rp5.000/kg</div>
                        <p class="service-description">Hanya butuh setrika? Kami akan menyetrika pakaian Anda hingga rapi dan siap pakai.</p>
                        <ul class="service-features">
                            <li>Disetrika dengan uap</li>
                            <li>Dilipat atau digantung sesuai permintaan</li>
                            <li>Tanpa kerutan</li>
                        </ul>
                        <a href="#" class="service-button">Pilih</a>
                        <a href="#" class="learn-more">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            
                <!-- Perawatan Premium -->
                <div class="service-card">
                    <div class="service-image">👗</div>
                    <div class="service-content">
                        <div class="service-name">
                            <span>Perawatan Premium</span>
                        </div>
                        <div class="service-price">Mulai dari Rp40.000/item</div>
                        <p class="service-description">Untuk pakaian desainer, gaun mewah, dan kain spesial yang membutuhkan perhatian ekstra.</p>
                        <ul class="service-features">
                            <li>Dikerjakan oleh ahli</li>
                            <li>Perlindungan warna & tekstur</li>
                            <li>Kemasan eksklusif</li>
                        </ul>
                        <a href="#" class="service-button">Pilih</a>
                        <a href="#" class="learn-more">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            
                <!-- Layanan Ekspres -->
                <div class="service-card">
                    <div class="service-image">⏱️</div>
                    <div class="service-content">
                        <div class="service-name">
                            <span>Ekspres 24 Jam</span>
                        </div>
                        <div class="service-price">Tambahan Rp15.000/kg</div>
                        <p class="service-description">Butuh cepat? Layanan ekspres kami memastikan pakaian Anda bersih dan kembali dalam 24 jam.</p>
                        <ul class="service-features">
                            <li>Prioritas penanganan</li>
                            <li>Cocok untuk kebutuhan mendesak</li>
                            <li>Tersedia untuk semua layanan</li>
                        </ul>
                        <a href="#" class="service-button">Pilih</a>
                        <a href="#" class="learn-more">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div> --}}

            <div class="services-grid">
                @foreach ($services as $service)
                    <div class="service-card">
                        <div class="service-image">
                            <!-- Bisa pakai emoji default, atau pakai gambar dari database kalau ada -->
                            <img src="{{ $service['image'] ?? 'default-image.png' }}" alt="{{ $service['name'] }}" style="width: 100px; height: 100px;">
                        </div>
                        <div class="service-content">
                            <div class="service-name">
                                <span>{{ $service['name'] }}</span>
                                @if (!empty($service['popular']) && $service['popular'])
                                    <span class="popular-tag">Populer</span>
                                @endif
                            </div>
                            <div class="service-price">Mulai dari Rp{{ number_format($service['price'], 0, ',', '.') }}/{{ $service['unit'] ?? 'item' }}</div>
                            <p class="service-description">{{ $service['description'] }}</p>
                            <ul class="service-features">
                                @if (!empty($service['features']))
                                    @foreach ($service['features'] as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                @endif
                            </ul>
                            <a href="{{ url('/service/' . $service['id']) }}" class="service-button">Pilih</a>
                            <a href="#" class="learn-more">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            
        </div>
    </section>

    <!-- Informasi Tambahan -->
    <section class="additional-info">
        <div class="container">
            <div class="info-grid">
                <!-- Proses -->
                <div class="info-block">
                    <h3>Proses Kami</h3>
                    <p>Di FreshPress, kami bangga dengan proses pembersihan yang teliti untuk memberikan hasil terbaik bagi pakaian Anda:</p>
                    <p><strong>1. Pemeriksaan:</strong> Setiap item diperiksa untuk noda, kerusakan, dan instruksi perawatan khusus.</p>
                    <p><strong>2. Pra-perlakuan:</strong> Noda diperlakukan terlebih dahulu dengan metode yang sesuai dengan jenis kain.</p>
                    <p><strong>3. Pencucian:</strong> Item dicuci atau dry cleaning sesuai label perawatan dan kebutuhan.</p>
                    <p><strong>4. Pemeriksaan Kualitas:</strong> Setelah dicuci, setiap item diperiksa untuk memastikan kebersihan.</p>
                    <p><strong>5. Penyelesaian:</strong> Pakaian dikeringkan, disetrika, dilipat, atau digantung sesuai kebutuhan.</p>
                    <p><strong>6. Pengemasan:</strong> Pakaian bersih dikemas rapi untuk perlindungan saat pengiriman.</p>
                </div>

                <!-- FAQ -->
                <div class="info-block">
                    <h3>Pertanyaan yang Sering Diajukan</h3>
                    <div class="faq-item">
                        <div class="faq-question">Bagaimana cara penjemputan dan pengantaran bekerja?</div>
                        <div class="faq-answer">Cukup jadwalkan waktu penjemputan melalui aplikasi atau situs kami. Driver kami akan menjemput pakaian Anda dan mengantarkannya kembali setelah dibersihkan.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Bagaimana jika saya memiliki instruksi khusus untuk item tertentu?</div>
                        <div class="faq-answer">Anda dapat menambahkan instruksi khusus selama proses pemesanan. Tim kami akan mengikuti permintaan perawatan Anda.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Bagaimana harga dihitung?</div>
                        <div class="faq-answer">Cuci Lipat dihitung berdasarkan berat, sedangkan dry cleaning dan layanan khusus dihitung per item. Anda akan melihat harga penuh sebelum konfirmasi.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Detergen apa yang digunakan?</div>
                        <div class="faq-answer">Kami menggunakan detergen ramah lingkungan berkualitas tinggi sebagai standar. Pilihan hipoalergenik dan bebas pewangi juga tersedia atas permintaan.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Apakah ada pesanan minimum?</div>
                        <div class="faq-answer">Untuk layanan Cuci Lipat, pesanan minimum adalah 10 kg. Tidak ada minimum untuk dry cleaning atau layanan khusus.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ajakan Bertindak -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Siap Nikmati Laundry Bebas Ribet?</h2>
                <p>Bergabunglah dengan ribuan pelanggan puas yang telah membuat hari laundry jadi bebas stres dengan WashWuzz. Pelanggan pertama dapat diskon 15%!</p>
                <div class="cta-buttons">
                    <a href="#" class="cta-primary">Jadwalkan Penjemputan</a>
                    <a href="#" class="cta-secondary">Unduh Aplikasi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');
        menuToggle.addEventListener('click', () => {
            mainNav.classList.toggle('active');
        });
    </script>
</body>
</html>