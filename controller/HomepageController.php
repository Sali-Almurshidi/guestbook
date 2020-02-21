<?php
declare(strict_types=1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $POST)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name =   $this->fixtags($POST['name']);
            $title =   $this->fixtags($POST['title']);
            $content =   $this->fixtags($POST['message']);
            $todayDate = date("Y/m/d");
            $newData = new Post($title, $name, $content, $todayDate);

            //var_dump($newData);
            $addToJson = new Guestbook();

            $addToJson->addToJson($newData);

            $addToJson->printFromJson();

        }

        //load the view
        require 'view/homepage.php';
    }

    function fixtags($text){
        $text = htmlspecialchars($text);
        $text = preg_replace("/=/", "=\"\"", $text);
        $text = preg_replace("/&quot;/", "&quot;\"", $text);
        $tags = "/&lt;(\/|)(\w*)(\ |)(\w*)([\\\=]*)(?|(\")\"&quot;\"|)(?|(.*)?&quot;(\")|)([\ ]?)(\/|)&gt;/i";
        $replacement = "<$1$2$3$4$5$6$7$8$9$10>";
        $text = preg_replace($tags, $replacement, $text);
        $text = preg_replace("/=\"\"/", "=", $text);
        return $text;
    }
}