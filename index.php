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

		<link rel="stylesheet" type="text/css" href="css/tooltip.css" />



		
		<link rel="stylesheet" type="text/css" href="FullscreenForm/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="FullscreenForm/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="FullscreenForm/css/component.css" />
		<link rel="stylesheet" type="text/css" href="FullscreenForm/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="FullscreenForm/css/cs-skin-boxes.css" />
		<script src="FullscreenForm/js/modernizr.custom.js"></script>

		<script type="text/javascript" src="../../8087/js/plugin-slider.js"></script>
		<script type="text/javascript" src="../../8087/js/plugin-slider-2.js"></script>



		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="css/layout.min.css" media="all" />
	</head>
	<body>
		<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '124413210996708',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
		<div id="container" class="container intro-effect-push">
			<!-- Top Navigation -->
			<!--hola-->
			
			
			
			<div class="top-logo">
				<a href="index.html"></a>
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
				
				<section class="menu-wrap">
				<nav class="menu" id="menu">
					<div class="icon-list">
						<label class="label">Dejanos lo que pensaste de nosotros!</label>

						<form>
	<ol>
	<li>
	<span>
		<label>What's your name?</label>
		<input type='text' placeholder='Horacio Gutierrez' required>
</span>
	</li>
	<li>
	<span>
		<label>What's your e-mail?</label>
		<input type='email' placeholder='horacio@Gutierrez.com' required>
</span>
	</li>
	<li>
	<span>
		<label>What you thought of us</label>
		<textarea placeholder='Describe here...'></textarea>
	</span>
	</li>


	<li>
	<span>
		<label>Describe how do you think we could improve this?</label>
		<textarea placeholder='Describe here...'></textarea>
		</span>
	</li>
	
	
	</ol>
	</form>

					</div>
				</nav>
				<button class="menu-button-slider" id="open-button">Open Menu</button>
				<button class="close-button-slider" id="close-button">Close Menu</button>
			</section>

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
					<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
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
			
			$('.sub-nav-icon').find('span').click(function(){
				$('.menu-wrap').toggle("slow");
				$('.menu-bar').toggleClass("animation");
				

			});

$('.close-button').css("transform", "translateX(-350px)");

			$('.menu-bar').find('a').click(function(event){
				$('#h1-title').fadeOut();
				$('#h2-title').fadeOut();
				$('.top-navigation').fadeOut();
				var opcion = $(this).text();

				

				$('.main-content').fadeOut();
				$('.fullscreenForm').fadeOut();
				




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
						if (opcion=="Contacto" || opcion=="Portfolio") {$('header').prepend(result)} else{$('.main-content').append(result)};
					

					
					
						
					}




				});

			});

			
			




			</script>
			<script type="text/javascript">
				(function() {

	var bodyEl = document.body,
		content = document.querySelector( '.content-wrap' ),
		openbtn = document.getElementById( 'open-button' ),
		closebtn = document.getElementById( 'close-button' ),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target itÂ´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	init();

})();


			</script>
<script type="text/javascript">
	
/**
 * Dragdealer.js 0.9.8
 * http://github.com/skidding/dragdealer
 *
 * (c) 2010+ Ovidiu Cherecheș
 * http://skidding.mit-license.org
 */

(function (root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(factory);
  } else {
    // Browser globals
    root.Dragdealer = factory();
  }
}(this, function () {

var Dragdealer = function(wrapper, options) {
  /**
   * Drag-based component that works around two basic DOM elements.
   *
   *   - The wrapper: The top-level element with the .dragdealer class. We
   *                  create a Dragdealer instance with the wrapper as the
   *                  first constructor parameter (it can either receive the ID
   *                  of the wrapper, or the element itself.) The wrapper
   *                  establishes the dragging bounds.
   *
   *   - The handle: A child of the wrapper element, div with a required
   *                 .handle class (may be overridden in options). This will be
   *                 the dragged element, constrained by the wrapper's bounds.
   *
   *
   * The handle can be both smaller or bigger than the wrapper.
   *
   *   - When the handle is smaller, Dragdealer will act as a regular slider,
   *     enabling the handle to be dragged from one side of the wrapper to
   *     another.
   *
   *   - When the handle is bigger, Dragdealer will act a mask for a draggable
   *     surface, where the handle is the draggable surface contrained by the
   *     smaller bounds of the wrapper. The drag action in this case is used
   *     to reveal and "discover" partial content at a time.
   *
   *
   * Simple usage:
   *
   *   // JavaScript
   *   new Dragdealer('simple-slider');
   *
   *   <!-- HTML -->
   *   <div id="simple-slider" class="dragdealer">
   *     <div class="handle">drag me</div>
   *   </div>
   *
   *
   * The second parameter of the Dragdealer constructor is an object used for
   * specifying any of the supported options. All of them are optional.
   *
   *   - bool disabled=false: Init Dragdealer in a disabled state. The handle
   *                          will have a .disabled class.
   *
   *   - bool horizontal=true: Enable horizontal dragging.
   *
   *   - bool vertical=false: Enable vertical dragging.
   *
   *   - number x=0: Initial horizontal (left) position. Accepts a float number
   *                 value between 0 and 1. Read below about positioning in
   *                 Dragdealer.
   *
   *   - number y=0: Initial vertical (top) position. Accepts a float number
   *                 value between 0 and 1. Read below about positoning in
   *                 Dragdealer.
   *
   *   - number steps=0: Limit the positioning of the handle within the bounds
   *                     of the wrapper, by defining a virtual grid made out of
   *                     a number of equally-spaced steps. This restricts
   *                     placing the handle anywhere in-between these steps.
   *                     E.g. setting 3 steps to a regular slider will only
   *                     allow you to move it to the left, to the right or
   *                     exactly in the middle.
   *
   *   - bool snap=false: When a number of steps is set, snap the position of
   *                      the handle to its closest step instantly, even when
   *                      dragging.
   *
   *   - bool slide=true: Slide handle after releasing it, depending on the
   *                      movement speed before the mouse/touch release. The
   *                      formula for calculating how much will the handle
   *                      slide after releasing it is defined by simply
   *                      extending the movement of the handle in the current
   *                      direction, with the last movement unit times four (a
   *                      movement unit is considered the distance crossed
   *                      since the last animation loop, which is currently
   *                      25ms.) So if you were to drag the handle 50px in the
   *                      blink of an eye, it will slide another 200px in the
   *                      same direction. Steps interfere with this formula, as
   *                      the closest step is calculated before the sliding
   *                      distance.
   *
   *   - bool loose=false: Loosen-up wrapper boundaries when dragging. This
   *                       allows the handle to be *slightly* dragged outside
   *                       the bounds of the wrapper, but slides it back to the
   *                       margins of the wrapper upon release. The formula for
   *                       calculating how much the handle exceeds the wrapper
   *                       bounds is made out of the actual drag distance
   *                       divided by 4. E.g. Pulling a slider outside its
   *                       frame by 100px will only position it 25px outside
   *                       the frame.
   *
   *   - number top=0: Top padding between the wrapper and the handle.
   *
   *   - number bottom=0: Bottom padding between the wrapper and the handle.
   *
   *   - number left=0: Left padding between the wrapper and the handle.
   *
   *   - number right=0: Right padding between the wrapper and the handle.
   *
   *   - fn callback(x, y): Called when releasing handle, with the projected
   *                        x, y position of the handle. Projected value means
   *                        the value the slider will have after finishing a
   *                        sliding animation, caused by either a step
   *                        restriction or drag motion (see steps and slide
   *                        options.) This implies that the actual position of
   *                        the handle at the time this callback is called
   *                        might not yet reflect the x, y values received.
   *
   *   - fn animationCallback(x, y): Called every animation loop, as long as
   *                                 the handle is being dragged or in the
   *                                 process of a sliding animation. The x, y
   *                                 positional values received by this
   *                                 callback reflect the exact position of the
   *                                 handle DOM element, which includes
   *                                 exceeding values (even negative values)
   *                                 when the loose option is set true.
   *
   *   - string handleClass='handle': Custom class of handle element.
   *
   *   - bool css3=true: Use css3 transform in modern browsers instead of
   *                     absolute positioning.
   *
   *   - fn customRequestAnimationFrame: Provide custom requestAnimationFrame
   *                                     function (used in tests).
   *   - fn customCancelAnimationFrame: Provide custom cancelAnimationFrame
   *                                    function (used in tests).
   *
   * Dragdealer also has a few methods to interact with, post-initialization.
   *
   *   - disable: Disable dragging of a Dragdealer instance. Just as with the
   *              disabled option, the handle will receive a .disabled class
   *
   *   - enable: Enable dragging of a Dragdealer instance. The .disabled class
   *             of the handle will be removed.
   *
   *   - reflow: Recalculate the wrapper bounds of a Dragdealer instance, used
   *             when the wrapper is responsive and its parent container
   *             changed its size, or after changing the size of the wrapper
   *             directly.
   *
   *   - getValue: Get the value of a Dragdealer instance programatically. The
   *               value is returned as an [x, y] tuple and is the equivalent
   *               of the (projected) value returned by the regular callback,
   *               not animationCallback.
   *
   *   - getStep: Same as getValue, but the value returned is in step
   *              increments (see steps option)
   *
   *   - setValue(x, y, snap=false): Set the value of a Dragdealer instance
   *                                 programatically. The 3rd parameter allows
   *                                 to snap the handle directly to the desired
   *                                 value, without any sliding transition.
   *
   *   - setStep(x, y, snap=false): Same as setValue, but the value is received
   *                                in step increments (see steps option)
   *
   *
   * Positioning in Dragdealer:
   *
   *   Besides the top, bottom, left and right paddings, which represent a
   *   number of pixels, Dragdealer uses a [0, 1]-based positioning. Both
   *   horizontal and vertical positions are represented by ratios between 0
   *   and 1. This allows the Dragdealer wrapper to have a responsive size and
   *   not revolve around a specific number of pixels. This is how the x, y
   *   options are set, what the callback args contain and what values the
   *   setValue method expects. Once picked up, the ratios can be scaled and
   *   mapped to match any real-life system of coordinates or dimensions.
   */
  this.options = this.applyDefaults(options || {});
  this.bindMethods();
  this.wrapper = this.getWrapperElement(wrapper);
  if (!this.wrapper) {
    return;
  }
  this.handle = this.getHandleElement(this.wrapper, this.options.handleClass);
  if (!this.handle) {
    return;
  }
  this.init();
  this.bindEventListeners();
};


Dragdealer.prototype = {
  defaults: {
    disabled: false,
    horizontal: true,
    vertical: false,
    slide: true,
    steps: 0,
    snap: false,
    loose: false,
    speed: 0.1,
    xPrecision: 0,
    yPrecision: 0,
    handleClass: 'handle',
    css3: true,
    activeClass: 'active',
    tapping: true
  },
  init: function() {
    if (this.options.css3) {
      triggerWebkitHardwareAcceleration(this.handle);
    }
    this.value = {
      prev: [-1, -1],
      current: [this.options.x || 0, this.options.y || 0],
      target: [this.options.x || 0, this.options.y || 0]
    };
    this.offset = {
      wrapper: [0, 0],
      mouse: [0, 0],
      prev: [-999999, -999999],
      current: [0, 0],
      target: [0, 0]
    };
    this.change = [0, 0];
    this.stepRatios = this.calculateStepRatios();

    this.activity = false;
    this.dragging = false;
    this.tapping = false;

    this.reflow();
    if (this.options.disabled) {
      this.disable();
    }
  },
  applyDefaults: function(options) {
    for (var k in this.defaults) {
      if (!options.hasOwnProperty(k)) {
        options[k] = this.defaults[k];
      }
    }
    return options;
  },
  getWrapperElement: function(wrapper) {
    if (typeof(wrapper) == 'string') {
      return document.getElementById(wrapper);
    } else {
      return wrapper;
    }
  },
  getHandleElement: function(wrapper, handleClass) {
    var childElements,
        handleClassMatcher,
        i;
    if (wrapper.getElementsByClassName) {
      childElements = wrapper.getElementsByClassName(handleClass);
      if (childElements.length > 0) {
        return childElements[0];
      }
    } else {
      handleClassMatcher = new RegExp('(^|\\s)' + handleClass + '(\\s|$)');
      childElements = wrapper.getElementsByTagName('*');
      for (i = 0; i < childElements.length; i++) {
        if (handleClassMatcher.test(childElements[i].className)) {
          return childElements[i];
        }
      }
    }
  },
  calculateStepRatios: function() {
    var stepRatios = [];
    if (this.options.steps > 1) {
      for (var i = 0; i <= this.options.steps - 1; i++) {
        stepRatios[i] = i / (this.options.steps - 1);
      }
    }
    return stepRatios;
  },
  setWrapperOffset: function() {
    this.offset.wrapper = Position.get(this.wrapper);
  },
  calculateBounds: function() {
    // Apply top/bottom/left and right padding options to wrapper extremities
    // when calculating its bounds
    var bounds = {
      top: this.options.top || 0,
      bottom: -(this.options.bottom || 0) + this.wrapper.offsetHeight,
      left: this.options.left || 0,
      right: -(this.options.right || 0) + this.wrapper.offsetWidth
    };
    // The available width and height represents the horizontal and vertical
    // space the handle has for moving. It is determined by the width and
    // height of the wrapper, minus the width and height of the handle
    bounds.availWidth = (bounds.right - bounds.left) - this.handle.offsetWidth;
    bounds.availHeight = (bounds.bottom - bounds.top) - this.handle.offsetHeight;
    return bounds;
  },
  calculateValuePrecision: function() {
    // The sliding transition works by dividing itself until it reaches a min
    // value step; because Dragdealer works with [0-1] values, we need this
    // "min value step" to represent a pixel when applied to the real handle
    // position within the DOM. The xPrecision/yPrecision options can be
    // specified to increase the granularity when we're controlling larger
    // objects from one of the callbacks
    var xPrecision = this.options.xPrecision || Math.abs(this.bounds.availWidth),
        yPrecision = this.options.yPrecision || Math.abs(this.bounds.availHeight);
    return [
      xPrecision ? 1 / xPrecision : 0,
      yPrecision ? 1 / yPrecision : 0
    ];
  },
  bindMethods: function() {
    if (typeof(this.options.customRequestAnimationFrame) === 'function') {
      this.requestAnimationFrame = bind(this.options.customRequestAnimationFrame, window);
    } else {
      this.requestAnimationFrame = bind(requestAnimationFrame, window);
    }
    if (typeof(this.options.customCancelAnimationFrame) === 'function') {
      this.cancelAnimationFrame = bind(this.options.customCancelAnimationFrame, window);
    } else {
      this.cancelAnimationFrame = bind(cancelAnimationFrame, window);
    }
    this.animateWithRequestAnimationFrame = bind(this.animateWithRequestAnimationFrame, this);
    this.animate = bind(this.animate, this);
    this.onHandleMouseDown = bind(this.onHandleMouseDown, this);
    this.onHandleTouchStart = bind(this.onHandleTouchStart, this);
    this.onDocumentMouseMove = bind(this.onDocumentMouseMove, this);
    this.onWrapperTouchMove = bind(this.onWrapperTouchMove, this);
    this.onWrapperMouseDown = bind(this.onWrapperMouseDown, this);
    this.onWrapperTouchStart = bind(this.onWrapperTouchStart, this);
    this.onDocumentMouseUp = bind(this.onDocumentMouseUp, this);
    this.onDocumentTouchEnd = bind(this.onDocumentTouchEnd, this);
    this.onHandleClick = bind(this.onHandleClick, this);
    this.onWindowResize = bind(this.onWindowResize, this);
  },
  bindEventListeners: function() {
    // Start dragging
    addEventListener(this.handle, 'mousedown', this.onHandleMouseDown);
    addEventListener(this.handle, 'touchstart', this.onHandleTouchStart);
    // While dragging
    addEventListener(document, 'mousemove', this.onDocumentMouseMove);
    addEventListener(this.wrapper, 'touchmove', this.onWrapperTouchMove);
    // Start tapping
    addEventListener(this.wrapper, 'mousedown', this.onWrapperMouseDown);
    addEventListener(this.wrapper, 'touchstart', this.onWrapperTouchStart);
    // Stop dragging/tapping
    addEventListener(document, 'mouseup', this.onDocumentMouseUp);
    addEventListener(document, 'touchend', this.onDocumentTouchEnd);

    addEventListener(this.handle, 'click', this.onHandleClick);
    addEventListener(window, 'resize', this.onWindowResize);

    this.animate(false, true);
    this.interval = this.requestAnimationFrame(this.animateWithRequestAnimationFrame);

  },
  unbindEventListeners: function() {
    removeEventListener(this.handle, 'mousedown', this.onHandleMouseDown);
    removeEventListener(this.handle, 'touchstart', this.onHandleTouchStart);
    removeEventListener(document, 'mousemove', this.onDocumentMouseMove);
    removeEventListener(this.wrapper, 'touchmove', this.onWrapperTouchMove);
    removeEventListener(this.wrapper, 'mousedown', this.onWrapperMouseDown);
    removeEventListener(this.wrapper, 'touchstart', this.onWrapperTouchStart);
    removeEventListener(document, 'mouseup', this.onDocumentMouseUp);
    removeEventListener(document, 'touchend', this.onDocumentTouchEnd);
    removeEventListener(this.handle, 'click', this.onHandleClick);
    removeEventListener(window, 'resize', this.onWindowResize);
    this.cancelAnimationFrame(this.interval);
  },
  onHandleMouseDown: function(e) {
    Cursor.refresh(e);
    preventEventDefaults(e);
    stopEventPropagation(e);
    this.activity = false;
    this.startDrag();
  },
  onHandleTouchStart: function(e) {
    Cursor.refresh(e);
    // Unlike in the `mousedown` event handler, we don't prevent defaults here,
    // because this would disable the dragging altogether. Instead, we prevent
    // it in the `touchmove` handler. Read more about touch events
    // https://developer.mozilla.org/en-US/docs/Web/Guide/Events/Touch_events#Handling_clicks
    stopEventPropagation(e);
    this.activity = false;
    this.startDrag();
  },
  onDocumentMouseMove: function(e) {
    Cursor.refresh(e);
    if (this.dragging) {
      this.activity = true;
    }
  },
  onWrapperTouchMove: function(e) {
    Cursor.refresh(e);
    // Dragging on a disabled axis (horizontal or vertical) shouldn't prevent
    // defaults on touch devices. !this.activity denotes this is the first move
    // inside a drag action; you can drag in any direction after this point if
    // the dragging wasn't stopped
    if (!this.activity && this.draggingOnDisabledAxis()) {
      if (this.dragging) {
        this.stopDrag();
      }
      return;
    }
    // Read comment in `onHandleTouchStart` above, to understand why we're
    // preventing defaults here and not there
    preventEventDefaults(e);
    this.activity = true;
  },
  onWrapperMouseDown: function(e) {
    Cursor.refresh(e);
    preventEventDefaults(e);
    this.startTap();
  },
  onWrapperTouchStart: function(e) {
    Cursor.refresh(e);
    preventEventDefaults(e);
    this.startTap();
  },
  onDocumentMouseUp: function(e) {
    this.stopDrag();
    this.stopTap();
  },
  onDocumentTouchEnd: function(e) {
    this.stopDrag();
    this.stopTap();
  },
  onHandleClick: function(e) {
    // We keep track if any dragging activity has been made between the
    // mouse/touch down and up events; based on this we allow or cancel a click
    // event from inside the handle. i.e. Click events shouldn't be triggered
    // when dragging, but should be allowed when clicking still
    if (this.activity) {
      preventEventDefaults(e);
      stopEventPropagation(e);
    }
  },
  onWindowResize: function(e) {
    this.reflow();
  },
  enable: function() {
    this.disabled = false;
    this.handle.className = this.handle.className.replace(/\s?disabled/g, '');
  },
  disable: function() {
    this.disabled = true;
    this.handle.className += ' disabled';
  },
  reflow: function() {
    this.setWrapperOffset();
    this.bounds = this.calculateBounds();
    this.valuePrecision = this.calculateValuePrecision();
    this.updateOffsetFromValue();
  },
  getStep: function() {
    return [
      this.getStepNumber(this.value.target[0]),
      this.getStepNumber(this.value.target[1])
    ];
  },
  getValue: function() {
    return this.value.target;
  },
  setStep: function(x, y, snap) {
    this.setValue(
      this.options.steps && x > 1 ? (x - 1) / (this.options.steps - 1) : 0,
      this.options.steps && y > 1 ? (y - 1) / (this.options.steps - 1) : 0,
      snap
    );
  },
  setValue: function(x, y, snap) {
    this.setTargetValue([x, y || 0]);
    if (snap) {
      this.groupCopy(this.value.current, this.value.target);
      // Since the current value will be equal to the target one instantly, the
      // animate function won't get to run so we need to update the positions
      // and call the callbacks manually
      this.updateOffsetFromValue();
      this.callAnimationCallback();
    }
  },
  startTap: function() {
    if (this.disabled || !this.options.tapping) {
      return;
    }

    this.tapping = true;
    this.setWrapperOffset();

    this.setTargetValueByOffset([
      Cursor.x - this.offset.wrapper[0] - (this.handle.offsetWidth / 2),
      Cursor.y - this.offset.wrapper[1] - (this.handle.offsetHeight / 2)
    ]);
  },
  stopTap: function() {
    if (this.disabled || !this.tapping) {
      return;
    }
    this.tapping = false;

    this.setTargetValue(this.value.current);
  },
  startDrag: function() {
    if (this.disabled) {
      return;
    }
    this.dragging = true;
    this.setWrapperOffset();

    this.offset.mouse = [
      Cursor.x - Position.get(this.handle)[0],
      Cursor.y - Position.get(this.handle)[1]
    ];
    if (!this.wrapper.className.match(this.options.activeClass)) {
      this.wrapper.className += ' ' + this.options.activeClass;
    }
  },
  stopDrag: function() {
    if (this.disabled || !this.dragging) {
      return;
    }
    this.dragging = false;

    var target = this.groupClone(this.value.current);
    if (this.options.slide) {
      var ratioChange = this.change;
      target[0] += ratioChange[0] * 4;
      target[1] += ratioChange[1] * 4;
    }
    this.setTargetValue(target);
    this.wrapper.className = this.wrapper.className.replace(' ' + this.options.activeClass, '');
  },
  callAnimationCallback: function() {
    var value = this.value.current;
    if (this.options.snap && this.options.steps > 1) {
      value = this.getClosestSteps(value);
    }
    if (!this.groupCompare(value, this.value.prev)) {
      if (typeof(this.options.animationCallback) == 'function') {
        this.options.animationCallback.call(this, value[0], value[1]);
      }
      this.groupCopy(this.value.prev, value);
    }
  },
  callTargetCallback: function() {
    if (typeof(this.options.callback) == 'function') {
      this.options.callback.call(this, this.value.target[0], this.value.target[1]);
    }
  },
  animateWithRequestAnimationFrame: function (time) {
    if (time) {
      // using requestAnimationFrame
      this.timeOffset = this.timeStamp ? time - this.timeStamp : 0;
      this.timeStamp = time;
    } else {
      // using setTimeout(callback, 25) polyfill
      this.timeOffset = 25;
    }
    this.animate();
    this.interval = this.requestAnimationFrame(this.animateWithRequestAnimationFrame);
  },
  animate: function(direct, first) {
    if (direct && !this.dragging) {
      return;
    }
    if (this.dragging) {
      var prevTarget = this.groupClone(this.value.target);

      var offset = [
        Cursor.x - this.offset.wrapper[0] - this.offset.mouse[0],
        Cursor.y - this.offset.wrapper[1] - this.offset.mouse[1]
      ];
      this.setTargetValueByOffset(offset, this.options.loose);

      this.change = [
        this.value.target[0] - prevTarget[0],
        this.value.target[1] - prevTarget[1]
      ];
    }
    if (this.dragging || first) {
      this.groupCopy(this.value.current, this.value.target);
    }
    if (this.dragging || this.glide() || first) {
      this.updateOffsetFromValue();
      this.callAnimationCallback();
    }
  },
  glide: function() {
    var diff = [
      this.value.target[0] - this.value.current[0],
      this.value.target[1] - this.value.current[1]
    ];
    if (!diff[0] && !diff[1]) {
      return false;
    }
    if (Math.abs(diff[0]) > this.valuePrecision[0] ||
        Math.abs(diff[1]) > this.valuePrecision[1]) {
      this.value.current[0] += diff[0] * this.options.speed * this.timeOffset / 25;
      this.value.current[1] += diff[1] * this.options.speed * this.timeOffset / 25;
    } else {
      this.groupCopy(this.value.current, this.value.target);
    }
    return true;
  },
  updateOffsetFromValue: function() {
    if (!this.options.snap) {
      this.offset.current = this.getOffsetsByRatios(this.value.current);
    } else {
      this.offset.current = this.getOffsetsByRatios(
        this.getClosestSteps(this.value.current)
      );
    }
    if (!this.groupCompare(this.offset.current, this.offset.prev)) {
      this.renderHandlePosition();
      this.groupCopy(this.offset.prev, this.offset.current);
    }
  },
  renderHandlePosition: function() {

    var transform = '';
    if (this.options.css3 && StylePrefix.transform) {
      if (this.options.horizontal) {
        transform += 'translateX(' + this.offset.current[0] + 'px)';
      }
      if (this.options.vertical) {
        transform += ' translateY(' + this.offset.current[1] + 'px)';
      }
      this.handle.style[StylePrefix.transform] = transform;
      return;
    }

    if (this.options.horizontal) {
      this.handle.style.left = this.offset.current[0] + 'px';
    }
    if (this.options.vertical) {
      this.handle.style.top = this.offset.current[1] + 'px';
    }
  },
  setTargetValue: function(value, loose) {
    var target = loose ? this.getLooseValue(value) : this.getProperValue(value);

    this.groupCopy(this.value.target, target);
    this.offset.target = this.getOffsetsByRatios(target);

    this.callTargetCallback();
  },
  setTargetValueByOffset: function(offset, loose) {
    var value = this.getRatiosByOffsets(offset);
    var target = loose ? this.getLooseValue(value) : this.getProperValue(value);

    this.groupCopy(this.value.target, target);
    this.offset.target = this.getOffsetsByRatios(target);
  },
  getLooseValue: function(value) {
    var proper = this.getProperValue(value);
    return [
      proper[0] + ((value[0] - proper[0]) / 4),
      proper[1] + ((value[1] - proper[1]) / 4)
    ];
  },
  getProperValue: function(value) {
    var proper = this.groupClone(value);

    proper[0] = Math.max(proper[0], 0);
    proper[1] = Math.max(proper[1], 0);
    proper[0] = Math.min(proper[0], 1);
    proper[1] = Math.min(proper[1], 1);

    if ((!this.dragging && !this.tapping) || this.options.snap) {
      if (this.options.steps > 1) {
        proper = this.getClosestSteps(proper);
      }
    }
    return proper;
  },
  getRatiosByOffsets: function(group) {
    return [
      this.getRatioByOffset(group[0], this.bounds.availWidth, this.bounds.left),
      this.getRatioByOffset(group[1], this.bounds.availHeight, this.bounds.top)
    ];
  },
  getRatioByOffset: function(offset, range, padding) {
    return range ? (offset - padding) / range : 0;
  },
  getOffsetsByRatios: function(group) {
    return [
      this.getOffsetByRatio(group[0], this.bounds.availWidth, this.bounds.left),
      this.getOffsetByRatio(group[1], this.bounds.availHeight, this.bounds.top)
    ];
  },
  getOffsetByRatio: function(ratio, range, padding) {
    return Math.round(ratio * range) + padding;
  },
  getStepNumber: function(value) {
    // Translate a [0-1] value into a number from 1 to N steps (set using the
    // "steps" option)
    return this.getClosestStep(value) * (this.options.steps - 1) + 1;
  },
  getClosestSteps: function(group) {
    return [
      this.getClosestStep(group[0]),
      this.getClosestStep(group[1])
    ];
  },
  getClosestStep: function(value) {
    var k = 0;
    var min = 1;
    for (var i = 0; i <= this.options.steps - 1; i++) {
      if (Math.abs(this.stepRatios[i] - value) < min) {
        min = Math.abs(this.stepRatios[i] - value);
        k = i;
      }
    }
    return this.stepRatios[k];
  },
  groupCompare: function(a, b) {
    return a[0] == b[0] && a[1] == b[1];
  },
  groupCopy: function(a, b) {
    a[0] = b[0];
    a[1] = b[1];
  },
  groupClone: function(a) {
    return [a[0], a[1]];
  },
  draggingOnDisabledAxis: function() {
    return (!this.options.horizontal && Cursor.xDiff > Cursor.yDiff) ||
           (!this.options.vertical && Cursor.yDiff > Cursor.xDiff);
  }
};


var bind = function(fn, context) {
  /**
   * CoffeeScript-like function to bind the scope of a method to an instance,
   * the context of that method, regardless from where it is called
   */
  return function() {
    return fn.apply(context, arguments);
  };
};

// Cross-browser vanilla JS event handling

var addEventListener = function(element, type, callback) {
  if (element.addEventListener) {
    element.addEventListener(type, callback, false);
  } else if (element.attachEvent) {
    element.attachEvent('on' + type, callback);
  }
};

var removeEventListener = function(element, type, callback) {
  if (element.removeEventListener) {
    element.removeEventListener(type, callback, false);
  } else if (element.detachEvent) {
    element.detachEvent('on' + type, callback);
  }
};

var preventEventDefaults = function(e) {
  if (!e) {
    e = window.event;
  }
  if (e.preventDefault) {
    e.preventDefault();
  }
  e.returnValue = false;
};

var stopEventPropagation = function(e) {
  if (!e) {
    e = window.event;
  }
  if (e.stopPropagation) {
    e.stopPropagation();
  }
  e.cancelBubble = true;
};


var Cursor = {
  /**
   * Abstraction for making the combined mouse or touch position available at
   * any time.
   *
   * It picks up the "move" events as an independent component and simply makes
   * the latest x and y mouse/touch position of the user available at any time,
   * which is requested with Cursor.x and Cursor.y respectively.
   *
   * It can receive both mouse and touch events consecutively, extracting the
   * relevant meta data from each type of event.
   *
   * Cursor.refresh(e) is called to update the global x and y values, with a
   * genuine MouseEvent or a TouchEvent from an event listener, e.g.
   * mousedown/up or touchstart/end
   */
  x: 0,
  y: 0,
  xDiff: 0,
  yDiff: 0,
  refresh: function(e) {
    if (!e) {
      e = window.event;
    }
    if (e.type == 'mousemove') {
      this.set(e);
    } else if (e.touches) {
      this.set(e.touches[0]);
    }
  },
  set: function(e) {
    var lastX = this.x,
        lastY = this.y;
    if (e.clientX || e.clientY) {
      this.x = e.clientX;
      this.y = e.clientY;
    } else if (e.pageX || e.pageY) {
      this.x = e.pageX - document.body.scrollLeft - document.documentElement.scrollLeft;
      this.y = e.pageY - document.body.scrollTop - document.documentElement.scrollTop;
    }
    this.xDiff = Math.abs(this.x - lastX);
    this.yDiff = Math.abs(this.y - lastY);
  }
};


var Position = {
  /**
   * Helper for extracting position of a DOM element, relative to the viewport
   *
   * The get(obj) method accepts a DOM element as the only parameter, and
   * returns the position under a (x, y) tuple, as an array with two elements.
   */
  get: function(obj) {
    // Dragdealer relies on getBoundingClientRect to calculate element offsets,
    // but we want to be sure we don't throw any unhandled exceptions and break
    // other code from the page if running from in very old browser that doesn't
    // support this method
    var rect = {left: 0, top: 0};
    if (obj.getBoundingClientRect !== undefined) {
      rect = obj.getBoundingClientRect();
    }
    return [rect.left, rect.top];
  }
};


var StylePrefix = {
  transform: getPrefixedStylePropName('transform'),
  perspective: getPrefixedStylePropName('perspective'),
  backfaceVisibility: getPrefixedStylePropName('backfaceVisibility')
};

function getPrefixedStylePropName(propName) {
  var domPrefixes = 'Webkit Moz ms O'.split(' '),
      elStyle = document.documentElement.style;
  if (elStyle[propName] !== undefined) return propName; // Is supported unprefixed
  propName = propName.charAt(0).toUpperCase() + propName.substr(1);
  for (var i = 0; i < domPrefixes.length; i++) {
    if (elStyle[domPrefixes[i] + propName] !== undefined) {
      return domPrefixes[i] + propName; // Is supported with prefix
    }
  }
};

function triggerWebkitHardwareAcceleration(element) {
  if (StylePrefix.backfaceVisibility && StylePrefix.perspective) {
    element.style[StylePrefix.perspective] = '1000px';
    element.style[StylePrefix.backfaceVisibility] = 'hidden';
  }
};

var vendors = ['webkit', 'moz'];
var requestAnimationFrame = window.requestAnimationFrame;
var cancelAnimationFrame = window.cancelAnimationFrame;

for (var x = 0; x < vendors.length && !requestAnimationFrame; ++x) {
  requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
  cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] ||
                         window[vendors[x] + 'CancelRequestAnimationFrame'];
}

if (!requestAnimationFrame) {
  requestAnimationFrame = function (callback) {
    return setTimeout(callback, 25);
  };
  cancelAnimationFrame = clearTimeout;
}

return Dragdealer;

}));

</script>
<script type="text/javascript">
	new Dragdealer('image-carousel', {
  steps: 4,
  speed: 0.3,
  loose: true,
  requestAnimationFrame: true
});
</script>
<script src="js/fullscreenForm.js"></script>
	</body>
</html>
