<?php
declare(strict_types=1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $POST)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $POST['name'];
            $title = $POST['title'];
            $content = $POST['message'];
            $todayDate =   date("Y/m/d");
            $newData = new Post($title, $name, $content ,$todayDate);
            //var_dump($newData);
            $addToJson = new Guestbook();

            $addToJson->addToJson($newData);

            $addToJson->printFromJson();

        }

        //load the view
        require 'view/homepage.php';
    }
}