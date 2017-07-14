<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">
        
        <?php include ROOT.'/views/layouts/sidebar.php'; ?>

        <div id="content" class="float_r">
            <h1>Описание товара</h1>
            <div class="content_half float_l">
            <a  rel="lightbox[portfolio]" href="/template/images/product/<?php echo $product['big_image'] ?>"><img src="/template/images/product/<?php echo $product['image'] ?>" alt="" /></a>
            </div>
            <div class="content_half float_r">
                <table>
                    <tr>
                        <td width="160">Цена:</td>
                        <td><?php echo $product['price'] ?> руб</td>
                    </tr>
                    <tr>
                        <td>Модель:</td>
                        <td><?php echo $product['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Производитель:</td>
                        <td><?php echo $product['brand'] ?></td>
                    </tr>
                    <tr>
                        <td>Количество</td>
                        <td><input type="text" value="1" style="width: 20px; text-align: right" /></td>
                    </tr>
                </table>
                <div class="cleaner h20"></div>

                <a href="shoppingcart.html" class="addtocart"></a>

            </div>
            <div class="cleaner h30"></div>
            
            <h5>Описание</h5>
            <p><?php echo $product['description'] ?></p>
            
          <div class="cleaner h50"></div>
            
            <h3>Популярные товары</h3>
            <div class="product_box">
                <a href="productdetail.html"><img src="/template/images/product/01.jpg" alt="" /></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <a href="shoppingcart.html" class="addtocart"></a>
                <a href="productdetail.html" class="detail"></a>
            </div>          
            <div class="product_box">
                <a href="productdetail.html"><img src="/template/images/product/02.jpg" alt="" /></a>
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <a href="shoppingcart.html" class="addtocart"></a>
                <a href="productdetail.html" class="detail"></a>
            </div>          
            <div class="product_box no_margin_right">
                <a href="productdetail.html"><img src="/template/images/product/03.jpg" alt="" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="shoppingcart.html" class="addtocart"></a>
                <a href="productdetail.html" class="detail"></a>
            </div>     
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>