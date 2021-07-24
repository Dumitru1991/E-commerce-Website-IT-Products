<?php include'header.php'; ?>
<?php
require_once("db.php");
error_reporting(2);
if (isset($_GET['id'])) {
    $idProduct = $_GET['id'];
    $sql = "SELECT * FROM products WHERE product_id = " . $idProduct;
    // echo $sql;
    $result = mysqli_query($con, $sql);
    if (!$result) {
        // echo $sql;
        die('error');
    } else {
        while ($row = mysqli_fetch_array($result)) {
            $thumImage = "product_images/" . $row['product_image'];
            ?>
            <a class="close" href="#">&times;</a>
            <div class="container">
                <div class="card">
                    <div class="container-fliud">
                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active">
                                        <img id="pic-1" data-zoom-image="<?php echo $thumImage; ?>" src="<?php echo $thumImage; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title"><?php echo $row['product_title']; ?></h3>
                                <h4 class="price">Preț: <?php echo $row['product_price']; ?> <span> RON</span></h4>
                                <h5 class="quantity">Descriere:<br><P></P> <?php echo $row['product_desc']; ?></h5>
                                <div style="height:100px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 100px"></div>
            <?php }
    }
}
?>

<?php include('footer.php'); ?>

<?php
include 'jsfile.php';
?>
<script>
    $('#pic-2').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });
</script>
<script>
    $('#pic-1').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });
</script>
