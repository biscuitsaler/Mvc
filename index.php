<?php
class Model 
{
    public $string;

    public function __construct()
    {
        $this -> string = "Le Mvc , c'est le pied !";
    }
}
class View
{
    private $model;
    private $controller;

    public function __construct($controller, $model) {
        $this -> controller = $controller;
        $this -> model = $model;

    }
    public function output() {
        return "<p>" .^$this -> model -> string ."</p>";
    }
}
class Controller 
{
    private $model;
    public function __construct($model) {
        $this-> model = $model;
    }
}