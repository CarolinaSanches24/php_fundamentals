<?php

class Film{
    private array $notes = [];
    
    public function __construct(
        public string $name, public int $year,
        public float $note, public string $gender){}

    public function getYearOfRelease():int
    {
        return $this->year;
    }
    public function setYearOfRelease(int $newYear ) :void
    {
        $this->year = $newYear;
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