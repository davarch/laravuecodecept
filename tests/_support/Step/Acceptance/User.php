<?php
namespace Step\Acceptance;

use Page\Login;

/**
 * Class User
 * @package Step\Acceptance
 */
class User extends \AcceptanceTester
{
    /**
     * @var array|string[]
     */
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

    /**
     * @param $role
     */
    public function loginForRole($role) {
        $I = $this;

        $I->amOnPage(Login::$URL);
        $I->fillField(Login::$emailField, $this->users[$role]['email']);
        $I->fillField(Login::$passwordField, $this->users[$role]['password']);
        $I->click(Login::$formSubmitButton);
    }
}
