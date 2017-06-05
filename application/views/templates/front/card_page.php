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
	<script src="/js/jcf.checkbox2.js"></script>
	<script src="/js/jcf.select.js"></script>
	<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css">
	<script src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="/js/jquery.pikachoose.js"></script>
	<script src="/js/jquery.lightbox_me.js"></script>
	<script src="/js/script.js"></script>
	<script src="/js/script2.js"></script>
	<script src="/js/card_page.js"></script>
	<script src="/js/engine.js"></script>
</head>

<? $this->load->view('templates/front/include/header',$header); ?>
<? $this->load->view('templates/front/include/top_nav',$top_nav); ?>

	<div class="main card_page">
		<div class="content-wrapper">
			<section class="content">
			<?=$breadcrumbs; ?>
			<? if($data) : ?>
				<div class="boxed boxed-three">
					<div class="boxed-title">
						<? if(isset($data->brand)) : ?><img src="/<?=$data->brand->logo; ?>" height="57" width="94" alt="" class="dev-by" /><? endif ?>
						<h1><?=$h1; ?></h1>
					</div>
					<div class="centered">
						<p><?=$data->txt; ?></p>
					</div>
					<div class="card2">
						<div class="card-left">
							<? if ($data->prig1 || $data->prig2 || $data->prig3 || $data->prig4 || $data->prig5 ||
								$data->prig6 || $data->prig7 || $data->prig8 || $data->prig9 || $data->prig10) : ?>
								<div class="title-wrap">
									<strong class="prigod">Пригодность использования</strong>
									<span class="vopr"><strong>Наведите курсор <br>на пиктограмму</strong></span>
								</div>
								<ul class="icolist">
									<? if($data->prig1) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico01.png" height="66" width="35" alt=""></em>
											<strong class="vopr-hide"><span>для кухни</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig2) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico02.png" height="66" width="35" alt=""></em>
											<strong class="vopr-hide"><span>для гостиной</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig3) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico03.png" height="66" width="35" alt=""></em>
											<strong class="vopr-hide"><span>для улицы</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig4) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico04.png" height="66" width="26" alt=""></em>
											<strong class="vopr-hide"><span>для столовой</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig5) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico05.png" height="66" width="29" alt=""></em>
											<strong class="vopr-hide"><span>для постирочной</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig6) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico06.png" height="66" width="37" alt=""></em>
											<strong class="vopr-hide"><span>для спальни</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig7) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico07.png" height="66" width="23" alt=""></em>
											<strong class="vopr-hide"><span>для прихожей</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig8) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico08.png" height="66" width="30" alt=""></em>
											<strong class="vopr-hide"><span>для библиотеки</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig9) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico09.png" height="66" width="42" alt=""></em>
											<strong class="vopr-hide"><span>для детской</span></strong>
										</div>
									</li>
									<? endif; ?>
									<? if($data->prig10) : ?>
									<li>
										<div>
											<em><img src="/img/images/ico10.png" height="66" width="42" alt=""></em>
											<strong class="vopr-hide"><span>для кабинета</span></strong>
										</div>
									</li>
									<? endif; ?>
								</ul>
							<? endif; ?>
							<? $images = $this->card_page->photo() ?>
							<div class="carouselo">
								<div class="slido1">
									<? if($images) : ?>
									<? foreach($images as $i => $image) : ?>
									<div class="slide">
										<a href="/<?=$image; ?>" rel="gr1" class="image" title="<?=$imageTitle?>">
											<img class="im" src="/<?=$image; ?>" alt="<?=$imageAlt.' - '.($i+1)?>" width="400" height="300" />
											<span class="big-zoom"></span>
										</a>
									</div>
									<? endforeach ?>
									<? endif; ?>
								</div>
								<div class="clearfix"></div>
								<div class="thumbnails slido-pag1"></div>
							</div>
							<? if($this->card_page->options['num_photo'] == 1) : ?><br /><? endif; ?>
							<a href="/remembered/remember/<?=$catalog_id; ?>/<?=$data->id ?>" class="zapo"><span>Для сравнения</span></a>

						</div>
						<div class="spec-box-wrap">
		 					<div class="boxed-title">
								<?=$this->card_page->spec_title(); ?>
							</div>

							<div class="centered101">
								<div class="table-responsive">
									 <?=$this->card_page->spec_body(); ?>									
								</div>
							</div>
							
							
						</div>

					</div>
					<div class="under_card_row" style="">
					
						   <div class="pricez">
								
								<div class="left-prises">
									<span class="title">Цена<?=$data->is_price_from ? ' от' : ''?></span>
									<?=$this->card_page->create_price(); ?> 
								</div>
																<div class="row">
									<form action="/basket/insert_basket" class="spi-form" method="POST" id="frmsbmt">
									<span class="text-input">
										<input type="text" value="" class="text" name="num" />
									</span>
									<label for="#">Кол-во кв. м</label>
									<button onclick="frmsbmt.submit();" class="green-button-40">Заказать</button>
																	<input type="hidden" value="<?=$data->id; ?>" name="id" />
								<input type="hidden" value="<?=$catalog_id; ?>" name="cid" />
								<input type="hidden" value="<?=$back_link; ?>" name="back_link" />
								
				</form>
								</div>
							</div>
														
								


				</div>
				<div class="clearfix"></div>			
				</div>
<?=$this->card_page->same_items(); ?>				
<?=$this->card_page->rec_plintus(); ?>

<?
if (trim($data->txt2)!='') echo '<div class="boxed boxed-three content-slider">
		<div class="centered">
			<p>'.$data->txt2.'</p>
		</div>
	</div>';
?>

				<?php else : ?>
				<h2 align="center" class="wtf-h1">Запрашиваемый товар отсутствует на сайте!</h2>	
				<?endif; ?>
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left3',$left); ?>
	<? $this->load->view('templates/front/include/right2',$right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer'); ?>
	
	