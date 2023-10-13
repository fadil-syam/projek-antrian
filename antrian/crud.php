<?php
require_once('conneksi.php');

if(isset($_POST['input_user'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];

    $query = mysqli_query($conn,"insert into user (nis,nama) values('$nis','$nama')");
    if($query){
    header("location: indexs.php");
    }
}

?>

