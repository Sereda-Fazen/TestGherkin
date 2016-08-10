Feature: login
  In order to login
  As a enter login and password
  I need to navigate home page

  Scenario: successfully login
    Given Click on Sign in on the home page
    When I enter "test_mowdirect@yahoo.co.uk" and "123456"
    And I click on the button Login
    Then I should see My Dashboard

