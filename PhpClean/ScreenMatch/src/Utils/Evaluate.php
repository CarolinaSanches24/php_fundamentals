<?php 

namespace ScreenMatch\Utils;

interface Evaluate{
    public function evaluate(float $note):void;
    public function media():float;
}