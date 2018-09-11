<?php  
$testVar="faizan";
$Hashed=password_hash($testVar,PASSWORD_DEFAULT);
//echo $Hashed;
$testVar2="faizan";


// if(strcmp($testVar2, $Hashed)==0){
// 	echo "Both are Same";
// }
// else{
// 	echo "Password Doesnot MAtch";
// }

if (password_verify($testVar2,$Hashed)==1) {
	echo "Passwords Match";
}
else{
	echo "Passwords didn't match";
}
