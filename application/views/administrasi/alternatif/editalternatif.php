<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Mahasiswa</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart(); ?>
            <input type="hidden" name="id_alternatif" value="<?= $alternatif['id_alternatif']; ?>">
            <div class="form-group row">
                <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $alternatif['nim']; ?>">
                    <?= form_error('nim', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_alternatif" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value="<?= $alternatif['nama_alternatif']; ?>">
                    <?= form_error('nama_alternatif', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-4 col-form-label">Jurusan</label>
                <div class="col-sm-8">
                    <select name="jurusan" id="jurusan" class="form-control col-sm-9">
                        <?php foreach ($jurusan as $j) : ?>
                            <?php if ($j == $alternatif['jurusan']) : ?>
                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                            <?php else : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                    <select name="jk" id="jk" class="form-control col-sm-9">
                        <?php foreach ($jk as $k) : ?>
                            <?php if ($k == $alternatif['jk']) : ?>
                                <option value="<?= $k; ?>" selected><?= $k; ?></option>
                            <?php else : ?>
                                <option value="<?= $k; ?>"><?= $k; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control col-sm-9" id="alamat" name="alamat" value="<?= $alternatif['alamat']; ?>">
                    <?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <?php
            $beaId = $this->session->userdata('beasiswa_id');
            $query = "SELECT nama_kriteria , id_kriteria from kriteria where beasiswa_id = $beaId";
            $kri = $this->db->query($query)->result_array();
            $out = [];
            // $query1 = "SELECT hitung.* from hitung join alternatif
            // on hitung.id_alternatif = alternatif.id_alternatif 
            // where alternatif.beasiswa_id = $beaId ";
            // $hitung = $this->db->query($query1)->result_array();
            // var_dump($hitung);
            // die;
            foreach ($hitung as $key => $value) {
                $out[] = array_merge((array) $kri[$key], (array) $value);
            }
            ?>
            <?php foreach ($out as $kr) : ?>
                <?php $idk = $kr['id_kriteria'];
                ?>
                <div class="form-group row">
                    <label for="kriteria" name="kriteria" class="col-sm-4 col-form-label"><?= $kr['nama_kriteria']; ?></label>
                    <div class="col-sm-8">
                        <?php
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query1 = "SELECT * FROM subkriteria WHERE subkriteria.id_kriteria = $idk and beasiswa_id = $beaId";
                        $subKr = $this->db->query($query1)->result_array();
                        ?>
                        <select name="id_subkriteria[]" id="id_subkriteria" class="form-control col-sm-9">
                            <?php foreach ($subKr as $sub) :
                                $qq = $sub['nama_subkriteria'];
                                $id_k = $sub['id_subkriteria'];
                            ?>
                                <?php if ($id_k == $kr['id_subkriteria']) : ?>
                                    <option value="<?= $id_k ?>" selected><?= $qq ?></option>
                                <?php else : ?>
                                    <option value="<?= $id_k ?>"><?= $qq ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Ubah</button>
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