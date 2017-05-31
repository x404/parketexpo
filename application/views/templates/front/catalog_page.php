<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?=$head['title']; ?></title>
    <meta name='description' content='<?=$head['meta_d']; ?>' />
	<meta name='keywords' content='<?=$head['meta_k']; ?>' />        
	<link rel="stylesheet" href="/css/all.css">
	<link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/tip-violet/tip-violet.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/placeholder.js"></script>
	<script src="/js/jcf.js"></script>
	<script src="/js/jcf.checkbox2.js"></script>
	<script src="/js/jcf.select.js"></script>
	<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css">
	<script src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="/js/jquery.pikachoose.js"></script>
	<script src="/js/jquery.lightbox_me.js"></script>
    <script src="/js/jquery.poshytip.min.js"></script>
    
    <script src="/js/script.js"></script>
    <script src="/js/script2.js"></script>
    <script src="/js/script_catalog.js"></script>    
	<script type="text/javascript">    
    <?=$this->catalog_page->js_build_info(); ?>
	</script> 
</head>

<? $this->load->view('templates/front/include/header',$header); ?>
<? $this->load->view('templates/front/include/top_nav',$top_nav); ?>

	<div class="main">
		<div class="content-wrapper">
			<section class="content">
                
                <?=$breadcrumbs; ?>
				
                <article>
					<h1><?=$h1; ?></h1>
					<?=$top_text; ?>
				</article>
                

                
				<div class="conf-panel">
					<div class="conf-buttons">
						<strong class="conf-title">Отображение</strong>
						<a href="/ajax/set_view/1" class="conf-button setkoi<?=$type == 'chain' ? ' conf-button-active' : NULL; ?>"<?if($type == 'chain') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Сеткой</span></a>
						<a href="/ajax/set_view/2" class="conf-button spiskom<?=$type == 'list' ? ' conf-button-active' : NULL; ?>"<?if($type == 'list') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Списком</span></a>
						<?/*
						<a href="/ajax/slideshow/<?=$this->uri->uri_string(); ?>" class="conf-button slidom<?=$type == 'slide' ? ' conf-button-active' : NULL; ?>"><span>Слайдшоу</span></a>
						*/?>
					</div>
                    <?=$pagination; ?>
				</div>
                
                <? if($type == 'chain') : ?>
                    <?=$this->catalog_page->show_chain(); ?>
                <? endif; ?>
                
                <? if($type == 'list') : ?>
                    <?=$this->catalog_page->show_list(); ?>
                <? endif; ?>

				<div class="conf-panel">
					<div class="conf-buttons">
						<strong class="conf-title">Отображение</strong>
						<a href="/ajax/set_view/1" class="conf-button setkoi<?=$type == 'chain' ? ' conf-button-active' : NULL; ?>"<?if($type == 'chain') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Сеткой</span></a>
						<a href="/ajax/set_view/2" class="conf-button spiskom<?=$type == 'list' ? ' conf-button-active' : NULL; ?>"<?if($type == 'list') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Списком</span></a>
						<!-- <a href="/ajax/slideshow/<?=$this->uri->uri_string(); ?>" class="conf-button slidom<?=$type == 'slide' ? ' conf-button-active' : NULL; ?>"><span>Слайдшоу</span></a> -->
					</div>
                    <?=$pagination; ?>
				</div>
                <br /><br />
                
                                <? if($brands) : ?>
				<div class="tovar-sect">
					<div class="sect-title"><strong>Бренды</strong></div>
					<ul class="brand-list">
						<? foreach($brands as $brand) : ?>
                        <li>
							<a href="<?=$brand['link']; ?>">
								<img src="<?=$brand['img']; ?>" height="108" width="180" alt="">
								<strong><?=$brand['name']; ?> <span>(<?=$brand['country']; ?>)</span></strong>
								<em><?=$brand['count'] ?></em>
							</a>
						</li>
                        <? endforeach; ?>
					</ul>
				</div>
                <? endif; ?>
                
				<article>
                    <?=$bottom_text; ?>	
				</article>				
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left3',$left); ?>
    <? $this->load->view('templates/front/include/right2',$right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer2'); ?>
    
    