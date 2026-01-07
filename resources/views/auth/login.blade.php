<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        /* Gaya simpel biar gak polos banget */
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #fdfdfc; }
        .card { padding: 2rem; border: 1px solid #ccc; border-radius: 8px; background: white; width: 300px; }
        input { width: 100%; padding: 8px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #2563eb; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .error { color: red; font-size: 0.8rem; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="card">
        <h2 style="text-align: center">Login Admin</h2>
        
        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <label>Email</label>
            <input type="email" name="email" required placeholder="admin@sekolah.sch.id">
            
            <label>Password</label>
            <input type="password" name="password" required>
            
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>