Feature: Set ini settings

  Scenario: I set an existing key
    Given I have an instance of "\Jawira\PhpIniSettings\Settings"
    When I call "set" method with "track_errors" and "On" params
    And The method must not return null
    Then I call "get" method with "track_errors" param
    And  The method must return value "On"

  Scenario: S
    Given I have an instance of "\Jawira\PhpIniSettings\Settings"
    When I call "set" method with "date.timezone" and "Europe/Brussels" params
    And The method must not return null
    Then The default timezone must be "Europe/Brussels"

