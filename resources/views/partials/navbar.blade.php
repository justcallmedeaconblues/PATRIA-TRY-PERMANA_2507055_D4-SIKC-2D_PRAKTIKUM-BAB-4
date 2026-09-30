<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="route{{ route ('home') }}" class="navbar-brand">Fasilitas Kota</a>
        <div class="navbar-nav">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <a href="{{ route('profil') }}" class="nav-link">Profil</a>
            <a href="{{ route('laporan') }}" class="nav-link">Laporan</a>
        </div>
    </div>
</nav>