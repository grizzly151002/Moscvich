
	<div class="comp_slider">
  <div><a href="#"><img src="img/slider_pic_1.jpg" alt="Main logo"></a></div>
  <div><a href="#"><img src="img/slider_pic_1.jpg" alt="этот текст будет выведен вместо картинки, если она не прогрузилась))"></a></div>
  <div><a href="#"><img src="img/slider_pic_1.jpg" alt=""></a></div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> <!--подключение библиотеки jquery(библиотека для упрощения написания JS кода-->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> <!--подключение библиотеки slick-slider -->
<script type="text/javascript">

$(document).ready(function(){ 
   $('.comp_slider').slick({
   	//указываются параметры слайдера
  slidesToShow: 1,
  prevArrow: $('.js-gallery-prev'), // отключение стрелочек
  nextArrow: $('.js-gallery-next'),
});
});

</script>

<style>

 .comp_slider a img{
 	width: 100%;
 }

 .comp_slider{
 	width: 100%;
 	text-align: center;
 }

 .main_slider{
 	display: flex;
 	justify-content: center;
 	margin-top: 75px;
 }

</style>

