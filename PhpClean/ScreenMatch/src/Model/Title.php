<?php

namespace ScreenMatch\Model;
use ScreenMatch\Utils\Evaluate;
use ScreenMatch\Services\WithEvaluate;

abstract class Title implements Evaluate
{
  use WithEvaluate;

    private static float $noteMin = 7.5;
    
    public function __construct(
        public readonly string $name,
        public readonly int $year,
        public readonly Gender $gender,
       )
        {}
    
    public function good(): bool
    {
        return $this->media() > self::$noteMin;
    }

    abstract public function durationInMinutes(): int;
}