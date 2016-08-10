<?php
namespace Page;


class Home
{

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    /**
     * @Given I click on logo
     */
    public function iClickOnLogo()
    {
        $I = $this->tester;
        $I->amOnPage('/');
        $I->waitForElement('//a[@class="logo"]');
        $I->click('//a[@class="logo"]');
    }

    /**
     * @Then I return to main page
     */
    public function iReturnToMainPage()
    {
        $I = $this->tester;
        $I->waitForElementNotVisible('.page-title');
        $I->seeInCurrentUrl('/');
    }





}
