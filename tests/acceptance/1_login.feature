
Feature: login
  In order to login
  As a enter login and password
  I need to navigate home page

  Scenario: User must be created
    Given Go to Main Page
    When Click on the Sign in link in the header
    When Type "mowdirect@gmail.com" in the Email Address field
    When Type "123456" in the Password field
    When Click on Login button
    Then I should see My Dashboard

