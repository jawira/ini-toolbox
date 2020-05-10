Feature: Get ini settings

  Scenario Outline: Using getter with valid ini keys
    Given I have an instance of "\Jawira\PhpIniSettings\Settings"
    When I call "get" method with "<parameter>" param
    Then The method must not return null

    Examples:
      | parameter            |
      | post_max_size        |
      | session.cache_expire |
      | exif.encode_unicode  |
      | realpath_cache_size  |
      | sendmail_path        |
      | default_charset      |
      | display_errors       |
      | post_max_size        |

  Scenario Outline: Using getter with invalid ini keys
    Given I have an instance of "\Jawira\PhpIniSettings\Settings"
    When I call "get" method with "<parameter>" param
    Then The method must return null

    Examples:
      | parameter        |
      | 0                |
      |                  |
      | azerty           |
      | register_globals |
