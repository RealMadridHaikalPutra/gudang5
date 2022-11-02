<?php
require '../gudang/function.php';
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

    <title>Admin - Mirorim</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin - Mirorim</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <div class="sidebar-heading">
                Gudang
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-warehouse"></i>
                    <span>Stok Gudang</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Toko
            </div>

            <!-- Nav Item - Transmigration -->
            <li class="nav-item">
                <a class="nav-link" href="order.php">
                    <i class="fas fa-paper-plane"></i>
                    <span>Order</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="special.php">
                    <i class="fas fa-plane"></i>
                    <span>Special Order</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Preparation
            </div>

            <!-- Nav Item - Transmigration -->
            <li class="nav-item">
                <a class="nav-link" href="request.php">
                    <i class="fas fa-splotch"></i>
                    <span>All Request</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="reqpre.php">
                    <i class="fas fa-bullhorn"></i>
                    <span>Order Preparation</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
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
                        <br>
                        <form id="contact-form" action="" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                            <div class="error-container"></div>
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama">Nama Barang</label>
                                    <input class="form-control" name="nama" id="nama" placeholder="Nama Barang" type="text">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" method="post">
                                        <label for="worker">Worker</label>
                                        <select class="form-control" name="worker" id="worker" placeholder="Worker" type="" required="">
                                            <option value="Ayung">Ayung</option>
                                            <option value="Ana">Ana</option>
                                            <option value="Dani">Dani</option>
                                            <option value="Ilham">Ilham</option>
                                            <option value="Rido">Rido</option>
                                            <option value="Salsa">Salsa</option>
                                        </select>
                                    </div>
                                    </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sku">SKU Toko</label>
                                    <input class="form-control  text-uppercase" name="sku" id="sku" placeholder="SKU Toko" type="text" required="">
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input class="form-control" name="quantity" id="quantity" placeholder="Quantity" type="number" required>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group" method="post">
                                    <label for="kurir">Courier</label>
                                    <select class="form-control" name="kurir" id="kurir" placeholder="Courier" required="">
                                        <option value="-">--</option>
                                        <option value="SiCepat">SiCepat</option>
                                        <option value="JNE">JNE</option>
                                        <option value="J&T">J&T</option>
                                        <option value="Shopee Express">Shopee Express</option>
                                        <option value="Anter Aja">Anter Aja</option>
                                        <option value="Grab/Gojek">Grab/Gojek</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <input class="form-control" name="note" id="note" placeholder="Note" type="text" require>
                                    </div>
                                    </div>
                                <div class="col-md-4">
                                <div class="form-group" method="post">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status" placeholder="Status" type="" required="">
                                        <option value="Request">Request</option>
                                        <option value="Stok">Stock</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="cek" value="Belum" id="cek" placeholder="cek" type="hidden">
                                    </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                <button class="btn btn-primary solid blank" type="submit" name="adminpesan">Submit</button>
                                </div>
                                <br>
                                </form>
                        <h1 class="mt-4">Riwayat Special Order</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
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
                                            $ambildatapesan = mysqli_query($conn, "SELECT * FROM reqpre");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambildatapesan)){
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