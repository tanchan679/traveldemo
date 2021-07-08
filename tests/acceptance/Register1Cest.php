<?php

class Register1Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/registration.php');      
        $I->fillField(['id' => 'id_name'], 'vu sinh huy');      // register success
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');      
        $I->fillField(['id' => 'id_password'], '160799881');      
        $I->fillField(['id' => 'id_password2'], '160799881');      
        $I->fillField(['id' => 'id_phonenumber'], '0332591776');      
        $I->fillField(['id' => 'id_address'], 'hop thanh, my duc, ha noi');
        $I->click(['id' => 'id_btregister']);
        $I->wait(1);
        $status = $I->grabTextFrom('.ifregister');
        $I->assertEquals('Register success', $status);
    }
}
