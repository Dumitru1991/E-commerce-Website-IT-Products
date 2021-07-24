<?php include('header.php'); ?>
<?php
if (isset($_GET['noimage'])) {
    $noimage = 'Vui lòng chọn hình ảnh hợp lệ';
} else {
    $noimage = '';
}
?>
<?php
// show slide
$sql = "select * from Slider ";
$res = mysqli_query($conn,$sql);
?>

<!-- Page Content -->

<div class="col-md-10 content">
  			<div class="panel panel-default">
            <div class="panel-heading">
            	<h2>Slide Show</h2>
            </div>
        	<div class="panel-body">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h4><a href="slide.php?addSlide=hh" style="color: brown; text-decoration: underline;">Thêm danh mục </a></h4>
                    <?php if(isset($_GET['addSlide'])) {
                        ?>
                    <form action ="slideadd.php"  enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Chọn Slide</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fImages">
                        </div>
                            <button type="submit" name ="addSlide" class="btn btn-warning">Thêm </button>
                            <button type="reset" class="btn btn-default">Thiết lập lại</button>
                        <br>
                        <br>
                    </form>
                    <?php }?>
                </div>
                <br>
                <br>
            
            <?php
                if (isset($_GET['idSlide'])) {
                    $idSlide = $_GET['idSlide'];
                    $sqlSelectEachCategory = "select * from Slider where Slider_ID = $idSlide";
                    $resEachCategory = mysqli_query($conn,$sqlSelectEachCategory);
                
                    if ($resEachCategory) {
                        while ($row = mysqli_fetch_array($resEachCategory)) {
                            $thumImage = "../images/" . $row['URL'];
                    ?>
                    
                <div style="float: right; " class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h4 style="color: brown; text-decoration: underline;">Chình sửa danh mục </h4>
                    <form action ="slideupdate.php?idSlide=<?php echo $row['Slider_ID'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                                    <label>Chọn hình ảnh sản phẩm</label>
                                    <input type="file" name="fImages">
                                    <img src ="<?php echo $thumImage ?>" width="80px" height ="80px">
                                    <input type="hidden" name="idSlide" value="<?php echo $row['URL']; ?>"/>
                        </div>
                        <button type="submit" name ="addSlide" class="btn btn-warning">Chỉnh sửa </button>
                     
                    </form>
                </div>
                <?php }}}
                ?>
            </div>
            <hr/>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="myTable">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Hình ảnh Slide show</th>
                        <th>Chính sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($res) {
                        while ($row = mysqli_fetch_array($res) ) {
                            if ($row['URL'] == null || $row['URL'] == '') {
                                $thumbImage = "";
                            } else {
                                $thumbImage = "../images/" . $row['URL'];
                            }
                    ?>

                            <tr class="odd gradeX" align="center">
                                <td><?php echo $row['Slider_ID']; ?></td>
                                <td><img src = "<?php echo $thumbImage?>" width =80px; height = 80px;> </td>
                                <td class="center">
                                    <i class="fa fa-pencil fa-fw">
                                    </i>
                                    <a href="slide.php?idSlide=<?php echo $row['Slider_ID']; ?>">Chỉnh sửa</a>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="deleterow.php?idSlide=<?php echo $row['Slider_ID']; ?>">Xóa</a></td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>

            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->



<?php include('footer.php'); ?>
