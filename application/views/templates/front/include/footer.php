<div class="mobile-banners">
	<? foreach($banners as $d) : ?>
		<? if($d->page_location == 1) : ?>
			<a href="<?=$d->url?>" class="text-banner">
				<img src="/img/upload/mini/<?=$d->picture ?>" width="211" alt="">
			</a>
		<? endif; ?>
	<? endforeach; ?>
</div>


<footer>
		<div class="footer-top"></div>
		<div class="footer-box">
			<ul class="footer-nav">
				<li><a href="/company">О компании</a></li>
				<li><a href="/card_pay">Оплата банковской картой</a></li>
				<li><a href="/job">Вакансии</a></li>
				<li><a href="/shipping_samples">Выезд с образцами</a></li>
				<li><a href="/error_report">Сообщить об ошибке</a></li>
			</ul>
			<div class="footer-soc">
				<span class="title">Поделиться ссылочкой</span>

				<div class="flexbox">
					<div class="soc-item">
					<!-- 
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Freference%2Fplugins%2Flike&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
					</div>
					-->
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.parketexpo.ru%2F&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
					</div>
					<div class="soc-item"><!-- Put this script tag to the <head> of your page -->
						<script type="text/javascript" src="//vk.com/js/api/openapi.js?99"></script>

						<script type="text/javascript">
						  VK.init({apiId: 3853975, onlyWidgets: true});
						</script>

						<!-- Put this div tag to the place, where the Like block will be -->
						<div id="vk_like"></div>
						<script type="text/javascript">
						VK.Widgets.Like("vk_like", {type: "mini", height: 20});
						</script>
					</div>
					<div class="soc-item"><a href="https://twitter.com/share" class="twitter-share-button" data-text="Магазин Паркетной доски в Москве" data-lang="ru">Твитнуть</a></div>
					<div class="soc-item gplus"><g:plusone></g:plusone></div>
				</div>

			</div>
			<div class="footer-bottom">
				<a href="mailto:mailbox@parketexpo.ru" class="mailto">mailbox@parketexpo.ru</a>
				<span class="welkome">Добро пожаловать! Вы <strong><?php
					$this->load->library('kurs');
            		$options = $this->kurs->load_options();
            		echo $options['visits']+1;
            		$this->db->where('name','visits');
            		$this->db->update('options',array('value'=>$options['visits']+1));
            
				 ?></strong> посетитель</span>
				<span class="copy">ParketExpo 2007-2014 &copy;</span>
			</div>
		</div>
		<a href="/claims" title="Отправить директору: жалобу, благодарность, совет" class="filin">
			<strong><img src="/img/images/img-filin.png" height="302" width="201" alt=""></strong>
			<span>Филин-Филину</span>
		</a>
	</footer>
</div>


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