<?php
namespace App;

class Comment
{
    public $name = null;
    public $email = null;
    public $content = null;

    public function __construct($comment)
    {
        if ($comment) {
            $this->name = $comment->name;
            $this->email = $comment->email;
            $this->content = $comment->content;
        }
    }

    public function AddComment($comment)
    {

    }
}
?>
