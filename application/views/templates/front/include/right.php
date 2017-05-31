<aside class="right-sidebar">
    <div class="i-want">
        <strong class="want-title">Я хочу узнать</strong>
        <div class="row">
            <select name="ss" id="s01" class="default">
                <option selected="true" value="">Выбрать вопрос</option>
                <? foreach($questions as $question) : ?>
                    <option value="<?=$question->url?>"><?=$question->caption?></option>
                <? endforeach; ?>
            </select>
        </div>
        <button class="submit" onclick="goToPage();">Узнать</button>
        <script type="text/javascript"> 
            var goToPage = function() {
                var qstn = document.getElementById("s01").value;
                if (qstn)
                    window.location.href = document.getElementById("s01").value;
            };
        </script>
    </div>
    <? foreach($banners as $d) : ?>
        <? if($d->page_location == 2) : ?>
            <a href="<?=$d->url?>" class="text-banner">
                <img src="/img/upload/mini/<?=$d->picture ?>" width="215" alt="">
            </a>
        <? endif; ?>
    <? endforeach; ?>
    <div class="tuda-hodi">
        <a href="/guide" class="tuda-title">Гид покупателя</a>
        <? if ($guides): ?>
            <ul class="tuda-list">
            <? foreach ($guides as $guide): ?>
                <li><a href="<?= $guide->url ?>"><?=$guide->caption ?></a></li>
            <? endforeach; ?>
            </ul>
            <a href="/guide" class="all-arts-link">Все статьи</a>
        <? endif; ?>
    </div>
    <div class="subscribe-form">
        <strong class="form-title">Слежение за ценой</strong>
        <p>Хотите узнать о снижении цены первым? </p>
        <div class="row">
            <input type="email" placeholder="E-mail" class="text" id="watch_price_email">
        </div>
        <button class="submit green-button-26" onclick="watch_price();">Подписаться</button>
    </div>
    <script type="text/javascript">
        function validateEmail(email) { 
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        } 
        function watch_price() {
            var email = document.getElementById('watch_price_email').value;
            if (!validateEmail(email)) {
                alert("Вы неправильно заполнили Email");
            }
            else 
            if (email) {
                window.location.href = "/watch_price?email=" + email;
            }
        }
    </script>
    <div class="widget-shadow">
        <strong class="widget-title">Популярное</strong>
        <? foreach ($popularCategories as $popularCategory): ?>
            <strong class="top-list-title"><?= $popularCategory->rus_name ?></strong>
            <ul class="top-list">
                <? foreach ($popularCategory->items as $item): ?>
                <li>
                <a href="<?= $item->url ?>">
                    <img title="<?= $item->picture_title ?>" 
                        alt="<?= $item->picture_alt ?>" 
                        src="<?= $item->picture_path ?>" 
                        height="71" 
                        width="82">
                    <span><?= $item->caption ?></span>
                </a>
                </li>
                <? endforeach ?>
            </ul>
        <? endforeach ?>
    </div>
</aside>