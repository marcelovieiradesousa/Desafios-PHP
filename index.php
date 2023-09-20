<?php
##Create a function that inverts words or the phrase depending on the value of parameter type. A "P" means to invert the entire phrase, while a "W" means to invert every word in the phrase. See the following examples for clarity.
##Notes
#The first character of the returned string should be in uppercase and the rest are in lowercase.
#There will be no empty strings as inputs. Punctuation marks, though quite important for grammatical correctness, are discounted in the input phrases.

function inverterP($str){
	    $array_exploded = explode(" ", strtolower($str));
	    return ucfirst(implode(" ", array_reverse($array_exploded)));
	}
	
function inverterW($str){
        $array_exploded = explode(" ", strtolower($str));
        return ucfirst(
            implode(" ", array_map(
                fn($value) => strrev($value), $array_exploded)));
    }
    
function inverter($str, $type) {
	switch ($type){
	    case "P" : return inverterP($str); break;
	    case "W": return inverterW($str); break;
	}
}
	
echo inverter("This is Valhalla", "P");;# ➞ "Valhalla is this"
echo "\n";
echo inverter("One fine day to start", "W"); #➞ "Eno enif yad ot trats"
echo "\n";
echo inverter("Division by powers of two", "P"); #➞ "Two of powers by division"
echo "\n";
echo inverter("Excellence is achievable", "W"); #➞ "Ecnellecxe si elbaveihca"

?>
