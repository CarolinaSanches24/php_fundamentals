<?php

class Film extends Title{
    public function __construct(
        string $name,
        int $year,
        Gender $gender,
        public readonly int $time)
        {
            parent::__construct($name, $year, $gender);
        }
}