<?php
class Book {
    private int $id;
    private string $title;

    public function __construct(int $id, string $title) {
        $this->id = $id;
        $this->title = $title;
    }

    function getId(){
        return $this->id;
    }

    function getName(){
        return $this->title;
    }
}
function newBook($id, $title){
    return new Book($id, $title);
}

$book1 = new Book(1, 'test');
var_dump($book1->getId());
var_dump($book1->getName());
?>