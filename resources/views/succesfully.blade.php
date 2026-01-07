<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berhasil Dikirim</title>
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
        }
        
        .success-container {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 100, 0, 0.08);
            max-width: 520px;
            width: 100%;
            padding: 50px 40px;
            text-align: center;
            border-top: 6px solid #10b981;
            position: relative;
            overflow: hidden;
        }
        
        /* Elemen dekoratif */
        .success-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #10b981, #34d399, #10b981);
        }
        
        .icon-container {
            width: 100px;
            height: 100px;
            background-color: #f0fdf4;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 30px;
            border: 4px solid #d1fae5;
        }
        
        .success-icon {
            color: #10b981;
            font-size: 50px;
        }
        
        h1 {
            color: #047857;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        
        .message {
            color: #374151;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 35px;
        }
        
        .highlight {
            color: #059669;
            font-weight: 600;
        }
        
        .status-indicator {
            display: inline-flex;
            align-items: center;
            background-color: #f0fdf4;
            color: #065f46;
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 30px;
            border: 1px solid #a7f3d0;
        }
        
        .status-icon {
            margin-right: 10px;
            color: #10b981;
            font-size: 18px;
        }
        
        .info-box {
            background-color: #f8fafc;
            border-radius: 12px;
            padding: 22px;
            margin-top: 25px;
            text-align: left;
            border-left: 4px solid #10b981;
        }
        
        .info-title {
            color: #047857;
            font-weight: 600;
            font-size: 17px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .info-title i {
            margin-right: 10px;
            font-size: 18px;
        }
        
        .info-content {
            color: #4b5563;
            font-size: 15px;
            line-height: 1.5;
        }
        
        .info-content ul {
            padding-left: 20px;
            margin-top: 8px;
        }
        
        .info-content li {
            margin-bottom: 6px;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 14px 28px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
        }
        
        .btn-primary {
            background-color: #10b981;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }
        
        .btn-secondary {
            background-color: #f3f4f6;
            color: #374151;
            border: 1px solid #d1d5db;
        }
        
        .btn-secondary:hover {
            background-color: #e5e7eb;
            transform: translateY(-2px);
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        .footer-note {
            margin-top: 30px;
            color: #6b7280;
            font-size: 14px;
            font-style: italic;
            line-height: 1.5;
        }
        
        /* Animasi */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .success-container {
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes checkmark {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        
        .success-icon {
            animation: checkmark 0.5s cubic-bezier(0.65, 0, 0.45, 1) 0.3s both;
        }
        
        /* Responsif */
        @media (max-width: 576px) {
            .success-container {
                padding: 40px 25px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .message {
                font-size: 16px;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 12px;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="icon-container">
            <i class="fas fa-check-circle success-icon"></i>
        </div>
        
        <h1>Data Berhasil Dikirim!</h1>
        
        <div class="message">
            Terima kasih telah mengirimkan data Anda. <span class="highlight">Tim admin kami telah menerima informasi yang Anda kirimkan</span> dan akan segera memprosesnya.
        </div>
        
        <div class="status-indicator">
            <i class="fas fa-clock status-icon"></i>
            <span>Menunggu Verifikasi Admin</span>
        </div>
        
        <div class="info-box">
            <div class="info-title">
                <i class="fas fa-info-circle"></i>
                Proses Selanjutnya
            </div>
            <div class="info-content">
                <p>Tim admin kami akan melakukan verifikasi dan peninjauan terhadap data yang telah Anda kirim. Berikut adalah tahapan yang akan dilakukan:</p>
                <ul>
                    <li>Verifikasi kelengkapan data</li>
                    <li>Validasi informasi yang diberikan</li>
                    <li>Proses internal sesuai kebijakan</li>
                </ul>
                <p>Anda akan mendapatkan notifikasi melalui email atau kontak yang telah Anda berikan setelah proses verifikasi selesai.</p>
            </div>
        </div>
        
        <div class="action-buttons">
            <button class="btn btn-primary" onclick="window.location.href='/'">
                <i class="fas fa-home"></i> Kembali ke Beranda
            </button>
            <button class="btn btn-secondary" onclick="window.location.href='/contact'">
                <i class="fas fa-headset"></i> Hubungi Admin
            </button>
        </div>
        
        <div class="footer-note">
            Proses verifikasi biasanya memerlukan waktu 1-3 hari kerja. Terima kasih atas kesabaran Anda.
        </div>
    </div>

    <script>
        // Menambahkan sedikit interaksi
        document.addEventListener('DOMContentLoaded', function() {
            // Efek hover untuk seluruh container
            const container = document.querySelector('.success-container');
            
            container.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            container.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
            
            // Tambahkan efek klik pada tombol
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });
            
            // Tambahkan pesan konsol untuk developer
            console.log('Halaman notifikasi sukses - Data berhasil dikirim');
        });
    </script>
</body>
</html>