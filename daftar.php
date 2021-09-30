<?php

include "koneksi.php";


if (isset($_POST['register']))
{


$username=$_POST['username'];
$p=md5($_POST['pass']);
$nama=$_POST['nama'];
$email=$_POST['email'];
$level=$_POST['level'];

$lihat=$kon -> query ("select * from users where email='$email'");
$cek=$lihat -> num_rows;

if ($email==""){
	echo "<script>
	alert('Maaf Email Harus Diisi');
	document.location.href = 'index.php';  
	</script>";

}elseif($cek > 0){
	echo "<script>
	alert('Email Telah Terdaftar');
	document.location.href = 'index.php';  
	</script>";
}else{



$input=$kon -> query ("insert into users (nama, username, email, password, level) values ('$nama', '$username', '$email', '$p', '$level') ");

echo "<script>
	alert('Registrasi Berhasil');
	document.location.href = 'index.php';  
	</script>";
}
}


?>