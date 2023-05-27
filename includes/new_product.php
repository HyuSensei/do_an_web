<?php
require_once("./db/config.php");
$sql = "SELECT * FROM products WHERE 1<=id AND id<=12";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $formatted_amount = number_format($row['price'] , 0, '.', ',');
        echo '
        <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic" style="height: 275px;">
                        <img src="'.$row['img_main'].'" height=275px alt=""/>
                            <div class="label new">New</div>
                            <ul class="product__hover">
                                <li><a href="" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href=""><span class="icon_heart_alt"></span></a></li>
                                <li><a href="./includes/add_to_cart.php?id='.$row['id'].'"><button class="add_to_cart" ><span class="icon_bag_alt"></span></button></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;" href="product-details.php?id='.$row['id'].'">'.$row['product_name'].'</a></h6>

                            <div class="product__price">'.$formatted_amount.' đ</div>
                        </div>
                    </div>
                </div>

   ';
    }
} else {
    echo 'Không có dữ liệu';
}
