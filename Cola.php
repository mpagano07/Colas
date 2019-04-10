<?php

class Cola
{
    private $collection = [];
    private $size;
    private $array;

    public function __construct($collection)
    {
        $this->collection = [];
        $this->size = 0;
    
    }
    public function desencolar()
    {
        $elemento = $this->collection[0];
        unset($this->collection[0]);
        $this->collection = array_values($this->collection);
        return $elemento;
    }
    public function encolar($elemento)
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
    public function verTamaño()
    {
        # code...
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

$cola = new Cola($collection);

$cola-> print();


