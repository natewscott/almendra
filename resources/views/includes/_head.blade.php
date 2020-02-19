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
                <ul class="nav nav-pill pull-left">
                    <li><a href=" {{ route('home')}} ">
                        <img src="img/logos/Casa Almendra Logo_Havana Nights.svg" alt="Casa Almendra Logo" title="Casa Almendra Logo">
                    </a>
                </li>
                {{-- <li class="dropdown">
                    <a href="#">Dogs <b class="caret"></b></a>
                    <ul class="subnav">
                        <li><a href="#">Terrier</a></li>
                        <li><a href="#">Labrador</a></li>
                        <li><a href="#">Pitbull</a></li>
                        <li><a href="#">German Shephard</a></li>
                        <li><a href="#">Chihuahua</a></li>
                        <li><a href="#">Beagle</a></li>
                    </ul>
                </li> --}}
                
            </ul>
            <ul class="nav nav-pill pull-right">
                <li><a href=" {{ route('home')}} ">Home</a></li>
                <li><a href=" {{ route('about')}} ">Activities</a></li>
                {{-- <li><a href=" {{ route('about')}} ">About</a></li> --}}
                <li><a href=" {{ route('activities')}} ">Around Nicaragua</a></li>
                <li><a href=" {{ route('contact')}} ">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>