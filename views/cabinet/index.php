<?php include ROOT.'/views/layouts/header.php'; ?>
    
    <div id="templatemo_main">
        
        <?php include ROOT.'/views/layouts/sidebar.php'; ?>

        <div id="content" class="float_r">
            <h1>Кабинет пользователя</h1>

            <h3>Приает, <?php echo $user['name'];?>!</h3>

            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cabinet/history">Список покупок</a></li>
            </ul>
        
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include ROOT.'/views/layouts/footer.php'; ?>