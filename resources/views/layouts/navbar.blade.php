<header class="navbar">
    <div class="logo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
    </div>

    <!-- Hamburger Button -->
    <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav id="nav-menu">
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ url('/opsi-paket') }}" class="{{ request()->is('opsi-paket') ? 'active' : '' }}">Opsi Paket</a></li>
            <li><a href="{{ url('/faq') }}" class="{{ request()->is('faq') ? 'active' : '' }}">Hubungi Kami</a></li>
            <li> <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20untuk%20mencoba%20demo%20aplikasi%20SoloTechno%20CBT.%20Mohon%20informasinya%20lebih%20lanjut%20ya." target="_blank" class="btn-demo {{ request()->is('demo') ? 'active' : '' }}"> Demo Aplikasi </a> </li>
        </ul>
    </nav>
</header>

<script src="{{ asset('assets/js/navbar.js') }}"></script>