<?php

declare(strict_types=1);
namespace App\Entity;

final class ItemDaLista {
    public $valor;
    public $nome;

    public function __construct(string $valor) {
        $this->setValor($valor);
    }

    public function setValor($valor) : void {
        $this->nome = $valor;
        $this->valor = $valor;
        if ($this->isFizz()) {
            $this->nome = "Fizz";
        }
        
        if ($this->isBuzz()) {
            $this->nome = "Buzz";
        }

        if ($this->isFizzBuzz()) {
            $this->nome = "FizzBuzz";
        }      
    }
    
    public function isBuzz() : bool {
        return $this->valor % 5 === 0;
    }
    
    public function isFizz() : bool {
        return $this->valor % 3 === 0;
    }
    
    public function isFizzBuzz() : bool {
        return $this->isFizz() && $this->isBuzz();
    }

    public function __toString() : string {
        return $this->nome;
    }
}