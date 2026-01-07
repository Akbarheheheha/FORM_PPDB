<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Data Sekolah</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* Warna Biru Profesional & Terpercaya */
            --primary: #0f172a; 
            --accent: #2563eb;
            --bg: #f3f4f6;
            --card: #ffffff;
            --text-main: #1f2937;
            --text-muted: #6b7280;
            --border: #e5e7eb;
            --input-bg: #f9fafb;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 550px;
            margin-top: 2rem;
        }

        /* Card Design yang "Timbu" dan Rapi */
        .card {
            background: var(--card);
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 2.5rem;
            border-top: 5px solid var(--accent); /* Aksen warna di atas */
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .header p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .form-group { margin-bottom: 1.25rem; }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-main);
            font-size: 0.95rem; /* Font label agak besar biar jelas */
        }

        /* Input field yang luas dan nyaman diketik di HP */
        input[type="text"] {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            background-color: var(--input-bg);
            font-size: 1rem;
            color: var(--primary);
            transition: all 0.2s;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            background-color: #fff;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* Tombol Besar dan Jelas */
        .btn-submit {
            width: 100%;
            padding: 1rem;
            background-color: var(--accent);
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-weight: 500;
            text-align: center;
        }
        .alert-success {
            background-color: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }

        @media (max-width: 640px) {
            .row { grid-template-columns: 1fr; } /* Stack ke bawah di HP */
            .card { padding: 1.5rem; }
            .header h1 { font-size: 1.5rem; }
        }
    </style>
</head>
<body>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                ✅ {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="header">
                <h1>Data Sekolah</h1>
                <p>Silakan lengkapi data di bawah ini dengan benar untuk keperluan administrasi.</p>
            </div>

            <form action="{{ route('form.submit') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="name">Nama Lengkap Siswa</label>
                    <input type="text" id="name" name="name" placeholder="Contoh: Ahmad Dahlan" required>
                </div>
                
                <div class="form-group">
                    <label for="organization">Asal Organisasi / Sekolah</label>
                    <input type="text" id="organization" name="organization" placeholder="Nama Sekolah/Instansi" required>
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <label for="daerah">Alamat / Daerah</label>
                        <input type="text" id="daerah" name="daerah" placeholder="Kota/Kabupaten">
                    </div>
                    
                    <div class="form-group">
                        <label for="no_telp">Nomor WhatsApp</label>
                        <input type="text" id="no_telp" name="no_telp" placeholder="08xxxxxxxxxx">
                    </div>
                </div>
                
                <button type="submit" class="btn-submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><path d="M22 2 15 22 11 13 2 9 22 2"/></svg>
                    Kirim Data
                </button>
            </form>
        </div>
        
        <p style="text-align: center; margin-top: 20px; color: var(--text-muted); font-size: 0.8rem;">
            &copy; {{ date('Y') }} PPLG SMKS Muhammadiyah 1 Genteng
        </p>
    </div>

</body>
</html>