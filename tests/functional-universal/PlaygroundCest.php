<?php

namespace Tests\FunctionalUniversal;

use FunctionalUniversalTester;

class PlaygroundCest
{
    public function testDatePickerWorks(FunctionalUniversalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Playground PHP', 'h1');
        $I->dontSee('19/04/2018', '#result');

        $I->fillField('#date', '19/04/2018');
        $I->click('Send');
        $I->see('19/04/2018', '#result');
    }
}
