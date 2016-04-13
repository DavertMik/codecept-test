<?php
namespace Step\Acceptance;

class Home extends \AcceptanceTester
{

    public function amOnHomepage()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->see('Where software is built', 'h1');
    }

}