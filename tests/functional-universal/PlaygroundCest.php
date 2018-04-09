<?php

namespace Tests\FunctionalUniversal;

use FunctionalUniversalTester;

class PlaygroundCest
{
    public function testDatePickerWorks(FunctionalUniversalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Playground');
        $I->fillField('#date', '19/04/2018');
        $I->click('Send');
        $I->see('19/04/2018', 'p');
    }
}
