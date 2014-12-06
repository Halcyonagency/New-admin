<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOME || Halcyon Design</title>
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.js"></script>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/component.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<div id="main-container"> 

	<div id="menu-container">
		<a id="menu-a" href="#">
			<figure>
				<img src="http://placehold.it/350x150" alt="Logo Halcyon">
			</figure>
		</a>
		<nav class="cl-effect-18">
			<a href="#" id="NOSOTROS" class="click-a animated fadeInLeft ">NOSOTROS</a>
			<a href="#" id="PORTFOLIO" class="click-a animated fadeInLeft ">PORTFOLIO</a>
			<a href="#" id="BLOG" class=" click-a animated fadeInLeft ">BLOG</a>
			<a href="#" id="CONTACTO" class="click-a animated fadeInLeft ">CONTACTO</a>

			<script type="text/javascript">
				$('#menu-container').find('nav').find('a').click(function(){
					
					$(this).hide();
					var option= $(this).text();

					$(".click-a").not(document.getElementById(option)).delay(700).show();
					
					
				});
			</script>
		</nav>
		
		
	</div>
	<div id="slogan">
		<h1 class="animated fadeInDown" >Halcyon Agency</h1>
		<h2 class="animated fadeInDown">Making our own ways</h2>
		<script type="text/javascript">
			$('#menu-container').find('nav').find('a').click(function(){
				$('#slogan').css('opacity', 0.8);
			});
		</script>
	</div>
	<h2 id="selection-title" class=" animated fadeInDown">
		<script type="text/javascript">
			$('#menu-container').find('nav').find('a').click(function(){
				var opcion= $(this).text();
				$('#selection-title').empty();
				$('#selection-title').append(opcion).hide().delay(400).fadeIn();



			});
		</script>
	</h2>
	
	<div id="main-content">
	
	</div>

</div>
	
		<script type="text/javascript">
			$(document).ready(function(){

				$('#menu-container').find('nav').find('a').click(function(){
					

					$('#main-content').delay(1000).fadeIn();

					
				});


			});
		</script>
<!--<script type="text/javascript">
	$(document).ready(function(){

		$('#NOSOTROS').click(function(){
			$('#main-content').delay(600).addClass('animated fadeIn')
			$('#main-content').delay(600).fadeIn();
		});
	});

</script>-->
<!--</body>
</html>
-->


<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>HOME || Halcyon Agency</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.js"></script>
		<link rel="stylesheet" href="css/animate.css">
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="css/layout.min.css" media="all" />
	</head>
	<body>
		<div id="container" class="container intro-effect-push">
			<!-- Top Navigation -->
			<div class="top-logo">
				<a href="index.php"></a>
			</div>
			<div class="top-navigation clearfix">
				<a class="sub-nav-icon animated fadeInRight" href="#"><span>Dejanos un comentario!</span></a>
				<script type="text/javascript">

					$('.sub-nav-icon').find('span').mouseenter(function(){
    			$(this).addClass("animated");
						$(this).addClass("bounceInLeft");
					}).mouseleave(function(){
    			$(this).removeClass("animated");
						$(this).removeClass("bounceInLeft");
					});

				</script>



			</div>

			

			<header class="header">
				
				<nav class="menu-bar top cl-effect-18" id="menu-up">
						<a class="animated fadeInLeft" id="test" href="#">Nosotros</a>
						<a class="animated fadeInLeft" href="#">Portfolio</a>
						<a class="animated fadeInLeft" href="#">Blog</a>
						<a class="animated fadeInLeft" href="#">Contacto</a>
				</nav>


				<script type="text/javascript">

				var btn=document.getElementByClass("menu-bar");
btn.on('click', function(event) {
    event.preventDefault();
    
});
			</script>


				<div class="title" id="title">
					
					<h1 id="h1-title" class="animated fadeInDown">Halcyon Agency</h1>
					<h2 id="h2-title" class="animated fadeInDown">Thinking our own ways</h2>
				</div>
			</header>
			<nav class="menu-bar down cl-effect-18" id="menu-down">
						
						<a class="animated fadeInLeft" href="#">Nosotros</a>
						<a class="animated fadeInLeft" href="#">Portfolio</a>
						<a class="animated fadeInLeft" href="#">Blog</a>
						<a class="animated fadeInLeft" href="#">Contacto</a>
						
			</nav>
			<div class="title ">
				
				<h1 id="h1-second-title">Un poco sobre nuestra historia</h1>
				<p class="subline">Inspiración de una tarde</p>
				<p>by <strong>Horacio/Brian</strong> &#8212; <strong>Halcyon, el otro lado</strong> el <strong>May 21, 2014</strong></p>
			</div>
			<article class="content">
				<div>
					<p>Dos extraños que se conocen estudiando de repente sacan una agencia de la galera. En Halcyon todo es asi; acá se labura de forma espontánea manteniendo un nivel de profesionalismo adecuado.</p>
					<p>Pasamos de trabajar una tarde por semana en un depto a poder desarollar nuevos proyectos y ampliar el área de marketing y publicidad a cargo de Lu, que nos da una mano, y el área de creatividades que nos amplia ideas a otros horizontes con Cris.</p>
					<p>"...En halcyon creemos que un hambiente de poco stress y mucha creatividad es ideal para sacar al máximo las habilidades de cada uno de nosotros... por eso nos la pasamos boludeando.</p>
					<p>Pero cuando trabajamos, trabajamos con todo. Le ponemos nuestra mano a cada uno de nuestros proyectos para  destacarnos en usar diseños únicos.</p>
					<p>Le decimos NO! a las plantillas compradas; aca en Halcyon te aseguramos un diseño único y de calidad.</p>
					<p>Y si te copó, te venis y nos traes una birra de regalo."</p>
				</div>
			</article>
			<section class="related">
				<p>Y si te copó algo de lo que viste, capaz te interese: </p>
				<div><a href="#"><h4>Workflow de laburo</h4></a></div>
				<div><a href="#"><h4>Primera plantilla</h4></a></div>
			</section>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script>
			(function() {

				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());


				// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 1200 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
				window.addEventListener( 'scroll', scrollPage );
			})();
		</script>
		
<script type="text/javascript">

			$('.menu-bar').find('a').click(function(event){
				$('#h1-title').fadeOut();
				$('#h2-title').fadeOut();
				$('.top-navigation').fadeOut();
				var opcion = $(this).text();

				

				$('.main-content').fadeOut();
						
				




				$.ajax({
					url:"data/main-data/main-data.php",
					type:"POST",
					dataType: 'json',
            cache: false,
					data:{selection:opcion},
					success:function(result){
					
					$('header').delay(800).append("<div class='main-content animated fadeInLeft '>"+"<h1>"+opcion+"</h1>"+"</div>");

					$('header').find(".main-content").append("<h2 class='animated fadeInLeft big-title'>"+result+"</h2>");

						
					}



			




				});



				$.ajax({
					url:"data/main-data/main-data-"+opcion+".php",
					type:"POST",
					dataType: 'json',
            cache: false,
					data:{selection:opcion},
					success:function(result){

					$('.main-content').append(result);

					

						
					}




				});

			});

			
			




			</script>

	</body>
</html>
