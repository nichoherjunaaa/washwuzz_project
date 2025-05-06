<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuci & Lipat Reguler - WashWuzz Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/service_detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    @include('components.navbar');

    <!-- Service Detail Header -->
    <section class="service-detail-header">
        <div class="container">
            <h1>Cuci & Lipat Reguler</h1>
            <p>Layanan cuci, kering, dan lipat standar untuk kebutuhan laundry sehari-hari Anda dengan kualitas premium dan penanganan yang teliti.</p>
            <div class="price-badge">Mulai dari Rp7.000/kg</div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-image">👕</div>
                <div class="overview-content">
                    <h2>Layanan Standar Kami yang Paling Populer</h2>
                    <p>Cuci & Lipat Reguler adalah layanan standar kami yang paling diminati. Ideal untuk pakaian sehari-hari, handuk, seprai, dan item lainnya yang dapat dicuci dengan mesin.</p>
                    <p>Setiap item akan ditangani dengan hati-hati, dicuci dengan detergen premium, dikeringkan pada suhu yang tepat, dan dilipat atau digantung dengan rapi sesuai jenisnya. Kami memastikan pakaian Anda kembali dalam kondisi terbaik.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <div class="feature-text">
                                <h4>Detergen Premium</h4>
                                <p>Kami menggunakan detergen kualitas tinggi yang efektif membersihkan namun tetap lembut untuk pakaian Anda.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <div class="feature-text">
                                <h4>Pelembut Kain</h4>
                                <p>Semua pakaian diberikan pelembut kain untuk hasil yang lembut dan wangi segar.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <div class="feature-text">
                                <h4>Pemeriksaan Noda</h4>
                                <p>Setiap item diperiksa untuk noda dan diberikan pre-treatment bila diperlukan.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <div class="feature-text">
                                <h4>Pengemasan Rapi</h4>
                                <p>Pakaian dilipat dengan rapi dan dikemas dalam tas pelindung khusus.</p>
                            </div>
                        </div>
                    </div>

                    <a href="../checkout_page/checkout.html" class="order-button">Pesan Layanan Ini</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title">Bagaimana Kami Bekerja</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Penjemputan</h3>
                    <p>Jadwalkan penjemputan melalui aplikasi atau situs web kami. Driver kami akan menjemput pakaian kotor Anda sesuai waktu yang Anda pilih.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Pencucian</h3>
                    <p>Pakaian Anda akan diperiksa, disortir sesuai jenisnya, dan dicuci menggunakan detergen premium dan teknik yang tepat.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Pengeringan & Pelipatan</h3>
                    <p>Pakaian dikeringkan pada suhu yang sesuai, lalu dilipat atau digantung dengan rapi sesuai jenis pakaian.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Pemeriksaan Kualitas</h3>
                    <p>Setiap item melewati tahap pemeriksaan kualitas untuk memastikan kebersihan dan kerapian sesuai standar kami.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <h3>Pengemasan</h3>
                    <p>Pakaian Anda dikemas dalam tas pelindung khusus untuk menjaga kebersihan selama pengiriman.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <h3>Pengantaran</h3>
                    <p>Pakaian bersih Anda diantarkan kembali ke alamat Anda sesuai dengan waktu yang telah dijadwalkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services -->
    <section class="additional-services">
        <div class="container">
            <h2 class="section-title">Tambahkan Layanan</h2>
            <div class="services-list">
                <div class="add-on-service">
                    <div class="add-on-icon">🧴</div>
                    <h3>Detergen Hipoalergenik</h3>
                    <p>Cocok untuk kulit sensitif dan bebas pewangi</p>
                    <div class="add-on-price">+ Rp3.000/kg</div>
                    <a href="#" class="add-button">Tambahkan</a>
                </div>
                <div class="add-on-service">
                    <div class="add-on-icon">👖</div>
                    <h3>Setrika Ekstra</h3>
                    <p>Setrika premium untuk hasil yang lebih rapi</p>
                    <div class="add-on-price">+ Rp5.000/kg</div>
                    <a href="#" class="add-button">Tambahkan</a>
                </div>
                <div class="add-on-service">
                    <div class="add-on-icon">⏱️</div>
                    <h3>Layanan Ekspres</h3>
                    <p>Selesai dalam 24 jam</p>
                    <div class="add-on-price">+ Rp15.000/kg</div>
                    <a href="#" class="add-button">Tambahkan</a>
                </div>
                <div class="add-on-service">
                    <div class="add-on-icon">🦠</div>
                    <h3>Sanitasi Ekstra</h3>
                    <p>Disinfeksi tambahan untuk membunuh kuman dan bakteri</p>
                    <div class="add-on-price">+ Rp10.000/kg</div>
                    <a href="#" class="add-button">Tambahkan</a>
                </div>
                <div class="add-on-service">
                    <div class="add-on-icon">🧳</div>
                    <h3>Pengemasan Premium</h3>
                    <p>Pakaian dikemas dalam kemasan eksklusif</p>
                    <div class="add-on-price">+ Rp8.000/pesanan</div>
                    <a href="#" class="add-button">Tambahkan</a>
                </div>
                <div class="add-on-service">
                    <div class="add-on-icon">🔍</div>
                    <h3>Pemeriksaan Reparasi</h3>
                    <p>Identifikasi kerusakan kecil pada pakaian</p>
                    <div class="add-on-price">+ Rp5.000/pesanan</div>
                    <a href="#" class="add-button">Tambahkan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">Berapa lama waktu yang dibutuhkan untuk layanan cuci lipat reguler?</div>
                    <div class="faq-answer">Layanan cuci lipat reguler kami membutuhkan waktu 48 jam dari penjemputan hingga pengantaran. Jika Anda membutuhkan waktu yang lebih cepat, Anda dapat memilih layanan ekspres kami yang selesai dalam 24 jam.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Apakah ada batasan jenis pakaian untuk layanan ini?</div>
                    <div class="faq-answer">Layanan cuci lipat reguler cocok untuk sebagian besar pakaian sehari-hari seperti kaos, celana, seprai, dan handuk. Untuk pakaian yang memerlukan perawatan khusus seperti jas, gaun, atau kain sutra, kami sarankan menggunakan layanan dry cleaning kami.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Bagaimana jika ada pakaian yang hilang?</div>
                    <div class="faq-answer">Kami sangat berhati-hati dalam menangani setiap item pakaian. Jika ada item yang hilang, silakan hubungi tim layanan pelanggan kami dalam waktu 48 jam setelah pengantaran, dan kami akan melakukan penyelidikan serta memberikan kompensasi sesuai dengan kebijakan kami.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Apakah ada biaya tambahan untuk penjemputan dan pengantaran?</div>
                    <div class="faq-answer">Tidak ada biaya tambahan untuk penjemputan dan pengantaran dalam radius 5 km dari lokasi kami. Untuk jarak lebih dari 5 km, akan dikenakan biaya tambahan sebesar Rp2.000/km.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Detergen apa yang digunakan untuk mencuci pakaian?</div>
                    <div class="faq-answer">Kami menggunakan detergen premium berkualitas tinggi yang efektif membersihkan namun tetap lembut untuk pakaian Anda. Untuk pelanggan dengan kulit sensitif, kami juga menyediakan opsi detergen hipoalergenik dengan biaya tambahan.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Bisakah saya meminta instruksi khusus untuk pakaian tertentu?</div>
                    <div class="faq-answer">Tentu saja! Anda dapat menambahkan instruksi khusus pada saat pemesanan, seperti "jangan gunakan pelembut kain" atau "jangan disetrika". Tim kami akan mengikuti instruksi Anda dengan seksama.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Siap untuk Bebas dari Beban Cucian?</h2>
                <p>Jadwalkan penjemputan sekarang dan nikmati pakaian bersih tanpa harus repot. Pelanggan baru mendapatkan diskon 15% untuk pesanan pertama!</p>
                <div class="cta-buttons">
                    <a href="../order_page/order.html" class="cta-primary">Pesan Sekarang</a>
                    <a href="../contact_page/contact.html" class="cta-secondary">Hubungi Kami</a>
                </div>
            </div>
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

        // FAQ Accordion functionality
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isOpen = answer.style.display === 'block';
                
                // Close all answers first
                document.querySelectorAll('.faq-answer').forEach(ans => {
                    ans.style.display = 'none';
                });
                
                // Toggle current answer
                answer.style.display = isOpen ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>