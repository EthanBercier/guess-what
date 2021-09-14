<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class CardTest extends TestCase
{

  public function testName()
  {
    $card = new Card('as', 'trèfle');
    $this->assertEquals('as', $card->getName());
    $card = new Card('2', 'trèfle');
    $this->assertEquals('2', $card->getName());

  }

  public function testColor()
  {
    $card = new Card('as', 'trèfle');
    $this->assertEquals('trèfle', $card->getColor());
    $card = new Card('as', 'pique');
    $this->assertEquals('pique', $card->getColor());        // à ajuster en fonction des nombre
  }     

  public function testCompareSameCard()
  {
    $card1 = new Card('as', 'trèfle');
    $card2 = new Card('as', 'trèfle');
    $this->assertEquals(0, CardGame32::compare($card1,$card2)); // à ajuster en fonction des nombre
  
  public function testCompareSameNameNoSameColor()
  {
    $card1 = new Card('as', 'trèfle');
    $card2 = new Card('as', 'coeur'); 
    $this->assertEquals(1, CardGame32::compare($card1,$card2));  // à ajuster en fonction des nombre
   
  }

  public function testCompareNoSameCardNoSameColor()
  {
    $card1 = new Card('as', 'coeur');
    $card2 = new Card('roi', 'trèfle');
    $this->assertEquals(-1, CardGame32::compare($card1,$card2)); // à ajuster en fonction des nombre
  }

  public function testCompareNoSameCardSameColor()
  {
    $card1 = new Card('as', 'trèfle');
    $card2 = new Card('roi', 'trèfle');
    $this->assertEquals(-1, CardGame32::compare($card1,$card2)); // à ajuster en fonction des nombre
   
  }


  public function testToString()
  {
    //TODO vérifie que la représentation textuelle d'une carte est correcte
    $this->fail("not implemented !");
  }

}
