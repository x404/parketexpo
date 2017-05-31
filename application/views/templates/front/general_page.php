<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?=$head['title']; ?></title>
    <meta name='description' content='<?=$head['meta_d']; ?>' />
	<meta name='keywords' content='<?=$head['meta_k']; ?>' />        
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/all.css">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/placeholder.js"></script>
	<script>
    
	$(document).ready(function() {
		$('input, textarea').placeholder();
		$(".head-trash .trash-title").mouseover(function(e){
			$(this).closest(".head-right").toggleClass("head-right-zoomed");
			 e.preventDefault();
		});

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
        
		if ($.browser.msie && $.browser.version == 10) {
  			$("html").addClass("ie10");
		}
	});
	</script>
</head>
<? $this->load->view('templates/front/include/header', $header); ?>
<? $this->load->view('templates/front/include/top_nav', $top_nav); ?>
	<div class="main">
		<div class="content-wrapper">
			<section class="content">
                <?=$breadcrumbs; ?>
					
                <? if($global_furniture) : ?>
				<div class="tovar-sect">                
					<div class="sect-title"><strong>Мебель</strong></div>
					<? if ($top_text) : ?>
						<br><br>
						<article>
							<center><?=$top_text; ?></center>
						</article>
					<? endif; ?>
					<ul class="guide-list">
					<? foreach ($global_furniture as $key => $furniture) : ?>
					<? $fur = $furniture['cat'];
					   $url = $furniture['url']; ?>
						<li>
				            <div class="left-block">
				                <a href="/<?=$url;?>">
				                    <div class="guide-picture">
				                    <img alt="<?=$fur->picture_alt;?>" title="<?=$fur->picture_title;?>" src="/img/upload/mini/<?=$fur->picture;?>">
				                    </div>
				                    <?=$fur->caption;?>
				                </a>
				            </div>
				            <h2><?=$fur->caption;?></h2>
				            <span><?=$fur->description;?></span>

			            </li><div style="clear: both;"></div>
					<? endforeach; ?>
					<div style="clear: both;">
					</ul>
				</div>
                <? endif; ?>
				<article>
					<center><?=$bottom_text; ?></center>
				</article>
			</section>
		</div>
	<? $this->load->view('templates/front/include/left4', $left); ?>
    <? $this->load->view('templates/front/include/right2', $right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer', $footer); ?>