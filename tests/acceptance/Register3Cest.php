<?php

class Register3Cest
{
   

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/registration.php');      
        $I->fillField(['id' => 'id_name'], 'vu sinh huy');      
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');      // register failse with email exist in database
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
