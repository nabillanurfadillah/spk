<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <?= $judul; ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>
                <div class="flash-data-rangking" data-flashdatarangking="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>
            <ul class="nav nav-pills mb-4">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/hasil_seleksi/">Nilai Alternatif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/konversi/">Konversi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/normalisasi/">Normalisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Hasil Akhir</a>
                </li>
            </ul>
            <h4>Hasil Akhir</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="reminders">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Hasil</th>
                            <th scope="col">Rank</th>
                        </tr>
                    </thead>
                    <?php
                    ?>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($hasil as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $a['nim']; ?></td>
                                <td><?= $a['nama_alternatif']; ?></td>
                                <td><?= $a['hasil']; ?></td>
                                <td><?= $i; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->