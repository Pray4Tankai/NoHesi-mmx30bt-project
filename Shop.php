<?php
    include_once 'core/init.php';
    include_once 'core/functions/products.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once 'includes/head.php';
    ?>
    <link rel="stylesheet" href="assets/css/shop.css">
    <title>No Hesi Apparel / Shop</title>
</head>
<body>
    <?php
        include_once 'includes/header.php';
    ?>
    <section>
        <div class="main-container">
            <div class="products-cont">
                <div class="inner-cont">
                    <div>
                        <?php
                            $product_line = get_products();
                            while($products = mysqli_fetch_assoc($product_line)){
                                $product_name = $products['product_name'];
                                $product_price = $products['product_price'];
                                $product_id = $products['product_id'];
                                $product_img = $products['product_img'];

                                echo 
                                    '<div class="mini-cont">
                                        <div class="product">
                                            <div class="img-det">
                                                <div class="img-buy">
                                                    <div class="img">
                                                        <img src="products/'.$product_img.'" alt="">
                                                    </div>
                                                    <div class="buy">
                                                        <form action="functions/cart.php" method="post">
                                                            <input type="text" name="product_id" value="'.$product_id.'" hidden>
                                                            <button type="submit" name="addCart">buy now</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <small>No Hesi '.$product_name.'</small>
                                                    <span>$'.$product_price.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include_once 'includes/scripts.php';
    ?>
</body>
</html>
