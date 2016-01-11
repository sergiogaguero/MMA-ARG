<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="images/page1_img6.png">
<head>
		<title>MMA-ARG</title>
		<meta charset="utf-8">
		<?php include "includeMenus.php"; ?>
</head>
<body id="page1">

<div class="main">
	<header>
		
		<?php include "includeMenus.php";?>
	<!-- BEGIN DOCK 1 ============================================================ 
		<div id="dock">
			<div class="dock-container">
				<a class="dock-item" href="index.html"><span>Home</span><img src="images/dock/home.png" alt="home" /></a> 
				<a class="dock-item" href="Novedades.html"><span>Novedades</span><img src="images/dock/email.png" alt="contact" /></a> 
				<a class="dock-item" href="Gallery.html"><span>Galeria de Fotos</span><img src="images/dock/portfolio.png" alt="portfolio" /></a> 
				<a class="dock-item" href="/foro"><span>Foro de MMA-ARG</span><img src="images/dock/music.png" alt="music" /></a> 
				<a class="dock-item" href="ListaPeleadores.php"><span>Ranking de Peleadores</span><img src="images/dock/video.png" alt="video" /></a> 
			</div><!-- end div .dock-container --
		</div><!-- end div .dock #dock -->
	<!-- END DOCK 1 ============================================================ -->

		<br/><br/><br/>
		<h1><a href="index.html" id="logo">MMA-ARG.COM.AR</a></h1>
	</header><div class="ic">More Website Templates at TemplateMonster.com!</div>

<!-- / header -->
<!-- content -->
	<section id="content">
		<div class="wrapper">
			<article class="col1">
				<h2 font-family: 'Bangers'>MMA-ARG</h2>
				<div class="pad_left1 pad_bot1">
					<div id="slider">
						<div id="for_img">
							<div id="nivo_slider">
								<img src="images/img1.jpg" alt="">
								<img src="images/img2.jpg" alt="">
								<img src="images/img3.jpg" alt="">
								<img src="images/img4.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="pad">
						<p><strong>MMA-ARG</strong> Novedades, eventos y lo último en Artes Marciales Mixtas en el pais.</p>
					</div>
				</div>
				<h2><span>Novedades</span></h2>
				<div class="pad_left1">
					<div class="pad_left1">
						<div class="wrapper pad_top1">
							<div class="col3">
								<div class="wrapper">
									<figure class="left marg_right1"><img src="images/page1_img3.png" alt=""></figure>
									<p class="cols"><strong class="font1">FORO</strong><br> Comparti las ultimas noticias, novedades y experiencias en nuestro foro dedicado a las Artes Marciales Mixtas en el país.</p>
								</div>
							</div>
							<div class="col3 pad_left2">
								<div class="wrapper">
									<figure class="left marg_right1"><img src="images/page1_img5.png" alt=""></figure>
									<p class="cols"><strong class="font1">RANKING</strong><br>Encontra el listado mas completo de todos los peleadores de MMA argentinos, con sus respectivos records y estadisticas.</p>
								</div>
							</div>
						</div>
						<div class="wrapper">
							<div class="col3">
								<div class="wrapper">
									<figure class="left marg_right1"><img src="images/page1_img4.png" alt=""></figure>
									<div class="cols"><strong class="font1">EVENTOS</strong><br>Enterate antes que nadie de los próximos eventos a realizarce en el país</div>
								</div>
							</div>
						</div>
					</div>
				</div>
    		</article>
			<article class="col2">
				<h3>Ultimos Eventos</h3>
				<ul class="ul_works">
					<!-- SECCION VIDEOS -->
					<li><iframe width="256" height="170" 
						src="http://www.youtube.com/embed/ImF5G6uWam8?feature=player_detailpage" 
						frameborder="0" allowfullscreen></iframe></li>
					<li><iframe width="256" height="170" 
						src="http://www.youtube.com/embed/OQI1wdB0FhU?feature=player_detailpage" 
						frameborder="0" allowfullscreen></iframe></li>
					<li><iframe width="256" height="170" 
						src="http://www.youtube.com/embed/tbqGtPnNQXI?feature=player_detailpage" 
						frameborder="3" allowfullscreen></iframe></li>
					<!-- FIN VIDEOS -->
				
					<li> 
						<script width="256" height="300" charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
						new TWTR.Widget({
						  version: 2,
						  type: 'search',
						  search: '\"Argentina mma \"  OR \"mma arg\" OR from:MMA_ARG_com_ar ',
						  interval: 90000,
						  title: 'MMA argentina',
						  subject: 'MMA argentina',
						  width: 256,
						  height: 300,
						  theme: {
						    shell: {
						      background: '#010405',
						      color: '#ffffff'
						    },
						    tweets: {
						      background: '#ffffff',
						      color: '#444444',
						      links: '#ff0303'
						    }
						  },
						  features: {
						    scrollbar: true,
						    loop: true,
						    live: true,
						    behavior: 'default'
						  }
						}).render().start();
						</script>
						</li>	
					</ul>
    		</article>
		</div>
	</section>
<!-- / content -->
<!-- footer -->
<footer>
	
	<?php include "footer.php"; ?>
		
	</footer>
<!--#include file="footer.html"--><!-- / footer -->
</div>
<script type="text/javascript">
	$(window).load(function() {
	$('#nivo_slider').nivoSlider({
		effect:'fold', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
		slices:7,
		animSpeed:500,
		pauseTime:6000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:false, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:1, //Universal caption opacity
		beforeChange:function(){},
		afterChange:function(){},
		slideshowEnd:function(){} //Triggers after all slides have been shown
	});
});
</script>
<?php include "Stack.php"; ?>
</body>

</html>