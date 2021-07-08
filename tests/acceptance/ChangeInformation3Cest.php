<?php

class ChangeInformation3Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');//change failse nothing change
        $I->fillField(['id' => 'id_password'], '160799881');
        $I->click(['id' => 'id_btlogin']);
        $I->amOnPage('/account.php');
        $I->click(['id' => 'id_changeif']);
        $I->fillField(['id' => 'id_name'], 'huy');
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');
        $I->fillField(['id' => 'id_phonenumber'], '0332591776');
        $I->fillField(['id' => 'id_address'], 'hop thanh my duc ha noi');
        $I->click(['id' => 'id_btchangeinfor']);
        $I->click(['id' => 'id_changeif']);
        $status = $I->grabTextFrom('.iformation');
        $I->assertEquals('Change information failed', $status);
        $I->wait(1);
    }
}
