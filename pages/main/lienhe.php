<h2 style="text-align:center; margin-bottom: 60px;">Liên Hệ</h2>
<div style="text-align:center;">
 <?php 
  $sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
  $query_lh = mysqli_query($mysqli,$sql_lh);
 ?>
	<?php 
  		while($dong = mysqli_fetch_array($query_lh)){
  	?>
  	
  	<p><?php echo $dong['thongtinlienhe'] ?></p>

  <?php 
	}
  ?>
</div>