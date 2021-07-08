<?php

class SignIn2Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'admin');          //signin with  wrong password
        $I->fillField(['id' => 'id_password'], '1607998');
        //$I->wait(1);
        $I->click(['id' => 'id_btlogin']);
        $I->wait(1);
        $status = $I->grabTextFrom('.iflogin');
        $I->assertEquals('Sign in failed, account and password is wrong.....', $status);
    }
}
