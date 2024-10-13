<?php

class Title{
    private array $notes = [];
    private static float $noteMin = 7.5;
    
    public function __construct(
        public readonly string $name,
        public readonly int $year,
        public readonly Gender $gender,
       )
        {
            $this->notes = [];
        }
    
    public function good(): bool
    {
        return $this->media() > self::$noteMin;
    }

    public function evaluate(float $note):void
    {
       $this->notes[] = $note;
    }

    public function media():float
    {
        $sumNotes = array_sum($this->notes);
        $countNotes = count($this->notes);

        return $sumNotes/$countNotes;
    }
}