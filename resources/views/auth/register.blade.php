<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - WashWuzz Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <!-- Header -->
    @include('components.navbar')

    <!-- Register Section -->
    <section class="register-section">
        <div class="container">
            <div class="register-container">
                <div class="register-header">
                    <h1>Daftar</h1>
                    <p>Bergabung dengan WashWuzz untuk pengalaman laundry lebih baik</p>
                </div>
                <form id="registerForm" method="POST" action="{{ route('register-process') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstname">Nama Depan</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Masukkan nama depan"
                                required>
                            @error('firstname')
                                <small class="error">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="lastname">Nama Belakang</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Masukkan nama belakang"
                                required>
                            @error('lastname')
                                <small class="error">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                        @error('email')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Nomor Telepon</label>
                        <input type="tel" id="phone_number" name="phone_number" placeholder="Masukkan nomor telepon"
                            required>
                        @error('phone_number')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea id="address" name="address" placeholder="Masukkan alamat lengkap Anda" rows="3"
                            required></textarea>
                        @error('address')
                            <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" id="password" name="password" placeholder="Minimal 8 karakter"
                                required>
                            @error('password')
                                <small class="error">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Masukkan ulang kata sandi" required>
                        </div>
                    </div>

                    <input type="hidden" name="role" value="client">

                    <div class="form-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a
                                href="#">Kebijakan Privasi</a></label>
                    </div>
                    <div class="form-checkbox">
                        <input type="checkbox" id="newsletter" name="newsletter">
                        <label for="newsletter">Saya ingin menerima berita dan promosi terbaru dari WashWuzz</label>
                    </div>

                    <button type="submit" class="register-button">Buat Akun</button>
                </form>

                <div class="login-link">
                    <p>Sudah memiliki akun? <a href="/login">Masuk sekarang</a></p>
                </div>
                <div class="social-login">
                    <div class="social-login-title">
                        <span>Atau daftar dengan</span>
                    </div>
                    <!-- <div class="social-buttons">
                        <button class="social-button">📘</button>
                        <button class="social-button">🐦</button>
                        <button class="social-button">📷</button>
                    </div> -->
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