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
                        <h1 class="h3 mb-0 text-gray-800">Halaman Rencana Kerja Sekretariat</h1>
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
                                            Penandatanganan Pakta Integritas
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
                                                                            <td>Penandatanganan Pakta Integritas bagi seluruh pegawai di lingkungan Kanwil/Direktorat/Setditjen/UPT</td>
                                                                            <td>Dokumen Pakta</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiple" class="form-label">Upload Dokumen Pakta</label>
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
                                            Perancangan Pembangunan
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
                                                                            <td rowspan="2">Pencanangan Pembangunan Zona Integritas</td>
                                                                            <td rowspan="2">Piagam dan Dokumentasi</td>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultiplePiagam" class="form-label">Upload File Piagam</label>
                                                                                    <input class="form-control" type="file" id="formFileMultiplePiagam" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-success">Due</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="mb-3">
                                                                                    <label for="formFileMultipleDokumentasi" class="form-label">Upload File Dokumentasi</label>
                                                                                    <input class="form-control" type="file" id="formFileMultipleDokumentasi" multiple>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-success">Due</span>
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
                                            <!-- Button to send files in the second accordion -->
                                            <button type="button" class="btn btn-primary" onclick="sendFiles('collapseTwo')">Kirim Berkas</button>
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

        <!-- JavaScript Functions -->
        <script>
            async function uploadToOneDrive(files) {
                const accessToken = 'YOUR_ONE_DRIVE_ACCESS_TOKEN'; // Gantilah dengan access token yang valid
                const apiUrl = 'https://graph.microsoft.com/v1.0/me/drive/root:/YOUR_UPLOAD_PATH/:/content'; // Sesuaikan dengan path OneDrive Anda

                const headers = {
                    'Authorization': `Bearer ${accessToken}`,
                };

                // Loop through each file and upload to OneDrive
                for (const file of files) {
                    const formData = new FormData();
                    formData.append('file', file);

                    try {
                        const response = await fetch(apiUrl, {
                            method: 'PUT',
                            headers: headers,
                            body: formData,
                        });

                        if (response.ok) {
                            console.log(`File ${file.name} successfully uploaded to OneDrive.`);
                        } else {
                            console.error(`Failed to upload ${file.name} to OneDrive. Status: ${response.status}`);
                        }
                    } catch (error) {
                        console.error(`Error uploading file to OneDrive: ${error}`);
                    }
                }
            }

            function sendFiles(accordionId) {
                // Get the file inputs within the specified accordion
                var fileInputs = document.querySelectorAll('#' + accordionId + ' input[type="file"]');

                // Call the function to upload files to OneDrive
                uploadToOneDrive(fileInputs[0].files);
            }
        </script>

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