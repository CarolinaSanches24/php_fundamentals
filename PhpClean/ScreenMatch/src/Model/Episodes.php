<?php

namespace ScreenMatch\Model;

use ScreenMatch\Services\WithEvaluate;
use ScreenMatch\Utils\Evaluate;

class Episodes implements Evaluate
{
   use WithEvaluate;
    
    public function __construct(
        public readonly Serie $serie,
        public readonly string $name,
        public  readonly int $number,
    )
    {}
   
}