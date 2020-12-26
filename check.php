<?php

	/**
		source code berasal dari : https://kodingan.net/2020/05/php-source-code-gratis-mengecek-mutasi-bank-bca/
		dibuat oleh Arief Chasan (https://chasan.id)
		dukung kami dengan share website kodingan.net ke sosial media anda
	**/
	
	require( 'IBparser.php' );
	$parser = new IbParser();
	$bank   = 'BCA';
	$user   = ''; //USERNAME KLIKBCA
	$pass   = ''; //PASSWORD KLIKBCA

	$transaction = $parser->getTransactions( $bank, $user, $pass );
	$balance = $parser->getBalance( $bank, $user, $pass );

	//echo $transaction or balance
	echo json_encode($transaction);
?>
