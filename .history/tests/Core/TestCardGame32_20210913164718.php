<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;


class CardGame32Test extends TestCase
{
    public function TestShuffle()
    { 
        $CardGame1 = App\Core\CardGame32 :: factoryCardGame32();
        $CardGame1 -> shuffle;
        $CardGame2 = App\Core\CardGame32 :: factoryCardGame32();
        //$this->;


    }

}

