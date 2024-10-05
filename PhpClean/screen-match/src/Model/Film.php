<?php

class Film{
    private array $notes = [];
    
    public function __construct(
        public readonly string $name,
        public readonly int $year,
        public readonly string $gender)
        {
            $this->notes = [];
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