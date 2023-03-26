<?php 
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' ";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>

			

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa']; ?></h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->

						
							
								<ul class="product_list">
									<?php 
									while($row = mysqli_fetch_array($query_pro)){
									?>
									<li>
										<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
											<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
											<p class="title_product">Tên Sản Phẩm : <?php echo $row['tensanpham'] ?></p>
											<p class="price_product">Giá : <?php echo number_format($row['giasanpham']).'VNĐ'  ?></p>
											<p style="text-align: center; color: #d1d1d1;"><?php echo $row['tendanhmuc'] ?></p>	
										</a>
									</li>

									<?php 
									}
									?>
								</ul>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>