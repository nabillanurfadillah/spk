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

                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <?php endif; ?>

            <a href="<?= base_url('administrasi/tambahkriteria'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Tipe Kriteria</th>
                        <th scope="col">Bobot Kriteria</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                $beaId =  $this->session->userdata('beasiswa_id');

                $query = "SELECT kriteria.nama_kriteria, kriteria.tipe_kriteria, nilai.jumlah_nilai, id_kriteria
                            FROM kriteria INNER JOIN nilai ON kriteria.id_nilai = nilai.id_nilai where kriteria.beasiswa_id = $beaId";
                $datakriteria = $this->db->query($query)->result_array();

                ?>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($datakriteria as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $k['nama_kriteria']; ?></td>
                            <td><?= $k['tipe_kriteria']; ?></td>
                            <td><?= $k['jumlah_nilai']; ?></td>


                            <td>
                                <a href="<?= base_url() ?>administrasi/editkriteria/<?= $k['id_kriteria']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url() ?>administrasi/hapuskriteria/<?= $k['id_kriteria']; ?>" class="badge badge-danger tombol-hapus">delete</a>
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