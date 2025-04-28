<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan - WashWuzz</title>
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
</head>
<body>
    <!-- Header -->
    @include('components.navbar');

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Daftar Pesanan Anda</h1>
            <p>Kelola dan pantau status semua pesanan laundry Anda di satu tempat. Lihat riwayat pesanan, status pengerjaan, dan detail lengkap setiap pesanan.</p>
        </div>
    </section>

    <!-- Order List Section -->
    <section class="order-list-section">
        <div class="container">
            <h2 class="section-title">Pesanan Saya</h2>
            
            <!-- Filters and Search -->
            <div class="order-filters">
                <div class="search-box">
                    <input type="text" placeholder="Cari nomor pesanan...">
                    <button>🔍</button>
                </div>
                <div class="filter-dropdown">
                    <select>
                        <option value="">Semua Status</option>
                        <option value="pending">Menunggu</option>
                        <option value="processing">Diproses</option>
                        <option value="completed">Selesai</option>
                        <option value="delivered">Terkirim</option>
                        <option value="cancelled">Dibatalkan</option>
                    </select>
                    <select>
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                    </select>
                </div>
            </div>
            
            <!-- Orders Table -->
            <table class="order-table">
                <thead>
                    <tr>
                        <th>No. Pesanan</th>
                        <th>Tanggal</th>
                        <th>Layanan</th>
                        <th>Jumlah Item</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#WW78523</td>
                        <td>21 Apr 2025</td>
                        <td>Cuci & Lipat</td>
                        <td>5 kg</td>
                        <td>Rp150.000</td>
                        <td><span class="status-badge status-processing">Diproses</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn" onclick="window.location.href = '../order_detail/order_detail.html' ">Lihat Detail</button>
                                <button class="btn btn-outline">Lacak</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#WW78490</td>
                        <td>19 Apr 2025</td>
                        <td>Dry Cleaning</td>
                        <td>3 item</td>
                        <td>Rp225.000</td>
                        <td><span class="status-badge status-completed">Selesai</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn">Lihat Detail</button>
                                <button class="btn btn-outline">Lacak</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#WW78350</td>
                        <td>15 Apr 2025</td>
                        <td>Cuci & Setrika</td>
                        <td>8 item</td>
                        <td>Rp400.000</td>
                        <td><span class="status-badge status-delivered">Terkirim</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn">Lihat Detail</button>
                                <button class="btn btn-outline">Pesan Lagi</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#WW78215</td>
                        <td>10 Apr 2025</td>
                        <td>Cuci & Lipat</td>
                        <td>4 kg</td>
                        <td>Rp120.000</td>
                        <td><span class="status-badge status-delivered">Terkirim</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn">Lihat Detail</button>
                                <button class="btn btn-outline">Pesan Lagi</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#WW78102</td>
                        <td>05 Apr 2025</td>
                        <td>Cuci & Setrika</td>
                        <td>6 item</td>
                        <td>Rp300.000</td>
                        <td><span class="status-badge status-cancelled">Dibatalkan</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn">Lihat Detail</button>
                                <button class="btn btn-outline">Pesan Lagi</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Empty State - Will show when no orders -->
            <div class="no-orders" style="display: none;">
                <h3>Belum Ada Pesanan</h3>
                <p>Anda belum memiliki pesanan laundry. Mulai pesanan pertama Anda sekarang untuk menikmati layanan laundry berkualitas dari WashWuzz!</p>
                <a href="#" class="cta-button">Pesan Sekarang</a>
            </div>
            
            <!-- Pagination -->
            <div class="pagination">
                <button>⟨</button>
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button>⟩</button>
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