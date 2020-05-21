<?php
namespace Page;

use AcceptanceTester;

/**
 * Class Login
 * @package Page
 */
class Login
{

    public static string $URL = '/login';

    public static string $emailField = 'input[name="email"]';
    public static string $passwordField = 'input[name="password"]';
    public static string $formSubmitButton = 'button[type="submit"]';

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     * @param $param
     * @return string
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

}
