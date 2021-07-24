<?php
include 'header.php';
$sql = "select * from user_info ";
$res = mysqli_query($conn,$sql);
?>



<!-- Page Content -->
<div class="col-md-10 content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Danh sách người dùng</h2>
            </div>
            <div class="panel-body">
              <form name="form1" method="post" action="">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>

                        <th>Tên </th>
                        <th>Họ</th>
                        <th>Mật khẩu</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>



                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($res) {
                        $i = 1;
                        while ($row = mysqli_fetch_array($res)) {
                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['last_name'] ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <?php
                            $i = $i + 1;
                        }
                    }
                    ?>


                </tbody>
            </table>
        </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->



<?php include('footer.php'); ?>
</body>

</html>
