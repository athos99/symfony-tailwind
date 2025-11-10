<?php

namespace Athos99\TestBundle\Service;

class Test
{


    public function __construct(private bool $param1 = true, private int $param2 = 3)
    {
    }

    /**
     * Returns several paragraphs of random ipsum text.
     *
     * @param int $count
     * @return string
     */
    public function test(): string
    {
        return "test budle service";
    }
}