<?php
/** Post
 * 
 */
class Post{
    public $id;
    public $content;
    public $author;
    public $views;
    public $tag;
    public $date;
    public function __construct(string $content, string $author, string $tag)
    {
        $this->id = date('ymd');
        $this->content = $content;
        $this->author = $author;
        $this->tag = $tag;
        $this->date = date('d/m/Y');
    }
}