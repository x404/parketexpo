		<aside class="left-sidebar">
			<? if (isset($banners) AND !empty($banners)): ?>
				<? foreach($banners as $d) : ?>
					<? if($d->page_location == 1) : ?>
			            <a href="<?=$d->url ?>" class="text-banner">
							<img src="/img/upload/mini/<?=$d->picture ?>"
								width="211" alt="">
						</a>
			    	<? endif; ?>
			    <? endforeach; ?>
			<? endif; ?>
			
			<? if (isset($categories) AND !empty($categories)): ?>
				<ul class="sub-nav sub-nav-strelkoi">
			        <? foreach ($categories as $cat): ?>
			            <li <?= $cat->id === $category->id ? 'class="active"' : '' ?>>
			                <a href="<?= $url ?>/<?= $cat->url_name ?>">
			                	<span><?= $cat->caption ?></span>
			                </a>
			            </li>
			        <? endforeach; ?>
			    </ul>
			<? endif; ?>
		</aside>