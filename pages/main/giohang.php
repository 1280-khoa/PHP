
<?php
if(isset($_SESSION['dangky'])){
    echo 'Xin chào: '.'<span style="color: red;">'.$_SESSION['dangky'].'</span>';
}
?>
</p>
<?php
	if(isset($_SESSION['cart'])){
		
	}

?>

 <!--  <?php
  if(isset($_SESSION['cart'])){
  	$i=0;
  	$tongtien=0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong '] * $cart_item['giasanpham'];
  		$tongtien+=$thanhtien;
  		$i++;

  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $cart_item['masanpham'] ?></td>
    <td><?php echo $cart_item['tensanpham'] ?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width=150px></td>
    <td>
    	<a style="font-size: 20px;" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?> ">-</a>
    	<?php echo $cart_item['soluong '] ?>
    	<a style="font-size: 20px;" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?> ">+</a>
    	


    </td>
    <td><?php echo number_format($cart_item['giasanpham'],0,',','.').' VND'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'VND'; ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?> ">Xóa</a></td>
  </tr>
<?php
	}
?>
<tr>
    <td  colspan="8">
    	<p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VND'; ?></p><br/>
    	<p style="float: right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tât cả</a></p>



    </td>
</tr>
<?php 
}else{
?>
<tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
</tr>
<?php 
}
?>


</table> -->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        
					    <th class="text-center">Tên sản phẩm</th>
					    <th class="text-center">Số lượng</th>
					    <th class="text-center">Giá sản phẩm</th>
					    <th class="text-center">Thành tiền</th>					 
                    
                    </tr>
                </thead>
                 <?php
				  if(isset($_SESSION['cart'])){
				  	$i=0;
				  	$tongtien=0;
				  	foreach($_SESSION['cart'] as $cart_item){
				  		$thanhtien = $cart_item['soluong '] * $cart_item['giasanpham'];
				  		$tongtien+=$thanhtien;
				  		$i++;

				  ?>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" style="width: 100px;height: 80px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $cart_item['tensanpham'] ?></a></h4>
                                <h5 class="media-heading"><a href="#"><?php echo $i ?></a></h5>
                                <span>Mã Sản Phẩm: </span><span class="text-success"><strong><?php echo $cart_item['masanpham'] ?></strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1 text-center" >
                       		 <a style="font-size: 20px;" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?> ">-</a>
    							<?php echo $cart_item['soluong '] ?>
    						<a style="font-size: 20px;" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?> ">+</a>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo number_format($cart_item['giasanpham'],0,',','.').'VND'; ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo number_format($thanhtien,0,',','.').'VND   '; ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                    </tr> 
                    <?php
						}
					?>         

                    <tr>
                        <td>   </td>
                        <td>             </td>
                        <td>   </td>

                        <td><h4>Tổng tiền:</h4></td>
                        <td class="text-right"><h4><strong> <?php echo number_format($tongtien,0,',','.'). 'VND'; ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <a href="pages/main/themgiohang.php?xoatatca=1">Xóa tât cả</a>
                        </button></td>
                        <div style="clear: both;"></div>
                        <?php
                            if(isset($_SESSION['dangky'])){
                                ?>
                                <p><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
                        <?php
                            }else{
                        ?>
                            <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
                        <?php
                            }
                        ?>
                        
                        

                        <td>
                    </tr>
                     <?php 
					}else{
				?>
					<tr>
					    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
					</tr>
				<?php 
					}
				?>
                </tbody>
               
            </table>
        </div>
    </div>
</div>