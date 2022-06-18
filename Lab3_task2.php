<?php 
$email=$_REQEST['mail'];
if($email!=null){
	if(filter var($mail,FILTER_VALIDATE_EMAIL)){
	   echo "successful";
	}
	else{
	echo "Invalid request";
	}

}
else{
	echo "Invalid request";
}
?>