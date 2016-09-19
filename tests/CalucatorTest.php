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

    /**
     * is instance
     */
    public function testInstanceOf()
    {
        $this->assertInstanceOf('JobWeb\Calculator', $this->calc);
    }

    /**
     * throw Exception
     */
    public function testException()
    {
        $this->setExpectedException(InvalidArgumentException::class);
        $this->calc->add('A', 2);
    }
}