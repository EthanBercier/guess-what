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

public function testTostring2Cards()
{
    
    $cardGame = new cardGame32([ new Card('As', 'Trèfle'),new Card('As','Coeur')]);
    $this -> assertEquals('cardGame32 : 2 carte',$cardGame -> __toString());

}


    public function testToString()
    {
        $cardGame = new cardGame32([ new Card('As', 'Trèfle')]);
        $this -> assertEquals('cardGame32: 1 carte',$cardGame -> __toString());

    }

    public function getCard()
    {
        
    }

    public function compare()
    {

    }

}
