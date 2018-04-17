<?php

namespace Tests\Local\AcceptanceSelenium;

use AcceptanceSeleniumTester;

class PlaygroundCest
{
    public function testDatePickerWorks(AcceptanceSeleniumTester $I)
    {
        $I->amOnPage('/');
        $I->see('Playground PHP', 'h1');
        $I->dontSee('19/04/2018', '#result');

        $I->click('#date');
        $I->click('//td/a[text()="19"]');
        $I->click('Send');
        $I->see('19/04/2018', '#result');
    }

    /*
    public function testScreenshotsCapability(AcceptanceSeleniumTester $I)
    {
        $I->amOnPage('/');
        $I->see('Playground PHP', 'h1');
        $I->dontSee('19/04/2018', '#result');

        $I->makeScreenshot('01_enter');

        $I->click('#date');

        $I->makeScreenshot('02_focus_on_date');

        $I->click('//td/a[text()="19"]');

        $I->makeScreenshot('03_select_date');

        $I->click('Send');

        $I->makeScreenshot('04_new_page');

        $I->see('19/04/2018', '#result');
    }
    // */
}
