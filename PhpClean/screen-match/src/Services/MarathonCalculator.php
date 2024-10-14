<?php

class MarathonCalculator{
    private int $marathonDuration = 0;
    
    public function include(Title $title): void
     {
        $this->marathonDuration += $title->durationInMinutes();
     }

     public function duration(): int {
        return $this->marathonDuration;
    }
}