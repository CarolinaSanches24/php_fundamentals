<?php 

namespace ScreenMatch\Exception;

use InvalidArgumentException;
use Override;

class NoteInvalidException extends InvalidArgumentException{
    public function __construct()
    {
        parent::__construct('Nota precisa ser entre 0 e 10',400);
    }
}