<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">
        
        <?php include ROOT.'/views/layouts/sidebar.php'; ?>

        <div id="content" class="float_r">
            <h1>Корзина</h1>

            <?php if ($productsInCart): ?>
                <p>Список Ваших покупок</p>
                <table>
                    <tr>
                        <th>Название</th>
                        <th>Стоимость, руб</th>
                        <th>Колличество, шт</th>
                    </tr>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><a href="/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a></td>
                            <td><?php echo $product['price'];?></td>
                            <td><?php echo $productsInCart[$product['id']];?></td>
                        </tr>
                    <?php endforeach; ?>
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td><?php echo $totalPrice;?></td>
                        </tr>
                </table>
            <?php else: ?>
                <p>Корзина пуста</p>
            <?php endif; ?>
            
        </div>
        <a href="/cart/checkout/">Оформить заказ</a>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>