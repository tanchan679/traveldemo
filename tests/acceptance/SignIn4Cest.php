<?php

class SignIn4Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'admin');  //login with empty 
        $I->fillField(['id' => 'id_password'], '');
        //$I->wait(1);
        $I->click(['id' => 'id_btlogin']);
        $I->wait(1);
        $status = $I->grabTextFrom('.iflogin');
        $I->assertEquals('', $status);
    }
}
