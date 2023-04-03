 <?php 
  $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
  $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);

 ?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
 <?php 
                                    while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
                                    ?>
                                     <div class="mb-3">
                                    <label  class="form-label">Tên Danh Mục</label>
                                    
                                
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc">
                                  </div>

                                </div>
                                     <div class="mb-3">
                                      <label  class="form-label">Thứ Tự</label>
                                     
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $dong['thutu'] ?>" name="thutu">
                                    </div>
                                </div>
                                    
                                    <button type="submit" name="suadanhmuc" class="btn btn-primary">Sửa</button>
                                    <?php
                                    }
                                    ?>
</form>
</table>
