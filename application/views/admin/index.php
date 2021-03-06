<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if ($beasiswa['id'] == 1) : ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Beasiswa PPA (Berprestasi)</h1>
    <?php elseif ($beasiswa['id'] == 2) : ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Beasiswa PPA (Kurang Mampu)</h1>
    <?php elseif ($beasiswa['id'] == 3) : ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Beasiswa WKRI (Berprestasi)</h1>
    <?php elseif ($beasiswa['id'] == 4) : ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Beasiswa WKRI (Kurang Mampu)</h1>
    <?php elseif ($beasiswa['id'] == 5) : ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Beasiswa Perseorangan</h1>
    <?php elseif ($beasiswa['id'] == 6) : ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Beasiswa Bidik Misi</h1>
    <?php elseif ($beasiswa['id'] == 7) : ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Beasiswa Bidik Misi (Difabel)</h1>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-4">
            <h4 class="text-center">Bobot Nilai</h4>
            <div class="card">
                <div class="card-body">

                    <?php
                    $queryNilai = "SELECT keterangan_nilai, jumlah_nilai
                        FROM nilai
                        ORDER BY nilai.jumlah_nilai ASC";
                    $hasilnilai = $this->db->query($queryNilai)->result_array();
                    ?>

                    <ol>
                        <?php foreach ($hasilnilai as $n) : ?>
                            <li><?= $n['keterangan_nilai']; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h4 class="text-center">Kriteria</h4>
            <div class="card">
                <div class="card-body">
                    <ol>
                        <?php foreach ($kriteria as $k) : ?>
                            <li><?= $k['nama_kriteria']; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h4 class="text-center">Mahasiswa</h4>
            <div class="card">
                <div class="card-body">
                    <ol>
                        <?php foreach ($alternatif as $a) : ?>
                            <li><?= $a['nama_alternatif']; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <div class="container2">
        <div class="row justify-content-center">
            <div class="col-9">
                <br>
                <h4 class="text-center">Hasil Beasiswa</h4>
                <br>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                if (count($graph) > 0) {
                    foreach ($graph as $data) {
                        echo "'" . $data->nama_alternatif . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Alternatif',
                backgroundColor: '#ADD8E6',
                borderColor: '##93C3D2',
                data: [
                    <?php
                    if (count($graph) > 0) {
                        foreach ($graph as $data) {
                            echo $data->hasil . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>