<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan - WashWuzz</title>
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    <!-- Header -->
    @include('components.navbar');

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Daftar Pesanan Anda</h1>
            <p>Kelola dan pantau status semua pesanan laundry Anda di satu tempat. Lihat riwayat pesanan, status
                pengerjaan, dan detail lengkap setiap pesanan.</p>
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
                    <button><i class="fa fa-search"></i></button>
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
                        <th style="text-align: center">No. Pesanan</th>
                        <th style="text-align: center">Tanggal</th>
                        <th style="text-align: center">Layanan</th>
                        <th style="text-align: center">Berat</th>
                        <th style="text-align: center">Total</th>
                        <th style="text-align: center">Status</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($transactions as $transaction)
                        <tr>
                            <td style="text-align: center">{{ $transaction->order_id }}</td>
                            <td style="text-align: center">{{ $transaction->created_at }}</td>
                            <td style="text-align: center">{{ $transaction->service->name }}</td>
                            <td style="text-align: center">
                                {{ $transaction->quantity !== null && $transaction->quantity !== 0 ? $transaction->quantity . ' kg' : '-' }}
                            </td>
                            <td style="text-align: center">
                                {{ $transaction->amount !== null && $transaction->amount !== 0 ? 'Rp' . number_format($transaction->amount, 0, ',', '.') : '-' }}
                            </td>
                            <td style="text-align: center">
                                <span class="status-badge status-{{ $transaction->service_status ?? 'unknown' }}">
                                    {{ $transaction->service_status ?? 'Unknown' }}
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons" style="display: flex; justify-content: center; gap: 0.5rem;">
                                    <button class="btn"
                                        onclick="window.location.href = '/order/detail/{{ $transaction->id }}'">
                                        Lihat Detail
                                    </button>

                                    @if ($transaction->payment_status != 'sukses' && $transaction->amount > 0)
                                        <button class="btn btn-outline"
                                            onclick="window.location.href = '{{ route('order.pay', $transaction->id) }}'">
                                            Bayar
                                        </button>
                                    @endif
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align: center;">Belum ada pesanan</td>
                        </tr>
                    @endforelse

                    {{-- <td>#WW78523</td>
                    <td>21 Apr 2025</td>
                    <td>Cuci & Lipat</td>
                    <td>5 kg</td>
                    <td>Rp150.000</td>
                    <td><span class="status-badge status-processing">Diproses</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn" onclick="window.location.href = '/order/detail' ">Lihat
                                Detail</button>
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
                    </tr> --}}
                </tbody>
            </table>

            <!-- Empty State - Will show when no orders -->
            <div class="no-orders" style="display: none;">
                <h3>Belum Ada Pesanan</h3>
                <p>Anda belum memiliki pesanan laundry. Mulai pesanan pertama Anda sekarang untuk menikmati layanan
                    laundry berkualitas dari WashWuzz!</p>
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