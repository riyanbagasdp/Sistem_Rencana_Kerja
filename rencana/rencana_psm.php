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
                        <h1 class="h3 mb-0 text-gray-800">Halaman Rencana Kerja Sub Tim Pembangunan Komponen Penataan Sistem Manajemen SDM</h1>
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
                                            Pembangunan Komponen Penataan Sistem Manajemen SDM
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
                                                                            <td rowspan="4">Penyusunan Kebutuhan Pegawai dengan Mengacu pada Peta Jabatan dan Analisis Beban Kerja (ABK)</td>
                                                                            <td rowspan="4">Print screen ABK, Data Statistik dan Kebutuhan Pegawai per unit kerja, Urjab</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Print screen ABK</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Data Statistik</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Kebutuhan Pegawai per unit kerja</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Urjab</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pengumpulan aturan/kebijakan terkait rekrutmen pegawai, SK Penempatan Pegawai hasil rekrutrmen</td>
                                                                            <td rowspan="2">aturan dan SK Penempatan Pegawai</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Aturan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File SK Penempatan Pegawai</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Penempatan Pegawai hasil rekrutmen sesuai dengan kebutuhan dan kualifikasinya (mutasi internal)</td>
                                                                            <td>SK Mutasi Perbandingan dengan ABK</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File SK Mutasi Perbandingan dengan ABK</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pemantauan dan Evaluasi penempatan pegawai rekrutmen terhadap perbaikan kinerja unit kerja</td>
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
                                            Pola Mutasi Internal
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
                                                                            <td>Perumusan mekanisme penempatan pegawai pada unit kerja (mutasi internal)</td>
                                                                            <td>ND/LHR</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND/LHR</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pelaksanaan Mutasi Pegawai (internal unit) sesuai dengan aturan/kebijakan pola mutasi yang telah ditetapkan</td>
                                                                            <td>SK Mutasi Internal</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File SK Mutasi Internal</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>

                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Penyampaian Usulan Mutasi Pegawai (eksternal unit) dalam rangka penataan dan pengembangan karir pegawai</td>
                                                                            <td>Surat Usulan Mutasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Surat Usulan Mutasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>

                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pemantauan dan Evaluasi pola mutasi internal terhadap perbaikan kinerja</td>
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
                                            Pengembangan Pegawai Berbasis Kompetensi
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
                                                                            <td>Pelaksanaan Training Need Analysis (TNA)</td>
                                                                            <td>Laporan TNA Pegawai</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan TNA Pegawai</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Penyusunan Rencana Pengembangan Kompetensi Pegawai</td>
                                                                            <td>Jadwal Kegiatan IHT</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Jadwal Kegiatan IHT</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>

                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pendataan Kesenjangan antara Kompetensi Pegawai dengan Standar Kompetensi Jabatan</td>
                                                                            <td>Laporan Analisa Kesenjangan</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Analisa Kesenjangan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>

                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pelaksanaan Pendidikan dan Pelatihan, serta pengembangan kompetensi lainnya</td>
                                                                            <td rowspan="2">Surat Usulan Diklat/short course, Undangan/ND IHT, FGD, seminar, dll</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Surat Usulan Diklat/short course</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Undangan/ND IHT, FGD, seminar, dll</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pemantauan dan Evaluasi terhadap Hasil Pengembangan Kompetensi terhadap Kinerja Pegawai</td>
                                                                            <td rowspan="2">ND dan Laporan Monev</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                            Penetapan Kinerja Individu
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
                                                                            <td rowspan="3">Penetapan Kinerja Individu</td>
                                                                            <td rowspan="3">Kemenkeu-Three, Kemenkeu-Four, dan Kemenkeu-Five</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Kemenkeu-Three</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Kemenkeu-Four</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Kemenkeu-Five</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Penelaahan Indikator Kinerja Utama (IKU) individu telah selaras dengan sasaran organisasi, program kegiatan seksi dan output individu</td>
                                                                            <td>Peta Cascading</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Peta Cascading</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pengukuran Kinerja Individu (secara periodik)</td>
                                                                            <td rowspan="2">Prinscreen e-performance dan SIKKA</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Prinscreen e-performance</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Prinscreen SIKKA</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pemberian Reward berdasarkan hasil penilaian individu</td>
                                                                            <td rowspan="2">Program PKP, Pembayaran Renumerasi (PMK Tukin)</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Program PKP</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>

                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Program Pembayaran Renumerasi (PMK Tukin)</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Perancangan Inovasi yang mendukung pengukuran kinerja yang objektif berintegritas</td>
                                                                            <td>Dokumen inovasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Dokumen inovasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                            Penegakan Aturan Disiplin/Kode Etik Pegawai
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
                                                                            <td><b>Sosialisasi dan Internalisasi Aturan Disiplin dan Kode Etik Pegawai DJP</b></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Foto/video kegiatan</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Media Internalisasi</td>
                                                                            <td>Bukti Penyampaian</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File (banner, poster,video, situs resmi, leaflet, dll)</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>

                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Penerapan Aturan Disiplin dan Kode Etik Pegawai dalam pelaksanaan tugas dan dalam pergaulan hidup sehari-hari</b></td>
                                                                            <td>Laporan Hasil Pemantauan Kode Etik dan Disiplin (UKI)</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Hasil Pemantauan Kode Etik dan Disiplin (UKI)</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>

                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Perancangan Inovasi Strategi Internalisasi Unit Kerja dalam Rangka Penerapan Aturan Disiplin dan Kode Etik Pegawai DJP</b></td>
                                                                            <td>Dokumen inovasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Dokumen inovasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                            Sistem Informasi Kepegawaian
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
                                                                            <td>Penyusunan Jadwal Pemutakhiran Data Pegawai pada Aplikasi SIKKA secara berkala</td>
                                                                            <td>ND</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File ND</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td rowspan="2">Pemutakhiran Data Pegawai pada Aplikasi SIKKA</td>
                                                                            <td rowspan="2">Permohonan Pemutakhiran Data Pegawai, printscreen update data SIKKA</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Permohonan Pemutakhiran Data Pegawai</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File printscreen update data SIKKA</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
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