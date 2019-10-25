	<?php 
	require_once 'functions.php';
	require_once 'connect.php';
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	?>
	<!DOCTYPE HTML>
	<html>
		<head>
			<title>Что мы знаем о России?</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
			<link rel="stylesheet" href="assets/css/main.css" />
			<link rel="stylesheet" href="assets/css/modal.css" /> 
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
			<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://api-maps.yandex.ru/2.1?apikey=c910121a-bfc1-479e-a7d1-e5ec2d4f6ece&lang=ru_RU" type="text/javascript"></script>
		</head>
		<body class="homepage is-preload">
	<div id="page-wrapper">
		<section id="header" class="wrapper">
					<ul calss="logo">
						<img id="logo" src="pictures/logo.png" alt="" width="70px" height="70px">
					</ul>
				<nav id="nav">
					<ul>
						<li class="current"><a href="./map.php">География опроса</a></li>
						<li class="current"><a href="./results.php">Результаты работы</a></li>
						<li class="current"><a href="./contact.php">Контакты</a></li>
						<!-- <li><a href="#">Обо мне</a></li>
						<li><a href="#">Моя работа</a></li> -->
					</ul>
				</nav>
		</section>
	</div>

			<!-- Intro -->
				<section id="intro" class="main style1 dark fullscreen">
					<div class="content">
						<header>
							<h2>Друзья!</h2>
						</header>
						<p>Интересно ли вам узнать, что россияне знают о городах, республиках и регионах нашей страны? 
						Что в голове каждого из нас? Мне - интересно &#128527; 
						Я занимаюсь исследовательской работой, посвященной этой теме, и прошу вас помочь мне и принять участие в небольшом опросе.
						В опросе всего 6 вопросов и ответ на них займет 5-7 минут. В правом углу вопроса вы найдете подсказку с примерами, которые помогут вам ответить.<br>
						С результатами опроса я с удовольствием поделюсь с вами по его окончании.
						</p>
						<footer>
							<a href="#about" class="button style2 down">More</a>
						</footer>
					</div>
				</section>

			<!-- About -->
				<section id="about" class="main style2 right dark fullscreen">
					<div class="content box style2">
						<header>
							<h3>Данные о вас</h3>
						</header>
						<h2>В каком городе вы родились?</h2>
						<input type="text" id="user_1"> 
						<p id="notice_1"></p>
						<h2>В каком городе вы прожили дольше всего?</h2>
						<input type="text" id="user_2"> 
						<p id="notice_2"></p>
						<h2>Укажите свой возраст:</h2>
						<input type="number" id="user_age">
						<h2> Образование:</h2>
					<select id="user_education">
							<option value= "Среднее"> Среднее </option>
							<option value= "Среднее-специальное техническое"> Среднее-специальное техническое</option>
							<option value= "Среднее-специальное гуманитарное"> Среднее-специальное гуманитарное</option>
							<option value= "Высшее техническое"> Высшее техническое</option>
							<option value= "Высшее гуманитарное"> Высшее гуманитарное</option>
					</select>
					</div>
					<a href="#one" class="button style2 down anchored">Next</a>
				</section>

			<!-- one -->
				<section id="one" class="main style2 left dark fullscreen">
				<div class="content box style2">
						<div class="help">
								<p>Например, Лондон - дождливый, серый, мистический и т.д. (чем больше вариантов, тем лучше) 
								<br><font color="orange">Если вы в чем-то сомневаетесь, напишите «не знаю»</font>
								</p>
						</div>
						<header>
							<h3>Вопрос № 1</h3>
						</header>
						<h1>Дайте несколько определений этому месту (какое это место?)</h1>
						<h2 id="q_1_1"><?php getRandomCity(1);?></h2> <input type="text" id="answer1-1">
						<h2 id="q_1_2"><?php getRandomCity(1);?></h2> <input type="text" id="answer1-2">
				</div>
						<a href="#two" class="button style2 down anchored">Next</a>
				</section>
			
			<!-- Two -->
				<section id="two" class="main style2 right dark fullscreen">
				<div class="content box style2">
						<div class="help">
								<p>
								Например, Милан - столица моды, столица бизнеса
								<br><font color="orange">Если вы в чем-то сомневаетесь, напишите «не знаю»</font> 
								</p>
						</div>
						<header>
							<h3>Вопрос № 2</h3>
						</header>
						<h1>Как по-другому можно назвать это место?</h1>
						<h2 id="q_2_1"><?php getRandomCity(2);?></h2> 
						<input type="text" id="answer2-1">
						<h2 id="q_2_2"><?php getRandomCity(2);?></h2> 
						<input type="text" id="answer2-2">
					</div>
					<a href="#tree" class="button style2 down anchored">Next</a>
				</section>

			<!-- Tree -->
				<section id="tree" class="main style2 left dark fullscreen">
				<div class="content box style2">
						<div class="help">
							<p>
							Например, Рим - римские каникулы, римский форум, Римская империя, римское право
							<br><font color="orange">Если вы в чем-то сомневаетесь, напишите «не знаю»</font>
							</p>
						</div>
						<header>
							<h3>Вопрос № 3</h3>
						</header>
						<h1>Составьте словосочетание (по возможности дайте несколько вариантов):</h1>
						<h2 id="q_3_1"><?php getRandomAdj(); ?>/ая/ое/ие</h2>
						<input type="text" id="answer3-1">
						<h2 id="q_3_2"><?php getRandomAdj(); ?>/ая/ое/ие</h2> 
						<input type="text" id="answer3-2">
					</div>
					<a href="#four" class="button style2 down anchored">Next</a>
				</section>
			
			<!-- four -->
				<section id="four" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<div class="help">
							<p>
							Например, Бомбить - Хиросиму, Берлин. Осаждать - Ла-Рошель
							<br><font color="orange">Если вы в чем-то сомневаетесь, напишите «не знаю»</font>
							</p>
				</div>
					<header>
						<h3>Вопрос № 4</h3>
					</header>
					<h1>Составьте словосочетание, используя названия городов, республик или регионов России:</h1>
						<h2 id="q_4_1"><?php getRandomVerb();?></h2> 
						<input type="text" id="answer4-1">
						<h2 id="q_4_2"><?php getRandomVerb();?></h2> 
						<input type="text" id="answer4-2">
				</div>
				<a href="#five" class="button style2 down anchored">Next</a>
				</section>

			<!-- five -->
				<section id="five" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<div class="help">
							<p>
							Например, Столица пиццы- Неаполь, Город на воде - Венеция
							<br><font color="orange">Если вы в чем-то сомневаетесь, напишите «не знаю»</font>
							</p>
					</div>
					<header>
						<h3>Вопрос № 5</h3>
					</header>
					<h1>Определите, о каком месте идёт речь:</h1>
					<h2 id="q_5_1"><?php list($result) = getRandomPhrase(); echo $result[0];?></h2> 
					<input type="text" id="answer5-1">
					<h2 id="q_5_2"><?php list($result) = getRandomPhrase(); echo $result[0]?></h2> 
					<input type="text" id="answer5-2">
				</div>
				<a href="#six" class="button style2 down anchored">Next</a>
				</section>
			
			<!-- Six -->
				<section id="six" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<div class="help">
						<p>
						Например, Рим - "Рим не за один день строился", х/ф "Римские каникулы"
						<br> <font color="orange">Если вы в чем-то сомневаетесь, напишите «не знаю»</font> 
						</p>
					</div>
					<header>
						<h3>Вопрос № 6</h3>
					</header>
					<h1>Вспомните фильмы, песни, пословицы, произведения литературы, где Вам встречались названия этих мест:</h1>
					<h2 id="q_6_1"><?php getRandomCity(6);?></h2> 
					<input type="text" id="answer6-1">
					<h2 id="q_6_2"><?php getRandomCity(6);?></h2> 
					<input type="text" id="answer6-2">
				</div>
				<a href="#contact" class="button style2 down anchored">Next</a>
				</section>
			<!-- Contact -->
				<section id="contact" class="main style3 secondary">
				<div id="contactid" class="content">
						<header>
							<h2>Спасибо за участие!</h2>
							<p>Осталось нажать на кнопку <strong>Отправить данные</strong> для сохранения Ваших результатов</p>
						</header>
				
						<!-- <form class="form" id="test_form" action="" method="post"> -->
							<input id="button" type="button" onclick="fun()" value="Отправить данные">
						<!-- </form> -->
					
						<!-- modal -->
						<div class="modal-overlay">
						<div class="modal">
							
							<a class="close-modal">
							<svg viewBox="0 0 20 20">
								<path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
							</svg>
							</a><!-- close modal -->

							<div class="modal-content">
							<i class="fa fa-4x"></i>
							<h3 id="h1_modal"></h3>
							</div><!-- content -->
							
						</div><!-- modal -->
						</div><!-- overlay -->

				</div>
				</section>

			<!-- Footer -->
				<footer id="footer">

					<!-- Icons -->
					<!-- 	<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-vk"><span class="label">VK</span></a></li>
						</ul> -->

					<!-- Menu -->
						<ul class="menu">
							<li>&copy;&nbsp;<strong>Maksim Zykov</strong></li>
							<li>2018</li>
						</ul>
				</footer>

			<!-- Scripts -->
			<script>
			
			</script>
				<script src="assets/js/sendData.js"></script>
				<script src="assets/js/jquery.min.js"></script>
				<!-- <script src="assets/js/jquery.poptrox.min.js"></script>  -->
				<script src="assets/js/jquery.scrolly.min.js"></script> 
				<script src="assets/js/jquery.scrollex.min.js"></script> 
				<script src="assets/js/browser.min.js"></script> 
				<script src="assets/js/breakpoints.min.js"></script>
				<script src="assets/js/util.js"></script> 
				<script src="assets/js/main.js"></script>
				<!-- <script src="assets/js/geocode.js"></script> --> 
				<!-- NAV -->
				<script src="assets/js/jquery.dropotron.min.js"></script>
	<style>

	/* 	Дизайн подсказки */
	.help{
		position: absolute;
		top: 15px;
		right: 10px;
		text-align: center;
		background-color: #000000;
		border-radius: 50%;
		width: 24px;
		height: 24px;
		font-size: 18px;
		line-height: 24px;
		cursor: default;
	}
	
	.help:before{
		content:'?';
		font-weight: bold;
		color:#fff;
	}
	
	.help:hover p{
		display:block;
		transform-origin: 100% 0%;
	
		-webkit-animation: fadeIn 0.3s ease-in-out;
		animation: fadeIn 0.3s ease-in-out;
	
	}
	
	.help p{
		display: none;
		text-align: left;
		background-color: #1E2021;
		padding: 10px;
		width: 500px;
		position: absolute;
		border-radius: 3px;
		box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
		right: -4px;
		color: #FFF;
		font-size: 18px;
		line-height: 1.4;
	}
	
	.help p:before{
		position: absolute;
		content: '';
		width:0;
		height: 0;
		border:6px solid transparent;
		border-bottom-color:#1E2021;
		right:10px;
		top:-12px;
	}
	
	.help p:after{
		width:100%;
		height:40px;
		content:'';
		position: absolute;
		top:-40px;
		left:0;
	}
	
	@-webkit-keyframes fadeIn {
		0% { 
			opacity:0; 
			transform: scale(0.6);
		}
	
		100% {
			opacity:100%;
			transform: scale(1);
		}
	}
	
	@keyframes fadeIn {
		0% { opacity:0; }
		100% { opacity:100%; }
	}
	.selectAnswer{
		float: left;
	}
	@media screen and (max-width: 660px){
		.help p{
		display: none;
		text-align: left;
		background-color: #1E2021;
		padding: 10px;
		width: 300px;
		position: absolute;
		border-radius: 3px;
		box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
		right: -4px;
		color: #FFF;
		font-size: 18px;
		line-height: 1.4;
	}
	}
	</style>		
		</body>
	</html>