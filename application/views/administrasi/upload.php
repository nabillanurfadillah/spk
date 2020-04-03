<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Upload Hasil Beasiswa</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('administrasi/upload'); ?>
            <div class="custom-file col-sm-6">
                <input type="file" id="filename" name="filename" class="custom-file-input" id="customFile" required>
                <?= form_error('filename', ' <small class="text-danger pl-3">', '</small>'); ?>
                <label class="custom-file-label" for="customFile">Choose File</label>
            </div>


            <div class="form-group justify-content-end row mt-3">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->