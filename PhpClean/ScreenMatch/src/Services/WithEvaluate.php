<?php

namespace ScreenMatch\Services;

use InvalidArgumentException;
use ScreenMatch\Exception\NoteInvalidException;

trait WithEvaluate
{
    private array $notes = [];

/**
 * @throws NoteInvalidException Se a nota for negativa ou maior do que 10
 */
    public function evaluate(float $note):void
    {
        if($note < 0 || $note > 10)
        {
            throw new NoteInvalidException();
        }
       $this->notes[] = $note;
    }

    public function media():float
    {
        $sumNotes = array_sum($this->notes);
        $countNotes = count($this->notes);

        return $sumNotes/$countNotes;
    }
}