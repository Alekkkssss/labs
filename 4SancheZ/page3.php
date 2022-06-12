<?php
    require 'ajax.php';
?>
<!doctype html>
<html lang="ru">
<style>
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style3.css">
 <title>Gelendjik</title>
  </head>
  <body>
	
  <!--Меню-->
  <nav class="navbar navbar-expand-lg navbar-dark" >

  <!-- Логотип -->
  <a href="page1.html" class="navbar-brand">
  <img src="photo/logo.png" width="96" height="119" alt="gelen"></a>
  <div class="container">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active"  href="#"><h1>Достопримечательности <br>Геленджика</h1></a>
    </li>
</ul>
<ul class="navbar-nav">
    <li class="nav-item">
  <div class="btn-group btn-group-sm">
    <button type="button" class="btn btn-light btn-outline-secondary"><a class="nav-link" href="page1.html"><h6>Главная</h6></a></button>
    <button type="button" class="btn btn-light btn-outline-secondary"><a class="nav-link" href="page2.php"><h6>Контент</h6></a></button>
    <button type="button" class="btn btn-light btn-outline-secondary"><a class="nav-link" href="page3.php"><h6>Обратная связь</h6></a></button></h6>
  </div>
    </li>
  </ul>
</nav>
<h2>Если у вас есть какие либо советы или пожелания о том, как сделать данный сайт лучше, вы можете отправить письмо автору сайта на электронную почту. 
Все ваши предложения обязательно будут рассмотрены и приняты к сведению.</h2>

<form method="post" action="ajax.php">
  <div class="form-group">
    <label for="email" class="label" style="top: 390px;">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" style="top: 415px;" placeholder="Enter email">
    <h5>We'll never share your email with anyone else.</h5>
  </div>
  <div class="form-group">
    <label for="name" class="label" style="top: 465px;">Name:</label>
    <input type="text" class="form-control" id="name" name="name" style="top: 490px;" placeholder="Name">
  </div>
 <div class="form-group">
      <label for="comment" class="label" style="top: 525px;">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="text" style="top: 550px;"></textarea>
 </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" style="top: 0px;"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary" data-bs-target="#modal" id="btn" data-bs-toggle="modal" style="top: 700px; height: 35px; left: 840px;">Submit</button>
</form>
</div>
 <!-- Модальное окно -->
	<div class="modal fade" id="modal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
		  <div class="modal-content">
			<div class="modal-header">
			  <h3 class="modal-title">Спасибо за ваш отзыв!</h3>
			  <button type="button" class="btn-close" data-bs-dismiss="modal">
						  <span> &times;</span>
					  </button>
			</div>
			<div class="modal-body">
			  <p>Ваши данные успешно отправлены.</p>
			</div>
		  </div>
		</div>
	  </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <!--Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>
