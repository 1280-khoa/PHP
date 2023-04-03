<p>Thêm bài viết</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
  <tr>
    
     <td> <label  class="form-label">Tên bài viết</label> </td>
    <td><input type="text"class="form-control"  name="tenbaiviet" width="100%"></td>
  </tr>
  <tr>
    <td>hình ảnh sản phẩm </td>
    <td>
      <input type="file" name="hinhanh" width="100%">
    </td>
  </tr>
  <tr>
    <td>Tóm tắt </td>
    <td><textarea rows="6"  name="tomtat" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung sản phẩm </td>
    <td><textarea rows="6"  name="noidung" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Danh mục bài viết</td>
    <td><select name="danhmuc">
        <?php 
        $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
        <?php
        }
        ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
  <tr>
    
    <td colspan="2"><button type="submit" name="thembaiviet" class="btn btn-primary">Thêm Bài Viết Mới </button></td>
  </tr>
</form>
</table>