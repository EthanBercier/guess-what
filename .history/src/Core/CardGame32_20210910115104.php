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
    // TODO (voir les fonctions sur les tableaux)
  }

  // TODO ajouter une méthode reOrder qui remet le paquet en ordre

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
    // TODO code naïf, et de plus il faudra prendre en compte la couleur !
    $order_color = ['carreau =>4, pique =>3, coeur =>2, trèfle =>1'];
    $order_Name = ['2 => 1, 3 => 2, 4 =>3, 5 => 4, 6=> 5, 7=> 6, 8=>7, 9=> 8, 10=> 9, valet=> 10, reine=>11, roi=> 12, as=>13'];

    $c1Name = strtolower($c1->getName());
    $c2Name = strtolower($c2->getName());
    $c1Name = strtolower($c1->getColor());
    $c2Name = strtolower($c2->getColor());

    if ($c1Name === $c2Name) {
      if($order_color[$c1Color] === $order_color[$c2Color]){
        return 0;
    }

    return ($order_color[$c1Color] > $order_color[$c2Color]) ? +1 : -1;
  }
  return ($c1Name > $c2Name) ? +1 : -1;
}
 // TODO manque PHPDoc
  public static function factoryCardGame32() : CardGame32 {
     // TODO création d'un jeu de 32 cartes
    $cardGame = new CardGame32([new Card('as', 'trèfle'), new Card('2', 'trèfle')]);

    return $cardGame;
  }

  // TODO manque PHPDoc
  public function getCard($index) : Card {
    // TODO naïf
    return  $this->cards[$index];
  }

}

