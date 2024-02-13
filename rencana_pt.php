<?php include("template/topbar.php") ?>
<?php include("template/sidebar.php") ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Penataan Tatalaksana</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Penataan Tatalaksana</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <!-- Accordion -->
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Standard Operating Procedure (SOP) Kegiatan Utama
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- awal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Evaluasi Kesesuaian SOP saat ini dengan Peta Proses Bisnis pada unit kerja</td>
                                                                <td>Laporan/Matriks Evaluasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan/Matriks Evaluasi</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Penerapan SOP dalam Pelaksanaan Tugas </td>
                                                                <td rowspan="2">Rekap SOP, LHPPU</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Rekap SOP</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>

                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File LHPPU</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Evaluasi seluruh SOP Kegiatan Utama dan Penyampaian Usulan Perbaikannya</td>
                                                                <td>Dokumen Usulan (surat/ND)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Usulan (surat/ND)</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perancangan Inovasi yang selaras dengan SOP yang berdampak pada penyelesaian tugas lebih efisien dan efektif</td>
                                                                <td>Dokumen Inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Inovasi</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir -->
                                <!-- Button to send files in the first accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseOne')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                E-Office
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- awal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Pengumpulan data dan aturan terkait pengukuran kinerja, operasionalisasi manajemen SDM, dan pemberian pelayanan kepada publik</td>
                                                                <td>Aturan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Aturan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td> <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Penerapan teknologi informasi dalam pengukuran kinerja unit</td>
                                                                <td rowspan="2">Prin Screen e-perfomance dan SIKKA</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Prin Screen e-perfomance</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>

                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SIKKA</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penerapan teknologi informasi dalam operasionalisasi manajemen SDM</td>
                                                                <td>Print Screen SIKKA</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Print Screen SIKKA</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penerapan teknologi informasi dalam pemberian pelayanan kepada publik (Wajib Pajak)</td>
                                                                <td>(e-registration, efiling, e-spt, e-faktur)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File (e-registration, efiling, e-spt, e-faktur)</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemantauan dan Evaluasi Pemanfaatan Teknologi Informasi yang menunjang pengukuran kinerja, operasionalisasi manajemen SDM, dan pemberian pelayanan kepada publik</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>

                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perancangan Inovasi berupa pemanfaatan teknologi yang berdampak pada penyelesaian tugas lebih efisien dan efektif</td>
                                                                <td>Dokumen Inovasi</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Inovasi</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir -->
                                <!-- Button to send files in the two accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseTwo')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Keterbukaan Informasi Publik
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- awal -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Table Upload Berkas</h2>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="widget blank no-padding">
                                                <div class="panel panel-default work-progress-table">
                                                    <!-- Default panel contents -->

                                                    <!-- Table -->
                                                    <table id="mytable" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Rencana Kerja</th>
                                                                <th>Produk Output</th>
                                                                <th>File</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="4">Pengumpulan data dan aturan terkait penerapan keterbukaan informasi publik di lingkungan Kementerian Keuangan</td>
                                                                <td rowspan="4">aturan, print screen WISE, pajak.go.id. Kring Pajak, SIPP, dll</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Aturan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td> <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File print screen WISE</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td> <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File pajak.go.id. Kring Pajak</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td> <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SIPP</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td> <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Pemantauan dan Evaluasi Pelaksanaan Kebijakan Keterbukaan Informasi Publik</td>
                                                                <td rowspan="2">ND dan Laporan Monev</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>

                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir -->
                                <!-- Button to send files in the three accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseThree')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include("template/footer.php") ?>