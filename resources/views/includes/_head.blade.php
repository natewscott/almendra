{{-- <header>
    <a href="{{ route('home')}} " class="logo o-link" id="brand">
      <img src="img/logos/casa_almendra_logo-02.svg" alt="Paris Valley Ranch Logo" title="Paris Valley Ranch Logo">
    </a>
    <nav class="c-top-nav o-container t-slideH">
        <a href="#" class="c-mobile-navlist-trigger nav-right o-link">&#9776;</a>
        <ul class="c-navlist">
            <li class="c-navlist__item">
                <a href="{{ route('about')}} " class="c-navlist__link o-link">About</a>
            </li>
            <li class="c-navlist__item">
                <a href="{{ route('activities')}} " class="c-navlist__link o-link">Activities</a>
            </li>
            <li class="c-navlist__item">
                <a href="{{ route('contact')}} " class="c-navlist__link o-link">Contact</a>
            </li>
        </ul>
    </nav>
</header> --}}
<div id="left-flyout-nav" class="layout-left-flyout visible-sm"></div>
<div class="layout-right-content">
  <header class="the-header">
    <div class="navbar container">
      
      <!-- Trigger -->
      <a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="#">
        <span class="icon-bar btn-flyout-trigger"></span>
        <span class="icon-bar btn-flyout-trigger"></span>
        <span class="icon-bar btn-flyout-trigger"></span>
      </a>
      
      <!-- Structure -->
      <nav class="the-nav nav-collapse clearfix">
     {{--    <ul class="nav nav-pill pull-left">
          <li class="dropdown">
            <a href="#">Dogs <b class="caret"></b></a>
            <ul class="subnav">
              <li><a href="#">Terrier</a></li>
              <li><a href="#">Labrador</a></li>
              <li><a href="#">Pitbull</a></li>
              <li><a href="#">German Shephard</a></li>
              <li><a href="#">Chihuahua</a></li>
              <li><a href="#">Beagle</a></li>
            </ul>
          </li>
        
        </ul> --}}
        <ul class="nav nav-pill pull-right">
            <li><a href=" {{ route('home')}} ">Home</a></li>
          <li><a href=" {{ route('about')}} ">About</a></li>
          <li><a href=" {{ route('activities')}} ">Activities</a></li>
          <li><a href=" {{ route('contact')}} ">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
