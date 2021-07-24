<?php
include('header.php');
if (isset($_GET['noimage'])) {
    $noimage = 'Vui lòng chọn hình ảnh hợp lệ';
} else {
    $noimage = '';
}
?>

 <div class="col-md-6 content">
  			<div class="panel panel-default" style="border: none;">
            <div class="panel-heading" >
            	<h2>Thêm sản phẩm</h2>
            </div>
        	<div class="panel-body">
		<form action="productadd_back.php"  method="POST" name="form1" id="form1" enctype="multipart/form-data">
		     <div class="form-group">
		        <label for="exampleInputPassword1">Tên sản phẩm </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm"  name="namepro">
		      </div>
		      <div class="form-group">
		          <label>Danh mục sản phẩm</label>
		              <select class="form-control" name = "category">
		                  <?php $sql = "select * from categories";
		                   $res = mysqli_query($conn,$sql) ;
		                    if($res) {
		                      while($row=  mysqli_fetch_array($res)) {
		                       ?>
		                      <option value = "<?php echo $row['cat_id']?>"><?php echo $row['cat_title']?></option>             
		                     <?php }
		                        }
		                        else{
		                        	die('Invalid query: '.mysql_error());
		                        }
		          
		                       ?>
		              </select>
		      </div>
		      <div class="form-group">
		            <label>Thương hiệu sản phẩm</label>
		                <select class="form-control" name = "brand">
		                    <?php $sql1 = "select * from brands";
		                    $res1 = mysqli_query($conn,$sql1);
		                    if($res1) {
		                        while($row1=  mysqli_fetch_array($res1)) {
		                                ?>
		                    <option value = "<?php echo $row1['brand_id']?>"><?php echo $row1['brand_title']?></option>
		                     <?php       }
		                        }
		                       ?>
		                        </select>
		        </div>
		      

		      <div class="form-group">
		        <label for="exampleInputPassword1">Giá sản phẩm</label>
		        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá Sản Phẩm"  name="pricepro">
		      </div>

		      <div class="form-group">
		        <label for="exampleFormControlFile1">Hình ảnh</label>
		        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fImages">
		      </div>
		      <div class="form-group">
		        <label>Nhập từ cho khách hàng tìm kiếm</label>
		        <input class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm" />
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Mô tả</label>
		        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"  name="despro" rows="3"></textarea>
		      </div>
		      <div class="row">
		          <div class="col-md-6 col-sm-6 col-xs-6">
		            <button type="submit" name ="addProduct" class="btn btn-warning btn-block btn-lg">Thêm</button>
		          </div>
		          <div class="col-md-6 col-sm-6 col-xs-6">
		               <button type="reset" class="btn btn-default btn-block btn-lg" style="background: gray; color:white;">Thiết lập lại</button>
		          </div>
		      </div>
		</form>

</div>
            </div>
  		</div>

<?php include('footer.php') ?>