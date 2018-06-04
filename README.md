# Login with PHP and AJAX

This simple script allows you to log in using PHP and AJAX

## Usage

Main core of system is `checker.php` file. There is a default email and password. This date should be come from database or other source of user date.
When it comes to javascript, the code which is responsible for logging in is placed in `script.js`.

## Changelog

[06.12.2015]
* CSS code refactoring
* removed conditional with `get_magic_quotes_gpc()` and `$_SERVER['HTTP_HOST']`
* improved security
* `array()` replaced on `[]`
* PHP code refactoring
* new array was added with possible responses
* password is now hashed using sha256

[04.06.2018]
* PHP Code clean up
* `filter_var_array` used for filtering data