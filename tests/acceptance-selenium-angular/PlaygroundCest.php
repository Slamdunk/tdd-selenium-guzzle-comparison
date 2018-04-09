<?php

namespace Tests\AcceptanceSeleniumAngular;

use AcceptanceSeleniumAngularTester;

class PlaygroundCest
{
    public function testSearchFilter(AcceptanceSeleniumAngularTester $I)
    {
        $I->amOnPage('/angular/');

        $I->see('Nexus S');
        $I->see('iPhone 7');
        $I->see('iPad');

        $I->fillField('#search', 'Apple');

        $I->dontSee('Nexus S');
        $I->see('iPhone 7');
        $I->see('iPad');
    }
}
