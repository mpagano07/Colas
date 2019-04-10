<?php
require 'Pila.php';


class ColaPila
{   
    private $pila1;
    private $pila2;

    public function __construct()
    {
        $this->pila1 = new Pila();
        $this->pila2 = new Pila();
    
    }
    public function desencolar()
    {
        while (!$this->pila1->isEmpty() ) {
            $this->pila2->apilar($this->pila1->desapilar());
        }
        return $this->pila2->desapilar();
        
        
    }
    public function encolar($elemento)
    {
        while (!$this->pila2->isEmpty()) {
            $this->pila1->apilar($this->pila2->desapilar());
        }
        $this->pila1->apilar($elemento);

    }


}

$cola = new ColaPila;
$cola->encolar(1);
$cola->encolar(2);
$cola->encolar(3);

echo $cola->desencolar();
echo $cola->desencolar();

