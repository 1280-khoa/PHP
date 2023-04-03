<p>Thêm  sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
  <tr>
    <td> <label  class="form-label">Tên Sản Phẩm</label> </td>
    <td><input type="text"class="form-control"  name="tensanpham" width="100%"></td>
   
  </tr>
  <tr>
    
    <td> <label  class="form-label">Mã sản phẩm</label> </td>
    <td><input type="text"class="form-control"  name="masanpham" width="100%"></td>
  </tr>
  <tr>
    
    <td> <label  class="form-label">Giá sản phẩm </label> </td>
    <td><input type="text"class="form-control"  name="giasanpham" width="100%"></td>
  </tr>

  <tr>
    <td> <label  class="form-label">Số Lượng sản phẩm </label> </td>
    <td><input type="text"class="form-control"  name="soluong" width="100%"></td>
  </tr>
  <tr>
    <td>hình ảnh sản phẩm </td>
    <td>
      <input type="file" name="hinhanh" width="100%">
    </td>
  </tr>
  <tr>
    <td>Tóm tắt </td>
    <td><textarea rows="10"  name="tomtat" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung sản phẩm </td>
    <td><textarea rows="10"  name="noidung" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Danh mục sản phẩm</td>
    <td><select name="danhmuc">
        <?php 
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
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
    
    <td colspan="2"> <button type="submit" name="themsanpham" class="btn btn-primary">Thêm Sản Phẩm Mới </button> <br></td>
  </tr>
</form>
</table>