<?php

class MathUtil
{
    public static $pi = 3.14;

    public static function add(...$nums) {
        return array_sum($nums);
    }
}

echo MathUtil::$pi;
echo MathUtil::$add(5,4,3,2,1);
