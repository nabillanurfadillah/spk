<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Alternatif</h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('administrasi/tambahalternatif'); ?>


            <div class="form-group row">
                <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control col-sm-9" id="nim" name="nim" placeholder="Masukkan NIM" value="<?= set_value('nim'); ?>">
                    <?= form_error('nim', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_alternatif" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control col-sm-9" id="nama_alternatif" name="nama_alternatif" placeholder="Masukkan Nama Alternatif" value="<?= set_value('nama_alternatif'); ?>">
                    <?= form_error('nama_alternatif', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                    <select name="jk" id="jk" class="form-control col-sm-9">

                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>


                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control col-sm-9" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= set_value('alamat'); ?>">
                    <?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="tahun" class="col-sm-4 col-form-label">Tahun</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control col-sm-9" id="tahun" name="tahun" placeholder="Masukkan Tahun Sekarang" value="<?= set_value('tahun'); ?>">
                    <?= form_error('tahun', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <?php
            $query1 = "SELECT nama_subkriteria from subkriteria WHERE id_kriteria=5";
            $query = $this->db->query($query1)->result_array();
            ?>

            <?php
            $beaId = $this->session->userdata('beasiswa_id');
            $qu = "SELECT nama_kriteria , id_kriteria, beasiswa_id from kriteria where beasiswa_id = $beaId ";
            $qu1 = "SELECT nama_subkriteria from subkriteria";
            $que = $this->db->query($qu)->result_array();
            ?>
            <?php foreach ($que as $q) : ?>


                <div class="form-group row">
                    <label for="kriteria" name="kriteria" class="col-sm-4 col-form-label"><?= $q['nama_kriteria']; ?></label>
                    <div class="col-sm-8">
                        <?php
                        $ik = $q['id_kriteria'];
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query4 = "SELECT * FROM subkriteria join kriteria on subkriteria.id_kriteria=kriteria.id_kriteria where subkriteria.id_kriteria=$ik and subkriteria.beasiswa_id = $beaId";
                        $subKr = $this->db->query($query4)->result_array();

                        ?>

                        <select name="id_subkriteria[]" id="id_subkriteria" class="form-control col-sm-9">
                            <?php foreach ($subKr as $sub) :
                                $qq = $sub['nama_subkriteria'];
                                $id_k = $sub['id_subkriteria'];

                            ?>
                                <option value="<?= $id_k ?>"><?= $qq ?>
                                </option>

                            <?php endforeach; ?>
                        </select>



                    </div>
                </div>
            <?php endforeach; ?>

            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Tambah</button>

                    <a href="<?= base_url('administrasi/alternatif'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>

            </form>


        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->