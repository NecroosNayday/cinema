<?php
 require "db.php";
if( isset($_SESSION['logged_user'])){?>
<style type="text/css">
#log{display: none;}
#reg{display: none;}
#logout{display: inline-block;}

</style>
<?php
 } 
else{ 
?>
<style>

#logout{display: none;}

</style>
<?php
}

?>
<!doctype html>
<html lang="ru" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  </head>

  <body class="d-flex flex-column h-100">

<header class="mb-4">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="index.php">Главная</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="Films.php">Фильмы <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="Actors.php">Актеры</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
       <button id="log" class="btn btn-outline-success my-2  my-sm-0" type="button" data-toggle="modal" data-target="#exampleModal">Войти</button>
      </form>
      <?php
if( isset($_SESSION['logged_user'])){echo "<p class=\"text-light mb-0\">Здравствуйте ".$_SESSION['logged_user']->login."</p>";}?>
       <form class="form-inline mt-2 ml-2 mb-md-0" action="logout.php" method="POST">
       <button id="logout" class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="out">Выйти</button>
      </form>
       <form class="form-inline mt-2 ml-2 mt-md-0">
       <button id="reg" class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModal2">Регистрация</button>
      </form>
    </div>
  </nav>
</header>


<main role="main" class="flex-shrink-0">
 
 <h2 class="text-center"> Актеры</h2>
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

        <?php require "tpl/content2.php"; ?>
      </div>
    </div>
  </div>
        
 

</main>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">



          <form>
            <div class="form-group">
              <label for="inputLogin" class="sr-only">Login</label>
                  <input type="login" id="login" name="inputLogin" class="form-control mb-1" placeholder="Login" required autofocus>
                  <div id="errorMess" class="mb-4"></div>
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="password"  name="inputPassword" class="form-control mb-1" placeholder="Password" required>
                  <div id="errorMess2" class="mb-4"></div>

                     
                    
                     <button class="btn btn-primary btn-block"  type="submit" id="sendMail" ">Войти</button>
                  </div>
            

          </form>



        </div>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Регистрация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">



          <form >
            <div class="form-group">

              <label for="regEmail" class="sr-only">Email address</label>
                  <input type="email" id="regEmail" name="regEmail" class="form-control mb-4" placeholder="Email address" required autofocus>
             

                  <label for="regLogin" class="sr-only">Your login</label>
                  <input type="text" id="regLogin" name="regLogin" class="form-control mb-4" placeholder="Login" required >
                 
                  
                   
                  <label for="regPassword" class="sr-only">Password</label>
                  <input type="password" id="regPassword" name="regPassword" class="form-control mb-4 " placeholder="Password" required>
                
                  <label for="Password2" class="sr-only">again Password</label>

                  <input type="password" id="Password2" name="Password2" class="form-control mb-4" placeholder="Confirm password" required>
                 <div id="errorMess3" class="mb-4"></div>
                  <button class="btn btn-primary btn-block" id="sendReg" name="do_signup" type="submit">Зарегистрироваться</button>
            </div>

          </form>



        </div>
      </div>
     
    </div>
  </div>
</div>




<footer class="footer mt-auto py-3 bg-dark">
   <div class="inner">
          <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">О нас</h4>
          <p class="text-muted">Выполнил Сабадырь Никита Сергеевич ученик группы 3602</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Контакты</h4>
          <ul class="list-unstyled">
            <li class="text-muted"> По всем вопросам обращаться <a  class="text-info" href="http://www.petrocollege.ru/">сюда</a></li>
        </div>
      </div>
   
</footer>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script type="text/javascript" src="script.js"></script>

</body>
</html>
