<?php

namespace ScreenMatch\Services;

trait WithEvaluate
{
    private array $notes = [];

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