<?php
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$user_name = $_POST['user_name'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$masuk = mysqli_query($koneksi,"SELECT * FROM login WHERE user_name='$user_name' AND password='$password'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($masuk);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
      
    $data = mysqli_fetch_assoc($masuk);


 
    // cek jika user login sebagai admin
    if($data['level']=="admin"){
        
        // buat session login dan username
        $_SESSION['user_name'] = $user_name;
        $_SESSION['level'] = "admin";

       
        
        // alihkan ke halaman dashboard admin
        header('location:admin');
 
    // cek jika user login sebagai pegawai
}else if($data['level']=="member"){
        // buat session login dan username
        $_SESSION['user_name'] = $user_name;
        $_SESSION['level'] = "member";
        
         
        // alihkan ke halaman dashboard operator
        header("location:pegawai");
    }
 
}else{
    
    header("login.php?pesan=gagal");
}
 
?>