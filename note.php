<?php


class note
{
    protected $typeid;
    protected $title;
    protected $content;

    /**
     * note constructor.
     * @param $typeid
     * @param $title
     * @param $content
     */
    public function __construct($typeid, $title, $content)
    {
        $this->typeid = $typeid;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * @param mixed $typeid
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;
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
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function save(){
        //code de luuuuu
    }

    public function delete(){
        //code de xoa
    }




}