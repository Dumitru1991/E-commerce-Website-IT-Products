<?php include('header.php');
if (isset($_GET['idProduct'])) {
    $idProduct = $_GET['idProduct'];
    $sql = "select * from products where product_id  = " . $idProduct;
    $res = mysqli_query($conn,$sql);
    echo $sql;
 ?>
	<div class="col-md-7 content">
  			<div class="panel panel-default">
            <div class="panel-heading">
            	<h2>Chỉnh sửa sản phẩm</h2>
            </div>
        	<div class="panel-body">
                 <?php
                    if ($res) {
                        while ($row = mysqli_fetch_array($res)) {
                            $thumImage = "../product_images/" . $row['product_image'];
                            ?>

                            <form action="productupdate-back.php?idProduct=<?php echo $row['product_id'] ?>" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="namepro" value="<?php echo $row['product_title'] ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục sản phẩm</label>
                                     
                                    <select class="form-control" name = "category">
                                        <?php
                                        $idCa = $row['cat_id'];

                                        $sqlCa = "select * from categories where cat_id = $idCa";
                                        $resCa = mysqli_query($conn,$sqlCa);
                                        while ($rowCa = mysqli_fetch_array($resCa)) {
                                            ?>
                                            <option value = "<?php echo $rowCa['cat_id']; ?>"><?php echo $rowCa['cat_title'];?></option>
                                        <?php
                                        }
                                        $sqlCat = "select * from categories";
                                        $resCat = mysqli_query($conn,$sqlCate);
                                        while ($rowCate = mysqli_fetch_array($resCate)) {
                                            ?>
                                            <option value = "<?php echo $rowCate['cat_id']; ?>"><?php echo $rowCate['cat_title']; ?></option>
                                        <?php }
                                        ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Thương hiệu sản phẩm</label>
                                    <select class="form-control" name = "brand">
                                        <?php
                                        $idBrand = $row['brand_id'];

                                        $sqlBrand = "select * from brands where brand_id = $idBrand";
                                        $resBrand = mysqli_query($conn,$sqlBrand);
                                        while ($rowBrand = mysqli_fetch_array($resBrand)) {
                                            ?>
                                            <option value = "<?php echo $rowBrand['brand_id']; ?>"><?php echo $rowBrand['brand_title']; ?></option>

                                        <?php
                                        }
                                        $sqlBrand = "select * from brands";
                                        $resBrand = mysqli_query($conn,$sqlBrand);
                                        while ($rowBrand = mysqli_fetch_array($resBrand)) {
                                            ?>
                                            <option value = "<?php echo $rowBrand['brand_id']; ?>"><?php echo $rowBrand['brand_title']; ?></option>
                                        <?php }
                                        ?>
                                    </select>

                                </div>

                               <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input type ="number"  class="form-control" name="pricepro" value="<?php echo $row['product_price'] ?>" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Chọn hình ảnh sản phẩm</label>
                                    <input type="file" name="fImages">
                                    <img src ="<?php echo $thumImage ?>" width="80px" height ="80px">
                                    <input type="hidden" name="image" value="<?php echo $row['product_image']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <label>Nhập từ cho khách hàng tìm kiếm</label>
                                    <input class="form-control" name="keyword" value="<?php echo $row['product_keywords']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="3" name="despro" value="<?php echo $row['product_desc'];?>" /></textarea>
                                </div>
                                 <?php
                                }
                            }
                        }
                        ?>
                    <button type="submit" name ="addProduct" class="btn btn-warning btn-block btn-lg">Chỉnh sửa sản phẩm</button>

                </form>
	        </div>
            </div>
  		</div>
<?php include('footer.php'); ?>
