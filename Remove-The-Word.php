#Create a function that takes an array and string. The function should remove the letters in the string from the array, and return the array.
function removeLetters($letters, $word) {
 	$arrayStr = str_split($word);
 	
	while(empty($arrayStr) != true){
	    $letter = array_shift($arrayStr);
		$key = array_search($letter, $letters);
		if($key !== false){
			unset($letters[$key]);
			}
	}
	return $letters;
}
