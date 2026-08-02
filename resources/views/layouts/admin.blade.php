<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') - CSE485</title>
    <style>
        :root {
            --bg: #f3f4f6;
            --sidebar: #111827;
            --text: #111827;
            --muted: #6b7280;
            --accent: #2563eb;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, sans-serif;
            background: var(--bg);
            color: var(--text);
        }
        .app { display: flex; min-height: 100vh; }
        .sidebar {
            width: 240px;
            background: var(--sidebar);
            color: #fff;
            padding: 1.25rem;
        }
        .sidebar a {
            display: block;
            color: #d1d5db;
            text-decoration: none;
            padding: .5rem 0;
        }
        .sidebar a:hover { color: #fff; }
        .main { flex: 1; display: flex; flex-direction: column; }
        .topbar {
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            padding: 1rem 1.5rem;
            font-weight: 600;
        }
        .content { padding: 1.5rem; }
        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 1rem;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { border-bottom: 1px solid #e5e7eb; padding: .75rem; text-align: left; }
        .btn {
            display: inline-block;
            background: var(--accent);
            color: #fff;
            padding: .5rem .9rem;
            border-radius: 6px;
            text-decoration: none;
            border: 0;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .app { flex-direction: column; }
            .sidebar { width: 100%; }
        }
    </style>
    @stack('styles')
</head>
<body>
<div class="app">
    <aside class="sidebar">
        <h2>CSE485 Admin</h2>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.products.index') }}">San pham</a>
        <a href="{{ route('admin.categories.index') }}">Danh muc</a>
    </aside>
    <div class="main">
        <header class="topbar">@yield('page_heading', 'Dashboard')</header>
        <main class="content">
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
            @yield('content')
        </main>
    </div>
</div>
@stack('scripts')
</body>
</html>