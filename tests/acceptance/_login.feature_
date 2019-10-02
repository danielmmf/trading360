Feature: Login
  In order to login
  I need to call login and see right answer
  Scenario Outline: login
    Given I am user
    When I fill in Email with "<email>" and I fill in Password with "<password>"
    And I call login
    Then I should see "<resposta>"
    Examples:
       | email            | password    | resposta            |
       | test@test.com    | test123pass | Login successful    |
       | test@test.com    | test123pa   | Login unsuccessful  |
       | testsss@test.com | test123pass | Email does not exist    |