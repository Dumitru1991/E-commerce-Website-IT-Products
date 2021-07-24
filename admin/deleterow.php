<?php include('connection.php') ?>
<?php
//Xóa sản phẩm theo id
if (isset($_GET['idProducts'])) {
    $idProduct = $_GET['idProducts'];
    $sql = "delete from products where product_id = " . $idProduct;
    $res = mysqli_query($conn,$sql);
    if ($res) {
        ?>
        <script type="text/javascript">
             window.location = 'product-list.php?ps=success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
               window.location = 'product-list.php?pf=fail';
        </script>
        <?php
    }
}
//Xóa danh mục/loại Category theo Id
if (isset($_GET['idCate'])) {
    $idCate = $_GET['idCate'];
    $sql = "delete from categories where cat_id = " . $idCate;
    $res = mysqli_query($conn,$sql);
    if ($res) {
        ?>
        <script type="text/javascript">
              window.location = 'category-list.php?cs=success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
                window.location = 'category-list.php?cf=fail';
        </script>
        <?php
    }
}
//Xóa Slider theo Id
if (isset($_GET['idSlide'])) {
    $idSlide = $_GET['idSlide'];
    $sql = "delete from Slider where Slider_ID = " . $idSlide;
    $res = mysqli_query($conn,$sql);
    if ($res) {
        ?>
        <script type="text/javascript">
              window.location = 'slide.php?cs=success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
                window.location = 'slide.php?cf=fail';
        </script>
        <?php
    }
}
//Xóa danh thuong hieu Brand theo Id
if (isset($_GET['idBrand'])) {
    $idBrand = $_GET['idBrand'];
    $sql = "delete from brands where brand_id = " . $idBrand;
    $res = mysqli_query($conn,$sql);
    if ($res) {
        ?>
        <script type="text/javascript">
              window.location = 'brand-list.php?cs=success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
                window.location = 'brand-list.php?cf=fail';
        </script>
        <?php
    }
}

//Xóa cart 
if (isset($_GET['idCart'])) {
    $idBrand = $_GET['idCart'];
    $sql = "delete from cart where id = " . $idCart;
    $res = mysqli_query($conn,$sql);
    if ($res) {
        ?>
        <script type="text/javascript">
              window.location = 'cart-list.php?cs=success';
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
                window.location = 'cart-list.php?cf=fail';
        </script>
        <?php
    }
}
  ?>
  ?>
