<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'home') ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pencatatanriwayatkesehatan') ? 'active link-light' : 'link-dark'; ?>" href="pencatatanriwayatkesehatan"> <i class="bi bi-journal-bookmark-fill"></i> Pencatatan Riwayat Kesehatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'jadwalkesehatan') ? 'active link-light' : 'link-dark'; ?>" href="jadwalkesehatan"> <i class="bi bi-calendar2-week"></i> Jadwal Kesehatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'informasikesehatan') ? 'active link-light' : 'link-dark'; ?>" href="informasikesehatan"> <i class="bi bi-clipboard2-pulse"></i> Informasi Kesehatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'admin') ? 'active link-light' : 'link-dark'; ?>" href="admin"> <i class="bi bi-person-badge"></i> Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>