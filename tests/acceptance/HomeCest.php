<?php
class HomeCest
{
    /**
     * @group basic
     * @param  \Step\Acceptance\Home $I [description]
     * @return [type]                   [description]
     */
    public function tryToTest(\Step\Acceptance\Home $I)
    {
        $I->amOnHomepage();
        $I->see('Pricing');

    }
}
