<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
    function _before(\Codeception\TestCase $t)
    {
        $rest = $this->getModule('REST');
        $rest->sendGET('/repos/codeception/codecepion');
        codecept_debug('Here you are, my master: ' . $rest->response);
    }
}
