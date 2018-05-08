<?php

require '../vendor/autoload.php';

use App;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
	    public function test_it_scores_a_scoreless_game()
    {
    	$t = new Tennis();
    	$this->assertEqual('Love-All', $t->score());
    }
}