<?php
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if($email == "" || $matkhau=="" || $tenkhachhang == ""|| $dienthoai == ""|| $diachi == ""){
            echo '<p style="color: red";>Vui lòng nhập đầy đủ thông tin</p>';
        }elseif($sql_dangky){
            echo '<p style="color: green";>Bạn đã đăng ký thành công</p>';
            $_SESSION['dangky'] = $tenkhachhang;

            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
    }
?>

<!-- <p>Đăng ký thành viên</p>
<style type="text/css">
	table.dangky tr td{
		padding: 5px;
	}
</style>
<form action="" method="POST">
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" size="50" name="hovaten"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" size="50" name="email"></td>
	</tr>
	<tr>
		<td>Điện thoại</td>
		<td><input type="text" size="50" name="dienthoai"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" size="50" name="diachi"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="text" size="50" name="matkhau"></td>
	</tr>
	<tr>
		<td><input type="submit" name="dangky" value="Đăng ký"></td>
		<td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
	</tr>
</table>
</form> -->
<div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Đăng ký thành viên</h3>
            <form action="" method="POST">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  	
                    <input type="text" size="50" name="hovaten" class="form-control form-control-lg" />
                    <label class="form-label" name="firstName">Họ Và Tên</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  	
                    <input type="password" size="50" name="matkhau" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Mật Khẩu</label>
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                  	
                    <input type="text" size="50" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" size="50" name="dienthoai" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Số Điện Thoại</label>
                  </div>

                </div>
                 <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" size="50" name="diachi" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Địa Chỉ</label>
                  </div>

                </div>
              </div>

             

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="dangky" value="Đăng ký" />
                <td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>