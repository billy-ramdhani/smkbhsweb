
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">SMK BHS...</span>
        </div>
    </div>
  <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-white">SMK <span class="text-warning">BHS</span></h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?= base_url('home')?>" class="nav-item nav-link">Beranda</a>
                        <a href="<?= base_url('blog')?>" class="nav-item nav-link">Mading Sekolah</a>
                        <a href="#" class="nav-item nav-link">BHS Open</a>
                        <a href="#" class="nav-item nav-link">PPDB</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kepegawaian</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="#" class="dropdown-item">Guru Kita</a>
                                <a href="#" class="dropdown-item">Tu Kita</a>
                                <a href="#" class="dropdown-item">Karir</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">Galeri</a>
                        <a href="#" class="nav-item nav-link">Download</a>
                    </div>
                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
