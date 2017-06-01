<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?=$head['title']; ?></title>
    <meta name='description' content='<?=$head['meta_d']; ?>' />
	<meta name='keywords' content='<?=$head['meta_k']; ?>' />        
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />   
	<link rel="stylesheet" href="/css/all.css">
	<link rel="stylesheet" href="/css/form.css">
	<link rel="stylesheet" href="/css/responsive.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/placeholder.js"></script>
	<script src="/js/jcf.js"></script>
	<script src="/js/jcf.checkbox.js"></script>
	<script src="/js/jcf.select.js"></script>
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css">
	<script src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="/js/engine.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		if ($.browser.msie && $.browser.version == 10) {
  			$("html").addClass("ie10");
		}
		$('input, textarea').placeholder();
		$("ul.filist li:nth-child(even)").addClass("odd");
		$("table tbody tr:nth-child(even)").addClass("odd-tr");
		$("table tr td:last-child").addClass("last-td");
        
      		$(".head-trash .trash-title").mouseover(function(e){
			$(this).closest(".head-right").toggleClass("head-right-zoomed");
			 e.preventDefault();
		});
		$(".big-trash").on('mouseleave',function(){
		 	$(this).closest(".head-right").removeClass("head-right-zoomed");
		});
        
		// focus input (глобальный)
		$(".text-input input").focus(function(){
			$(this).blur(function(){
				$(this.parentNode).removeClass("input-focused");
			});
			$(this.parentNode).addClass("input-focused");
		});
		// показать правый сайдбар элементы
		$(".cat-nav-sect .cat-nav-title").click(function(e){
			$(this).closest(".cat-nav-sect").find(".cat-nav").stop().slideToggle(function(){
				$(this).closest(".cat-nav-sect").toggleClass("cat-nav-closed")
			});
			e.preventDefault();
		});
        
		$(".can_be_larger").fancybox({
		    cyclic: true,
            titleShow: false,
			titlePosition: 'inside',
			transitionIn: 'none',
			overlayOpacity:0.5,
			overlayColor: '#fff',
			padding:0,
            showNavArrows: true
		});
        
        //убираем стрелки
        $("#fancybox-left-ico").hide();
        $("#fancybox-right-ico").hide();
		
	});
	// replace custom forms
	jcf.lib.domReady(function(){
		jcf.customForms.replaceAll();
	});
	</script>
</head>
<? $this->load->view('templates/front/include/header',$header); ?>
<? $this->load->view('templates/front/include/top_nav',$top_nav); ?>


	<div class="main">
		<div class="content-wrapper">
			<section class="content">
                <?=$breadcrumbs; ?>
                <article>
                <div class="boxed">
					<div class="boxed-title">
					  <h1><?=$h1; ?></h1>
					</div>
					<div class="form-text">
						<div class="boxed-content">
							<?=$content; ?>
							
							<? if(isset($video)): ?>
								<br />
								<?=$video; ?>
							<? endif; ?>

							<? if(isset($content_2)): ?>
								<br />
								<?=$content_2; ?>
							<? endif; ?>
						</div>    
					</div>
				</div>
				</article>
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left2',$left); ?>
    <? $this->load->view('templates/front/include/right2',$right); ?>	
    </div>
	<? $this->load->view('templates/front/include/footer',$footer); ?>