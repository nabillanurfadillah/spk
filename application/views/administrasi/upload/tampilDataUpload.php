<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data File yang Diupload</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('administrasi/upload/upload'); ?>" class="btn btn-primary mb-3">Upload Hasil Beasiswa</a>
            <div class="table-responsive">
                <table class="table table-hover" id="reminderss">
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
                        <?php foreach ($file as $f) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $f['filename']; ?></td>
                                <td><?= $f['created_at']; ?></td>
                                <td>
                                    <a href="<?= base_url() ?>administrasi/hapusDataUpload/<?= $f['id']; ?>" class="badge badge-danger">delete</a>
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