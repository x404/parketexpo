<aside class="right-sidebar"> 
			  
            <? if($global_parket) : ?>
            <div class="cat-nav-sect">
				<a href="#" class="cat-nav-title"><span><?=$global_parket['name'] ?></span></a>
				<strong class="razvern">Развернуть</strong>
				<ul class="cat-nav">
                <? for($i=0;$i!=8;$i++) : ?>
                    <? if($global_parket['items'][$i]) : ?>
					<li>
						<a href="<?=$global_parket['items'][$i]['link']; ?>">
							<img src="/img/images/cat-img0<?=$i+1 ?>.png" height="81" width="121" alt="">
							<span><em><?=$global_parket['items'][$i]['name']; ?></em></span>
						</a>
					</li>
                        <? endif; ?>
                    <? endfor; ?>
				</ul>
			</div>
            <? endif; ?>
            
            
            
            <? if($global_terras1) : ?>
            <div class="cat-nav-sect">
				<a href="#" class="cat-nav-title"><span><?=$global_terras1['name'] ?></span></a>
				<strong class="razvern">Развернуть</strong>
				<ul class="cat-nav">
                <? for($i=8;$i!=10;$i++) : ?>
                    <? if($global_terras1['items'][$i]) : ?>
					<li>
						<a href="<?=$global_terras1['items'][$i]['link']; ?>">
							<img src="/img/images/cat-img<? echo $i == '9' ? $i+1 : '0' . ($i+1); ?>.png" height="81" width="121" alt="">
							<span><em><?=$global_terras1['items'][$i]['name']; ?></em></span>
						</a>
					</li>
                        <? endif; ?>
                    <? endfor; ?>
				</ul>
			</div>
            <? endif; ?>
            
            
            <? if($global_terras2) : ?>
            <div class="cat-nav-sect">
				<a href="#" class="cat-nav-title"><span><?=$global_terras2['name'] ?></span></a>
				<strong class="razvern">Развернуть</strong>
				<ul class="cat-nav">
                <? for($i=10;$i!=12;$i++) : ?>
                    <? if($global_terras2['items'][$i]) : ?>
					<li>
						<a href="<?=$global_terras2['items'][$i]['link']; ?>">
							<img src="/img/images/cat-img<?=$i+1 ?>.png" height="81" width="121" alt="">
							<span><em><?=$global_terras2['items'][$i]['name']; ?></em></span>
						</a>
					</li>
                        <? endif; ?>
                    <? endfor; ?>
				</ul>
			</div>
            <? endif; ?>
            
            
            <? if($global_acsessuares) : ?>
            <div class="cat-nav-sect">
				<a href="#" class="cat-nav-title"><span><?=$global_acsessuares['name'] ?></span></a>
				<strong class="razvern">Развернуть</strong>
				<ul class="cat-nav">
                <? for($i=12;$i!=20;$i++) : ?>
                    <? if($global_acsessuares['items'][$i]) : ?>
					<li>
						<a href="<?=$global_acsessuares['items'][$i]['link']; ?>">
							<img src="/img/images/cat-img<?=$i+1 ?>.png" height="81" width="121" alt="">
							<span><em><?=$global_acsessuares['items'][$i]['name']; ?></em></span>
						</a>
					</li>
                        <? endif; ?>
                    <? endfor; ?>
				</ul>
			</div>
            <? endif; ?>
            
            
            <? if($global_him) : ?>
            <div class="cat-nav-sect">
				<a href="#" class="cat-nav-title"><span><?=$global_him['name'] ?></span></a>
				<strong class="razvern">Развернуть</strong>
				<ul class="cat-nav">
                <? for($i=20;$i!=28;$i++) : ?>
                    <? if($global_him['items'][$i]) : ?>
					<li>
						<a href="<?=$global_him['items'][$i]['link']; ?>">
							<img src="/img/images/cat-img<?=$i+1 ?>.png" height="81" width="121" alt="">
							<span><em><?=$global_him['items'][$i]['name']; ?></em></span>
						</a>
					</li>
                        <? endif; ?>
                    <? endfor; ?>
				</ul>
			</div>
            <? endif; ?>
			<? if (isset($banners) AND !empty($banners)): ?>
	            <? foreach($banners as $d) : ?>
					<? if($d->page_location == 2) : ?>
			            <a href="<?=$d->url?>" class="text-banner">
							<img src="/img/upload/mini/<?=$d->picture ?>" width="215" alt="">
						</a>
			    	<? endif; ?>
			    <? endforeach; ?>         
			<? endif; ?>
            
		</aside>