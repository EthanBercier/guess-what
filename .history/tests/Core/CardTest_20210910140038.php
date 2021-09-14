<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class CardTest extends TestCase
{

  public function testName()
  {
    $card = new Card('As', 'Trefle');
    $this->assertEquals('As', $card->getName());
    $card = new Card('2', 'Trefle');
    $this->assertEquals('2', $card->getName());

  }

  public function testColor()
  {
    $card = new Card('As', 'Trefle');
    $this->assertEquals('Trefle', $card->getColor());
    $card = new Card('As', 'Pique');
    $this->assertEquals('Pique', $card->getColor());
  }

  public function testCompareSameCard()
  {
    $card1 = new Card('As', 'Trefle');
    $card2 = new Card('As', 'Trefle');
    $this->assertEquals(0, CardGame32::compare($card1,$card2)); // à ajuster avec le nouvelle ordre
  }

  public function testCompareSameNameNoSameColor()
  {
    $card1 = new Card('As', 'Trefle');
    $card2 = new Card('As', 'Coeur'); 
    $this->assertEquals(1, CardGame32::compare($card1,$card2));  // à ajuster avec le nouvelle ordre
   
  }

  public function testCompareNoSameCardNoSameColor()
  {
    $card1 = new Card('As', 'Coeur');
    $card2 = new Card('Roi', 'Trefle');
    $this->assertEquals(-1, CardGame32::compare($card1,$card2)); // à ajuster avec le nouvelle ordre
  }

  public function testCompareNoSameCardSameColor()
  {
    $card1 = new Card('As', 'Trefle');
    $card2 = new Card('Roi', 'Trefle');
    $this->assertEquals(-1, CardGame32::compare($card1,$card2)); // à ajuster avec le nouvelle ordre
   
  }


  public function testToString()
  {
    //TODO vérifie que la représentation textuelle d'une carte est correcte
    $this->fail("not implemented !");
  }

}
