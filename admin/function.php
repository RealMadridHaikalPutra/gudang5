<?php
session_start();

$conn = mysqli_connect("localhost","root","","gudang5");


//barangmasuk
if(isset($_POST['barangmasuk'])){
    $worker = $_POST['worker'];
    $nama = $_POST['nama'];
    $sku = $_POST['sku'];
    $quantity = $_POST['quantity'];
    $reject = $_POST['reject'];
    $rak = $_POST['rak'];
    $status = $_POST['status'];

    $cekqtysekarang = mysqli_query($conn, "select * from stok where sku='$sku'");
    $ambildata = mysqli_fetch_array($cekqtysekarang);

    $qtysekarang = $ambildata['quantity'];
    $tambahqty = $qtysekarang+$quantity;

    $addtomasuk = mysqli_query($conn, "INSERT INTO masuk(worker, nama, sku, quantity, reject, rak, status) values('$worker','$nama','$sku','$quantity','$reject','$rak','$status')");
    $updateqty = mysqli_query($conn, "update stok set quantity='$tambahqty' where sku='$sku'");
    if($addtomasuk&&$updateqty){
        header('location:barangmasuk.php');
    } else {
        header('location:barangmasuk.php');
    }
}

//Stok
if(isset($_POST['barangbaru'])){
    $nama = $_POST['nama'];
    $sku = $_POST['sku'];
    $quantity = $_POST['quantity'];
    $rak = $_POST['rak'];

    $addtostok = mysqli_query($conn, "INSERT INTO stok(nama, sku, quantity, rak) values('$nama','$sku','$quantity','$rak')");
    if($addtostok){
        header('location:index.php');
    } else {
        header('location:index.php');
    }

}

//prepare keluar
if(isset($_POST['prekeluar'])){
    $worker = $_POST['worker'];
    $nama = $_POST['nama'];
    $sku = $_POST['sku'];
    $skugudang = $_POST['skugudang'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    $addtopre = mysqli_query($conn, "INSERT INTO preparation(worker, nama, sku, skugudang, quantity, status) values('$worker','$nama','$sku','$skugudang','$quantity','$status')");
    if($addtopre){
        header('location:preparation.php');
    } else {
        header('location:preparation.php');
    }
}

//barang keluar
if(isset($_POST['barangkeluar'])){
    $picker = $_POST['picker'];
    $nama = $_POST['nama'];
    $sku = $_POST['sku'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    $cekqtysekarang = mysqli_query($conn, "select * from stok where sku='$sku'");
    $ambildata = mysqli_fetch_array($cekqtysekarang);

    $qtysekarang = $ambildata['quantity'];
    $tambahqty = $qtysekarang-$quantity;

    $addtokeluar = mysqli_query($conn, "INSERT INTO keluar(picker, nama, sku, quantity, status) values('$picker','$nama','$sku','$quantity','$status')");
    $updateqty = mysqli_query($conn, "update stok set quantity='$tambahqty' where sku='$sku'");
    if($addtomasuk&&$updateqty){
        header('location:barangkeluar.php');
    } else {
        header('location:barangkeluar.php');
    }
}





?>