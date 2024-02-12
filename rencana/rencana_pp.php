<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KPP Pratama Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="img/logo_djp1.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('../template/sidebar.php'); ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include('../template/topbar.php'); ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Rencana Kerja Sub Tim Pembangunan Komponen Penguatan Pengawasan</h1>
                    </div>
                    <!-- Content Row -->
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Accordion -->
                        <div class="col-lg-12">
                            <div class="accordion" id="accordionExample">

                                <!-- Accordion Item 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Pengendalian Gratifikasi
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
                                                                            <td><b>Pelaksanaan public campaign gratifikasi</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="3">Sosialisasi dan Internalisasi Ketentuan Gratifikasi (KPK dan Kemenkeu) melalui kegiatan tatap muka</td>
                                                                            <td rowspan="3">ND/Undangan, Laporan Kegiatan, Foto/video kegiatan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Kegiatan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Daftar Foto/video kegiatan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sosialisasi melalui media internalisasi</td>
                                                                            <td>banner, poster, baliho, video, leaflet, dll</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File banner, poster, baliho, video, leaflet, dll</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>

                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sosialisasi melalui publikasi di media cetak, situs resmi unit kerja, dan/atau jejaring sosial</td>
                                                                            <td>print-screen publikasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File print-screen publikasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="3"><b>Penerapan Pengendalian Gratifikasi</b></td>
                                                                            <td rowspan="3">Laporan UPG, ttd Pakta Integritas, ttd Komitmen Pengendalian Gratifikasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan UPG</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan ttd Pakta Integritas</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan ttd Komitmen Pengendalian Gratifikasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Perancangan Inovasi yang mendukung upaya pengendalian gratifikasi di Unit Kerja</b></td>
                                                                            <td>Dokumen inovasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Dokumen inovasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
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
                                            Penerapan Sistem Pengendalian Internal Pemerintah (SPIP)
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
                                                                            <td><b>Pembangunan Lingkungan Pengendalian</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Peningkatan Peran Pengawasan dan Pembinaan Atasan Langsung</td>
                                                                            <td rowspan="2">Dokumentasi Dialog Kinerja Individu dan LHR Rapat Pembinaan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Dokumentasi Dialog Kinerja Individu</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File LHR Rapat Pembinaan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pelaksanaan Pemantauan Pengendalian Intern (PPPI), EIKR dan EPITE</td>
                                                                            <td>Laporan Hasil Pelaksanaan Pemantauan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Pelaksanaan Pemantauan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pelaksanaan Pemantauan Kode Etik dan Disiplin Pegawai</td>
                                                                            <td>Laporan Hasil Pelaksanaan Pemantauan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Pelaksanaan Pemantauan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Penilaian Risiko atas Pelaksanaan Kebijakan</b></td>
                                                                            <td>Peta/profil risiko unit kerja</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Peta/profil risiko unit kerja</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Kegiatan Pengendalian Berdasarkan Profil Risiko</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Penyusunan Mitigasi Risiko berdasarkan Profil Risikonya</td>
                                                                            <td>Daftar Rencana Aksi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Daftar Rencana Aksi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pelaksanaan Mitigasi Risiko (Rencana Aksi) </td>
                                                                            <td>Laporan Pelaksanaan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Pelaksanaan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pemantauan Pelaksanaan Mitigasi Risiko </td>
                                                                            <td>Laporan Pemantauan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Pemantauan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Sosialisasi dan Komunikasi SPIP</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="3">Sosialisasi melalui kegiatan tatap muka </td>
                                                                            <td rowspan="3">ND/Undangan, Daftar Hadir, Foto</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Foto</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sosialisasi melalui media internalisasi</td>
                                                                            <td>banner, leaflet, poster, dll</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File banner, leaflet, poster, dll</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Pengaduan Masyarakat
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
                                                                            <td>Pengelolaan Pengaduan Masyarakat</td>
                                                                            <td>Print screen aplikasi pengaduan (SIPP)</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Print screen aplikasi pengaduan (SIPP)</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tindak Lanjut atas Pengaduan Masyarakat</td>
                                                                            <td>Laporan Hasil Tindak lanjut pengaduan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Tindak lanjut pengaduan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>

                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Monitoring dan Evaluasi atas Tindak Lanjut Pengaduan Masyarakat</td>
                                                                            <td rowspan="2">ND dan Laporan Monev</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>

                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Tindak Lanjut atas Hasil Evaluasi</td>
                                                                            <td rowspan="2">Laporan Hasil Tindak Lanjut Monev</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan UPG</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Tindak Lanjut Monev</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
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
                                <!-- Accordion Item 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Whistleblowing System (WBS)
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                                                                            <td rowspan="3">Sosialisasi melalui kegiatan tatap muka</td>
                                                                            <td rowspan="3">ND/Undangan, Daftar Hadir, Foto</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Foto</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sosialisasi melalui media internalisasi</td>
                                                                            <td>banner, leaflet, poster, dll</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File banner, leaflet, poster, dll</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>

                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="4">Penerapan WBS</td>
                                                                            <td rowspan="4">Print screen aplikasi WBS, KMK, PMK, Perdirjen terkait WBS</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Print screen aplikasi WBS</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                                 
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Aplikasi KMK</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Aplikasi PMK</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Aplikasi Perdirjen terkait WBS</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Evaluasi atas Penerapan WBS</td>
                                                                            <td>Laporan Evaluasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Evaluasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                                 
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tindak Lanjut atas Hasil Evaluasi atas Penerapan WBS</td>
                                                                            <td>Laporan Tindak Lanjut</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Tindak Lanjut</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                                 
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- akhir -->
                                            <!-- Button to send files in the four accordion -->
                                            <button type="button" class="btn btn-primary" onclick="sendFiles('collapseFour')">Kirim Berkas</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion Item 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            Penanganan Benturan kepentingan
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
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
                                                                            <td>Pemetaan Benturan Kepentingan terkait Tugas dan Fungsi Utama</td>
                                                                            <td>ND/Laporan Pemetaan benturan kepentingan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND/Laporan Pemetaan benturan kepentingan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>

                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Perumusan Kebijakan Penanganan Benturan Kepentingan</td>
                                                                            <td>ND Pimpinan unit kerja</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND Pimpinan unit kerja</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>

                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Sosialisasi Kebijakan Penanganan Benturan Kepentingan</td>
                                                                            <td rowspan="2">ND/Undangan, Daftar Hadir</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND/Undangan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Daftar Hadir</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Implementasi Penanganan Benturan Kepentingan</td>
                                                                            <td rowspan="2">Penandatanganan Pakta Integritas, laporan implementasi penanganan benturan kepentingan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Penandatanganan Pakta Integritas</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File laporan implementasi penanganan benturan kepentingan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Evaluasi Penanganan Benturan Kepentingan </td>
                                                                            <td>Laporan Hasil Evaluasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Evaluasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                                 
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tindak Lanjut atas Evaluasi Penanganan Benturan Kepentingan</td>
                                                                            <td>Laporan Tindak Lanjut</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Tindak Lanjut</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                                 
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- akhir -->
                                            <!-- Button to send files in the five accordion -->
                                            <button type="button" class="btn btn-primary" onclick="sendFiles('collapseFive')">Kirim Berkas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Content Row -->

                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('../template/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>