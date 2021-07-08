<?php

class ChangePassword3Cest
{
    

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');// change password success
        $I->fillField(['id' => 'id_password'], '160799881');
        $I->click(['id' => 'id_btlogin']);
        $I->amOnPage('/account.php');
        $I->click(['id' => 'id_changepw']);
        //id_changeif
        //id_changepw
        $I->fillField(['id' => 'id_oldpass'], '');
        $I->fillField(['id' => 'id_newpass'], '160799881');
        $I->fillField(['id' => 'id_renewpass'], '160799881');
        
        $I->click(['id' => 'id_btchangepass']);
        $I->click(['id' => 'id_changepw']);
        $status = $I->grabTextFrom('.ifpassword');
        $I->assertEquals('', $status);
        $I->wait(1);
    }
}
