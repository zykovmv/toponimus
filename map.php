<?php
require_once 'functions.php';
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>География опроса</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1?apikey=c910121a-bfc1-479e-a7d1-e5ec2d4f6ece&lang=ru_RU" type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/map.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style type="text/css">
        html, body, #map {
            width: 100%; height: 97%; padding: 0; margin:0;
        }
        [class*="ymaps-2"][class*="-ground-pane"] {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
    -webkit-filter: grayscale(100%) brightness(80%);
}
    </style>
</head>
<body class="homepage is-preload">
<div id="page-wrapper">
	<section id="header" class="wrapper">
                <ul calss="logo">
                    <img id="logo" src="pictures/logo.png" alt="" width="70px" height="70px">
                </ul>
            <nav id="nav">
                <ul>
                    <li class="current"><a href="./index.php">Главная</a></li>
					<li class="current"><a href="./results.php">Результаты работы</a></li>
					<li class="current"><a href="./contact.php">Контакты</a></li>
                    <!-- <li><a href="#">Обо мне</a></li>
					<li><a href="#">Моя работа</a></li>-->
				</ul>
			</nav>
	</section>
</div>
<div id="map"></div>

<!-- Footer -->
<footer id="footer">
<!-- Icons -->
    <ul class="icons">
            <!-- <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			<li><a href="#" class="icon fa-vk"><span class="label">VK</span></a></li> -->
    </ul>

 <!-- <p>Количество человек, принявших участие в опросе:&nbsp;<?php countUser();?><p> -->
<!-- Menu -->
    <ul class="menu">
        <li>Количество человек, принявших участие в опросе:&nbsp;<?php countUser();?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>    
        <li>&copy;&nbsp;<strong>Maksim Zykov</strong></li>
        <li>2019</li>
    <ul>
</footer>
            <script src="assets/js/sendData.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<!-- <script src="assets/js/jquery.poptrox.min.js"></script> --> 
			<script src="assets/js/jquery.scrolly.min.js"></script> 
			<script src="assets/js/jquery.scrollex.min.js"></script> 
			<script src="assets/js/browser.min.js"></script> 
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script> 
			<script src="assets/js/main.js"></script> 
            <script src="assets/js/jquery.dropotron.min.js"></script>
</body>
</html>

