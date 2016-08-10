<?php

/**
 * @group login
 */
class LoginCest
{
    function loginSuccess(\AcceptanceTester $I) {
        $I->clickOnSignInOnTheHomePage();
        $I->iEnterAnd('test_mowdirect@yahoo.co.uk', '123456');
        $I->iClickOnTheButtonLogin();
        $I->iShouldSeeMyDashboard();
    }






   


































}
