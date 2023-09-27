<?php
function findGlasses($arr){
$regex = "/O[\-]+O/";
$indexGlasses = 0;

foreach($arr as $chave => $valor){
    $indexGlasses = $chave;
    if(preg_match($regex, $valor)){
        return $indexGlasses;
    }
}
}

echo findGlasses(["phone", "O-O", "coins", "keys"]);# ➞ 1

echo findGlasses(["OO", "wallet", "O##O", "O----O"]);# ➞ 3

echo findGlasses(["O--#--O", "dustO---Odust", "more dust"]);# ➞ 1

echo findGlasses(['O_O', 'O-O', 'OwO']); # ➞ 1

echo findGlasses(['floor', 'the floor again', 'pockets', 'bed', 'cabinet', 'the top of my head O-O']); # ➞ 5

echo findGlasses(['OOOO----~OOO', '-------', 'OOOOOOO', 'OO-OO-OO-O']); # ➞ 53
?>
