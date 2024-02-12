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
                        <h1 class="h3 mb-0 text-gray-800">Halaman Rencana Kerja Pembangunan Komponen Penataan Tatalaksana</h1>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File LHPPU</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                                                            <td><span class="label label-success">Due</span></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File SIKKA</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
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
                                                                        <tr>
                                                                            <td>Perancangan Inovasi berupa pemanfaatan teknologi yang berdampak pada penyelesaian tugas lebih efisien dan efektif</td>
                                                                            <td>Dokumen Inovasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Dokumen Inovasi</label>
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
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File print screen WISE</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File pajak.go.id. Kring Pajak</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File SIPP</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td><span class="label label-success">Due</span></td>
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
                                                                            <td><span class="label label-danger">Pending</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload File Laporan Monev</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                            <td><span class="label label-success">Due</span></td>
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