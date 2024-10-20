<?php

namespace ScreenMatch\Services;

use DivisionByZeroError;
use ScreenMatch\Utils\Evaluate;
class ConvertionNoteStars{

    public function convertion (Evaluate $eval):float
    {
        try{
            $note = $eval->media();
            return round($note)/2;
        }catch(DivisionByZeroError $error){
            echo $error->getMessage().PHP_EOL;
            return 0 ;
        }
    }
}