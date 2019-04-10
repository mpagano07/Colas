<?php

class Pila
{
    private $collection = [];
    private $size;

    public function __construct()
    {
        $this->collection = [];
        $this->size = 0;
    
    }
    public function desapilar()
    {
        $this->size--;
        $elemento = array_pop($this->collection);
        $this->collection = array_values($this->collection);
        return $elemento;
    }
    public function apilar($elemento)
    {
        array_push ($this->collection, $elemento);
        $this->size++;
    }
    public function verPimero()
    {
        if (!isEmpty()){
            return $this->collection[0];
        }
        echo "no hay primer elemento";
    }
    public function isEmpty()
    {
        if ($this->size == 0) {
            return true;
        }
        return false;
    }
    public function print()
    {
        print_r($this->collection);
    }
}


