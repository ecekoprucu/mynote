
<?php
/**
 * simple method to encrypt or decrypt a plain text string
 * initialization vector(IV) has to be the same when encrypting and decrypting
 * 
 * @param string $action: can be 'encrypt' or 'decrypt'
 * @param string $string: string to encrypt or decrypt
 *
 * @return string
 */
/*function encrypt_decrypt($action, $string) {
    
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
            }
    
}


echo "Plain Text =" .$plain_txt. "\n";


$encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
echo "Encrypted Text = " .$encrypted_txt. "\n";
$decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);
echo "Decrypted Text =" .$decrypted_txt. "\n";
if ( $plain_txt === $decrypted_txt ) echo "SUCCESS";
else echo "FAILED";
echo "\n";
?>*/

if($_GET['button1']){encrypt();}
 if($_GET['button2']){decrypt();}
 	$secret_iv = 'This is my secret iv';
 	$output = false;
    $encrypt_method = "AES-256-CBC";
    
    // hash
    $key = hash('sha256', $secret_key);
 
 function encrypt($string)
 {		
		$output = false;
		$encrypt_method = "AES-256-CBC";
	 	$plain_txt = strval($_POST['enctext']);
	 	$secret_key = $_POST['key'];
	 	$secret_iv = $_POST['enctext'];
  		$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
        
        return $output;
 
 }
 function decrypt()
 {		$output = false;
    	$encrypt_method = "AES-256-CBC";
	 	$secret_key = $_POST['xkey'];
	 	$secret_iv = $_POST['dectext'];
   $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
   
   return $output;
 }