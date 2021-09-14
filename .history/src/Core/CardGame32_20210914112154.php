<?php

namespace App\Core;

/**
 * Class CardGame32 : un jeu de cartes.
 * @package App\Core
 */
class CardGame32
{
  /**
   * @var $cards array a array of Cards
   */
  private $cards;

  /**
   * Guess constructor.
   * @param array $cards
   */
  public function __construct(array $cards)
  {
    $this->cards = $cards;
  }

  /**
   * Brasse le jeu de cartes
   */
  public function shuffle()
  {
    shuffle($this->$cards);
  }


  
  public function reOrder(array $cardGame)
  {
    // TODO ajouter une méthode reOrder qui remet le paquet en ordre
    // PS : Cette merde est infâme ! Somebody can throw me by the windows from the fourth floor please ?


  }
 


  /** définir une relation d'ordre entre instance de Card.
   * à valeur égale (name) c'est l'ordre de la couleur qui prime
   * coeur > carreau > pique > trèfle
   * Attention : si AS de Coeur est plus fort que AS de Trèfle,
   * 2 de Coeur sera cependant plus faible que 3 de Trèfle
   *
   *  Remarque : cette méthode n'est pas de portée d'instance (static)
   *
   * @see https://www.php.net/manual/fr/function.usort.php
   *
   * @param $c1 Card
   * @param $c2 Card
   * @return int
   * <ul>
   *  <li> zéro si $c1 et $c2 sont considérés comme égaux </li>
   *  <li> -1 si $c1 est considéré inférieur à $c2</li>
   * <li> +1 si $c1 est considéré supérieur à $c2</li>
   * </ul>
   *
   */
  public static function compare(Card $c1, Card $c2) : int
  {
    
    $order_color = ['carreau' =>4, 'pique' =>3, 'coeur' =>2, 'trèfle' =>1];
    $order_Name = ['7'=> 7, '8'=>8, '9'=> 9, '10'=> 10, 'valet'=> 11, 'reine'=>12, 'roi'=> 13, 'as'=>14];

    $c1Name = strtolower($c1->getName());
    $c2Name = strtolower($c2->getName());
    $c1Color = strtolower($c1->getColor());
    $c2Color = strtolower($c2->getColor());

    if ($c1Name === $c2Name) {
      if($order_color[$c1Color] === $order_color[$c2Color]){
        return 0;
    }

    return ($order_color[$c1Color] > $order_color[$c2Color]) ? +1 : -1;
  }
  return ($c1Name > $c2Name) ? +1 : -1;
}
 
  public static function factoryCardGame32() : CardGame32 {
     
    $cardGame = new CardGame32([new Card('As', 'Trèfle'), new Card('As', 'Carreau'), new Card('As', 'Coeur'), new Card('As', 'Pique'), 
    new Card('Roi','Carreau'), new Card('Roi','Pique'), new Card('Roi','Coeur'), new Card('Roi','Trèfle'), 
    new Card('Reine','Carreau'), new Card('Reine','Pique'), new Card('Reine','Coeur'), new Card('Reine','Trèfle'),
    new Card('Valet','Carreau'), new Card('Valet','Pique'), new Card('Valet','Coeur'), new Card('Valet','Trèfle'),  
    new Card('7','Carreau'), new Card('7','Pique'), new Card('7','Coeur'), new Card('7','Trèfle'),
    new Card('8','Carreau'), new Card('8','Pique'), new Card('8','Coeur'), new Card('8','Trèfle'),
    new Card('9','Carreau'), new Card('9','Pique'), new Card('9','Coeur'), new Card('9','Trèfle'),
    new Card('10','Carreau'), new Card('10','Pique'), new Card('10','Coeur'), new Card('10','Trèfle'),]);

    return $cardGame;
  }


  public function getCard($index) : Card {
    if($index > 32){
      $index = $index % 32;
    }
    while($index < 0){
      $index = $index+32;
    }
    return  $this->cards[$index];
  }

  public function __toString()
  {
    return 'cardGame32:' .count($this ->Card). 'carte';
  }

}

?>