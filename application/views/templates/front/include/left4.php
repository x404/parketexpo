<aside class="left-sidebar">

    <? if($data) : ?>
    <a class="cat-nav-title" href="#" onclick="return false"><span>Столярные изделия</span></a>
    <!-- <ul class="sub-nav sub-nav-strelkoi">
        <? foreach($data as $d) : ?>
		    <li <?=$d['isCurrent'] ? 'class="active"' : '';?>>
	            <a  href="<?=$d['url'];?>"><span><?=$d['cat']->caption;?></span></a>
		    </li>
        <? endforeach; ?>
    </ul> -->
        <ul class="sub-nav">
            <? foreach($data as $d) : ?>
	            <li <?/*=$d['isCurrent'] ? 'class="opened"' : '';*/?>>
					<a <?=$d['isCurrent'] ? 'class="fur_active"' : '';?> href="<?=$d['url']?>">
					<!-- <a <?=$d['isCurrent'] ? 'class="fur_active"' : '';?> href="<?=$d['url']?>" onclick="<?= $d['items'] ? 'return false' : '' ?>"> -->
						<span><?=$d['cat']->caption ?></span>
					</a>
					<? if(false/*$d['items']*/) : ?>
                    <ul>
						<? foreach($d['items'] as $item) : ?>
                        	<li <? if (isset($currentItem) AND $currentItem->id == $item->id) echo 'class="selected"'; ?>>
	                        	<a href="<?=$d['url'].'/'.$item->name.'-'.$item->id.'-id';?>">
	                        		<span><?=$item->caption; ?></span>
	                        	</a>
                        	</li>
                        <? endforeach; ?>
					</ul>
                    <? endif; ?>
				</li>
            <? endforeach; ?>
		</ul>
    <? endif; ?>

            <? foreach($banners as $d) : ?>
				<? if($d->page_location == 1) : ?>
		            <a href="<?=$d->url?>" class="text-banner">
						<img src="/img/upload/mini/<?=$d->picture ?>" width="211" alt="">
					</a>
		    	<? endif; ?>
		    <? endforeach; ?>
		</aside>