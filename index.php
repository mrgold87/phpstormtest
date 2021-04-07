<?php
//новый коммент для теста
//комит 3
//коммент из гитхаб
function balance($left, $right)
{

    switch (marksToDigit($left) <=> marksToDigit($right)) {
        case -1:
            return 'Right';
            break;
        case 1:
            return 'Left';
            break;
        case 0:
            return 'Balance';
    };
}

function marksToDigit($str)
{
    $test = (substr_count($str, '!')) * 2 + (substr_count($str, '?')) * 3;
    return $test ;
}

echo balance("!!", "??");
echo '<br>';
echo balance("!??", "?!!");
echo '<br>';
echo balance("!?!!", "?!?");
echo '<br>';
echo balance("!!???!????", "??!!?!!!!!!!");
