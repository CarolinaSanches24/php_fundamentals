<?php

namespace ScreenMatch\Services;
use ScreenMatch\Utils\Evaluate;

class ConvertionNoteStars{

    public function convertion (Evaluate $eval):float
    {
        $note = $eval->media();
        return round($note)/2;
    }
}