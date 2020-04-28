<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if ($beasiswa['id'] == 1) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data Bobot <?= $title; ?> Beasiswa PPA (Berprestasi)</h1>
    <?php elseif ($beasiswa['id'] == 2) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data Bobot <?= $title; ?> Beasiswa PPA (Kurang Mampu)</h1>
    <?php elseif ($beasiswa['id'] == 3) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data Bobot <?= $title; ?> Beasiswa WKRI (Berprestasi)</h1>
    <?php elseif ($beasiswa['id'] == 4) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data Bobot <?= $title; ?> Beasiswa WKRI (Kurang Mampu)</h1>
    <?php elseif ($beasiswa['id'] == 5) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data Bobot <?= $title; ?> Beasiswa Perseorangan</h1>
    <?php elseif ($beasiswa['id'] == 6) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data Bobot <?= $title; ?> Beasiswa Bidik Misi</h1>
    <?php elseif ($beasiswa['id'] == 7) : ?>
        <h1 class="h3 mb-4 text-gray-800">Data Bobot <?= $title; ?> Beasiswa Bidik Misi (Difabel)</h1>
    <?php endif; ?>


    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>


            <?php endif; ?>

            <?php if ($this->session->flashdata('message')) : ?>

                <div class="flash-data-nilai" data-datanilai="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>


            <a href="<?= base_url('administrasi/tambahnilai'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Keterangan Nilai</th>
                        <th scope="col">Jumlah Nilai</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($nilai as $n) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $n['keterangan_nilai']; ?></td>
                            <td><?= $n['jumlah_nilai']; ?></td>


                            <td>
                                <a href="<?= base_url() ?>administrasi/editnilai/<?= $n['id_nilai']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url() ?>administrasi/hapusnilai/<?= $n['id_nilai']; ?>" class="badge badge-danger hapusnilai">delete</a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->