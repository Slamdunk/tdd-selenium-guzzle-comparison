<?php

class FirstCest
{
    public function testDatePickerWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Selenium workplace');
        $I->fillField('#date', '19/04/2018');
        $I->click('Send');
        $I->see('19/04/2018', 'p');
    }
}
