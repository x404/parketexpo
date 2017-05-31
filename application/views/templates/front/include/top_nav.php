	<script>
  var url = "<?=base_url(); ?>"; 
  var title = "Магазин паркетной доски в Москве"; 
  function addFavorite(a) {
    try {
      window.external.AddFavorite(url, title);
    }
    catch (e) {
      try {
        window.sidebar.addPanel (title, url, "");
        }
      catch (e) {
        if (typeof(opera)=="object") {
          a.rel = "sidebar";
          a.title = title;
          a.url = url;
          return true;
        }
        else {
          alert("Нажмите Ctrl+D для добавления в избранное");
        }
      }
    }
    return false;
          }
</script>
    <nav>
		<ul>
			<li><a onclick="addFavorite(this); return false;" href=""><span>Добавить<br/>в избранное</span></a></li>
			<li><a href="<?=$link[0]; ?>"><span></span></a></li>
			<li><a href="<?=$link[0]; ?>"><span>Наш магазин</span></a></li>
			<li><a href="<?=$link[2]; ?>"><span>Доставка</span></a></li>
			<li class="rasp"><a href="<?=$link[3]; ?>"><span>Распродажи</span></a></li>
			<li class="actii"><a href="<?=$link[4]; ?>"><span>Акции</span></a></li>
			<li class="cont"><a href="<?=$link[5]; ?>"><span>Контакты</span></a></li>
		</ul>
	</nav>