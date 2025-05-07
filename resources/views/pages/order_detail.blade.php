<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan - WashWuzz</title>
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order_detail.css') }}">
</head>
<body>
    <!-- Header -->
    @include('components.navbar');

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Detail Pesanan</h1>
            <p>Lihat informasi lengkap tentang pesanan Anda dan pantau statusnya secara real-time.</p>
        </div>
    </section>

    <!-- Order Detail Section -->
    <section class="order-detail-section">
        <div class="container">
            <a href="../order_page/order.html" class="back-link">
                ← Kembali ke Daftar Pesanan
            </a>
            
            <div class="order-header">
                <div>
                    <div class="order-id">#WW78523</div>
                    <div class="order-date">Dipesan pada: 21 April 2025, 14:30 WIB</div>
                </div>
                <div class="order-actions">
                    <button class="btn">Lacak Pesanan</button>
                    <button class="btn btn-outline">Hubungi Kami</button>
                </div>
            </div>

            <!-- Order Status Timeline -->
            <div class="detail-card">
                <h3>Status Pesanan</h3>
                <div class="progress-track">
                    <div class="progress-bar" style="width: 60%;"></div>
                    
                    <div class="track-step completed">
                        <div class="step-icon">✓</div>
                        <div class="step-name">Diterima</div>
                    </div>
                    
                    <div class="track-step completed">
                        <div class="step-icon">✓</div>
                        <div class="step-name">Dijemput</div>
                    </div>
                    
                    <div class="track-step active">
                        <div class="step-icon">3</div>
                        <div class="step-name">Diproses</div>
                    </div>
                    
                    <div class="track-step">
                        <div class="step-icon">4</div>
                        <div class="step-name">Siap Antar</div>
                    </div>
                    
                    <div class="track-step">
                        <div class="step-icon">5</div>
                        <div class="step-name">Selesai</div>
                    </div>
                </div>
                
                <p style="text-align: center; color: #0d47a1;">Estimasi selesai: 23 April 2025, 17:00 WIB</p>
            </div>

            <!-- Order Items -->
            <div class="detail-card">
                <h3>Item Laundry</h3>
                <div class="items-list">
                    <div class="item-row header">
                        <div>Item</div>
                        <div>Layanan</div>
                        <div>Jumlah</div>
                        <div>Subtotal</div>
                    </div>
                    
                    <div class="item-row">
                        <div>Baju</div>
                        <div>Cuci & Lipat</div>
                        <div>2 kg</div>
                        <div>Rp60.000</div>
                    </div>
                    
                    <div class="item-row">
                        <div>Celana</div>
                        <div>Cuci & Lipat</div>
                        <div>2 kg</div>
                        <div>Rp60.000</div>
                    </div>
                    
                    <div class="item-row">
                        <div>Seprai</div>
                        <div>Cuci & Lipat</div>
                        <div>1 kg</div>
                        <div>Rp30.000</div>
                    </div>
                </div>
                
                <div class="service-notes">
                    <p>Catatan: Mohon perhatikan ekstra untuk noda pada seprai.</p>
                </div>
            </div>

            <!-- Order Info -->
            <div class="detail-card">
                <h3>Informasi Pesanan</h3>
                <div class="detail-row">
                    <span class="detail-label">Nama Pemesan</span>
                    <span class="detail-value">Budi Santoso</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Nomor Telepon</span>
                    <span class="detail-value">+62 812-3456-7890</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Waktu Penjemputan</span>
                    <span class="detail-value">21 April 2025, 16:00-18:00 WIB</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Waktu Pengantaran</span>
                    <span class="detail-value">23 April 2025, 16:00-18:00 WIB</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Layanan</span>
                    <span class="detail-value">Reguler (2 hari)</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Alamat</span>
                    <span class="detail-value">Jl. Paingan No. 15, Maguwoharjo, Depok, Sleman</span>
                </div>
            </div>

            <!-- Payment Info -->
            <div class="detail-card">
                <h3>Informasi Pembayaran</h3>
                <div class="detail-row">
                    <span class="detail-label">Metode Pembayaran</span>
                    <div class="payment-method">
                        <div class="payment-icon">💳</div>
                        <span class="detail-value">BCA Virtual Account</span>
                    </div>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Status Pembayaran</span>
                    <span class="detail-value highlight">Lunas</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Subtotal</span>
                    <span class="detail-value">Rp150.000</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Biaya Pengantaran</span>
                    <span class="detail-value">Rp0 (Free)</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Total</span>
                    <span class="detail-value" style="font-size: 1.2rem; color: #2c7bfe;">Rp150.000</span>
                </div>
            </div>

            <!-- Action buttons -->
            <div style="text-align: center; margin-top: 3rem;">
                <button class="btn">Unduh Invoice</button>
                <button class="btn btn-outline" style="margin-left: 1rem;">Pesan Lagi</button>
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
    </script>
</body>
</html>