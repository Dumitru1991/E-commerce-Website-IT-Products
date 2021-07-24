<?php include('header.php'); ?>
    <?php
if (isset($_POST['insertCategory'])) {
    if ($_POST['txtCateName']) {
        $categoryName = $_POST['txtCateName'];
        $sqlInsertCate = "insert into categories(cat_title) values('$categoryName')";

        $resCate = mysqli_query($conn,$sqlInsertCate);
    }
}

                
if (isset($_POST['updateCategory'])) {
    if($_POST['idCate']) {
        $idCate = $_POST['idCate'];
        
    
    if ($_POST['txtCateName']) {
        $categoryName = $_POST['txtCateName'];
        $sqlUpdateCate = "update categories set cat_title = '$categoryName' where cat_id =$idCate";
        // echo $sqlUpdateCate;

        $resCate = mysqli_query($conn,$sqlUpdateCate);
    }
    }
}


$sql = "select * from categories ";
$res = mysqli_query($conn,$sql);
$fail = $success = '';
if (isset($_GET['cs'])) {
    $success = "Bạn đã xóa thành công";
}
if (isset($_GET['cf'])) {
    $fail = "Không thể xóa sản phẩm";
}
?>


<!-- Page Content -->

<div class="col-md-10 content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Danh mục sản phẩm</h2>
            </div>
            <div class="panel-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <?php 
?>
                    <h4><a href="category-list.php?addCategory=hh" style="color: brown; text-decoration: underline;">Thêm danh mục </a></h4>
                    <?php if(isset($_GET['addCategory'])) {
                        ?>
                    
                    <form action ="category-list.php?addCategory=hh" method="POST">
                        <div class="form-group">
                            <label>Tên danh mục(Loại)</label>
                            <input class="form-control" name="txtCateName" placeholder="Vui lòng nhập tên danh mục sản phẩm" />
                        </div>

                        <button type="submit" name ="insertCategory" class="btn btn-warning">Thêm </button>
                        <button type="reset" class="btn btn-default">Thiết lập lại</button>
                    </form>
                    <?php }?>
                </div>
                <?php
                if (isset($_GET['idCate'])) {
                    $idCate = $_GET['idCate'];
                    $sqlSelectEachCategory = "select * from categories where cat_id = $idCate";
                    $resEachCategory = mysqli_query($conn,$sqlSelectEachCategory);
                    while($rowEach = mysqli_fetch_array($resEachCategory)) {
                        
                ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h4>Chình sửa danh mục </h4>
                    <form action ="category-list.php" method="POST">
                        <div class="form-group">
                            <label>Tên danh mục(Loại)</label>
                            <input class="form-control" name="txtCateName"  value="<?php echo $rowEach['cat_title'];?>" /> <input type="hidden" name="idCate" value="<?php echo $rowEach['cat_id']?>">
                            
                        </div>

                        <button type="submit" name ="updateCategory" class="btn btn-warning">Chỉnh sửa </button>
                     
                    </form>
                </div>
                <?php }}
                ?>
            </div>
            <hr/>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="myTable">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Danh mục sản phẩm</th>
                        <th>Chính sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($res) {
                        while ($row = mysqli_fetch_array($res)) {
                            ?>

                            <tr class="odd gradeX" align="center">
                                <td><?php echo $row['cat_id']; ?></td>

                                <td>
                                    <div class="form-group">
                                        <input class="form-control" name ="txtCateName" type="text" value="<?php echo $row['cat_title']; ?>" style="background: transparent; border: none;"/>
                                    </div>
                                </td>

                                <td class="center">
                                    <i class="fa fa-pencil fa-fw">
                                    </i> 
                                    <a href="category-list.php?idCate=<?php echo $row['cat_id']; ?>">Chỉnh sửa</a>
                                </td>



                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="deleterow.php?idCate=<?php echo $row['cat_id']; ?>">Xóa</a></td>

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