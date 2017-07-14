<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">
        
        <?php include ROOT.'/views/layouts/sidebar.php'; ?>

        <div id="content" class="float_r">
            <h1>Редактирование профиля</h1>

            <?php if ($result): ?>
                <p>Данные отредактированы!</p>
            <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
            <?php endif; ?>

            <form action="#" method="post">
                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>">
                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
            </form>

            <?php endif; ?>
        
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>