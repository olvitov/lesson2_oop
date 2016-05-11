<?php

class Article {

    public $title;
    public $text;
    public $user;

    public function __construct($title , $text, $user = '')
    {
        $this->title = $title;
        $this->text = $text;
        $this->user = $user;

    }


    public function view() {
        echo $this->title;
        echo $this->text;
    }

    public function index() {

       echo $this->user;
    }
}

$a = new Article('Заголовок новости ', 'Текст новости');


// $a->title = ' Заголовок статьи_1';
$a->text = ' Текст новости_1';
// var_dump($a);
$a->view();

 $b = new Article('Заголовок новости2', 'Текст новости2');
// $b->title = 'Другой заголовок ';
echo '<br>';
 $b->view();

$c = new Article('', '', 'olvit');
echo '<br>';
$c->index();


