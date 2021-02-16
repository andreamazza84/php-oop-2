<?php 
include_once 'post.php';

/**Comment 
 * 
*/
class Comment extends Post
{
    public $user;
    public function __construct(string $content, string $user){
        parent:: __construct($content, $author, $tag); 
        $this->user = $user;
    }
}