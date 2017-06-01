<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?= $article->title ?></title>
	<meta name='description' content='<?= $article->meta_d ?>' />
	<meta name='keywords' content='<?= $article->meta_k ?>' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />	   
	<link rel="stylesheet" href="/css/all.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/engine.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			$(".head-trash .trash-title").mouseover(function(e){
				$(this).closest(".head-right").toggleClass("head-right-zoomed");
				 e.preventDefault();
			});

			$(".big-trash").on('mouseleave',function(){
				$(this).closest(".head-right").removeClass("head-right-zoomed");
			});
			
			$(".cat-nav-sect .cat-nav-title").click(function(e){
				$(this).closest(".cat-nav-sect").find(".cat-nav").stop().slideToggle(function(){
					$(this).closest(".cat-nav-sect").toggleClass("cat-nav-closed");
				});
				e.preventDefault();
			});
		});
	</script> 
	<!--[if !IE]><!-->
	<script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script>
	<!--<![endif]-->
</head>

<? $this->load->view('templates/front/include/header', $header); ?>
<? $this->load->view('templates/front/include/top_nav', $top_nav); ?>

<div class="main">
	<div class="content-wrapper">
		<section class="content">
			<ul class="breadcrumbs">
				<li><a href="/">Главная</a></li>
				<li><a href="<?= $url ?>">Гид покупателя</a></li>
				<li><strong><?= $article->breadcrumbs ?></strong></li>
			</ul>

			<article>
			<div class="boxed">
				
				<div class="boxed-title">
					<h1><?= $article->caption ?></h1>
				</div>

				<div class="form-text">
					<div class="boxed-content">
						<?= $article->text ?>
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