<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title>Гид покупателя</title>
    <meta name='description' content='Гид покупателя' />
	<meta name='keywords' content='Гид покупателя' />        
	<link rel="stylesheet" href="/css/all.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			if ($.browser.msie && $.browser.version == 10) {
	  			$("html").addClass("ie10");
			}

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
</head>

<? $this->load->view('templates/front/include/header', $header); ?>
<? $this->load->view('templates/front/include/top_nav', $top_nav); ?>

<div class="main">
	<div class="content-wrapper">
		<section class="content">
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><strong>Гид покупателя</strong></li>
            </ul>

            <article>
            <div class="boxed">
				
				<div class="boxed-title">
				  <h1>Гид покупателя</h1>
				</div>

				<div class="form-text">
					<div class="boxed-content">
                        <ul class="guide-list">
                            <? foreach ($articles as $article): ?>
                                <li>
                                    <div class="left-block">
                                        <div class="guide-picture">
                                        <img alt="<?= $article->picture_alt ?>" title="<?= $article->picture_title ?>" 
                                            src="/img/upload/mini/<?= $article->picture ?>">
                                        </div>
                                    </div>
                                    <h2><?= $article->caption ?></h2>
                                    <span><?= $article->description ?></span>
                                    <div class="right-block">
                                        <a href="<?= $url ?>/<?= $article->url_name ?>">Прочитать полностью</a>
                                    </div>
                                </li>
                                <div style="clear: both;"></div>
                            <? endforeach; ?>
                        </ul>
                        <div style="clear: both;"></div>
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