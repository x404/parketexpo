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
	<link rel="stylesheet" href="/css/form.css">
	<link rel="stylesheet" href="/css/tip-violet/tip-violet.css">
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
	<script src="/js/jquery.poshytip.min.js"></script>
	<script src="/js/script_catalog.js"></script>
	<script src="/js/script.js"></script>	

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
		// $(".sub-nav li.with-drop a").click(function(e){
		// 	$(this).closest('li').find("ul").slideToggle("fast");
		// 	$(this).closest('li').toggleClass("opened");

  //			//e.preventDefault();
		// });
		
		if ($.browser.msie && $.browser.version == 10) {
  			$("html").addClass("ie10");
		}
	});
	</script>
	<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		if ($.browser.msie && $.browser.version == 10) {
			$("html").addClass("ie10");
		}
		$("input, textarea").placeholder();
		$("ul.filist li:nth-child(even)").addClass("odd");
		$("table tbody tr:nth-child(even)").addClass("odd-tr");
		$("table tr td:last-child").addClass("last-td");
		// focus input (глобальный)
		$(".text-input input").focus(function(){
			$(this).blur(function(){
				$(this.parentNode).removeClass("input-focused");
			});
			$(this.parentNode).addClass("input-focused");
		});
		
		var itemCounter = 0;
		var itemsLimit = <?=count($items);?>

		var nextDescr = function() {
			var descr = $("#item-descr-" + itemCounter).html();
			itemCounter++;
			if (itemCounter > itemsLimit) itemCounter = 0;
			$("#item-description").html(descr);
		};

		var $initCounter = function() {
			itemCounter = 0;
			nextDescr();
		};
		
		var $changeDescription = function() { 
			nextDescr();
		};

		$("#pager2").on("click", "a", function(){
			$(".content-slider .carousel").trigger("pause", true);
			var pageNum = +$(".selected span").html() - 1;
			var descr = $("#item-descr-" + pageNum).html();
			itemCounter = pageNum + 1;
			if (itemCounter > itemsLimit) itemCounter = 0;
			$("#item-description").html(descr);
		});

		$("#next2").click(function(){
			nextDescr();
		});
		
		$("#prev2").click(function(){
			itemCounter--;
			if (itemCounter < 0) itemCounter = itemsLimit;
			var descr = $("#item-descr-" + (itemCounter - 1)).html();
			$("#item-description").html(descr);
		});

		var changeDescr = function(pageNum) {
			pageNum--;
			$(".content-slider .carousel").trigger("pause", true);
			var descr = $("#item-descr-" + pageNum).html();
			itemCounter = pageNum + 1;
			if (itemCounter > itemsLimit) itemCounter = 0;
			$("#item-description").html(descr);
		};

		// mebel-slider
		$(".content-slider .carousel").carouFredSel({
			
			items	   : {
				visible	 : 1,
				width	   : 763,
				height	  : 582

			},
			onAfter: $changeDescription,
			onCreate : $initCounter,
			auto: {
				button: ".caro-play",
				progress: ".slider-conf .bar span",
				delay : 500,
				onAfter: $changeDescription
			},
			prev: "#prev2",
			next: "#next2",
			// pagination: "#pager2",
			pagination  : {
				container	   : "#pager2",
				anchorBuilder   : function( nr ) {
					var pictureSrc = $("#picture-" + (nr - 1)).attr("src");
					return "<li onclick=\"changeDescr(" + nr + ");\"><img src=\"" + pictureSrc + "\" height=\"60\"></a>";
				}
			},
			scroll : {
				fx		  : "none",
				items		   : 1,			
				duration		: 1000
				
			}				   
		});
 
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
					<h1><?=$h1; ?></h1>
					<?=$top_text; ?>
				</article>
				

				<? if ($items) : ?>
				<div class="conf-panel">
					<div class="conf-buttons">
						<strong class="conf-title">Отображение</strong>
						<a href="/ajax/set_view/1" class="conf-button setkoi<?=$type == 'chain' ? ' conf-button-active' : NULL; ?>"<?if($type == 'chain') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Сеткой</span></a>
						<a href="/ajax/set_view/2" class="conf-button fur-slidom<?=$type == 'list' ? ' conf-button-active' : NULL; ?>"<?if($type == 'list') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Слайдшоу</span></a>
							<?/*
							<a href="/ajax/slideshow/<?=$this->uri->uri_string(); ?>" class="conf-button slidom<?=$type == 'slide' ? ' conf-button-active' : NULL; ?>"><span>Слайдшоу</span></a>
							*/?>
						</div>
						<?/*=$pagination;*/ ?>
					</div>

					<? if($type == 'list') : ?>
					<div class="centered">
						<div class="content-slider mebelslid">
							<div class="carousel">
								<? foreach ($items as $key => $item) : ?>
								<div class="slide lin-so01">
									<img id="picture-<?=$key;?>" src="/img/upload/mini/<?=$item->picture;?>" height="366" width="763" alt="<?=$item->picture_alt;?>" title="<?=$item->picture_title;?>">
									<div class="slider-info-box">
										<strong><a href="<?= $catalog->url_name.'/'.($item->name ? $item->name.'-':'').$item->id.'-id'; ?>"><?=$item->caption;?></a></strong>
									</div>
									<div id="item-descr-<?=$key;?>" style="display:none;"><?=$item->description;?></div>
								</div>
								<? endforeach; ?>
							</div>
							<div class="clearfix"></div>
						</div>
						<? if (count($items) > 1) : ?>
						<div class="slider-conf slider-conf-full">
							<div class="inpager">
								<div id="pager2" class="pager"></div>
							</div>
							<div class="incontrol">
								<div class="bar"><span></span></div>
								<a id="next2" class="next" href="#">&gt;</a>
								<a id="prev2" class="prev" href="#">&lt;</a>
								<a href="#" class="caro-play">Pause</a>
							</div>
						</div>
						<? endif; ?>

						<br />
						<div id="item-description">
						</div>
					</div>
					<? endif; ?>

					<? if($type == 'chain') : ?>
						<ul class="cat-list">
							<? foreach ($items as $key => $item) : ?>
							<li>
								<a class="image" rel="imgr<?=$key;?>" href="/img/upload/mini/<?=$item->picture;?>">
									<img width="367" height="274" alt="<?=$item->picture_alt;?>" title="<?=$item->picture_title;?>" src="/img/upload/mini/<?=$item->picture;?>" class="im">
								</a>
								<div class="item-desc">
									<div class="item-info">
										<a class="title" href="<?= $catalog->url_name.'/'. ($item->name ? $item->name.'-':'').$item->id.'-id'; ?>"><?=$item->caption;?></a><strong class="devby">
									</strong>
									
								</div>
								<div class="price-wrap">
									<a class="submit green-button-26" style="float: right; margin-right: 8px;" href="<?= $catalog->url_name.'/'.$item->name.'-'.$item->id.'-id'; ?>">Посмотреть</a>
									<a class="rem" href="/remembered/remember/<?=$catalog->id;?>/<?=$item->id;?>">Запомнить</a>
								</div>
							</div>
						</li>
						<? endforeach; ?>
						</ul>
					<? endif; ?>

					<br><br>
					<div class="conf-panel">
					<div class="conf-buttons">
						<strong class="conf-title">Отображение</strong>
						<a href="/ajax/set_view/1" class="conf-button setkoi<?=$type == 'chain' ? ' conf-button-active' : NULL; ?>"<?if($type == 'chain') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Сеткой</span></a>
						<a href="/ajax/set_view/2" class="conf-button fur-slidom<?=$type == 'list' ? ' conf-button-active' : NULL; ?>"<?if($type == 'list') : ?><?=' onclick="return false;"' ?><?endif; ?>><span>Слайдшоу</span></a>
							<?/*
							<a href="/ajax/slideshow/<?=$this->uri->uri_string(); ?>" class="conf-button slidom<?=$type == 'slide' ? ' conf-button-active' : NULL; ?>"><span>Слайдшоу</span></a>
							*/?>
						</div>
						<?/*=$pagination;*/ ?>
					</div>
				<? endif; ?>
				
								
				
				<article>
					<?/*=$top_text;*/ ?>
				</article>				
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left4',$left); ?>
	<? $this->load->view('templates/front/include/right2',$right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer2'); ?>
	
	