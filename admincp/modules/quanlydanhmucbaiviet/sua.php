 <?php 
  $sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
  $query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
 ?>
<p>Sửa danh mục bài viết</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
  <?php 
  while($dong = mysqli_fetch_array($query_sua_danhmucbv)){
  ?>
 
  <div class="mb-3">
                                    <label  class="form-label">Tên Danh Mục</label>
                                    
                                
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet">
                                  </div>

                                </div>
                                     <div class="mb-3">
                                      <label  class="form-label">Thứ Tự</label>
                                     
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $dong['thutu'] ?>" name="thutu">
                                    </div>
                                </div>
                                    
                                    <button type="submit" name="suadanhmucbaiviet" class="btn btn-primary">Sửa</button>
  <?php
  }
  ?>
</form>
</table>