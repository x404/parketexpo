<? header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found"); ?>

<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title>Ошибка - запрашиваемая страница не найдена</title>
	<meta name='description' content='Ошибка - запрашиваемая страница не найдена' />
	<meta name='keywords' content='Ошибка - запрашиваемая страница не найдена' />		
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="/css/all.css" />
	<link rel="stylesheet" href="/css/form.css" />
	<link rel="stylesheet" href="/css/responsive.css" />
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/engine.js"></script>
</head>
<? $this->load->view('templates/front/include/header', $header); ?>
<? $this->load->view('templates/front/include/top_nav', $top_nav); ?>

	<div class="main">
		<div class="content-wrapper">
			<section class="content">
				<ul class="breadcrumbs">
					<li><strong>Страница не найдена</strong></li>
				</ul>
				<article>
				<div class="boxed">
					<div class="boxed-title">
					  <h1>Ошибка - запрашиваемая страница не найдена</h1>
					</div>
					<div class="form-text">
						<div class="boxed-content">
							К сожалению мы не можем найти запрашиваемую страницу. Убедитесь, что адрес введен правильно.
						</div>	
					</div>
				</div>
				</article>
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left2', $left); ?>
	<? $this->load->view('templates/front/include/right2', $right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer', $footer); ?>