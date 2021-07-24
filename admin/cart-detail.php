<?php include('header.php');
if (isset($_GET['idProduct'])) {
    $idProduct = $_GET['idProduct'];
    $sql = "select * from  cart where id  = " . $idProduct;
    $res = mysqli_query($conn,$sql);
    // echo $sql;
 ?>
    <div class="col-md-7 content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Thông tin đơn hàng</h2>
            </div>
            <div class="panel-body">
                 <?php
                    if ($res) {
                        while ($row = mysqli_fetch_array($res)) {
                            $thumbImage = "../product_images/" . $row['product_image'];
                            ?>

                            <form action="productupdate-back.php?idProduct=<?php echo $row['product_id'] ?>" method="POST" enctype="multipart/form-data">

                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3>Thông tin người nhận</h3>
                                    <table class="table table-responsive">
                                        <tr>
                                            <th>Tên khách hàng</th>
                                            <td><?php echo $row['user_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Số điện thoại</th>
                                            <td><?php echo $row['user_phone']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $row['user_email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Địa chỉ</th>
                                            <td><?php echo $row['user_adress']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Ngày đặt hàng</th>
                                            <td><?php echo $row['date_order'];?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Thông tin sản phẩm</h3>
                            <p style="color: #009999"><?php echo $notDelete;?>

                            <table class="table table-striped table-bordered table-hover table-responsive">
                                <thead>
                                    <tr align="center">
                                        <th>Mã đơn hàng</th>
                                        <th>Thông tin sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX" align="center">
                                <td><?php echo $row["id"] ;?></td>
                                <td ><?php
                                        echo '<span style="float:left;">Tên mặt hàng: ' .$row["product_title"] . '</span></br>';?>
                                <br><img src = "<?php echo $thumbImage?>" width =80px; height = 80px;> 
                                </td>
                                <td><?php echo $row["qty"];  ?></td>
                                <td class="center"><a href="deleterow.php?idProducts=<?php echo $row['product_id'];?>"> <i class="fa fa-trash-o  fa-fw"></i>Delete</a></td>
                       
                               </tr>
                    <td colspan="6">
                        <h4 style="float: right; padding-right: 4px;">
                         Tổng tiền phải thanh toán:<?php echo $row["total_amt"]; ?><sup>đ</sup>
                        </h4>

                    </td>
                   
                </tbody>
                </table>
                       
                                   <?php
                                }
                            }
                        }
                        ?>

                </form>
            </div>
            </div>
        </div>
<?php include('footer.php'); ?>
