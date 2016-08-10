<?php
namespace Page;



class Login
{
    public static $url = '/';
    public static $login = '.fright';
    public static $email = '#email';
    public static $pass = '#pass';
    public static $clickLogin = '#send2';
    public static $dashboard = '.dashboard';
    public static $title = '.page-title';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    /**
     * @Given Click on Sign in on the home page
     */
    public function clickOnSignInOnTheHomePage()
    {
        $I = $this->tester;
        $I->amOnPage(self::$url);
        $I->click('Sign in', self::$login);
    }


    /**
     * @When I enter :arg1 and :arg2
     * @param $arg1
     * @param $arg2
     */
    public function iEnterAnd($arg1, $arg2)
    {
        $I = $this->tester;
        $I->fillField(self::$email,$arg1);
        $I->fillField(self::$pass,$arg2);
    }

    /**
     * @When I click on the button Login
     */
    public function iClickOnTheButtonLogin()
    {
        $I = $this->tester;
        $I->click(self::$clickLogin);
    }

    /**
     * @Then I should see My Dashboard
     */
    public function iShouldSeeMyDashboard()
    {
        $I = $this->tester;
        $I->waitForElement(self::$dashboard);
        $I->see('My Dashboard',self::$title);
    }




}
