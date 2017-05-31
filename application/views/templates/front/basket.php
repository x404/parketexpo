<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title><?=$head['title']; ?></title>
    <meta name='description' content='<?=$head['meta_d']; ?>' />
	<meta name='keywords' content='<?=$head['meta_k']; ?>' />        
	<link rel="stylesheet" href="/css/all.css">
	<link rel="stylesheet" href="/css/form.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/placeholder.js"></script>
	<script src="/js/jcf.js"></script>
	<script src="/js/jcf.checkbox.js"></script>
	<script src="/js/jcf.select.js"></script>
    <!-- <script src="/js/script_basket.js"></script> -->
    <script src="/js/script.js"></script>
    <script src="/js/script_catalog.js"></script>
	<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>

</head>
<? $this->load->view('templates/front/include/header',$header); ?>
<? $this->load->view('templates/front/include/top_nav',$top_nav); ?>


	<div class="main">
		<div class="content-wrapper">
			<section class="content">
                <?=$breadcrumbs; ?>

<!-- Заказы обрабатываются в течение часа с момента поступления. Интернет-Магазин работает ежедневно, без выходных, с 10 до 19 по Московскому времени. -->
<!-- Телефон Интернет-магазина 8 (495) 710-78-79 -->

				    <? if($basket) : ?>
                    <div class="boxed">
					<div class="boxed-title">
						<h1>Корзина товаров</h1>
					</div>
					<form name="orderForm" method="POST" class="cont-form backet-form form-type">
						<div class="centered10">
							<div class="backet-text">
								<p class="big-text-type"><?= $top_text ?></p>
								<div class="wrap-type">
									<div class="tel-magaz">
										<p><?= $top_text_2 ?></p>
										<a href="#">Информация о доставке</a>
									</div>
									<a href="/remembered" class="smotr">
										<strong class="sm-ti">Посмотреть</strong>
										<strong class="sm-zap">Запомненное <span><?=$remembered; ?></span></strong>
									</a>
								</div>
							</div>
							<div class="table-over">
								<table class="table backet">
									<thead>
										<tr>
											<td>Фото</td>
											<td class="desc">Название</td>
											<td>Кол-во</td>
											<td>Цена</td>
											<td>Стоимость</td>
											<td>Удалить</td>
										</tr>
									</thead>
									<tbody>


									<? if($itemsRows) : ?>
				                		<? foreach($itemsRows as $row) : ?>
		                                	<?= $row ?>
										<? endforeach; ?>
					                <? endif; ?>



									<? if (false): ?>
                                    <? foreach($basket as $b) : ?>
                                    <?php $item = $b['data']; ?>
									<?php
                                    $lnk = '/';
                                    if($b['cid'] == 3) $lnk .= 'parketnaya_doska/';
                                    if($b['cid'] == 4) $lnk .= 'plintus/';
                                    if($b['cid'] == 5) $lnk .= 'laminat/';
                                    ?>	
                                        <tr>
                                        <? if($b['cid'] == 3) : ?>
											<td><img src="/<?=$item->img1; ?>" height="155" width="220" alt=""></td>
											<td class="desc">
												<a href="<?=$lnk.$item->brand->alias.'-'.$item->wood->alias.'-'.$item->id.'-id'; ?>" class="title"><?=$item->brand->name.' '.$item->wood->name.' '.$item->name; ?></a>
												<p><?=$item->wood->name.' '.$item->name.' '/*.$item->otbor->name*/.' '.$item->otdelka->name.' '.$item->size.'мм'  ?></p>
											</td>
                                        <? elseif($b['cid'] == 4) : ?>
											<td><img src="/<?=$item->img; ?>" height="155" width="220" alt=""></td>
											<td class="desc">
												<a href="<?=$lnk.$item->brand->alias.'-'.$item->wood->alias.'-'.$item->id.'-id'; ?>" class="title"><?=$item->brand->name.' '.$item->wood->name.' '.$item->name; ?></a>
												<p><?=$item->wood->name.' '.$item->name.' '.$item->plintus_type->name.' '.$item->otdelka->name.' '.$item->plintus_height->name.'мм'  ?></p>
											</td>
                                        <? elseif($b['cid'] == 5) : ?>
											<td><img src="/<?=$item->img1; ?>" height="155" width="220" alt=""></td>
											<td class="desc">
												<a href="<?=$lnk.$item->brand->alias.'-'.$item->wood->alias.'-'.$item->id.'-id'; ?>" class="title"><?=$item->brand->name.' '.$item->wood->name.' '.$item->name; ?></a>
												<p><?=$item->wood->name.' '.$item->name.' '.$item->laminat_type->name.' '.$item->load_class->name.' класс '.$item->size.'мм'  ?></p>
											</td>
	                                    <? else : ?>
		                                    <td><img src="/<?=isset($item->img) ? $item->img : $item->img1; ?>" height="155" width="220" alt=""></td>
											<td class="desc">
												<a href="<?=$lnk.$item->brand->alias.'-'.$item->wood->alias.'-'.$item->id.'-id'; ?>" class="title"><?=$item->name; ?></a>
												<p><?=$item->name.' '.$item->size.'мм'  ?></p>
											</td>
                                        <? endif; ?>
											<td>
												<div class="kolvo-box">
													<button type="button" class="minus <? if($b['num'] == 1) echo 'dis-minus'; ?>">-</button>
													<span class="text-input">
														<input type="text" value="<?=$b['num']; ?>" class="text" name="num[<?=$b['id'] ?>]" />
                                                        
													</span>
													<button type="button" class="plus <? if($b['num'] > 998) echo 'dis-plus'; ?>">+</button>
                                                    <input type="hidden" class="b_price" name="bprice" value="<?=round($b['price'],0) ?>" />
												</div>
											</td>
											<td><strong><?=number_format(round($b['price'],0),0,',',' ') ?> р. м2</strong></td>
											<td><strong><?=number_format(round($b['price'],0)*$b['num'],0,',',' ') ?> р.</strong></td>
											<td><a href="/basket/delete_basket/<?=$b['cid']; ?>/<?=$item->id; ?>"><button type="button" class="del">x</button></a></td>
										</tr>

										<? endforeach; ?>
										<? endif; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="itogo">
                            <?php 
                                $sum = 0;
                                foreach($basket as $b)
                                {
                                    $sum += round($b['price'],0)*$b['num'];
                                }                                
                            ?>
							<strong class="price-itogo">Итого: <?=number_format($sum,0,',',' ') ?> <strong class="rub">руб.</strong></strong>
							<? if (isset($lastCatalogLink)): ?>
								<a href="<?= $lastCatalogLink ?>" class="pereschet continue">Продолжить покупки</a>
							<? endif; ?>
							<a href="" onclick="recheckOrder(); return false;" class="pereschet">Пересчитать</a>
						</div>
						<div class="row requed-row">
							<div class="label-wrap">
								<label for="inp01">Ваше имя <strong class="req">*</strong></label>
                                <? if($err == 1) : ?><span class="lab-info" style="color: red;">Ошибка: укажите имя!</span><? endif; ?>
							</div>
							<div class="text-wrap">
								<span class="text-input">
									<input name="name" id="inp01" type="text" class="text">
								</span>
							</div>
						</div>
						<div class="row requed-row">
							<div class="label-wrap">
								<label for="inp02" style="padding-top:0;">Контактный телефон <strong class="req">*</strong></label>
                                <? if($err == 2) : ?><span class="lab-info" style="color: red;">Ошибка: укажите телефон!</span><? endif; ?>
							</div>
							<div class="text-wrap">
								<span class="text-input">
									<input name="phone" id="inp02" type="text" class="text">
								</span>
							</div>
						</div>
						<div class="row requed-row">
							<div class="label-wrap">
								<label for="inp03">E-mail <strong class="req">*</strong></label>
                                <? if($err == 3) : ?><span class="lab-info" style="color: red;">Ошибка: неверный email адрес!</span><? endif; ?>
							</div>
							<div class="text-wrap">
								<span class="text-input">
									<input name="email" id="inp03" type="text" class="text">
								</span>
							</div>
						</div>
						<div class="row">
							<div class="wrap-type">
								<div class="label-wrap">
									<label for="txt01">Доставить по адресу</label>
									<span class="lab-info"></span>
								</div>
								<div class="text-wrap">
									<span class="textarea-wrap">
										<textarea name="adress" id="txt01" cols="1" rows="3"></textarea>
									</span>
								</div>
							</div>
						</div>
						<div class="row last-row">
							<div class="wrap-type">
								<div class="label-wrap">
									<label for="txt02">Ваши пожелания</label>
									<span class="lab-info"></span>
								</div>
								<div class="text-wrap">
									<span class="textarea-wrap">
										<textarea name="dop_info" id="txt02" cols="1" rows="3"></textarea>
									</span>
								</div>
							</div>
							<div class="submit-wrap">
								<button class="green-button-40" onclick="sendOrder()">Отправить заказ</button>
								<span class="form-help">Поля обязательные для заполнения</span>
							</div>
						</div>
					</form>
				</div>
                    <? else : ?>
                        <? if($err == '10') : ?>
                            <div class="boxed"><h2>Ваш заказ принят! Наш оператор свяжется с вами в ближайшее время.</h2></div>
                        <? else : ?>
                            <div class="boxed"><h2>Ваша корзина пуста!</h2></div>
                        <? endif; ?>
                    <? endif; ?>
				
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left2',$left); ?>
    <? $this->load->view('templates/front/include/right2',$right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer',$footer); ?>

	<script>
	$('.right-sidebar > .cat-nav-sect').slice(-2).find(".cat-nav").stop().slideToggle(function(){
		$(this).closest(".cat-nav-sect").toggleClass("cat-nav-closed")
	});

	function recheckOrder () {
		document.orderForm.action = '/basket/recheck_order';
		document.orderForm.submit();
	}

	function sendOrder () {
		document.orderForm.action = '/basket/save_order';
		document.orderForm.submit();
	}

	$('#amount').on('input', function() {
		minusButton = $(this).closest(".kolvo-box").find(".minus");
		plusButton = $(this).closest(".kolvo-box").find(".plus");
		amount = +$(this).val();
		if (amount < 1) {
			$(this).val(1);
			amount = 1;
		}
		if (amount > 999) {
			$(this).val(999);
			amount = 999;
		}

		if (amount > 1 && amount < 999) {
			$(minusButton).attr('class', 'minus');
			$(plusButton).attr('class', 'plus');
		} else if (amount == 1) {
			$(minusButton).attr('class', 'minus dis-minus');
			$(plusButton).attr('class', 'plus');
		} else if (amount == 999) {
			$(plusButton).attr('class', 'plus dis-plus');
			$(minusButton).attr('class', 'minus');
		}
	});

	$(".minus").click(function(){
		amount = $(this).closest(".kolvo-box").find("#amount").val();
		minusButton = $(this).closest(".kolvo-box").find(".minus");
		plusButton = $(this).closest(".kolvo-box").find(".plus");
		amount = +amount;
		if (amount > 1) {
			$(this).closest(".kolvo-box").find("#amount").val(--amount);
			// changeButtonsStyle($(this).closest(".kolvo-box"));

			if (amount > 1 && amount < 999) {
				$(minusButton).attr('class', 'minus');
				$(plusButton).attr('class', 'plus');
			} else if (amount == 1) {
				$(minusButton).attr('class', 'minus dis-minus');
				$(plusButton).attr('class', 'plus');
			} else if (amount == 999) {
				$(plusButton).attr('class', 'plus dis-plus');
				$(minusButton).attr('class', 'minus');
			}
		}
	});
	$(".plus").click(function(){
		amount = $(this).closest(".kolvo-box").find("#amount").val();
		minusButton = $(this).closest(".kolvo-box").find(".minus");
		plusButton = $(this).closest(".kolvo-box").find(".plus");
		amount = +amount;		
		if (+amount < 999) {
			$(this).closest(".kolvo-box").find("#amount").val(+(++amount));
			// changeButtonsStyle($(this).closest(".kolvo-box"));

			if (amount > 1 && amount < 999) {
				$(minusButton).attr('class', 'minus');
				$(plusButton).attr('class', 'plus');
			} else if (amount == 1) {
				$(minusButton).attr('class', 'minus dis-minus');
				$(plusButton).attr('class', 'plus');
			} else if (amount == 999) {
				$(plusButton).attr('class', 'plus dis-plus');
				$(minusButton).attr('class', 'minus');
			}
		}
	});


	</script>