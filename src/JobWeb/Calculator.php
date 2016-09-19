<?php
/***************************************************************************
 *
 * Copyright (c) 2016 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file Calculator.php
 * @date 14:53
 * @brief
 *
 **/


namespace JobWeb;
use InvalidArgumentException;

class Calculator
{
    public function add($x, $y)
    {
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new InvalidArgumentException("输入数字");
        }
        return $x = $x * $y;
    }
}