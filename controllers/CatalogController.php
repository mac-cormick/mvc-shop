<?php

include_once ROOT . '/models/Product.php';
include_once ROOT . '/components/Pagination.php';

class CatalogController
{

    public function actionIndex($page = 1)
    {

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts($page);

        $total = Product::getTotalProductInTable();

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT_CATALOG, 'page-');

        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }
    
    public function actionCategory($categoryId, $page = 1)
    {
        
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
       
        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }

}
