<?php

class IndexCest
{
    public function _before(AcceptanceTester $I) {
    }

    public function tryToTest(AcceptanceTester $I) {
    }

    public function frontPageLoads(AcceptanceTester $I) {
        $I->amOnPage('/');
        $I->see('Poker Game, yeehaw');
    }
}
