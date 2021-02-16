<?php 
/** Article 
 * 
*/
class Article
{
    public $title;
    public $content;
    public $author;
    public $date;
    public $views;
    public $tag;
    public function __construct(string $title, string $content, string $author, string $tag)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->tag = $tag;
    }
    public function setdate(){
        return $this->date = date('d/m/Y');
    }
}
