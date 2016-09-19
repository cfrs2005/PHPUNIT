<?php
/***************************************************************************
 *
 * Copyright (c) 2016 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file CalucatorTest.php
 * @date 15:10
 * @brief
 *
 **/
class CalculatorTest extends PHPUnit_Framework_TestCase
{

    private $calc = null;

    public function setUp()
    {
        $this->calc = new JobWeb\Calculator;
    }


    public function tearDown()
    {
        $this->calc = null;
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('JobWeb\Calculator', $this->calc);
    }

    public function testInvalArgumentisProperlyThrown()
    {
        $this->calc->add('A', 2);
    }
}