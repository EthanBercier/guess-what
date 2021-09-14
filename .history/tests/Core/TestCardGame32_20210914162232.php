<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;


class CardGame32Test extends TestCase
{
    public function testShuffle()
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

    public function testGetCard()
    {
        $cardgame = CardGame32 :: factoryCardGame32();
        $index = 1;
        $card1 = $cardGame ->getName($index);
        $this -> assertEquals('Roi', $card1 -> getName());
        $this -> assertEquals('Pique', $card1 -> getName());
    }

    public function testGetCardPlusGrand()
    {
        $cardgame = CardGame32::factoryCardGame32();
        $index = 125;
        $card1 = $cardgame->getCard($index);
        $this->assertEquals('9', $card1->getName());
        $this->assertEquals('Coeur', $card1->getColor());
    }

    public function testGetCardPlusPetit()
    {
        $cardgame = CardGame32::factoryCardGame32();
        $index = -125;
        $card1 = $cardgame->getCard($index);
        $this->assertEquals('6', $card1->getName());
        $this->assertEquals('Pique', $card1->getColor());
    }


    public fuction testReOrder()
    {
        
    }

    public function compare()
    {
        
    }

}


?>
