<?php

namespace ScreenMatch\Model;

enum Gender: string{
    case Ação = 'Ação';
    case Terror = 'Terror';
    case Drama = 'Drama';
    case SuperHeroi = 'SuperHeroi';
    case Comedia = 'Comédia';

    public function itsHorrorMovie ():bool
    {
        return match($this)
        {
            Gender::Terror=>true,
            default => false
        };
    }
}