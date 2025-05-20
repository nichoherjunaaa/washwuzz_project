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
                <form id="loginForm" action="{{ route('login-process') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>
                    @error('email')
                        <small class="error">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda"
                            required>
                    </div>
                    @error('password')
                        <small class="error">{{ $message }}</small>
                    @enderror
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({
                title: 'Email atau Password Salah',
                icon: 'error',
            });
        </script>
    @endif
</body>

</html>