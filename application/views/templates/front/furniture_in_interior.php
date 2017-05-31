<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?= $category->title ?></title>
    <meta name='description' content='<?= $category->meta_d ?>' />
	<meta name='keywords' content='<?= $category->meta_k ?>' />        
	<link rel="stylesheet" href="/css/all.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
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

			var currentItem = 1;
            var lastItem = <?= count($items) ?>;
            
            var changeDescription = function() {
            	var descr = $("#item-descr-" + currentItem).html();
                $("#item-description").html(descr);
            };

            var nextDescription = function() {
				currentItem = currentItem < lastItem ? currentItem + 1 : 1;
				changeDescription();
            };

            $("#next2").click(function() {
                nextDescription();
            });

            $("#prev2").click(function() {
            	currentItem = currentItem > 1 ? currentItem - 1 : lastItem;
                changeDescription();
            });

            // mebel-slider
            $(".content-slider .carousel").carouFredSel({
                items : {
                    visible     : 1,
                    width       : 763,
                    height      : 582

                },
                onCreate : function() {
	                currentItem = 1;
	                changeDescription();
	            },
                auto: {
                    button: ".caro-play",
                    progress: ".slider-conf .bar span",
                    delay : 500,
                    onAfter: nextDescription
                },
                prev: "#prev2",
                next: "#next2",
                pagination  : {
                    container       : "#pager2",
                    anchorBuilder   : function( nr ) {
                        var pictureSrc = $("#picture-" + nr).attr("src");
                        return '<li id="' + nr + '"><img src="' + pictureSrc + '" height="60"></li>';
                    },
                },
                scroll : {
                    fx          : "none",
                    items           : 1,
                    duration        : 1000      
                }
            });

			$("#pager2").click(function() {
				$(".content-slider .carousel").trigger("pause", true);
                var itemToChangeTo = + $('.selected').attr("id");
                currentItem = itemToChangeTo;
                changeDescription();
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
                <li><a href="<?= $url ?>">Мебель в интерьере</a></li>
                <li><strong><?= $category->breadcrumbs ?></strong></li>
            </ul>

            <article>
            <div class="boxed">
				
				<div class="boxed-title">
				  <h1><? $category->h1 ?></h1>
				</div>

				<div class="form-text">
					<div class="boxed-content">
						<div class="centered">
				            <div class="content-slider mebelslid">
				                <div class="carousel">
				                	
				                	<? foreach ($items as $key => $item): ?>
				                	<? $i = $key + 1; ?>
							            <div class="slide lin-so01">
							                <img id="picture-<?= $i?>" src="/img/upload/mini/<?= $item->picture ?>" 
							                	height="366" width="763" alt="<?= $item->picture_alt ?>" 
							                	title="<?= $item->picture_title ?>">
							                <div class="slider-info-box">
							                    <strong><?= $category->caption ?></strong>
							                </div>
							                <div id="item-descr-<?= $i?>" style="display:none;">
							                	<?= $item->description ?>
							                </div>
							            </div>
	    							<? endforeach; ?>

								</div>
					            <div class="clearfix"></div>
					        </div>
					        
					        <? if (count($items) > 1): ?>
						        <div class="slider-conf slider-conf-full">
					                <div class="inpager">
					                    <ul id="pager2" class="pager"></ul>
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
				            <div id="item-description"></div><br>
				            <p><?= $category->description ?></p>
				        </div>
					</div>    
				</div>
			</div>
			</article>
		</section>
	</div>
	
<? $this->load->view('templates/front/include/furniture_left', $left); ?>
<? $this->load->view('templates/front/include/right2', $right); ?>	
</div>
<? $this->load->view('templates/front/include/footer', $footer); ?>