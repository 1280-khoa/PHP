<?php 
  $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
  $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
 ?>
<p>Liệt kê danh mục sản phẩm</p>
<div class="container-fluid pt-4 px-4">
<div class="table-responsive">
    <table class="table text-start align-middle table-bordered table-hover mb-0">
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Tên danh mục</th>
    <th scope="col">Quản lý</th>
  </tr>
  <?php 
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
   ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
      <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>

<?php 
}
?>

</table>
</div>
</div>