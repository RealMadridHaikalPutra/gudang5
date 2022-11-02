<?php
require '../gudang/function.php';
require '../cek.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Prepare - Mirorim</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Prepare -  Mirorim</a>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#logoutModal" id="userDropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Preparation</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-splotch"></i></div>
                                All Request
                            </a>
                            <div class="sb-sidenav-menu-heading">Worker</div>
                            <a class="nav-link" href="ayung.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-horse"></i></div>
                                Ayung
                            </a>
                            <a class="nav-link" href="ana.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-fish"></i></div>
                                Ana
                            </a>
                            <a class="nav-link" href="dani.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-dragon"></i></div>
                                Dani
                            </a>
                            <a class="nav-link" href="ilham.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-spider"></i></div>
                                Ilham
                            </a>
                            <a class="nav-link active" href="rido.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cat"></i></div>
                                Rido
                            </a>
                            <a class="nav-link" href="salsa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-paw"></i></div>
                                Salsa
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Order List Rido</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>No</th>
                                                <th>Status</th>
                                                <th>Name</th>
                                                <th>In Order To</th>
                                                <th>SKU</th>
                                                <th>Quantity</th>
                                                <th>Courier</th>
                                                <th>Type</th>
                                                <th>Note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $ambildatapesan = mysqli_query($conn, "SELECT * FROM reqpre where worker = 'Rido'");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambildatapesan)){
                                                $idb = $data['idspecial'];
                                                $cek = $data['cek'];
                                                $nama = $data['nama'];
                                                $worker = $data['worker'];
                                                $sku = $data['sku'];
                                                $quantity = $data['quantity'];
                                                $kurir = $data['kurir'];
                                                $note = $data['note'];
                                                $status = $data['status'];
                                        ?>
                                            <tr>
                                            <form method="post">
                                                <td><input type="checkbox" id="sudah" name="cek" value="Sudah">
                                                <input type="hidden" name="idb" value="<?=$idb;?>">
                                                <button class="btn btn-warning" type="submit" name="ridodone">Done</button>
                                            </form>
                                                <td><?=$i++;?></td>
                                                <td><?=$cek;?></td>
                                                <td><?=$nama;?></td>
                                                <td><?=$worker;?></td>
                                                <td class="text-uppercase"><?=$sku;?></td>
                                                <td><?=$quantity;?></td>
                                                <td><?=$kurir;?></td>
                                                <td><?=$status;?></td>
                                                <td><?=$note;?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>
    </body>
</html>
