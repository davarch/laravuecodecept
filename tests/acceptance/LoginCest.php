<?php

use Page\Login;

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function loginAdminTest(AcceptanceTester $I, Login $loginPage)
    {
        $loginPage->loginForRole('admin');
        $I->see('admin');
    }

    public function loginManagerTest(AcceptanceTester $I, Login $loginPage)
    {
        $loginPage->loginForRole('manager');
        $I->see('manager');
    }

    public function loginUserTest(AcceptanceTester $I, Login $loginPage)
    {
        $loginPage->loginForRole('user');
        $I->see('user');
    }
}
