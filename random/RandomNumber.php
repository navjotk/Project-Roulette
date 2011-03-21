<?php 
class RandomNumber {
	public static function getRandomNumber($max) {
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, "http://www.random.org/integers/?num=1&min=1&max=$max&col=1&base=10&format=plain&rnd=new"); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch);  
        curl_close($ch);      
		return (int)$output;
	}
}  
  
?>