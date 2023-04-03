<?php
  if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1 ";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);

    if($count>0){
      $row_data = mysqli_fetch_array($row);
      $_SESSION['dangky'] = $row_data['tenkhachhang'];
      $_SESSION['email'] = $row_data['email'];

      $_SESSION['id_khachhang'] = $row_data['id_dangky'];
      header("Location: index.php?quanly=giohang");
    }else{
      echo '<p style="color: red;">Email hoặc Mật khẩu sai ! Vui lòng nhập lại !</p>';
    }
  }
?>

        <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Đăng nhập khách hàng</h3>
            <form action="" method="POST">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  	
                     <label class="form-control-label">Email</label>
                                <input type="text" size="50" name="email" placeholder="Email..." class="form-control">
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  	
                   <label class="form-control-label">Mật Khẩu</label>
                                <input type="password" size="50" name="password" placeholder="Mật khẩu..."class="form-control" i>
                  </div>

                </div>

              </div>
              <div class="mt-4 pt-2">
                <input type="submit" name="dangnhap"class="btn btn-primary btn-lg" value="Đăng nhập">

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>