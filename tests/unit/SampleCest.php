<?php
class SampleCest
{

     /**
     * @group example
     * @example ["a", "b"]
     * @example ["c", "d"]
     */
    public function tryExample(UnitTester $I, \Codeception\Example $example){
        $I->comment($example[0]);
        $I->comment($example[1]);
    }

    public function neprihlasen(UnitTester $I)
    {
        $I->comment('passing first');
        $I->assertEquals(1, 1);
    }
    public function prihlasen(UnitTester $I)
    {
        $I->comment('passing second');
        $I->assertEquals(1, 1);
    }
    public function logo(UnitTester $I)
    {
        $I->comment('passing second');
        $I->assertEquals(1, 2);
    }
}
