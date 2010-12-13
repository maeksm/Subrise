/*  Bubble jquery plugin

	Version 0.0.1 Dec 10th 2010 (Subrise Version)
	This plugin will add bubbles on your site. 	
	
	Developed by Sammy Hubner for any bugs or questions email me at sammy@subrise.com
	
	values for bubble options are
	
	bubbleCount			: amount of instances of bubbles on screen
	bubbleTexture		: location of image file
	bubbleIndex			: position of z index
	minSize				: smallest bubble
	maxSize				: biggest bubble
	minSpeed			: lowest speed, negative value will make instance move upward
	maxSpeed			: highest speed, negative value will make instance move upward
	origin				: where the instances start "bottom" | "top"
	
	Example Usage :
	$(document).bubbleup({bubbleCount : 100, maxSpeed : -10});
	
	-or-
	
	$('#element').bubbleup({flakeCount : 50, maxSpeed : -5});
	
	-or with defaults-
	
	$(document).bubbleup();
	
	- To clear -
	$('#element').bubbleup('clear');
*/


(function($){
	$.bubbleup = function(element, options){
		var	defaults = {
				bubbleCount : 35,
				bubbleTexture : 'http://subrise.dev/wp-content/themes/subrise/images/des/bubble.png',
				bubbleIndex: 999999,
				minSize : 15,
				maxSize : 30,
				minSpeed : -2,
				maxSpeed : -3,
				origin: 'bottom' // bottom | top
			},
			options = $.extend(defaults, options),
			random = function random(min, max){
				return Math.round(min + Math.random()*(max-min)); 
			};
			
		$(element).data("bubbleup", this);			
			
		// Bubble object
		function Bubble(_x, _y, _size, _speed, _id)
		{
			// Bubble properties
			this.id = _id; 
			this.x  = _x;
			this.y  = _y;
			this.size = _size;
			this.speed = _speed;
			this.step = 0,
			this.stepSize = random(1,10) / 100;
			
			var bubbleMarkup = $(document.createElement("img")).attr({
																	'class'		: 'bubbleup-bubbles', 
																	'id' 		: 'bubble-' + this.id, 
																	'src'		: options.bubbleTexture, 
																	'width'		: this.size, 
																	'height'	: this.size}
																).css({
																	'width' 	: this.size, 
																	'height'	: this.size, 
																	'position'	: 'absolute', 
																	'top' 		: this.y, 
																	'left' 		: this.x, 
																	'zIndex' 	: options.bubbleIndex});
			
			if($(element).get(0).tagName === $(document).get(0).tagName){
				$('body').append(bubbleMarkup);
				element = $('body');
			}else{
				$(element).append(bubbleMarkup);
			}
				
			this.element = document.getElementById('bubble-' + this.id);
				
			// Update function, used to update the bubbles, and checks current bubble against bounds
			this.update = function(){
				this.y += this.speed;
					
				// TODO: add boundery top? Since snow falls down and bubbles float up
				// NOTE: elHeight and elWidth are element height and width
				if( ( this.y > (elHeight) - (this.size  + 6) ) && options.origin == 'top' ){
					this.reset();
				}
				
				if( ( this.y < (0) - (this.size  + 6) ) && options.origin == 'bottom' ){
					this.reset();
				}	
					this.element.style.top = this.y + 'px';
					this.element.style.left = this.x + 'px';
					
					this.step += this.stepSize;
					this.x += Math.cos(this.step);
					
					if(this.x > (elWidth) - widthOffset || this.x < widthOffset){
						this.reset();
					}
				}
				
				// Resets the bubble once it reaches one of the bounds set
				// TODO: create point-of-origin option (top | bottom)
				this.reset = function(){
					this.x = random(widthOffset, elWidth - widthOffset);
					this.stepSize = random(1,10) / 100;
					this.size = random((options.minSize * 100), (options.maxSize * 100)) / 100;
					this.speed = random(options.minSpeed, options.maxSpeed);
					if (options.origin == 'top')
						this.y = 0;
					else
						this.y = elHeight - this.size - 5;
				}
			}
		
			// Private vars
			var bubbles = [],
				bubbleId = 0,
				i = 0,
				elHeight = $(element).height(),
				elWidth = $(element).width(),
				widthOffset = 0,
				bubbleTimeout = 0;
			
			// This will reduce the horizontal scroll bar from displaying, when the effect is applied to the whole page
			if($(element).get(0).tagName === $(document).get(0).tagName){
				widthOffset = 25;
			}
			
			// Bind the window resize event so we can get the innerHeight again
			$(window).bind("resize", function(){  
				elHeight = $(element).height();
				elWidth = $(element).width();
			}); 
			

			// initialize the bubbles
			for(i = 0; i < options.bubbleCount; i+=1){
				bubbleId = bubbles.length;
				bubbles.push(new Bubble(random(widthOffset,elWidth - widthOffset), random(0, elHeight), random((options.minSize * 100), (options.maxSize * 100)) / 100, random(options.minSpeed, options.maxSpeed), bubbleId));
			}

		
			// this controls flow of the updating snow
			function bells(){
				for( i = 0; i < bubbles.length; i += 1){
					bubbles[i].update();
				}
				
				bubbleTimeout = setTimeout(function(){bells()}, 30);
			}
			
			bells();
		
		// Public Methods
		
		// clears the snowflakes
		this.clear = function(){
						$(element).children('.bubbleup-bubbles').remove();
						bubbles = [];
						clearTimeout(bubbleTimeout);
					};
	};
	
	// Initialize the options and the plugin
	$.fn.bubbleup = function(options){
		if(typeof(options) == "object" || options == undefined){		
				 return this.each(function(i){
					(new $.bubbleup(this, options)); 
				});	
		}else if (typeof(options) == "string") {
			return this.each(function(i){
				var bells = $(this).data('bubbleup');
				if(bells){
					bells.clear();
				}
			});
		}
	};
})(jQuery);
