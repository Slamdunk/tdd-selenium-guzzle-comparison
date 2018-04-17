<?php

namespace Tests\Local\AcceptanceGuzzle;

use AcceptanceGuzzleTester;

class PlaygroundCest
{
    public function testDatePickerWorks(AcceptanceGuzzleTester $I)
    {
        $I->amOnPage('/');
        $I->see('Playground PHP', 'h1');
        $I->dontSee('19/04/2018', '#result');

        $I->fillField('#date', '19/04/2018');
        $I->click('Send');
        $I->see('19/04/2018', '#result');
    }
}
