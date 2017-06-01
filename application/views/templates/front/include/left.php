<aside class="left-sidebar">
	<? if($data) : ?>
		<ul class="sub-nav">
			<? foreach($data as $d) : ?>
				<li<?=$d['current']; ?>>
					<a href="<?=$d['cat_url'] ?>" onclick="<? if($d['links']) : ?>return false;<? endif; ?>"><span><?=$d['title'] ?></span></a>
					<? if($d['links']) : ?>
					<ul>
						<? foreach($d['links'] as $button) : ?>
						<li><a href="<?=$button['url']; ?>"><span><?=$button['name']; ?></span></a></li>
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
			<?php if (isset($show_login_form) AND $show_login_form == 1): ?>
				<form action="#" class="login-form">
					<div class="row">
						<span class="text-input"><input type="text" placeholder="Логин" class="text"></span>
					</div>
					<div class="row">
						<span class="text-input"><input type="password" placeholder="Пароль" class="text"></span>
					</div>
					<div class="row">
						<input type="submit" value="Вход с паролем" class="submit green-button-26">
					</div>
				</form>
			<?php endif ?>
		</aside>