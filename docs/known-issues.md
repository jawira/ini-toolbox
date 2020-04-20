Known issues
============

Useless ini_set()
-----------------

> Many settings, although they do get set, have no influence in your script.... 
like upload_max_filesize will get set but uploaded files are already passed to your PHP script before the settings are changed.
Also other settings, set by ini_set(), may be to late because of this (post_max_size etc.).
  beware, try settings thru php.ini or .htaccess.

Source: <https://www.php.net/manual/en/function.ini-set.php#22264>
