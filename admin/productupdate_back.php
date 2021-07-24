<?php
include('connection.php');
$target_dir = "../product_images/";
$target_file = $target_dir . basename($_FILES["fImages"]["name"]);
$uploadOk = 1;
if (isset($_GET['idProduct'])) {
    $idProduct = $_GET['idProduct'];
}
if (isset($_POST['addProduct'])) {
     $image = basename($_FILES["fImages"]["name"]);
    if ($image == null || $image = '') {
//        $image = $_POST['image'];
        $image = $_POST['image'];
        $uploadOk = 0;
    } else {
        $check = getimagesize($_FILES["fImages"]["tmp_name"]);
        if ($check !== false) {
            $image = basename($_FILES["fImages"]["name"]);

            $uploadOk = 1;
        } else {
            $image = $_POST['image'];
            ?>

            <script type="text/javascript">
                window.location = 'product-update.php?noimage=notimage';
            </script>
            <?php
            $uploadOk = 0;
        }
    }


    //Upload image
    if (file_exists($target_file)) {
//        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fImages"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fImages"]["name"]) . " has been uploaded.";
        } else {
//            echo "Sorry, there was an error uploading your file.";
        }
    }
    if (isset($_POST['namepro'])) {
        $namePro =$_POST["namepro"];
    }
    if (isset($_POST['category'])) {
       $categoryPro = $_POST['category'];
    }
    if (isset($_POST['brand'])) {
       $brandPro = $_POST['brand'];
    }
    if (isset($_POST['pricepro'])) {
        $pricePro =$_POST["pricepro"];
    }

    if (isset($_POST['despro'])) {
        $desPro =$_POST["despro"];
    } 
    
    if (isset($_POST['keyword'])) {
        $keyword =$_POST["keyword"];
    }
    $sql = "update products set  product_title = '$namePro', product_cat = $categoryPro,product_brand = $brandPro, product_image ='$image' , product_desc = '$desPro', product_price = $pricePro, product_keywords = '$keyword' where product_id = $idProduct";
    // echo $sql;

    $res = mysqli_query($conn,$sql);
    if ($res) {
        ?>
             <script type="text/javascript">
                window.location = 'product-update.php?idProduct= <?php echo $idProduct?>';
            </script>
            
        <?php
    }
    else{
        echo "failed";
    }
} else {
   echo 'error';
}
?>