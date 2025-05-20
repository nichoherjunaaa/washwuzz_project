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
    <!-- Header -->
    @include('components.navbar');

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Checkout</h1>
            <p>Selesaikan pesanan laundry Anda dengan cepat dan mudah.</p>
        </div>
    </section>

    <!-- Checkout Section -->
    <section class="checkout-section">
        <div class="container">
            <div class="checkout-container">
                <div class="checkout-form">
                    <!-- Customer Information -->
                    <div class="checkout-card">
                        {{-- <h3>Informasi Pelanggan</h3> --}}
                        {{-- <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">Nama Depan</label>
                                <input type="text" id="firstName" class="form-control"
                                    placeholder="Masukkan nama depan">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Nama Belakang</label>
                                <input type="text" id="lastName" class="form-control"
                                    placeholder="Masukkan nama belakang">
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="contoh@email.com">
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="phone">Nomor Handphone</label>
                            <input type="tel" id="phone" class="form-control" placeholder="+62 812-3456-7890">
                        </div> --}}
                    </div>

                    <!-- Pickup/Delivery Information -->
                    <div class="checkout-card">
                        <h3>Alamat Penjemputan & Pengantaran</h3>
                        <div class="form-group">
                            <label for="address">Alamat Lengkap</label>
                            <input type="text" id="address" class="form-control" placeholder="Masukkan alamat lengkap">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="district">Kecamatan</label>
                                <input type="text" id="district" class="form-control" placeholder="Masukkan kecamatan">
                            </div>
                            <div class="form-group">
                                <label for="city">Kota</label>
                                <input type="text" id="city" class="form-control" placeholder="Masukkan kota">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="province">Provinsi</label>
                                <input type="text" id="province" class="form-control" placeholder="Masukkan provinsi">
                            </div>
                            <div class="form-group">
                                <label for="postalCode">Kode Pos</label>
                                <input type="text" id="postalCode" class="form-control" placeholder="Masukkan kode pos">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="notes">Catatan</label>
                            <textarea id="notes" class="form-control" rows="3"
                                placeholder="Tambahkan catatan"></textarea>
                        </div>
                    </div>

                    <!-- Pickup Options -->
                    <div class="checkout-card">
                        <h3>Opsi Penjemputan</h3>
                        <div class="pickup-options">
                            <div class="pickup-option selected">
                                <input type="radio" name="pickup" id="pickup-today" checked>
                                <span class="pickup-icon"><i class="fa-solid fa-truck"></i></span>
                                <div class="pickup-details">
                                    <div class="pickup-title">Penjemputan Hari Ini</div>
                                    <div class="pickup-description">Dijemput dalam 1-3 jam ke depan</div>
                                </div>
                                <div class="pickup-price">Gratis</div>
                            </div>
                            <div class="pickup-option">
                                <input type="radio" name="pickup" id="pickup-scheduled">
                                <span class="pickup-icon"><i class="fa-regular fa-calendar"></i></span>
                                <div class="pickup-details">
                                    <div class="pickup-title">Pick Up</div>
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
                    <button class="checkout-btn">Konfirmasi Pesanan</button>
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

        // Select time slot
        const timeSlots = document.querySelectorAll('.time-slot');
        timeSlots.forEach(slot => {
            slot.addEventListener('click', () => {
                timeSlots.forEach(s => s.classList.remove('selected'));
                slot.classList.add('selected');
            });
        });

        // Select pickup option
        const pickupOptions = document.querySelectorAll('.pickup-option');
        pickupOptions.forEach(option => {
            option.addEventListener('click', () => {
                pickupOptions.forEach(o => o.classList.remove('selected'));
                option.classList.add('selected');
                const radio = option.querySelector('input[type="radio"]');
                radio.checked = true;
            });
        });

        // Select service option
        const serviceOptions = document.querySelectorAll('.service-option');
        serviceOptions.forEach(option => {
            option.addEventListener('click', () => {
                serviceOptions.forEach(o => o.classList.remove('selected'));
                option.classList.add('selected');
            });
        });

        // Select payment method
        const paymentMethods = document.querySelectorAll('.payment-method');
        paymentMethods.forEach(method => {
            method.addEventListener('click', () => {
                paymentMethods.forEach(m => m.classList.remove('selected'));
                method.classList.add('selected');
                const radio = method.querySelector('input[type="radio"]');
                radio.checked = true;
            });
        });
    </script>
</body>

</html>