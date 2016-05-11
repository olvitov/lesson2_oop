<?php

class Article {

    public $title;
    public $text;
    public function view() {
        echo $this->title;
    }
}

$a = new Article();


$a->title = 'Заголовок статьи';
var_dump($a);
$a->view();

$b = new Article();
$b->title = 'Другой заголовок';
echo '<br>';
$b->view();
