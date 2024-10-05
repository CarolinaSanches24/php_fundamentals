<?php

class Film{
    private array $notes = [];
    
    public function __construct(
        public string $name, public int $year,
        public string $gender)
        {
            $this->notes = [];
        }

    public function getYearOfRelease():int
    {
        return $this->year;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getGender():string
    {
        return $this->gender;
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