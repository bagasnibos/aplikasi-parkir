<?php

session_start();

include('koneksi.php');

$username     = $_POST['username'];
$password      = MD5($_POST['password']);

//query
$query  = "SELECT * FROM tbl_user WHERE username='$username'";
$result     = mysqli_query($connection, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);

if($num_row >=1) {
    
    echo "success";

    $_SESSION['id']       = $row['id'];
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['username']       = $row['username'];

} else {
    
    echo "error";

}

?>