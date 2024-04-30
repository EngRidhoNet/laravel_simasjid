<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-mosque"></i>  SI MASJID</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('pages.home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('pages.berita') }}" class="nav-item nav-link">Berita</a>
                <a href="{{ route('pages.keuangan') }}" class="nav-item nav-link">Keuangan</a>
                <a href="{{ route('pages.donasi') }}" class="nav-item nav-link">Donasi</a>
                {{-- <a href="courses.html" class="nav-item nav-link">Donatur</a> --}}

                <a href="contact.html" class="nav-item nav-link">About</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
