<?php

class Article {
    public $title;
    public $content;
    private $published = false;

    // constructor
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    // method publish
    public function publish() {
        $this->published = true;
    }

    // isPublished method
    public function isPublished() {
        return $this->published;
    }
}

$article1 = new Article('My First Post', 'This was the first post.');
$article2 = new Article('My Second Post', 'This was the second post.');

$article1->publish();
$article2->publish();


echo var_dump($article1->isPublished(), true) . '<br>';
echo var_dump($article2->isPublished(), true) . '<br>';