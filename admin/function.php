<?php
session_start();

$conn = mysqli_connect("sql100.epizy.com","epiz_32867233","9n55nDATOa","epiz_32867233_gudang5");

//barangmasuk
if(isset($_POST['barangmasuk'])){
    $worker = $_POST['worker'];
    $nama = $_POST['nama'];
    $sku = $_POST['sku'];
    $quantity = $_POST['quantity'];
    $reject = $_POST['reject'];
    $rak = $_POST['rak'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    $cekqtysekarang = mysqli_query($conn, "select * from stok where sku='$sku'");
    $ambildata = mysqli_fetch_array($cekqtysekarang);

    $qtysekarang = $ambildata['quantity'];
    $tambahqty = $qtysekarang+$quantity;

    $addtomasuk = mysqli_query($conn, "INSERT INTO masuk(date, worker, nama, sku, quantity, reject, rak, status) values('$date','$worker','$nama','$sku','$quantity','$reject','$rak','$status')");
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

    $cekdata = mysqli_query($conn, "SELECT * FROM stok where sku='$sku'");
    $cek = mysqli_num_rows($cekdata);

    if($cek==0){
        mysqli_query($conn, "INSERT INTO stok(nama, sku, quantity, rak) values('$nama','$sku','$quantity','$rak')");
    } else {
        echo "<script>alert('Data SKU Sudah Ada')</script>";
    }

}

//prepare keluar
if(isset($_POST['prekeluar'])){
    $worker = $_POST['worker'];
    $date = $_POST['date'];
    $nama = $_POST['nama'];
    $sku = $_POST['sku'];
    $skugudang = $_POST['skugudang'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $note = $_POST['note'];

    $addtopre = mysqli_query($conn, "INSERT INTO preparation(date, worker, nama, sku, skugudang, quantity, status, note) values('$date','$worker','$nama','$sku','$skugudang','$quantity','$status','$note')");
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
    $date = $_POST['date'];

    $cekqtysekarang = mysqli_query($conn, "select * from stok where sku='$sku'");
    $ambildata = mysqli_fetch_array($cekqtysekarang);

    $qtysekarang = $ambildata['quantity'];
    $tambahqty = $qtysekarang-$quantity;

    $addtokeluar = mysqli_query($conn, "INSERT INTO keluar(date, picker, nama, sku, quantity, status) values('$date','$picker','$nama','$sku','$quantity','$status')");
    $updateqty = mysqli_query($conn, "update stok set quantity='$tambahqty' where sku='$sku'");
    if($addtomasuk&&$updateqty){
        header('location:barangkeluar.php');
    } else {
        header('location:barangkeluar.php');
    }
}

//update stok
if(isset($_POST['editbarang'])){
    $nama = $_POST['nama'];
    $sku = $_POST['sku'];
    $quantity = $_POST['quantity'];
    $rak = $_POST['rak'];

    $updatestok = mysqli_query($conn, "update stok set nama='$nama', quantity='$quantity', rak='$rak' where sku='$sku'");
    if($updatestok){
        header('location:index.php');
    } else {
        header('location:index.php');
    }
    
}

//HAPUS STOK
if(isset($_POST['hapusbarang'])){
    $idb = $_POST['idb'];

    $hapus = mysqli_query($conn, "delete from stok where idbarang='$idb'");
    if($hapus){
        header('location:index.php');
    } else {
        header('location:index.php');
    }
}

//Hapus Semua
if(isset($_POST['hapussemua'])){
    $idb = $_POST['idmasuk'];

    $hapussemua = mysqli_query($conn, "delete from masuk");
    if($hapussemua){
        header('location:barangmasuk.php');
    } else {
        header('location:barangmasuk.php');
    }
}

//Hapus Semua
if(isset($_POST['hapuskeluar'])){
    $idb = $_POST['idkeluar'];

    $hapussemua = mysqli_query($conn, "delete from keluar");
    if($hapussemua){
        header('location:barangkeluar.php');
    } else {
        header('location:barangkeluar.php');
    }
}

//Hapus Semua
if(isset($_POST['hapuspre'])){
    $idb = $_POST['idpre'];

    $hapussemua = mysqli_query($conn, "delete from preparation");
    if($hapussemua){
        header('location:preparation.php');
    } else {
        header('location:preparation.php');
    }
}



?>