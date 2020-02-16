<?php 

require "db.php";

$data = $_POST;
if(isset($data['login']))
{
	
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if($user)
	{
		if(md5($data['password'])== $user->password){
$_SESSION['logged_user'] = $user;

		}else
		{
			echo 'Неверно введен пароль!';
		

		
		}
	}
	else
	{
	  echo'Пользователь с тагим логином не существует!';
	}
}
?>
