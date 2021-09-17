<?php

declare(strict_types=1);

use App\Entity\ItemDaLista;
use App\UseCase\Executar;
use PHPUnit\Framework\TestCase;


/* Números divisíveis por 3 deve aparecer como 'Fizz' ao invés do número;
Números divisíveis por 5 devem aparecer como 'Buzz' ao invés do número;
Números divisíveis por 3 e 5 devem aparecer como 'FizzBuzz' ao invés do número'. */

final class executarTest extends TestCase {
    public function testeChecarNumeroMultiploTresRetornaFizz() {
        $itemDaLista1 = new ItemDaLista("3");
        $itemDaLista2 = new ItemDaLista("9");
        $executarFizz = new Executar();
        
        $this->assertEquals( $executarFizz->execute($itemDaLista1), "Fizz"  );
        $this->assertEquals( $executarFizz->execute($itemDaLista2), "Fizz"  );
    }    
    
    public function testeChecarNumeroNaoMultiploTresECincoRetornaNumero() {
        $itemDaLista1 = new ItemDaLista("7");
        $itemDaLista2 = new ItemDaLista("4");
        $executarFizz = new Executar();
        
        $this->assertEquals( $executarFizz->execute($itemDaLista1), "7");
        $this->assertEquals( $executarFizz->execute($itemDaLista2), "4");
    }  
    
    public function testeChecarNumeroMultiploCincoRetornaBuzz() {
        $itemDaLista1 = new ItemDaLista("5");
        $itemDaLista2 = new ItemDaLista("10");
        $executarFizz = new Executar();
        
        $this->assertEquals( $executarFizz->execute($itemDaLista1), "Buzz");
        $this->assertEquals( $executarFizz->execute($itemDaLista2), "Buzz");
    } 
    
    public function testeChecarNumeroMultiploTresECincoRetornaFizzBuzz() {
        $itemDaLista1 = new ItemDaLista("15");
        $itemDaLista2 = new ItemDaLista("30");
        $executarFizz = new Executar();
        
        $this->assertEquals( $executarFizz->execute($itemDaLista1), "FizzBuzz");
        $this->assertEquals( $executarFizz->execute($itemDaLista2), "FizzBuzz");
    }    
}