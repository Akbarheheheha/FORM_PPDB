<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
            background-image: 
                radial-gradient(#e5f9e7 1px, transparent 1px),
                radial-gradient(#e5f9e7 1px, transparent 1px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
            background-color: #f9f9f9;
        }
        
        .login-container {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 100, 0, 0.08);
            max-width: 420px;
            width: 100%;
            padding: 50px 40px;
            border-top: 6px solid #10b981;
            position: relative;
            overflow: hidden;
        }
        
        /* Elemen dekoratif */
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #10b981, #34d399, #10b981);
        }
        
        .logo-container {
            text-align: center;
            margin-bottom: 35px;
        }
        
        .logo-icon {
            width: 70px;
            height: 70px;
            background-color: #f0fdf4;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
            border: 3px solid #d1fae5;
            color: #10b981;
            font-size: 32px;
        }
        
        h1 {
            color: #047857;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 5px;
            text-align: center;
        }
        
        .subtitle {
            color: #6b7280;
            font-size: 15px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        /* Gaya untuk error message */
        .error-container {
            background-color: #fef2f2;
            border-left: 4px solid #ef4444;
            padding: 14px 16px;
            margin-bottom: 25px;
            border-radius: 6px;
            display: flex;
            align-items: flex-start;
            animation: fadeIn 0.5s ease-out;
        }
        
        .error-icon {
            color: #ef4444;
            margin-right: 12px;
            font-size: 18px;
            margin-top: 1px;
        }
        
        .error-message {
            color: #b91c1c;
            font-size: 14px;
            line-height: 1.5;
        }
        
        /* Form styling */
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }
        
        .form-label {
            display: block;
            color: #374151;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 15px;
        }
        
        .input-container {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 18px;
        }
        
        input {
            width: 100%;
            padding: 16px 16px 16px 50px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 15px;
            color: #374151;
            background-color: #fefefe;
            transition: all 0.3s ease;
        }
        
        input:focus {
            outline: none;
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
            background-color: #ffffff;
        }
        
        input::placeholder {
            color: #9ca3af;
        }
        
        /* Password visibility toggle */
        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            cursor: pointer;
            font-size: 18px;
        }
        
        .password-toggle:hover {
            color: #6b7280;
        }
        
        /* Button styling */
        .login-button {
            width: 100%;
            padding: 16px;
            background-color: #10b981;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        
        .login-button:hover {
            background-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        .button-icon {
            margin-right: 10px;
            font-size: 18px;
        }
        
        /* Additional links */
        .login-footer {
            margin-top: 30px;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }
        
        .forgot-password {
            color: #10b981;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
            display: inline-block;
            margin-top: 5px;
        }
        
        .forgot-password:hover {
            color: #047857;
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-container {
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        .shake {
            animation: shake 0.6s ease-in-out;
        }
        
        /* Responsive adjustments */
        @media (max-width: 576px) {
            .login-container {
                padding: 40px 25px;
            }
            
            h1 {
                font-size: 22px;
            }
            
            input {
                padding: 14px 14px 14px 45px;
            }
            
            .input-icon {
                font-size: 16px;
                left: 14px;
            }
            
            .password-toggle {
                right: 14px;
                font-size: 16px;
            }
        }
        
        @media (max-width: 400px) {
            .login-container {
                padding: 35px 20px;
            }
            
            .logo-icon {
                width: 60px;
                height: 60px;
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <div class="logo-icon">
                <i class="fas fa-lock"></i>
            </div>
            <h1>Login Admin</h1>
            <p class="subtitle">Masuk ke sistem administrasi</p>
        </div>
        
        @if ($errors->any())
            <div class="error-container" id="errorBox">
                <i class="fas fa-exclamation-circle error-icon"></i>
                <div class="error-message">{{ $errors->first() }}</div>
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST" id="loginForm">
            @csrf
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <div class="input-container">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" name="email" required placeholder="admin@sekolah.sch.id" value="{{ old('email') }}">
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Password</label>
                <div class="input-container">
                    <i class="fas fa-key input-icon"></i>
                    <input type="password" name="password" required id="passwordInput">
                    <i class="fas fa-eye password-toggle" id="passwordToggle"></i>
                </div>
            </div>
            
            <button type="submit" class="login-button" id="loginButton">
                <i class="fas fa-sign-in-alt button-icon"></i> Masuk ke Sistem
            </button>
        </form>
        
        <div class="login-footer">
            <a href="#" class="forgot-password">Lupa password?</a>
            <p style="margin-top: 15px;">Pastikan Anda memiliki hak akses admin untuk masuk</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility
            const passwordToggle = document.getElementById('passwordToggle');
            const passwordInput = document.getElementById('passwordInput');
            
            passwordToggle.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
            
            // Form submission effect
            const loginForm = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');
            
            loginForm.addEventListener('submit', function(e) {
                // Prevent default untuk simulasi (akan dihapus di implementasi asli)
                // e.preventDefault();
                
                // Efek loading pada tombol
                loginButton.innerHTML = '<i class="fas fa-spinner fa-spin button-icon"></i> Memproses...';
                loginButton.disabled = true;
                
                // Di implementasi asli, hapus timeout ini
                setTimeout(() => {
                    loginButton.innerHTML = '<i class="fas fa-sign-in-alt button-icon"></i> Masuk ke Sistem';
                    loginButton.disabled = false;
                }, 1500);
            });
            
            // Efek input focus
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.parentElement.classList.remove('focused');
                });
                
                // Efek saat ada error
                if (input.value === '' && input.hasAttribute('required')) {
                    input.addEventListener('invalid', function(e) {
                        e.preventDefault();
                        this.classList.add('error');
                        this.parentElement.parentElement.classList.add('shake');
                        
                        // Hapus animasi shake setelah selesai
                        setTimeout(() => {
                            this.parentElement.parentElement.classList.remove('shake');
                        }, 600);
                    });
                }
            });
            
            // Efek hover pada container
            const container = document.querySelector('.login-container');
            
            container.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            container.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
            
            // Auto-hide error setelah beberapa detik
            const errorBox = document.getElementById('errorBox');
            if (errorBox) {
                setTimeout(() => {
                    errorBox.style.opacity = '0.7';
                    errorBox.style.transition = 'opacity 1s ease';
                }, 5000);
            }
            
            // Simulasi forgot password
            const forgotPassword = document.querySelector('.forgot-password');
            forgotPassword.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Fitur lupa password akan mengirimkan reset link ke email terdaftar. Hubungi super admin jika diperlukan.');
            });
        });
    </script>
</body>
</html>