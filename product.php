<?php


class Product{

    protected $id;
    public $category;
    public $name;
    public $brand;
    public $desc;
    public $img_path;
    public $price;

    public function __construct($id,$category,$name,$brand,$desc,$img_path,$price){

        $this->$id = $id;
        $this->$category = $category;
        $this->$name = $name;
        $this->$brand = $brand;
        $this->$desc = $desc;
        $this->$img_path = $img_path;
        $this->$price = $price;

    }

}



?>