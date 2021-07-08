<?php

class ChangePassword1Cest
{
    public function tryToTest(AcceptanceTester $I)
    {      
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');//change password failse incorrect old password
        $I->fillField(['id' => 'id_password'], '160799881');
        $I->click(['id' => 'id_btlogin']);
        $I->amOnPage('/account.php');
        $I->click(['id' => 'id_changepw']);
        //id_changeif
        //id_changepw
        $I->fillField(['id' => 'id_oldpass'], '123454321');
        $I->fillField(['id' => 'id_newpass'], '160799881');
        $I->fillField(['id' => 'id_renewpass'], '160799881');
        
        $I->click(['id' => 'id_btchangepass']);
        $I->click(['id' => 'id_changepw']);
        $status = $I->grabTextFrom('.ifpassword');//Change password success
        $I->assertEquals('Change password failed', $status);//Change password failed
        $I->wait(1);
    }
}
