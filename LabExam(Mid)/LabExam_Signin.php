<?php 
$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$confirm_password = $_REQUEST['confirm_password'];
$userType = $_REQUEST['usertype'];
$name = $_REQUEST['name'];
$fname = $_REQUEST['fname'];

if($id == null || $password == null || $confirmPass == null || $name ||$userType = null)
{
	echo "  id/password/confirm password/name/user type is empty";
}
else{
	if($password == $confirmPass)
	{
		$user = $id."|".$password."|".$confirm_password."|".$name."|".$userType."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create')
		{
			header('location: LabExam_Login.html');
		}
		else
		{
			header('location: LabExam_Signin.html');			
		}
	}
	else
	{
		echo " password and confirmPass dosent match ";
	}
		

}
?>