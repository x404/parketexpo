<body>
<div id="page-wrapper">
	<header>
		<div class="head-info-wrap">
			<div class="head-info">
				<div class="head-info-holder">
					<div class="head-contacts">
						<div class="mobile-trash">
							<a href="/basket" class="">Корзина</a>							
						</div>
						<div class="head-phones">
							<?= $phones ?>
						</div>
						<div class="head-grafik">
							<?= $timetable ?>
						</div>
					</div>
					<div class="head-icons">
						<?= $icons ?>
					</div>
				</div>
			</div>
		</div>
		<div class="logo">
			<a href="/">Паркет Экспо</a>
		</div>
		<div class="head-right">
			<div class="head-trash">
				<a href="" class="trash-title">Корзина</a>
				<div class="small-trash">
					<div class="trash-row">
						<span class="row-title">Товаров</span>
						<strong class="row-num row-num-red"><?= $basket['totalCount'] ?></strong>
					</div>
					<div class="trash-row">
						<span class="row-title">Сумма</span>
						<strong class="row-num"><?= $basket['totalPrice'] ?></strong>
					</div>
					<div class="trash-line"></div>
					<div class="memory">
						<a href="/remembered">Сравнить</a>
						<strong><?= $remembered ?></strong>
					</div>
				</div>
				<div class="big-trash">
					<div class="big-trash-holder">
						<div class="head-table">
							<? if ($basket) : ?>
                            	<?= $basket['list'] ?>
								<div class="stoim-wrap">
									<? if ($basket['count'] != $basket['totalCount']) : ?>
										<strong class="stoim-title">
											Показано <?= $basket['countRus'] ?> 
											из <?= $basket['totalCount'] ?>
										</strong>
									<? endif; ?>
									<strong class="stoim-title">Стоимость товаров</strong>
									<strong class="stoim-da"><?= $basket['totalPrice'] ?> р.</strong>
								</div>
								<a href="/basket" class="goto-trash">Перейти в корзину 
									<span>(Смотреть <?= $basket['totalCountRus'] ?>)</span>
								</a>
	                            <? else : ?>
		                            <span style="font-size: 12px;">
		                            	<strong>Ваша корзина пуста!</strong> 
		                            	Нажмите кнопку "заказать", чтобы добавить товар.
		                            </span>
                            <? endif; ?>
						</div>
					</div>
					<div class="big-trash-b"></div>
				</div>
			</div>
			<form id="search_form" action="/search" class="head-search">
				<span class="text-wrap text-input">
					<input type="text" name="q" placeholder="Код товара" class="text" />
				</span>
				<span class="submit-wrap">
					<input type="submit" value="Поиск" class="submit" />
				</span>
			</form>
            <script>
            
                $("#search_form").submit(function(e){
                    e.preventDefault();
                    var inp = $(this).find("input.text").val();
                    window.location.href = '/search/' + encodeSearch(inp);
                   
                    return false;
                });

                function encodeSearch(str){
                    str = str.replace(/[^а-яА-ЯA-Za-z0-9_-]+/g,' ');
                    return str.replace(/а/g,'_01').replace(/б/g,'_02').replace(/в/g,'_03').replace(/г/g,'_04').replace(/д/g,'_05').replace(/е/g,'_06').replace(/ё/g,'_07').replace(/ж/g,'_08').replace(/з/g,'_09').replace(/и/g,'_10').replace(/й/g,'_11').replace(/к/g,'_12').replace(/л/g,'_13').replace(/м/g,'_14').replace(/н/g,'_15').replace(/о/g,'_16').replace(/п/g,'_17').replace(/р/g,'_18').replace(/с/g,'_19').replace(/т/g,'_20').replace(/у/g,'_21').replace(/ф/g,'_22').replace(/х/g,'_23').replace(/ц/g,'_24').replace(/ч/g,'_25').replace(/ш/g,'_26').replace(/щ/g,'_27').replace(/ъ/g,'_28').replace(/ь/g,'_29').replace(/ы/g,'_30').replace(/э/g,'_31').replace(/ю/g,'_32').replace(/я/g,'_33').replace(/\s/g,'_34').replace(/-/g,'_35').replace(/А/g,'_01').replace(/Б/g,'_02').replace(/В/g,'_03').replace(/Г/g,'_04').replace(/Д/g,'_05').replace(/Е/g,'_06').replace(/Ё/g,'_07').replace(/Ж/g,'_08').replace(/З/g,'_09').replace(/И/g,'_10').replace(/Й/g,'_11').replace(/К/g,'_12').replace(/Л/g,'_13').replace(/М/g,'_14').replace(/Н/g,'_15').replace(/О'/g,'_16').replace(/П/g,'_17').replace(/Р/g,'_18').replace(/С/g,'_19').replace(/Т/g,'_20').replace(/У/g,'_21').replace(/Ф/g,'_22').replace(/Х/g,'_23').replace(/Ц/g,'_24').replace(/Ч/g,'_25').replace(/Ш/g,'_26').replace(/Щ/g,'_27').replace(/Ъ/g,'_28').replace(/Ь/g,'_29').replace(/Ы/g,'_30').replace(/Э/g,'_31').replace(/Ю/g,'_32').replace(/Я/g,'_33');
                    
                }
                
            </script>
		</div>
	</header>

	<button type="button" class="navbar-toggle">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>

	<div class="mobile-header">
		<div class="metro"><span>Профсоюзная</span></div>
		<div class="phones">
			<p>Телефоны в Москве</p>
			<a href="tel:84957199380" title="">8(495) <strong>719-93-80</strong></a>
			<a href="tel:84957486027" title="">8(495) <strong>748-60-27</strong></a>
		</div>
		<div class="email">
			<a href="mailto:malibox@parketexpo.ru">malibox@parketexpo.ru</a>
		</div>
		<div class="address">
			Нахимовский проспект, д.24 <br>
			Торговый комплекс "Экспострой", <br>
			Павильон 3, линия 14, место 498. 
		</div>
		<div class="contacts">
			<a href="#">Контакты</a>
			<p>Если потерялись, звоните, встретим!</p>
		</div>
	</div>