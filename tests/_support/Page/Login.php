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

    public array $users = [
        'admin' => [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ],
        'manager' => [
            'email' => 'manager@manager.com',
            'password' => 'password'
        ],
        'user' => [
            'email' => 'user@user.com',
            'password' => 'password'
        ]
    ];

    public string $emailField = 'input[name="email"]';
    public string $passwordField = 'input[name="password"]';
    public string $formSubmitButton = 'button[type="submit"]';

    protected AcceptanceTester $tester;

    /**
     * Login constructor.
     * @param AcceptanceTester $I
     */
    public function __construct(AcceptanceTester $I)
    {
        $this->tester = $I;
    }

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

    /**
     * @param $role
     */
    public function loginForRole($role) {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->fillField($this->emailField, $this->users[$role]['email']);
        $I->fillField($this->passwordField, $this->users[$role]['password']);
        $I->click($this->formSubmitButton);
    }
}
