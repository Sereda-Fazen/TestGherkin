<?php

class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given I click Sign in on the home page
     */
    public function IClickOnSignInOnTheHomePage()
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
     * @Given I am going to home page
     */

    public function iAmGoingHomePage()
    {
        $this->amOnPage('/');
    }

    /**
     * @When I input in search :arg1
     */
    public function iInputInSearch($arg1)
    {
        $this->fillField('#search',$arg1);
    }

    /**
     * @When I click on button search
     */
    public function iClickOnButtonSearch()
    {

        $this->click('button.button.search-button');
    }

    /**
     * @Then I should see the contain :arg1
     */
    public function iShouldSeeTheContain($arg1)
    {

        $this->waitForElement('.gsc-resultsbox-visible');
        $this->see($arg1, '.gsc-resultsbox-visible');
    }



}
