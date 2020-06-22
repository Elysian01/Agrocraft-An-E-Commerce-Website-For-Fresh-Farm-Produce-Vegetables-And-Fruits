<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Encrypt</title>
</head>
<body>
	<form>
		<input type = "password" name = "currentpassword" placeholder = "Current Password"/>  <br>
		

	</form>
</body>
</html>

<?php

$simple_string = "fail";
echo "Original String: " . $simple_string;
echo "<br>";

$ciphering = "AES-128-CTR";

$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

$encryption_iv = '2345678910111211';

$encryption_key = "DE";

$encryption = openssl_encrypt(
	$simple_string,
	$ciphering,
	$encryption_key,
	$options,
	$encryption_iv
);
echo "Encrypted String: " . $encryption . "\n";
echo "<br>";
?>