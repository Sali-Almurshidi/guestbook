<?php
declare(strict_types=1);

class Post
{
    private $name ;
    private $title;
    private $message ;
    private $todayDate ;

    /**
     * newData constructor.
     * @param $name
     * @param $title
     * @param $mmessage
     * @param $todayDate
     */
    public function __construct($name, $title, $message, $todayDate)
    {
        $this->name = $name;
        $this->title = $title;
        $this->message = $message;
        $this->todayDate = $todayDate;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getTodayDate()
    {
        return $this->todayDate;
    }

    /**
     * @param mixed $todayDate
     */
    public function setTodayDate($todayDate): void
    {
        $this->todayDate = $todayDate;
    }



}