<div class="menu">
			<div class="name_blog">
				<img src="img/logo.jpg" alt="">
			</div> 

			<div class="main_menu">
				<ul>
					<a href="#"><li>Новости</li></a>
					<a href="#"><li>Достопримечательности</li></a>
					<a href="#"><li>Досуг</li></a>
					<a href="#"><li>Питание</li></a>
					<a href="#"><li>Рейтинги</li></a>
					<a href="#"><li>О нас</li></a>
					<a href="#"><li>Сотрудничество</li></a>
					<a href="#"><li>Контакты</li></a>
				</ul>
			</div>
		</div>
<style>

.menu{
	position: fixed; /*фиксирует меню*/
	z-index: 1000;   /*индекс значимости элемента*/
}
	
.main_menu ul li{
	display: inline-block;
	margin-top: 15px;
	text-align: center; 
	font-size: 15px;  /*размер шрифта*/
}

.main_menu ul a{
	color: #b90c0c;	
	padding: 30px 15px;  /*внутренний отступ*/
}

.main_menu ul a:nth-child(6), .main_menu ul a:nth-child(7), .main_menu ul a:nth-child(8){
	color: LightSlateGray;
}

.main_menu ul a:hover{  /*hover - задание св-в при наведении на объект */
	background-color: black;
	color: white;
	transition: 0.5s;
}
.menu{
	position: fixed;
	top: 0;
	left: 0;
	background-color: white;
	width: 100%;
	height: 75px;
	display: flex;
	justify-content: space-around; /*центровка(одинаковые отступы по краям) задается для род.блока*/
}

.name_blog img{
	height: 75px;
}
</style>