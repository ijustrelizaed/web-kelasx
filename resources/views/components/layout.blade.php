<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPL 1</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="main-header">
        <div class="container header-content">
            <img src="{{ asset('images/abel.jpeg') }}" alt="beltem" class="logo">
            <div class="brand">
                <h1>X RPL 1</h1>
                <p>Class Management Dashboard</p>
            </div>
            <div class="theme-toggle">
                <i class="fas fa-sun"></i>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container nav-container">
            <a href="/" class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="fas fa-th-large"></i> <span>Ringkasan</span>
            </a>
            <a href="/siswa" class="{{ Request::is('siswa') ? 'active' : '' }}">
                <i class="fas fa-users"></i> <span>Siswa</span>
            </a>
            <a href="/jadwal" class="{{ Request::is('jadwal') ? 'active' : '' }}">
                <i class="fas fa-calendar-alt"></i> <span>Jadwal</span>
            </a>
            <a href="/pengumuman" class="{{ Request::is('pengumuman') ? 'active' : '' }}">
                <i class="fas fa-bullhorn"></i> <span>Pengumuman</span>
            </a>
            <a href="/piket" class="{{ Request::is('piket') ? 'active' : '' }}">
                <i class="fas fa-broom"></i> <span>Piket</span>
            </a>
        </div>
    </nav>

    <main>
        <div>
            {{$slot}}
        </div>
    </main>
</body>
</html>