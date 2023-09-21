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
