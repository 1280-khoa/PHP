<?php 
  $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
  $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
 ?>
 <br>
<h4 style="text-align:center;">Liệt kê danh mục sản phẩm</h4>
<div class="container-fluid pt-4 px-4">
<div class="table-responsive">

<table class="table text-start align-middle table-bordered table-hover mb-0" >
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Tên sản phẩm</th>
    <th scope="col">Hình ảnh</th>
    <th scope="col">Giá SP</th>
    <th scope="col">Số lượng</th>
    <th scope="col">Danh mục</th>
    <th scope="col">Mã SP</th>
    <th scope="col">Tóm tắt</th>
    <th scope="col">Trạng thái</th>
    <th scope="col">Quản lý</th>
  </tr>
  <?php 
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
   ?>
  <tr style="text-align: center;">
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img width="150px" src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['giasanpham'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masanpham'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
    }else{
        echo 'Ẩn';

    } 
    ?>
        
    </td>
    <td>
    	<a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
  </tr>

<?php 
}
?>

</table>
</div>
</div>