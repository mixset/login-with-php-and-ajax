##Login with PHP and AJAX
-----------------

This simple script allows you to log in using PHP and AJAX

How to use?
-----------------
Main core of system is `checker.php` file. There is a default email and password. This date should be come from database or other source of user date.
When it comes to javascript, the code which is responsible for loging in is placed in `script.js`.

Changelog
--------
[06.12.2015]
- CSS code refactoring
- removed conditional with `get_magic_quotes_gpc()` and `$_SERVER['HTTP_HOST']`
- nieco zmodyfikowano funkcje odpowiadające za bezpieczeństwo danych
- `array()` replaced on `[]`
- PHP code refactoring
- new array was added with possible responses
- password is now hashed using sha256


