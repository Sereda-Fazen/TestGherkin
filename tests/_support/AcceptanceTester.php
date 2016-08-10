<?php

class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    
    /**
     * @Given Click on Sign in on the home page
     */
    public function clickOnSignInOnTheHomePage()
    {
        $this->amOnPage('/');
        $this->click('Sign in', '.fright');
    }


    /**
     * @When I enter :arg1 and :arg2
     */
    public function iEnterAnd($arg1, $arg2)
    {
        $this->fillField('#email',$arg1);
        $this->fillField('#pass',$arg2);
    }

    /**
     * @When I click on the button Login
     */
    public function iClickOnTheButtonLogin()
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
    

    /**
     * @Given I click on logo
     */
    public function iClickOnLogo()
    {
        $this->amOnPage('/');
        $this->waitForElement('//a[@class="logo"]');
        $this->click('//a[@class="logo"]');
    }

    /**
     * @Then I return to main page
     */
    public function iReturnToMainPage()
    {
        $this->waitForElementNotVisible('.page-title');
        $this->seeInCurrentUrl('/');
    }




}
