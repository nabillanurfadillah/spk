<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Mahasiswa</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <?php
    $mhs = $alternatif['nim'];
    $query = "SELECT *
    FROM alternatif join hitung on alternatif.id_alternatif=hitung.id_alternatif join subkriteria on subkriteria.id_subkriteria = hitung.id_subkriteria join kriteria on kriteria.id_kriteria = subkriteria.id_kriteria
    WHERE alternatif.nim = $mhs
    ";
    $datamhs = $this->db->query($query)->result_array();
    ?>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-10">
                <div class="card-body">
                    <div class="row">
                        <label for="alamat" class="col-sm-6">NIM</label>
                        <div class="col-sm-6">
                            <p class="card-text">: <?= $alternatif['nim']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6">Nama</label>
                        <div class="col-sm-6">
                            <p class="card-text">: <?= $alternatif['nama_alternatif']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6">Jurusan</label>
                        <div class="col-sm-6">
                            <p class="card-text">: <?= $alternatif['jurusan']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6">Jenis Kelamin </label>
                        <div class="col-sm-6">
                            <p class="card-text">: <?= $alternatif['jk']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6">Alamat</label>
                        <div class="col-sm-6">
                            <p class="card-text">: <?= $alternatif['alamat']; ?></p>
                        </div>
                    </div>
                    <?php foreach ($datamhs as $dm) : ?>
                        <div class="row">
                            <label for="alamat" class="col-sm-6"><?= $dm['nama_kriteria']; ?></label>
                            <div class="col-sm-6">
                                <p class="card-text">: <?= $dm['nama_subkriteria']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <a href="<?= base_url('administrasi/alternatif'); ?>" class="btn btn-danger">Kembali</a>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->