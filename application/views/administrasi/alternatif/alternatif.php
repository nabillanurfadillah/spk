<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Alternatif</h1>


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
            <div class="row justify-content-between">
            <a href="<?= base_url('administrasi/tambahalternatif'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
             <a href="<?= base_url('administrasi/hapussemuadata'); ?>" class="btn btn-danger mb-3">Hapus Semua Data</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Alternatif</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tahun</th>
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
                            <td><?= $a['jk']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= $a['tahun']; ?></td>



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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->