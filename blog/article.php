<?php 
include_once 'post.php';

/** Article 
 * 
*/
class Article extends Post
{
    public $title;    
    public function __construct(string $title, string $content, string $author, string $tag){
        parent:: __construct($content, $author, $tag);
        $this->title = $title;
    }
}
