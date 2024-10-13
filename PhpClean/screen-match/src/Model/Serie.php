<?php

class Serie extends Title{
    
    public function __construct(
        string $name,
        int $year,
        Gender $gender,
        public readonly int $seasons,
        public readonly int $episodeSeason,
        public readonly int $episodeByMinute
    ){
        parent::__construct($name, $year, $gender);
    }
}