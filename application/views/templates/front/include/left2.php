		<aside class="left-sidebar">
			<? if (isset($banners) AND !empty($banners)): ?>
				<? foreach($banners as $d) : ?>
					<? if($d->page_location == 1) : ?>
			            <a href="<?=$d->url ?>" class="text-banner">
							<img src="/img/upload/mini/<?=$d->picture ?>" width="211" alt="">
						</a>
			    	<? endif; ?>
			    <? endforeach; ?>
			<? endif; ?>
			
			<? if (isset($left_menu) AND !empty($left_menu)): ?>
				<? echo $left_menu ?>
			<? endif; ?>
		</aside>