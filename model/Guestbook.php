<?php
declare(strict_types=1);

class Guestbook
{
    //
    public function addToJson($postGetter)
    {
    var_dump($postGetter);

        if (file_exists('DB/data.json')) {

            $current_data = file_get_contents('DB/data.json');
            $array_data = json_decode($current_data, true);

            $form_data = array(
                'name' => $postGetter->getName(),
                'title' => $postGetter->getTitle(),
                'message' => $postGetter->getMessage(),
                'day' => $postGetter->getTodayDate(),

            );



            //array_unshift($array_data[], $form_data);
            array_unshift($array_data,$form_data);
            //$array_data[] = $form_data;
            $data_proccesed = json_encode($array_data, JSON_PRETTY_PRINT);

            file_put_contents('DB/data.json', $data_proccesed);

            echo " done";

        } else {
            $error = "<label class='text-danger'>File not found!</label>";
            echo " not done";
        }
    }

    // to print the data from the json file
    public function printFromJson(){
        $json_file_data = file_get_contents('DB/data.json');

        $jObject = json_decode($json_file_data);
        $x = array_reverse($jObject);

        if(count($x)>=20){
            $x = array_slice($x,20);
        }
        //$arrayAfterCut = array_slice($x,20);

        foreach($x as $obj){
            echo '<strong> Name: </strong>' . $obj->name . '<br /> <strong>Title: </strong>' . $obj->title . '<br /> <strong> Message: </strong>' . $obj->message. '<br /> <strong> Message: </strong>' . $obj->day.' <hr />';
        }
    }

}