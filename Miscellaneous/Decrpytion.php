<?php 

$decryption_iv = '2345678910111211'; 
$ciphering = "AES-128-CTR";
$decryption_key = "DE"; 
$options = 0; 
$decryption=openssl_decrypt ("yJA=", $ciphering, 
		$decryption_key, $options, $decryption_iv); 

echo "Decrypted String: " . $decryption; 
echo "<br>";
?>