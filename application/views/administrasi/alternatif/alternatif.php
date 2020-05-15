<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if ($beasiswa['id'] == 1) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data <?= $title; ?> Beasiswa PPA (Berprestasi)</h1>
    <?php elseif ($beasiswa['id'] == 2) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data <?= $title; ?> Beasiswa PPA (Kurang Mampu)</h1>
    <?php elseif ($beasiswa['id'] == 3) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data <?= $title; ?> Beasiswa WKRI (Berprestasi)</h1>
    <?php elseif ($beasiswa['id'] == 4) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data <?= $title; ?> Beasiswa WKRI (Kurang Mampu)</h1>
    <?php elseif ($beasiswa['id'] == 5) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data <?= $title; ?> Beasiswa Perseorangan</h1>
    <?php elseif ($beasiswa['id'] == 6) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data <?= $title; ?> Beasiswa Bidik Misi</h1>
    <?php elseif ($beasiswa['id'] == 7) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data <?= $title; ?> Beasiswa Bidik Misi (Difabel)</h1>
    <?php endif; ?>


    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>


            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>

                <div class="flash-data-alternatif" data-flashdataalternatif="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <?= $this->session->flashdata('messagehapus'); ?>
            <div class="row justify-content-between col-sm-12">
                <a href="<?= base_url('administrasi/tambahalternatif'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
                <a href="<?= base_url('administrasi/hapussemuadata'); ?>" class="btn btn-danger mb-3 hapussemua">Hapus Semua Data</a>
            </div>
            <div class="row justify-content-end col-sm-12">

                <p class="text-gray-800 ml-6">*Hati-hati semua data mahasiswa akan terhapus! Pastikan File Hasil Beasiswa sudah diarsipkan!</p>
            </div>
            <div class="table-responsive">
            <table class="table table-hover" id="reminders">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($alternatif as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $a['nim']; ?></td>
                            <td><?= $a['nama_alternatif']; ?></td>
                            <td><?= $a['jurusan']; ?></td>
                            <td><?= $a['jk']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>administrasi/editalternatif/<?= $a['id_alternatif']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url() ?>administrasi/hapusalternatif/<?= $a['id_alternatif']; ?>" class="badge badge-danger tombolhapusa">delete</a>
                            </td>

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