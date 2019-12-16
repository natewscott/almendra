<footer class="site-footer">
	<section class="footer">
		<article>
			<form action="">
				<fieldset>
					<h3 class="legend">Contact Us</h3>
					<hr>
					<div class="formrow">
						<div class="formitem col1of2">
							<label for="first_name" class="label req">First Name</label>
							<input type="text" name="first_name" id="first_name" placeholder="First Name" required="required" x-autocomplete="given-name">
						</div>
						<div class="formitem col1of2">
							<label for="last_name" class="label req">Last Name</label>
							<input type="text" name="last_name" id="last_name" placeholder="Last Name" required="required" x-autocomplete="family-name">
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label for="email" class="label req">Contact Email</label>
							<input type="email" name="email" id="email" placeholder="example@example.com" required="required">
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label for="subject" class="label req">Subject of Inquiry</label>
							<input type="text" name="subject" id="subject" placeholder="Reason for Contact" required="required">
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label for="message" class="label req">Message</label>
							<textarea name="msg" id="msg" cols="30" rows="10" required="required"></textarea>
						</div>
					</div>
					<div class="buttons">
						<button class="primary button">Send Message</button>
					</div>
				</fieldset>
			</form>
		</article>
		<article class="foot-book">
			<div >
				<img src="img/logos/casa_almendra_logo-02.svg" alt="Casa Almendra Logo" title="Casa Almendra Logo" id="foot-logo">
			</div>
			<div>
				<a href="https://www.instagram.com/casaalmendrasurf/" target="_blank">Follow us on Instagram</a>
				<hr>
			</div>
			<div class="social">
					<div class="soc-item">
						<img src="img/insta/IMG_2124.jpg" alt="">
					</div>
					<div class="soc-item">
						<img src="img/insta/IMG_2125.jpg" alt="">
					</div>
					<div class="soc-item">
						<img src="img/insta/IMG_2126.jpg" alt="">
					</div>
					<div>
						<img src="img/insta/IMG_2127.jpg" alt="">
					</div>
					<div>
						<img src="img/insta/IMG_2128.jpg" alt="">
					</div>
					<div>
						<img src="img/insta/IMG_2129.jpg" alt="">
					</div>
			</div>
		</article>
	</section>
</footer>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
<script src="js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	;(function ( $, window, document, undefined ) {
  
  $body = $( 'body' );
  
  $.cbFlyNav = function( options, element ) {
		this.$el = $( element );
		this._init( options );
	};
 
  $.cbFlyNav.defaults = {
    trigger: '.btn-flyout-trigger'
    ,cbNavWrapper: '#left-flyout-nav'
    ,cbContentWrapper: '.layout-right-content'
    ,minWidth: 768
	};
  
  $.cbFlyNav.prototype = {
  
    _init : function( options ) {
      this.options = $.extend({}, $.cbFlyNav.defaults, options);
      
      //Cache elements and intit variables
      this._config();
      
      //Initialize event listenters
      this._initEvents();
    },
    
    _config : function() {
			this.open = false;
      this.copied = false;
      this.windowWith = $(window).width();
      this.subNavOpen = false;
      this.wasOpened = false;
      this.$cbWrap = $('<div class="cbFlyNav-wrap"></div>');
      this.$trigger = $(this.options.trigger);
      this.$regMenus = this.$el.children( 'ul.nav.nav-pill' );
      this.$newMenus = $(this.$el.clone());
      this.$contentMask = $('<a class="nav-flyout-contentmask" href="#"></a>');
      this.$navMask = $('<a class="nav-flyout-navmask" href="#"></a>');
      this.$openSubnav = "";
		},
    
    _initEvents : function() {
      var self = this; 
      
      self.$trigger.on('click.cbFlyNav', function(e) {
        e.stopPropagation();
        
        if ( !self.open ) {
          if ( !self.copied ) {
            self._copyNav();
          }
          self._openNav();
        }
        else {
          self._closeNav();
        }
        self.wasOpened = true;
        
        //console.log('WasOpened: '+self.wasOpened+ '. Open? '+self.open);
      });
      
      //Hide menu when window is bigger than allowed minWidth
      $(window).on('resize', function() {
        var windowWidth = $(window).width();
        if(self.open && windowWidth > self.options.minWidth){
          self._closeNav();
        }
      });
      
      //Hide menu when body clicked. Usign an a tag to mask content.
      self.$contentMask.on('click.cbFlyNav', function( e ) {
        e.preventDefault();
        self._closeNav();
      });
      
      self.$navMask.on('click.cbFlyNav', function( e ) {
        e.preventDefault();
        self._closeSubNav();
      });
      
      //Handle clicks inside menu
      self.$newMenus.on( 'click.cbFlyNav', function( e ) {
        e.stopPropagation();
        var $menu = $(this);
        
        //console.log("Menu clicked");
      });
      
      //Handle menu item clicks
      self.$newMenus.children().find('li').on('click.cbFlyNav', function(e) {
        e.stopPropagation();
        var $item = $(this),
            $subnav = $item.find('ul.subnav');
        
        if ($subnav.length > 0) {
          //item with subnav clicked
          
          //console.log("Item with subnav clicked");

          $subnav.css('height', window.innerHeight);
          self._openSubNav($subnav);
        }
        else {
          //item without subnav clicked
          //console.log("Item without subnav clicked");
        }
      });
      
    },
    
    _copyNav : function() {
      var self = this;
      console.log("copying nav");
      
      var newWrap = $('<div class="cbFlyNav-wrap"></div>');
      self.$newMenus.children( 'ul.nav.nav-pill' ).each(function() {
        $this = $(this);
        $this.removeClass('nav-pill').addClass('nav-flyout');
        $this.find('.caret').replaceWith('<i class="icon-cbmore"></i>')
      });
            
      $(self.options.cbNavWrapper).prepend(self.$cbWrap.prepend(self.$newMenus));
      self.copied = true;
     
    },
    
    openNav : function() {
      if ( !this.open ) {
        this._openNav();
      }
    },
    
    _openNav : function() {
      var self = this;
      console.log("Opening Nav");
        
      $(self.options.cbNavWrapper).addClass('isCbFlyNavActive');
      $(self.options.cbContentWrapper)
                        .addClass('isCbFlyNavActive')
                        .append(self.$contentMask);

      self.open = true;
    },
    
    closeNav : function() {
      if ( !this.close ) {
        this._closeNav();
      }
    },
    
    _closeNav : function() {
      var self = this;
      console.log("Closing Nav");
      
      $(self.options.cbNavWrapper).removeClass('isCbFlyNavActive');
      $(self.options.cbContentWrapper).removeClass('isCbFlyNavActive');
      
      if(self.subNavOpen) {
        self._closeSubNav();
      }
      self.$contentMask.detach();

      self.open = false;
    },
    
    _openSubNav : function($subnav) {
      var self = this,
          $parent = $subnav.parent('li');
          
      $subnav.addClass('is-subnav-visible');
      $parent.addClass('is-active');
      self.$newMenus.addClass('is-inactive');
      self.$cbWrap.append(self.$navMask);
      
      $subnav.on('click.cbFlyNav', function(e) {
        e.stopPropagation();
      });
      
      self.$openSubnav = $subnav;
      self.subNavOpen = true;
    },

    _closeSubNav : function() {
      var self = this,
          $parent = self.$openSubnav.parent('li');
      
      self.$openSubnav.removeClass('is-subnav-visible');
      $parent.removeClass('is-active');
      self.$newMenus.removeClass('is-inactive');
      self.$navMask.detach();
      
      self.$openSubnav.off('click.cbFlyNav');
      
      self.$openSubnav = "";
      self.subNavOpen = false;
    }
  };
  
  
  $.fn.cbFlyout = function ( options ) {
    this.each(function() {	
      var instance = $.data( this, 'cbFlyout' );
      if ( instance ) {
        instance._init();
      }
      else {
        instance = $.data( this, 'cbFlyout', new $.cbFlyNav( options, this ) );
      }
    });
    
    return this;
  }
  
}(jQuery, window, document));

$(document).ready(function(){
  $('.the-nav').cbFlyout();
});
</script>