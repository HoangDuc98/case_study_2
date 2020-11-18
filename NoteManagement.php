<?php


class NoteManagement
{
    protected $note;

    /**
     * NoteManagement constructor.
     * @param $note
     */
    public function __construct($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    function searchNotes($keyword){
        //code tim kiem
    }
    function addNote($title,$content,$typeId){
        //code them vao anh iu nhe
    }
    function removeNote($noteId){
        //code xoa anh iu khoi vu tru
    }



}