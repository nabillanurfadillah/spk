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
                        <label for="alamat" class="col-lg-6"><b>NIM</b></label>
                        <p class="card-text">&nbsp; <?= $alternatif['nim']; ?></p><br>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6"><b>Nama</b></label>
                        <p class="card-text">&nbsp; <?= $alternatif['nama_alternatif']; ?></p><br>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6"><b>Jurusan</b></label>
                        <p class="card-text">&nbsp; <?= $alternatif['jurusan']; ?></p><br>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6"><b>Jenis Kelamin</b></label>
                        <p class="card-text">&nbsp; <?= $alternatif['jk']; ?></p><br>
                    </div>
                    <div class="row">
                        <label for="alamat" class="col-sm-6"><b>Alamat</b></label>
                        <p class="card-text">&nbsp; <?= $alternatif['alamat']; ?></p><br>
                    </div>
                    <?php foreach ($datamhs as $dm) : ?>
                        <div class="row">
                            <label for="alamat" class="col-sm-6"><b><?= $dm['nama_kriteria']; ?></b></label>
                            <p class="card-text">&nbsp; <?= $dm['nama_subkriteria']; ?></p><br>
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