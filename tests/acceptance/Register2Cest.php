<?php

class Register2Cest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/registration.php');      
        $I->fillField(['id' => 'id_name'], '');      //register filse with empty form
        $I->fillField(['id' => 'id_email'], 'vshbmt@gmail.com');      
        $I->fillField(['id' => 'id_password'], '160799881');      
        $I->fillField(['id' => 'id_password2'], '160799881');      
        $I->fillField(['id' => 'id_phonenumber'], '01632591776');      
        $I->fillField(['id' => 'id_address'], '22 to 2 tan thinh thai nguyen');
        $I->click(['id' => 'id_btregister']);
        $I->wait(1);
        $status = $I->grabTextFrom('.ifregister');
        $I->assertEquals('', $status);
    }
}
