<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">
        
        <?php include ROOT.'/views/layouts/sidebar.php'; ?>

        <div id="content" class="float_r">
            <h1>Обратная связь</h1>

            <?php if ($result): ?>
                <p>Сообщение отправлено! Мы ответим на указанный E-mail.</p>
            <?php else: ?>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            
            <h5>Есть вопрос? Напишите нам</h5>
            <br>
            <form action="#" method="post">
                <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>">
                <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>">
                <input type="submit" name="submit" class="btn btn-default" value="Отправить">
            </form>

            <?php endif; ?>
        
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>