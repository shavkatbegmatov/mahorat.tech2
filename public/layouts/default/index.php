<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ronny - Главная</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
			integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
			crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/style.css">
		<link rel="stylesheet" href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/nav.css">

		<link rel="icon" type="image/png" href="graph.png" />
	</head>

	<body>

		<section class="navigation">
			<div class="nav-container">
				<div class="brand">
					<a href="#!">Ronny</a>
				</div>
				<nav class="nav-content">
					<div class="nav-mobile" style="margin-right: 24px;">
						<a id="nav-toggle" href="#!"><i class="fa-solid fa-bars"></i></a>
						<a href="#!"><img src="avatar.webp" alt="" style="width: 40px; height: 40px; border-radius: 50%;"></a>
					</div>
					<ul class="nav-list">
						<li>
							<a href="#!">Главная</a>
						</li>
						<li>
							<a href="#!">Каталог
								<img src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/icons/interface-arrows-button-down.svg" alt="" style="margin-left: 4px;">
							</a>
							<ul class="nav-dropdown">
								<li>
									<a href="#!">Учетная запись</a>
								</li>
								<li>
									<a href="#!">Изменить план</a>
								</li>
								<li>
									<a href="#!">Список товаров</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#!">Блогерство</a>
						</li>
						<li class="img-li">
							<a href="#!"><img src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/avatar.webp" alt="" style="width: 40px; height: 40px; border-radius: 50%;"></a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<section class="content">
			<?php echo $content; ?>
		</section>

		<section class="footer">
			<div class="footer-container">
				<h1>Справка</h1>
				<div>
					<div class="footer-section">
						<div>
							<img src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/icons/interface-help-question-message.svg" alt="">
						</div>
						<div>
							<h1>Общие вопросы</h1>
							<ul>
								<li><a href="">Как загрузить и установить продукты?</a></li>
								<li><a href="">Что делать, если оплата пропущена или ее не удалось совершить?</a></li>
								<li><a href="">Справка по хранилищу, файлам или папкам</a></li>
							</ul>
						</div>
					</div>
					<div class="footer-section">
						<div>
							<img src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/icons/interface-user-multiple.svg" alt="">
						</div>
						<div>
							<h1>Сообщества</h1>
							<ul>
								<li><a href="">Обращайтесь за помощью, получайте вдохновение</a></li>
								<li><a href="">Как изменить план?</a></li>
								<li><a href="">Обзор популярных вопросов по выставлению счетов</a></li>
							</ul>
						</div>
					</div>
					<div class="footer-section">
						<div>
							<img src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/icons/entertainment-control-button-play.svg" alt="">
						</div>
						<div>
							<h1>Руководства</h1>
							<ul>
								<li><a href="">Изучите аспекты творчества и дизайна</a></li>
								<li><a href="">Показать историю поддержки</a></li>
								<li><a href="">Устранение неполадок и рекомендации по пользованию учетной записью</a></li>
							</ul>
						</div>
					</div>
					<div class="footer-section">
						<div>
							<img src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/icons/interface-alert-information-circle.svg" alt="">
						</div>
						<div>
							<h1>Справочный центр</h1>
							<ul>
								<li><a href="">Справочный центр Adobe</a></li>
								<li><a href="">Узнайте, как повысить производительность при работе с документами</a></li>
								<li><a href="">Справка по началу работы</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div>
						Ronny
					</div>
					<div>	
						Copyright © 2023 Ronny. Все права защищены. <span>/</span> <a href="">Запрет на продажу и передачу личной информации</a> <span>/</span> <a href="">Конфиденциальность</a> <span>/</span> <a href="">Условия использования</a>
					</div>
				</div>
			</div>
		</section>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
			integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script>
			(function ($) {
				$(function () {
					$('nav ul li a:not(:only-child)').click(function (e) {
						$(this).siblings('.nav-dropdown').toggle();

						$('.nav-dropdown').not($(this).siblings()).hide();
						e.stopPropagation();
					});

					$('html').click(function () {
						$('.nav-dropdown').hide();
					});

					$('#nav-toggle').click(function () {
						$('nav ul').toggle();
						this.innerHTML = '<i class="fa-solid fa-bars"></i>';
					});

					$('#nav-toggle').on('click', function () {
						this.classList.toggle('active');
					});
					
					const mediaQuery = window.matchMedia('(min-width: 800px)');
					
					addEventListener("resize", (event) => {
						if (mediaQuery.matches) {
							$('nav > ul').show();
						} else {
							$('nav > ul').hide();
						}
					});

					if (!mediaQuery.matches) {
						$('nav > ul').hide();
					}

					let scrollableElement = document.body;

					scrollableElement.addEventListener('wheel', checkScrollDirection);

					function checkScrollDirection(event) {
						if (checkScrollDirectionIsUp(event)) {
							$('.navigation').removeClass('navbar-to-top');
							if (!mediaQuery.matches) {
								$('nav > ul').hide();
							}
						} else {
							$('.navigation').addClass('navbar-to-top');
							$('.nav-dropdown').hide();
						}
					}

					function checkScrollDirectionIsUp(event) {
						if (event.wheelDelta) {
							return event.wheelDelta > 0;
						}
						return event.deltaY < 0;
					}
				});
			})(jQuery);
		</script>
	</body>

</html>