<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">
        
        <?php include ROOT.'/views/layouts/sidebar.php'; ?>

        <div id="content" class="float_r">
            <h1>Корзина</h1>

            <?php if ($result): ?>

                <p>Заказ успешно оформлен. Мы свяжемся с Вами в ближайшее время</p>

            <?php else: ?>

                <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, руб.</p>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <p>Для оформления заказа заполните форму. Мы свяжемся с Вами в ближайшее время/</p>

                <div class="login-form">
                    <form action="#" method="post">
                        <input type="text" name="userName" placeholder="Имя" value="<?php echo $userName;?>">
                        <input type="text" name="userPhone" placeholder="Телефон" value="<?php echo $userPhone;?>">
                        <input type="text" name="userComment" placeholder="Комментарий" value="<?php echo $userComment;?>">
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Оформить">
                    </form>
                </div>

            <?php endif; ?>

        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>