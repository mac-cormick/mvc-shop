<?php
    include_once ROOT . '/models/Category.php';
    $categories = array();
    $categories = Category::getCategoriesList();
?>

<div id="sidebar" class="float_l">
    <div class="sidebar_box"><span class="bottom"></span>
        <h3>Categories</h3>   
        <div class="content"> 
            <ul class="sidebar_list">
                <?php foreach ($categories as $categoryItem): ?>
                <li><a href="/category/<?php echo $categoryItem['id'];?>"><?php echo $categoryItem['name'];?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="sidebar_box"><span class="bottom"></span>
        <h3>Bestsellers </h3>   
        <div class="content"> 
            <div class="bs_box">
                <a href="#"><img src="/template/images/templatemo_image_01.jpg" alt="image" /></a>
                <h4><a href="#">Donec nunc nisl</a></h4>
                <p class="price">$10</p>
                <div class="cleaner"></div>
            </div>
            <div class="bs_box">
                <a href="#"><img src="/template/images/templatemo_image_01.jpg" alt="image" /></a>
                <h4><a href="#">Lorem ipsum dolor sit</a></h4>
                <p class="price">$12</p>
                <div class="cleaner"></div>
            </div>
            <div class="bs_box">
                <a href="#"><img src="/template/images/templatemo_image_01.jpg" alt="image" /></a>
                <h4><a href="#">Phasellus ut dui</a></h4>
                <p class="price">$20</p>
                <div class="cleaner"></div>
            </div>
            <div class="bs_box">
                <a href="#"><img src="/template/images/templatemo_image_01.jpg" alt="image" /></a>
                <h4><a href="#">Vestibulum ante</a></h4>
                <p class="price">$8</p>
                <div class="cleaner"></div>
            </div>
        </div>
    </div>
</div>