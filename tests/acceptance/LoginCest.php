<?php
class LoginCest
{
    function loginSuccess(\Page\Login $loginPage) {
        $loginPage->clickOnSignInOnTheHomePage();
        $loginPage->iEnterAnd('test_mowdirect@yahoo.co.uk', '123456');
        $loginPage->iClickOnTheButtonLogin();
        $loginPage->iShouldSeeMyDashboard();
    }






   


































}
