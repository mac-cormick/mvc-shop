<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">

    <?php include ROOT.'/views/layouts/sidebar.php'; ?>
        
        <div id="content" class="float_r">
            <script type="text/javascript" src="/template/js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="/template/js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
            <h1>New Products</h1>

        <?php foreach ($categoryProducts as $product): ?>

            <div class="product_box">
                <h3><?php echo $product['name']; ?></h3>
                <a href="/product/<?php echo $product['id']; ?>"><img src="/template/images/product/<?php echo $product['image']; ?>" alt="" /></a>
                <p><?php echo $product['mini_descr']; ?></p>
                <p class="product_price"><?php echo $product['price']; ?> руб</p>
                <a href="#" data-id="<?php echo $product['id']?>" class="addtocart"></a>
                <a href="productdetail.html" class="detail"></a>
            </div>    

        <?php endforeach; ?>

        <?php echo $pagination->get(); ?>
                      
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>