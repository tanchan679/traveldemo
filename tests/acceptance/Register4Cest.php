<?php

class Register4Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/registration.php');      
        $I->fillField(['id' => 'id_name'], 'javascript:void(document.cookie=”username=otherUser”)');      
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');      // register failse with script injection
        $I->fillField(['id' => 'id_password'], '160799881');      
        $I->fillField(['id' => 'id_password2'], '160799881');      
        $I->fillField(['id' => 'id_phonenumber'], '01632591776');      
        $I->fillField(['id' => 'id_address'], '22 to 2 tan thinh thai nguyen');
        $I->click(['id' => 'id_btregister']);
        $I->wait(1);
        $status = $I->grabTextFrom('.ifregister');
        $I->assertEquals('Register failed', $status);
    }
}