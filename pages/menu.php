<?php 
       $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
       $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
 ?> 

<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	}
?>

<div class="menu" >
	<div class="main_nav_container" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="index.php">Super<span>Cars</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
							<?php
							  while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
							?>
  							 <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>				
							<?php
								}
							?>
							<li><a href="index.php?quanly=tintuc">Tin Tức</a></li>
							<li><a href="index.php?quanly=lienhe">Liên Hệ</a></li>

							</ul>
							<ul class="navbar_user">

								<li class="checkout">
									<a href="index.php?quanly=giohang">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									</a>
								</li>

								<?php
								if(isset($_SESSION['dangky'])){
								?>
								<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
								<li><a href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>
								<?php 
								}else{
								?>
								<li><a href="index.php?quanly=dangky"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<?php 
								}
								?>
							</ul>
							
						</nav>
					</div>
				</div>
			</div>
		</div>
		<li style="margin-left: 74%; margin-top: 20px; list-style: none;">
			<form action="index.php?quanly=timkiem" method="POST">
				<input class="placeholder-search" placeholder="  Tìm kiếm sản phẩm..." href="#" name="tukhoa"></input>
				<input class="btn-search" type="submit" name="timkiem" value="Tìm kiếm">
				
			</form>
		</li>
</div>