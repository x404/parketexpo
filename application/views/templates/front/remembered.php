<?
    function rus_ending($osnovanie, $num)
    {
        $ends = array('one' => '', 'more' => 'а', 'many' => 'ов');
        $res = $num . ' ' . $osnovanie . $ends['many'];
        $n = $num % 100;

        if(($n < 10 OR $n > 20) AND $n % 10 == 1)
        {
            $res = $num . ' ' . $osnovanie . $ends['one'];    
        }
        else
        {
            if(($n < 10 OR $n > 20) AND ($n % 10 > 1 AND $n % 10 < 5))
            {
                $res = $num . ' ' . $osnovanie . $ends['more'];     
            }    
        }

        return $res;
    }
?>
<!DOCTYPE HTML>
<html lang=ru>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title>Запомненное</title>
    <meta name='description' content='Запомненное' />
	<meta name='keywords' content='Запомненное' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />   
	<link rel="stylesheet" href="/css/all.css">
	<link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/tip-violet/tip-violet.css">
	<link rel="stylesheet" href="/css/responsive.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="/js/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><link rel="stylesheet" href="/css/ie.css" /><![endif]-->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/placeholder.js"></script>
	<script src="/js/jcf.js"></script>
	<script src="/js/jcf.checkbox.js"></script>
	<script src="/js/jcf.select.js"></script>
	<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css">
	<script src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="/js/jquery.pikachoose.js"></script>
	<script src="/js/jquery.lightbox_me.js"></script>
    <script src="/js/jquery.poshytip.min.js"></script>
    <script src="/js/script_catalog.js"></script>
    <script src="/js/script.js"></script>    
</head>
<? $this->load->view('templates/front/include/header', $header); ?>
<? $this->load->view('templates/front/include/top_nav', $top_nav); ?>

	<div class="main remember_page">
		<div class="content-wrapper">
			<section class="content">
				<ul class="breadcrumbs">
		            <li><a href="/">Главная</a></li>
		            <li><strong>Запомненное</strong></li>
		        </ul>
                <div class="conf-panel">
					<div class="conf-buttons">
						<strong class="conf-title zapo-title">
							Запомнено <?=rus_ending('товар', count($data)); ?>
						</strong>
					</div>
				</div>
                <? if(isset($itemsList) AND !empty($itemsList)) : ?>
                	<?= $itemsList ?>
				<? endif; ?>
			</section>
		</div>
		
	<? $this->load->view('templates/front/include/left2', $left); ?>
    <? $this->load->view('templates/front/include/right2', $right); ?>	
	</div>
	<? $this->load->view('templates/front/include/footer', $footer); ?>