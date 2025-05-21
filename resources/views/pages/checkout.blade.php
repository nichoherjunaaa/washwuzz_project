<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - WashWuzz</title>
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    @include('components.navbar')

    <section class="page-header">
        <div class="container">
            <h1>Checkout</h1>
            <p>Selesaikan pesanan laundry Anda dengan cepat dan mudah.</p>
        </div>
    </section>

    <section class="checkout-section">
        <div class="container">
            <div class="checkout-container">
                    <form method="POST" action="{{ route('checkout-process') }}" class="checkout-form">
                        @csrf
                    <!-- Pickup/Delivery Information -->
                    <div class="checkout-card">
                        <h3>Alamat Penjemputan & Pengantaran</h3>
                        <div class="form-group">
                            <label for="address">Alamat Lengkap</label>
                            <input type="text" id="address" name="address" class="form-control" required
                                placeholder="Masukkan alamat lengkap">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="district">Kecamatan</label>
                                <input type="text" id="district" name="district" class="form-control" required
                                    placeholder="Masukkan kecamatan">
                            </div>
                            <div class="form-group">
                                <label for="city">Kota</label>
                                <input type="text" id="city" name="city" class="form-control" required
                                    placeholder="Masukkan kota">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="province">Provinsi</label>
                                <input type="text" id="province" name="province" class="form-control" required
                                    placeholder="Masukkan provinsi">
                            </div>
                            <div class="form-group">
                                <label for="postalCode">Kode Pos</label>
                                <input type="text" id="postalCode" name="postal_code" class="form-control" required
                                    placeholder="Masukkan kode pos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="notes">Catatan</label>
                            <textarea id="notes" name="notes" class="form-control" rows="3"
                                placeholder="Tambahkan catatan"></textarea>
                        </div>
                    </div>

                    <!-- Pickup Options -->
                    <div class="checkout-card">
                        <h3>Opsi Penjemputan</h3>
                        <div class="pickup-options">
                            <div class="pickup-option selected">
                                <input type="radio" name="pickup_option" id="pickup-today" value="today" checked>
                                <span class="pickup-icon"><i class="fa-solid fa-truck"></i></span>
                                <div class="pickup-details">
                                    <div class="pickup-title">Penjemputan Hari Ini</div>
                                    <div class="pickup-description">Dijemput dalam 1-3 jam ke depan</div>
                                </div>
                                <div class="pickup-price">Gratis</div>
                            </div>
                            <div class="pickup-option">
                                <input type="radio" name="pickup_option" id="pickup-scheduled" value="scheduled">
                                <span class="pickup-icon"><i class="fa-regular fa-calendar"></i></span>
                                <div class="pickup-details">
                                    <div class="pickup-title">Pick Up Terjadwal</div>
                                    <div class="pickup-description">Pilih tanggal dan waktu spesifik</div>
                                </div>
                                <div class="pickup-price">Gratis</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Waktu Penjemputan</label>
                            <div class="time-slots">
                                <div class="time-slot selected">08:00 - 10:00</div>
                                <div class="time-slot">10:00 - 12:00</div>
                                <div class="time-slot">12:00 - 14:00</div>
                                <div class="time-slot">14:00 - 16:00</div>
                                <div class="time-slot">16:00 - 18:00</div>
                                <div class="time-slot">18:00 - 20:00</div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden Fields -->
                    <input type="hidden" name="pickup_time" id="pickup_time_input" value="08:00 - 10:00">
                    <input type="hidden" name="service_id" value="1"> <!-- Ubah sesuai kebutuhan -->
                    <input type="hidden" name="quantity" value="0">
                    <input type="hidden" name="amount" value="0">
                    <input type="hidden" name="payment_status" value="">
                    <input type="hidden" name="payment_method" value="">
                    <input type="hidden" name="service_status" value="menunggu">
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit" class="checkout-btn">Konfirmasi Pesanan</button>
                </form>
            </div>
        </div>
    </section>

    @include('components.footer')

    <script>
        const timeSlots = document.querySelectorAll('.time-slot');
        const pickupTimeInput = document.getElementById('pickup_time_input');

        timeSlots.forEach(slot => {
            slot.addEventListener('click', () => {
                timeSlots.forEach(s => s.classList.remove('selected'));
                slot.classList.add('selected');
                pickupTimeInput.value = slot.textContent.trim();
            });
        });

        const pickupOptions = document.querySelectorAll('.pickup-option');
        pickupOptions.forEach(option => {
            option.addEventListener('click', () => {
                pickupOptions.forEach(o => o.classList.remove('selected'));
                option.classList.add('selected');
                option.querySelector('input[type="radio"]').checked = true;
            });
        });

        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');
        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                mainNav.classList.toggle('active');
            });
        }
    </script>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                title: 'Pesanan berhasil dibuat',
                icon: 'success',
            });
        </script>
    @endif
</body>

</html>