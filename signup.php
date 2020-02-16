<?php 
require "db.php";

$data = $_POST;
if(isset($data['regEmail']))
{
  //регистрируем
  $errors = array();
  if(trim($data['regLogin'])=='')
  {
      $errors[]='Введите логин';
  }

   if(trim($data['regEmail'])=='')
  {
      $errors[]='Введите email';
  }

 if($data['regPassword']=='')
  {
      $errors[]='Введите пароль';
  }

  if($data['Password2']!=$data['regPassword'])
  {
      $errors[]='Повторный пароль введен не верно';
  }

  if(R::count('users', "login = ? ", array($data['regLogin']))>0)
  {
    $errors[] = 'Пользователь с таким логином уже существует!';
  }

   if(R::count('users', "email = ? ", array($data['regEmail']))>0)
  {
    $errors[] = 'Пользователь с таким Email уже существует!';
  }
  

  if (empty($errors))
  {
    $user = R::dispense('users');
     $user->login = $data['regLogin'];
     $user->email = $data['regEmail'];
     $user->password =md5($data['regPassword']) ;
    R::store($user);
  }
  else
  {
    echo current($errors);
  }
}

?>
