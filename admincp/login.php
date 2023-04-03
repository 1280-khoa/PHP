<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1 ";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location: index.php");
		}else{
			echo '<scrips>alert("Tài khoản hoặc mật khẩu không đúng !");</scrips>';
			header("Location: login.php");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <style type="text/css">
    	/*body{
    		background: #f2f2f2;
    	}
    	.wapper-login{
    		width: 15%;
    		margin: 0 auto;
    	}
    	table.table-login{
    		width: 100%;
    	}
    	table.table-login tr td{
    		padding: 5px;
    	}*/

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: rgb(141,194,111);
  background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
    </style>
</head>
<body>
	<!-- <div class="wapper-login">
		<form action="" autocomplete="off" method="POST">
			<table border="1" class="table-login" style="text-align: center;">
				<tr>
					<td colspan="2"><h3>Đăng nhập Admin</h3></td>
				</tr>
				<tr>
					<td>Tài khoản</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
				</tr>
			</table>
		</form>
	</div> -->

	<form action="" autocomplete="off" method="POST">
		<div class="login-page">
		  <div class="form">
			      <input type="text" name="username" placeholder="Tài khoản"/>
			      <input type="password" name="password" placeholder="Mật khẩu"/>
			      <button type="submit" name="dangnhap">Đăng nhập</button>
		  </div>
		</div>
	</form>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('.message a').click(function(){
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>

