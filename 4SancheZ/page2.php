<?php
    require 'script.php';
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
	<link rel="stylesheet" href="css/style2.css">
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
    <form class="form-inline">
	<input class="form-control" type="search" placeholder="Поиск по тексту" aria-label="Search" id="searchplace">
	<button class="btn1 btn-primary btn-outline-light" type="submit" id="searchbutton" name="searchbutton">Искать</button>
    </form>
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
<div class="row" style="margin-top: 200px; margin-left: 200px;" align="center">
    <div class="card" style="top: 175px; height: 1050px;">
	<p>	</p>
 	<img src="photo/img1.jpg" class="card-img">
 	<div class="card-body"><p class="name"><h3 class = "name">
	<?php echo $name[0]?><br><br></h3></p>
	<p class="kind"><h2 class="kind">Существует несолько версий происхождения скалы:<br><br>
	Официальная наука объясняет происхождение скалы «Парус» природной эрозией скальных пород, наступлением на сушу моря и неоднородностью состава скал. Отверстие в 
толще скалы приписывается русским артиллеристам времен кавказских войн. Однако, исследователь черноморского побережья С. 
Васюков описывал интересный случай. В 1903 году на его глазах русские моряки с броненосца, развлекаясь, выпустили по скале 
четыре снаряда из корабельных орудий. Согласно письму Васюкова, скала оказалась почти неповрежденной, хотя снаряды и оставили отметины 
на ее поверхности.
<br><br>
	Мифы, легенды и местные байки
	Скала Парус стала объектом многих легенд, которые обрастают все новыми подробностями. К примеру, одна из легенд гласит, что на этом месте был 
наказан сам Прометей после того, как украл огонь у богов, чтобы подарить его людям. Точных подтверждений этому нет, останков Прометея так никто и не нашёл. 
Но то, что в соседней Прасковеевке проживают потомки греков, факт документально доказанный. Есть даже версия, которая гласит, что к с созданию скалы приложили руку 
инопланетные цивилизации, а некоторые и вовсе считают скалу творением древней магии.</h2></p>
   	 		</div>
		</div>


<div class="card" style="top: 1240px; height: 1115px;">
	<p>	</p>
 	<img src="photo/img2.jpg" class="card-img">
 	<div class="card-body"><p class = "name"><h3 class = "name">
	<?php echo $name[1]?><br><br></h3></p>
<p class = "kind"><h2 class = "kind">Расположена на одном из склонов Маркотхского хребта, на высоте более чем в 600 метров над уровнем моря. Выложена мелким камнем – мергелем, из которого преимущественно 
и состоят здешние горы. Хорошо видна практически из любой точки города. Общая длина надписи – более 100 метров. Высота каждой буквы – 20 метров. История появления 
надписи на горе началась во времена СССР. Когда-то ученики существовавшей в данном районе санаторно-лесной школы выложили здесь надпись «Ленин с нами». 
Коммунистический лозунг, регулярно подкрашиваемый геленджикской пионерией, просуществовал несколько десятилетий. С развалом Союза потерял свою актуальность. 
Поскольку за надписью перестали ухаживать, ее буквы заросли травой и стали практически не различимы. В 90-е годы надпись на горе возродилась в новом, нейтральном виде.
Местные студенты превратили «Ленин с нами» в «Геленджик». В последствие их почин поддержал житель курорта, бизнесмен Николай Солнопеков. В 2008 году вместе со своими
сподвижниками он организовал здесь масштабную реставрационную работу. Буквам добавили объема и выкрасили белой краской (на покрытие всей надписи ушло порядка 100 кг). 
За три месяца невзрачная надпись обрела хорошо различимые очертания, став одной из крупнейших себе подобных в мире. Сегодня «Геленджик» по своим размерам превосходит 
знаменитую надпись «Hollywood» в Лос-Анджелесе. Как и раньше, достопримечательность требует постоянного ухода. Дважды в год Н.Солнопеков, взявший на себя заботу о ней,
организует здесь субботники. Под его руководством команда добровольцев выпалывает сорняки, красит буквы, убирает оставленный туристами мусор. К реставрационным работам
 традиционно приглашаются все желающие.</h2></p>
   	 		</div>
		</div>
<div class="card" style="top: 2370px; height: 925px;">
	<p>	</p>
 	<img src="photo/img3.jpg" class="card-img">
 	<div class="card-body"><p class = "name"><h3 class = "name">
	<?php echo $name[2]?><br><br></h3></p>
<p class = "kind"><h2 class = "kind">В 2020 году на горе в Геленджике появилась новая достопримечательность — Поклонный Крест на горе. С площадки, на которой установлен Крест, открывается прекрасный 
вид на Геленджикскую бухту и город Геленджик. Одобрение на возведение конструкции было получено от Святейшего Патриарха Московского и всея Руси Кирилла в 2015 году. 
В основание ее заложили частицу мощей преподобного Серафима Саровского. Завершились строительные работы в 2020 году. Высота креста в Геленджике вместе с основанием 
составляет 43 метра, он возвышается над уровнем моря на 580 метров. Высота же самого креста — около 34 метров, монолитного железобетонного основания — 9 метров. 
Конструкция креста выполнена из металла. Его постамент построен в форме усеченной пирамиды, в основании которого находится восьмигранник. Внутри постамента была 
открыта часовня преподобного Серафима Саровского, в которой хранится икона святого с частицей его мощей. Площадь часовни составляет примерно 100 кв. м. Она открыта 
для всех желающих, в ней проводятся молебны, православные обряды.</h2></p>
   	 		</div>
		</div>
</div>

</div>
    <script src="search.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>
