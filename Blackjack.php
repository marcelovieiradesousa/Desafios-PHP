##Create a function that takes an array of card numbers and checks if the sum of their value exceeds 21. If the sum exceeds 21, return true and if the sum is under or equal to 21, return false. Values of the cards are as follows:

#2-10 are their value.
#J-K (face cards) count as 10.
#Aces count either as 1 or 11 - play conservatively, so that if giving an ace a value of 11 causes you to lose and 1 allows you to win, then go with 1.

##Notes
#There will be a maximum of one ace in each hand.

define('BLACK_JACK', 21);
function overTwentyOne($cards) {
	$sum = 0;
	$as = 0;
	
	foreach($cards as $card){
	    if(is_int($card)){
	        $sum += $card;
	    }else switch($card){
	        case "A" : $as++; break;
	        case "J" || "Q" || "K" : $sum += 10; break;
	    }    
	    while($as >= 1){
	        ($sum + 11 > BLACK_JACK) ? $sum++ : $sum + 11;
	        $as--;
	    }
 	}
	if($sum > BLACK_JACK) return true; else return  false;
}
