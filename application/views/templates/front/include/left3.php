<aside class="left-sidebar">
    <a href="#" class="cat-nav-title cat-nav-title-no-hover" onclick="return false"><span>Сортировка</span></a>
    <form action="" class="custom-form filter-form" onsubmit="return false;" id="link_creator">
    <?=$data; ?>
    </form>
    <? foreach($banners as $d) : ?>
		<? if($d->page_location == 1) : ?>
            <a href="<?=$d->url?>" class="text-banner">
				<img src="/img/upload/mini/<?=$d->picture ?>" width="211" alt="">
			</a>
    	<? endif; ?>
    <? endforeach; ?>
</aside>