Feature: search
  In order to check the search
  As a user
  I need to input text in the field the search

  Scenario: check valid search
    Given I am going to home page
    When I input in search "tractor"
    And I click on button search
    Then I should see the contain "Lawn Tractors"
