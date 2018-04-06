<?php

namespace Tests\AcceptanceGuzzle;

use AcceptanceGuzzleTester;

class PlaygroundCest
{
    public function testDatePickerWorks(AcceptanceGuzzleTester $I)
    {
        $I->amOnPage('/');
        $I->see('Playground');
        $I->fillField('#date', '19/04/2018');
        $I->click('Send');
        $I->see('19/04/2018', 'p');
    }
}
