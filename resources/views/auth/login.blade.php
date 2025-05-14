<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WashWuzz Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <!-- Header -->
    @include('components.navbar');

    <!-- Login Section -->
    <section class="login-section">
        <div class="container">
            <div class="login-container">
                <div class="login-header">
                    <h1>Masuk</h1>
                    <p>Selamat datang kembali di WashWuzz</p>
                </div>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda"
                            required>
                    </div>
                    <div class="form-footer">
                        <div class="remember-me">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Ingat saya</label>
                        </div>
                        <a href="#" class="forgot-password">Lupa kata sandi?</a>
                    </div>
                    <button type="submit" class="login-button">Masuk</button>
                </form>
                <div class="register-link">
                    <p>Belum memiliki akun? <a href="/register">Daftar sekarang</a></p>
                </div>
                <div class="social-login">
                    <div class="social-login-title">
                        <span>Atau masuk dengan</span>
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

        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();  // Pastikan preventDefault dipanggil dengan benar

            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            if (!emailInput || !passwordInput) {
                console.error('Tidak dapat menemukan input email atau password');
                return;
            }

            const email = emailInput.value;
            const password = passwordInput.value;

            // Validasi input
            if (!email || !password) {
                alert('Email dan password wajib diisi.');
                return;
            }

            // Menampilkan loader/spinner pada tombol login
            const loginButton = document.querySelector('.login-button');
            loginButton.disabled = true;
            loginButton.innerText = 'Memproses...';

            try {
                const response = await fetch('api/auth/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();
                console.log('Respon dari server:', data);

                if (!response.ok) {
                    const message = data?.message?.[0] || 'Login gagal';
                    alert(message);
                    loginButton.disabled = false;
                    loginButton.innerText = 'Masuk';
                    return;
                }

                if (data?.user && data?.token) {
                    alert('Login berhasil!');
                    console.log('User:', data.user);
                    console.log('Token:', data.token);

                    // Simpan token di localStorage
                    localStorage.setItem('token', data.token);

                    // Redirect berdasarkan role user
                    if (data?.user?.role === 'admin') {
                        window.location.href = '/admin/dashboard';
                    } else {
                        window.location.href = '/';
                    }
                } else {
                    alert('Terjadi kesalahan saat login.');
                    loginButton.disabled = false;
                    loginButton.innerText = 'Masuk';
                }
            } catch (error) {
                console.error('Error saat login:', error);
                alert('Tidak dapat menghubungi server. Pastikan koneksi internet stabil atau coba beberapa saat lagi.');
                loginButton.disabled = false;
                loginButton.innerText = 'Masuk';
            }
        });
    </script>
</body>

</html>