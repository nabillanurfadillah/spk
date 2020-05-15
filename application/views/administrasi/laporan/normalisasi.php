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
                    <a class="nav-link active" href="#">Normalisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/hasil_akhir/">Hasil Akhir</a>
                </li>



            </ul>

            <h4>Normalisasi</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="reminders">
                    <thead>
                        <tr>
                            <th scope="col" style="vertical-align : middle;text-align:center;">No</th>
                            <th scope="col" style="vertical-align : middle;text-align:center;">Nama</th>

                            <?php foreach ($kriteria as $k) : ?>
                                <th class="text-center" scope="col"><?= $k['nama_kriteria']; ?><br>(<?= $k['tipe_kriteria']; ?>)</th>

                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <?php

                    ?>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($alternatif as $a) : ?>
                            <?php $ida = $a['id_alternatif']; ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $a['nama_alternatif']; ?></td>
                                <?php
                                $beaId = $this->session->userdata('beasiswa_id');
                                $query1 = "SELECT nilai_normalisasi from hitung join alternatif 
                            on hitung.id_alternatif = alternatif.id_alternatif
                            where hitung.id_alternatif=$ida
                            and alternatif.beasiswa_id = $beaId";
                                $hasil1 = $this->db->query($query1)->result_array();
                                ?>
                                <?php foreach ($hasil1 as $h) : ?>


                                    <td style="text-align:center;">
                                        <?= $h['nilai_normalisasi']; ?>
                                    </td>

                                <?php endforeach; ?>




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
<!-- Modal -->