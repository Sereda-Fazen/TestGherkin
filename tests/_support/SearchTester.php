<?php

class SearchTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

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
