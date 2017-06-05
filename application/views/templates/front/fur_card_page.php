<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?=$head['title']; ?></title>
	<meta name='description' content='<?=$head['meta_d']; ?>' />
	<meta name='keywords' content='<?=$head['meta_k']; ?>' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />   
	<link rel="stylesheet" href="/css/all.css" />
	<link rel="stylesheet" href="/css/form.css" />
	<link rel="stylesheet" href="/css/responsive.css" />
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/placeholder.js"></script>
	<script src="/js/jcf.js"></script>
	<script src="/js/jcf.checkbox.js"></script>
	<script src="/js/jcf.select.js"></script>
	<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css">
	<script src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="/js/jquery.pikachoose.js"></script>
	<script src="/js/jquery.lightbox_me.js"></script>
	<script src="/js/script.js"></script>
	<script src="/js/card_page.js"></script>
	<script src="/js/engine.js"></script>
	<script>
	
	$(document).ready(function() {
		$('input, textarea').placeholder();
		$(".head-trash .trash-title").mouseover(function(e){
			$(this).closest(".head-right").toggleClass("head-right-zoomed");
			 e.preventDefault();
		});
		// $(".head-trash .trash-title").click(function(e){
		// 	$(this).closest(".head-right").toggleClass("head-right-zoomed");
		// 	 e.preventDefault();
		// });
		$(".big-trash").on('mouseleave',function(){
		 	$(this).closest(".head-right").removeClass("head-right-zoomed");
		});

		$(".text-input input").focus(function(){
			$(this).blur(function(){
				$(this.parentNode).removeClass("input-focused");
			});
			$(this.parentNode).addClass("input-focused");
		}); 
		$(".sub-nav li:has(ul)").addClass("with-drop");
		$(".sub-nav li.with-drop a").click(function(e){
			$(this).closest('li').find("ul").slideToggle("fast");
			$(this).closest('li').toggleClass("opened");

			 //e.preventDefault();
		});
		
		if ($.browser.msie && $.browser.version == 10) {
  			$("html").addClass("ie10");
		};
	});
	</script>
</head>

<? $this->load->view('templates/front/include/header',$header); ?>
<? $this->load->view('templates/front/include/top_nav',$top_nav); ?>

	<div class="main">
		<div class="content-wrapper">
			<section class="content">
			<?=$breadcrumbs; ?>
			<? if($data) : ?>
				<div class="boxed boxed-three">
					<div class="boxed-title">
						<h1><?=$data->caption; ?></h1>
					</div>
					<div class="centered">
						<p></p>
					</div>
					<div class="card2">
						<div class="card-left">
							
							<div class="carouselo">
								<div class="slido1">
									<? if($data->picture) : ?>
									<div class="slide">
										<a href="/img/upload/mini/<?=$data->picture; ?>" rel="gr1" class="image">
											<img class="im" src="/img/upload/mini/<?=$data->picture; ?>" alt="carousel 1" width="400" height="300" />
											<span class="big-zoom"></span>
										</a>
									</div>
									<? endif; ?>
								</div>
								<div class="clearfix"></div>
								<div class="thumbnails slido-pag1"></div>
							</div>
							<br />
							

						</div>
						<div class="spec-box-wrap">
 					<div class="boxed-title">
						&nbsp;&nbsp;&nbsp;&nbsp;Описание
					</div>

							<div class="centered101">
								 <?=$data->description; ?>
							</div>
							
							
						</div>

					</div>
					
				<div class="clearfix"></div>			
				</div>



				<?php else : ?>
				<h2 align="center" class="wtf-h1">Запрашиваемый товар отсутствует на сайте!</h2>	
				<?endif; ?>
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left4',$left); ?>
	<? $this->load->view('templates/front/include/right2',$right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer'); ?>
	
	