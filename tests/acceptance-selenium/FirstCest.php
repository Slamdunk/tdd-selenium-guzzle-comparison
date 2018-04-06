<?php

class FirstCest
{
    public function testDatePickerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Selenium workplace');
        $I->seeInFormFields('#form', [
            'date' => '',
        ]);
        $I->makeScreenshot('01_enter');

        $I->click('#date');
        $I->makeScreenshot('02_focus_on_date');

        $I->click('//td/a[text()="19"]');
        $I->seeInFormFields('#form', [
            'date' => '19/04/2018',
        ]);
        $I->makeScreenshot('03_select_date');

        $I->click('Send');
        $I->makeScreenshot('04_new_page');
        $I->see('19/04/2018', 'p');
        $I->seeInFormFields('#form', [
            'date' => '',
        ]);
    }
}
