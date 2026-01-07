<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #3b82f6;
            --bg: #f8fafc;
            --card: #ffffff;
            --text: #1e293b;
            --border: #e2e8f0;
            --success: #10b981;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--border);
        }
        
        .header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text);
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-name {
            font-weight: 600;
            color: var(--text);
        }
        
        .btn-logout {
            background: #fee2e2;
            border: 1px solid #ef4444;
            color: #ef4444;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
        }
        
        .btn-logout:hover {
            background: #fecaca;
        }
        
        /* Main Card */
        .main-card {
            background: var(--card);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .welcome-section {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .welcome-section h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: var(--text);
        }
        
        .welcome-section p {
            color: #64748b;
            margin-bottom: 25px;
        }
        
        .btn-download {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--success) 0%, #0ca678 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s;
            box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
        }
        
        .btn-download:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px -1px rgba(16, 185, 129, 0.4);
        }
        
        /* Table Section */
        .table-section h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .table-container {
            overflow-x: auto;
            border-radius: 8px;
            border: 1px solid var(--border);
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }
        
        .data-table thead {
            background-color: #f1f5f9;
        }
        
        .data-table th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: var(--text);
            border-bottom: 2px solid var(--border);
        }
        
        .data-table td {
            padding: 15px;
            border-bottom: 1px solid var(--border);
        }
        
        .data-table tbody tr:hover {
            background-color: #f8fafc;
        }
        
        .org-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .org-education {
            background-color: #dbeafe;
            color: #1d4ed8;
        }
        
        .org-business {
            background-color: #dcfce7;
            color: #15803d;
        }
        
        .org-health {
            background-color: #fee2e2;
            color: #b91c1c;
        }
        
        .wa-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .wa-link:hover {
            text-decoration: underline;
        }
        .aksi {
            display: flex;
            gap: 1rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .user-info {
                width: 100%;
                justify-content: space-between;
            }
            
            .main-card {
                padding: 20px;
            }
            
            .data-table th,
            .data-table td {
                padding: 12px 10px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }
            
            .header h1 {
                font-size: 1.5rem;
            }
            
            .btn-download {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Dashboard Admin</h1>
            <div class="user-info">
                <span class="user-name">Halo, {{ Auth::user()->name ?? 'Admin' }}! 👋</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Keluar
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Main Card -->
        <div class="main-card">
            <div class="welcome-section">
                <h2>Rekapitulasi Data</h2>
                <p>Unduh data terbaru dalam format Excel untuk analisis lebih lanjut</p>
                <a href="{{ route('form.export') }}" class="btn-download">
                    <i class="fas fa-file-excel"></i>
                    Download Data Excel
                </a>
            </div>
            
            <!-- Table Section -->
            <div class="table-section">
                <h3><i class="fas fa-table"></i> Data Terbaru</h3>
                <div class="table-container">
                    <table class="data-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Organisasi</th>
            <th>Daerah</th>
            <th>Nomor WA</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="data-table-body">
    @forelse ($data as $d)
    <tr>
        <td>{{ $d->name }}</td>
        <td>{{ $d->organization }}</td>
        <td>{{ $d->daerah }}</td>
        <td>{{ $d->no_telp }}</td>
        <td class="aksi">
            <a href="/form/edit/{{ $d->id }}" style="color: var(--primary); text-decoration: none; font-weight: 600;">
                <i class="fas fa-edit"></i> Edit
            </a>

            <form action="/form/destroy/{{ $d->id }}" method="POST" onsubmit="return confirm('Yakin hapus data?')">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: none; border: none; color: #ef4444; cursor: pointer; font-weight: 600; font-family: inherit; display: flex; align-items: center; gap: 4px;">
                    <i class="fas fa-trash"></i> Hapus
                </button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" style="text-align: center; padding: 20px;">Data tidak ada</td>
    </tr>
    @endforelse
</tbody>
</table>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div style="text-align: center; color: #64748b; font-size: 0.9rem; padding-top: 20px; border-top: 1px solid var(--border);">
            PPLG SMKS Muhammadiyah 1 Genteng • {{ date('d M Y') }}
        </div>
    </div>
</body>
</html>