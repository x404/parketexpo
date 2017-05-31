<ul class="cat-list<?= $catalog->options['num_photo'] < 2 ? ' plinto-listo fnbox' : '' ?>">
<? foreach ($catalog->items as $i => $item): ?>
    <li>
        <? if ($catalog->options['num_photo'] < 2): ?>
            <a href="/<?= $item->img ? $item->img : 'img/images/no_photo.jpg' ?>" class="image">
                <? if ($item->skidki): ?>
                    <img class="option" src="/img/images/bg-opt-sale-plint.png" height="92" width="93" />
                <? endif ?>
                <? if ($item->img): ?>
                    <img class="im" src="/<?= $item->img_mini ?>" 
                        alt="<?= $item->image_alt ?>" width="367" height="274" />
                <? else: ?>
                    <img class="im" src="/img/images/no_photo.jpg" 
                        alt="<?= $item->image_alt ?>" width="367" height="274" />
                <? endif ?>
            </a>
        <? else: ?>
            <div class="carouselo-c">
                <div class="slido-<?=$catalog->url_name?>-<?= $i ?>">
                    <? for($j = 0; $j != $catalog->options['num_photo']; $j++): ?>
                        <?
                            $img = 'img' . ($j+1);
                            $img_mini = $img . '_mini';
                        ?>
                        
                        <div class="slide">
                            <a href="/<?= $item->$img ? $item->$img : 'img/images/no_photo.jpg' ?>" 
                                class="image" rel="imgr-<?= $catalog->url_name ?>-<?= $i ?>" title="<?= $item->image_title ?>">
                        
                                <? if ($item->actsii): ?>
                                    <img src="/img/images/bg-opt-actia.png" height="92" 
                                        width="93" alt="" class="option">
                                <? endif ?>
                                <? if ($item->sales): ?>
                                    <img src="/img/images/bg-opt-rasprod.png" height="92" 
                                        width="93" alt="" class="option">
                                <? endif ?>
                                <? if ($item->skidki): ?>
                                    <img src="/img/images/bg-opt-sale.png" height="92" 
                                        width="93" alt="" class="option">
                                <? endif ?>

                                <? if ($item->$img): ?>
                                    <img class="im" src="/<?= $item->$img_mini ?>" 
                                        alt="<?= $item->image_alt ?> - <?= $j + 1 ?>" 
                                        width="367" height="274"/>
                                <? else: ?>
                                    <img class="im" src="/img/images/no_photo.jpg" 
                                        alt="<?= $item->image_alt ?> - <?= $j + 1 ?>" 
                                        width="367" height="274"/>
                                <? endif ?>
                            </a>
                        </div>
                    <? endfor ?>
                </div>
                <div class="clearfix"></div>
                <div class="thumbnails slido-pag-<?= $catalog->url_name ?>-<?= $i ?>"></div>
            </div>
        <? endif ?>

        <div class="item-desc">
            <div class="item-info">
                <a href="/<?= $item->link ?>" class="title">
                    <?= $item->title ?>
                </a>
                <strong class="devby">
                    <?= $item->devby ?>
                </strong>
                <span class="inf-text">
                    <?= $item->inf_text ?>
                </span>
            </div>

            <div class="price-wrap">
                <a href="/remembered/remember/<?= $catalog->id ?>/<?= $item->id ?>" class="rem">
                    Запомнить
                </a>
            </div>
            
            <strong class="price">
                <? if ($item->oldPrice): ?>
                    <strong class="old-price"><?= $item->oldPrice ?>
                        <?= $catalog->options['currency'] ?>
                    </strong>
                <? endif ?>
                <?= $item->price ?> <span><?= $catalog->options['currency'] ?></span>
            </strong>
            
            <form action="/basket/insert_basket" class="custom-form zak-form" method="POST">
                <div class="how">
                    <span class="laba">Кол-во</span>
                    <span class="text-input">
                        <input type="text" value="" class="text" name="num" />
                    </span>
                </div>

                <input type="hidden" value="<?= $item->id ?>" name="id" />
                <input type="hidden" value="<?= $catalog->id ?>" name="cid" />
                <input type="hidden" value="<?= $url ?>" name="back_link" />
                <input type="submit" value="Заказать" class="submit gray-button-26">
                
                <a href="/<?= $item->link ?>" class="submit green-button-26">
                    Посмотреть
                </a>
            </form>
        </div>
    </li>
<? endforeach ?>
</ul>

<? if ($catalog->options['num_photo'] > 2): ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            for(var i = 0; i < <?= count($catalog->items) ?>; i++) { 
                $(".slido-<?= $catalog->url_name ?>-" + i).carouFredSel({
                    items: 1,
                    scroll: {
                        fx: "crossfade"
                    },
                    auto: false, 
                    pagination: {
                        container: $(".slido-pag-<?= $catalog->url_name ?>-" + i), 
                        anchorBuilder : function(nr) { 
                            var src = $("img.im", this).attr("src"); 
                            var alt = $("img.im", this).attr("alt"); 
                            return '<img src="' + src + '" alt="' + alt + '"/>';
                        }
                    }
                });
            }
        });
    </script>
<? endif ?>