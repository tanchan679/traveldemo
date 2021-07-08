<?php

class ChangeInformation2Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');//change failse with empty form name
        $I->fillField(['id' => 'id_password'], '160799881');
        $I->click(['id' => 'id_btlogin']);
        $I->amOnPage('/account.php');
        $I->click(['id' => 'id_changeif']);
        $I->fillField(['id' => 'id_name'], '');
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');
        $I->fillField(['id' => 'id_phonenumber'], '0332591776');
        $I->fillField(['id' => 'id_address'], 'thon van hop thanh my duc ha noi');
        $I->click(['id' => 'id_btchangeinfor']);
        $I->click(['id' => 'id_changeif']);
        $status = $I->grabTextFrom('.iformation');
        $I->assertEquals('', $status);
        $I->wait(1);
    }
}
