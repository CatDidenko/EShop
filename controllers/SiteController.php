<?php

class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(10);

        //$recommendedProducts = array();
        $sliderProducts = Product::getRecommendedProducts();
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }

   public function actionContact() {
                
        $userEmail = '';
        $userText = '';
        $userTitle = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['userEmail'];
             $userTitle = $_POST['userTitle'];
            $userText = $_POST['userText'];
           
    
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            
            if ($errors == false) {
                $adminEmail = 'didenko.ekaterina1996@gmail.com';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = $userTitle;
                $headers = 'From:' . "\r\n" .
    						'Reply-To: didenko.ekaterina1996@gmail.com' . "\r\n";    
                $result = mail($adminEmail, $subject, $message, $headers);
                $result = true;
            }

        }
        
        require_once(ROOT . '/views/site/contact.php');
        
        return true;
    }

}
