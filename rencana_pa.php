<?php include("template/topbar.php") ?>
<?php include("template/sidebar.php") ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Penguatan Akuntabilitas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Penguatan Akuntabilitas</li>
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
                                Keterlibatan Pimpinan
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
                                                                <td rowspan="3">Penyusunan Perencanaan (Rencana Strategis, Rencana Kerja Tahunan)</td>
                                                                <td rowspan="3">Undangan, LHR, Daftar Hadir</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Undangan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File LHR</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Penyusunan Rencana Penetapan Kinerja (termasuk Penentuan Target Kinerja)</td>
                                                                <td rowspan="2">Foto-foto, Tanda Tangan Pimpinan pada Konkin</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto-foto</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Tanda Tangan Pimpinan pada Konkin</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pemantauan Pencapaian Kinerja (Dialog Kinerja Organisasi)</td>
                                                                <td>Laporan Pelaksanaan DKO</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan DKO</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                        </di>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Pengelolaan Akuntabilitas Kinerja
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
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
                                                                <td rowspan="3"><b>Penyiapan Dokumen Perencanaan Kinerja (Rencana Strategis, Rencana Kerja Tahunan, Penetapan Kinerja)</b></td>
                                                                <td rowspan="3">Salinan SK Dirjen Pajak ttg Rencana Strategis, Rencana Kerja Tahunan, Kontrak Kinerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Salinan SK Dirjen Pajak ttg Rencana Strategis</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Rencana Kerja Tahunan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kontrak Kinerja</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3"><b>Pengelolaan dokumen perencanaan yang berorientasi hasil</b></td>
                                                                <td rowspan="3">Salinan SK Dirjen Pajak ttg Rencana Strategis, Rencana Kerja Tahunan, Kontrak Kinerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Salinan SK Dirjen Pajak ttg Rencana Strategis</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Rencana Kerja Tahunan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Kontrak Kinerja</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Pengelolaan IKU</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Pengelolaan IKU telah memenuhi prinsip SMART-C</td>
                                                                <td rowspan="3">softcopy Manual IKU, surat penetapan IKU dan trajectory (KPDJP), instruksi pembuatan IKU (KMK-467)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File softcopy Manual IKU</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File surat penetapan IKU dan trajectory (KPDJP)</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File instruksi pembuatan IKU (KMK-467)</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyusunan dan Penyampaian Laporan Kinerja Tepat Waktu</td>
                                                                <td>Surat Penyampaian Laporan NKO</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Surat Penyampaian Laporan NKO</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Validasi Pelaporan Kinerja (Capaian IKU) sesuai dengan Kinerja yang Dihasilkan</td>
                                                                <td>Laporan Hasil Validasi Capaian IKU</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Validasi Capaian IKU</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Reviu kompetensi SDM yang menangani akuntabilitas kinerja</td>
                                                                <td>Diklat dan IHT Pengelolaan Kinerja yang telah diikuti</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Diklat dan IHT Pengelolaan Kinerja yang telah diikuti</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Peningkatan Kapasitas SDM yang menangani akuntabilitas kinerja (kegiatan IHT/Bimbingan Teknis)</td>
                                                                <td>ND/Undangan IHT/Bimtek Pengelolaan Kinerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan IHT/Bimtek Pengelolaan Kinerja</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button to send files in the two accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseTwo')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include("template/footer.php") ?>