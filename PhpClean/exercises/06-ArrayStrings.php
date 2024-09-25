<?php 

$charactersOnePiece = ['Monkey d luffy','Roronoa Zoro',
'Hanauta no Brook', 'Nami','Nico Robin','Tony Tony Chopper', 'Frank',
'Sanji','God Usopp','Jimbei'];

function showCharactersInAlphabeticalOrder(array $array):array{
    sort($array);
    return $array;
}
$result = showCharactersInAlphabeticalOrder($charactersOnePiece);

print_r ($result);