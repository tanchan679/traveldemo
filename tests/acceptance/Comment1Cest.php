<?php

class Comment1Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField(['id' => 'id_email'], 'admin');
        $I->fillField(['id' => 'id_password'], '160799881');
        $I->click(['id' => 'id_btlogin']);
        $I->amOnPage('/travelviewing.php?id=8');
        $I->scrollTo(['id' => 'cmt'], 20, 50);
        $I->fillField(['id' => 'cmt'], 'Comment from test case 1'); // comment success with normal input
        $previous = $I->grabTextFrom('#id_count');
        $I->wait(1);
        $I->click(['id' => 'id_btcomment']);
        $I->scrollTo(['id' => 'cmt'], 20, 50);
        $I->wait(1);
        $now = $I->grabTextFrom('#id_count');
        if($previous == $now) {
            $I->fail("Comment is not add to list");
        }
    }
}
