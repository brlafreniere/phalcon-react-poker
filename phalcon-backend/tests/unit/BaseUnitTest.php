<?php

use Phalcon\Di;
use Phalcon\Di\FactoryDefault;

class BaseUnitTest extends \Codeception\Test\Unit {
    protected $tester;
    
    protected function _before() {
        $di = new FactoryDefault();

        Di::reset();
        Di::setDefault($di);

        $this->di = $di;
    }

    protected function _after() {
    }
}