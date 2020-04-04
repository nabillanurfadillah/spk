<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Subkriteria</h1>


    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>


            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>

                <div class="flash-data-subkriteria" data-flashdatasubkriteria="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <a href="<?= base_url('administrasi/tambahsubkriteria'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered table-hover" id="reminders">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kriteria</th>
                        <th scope="col">Nama Subkriteria</th>
                        <th scope="col">Nilai Subkriteria</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                $query = "SELECT subkriteria.id_subkriteria,kriteria.id_kriteria, subkriteria.nama_subkriteria, subkriteria.nilai_subkriteria, kriteria.nama_kriteria FROM subkriteria INNER JOIN kriteria ON subkriteria.id_kriteria = kriteria.id_kriteria";
                $datasubkriteria = $this->db->query($query)->result_array();

                ?>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subkriteria as $sk) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $sk['nama_kriteria']; ?></td>
                            <td><?= $sk['nama_subkriteria']; ?></td>
                            <td><?= $sk['nilai_subkriteria']; ?></td>



                            <td>
                                <a href="<?= base_url() ?>administrasi/editsubkriteria/<?= $sk['id_subkriteria']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url() ?>administrasi/hapussubkriteria/<?= $sk['id_subkriteria']; ?>" class="badge badge-danger tombol-hapus-subkriteria">delete</a>
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