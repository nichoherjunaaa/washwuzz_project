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
                <form id="registerForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">Nama Depan</label>
                            <input type="text" id="firstName" name="firstName" placeholder="Masukkan nama depan" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Nama Belakang</label>
                            <input type="text" id="lastName" name="lastName" placeholder="Masukkan nama belakang" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea id="address" name="address" placeholder="Masukkan alamat lengkap Anda" rows="3" required></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" id="password" name="password" placeholder="Minimal 8 karakter" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Masukkan ulang kata sandi" required>
                        </div>
                    </div>
                    <div class="form-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a></label>
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

        // Form submission handling
        const registerForm = document.getElementById('registerForm');
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            // Validate passwords match
            if (password !== confirmPassword) {
                alert('Kata sandi tidak cocok. Silakan coba lagi.');
                return;
            }
            
            // Here you would typically send this data to your server
            console.log('Registration attempt:', { 
                firstName, 
                lastName, 
                email, 
                phone, 
                address,
                password
            });
            
            // For demo purposes, show success message
            alert('Pendaftaran berhasil! Silakan masuk dengan akun baru Anda.');
            window.location.href = '../login_page/login.html';
        });
    </script>
</body>
</html>