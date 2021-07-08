<?php

class SignIn3Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'admin');              //login success with correc username and password
        $I->fillField(['id' => 'id_password'], '160799881');
        //$I->wait(1);
        $I->click(['id' => 'id_btlogin']);
        $I->wait(1);
        $status = $I->grabTextFrom('.iflogin');
        $I->assertEquals('Signin success', $status);
    }
}
