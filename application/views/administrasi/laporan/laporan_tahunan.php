<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-4 text-gray-800">Laporan Tahunan</h1>


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
                    <a class="nav-link active" href="#">Nilai Alternatif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/konversi/">Konversi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/normalisasi/">Normalisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>administrasi/hasil_akhir/">Hasil Akhir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan per Tahun</a>
                </li>


            </ul>
            <div class="form-group row">
                <label for="th" class="col-sm-2 col-form-label"><b>Pilih Tahun</b></label>
                <div class="col-sm-2">
                    <select name="th" id="th" class="form-control col-sm-9">

                        <option value="">Pilih Tahun</option>


                    </select>
                </div>
            </div>




        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->