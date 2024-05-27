<div class="search-popup">
        <div class="search-popup-container">

          <form role="search" method="get" class="search-form" action="">
            <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
            <button type="submit" class="search-submit"><svg class="search"><use xlink:href="#search"></use></svg></button>
          </form>

          <h5 class="cat-list-title">Browse Categories</h5>
          
          <ul class="cat-list">
            <li class="cat-list-item">
              <a href="#" title="Mobile Phones">Mobile Phones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Smart Watches">Smart Watches</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Headphones">Headphones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Accessories">Accessories</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Monitors">Monitors</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Speakers">Speakers</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Memory Cards">Memory Cards</a>
            </li>
          </ul>

        </div>
    </div>
    
    <header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
      <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="storage/images/main-logo.png" class="logo">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.html">
                <img src="storage/images/main-logo.png" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
              <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
              

                <li class="nav-item">
                  <a class="nav-link me-4" href="{{ route('shop') }}">{{ __('nav.products') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#company-services">{{ __('nav.accessories') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#smart-watches">{{ __('nav.computers') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#yearly-sale">{{ __('nav.consoles') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#latest-blog">{{ __('nav.tablets') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#company-services">{{ __('nav.sales') }}</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link me-4 dropdown-toggle link-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{ __('nav.lang') }}</a>
                  <ul class="dropdown-menu">
                    @if(session('locale')=='pt')
                    <li>
                      <a href="{{ route('setLocale', 'en') }}" class="dropdown-item">EN</a>
                    </li>
                    <li>
                      <a href="{{ route('setLocale', 'es') }}" class="dropdown-item">ES</a>
                    </li>
                    @elseif(session('locale')=='en')
                      <li>
                      <a href="{{ route('setLocale', 'pt') }}" class="dropdown-item">PT</a>
                      </li>
                      <li>
                      <a href="{{ route('setLocale', 'es') }}" class="dropdown-item">ES</a>
                      </li>
                    @else
                    <li>
                      <a href="{{ route('setLocale', 'pt') }}" class="dropdown-item">PT</a>
                      </li>
                      <li>
                      <a href="{{ route('setLocale', 'en') }}" class="dropdown-item">EN</a>
                      </li>
                    @endif
                  </ul>
                </li>
                <li class="nav-item">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">
                      <li class="search-item pe-3">
                        <a href="#" class="search-button">
                          <svg class="search">
                            <use xlink:href="#search"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="pe-3">
                        <a href="#">
                          <svg class="user">
                            <use xlink:href="#user"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="cart.html">
                          <svg class="cart">
                            <use xlink:href="#cart"></use>
                          </svg>
                        </a>
                      </li>                      
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>