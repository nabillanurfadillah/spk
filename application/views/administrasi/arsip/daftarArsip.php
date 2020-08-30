<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Arsip Hasil Beasiswa</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-sm table-bordered" id="reminderss">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama File</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($arsip as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><a href="<?= base_url('administrasi/download/') . $a['id']; ?>"><?= $a['filename']; ?></a></td>
                                <td>
                                    <p><?= $a['created_at']; ?></p>
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