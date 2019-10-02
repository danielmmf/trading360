Feature: Origin Shipping 
  In order to ship
  I need to call shipping
Scenario: pais 1 e cidade 1 , deve trazer só 2 pacotes
    Given i have shipiment in my shipiments
    | name         | origin_country | origin_city   | user_id  |
    | br-sp@pr-sn  | 1              | 1             | 1        |
    | br-sp@pr-sn  | 1              | 1             | 1        |
    | br-sp@pr-sn  | 2              | 1             | 1        |
    | br-sp@pr-sn  | 2              | 2             | 1        |
    And my origin_country is "1" and origin_city is "1"
    When I call get get_packages
    Then I should see that total number of packages is 2
Scenario: pais 2 e cidade 1 , deve trazer só 1 pacotes
    Given i have shipiment in my shipiments
    | name         | origin_country | origin_city   | user_id  |
    | br-sp@pr-sn  | 1              | 1             | 1        |
    | br-sp@pr-sn  | 1              | 1             | 1        |
    | br-sp@pr-sn  | 2              | 1             | 1        |
    | br-sp@pr-sn  | 2              | 2             | 1        |
    And my origin_country is "2" and origin_city is "1"
    When I call get get_packages
    Then I should see that total number of packages is 1 
Scenario: pais 2 e cidade 2 , deve trazer só 1 pacotes
    Given i have shipiment in my shipiments
    | name         | origin_country | origin_city   | user_id  |
    | br-sp@pr-sn  | 1              | 1             | 1        |
    | br-sp@pr-sn  | 1              | 1             | 1        |
    | br-sp@pr-sn  | 2              | 1             | 1        |
    | br-sp@pr-sn  | 2              | 2             | 1        |
    And my origin_country is "2" and origin_city is "2"
    When I call get get_packages
    Then I should see that total number of packages is 1 
