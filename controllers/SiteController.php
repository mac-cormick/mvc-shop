<?php

include_once ROOT . '/models/Product.php';

class SiteController
{

    public function actionIndex($page = 1)
    {

    		$latestProducts = array();
    		$latestProducts = Product::getLatestProducts($page);

    		$total = Product::getTotalProductInTable();

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT_CATALOG, 'page-');
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact() {
    	
    	$userEmail = '';
    	$userText = '';
    	$result = false;

    	if (isset($_POST['submit'])) {

    		$userEmail = $_POST['userEmail'];
    		$userText = $_POST['userText'];

    		$errors = false;

    		if (!User::checkEmail($userEmail)) {
    			$errors[] = 'Некорректный E-mail';
    		}

    		if ($errors == false) {
    			$adminEmail = 'tolyan@ya.ru';
    			$message = "Текст: {$userText}. От {$userEmail}";
    			$subject = 'Тема письма';
    			$result = mail($adminEmail, $subject, $message);
    			$result = true;
    		}

    	}

    	require_once(ROOT . '/views/site/contact.php');

    	return true;

    }

}
