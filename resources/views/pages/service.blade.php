<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - WashWuzz Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    <!-- Header -->
    @include('components.navbar')

    <!-- Judul Halaman -->
    <section class="page-header">
        <div class="container">
            <h1>Jelajahi Layanan Laundry Kami</h1>
            <p>Dari kebutuhan laundry harian hingga perawatan pakaian khusus, kami memiliki layanan yang tepat untuk
                Anda. Semua dengan layanan antar-jemput gratis ke depan pintu Anda.</p>
        </div>
    </section>

    <!-- Bagian Layanan -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
            <p class="section-subtitle">Pilih dari berbagai layanan laundry dan dry cleaning kami, semua dirancang untuk
                mempermudah hidup Anda dan menjaga pakaian Anda tetap terbaik.</p>

            <div class="services-grid">
                @foreach ($services as $service)
                    <div class="service-card">
                        <div class="service-image">
                            <img src="{{ $service['image'] ?? 'default-image.png' }}" alt="{{ $service['name'] }}">
                        </div>
                        <div class="service-content">
                            <div class="service-name">
                                <span>{{ $service['name'] }}</span>
                            </div>
                            <div class="service-price">Mulai dari Rp{{ number_format($service['price'], 
                            0, ',', '.') }}/{{ $service['name'] == 'Cuci Regular' ? 'kg' : 'item' }}</div>
                            <p class="service-description">{{ $service['description'] }}</p>
                            <a href="{{ url('/service/detail/' . $service['id']) }}" class="service-button">Pilih</a>
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
                    <p>Di FreshPress, kami bangga dengan proses pembersihan yang teliti untuk memberikan hasil terbaik
                        bagi pakaian Anda:</p>
                    <p><strong>1. Pemeriksaan:</strong> Setiap item diperiksa untuk noda, kerusakan, dan instruksi
                        perawatan khusus.</p>
                    <p><strong>2. Pra-perlakuan:</strong> Noda diperlakukan terlebih dahulu dengan metode yang sesuai
                        dengan jenis kain.</p>
                    <p><strong>3. Pencucian:</strong> Item dicuci atau dry cleaning sesuai label perawatan dan
                        kebutuhan.</p>
                    <p><strong>4. Pemeriksaan Kualitas:</strong> Setelah dicuci, setiap item diperiksa untuk memastikan
                        kebersihan.</p>
                    <p><strong>5. Penyelesaian:</strong> Pakaian dikeringkan, disetrika, dilipat, atau digantung sesuai
                        kebutuhan.</p>
                    <p><strong>6. Pengemasan:</strong> Pakaian bersih dikemas rapi untuk perlindungan saat pengiriman.
                    </p>
                </div>

                <!-- FAQ -->
                <div class="info-block">
                    <h3>Pertanyaan yang Sering Diajukan</h3>
                    <div class="faq-item">
                        <div class="faq-question">Bagaimana cara penjemputan dan pengantaran bekerja?</div>
                        <div class="faq-answer">Cukup jadwalkan waktu penjemputan melalui aplikasi atau situs kami.
                            Driver kami akan menjemput pakaian Anda dan mengantarkannya kembali setelah dibersihkan.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Bagaimana jika saya memiliki instruksi khusus untuk item tertentu?
                        </div>
                        <div class="faq-answer">Anda dapat menambahkan instruksi khusus selama proses pemesanan. Tim
                            kami akan mengikuti permintaan perawatan Anda.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Bagaimana harga dihitung?</div>
                        <div class="faq-answer">Cuci Lipat dihitung berdasarkan berat, sedangkan dry cleaning dan
                            layanan khusus dihitung per item. Anda akan melihat harga penuh sebelum konfirmasi.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Detergen apa yang digunakan?</div>
                        <div class="faq-answer">Kami menggunakan detergen ramah lingkungan berkualitas tinggi sebagai
                            standar. Pilihan hipoalergenik dan bebas pewangi juga tersedia atas permintaan.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Apakah ada pesanan minimum?</div>
                        <div class="faq-answer">Untuk layanan Cuci Lipat, pesanan minimum adalah 10 kg. Tidak ada
                            minimum untuk dry cleaning atau layanan khusus.</div>
                    </div>
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