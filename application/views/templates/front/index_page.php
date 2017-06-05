<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?= $head['title']; ?></title>
	<meta name='description' content='<?= $head['meta_d']; ?>' />
	<meta name='keywords' content='<?= $head['meta_k']; ?>' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="/css/all.css" />
	<link rel="stylesheet" href="/css/responsive.css" />
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/placeholder.js"></script>
	<script src="/js/engine.js"></script>
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
		$(".sub-nav li.with-drop a").click(function(e){
			$(this).closest('li').find("ul").slideToggle("fast");
			$(this).closest('li').toggleClass("opened");
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
				<?= $breadcrumbs; ?>

				<? if ($h1 OR $top_text): ?>
					<article>
						<? if ($h1): ?>
							<h1><center><?= $h1?></center></h1>
						<? endif ?>
						<?= $top_text?>
					</article>
				<? endif ?>
				
				<? if ($global_parket) : ?>
				<div class="tovar-sect">
					<div class="sect-title"><strong><?= $global_parket['name'] ?></strong></div>
					<ul class="item-list">
					<? for ($i=0;$i!=8;$i++) : ?>
						<? if ($global_parket['items'][$i]) : ?>
						<li>
							
							<a href="<?= $global_parket['items'][$i]['link']; ?>">
								<img src="/img/images/img-item0<?= $i+1 ?>.png" height="169" width="190" alt="" />
								<span><strong><?= $global_parket['items'][$i]['name']; ?></strong></span>
								<em><?= $global_parket['items'][$i]['count'] ?></em>
							</a>
							
						</li>
						<? endif ?>
					<? endfor ?>
					</ul>
				</div>
				<? endif ?>
				<? if ($global_terras) : ?>
				<div class="tovar-sect">
					<div class="sect-title"><strong><?= $global_terras['name'] ?></strong></div>
					<ul class="item-list">
					<? for ($i=8;$i!=12;$i++) : ?>
						<? if ($global_terras['items'][$i]) : ?>
						<li>
							
							<a href="<?= $global_terras['items'][$i]['link']; ?>">
								<img src="/img/images/img-item<? echo $i+1 > 9 ? $i+1 : '0'.($i+1); ?>.png" height="169" width="190" alt="" />
								<span><strong><?= $global_terras['items'][$i]['name']; ?></strong></span>
								<em><?= $global_terras['items'][$i]['count'] ?></em>
							</a>
							
						</li>
						<? endif ?>
					<? endfor ?>
					</ul>
				</div>
				<? endif ?>
				<? if ($global_acsessuares) : ?>
				<div class="tovar-sect">
					<div class="sect-title"><strong><?= $global_acsessuares['name'] ?></strong></div>
					<ul class="item-list">
					<? for ($i=12;$i!=20;$i++) : ?>
						<? if ($global_acsessuares['items'][$i]) : ?>
						<li>
							
							<a href="<?= $global_acsessuares['items'][$i]['link']; ?>">
								<img src="/img/images/img-item<?= $i+1 ?>.png" height="169" width="190" alt="" />
								<span><strong><?= $global_acsessuares['items'][$i]['name']; ?></strong></span>
								<em><?= $global_acsessuares['items'][$i]['count'] ?></em>
							</a>
							
						</li>
						<? endif ?>
					<? endfor ?>
					</ul>
				</div>
				<? endif ?>
				<? if ($global_him) : ?>
				<div class="tovar-sect">
					<div class="sect-title"><strong><?= $global_him['name'] ?></strong></div>
					<ul class="item-list">
					<? for ($i=20;$i!=28;$i++) : ?>
						<? if ($global_him['items'][$i]) : ?>
						<li>
							
							<a href="<?= $global_him['items'][$i]['link']; ?>">
								<img src="/img/images/img-item<?= $i+1 ?>.png" height="169" width="190" alt="" />
								<span><strong><?= $global_him['items'][$i]['name']; ?></strong></span>
								<em><?= $global_him['items'][$i]['count'] ?></em>
							</a>
							
						</li>
						<? endif ?>
					<? endfor ?>
					</ul>
				</div>
				<? endif ?>
				<article>
					<?=  $bottom_text ?>
				</article>
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left', $left); ?>
	<? $this->load->view('templates/front/include/right', $right); ?>
	</div>
	<? $this->load->view('templates/front/include/footer',$footer); ?>