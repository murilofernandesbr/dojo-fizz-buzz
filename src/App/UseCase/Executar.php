<?php

declare(strict_types=1);
namespace App\UseCase;
use App\Entity\ItemDaLista;

/* Números divisíveis por 3 deve aparecer como 'Fizz' ao invés do número;
Números divisíveis por 5 devem aparecer como 'Buzz' ao invés do número;
Números divisíveis por 3 e 5 devem aparecer como 'FizzBuzz' ao invés do número'. */

final class Executar {
    public function execute(ItemDaLista $itemDaLista): string {
        return (string) $itemDaLista;
    }
}