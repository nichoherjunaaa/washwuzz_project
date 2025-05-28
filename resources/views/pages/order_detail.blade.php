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
                    <div class="order-id">{{ $transaction->order_id }}</div>
                    <div class="order-date">Dipesan pada: {{ $transaction->created_at }}</div>
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
                    <div class="progress-bar" style="width: 40%;"></div>
                    <div class="track-step completed">
                        <div class="step-icon">✓</div>
                        <div class="step-name">Menunggu</div>
                    </div>
                    <div class="track-step completed">
                        <div class="step-icon">✓</div>
                        <div class="step-name">Diterima</div>
                    </div>
                    <div class="track-step completed">
                        <div class="step-icon">✓</div>
                        <div class="step-name">Dijemput</div>
                    </div>
                    <div class="track-step">
                        <div class="step-icon">3</div>
                        <div class="step-name">Diproses</div>
                    </div>
                    <div class="track-step">
                        <div class="step-icon">4</div>
                        <div class="step-name">Selesai</div>
                    </div>

                    <div class="track-step">
                        <div class="step-icon">5</div>
                        <div class="step-name">Terkirim</div>
                    </div>
                </div>

                <p style="text-align: center; color: #0d47a1;">Estimasi selesai: 23 April 2025, 17:00 WIB</p>
            </div>

            <!-- Order Info -->
            <div class="detail-card">
                <h3>Informasi Pesanan</h3>
                <div class="detail-row">
                    <span class="detail-label">Nama Pemesan</span>
                    <span
                        class="detail-value">{{$transaction->user->firstname . ' ' . $transaction->user->lastname}}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Nomor Telepon</span>
                    <span class="detail-value">{{ $transaction->user->phone_number }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Waktu Penjemputan</span>
                    <span class="detail-value">{{ $transaction->pickup_time }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Layanan</span>
                    <span class="detail-value">{{ $transaction->service->name }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Alamat</span>
                    <span class="detail-value">{{ $transaction->address }}</span>
                </div>
            </div>

            <div class="detail-card">
                <div class="items-list">
                    <div class="item-row header">
                        {{-- <div>Item</div> --}}
                        <div>Layanan</div>
                        <div>Jumlah</div>
                        <div>Subtotal</div>
                        <div>Status Pembayaran</div>
                    </div>

                    <div class="item-row">
                        <div>{{ $transaction->service->name }}</div>
                        <div>{{ $transaction->quantity ?? '-' }}</div>
                        <div>{{ $transaction->amount }}</div>
                        <div>{{ $transaction->payment_status }}</div>
                    </div>
                </div>

                <div class="service-notes">
                    <p>Catatan: {{ $transaction->notes }}</p>
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
    </script>
</body>

</html>