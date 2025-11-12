<?php

namespace Athos99\TestBundle\Service;

class Test
{


    public function __construct(private string $param1 = 'def1', private string $param2 = 'def2')
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
        return "test bundle service";
    }
}