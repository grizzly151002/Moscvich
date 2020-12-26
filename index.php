<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> <!--подключение библиотеки slick-slider для HTML-->
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> <!--подключение библиотеки тем для слайдра-->

	<title>Москвич</title>
</head>
<body>
	<header>
		<?php 
			include ("menu.php");
			echo "<div class='main_slider'>"; //добавление контента на страницу
			include ("header_slider.php");
			echo "</div>";
		?>
	</header>

	<section>

		<div class="main_new_posts">

		<div class="new_posts">

			<a href="#" class="new_post">
				<img src="img/post_1_pic.jpg" alt="">
				<h2>lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique</h2>

				<div class="post_data">
					<h4>11 ноября 2020</h4>
					<h4>&ensp;|&ensp;</h4>
					<h4>Автор</h4>	
				</div>

			</a>


			<a href="#" class="new_post">
				<img src="img/post_2_pic.jpg" alt="">
				<h2>lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique</h2>

				<div class="post_data">
					<h4>11 ноября 2020</h4>
					<h4>&ensp;|&ensp;</h4> <!-- &ensp; - код пробела -->
					<h4>Автор</h4>	
				</div>

			</a>

		</div>
			
		</div>

	</section>

		<div class="popular_posts">

			<div class="main_popular_post">
				<a href="#" class="main_popular_post_a">
					<img src="img/post_3_pic.jpg" alt="">
					<h1>Proin congue elit fringilla</h1>
					<h3>sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum,
consectetur diam sed, ultrices urna. </h3>

					<div class="post_data_flex">   <!-- создаем новый блок, т.к. необходимо прижать блок с автором и датой к правому краю, если этого не сделать, то 1)будут прижиматься все заголовки h4 и все собьется 2)уже есть блок post data -->
						<div class="post_data">
							<h4>11 ноября 2020</h4>
							<h4>&ensp;|&ensp;</h4>
							<h4>Автор</h4>	
						</div>	
					</div>

				</a>			
			</div>

 <!-- ----------------------------------------------------------------------------------- -->

			<div class="popular_posts_1">

				<a href="#">
					<img src="img/post_4_pic.jpg" alt="">
					<h3>Donec elementum dui semper, pretium dui quis, pretium nisl.</h3>
						<div class="post_data">
							<h4>11 ноября 2020</h4>
							<h4>&ensp;|&ensp;</h4>
							<h4>Автор</h4>	
						</div>	
				</a>

				<a href="#">
					<img src="img/post_5_pic.jpg" alt="">
					<h3>estibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</h3>
						<div class="post_data">
							<h4>11 ноября 2020</h4>
							<h4>&ensp;|&ensp;</h4>
							<h4>Автор</h4>	
						</div>	
				</a>

				<a href="#">
					<img src="img/post_6_pic.jpg" alt="">
					<h3>Sed arcu ipsum, convallis quis porttitor bibendum, convallis non enim.</h3>
						<div class="post_data">
							<h4>11 ноября 2020</h4>
							<h4>&ensp;|&ensp;</h4>
							<h4>Автор</h4>	
						</div>						
				</a>
				
			</div>

 <!-- --------------------------------------------------------------------------------- -->

			<div class="popular_posts_1">

				<a href="#">
					<img src="img/post_7_pic.jpg" alt="">
					<h3>Donec elementum dui semper, pretium dui quis, pretium nisl.</h3>
						<div class="post_data">
							<h4>11 ноября 2020</h4>
							<h4>&ensp;|&ensp;</h4>
							<h4>Автор</h4>	
						</div>	
				</a>

				<a href="#">
					<img src="img/post_8_pic.jpg" alt="">
					<h3>estibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</h3>
						<div class="post_data">
							<h4>11 ноября 2020</h4>
							<h4>&ensp;|&ensp;</h4>
							<h4>Автор</h4>	
						</div>	
				</a>

				<a href="#">
					<img src="img/post_9_pic.jpg" alt="">
					<h3>Sed arcu ipsum, convallis quis porttitor bibendum, convallis non enim.</h3>
						<div class="post_data">
							<h4>11 ноября 2020</h4>
							<h4>&ensp;|&ensp;</h4>
							<h4>Автор</h4>	
						</div>						
				</a>

				
			</div>

		</div>

	<section>

		<div class="main_new_posts">

		<div class="new_posts">

			<a href="#" class="new_post">
				<img src="img/post_1_pic.jpg" alt="">
				<h2>lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique</h2>

				<div class="post_data">
					<h4>11 ноября 2020</h4>
					<h4>&ensp;|&ensp;</h4>
					<h4>Автор</h4>	
				</div>

			</a>


			<a href="#" class="new_post">
				<img src="img/post_2_pic.jpg" alt="">
				<h2>lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique</h2>

				<div class="post_data">
					<h4>11 ноября 2020</h4>
					<h4>&ensp;|&ensp;</h4> <!-- &ensp; - код пробела -->
					<h4>Автор</h4>	
				</div>

			</a>

		</div>
			
		</div>
		
	</section>

	<section>
		<div class="sign_up_block">
			<h1>Newsletter</h1>
			<p>Donec elementum dui semper, pretium dui quis, pretium nisl.</p>
			<form action="sign_up.php" method="POST">
				<input type="email" name="email">
				<input type="submit" value="Sign up">
			</form>
		</div>
	</section>

	<footer>
		<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br>
Try awesome tool for designers</p>
	</footer>
	
</body>
</html>