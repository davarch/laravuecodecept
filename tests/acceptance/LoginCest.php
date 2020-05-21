<?php

use Step\Acceptance\User;

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function loginAdminTest(User $I)
    {
        $I->loginForRole('admin');
        $I->see('admin');
    }

    public function loginManagerTest(User $I)
    {
        $I->loginForRole('manager');
        $I->see('manager');
    }

    public function loginUserTest(User $I)
    {
        $I->loginForRole('user');
        $I->see('user');
    }
}
