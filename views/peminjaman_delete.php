<?php
//membuat query untuk hapus data
$sql="DELETE FROM peminjaman WHERE id ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=peminjaman&actions=tampil');</script>";
}else{
    echo"<script> alert ('Sorry !!! Data Not Deleted Successfully') window.location.assign('?page=peminjaman&actions=tampil');</scripr>";
}

