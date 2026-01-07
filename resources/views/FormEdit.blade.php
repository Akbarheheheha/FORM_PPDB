<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Sekolah</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #0f172a; 
            --accent: #2563eb; /* Biru Edit */
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

        .card {
            background: var(--card);
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            border-top: 5px solid var(--accent);
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
        }

        .form-group { margin-bottom: 1.25rem; }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-main);
            font-size: 0.95rem;
        }

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

        .btn-back {
            display: inline-block;
            margin-bottom: 1rem;
            text-decoration: none;
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .btn-back:hover { color: var(--accent); }

        @media (max-width: 640px) {
            .row { grid-template-columns: 1fr; }
            .card { padding: 1.5rem; }
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="/admin/dashboard" class="btn-back">← Kembali ke Daftar</a>

        <div class="card">
            <div class="header">
                <h1>Edit Data Siswa</h1>
                <p>Perbarui informasi data sekolah untuk <strong>{{ $data->name }}</strong></p>
            </div>

            <form action="/form/update/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT') 
                
                <div class="form-group">
                    <label for="name">Nama Lengkap Siswa</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $data->name) }}" placeholder="Contoh: Ahmad Dahlan" required>
                </div>
                
                <div class="form-group">
                    <label for="organization">Asal Organisasi / Sekolah</label>
                    <input type="text" id="organization" name="organization" value="{{ old('organization', $data->organization) }}" placeholder="Nama Sekolah/Instansi" required>
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <label for="daerah">Alamat / Daerah</label>
                        <input type="text" id="daerah" name="daerah" value="{{ old('daerah', $data->daerah) }}" placeholder="Kota/Kabupaten">
                    </div>
                    
                    <div class="form-group">
                        <label for="no_telp">Nomor WhatsApp</label>
                        <input type="text" id="no_telp" name="no_telp" value="{{ old('no_telp', $data->no_telp) }}" placeholder="08xxxxxxxxxx">
                    </div>
                </div>
                
                <button type="submit" class="btn-submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    Perbarui Data
                </button>
            </form>
        </div>
        
        <p style="text-align: center; margin-top: 20px; color: var(--text-muted); font-size: 0.8rem;">
            &copy; {{ date('Y') }} PPLG SMKS Muhammadiyah 1 Genteng
        </p>
    </div>

</body>
</html>