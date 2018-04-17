<?php

namespace Tests\AcceptanceBrowserstack;

use AcceptanceBrowserstackTester;

class PlaygroundCest
{
    public function testDatePickerWorks(AcceptanceBrowserstackTester $I)
    {
        $I->amOnPage('/');
        $I->see('Playground PHP', 'h1');
        $I->dontSee('19/04/2018', '#result');

        $I->click('#date');
        $I->click('//td/a[text()="19"]');
        $I->click('Send');
        $I->see('19/04/2018', '#result');
    }
}
