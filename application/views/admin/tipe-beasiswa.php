<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1><br><br>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-3">Beasiswa PPA (Berprestasi)</div>

                            <div class="h7 mb-0 font-weight-bold text-gray-800"><?= $ppaber ?> Mahasiswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/ppaBerprestasi'); ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Kelola</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-3">Beasiswa PPA (Kurang Mampu)</div>
                            <div class="h7 mb-0 font-weight-bold text-gray-800"><?= $ppakm ?> Mahasiswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/ppaKurangMampu'); ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Kelola</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-3">Beasiswa WKRI (Berprestasi)</div>
                            <div class="h7 mb-0 font-weight-bold text-gray-800"><?= $wber ?> Mahasiswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/wkriBerprestasi'); ?>" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Kelola</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-3">Beasiswa WKRI (Kurang Mampu)</div>
                            <div class="h7 mb-0 font-weight-bold text-gray-800"><?= $wkm ?> Mahasiswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/wkriKurangMampu'); ?>" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Kelola</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">Beasiswa Perseorangan</div>
                            <div class="h7 mb-0 font-weight-bold text-gray-800"><?= $per ?> Mahasiswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/perseorangan'); ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Kelola</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-3">Beasiswa Bidik Misi</div>
                            <div class="h7 mb-0 font-weight-bold text-gray-800"><?= $bm ?> Mahasiswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/bidikMisi'); ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Kelola</span>
                </a>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-3">Beasiswa Bidik Misi (Difabel)</div>
                            <div class="h7 mb-0 font-weight-bold text-gray-800"><?= $bmd ?> Mahasiswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/bidikMisiDifabel'); ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Kelola</span>
                </a>
            </div>
        </div>
    </div>




    <br>
</div>