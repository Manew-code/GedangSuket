<?php
$Nama = $_POST['Nama'];
$Tanggal = $_POST['Tanggal'];
$Alamat = $_POST['Alamat'];
$Hp = $_POST['Hp'];
$Jumlah = $_POST['Jumlah'];
$Harga = $_POST['Harga'];
$Layanan = $_POST['Layanan'];

$conn = new mysqli('localhost','root','','laundry');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO pelanggan(Nama, Tanggal, Alamat, Hp, Jumlah, Harga, Pelayanan)
    VALUES(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss",$Nama, $Tanggal, $Alamat, $Hp, $Jumlah, $Harga, $Layanan);
    if($stmt->execute()){
        echo "<script>window.open('database.php','_self')</script>";
    }
    else{
        echo"Isi dulu ngab gimana sih";
        $stmt->close();
    }
    $conn->close();
}


?>