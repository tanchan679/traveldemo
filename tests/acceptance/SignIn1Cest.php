<?php

class SignIn1Cest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], '');              //Signin with empty username
        $I->fillField(['id' => 'id_password'], '160799881');
        //$I->wait(1);
        $I->click(['id' => 'id_btlogin']);
        $I->wait(1);
        $status = $I->grabTextFrom('.iflogin');
        $I->assertEquals('', $status);
    }
}
