<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;


class CardGame32Test extends TestCase
{
    public function TestShuffle()
    { 
        $CardGame1 = CardGame32 :: factoryCardGame32();
        $CardGame1 -> shuffle();
        $CardGame2 = CardGame32 :: factoryCardGame32();
        $this->assertNotEquals($CardGame1, $CardGame2);


    }


    public function testCompare()
    {
        $cardGame = new cardGame32([ new Card('As, Trèfle')]);
    }

    public function GetCard()
    {

    }


}

