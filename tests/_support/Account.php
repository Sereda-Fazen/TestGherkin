<?php

class Account extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given Go to Main Page
     */
    public function goToMainPage()
    {
        $this->amOnPage('/');
    }

    /**
     * @When Click on the Sign in link in the header
     */
    public function clickOnTheSignInLinkInTheHeader()
    {
        $this->click('Sign in', '.fright');
    }

    /**
     * @When Type :num1 in the Email Address field
     */
    public function typeLoginInTheEmailAddressField($num1)
    {
        $this->fillField('#email', $num1);
    }

    /**
     * @When Type :num2 in the Password field
     */
    public function typePasswordInThePasswordField($num2)
    {
        $this->fillField('#pass',$num2);
    }

    /**
     * @When Click on Login button
     */
    public function clickOnLoginButton()
    {
        $this->click('#send2');
    }

    /**
     * @Then I should see My Dashboard
     */
    public function iShouldSeeMyDashboard()
    {
        $this->waitForElement('.dashboard');
        $this->see('My Dashboard','.page-title');
    }



}
