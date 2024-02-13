<?php include("template/topbar.php") ?>
<?php include("template/sidebar.php") ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Pembangunan Komponen Manajemen Perubahan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Sub Tim Manajemen Perubahan</li>
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
                                Pembentukan Tim Pembangunan Zona Integritas
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
                                                                <td rowspan="2">Rapat Penentuan Keanggotaan Tim Pembangunan</td>
                                                                <td rowspan="2">ND/Undangan Rapat dan LHR</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan Rapat</label>
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
                                                                <td>Penetapan Tim Pembangunan</td>
                                                                <td>SK Tim</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SK Tim</label>
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
                                Penyusunan Dokumen Rencana Pembangunan Zona Integritas (ZI)
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
                                                                <td rowspan="2">Rapat Penyusunan Rencana Kerja Pembangunan ZI</td>
                                                                <td rowspan="2">ND/Undangan Rapat dan LHR</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan Rapat</label>
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
                                                                <td>Penentuan Target Prioritas yang Relevan</td>
                                                                <td>LHR</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File LHR</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penetapan Rencana Kerja Pembangunan ZI</td>
                                                                <td>ND/SK Penetapan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/SK Penetapan</label>
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
                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Penyusunan Agenda Rapat Pembangunan Zona Integritas
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
                                                                <td>Penyusunan Agenda Rapat Pembangunan Zona Integritas</td>
                                                                <td>Dokumen Agenda</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Agenda</label>
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
                                <!-- Button to send files in the three accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseThree')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Sosialisasi Rencana Kerja Pembangunan ZI
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                                                                <td><b>Pegawai</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Sosialisasi Tatap Muka</td>
                                                                <td rowspan="2">ND/Undangan Sosialisasi, Foto/video kegiatan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan Sosialisasi</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Foto/video kegiatan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Media Internalisasi</td>
                                                                <td>(banner, poster, baliho, video, situs resmi, leaflet, dll)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File banner, poster, baliho, video, situs resmi, leaflet</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Stakeholder</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3">Sosialisasi Tatap Muka (contoh: saat penyuluhan/sosialisasi peraturan pajak, dll)</td>
                                                                <td rowspan="3">Undangan, foto/video kegiatan, laporan pelaksanaan kegiatan</td>
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
                                                                        <label for="formFileMultiple" class="form-label">Upload File foto/video kegiatan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File laporan pelaksanaan kegiatan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Media Internalisasi</td>
                                                                <td>(banner, poster, baliho, video, situs resmi, leaflet, dll)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File banner, poster, baliho, video, situs resmi, leaflet</label>
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
                                <!-- Button to send files in the four accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseFour')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Pembangunan Budaya Kerja dan Pola Pikir
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
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
                                                                <td><b>Penyiapan Dokumen Peran Kepala Kantor sebagai Role Model Pembangunan ZI menuju WBBM</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Rekapitulasi Kehadiran</td>
                                                                <td rowspan="2">printscreen, monitoring absensi (SIKKA)</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File printscreen</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File monitoring absensi (SIKKA)</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyampaian SPT Tahunan PPh Tepat Waku</td>
                                                                <td>Bukti Penyampaian</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Bukti Penyampaian</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyampaian LHKPN tepat waktu</td>
                                                                <td>Bukti Penyampaian</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Bukti Penyampaian</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyampaan LP2P tepat waktu</td>
                                                                <td>Bukti Penyampaian</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Bukti Penyampaian</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaporan Gratifikasi</td>
                                                                <td>Laporan UPG-unit kerja</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan UPG-unit kerja</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kepala Kantor memimpin rapat perencanaan, pelaksanaan, maupun monitoring kegiatan pembangunan ZI</td>
                                                                <td>LHR</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File LHR</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Foto-foto pimpinan dalam kegiatan-kegiatan terkait pembangunan ZI</td>
                                                                <td rowspan="2">LHR, foto-foto/video kegiatan</td>
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
                                                                        <label for="formFileMultiple" class="form-label">Upload File foto-foto/video kegiatan</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Penetapan Agen Perubahan di KPP</b></td>
                                                            </tr>

                                                            <tr>
                                                                <td rowspan="2">Rapat Penentuan Parameter, Personil dan Mekanisme Kerja Agen Perubahan</td>
                                                                <td rowspan="2">ND/Undangan Rapat, LHR</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ND/Undangan Rapat</label>
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
                                                                <td>Penetapan Agen Perubahan di KPP</td>
                                                                <td>SK Tim</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SK Tim</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penyusunan Rencana Kegiatan Internalisasi oleh Agen Perubahan di KPP (berkoordinasi dengan Tim Internalisasi Kepatuhan)</td>
                                                                <td>Dokumen Rencana Kegiatan ICV</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Dokumen Rencana Kegiatan ICV</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Pelaksanaan Program Internalisasi Corporate Value (ICV) unit kerja -> Surat Dirjen No.S53/PJ/2018</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sosialisasi Program ICV</td>
                                                                <td>....</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File ...</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Program Internalisasi Nilai-Nilai Kementerian Keuangan (morning activity, doa pagi, team building, pembinaan mental, dll)</td>
                                                                <td>Laporan Pelaksanaan Program ICV</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan Program ICV</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Program Inisiatif Antikorupsi</td>
                                                                <td>Laporan Pelaksanaan Program ICV</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan Program ICV</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Program Budaya Kementerian Keuangan</td>
                                                                <td>Laporan Pelaksanaan Program ICV</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan Program ICV</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksanaan Program Budaya DJP</td>
                                                                <td>Laporan Pelaksanaan Program ICV</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan Program ICV</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Program internalisasi lainnya (inisiatif dan inovasi unit kerja)</td>
                                                                <td>Laporan Pelaksanaan Program ICV</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan Program ICV</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>

                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="3"><b>Memastikan Partisipasi Pegawai dalam Pembangunan ZI menuju WBBM</b></td>
                                                                <td rowspan="3">SK Tim, Undangan/ND/Daftar Hadir kegiatan ZIWBK, foto/video kegiatan</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File SK Tim</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Undangan/ND/Daftar Hadir kegiatan ZIWBK</label>
                                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                    </div>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File foto/video kegiatan</label>
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
                                <!-- Button to send files in the five accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseFive')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Pemantuan dan Evaluasi Pembangunan WBBM
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
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
                                                                <td rowspan="2">Pemantuan dan Evaluasi Pembangunan WBBM</td>
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
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button to send files in the six accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseSix')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Tindak Lanjut Hasil Pemantauan dan Evaluasi WBBM
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
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
                                                                <td>Tindak Lanjut Hasil Pemantauan dan Evaluasi WBBM (termasuk menyusun Laporan Hasil Tindak Lanjutnya)</td>
                                                                <td>Laporan Hasil Tindak Lanjut</td>
                                                                <td>
                                                                    <div class="mb-3">
                                                                        <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Tindak Lanjut</label>
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
                                <!-- Button to send files in the seven accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseSeven')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Item 8 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Rencana Kerja Lainnya yang merupakan inovasi unit kerja terkait Manajemen Perubahan
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
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
                                                                <td>Rencana Kerja Lainnya yang merupakan inovasi unit kerja terkait Manajemen Perubahan</td>
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
                                <!-- Button to send files in the eight accordion -->
                                <button type="button" class="btn btn-primary" onclick="sendFiles('collapseEight')">Kirim Berkas</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include("template/footer.php") ?>