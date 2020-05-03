Feature: Get ini settings

  Scenario:
    Given I have an instance of "\Jawira\PhpIniSettings\Settings"
    When I call "get" method with "post_max_size" param
    Then The method must not return false
