<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">
        
        <?php include ROOT.'/views/layouts/sidebar.php'; ?>

        <div id="content" class="float_r">
            <h1>Авторизация</h1>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form action="#" method="post">
                <input type="email" name="email" placeholder="E-mail" value="">
                <input type="password" name="password" placeholder="Пароль" value="">
                <input type="submit" name="submit" class="btn btn-default" value="Войти">
            </form>
        
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>