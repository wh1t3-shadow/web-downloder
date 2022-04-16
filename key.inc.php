<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","6666666666666666",0,"6666666666666666");
	return $n;
}
?>
