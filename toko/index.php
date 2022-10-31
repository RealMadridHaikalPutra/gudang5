<?php
require '../admin/function.php';
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
        <title>Toko - Mirorim</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Toko Mirorim</a>
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
                            <div class="sb-sidenav-menu-heading">Toko</div>
                            <a class="nav-link active" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></div>
                                Order
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid">
                        <br>
                        <form id="contact-form" action="" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                            <div class="error-container"></div>
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group" method="post">
                                        <label for="picker">Picker</label>
                                        <select class="form-control" name="picker" id="picker" placeholder="Picker" type="" required="">
                                            <option value="Ratih">Ratih</option>
                                            <option value="Intan">Intan</option>
                                            <option value="Rido">Rido</option>
                                            <option value="Robby">Robby</option>
                                        </select>
                                    </div>
                                    </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama">Nama Barang</label>
                                    <input class="form-control" name="nama" id="nama" placeholder="Nama Barang" type="text">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" method="post">
                                        <label for="kirimke">In Order To</label>
                                        <select class="form-control" name="kirimke" id="kirimke" placeholder="In Order To" type="" required="">
                                            <option value="Gudang">Gudang</option>
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
                                        <input class="form-control" name="note" id="note" placeholder="Note" type="text">
                                    </div>
                                    </div>
                                <div class="col-md-4">
                                <div class="form-group" method="post">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status" placeholder="Status" type="" required="">
                                        <option value="Refill">Refill</option>
                                        <option value="Request">Request</option>
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
                                <button class="btn btn-primary solid blank" type="submit" name="kirimpesan">Submit</button>
                                </div>
                                <br>
                                </form>
                        <h1 class="mt-4">Riwayat Pesan</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Status</th>
                                                <th>Picker</th>
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
                                            $ambildatapesan = mysqli_query($conn, "SELECT * FROM pesan");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambildatapesan)){
                                                $idb = $data['idtoko'];
                                                $check = $data['cek'];
                                                $picker = $data['picker'];
                                                $nama = $data['nama'];
                                                $kirimke = $data['kirimke'];
                                                $sku = $data['sku'];
                                                $quantity = $data['quantity'];
                                                $kurir = $data['kurir'];
                                                $note = $data['note'];
                                                $status = $data['status'];
                                        ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$check;?></td>
                                                <td><?=$picker;?></td>
                                                <td><?=$nama;?></td>
                                                <td><?=$kirimke;?></td>
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
    </body>
</html>
