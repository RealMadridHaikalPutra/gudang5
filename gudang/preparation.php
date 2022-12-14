<?php
require 'function.php';
require '../cek.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gudang - Mirorim</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-warehouse"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Gudang - Mirorim</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-warehouse"></i>
                    <span>Stok Gudang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Transmigration
            </div>

            <!-- Nav Item - Transmigration -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Barang Preparation</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="barangmasuk.php">Masuk</a>
                        <a class="collapse-item" href="preparation.php">Keluar</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="barangkeluar.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Barang Keluar</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pesan.php">
                    <i class="far fa-envelope"></i>
                    <span>Pesan</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Gudang</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form id="contact-form" action="" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="worker">Worker</label>
                                <input class="form-control" name="worker" id="worker" placeholder="Masukan Nama Worker" type="text" required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input class="form-control" name="date" id="date" type="datetime-local" required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="skutoko">SKU Toko</label>
                                <input class="form-control text-uppercase" name="sku" id="sku" placeholder="SKU Toko" type="text">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Nama Barang</label>
                                <input class="form-control" name="nama" id="nama" placeholder="Nama Barang" type="text" required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="skugudang">SKU Gudang</label>
                                <input class="form-control text-uppercase" name="skugudang" id="skugudang" placeholder="SKU Gudang" type="text" required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input class="form-control" name="quantity" id="quantity" placeholder="Quantity" type="number" required="">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group" method="post">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status" placeholder="status" type="select" required="">
                                    <option value="On Progress">On Process</option>
                                    <option value="Done">Done</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="Note">Note</label>
                                <input class="form-control" name="note" id="note" placeholder="note" type="text">
                            </div>
                            </div>
                            </div>
                            <div class="text-right">
                            <button class="btn btn-danger solid blank" type="submit" name="prekeluar"> Add barang Keluar</button>
                            </div>
                            <br>
                            </form>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-6">
                        <button class="btn btn-primary">
                                <a class="fas fa-download" href="exportpre.php"></a>
                        </button>
                        <?php
                            $hapusdata = mysqli_query($conn, "SELECT * FROM preparation");
                            while($hapus=mysqli_fetch_array($hapusdata)){
                                $idb = $hapus['idpre'];
                            }
                            
                        ?>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapuspre<?=$idb;?>">
                            Delete Semua History</button>
                        </div>
                        </div>
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Riwayat Barang Prepare</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Worker</th>
                                            <th>Date</th>
                                            <th>Back</th>
                                            <th>SKU Toko</th>
                                            <th>Name</th>
                                            <th>SKU Gudang</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Note</th>
                                            <th>Update Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $ambilsemuadatapre = mysqli_query($conn, "SELECT * FROM preparation");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadatapre)){
                                            $idb = $data['idpre'];
                                            $worker = $data['worker'];
                                            $date = $data['date'];
                                            $nama = $data['nama'];
                                            $sku = $data['sku'];
                                            $skugudang = $data['skugudang'];
                                            $quantity = $data['quantity'];
                                            $status = $data['status'];
                                            $note = $data['note'];
                                            $balik = $data['balik'];
                                        ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$worker;?></td>
                                            <td><?=$date;?></td>
                                            <td><?=$balik;?></td>
                                            <td class="text-uppercase"><?=$sku;?></td>
                                            <td><?=$nama;?></td>
                                            <td class="text-uppercase"><?=$skugudang;?></td>
                                            <td><?=$quantity;?></td>
                                            <td><?=$status;?></td>
                                            <td><?=$note;?></td>
                                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#update<?=$idb;?>">
                                                Update</button>
                                            </td>
                                        </tr>
                                        <!-- The Edit -->
                                        <div class="modal fade" id="update<?=$idb;?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update Progress</h4>
                                                </div>

                                                <!-- Modal body -->
                                                <form method="post">
                                                <div class="modal-body">
                                                    <input type="datetime-local" class="form-control" name="balik" required="">
                                                    <br>
                                                    <select class="form-control" name="status" id="status" required="">
                                                        <option value="Done">Done</option>
                                                        <option value="On Progress">On Progress</option>
                                                    </select>
                                                    <input type="hidden" name="idb" value="<?=$idb;?>" class="form-control" required="">
                                                    <br>
                                                    <button type="submit" class="btn btn-warning" name="updatepre">Update</button>
                                                </div>
                                                </form>

                                                </div>
                                            </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            </div>
            <!-- End of Main Content -->
            <!-- The Delete -->
            <div class="modal fade" id="hapuspre<?=$idb;?>">
                <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Semua Riwayat</h4>
                    </div>

                <!-- Modal body -->
                    <form method="post">
                        <div class="modal-body">
                            Mau Hapus Semua Riwayat?
                            <input type="hidden" name="idb" value="<?=$idb;?>">
                            <br>
                            <br>
                         <button type="submit" class="btn btn-danger" name="hapuspre">Hapus</button>
                        </div>
                    </form>

                </div>
                </div>
            </div>      

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
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