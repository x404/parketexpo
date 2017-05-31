<footer>
		<div class="footer-top"></div>
		<div class="footer-box">
			<ul class="footer-nav">
				<li><a href="#">О компании</a></li>
				<li><a href="#">Оплата банковской картой</a></li>
				<li><a href="#">Вакансии</a></li>
				<li><a href="#">Выезд с образцами</a></li>
				<li><a href="#">Сообщить об ошибке</a></li>
			</ul>
			<div class="footer-soc">
				<span class="title">Поделиться ссылочкой</span>
				<div class="soc-item"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Freference%2Fplugins%2Flike&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></div>
				<div class="soc-item"><!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?99"></script>

<script type="text/javascript">
  VK.init({apiId: 3853975, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Like block will be -->
<div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "mini", height: 20});
</script></div>
				<div class="soc-item"><a href="https://twitter.com/share" class="twitter-share-button" data-text="Магазин Паркетной доски в Москве" data-lang="ru">Твитнуть</a></div>
				<div class="soc-item"><g:plusone></g:plusone></div>
			</div>
			<div class="footer-bottom">
				<a href="mailto:mailbox@parketexpo.ru" class="mailto">mailbox@parketexpo.ru</a>
				<span class="welkome">Время обработки страницы <strong>{elapsed_time}</strong> сек</span>
				<span class="copy">ParketExpo 2007-2013 &copy;</span>
			</div>
		</div>
		<a href="#" title="Отправить директору: жалобу, благодарность, совет" class="filin">
			<strong><img src="/img/images/img-filin.png" height="302" width="201" alt=""></strong>
			<span>Филин-Филину</span>
		</a>
	</footer>
</div>
<? if($data) : ?>
<? $item = $data[0]; ?>
<div class="popup-type slideshow-popup" id="gal-popup" style="left: 50%; margin-left: -463.5px; z-index: 1002; position: absolute; top: 200px; margin-top: 0px; display: block;">
	<span class="close"><a name="slideshow"></a></span>
	<div class="pop-holder">
		<div class="pop-slida">
			<div class="title-pop">
				<img src="/<?=$item->brand->logo; ?>" height="79" width="131" alt="" class="devo">
				<strong class="title-ite"><?=$item->matherial->name; ?> <?=$item->name; ?> <?=$item->otdelka->name; ?></strong>
				<a href="/remembered/remember/<?=$catalog_id; ?>/<?=$item->id ?>" class="remo">Запомнить</a>
			</div>
			<div class="gal-info">
				<div class="gal-price">
					<strong class="title">Цена</strong>
					<strong class="price"><?=$this->kurs->create_price($item,'catalog'); ?> <strong class="rub">руб. за кв.м.</strong></strong>
				</div>
				<ul class="tov-feat-list" id="itmcard">
											<li>Отделка поверхности <?=$item->otdelka->name; ?></li>
											<li>Толщина <?=$item->thickness->name; ?></li>
											<li>Ширина <?=$item->width->name; ?></li>
											<li>Длина <?=$item->length->name; ?> мм</li>
											<li>Размер <?=$item->size; ?> мм</li>
				</ul>
				<form action="/basket/insert_basket" class="spi-form" method="POST">
					<div class="row">
						<div class="kod-tov">
							<strong class="laba">Код товара</strong>
							<strong class="valua"><?=$catalog_id.'-'.$item->id.'-'.$item->brand->id ?></strong>
						</div>
						<div class="upaka">
							<strong class="laba">Упаковка</strong>
							<strong class="valua"><?=$item->m2; ?> м<sup>2</sup></strong>
						</div>
						<div class="kolva">
							<strong class="laba">Кол-во</strong>
							<span class="text-input">
								<input type="text" value="" class="text">
							</span>
						</div>
					</div>
                                        <input type="hidden" value="<?=$item->id; ?>" name="id" id="itid" />
                                        <input type="hidden" value="<?=$catalog_id; ?>" name="cid" />
                                        <input type="hidden" value="<?=$back_link; ?>" name="back_link" />
					<div class="row">
						<a href="<?=$link_id.'/'.$item->brand->alias.'-'.$item->matherial->alias.'-'.$item->id.'-id'; ?>" class="green-button-40">Посмотреть</a>
						<button onclick="this.parentNode.parentNode.submit();" class="gray-button-40">Заказать</button>
					</div>
					
				</form>
			</div>
			<div class="sk-big-galery">
				<ul id="pikame2" class="jcarousel-skin-pika big-galpic">
                <? foreach($data as $d) : ?>                                
					<li>
						<img src="/<?=$d->img1; ?>" onclick="build_info(<?=$d->id; ?>,<?=$catalog_id; ?>);" />
                        
					</li>
                <? endforeach; ?>
                                                
				</ul>
			</div>
			
		
		</div>
	</div>
</div>
<div class="lb_overlay js_lb_overlay" style="height: 100%; position: absolute; width: 100%; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 1001; background-color: white; opacity: 0.4; background-position: initial initial; background-repeat: initial initial;"></div>
<? endif; ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
      window.___gcfg = {
        lang: 'ru'
      };

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</body>
</html>