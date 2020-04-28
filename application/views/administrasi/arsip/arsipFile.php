<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Arsip Hasil Beasiswa</h1>


    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>


            <a href="<?= base_url('administrasi/arsip/arsip'); ?>" class="btn btn-primary mb-3">Arsipkan Hasil Beasiswa</a>
            <ul class="nav nav-pills mb-4">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/daftarArsip/">Lihat Daftar Arsip</a>
                </li>
            </ul>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama File</th>
                        <th scope="col">Waktu Upload</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($arsip as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $a['filename']; ?></td>
                            <td><?= $a['created_at']; ?></td>


                            <td>
                                <a href="<?= base_url() ?>administrasi/hapusDataArsip/<?= $a['id']; ?>" class="badge badge-danger">delete</a>
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