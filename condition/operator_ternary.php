<?php

$withdraw = $argv[1]??50;

$balance = 100;

$result = $withdraw > $balance ? 'insufficient funds' : 'withdrawal made successfully';

echo $result;
