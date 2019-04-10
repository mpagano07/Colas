<?php
 
class Pila2
{
    protected $collection = [];
 
    public function __construct()
    {
        $this->collection = [];
    }
 
    public function isEmpty()
    {
        return count($this->collection) == 0;
    }
 
    public function apilar($elem)
    {
        $this->collection[] = $elem;
    }
 
    public function desapilar()
    {
        return array_pop($this->collection);
    }
}