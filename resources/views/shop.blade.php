@extends('layouts.app')
@section('content')
    <section class="hero-section position-relative bg-light-blue padding-medium">
      <div class="hero-content">
        <div class="container">
          <div class="row">
            <div class="text-center padding-large no-padding-bottom">
              <h1 class="display-2 text-uppercase text-dark">{{ __('shop.shop') }}</h1>
              <div class="breadcrumbs">
                <span class="item">
                  <a href="{{ route('home') }}">{{ __('shop.home') }} &gt;</a>
                </span>
                <span class="item">{{ __('shop.shop') }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="shopify-grid padding-large">
      <div class="container">
        <div class="row">
          <main class="col-md-9">
            <div class="filter-shop d-flex justify-content-between">
              <div class="showing-product">
                <p>{{ __('shop.list_show') }} 1-9 of 55 {{ __('shop.list_result') }}</p>
              </div>
              <div class="sort-by">
                <select id="input-sort" class="form-control" data-filter-sort="" data-filter-order="">
                  <option value="">{{ __('shop.def_sort') }}</option>
                  <option value="">{{ __('shop.az_sort') }}</option>
                  <option value="">{{ __('shop.za_sort') }}</option>
                  <option value="">{{ __('shop.lh_sort') }}</option>
                  <option value="">{{ __('shop.hl_sort') }}</option>
                  <option value="">{{ __('shop.rh_sort') }}</option>
                  <option value="">{{ __('shop.rl_sort') }}</option>
                </select>
              </div>
            </div>
            <div class="product-content product-store d-flex justify-content-between flex-wrap">
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item1.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">{{ __('shop.add') }}</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3 pb-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Iphone 10</a>
                    </h3>
                    <span class="item-price text-primary">$980</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item2.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Iphone 11</a>
                    </h3>
                    <span class="item-price text-primary">$110</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item3.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Iphone 8</a>
                    </h3>
                    <span class="item-price text-primary">$780</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item4.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Iphone 13</a>
                    </h3>
                    <span class="item-price text-primary">$1500</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item6.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Pink watch</a>
                    </h3>
                    <span class="item-price text-primary">$870</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item7.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Heavy watch</a>
                    </h3>
                    <span class="item-price text-primary">$680</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item8.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">spotted watch</a>
                    </h3>
                    <span class="item-price text-primary">$750</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item10.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Black Watch</a>
                    </h3>
                    <span class="item-price text-primary">$750</span>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative pe-3 pb-3">
                  <div class="image-holder">
                    <img src="/storage/images/product-item5.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="https://demo.templatesjungle.com/ministore/shop.html#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">Iphone 12</a>
                    </h3>
                    <span class="item-price text-primary">$1300</span>
                  </div>
                </div>                  
              </div>
            </div>
            <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
              <div class="pagination loop-pagination d-flex justify-content-center align-items-center">
                <a href="https://demo.templatesjungle.com/ministore/shop.html#">
                  <svg class="chevron-left pe-3">
                    <use xlink:href="#chevron-left"></use>
                  </svg>
                </a>
                <span aria-current="page" class="page-numbers current pe-3">1</span>
                <a class="page-numbers pe-3" href="https://demo.templatesjungle.com/ministore/shop.html#">2</a>
                <a class="page-numbers pe-3" href="https://demo.templatesjungle.com/ministore/shop.html#">3</a>
                <a class="page-numbers pe-3" href="https://demo.templatesjungle.com/ministore/shop.html#">4</a>
                <a class="page-numbers" href="https://demo.templatesjungle.com/ministore/shop.html#">5</a>
                <a href="https://demo.templatesjungle.com/ministore/shop.html#">
                  <svg class="chevron-right ps-3">
                    <use xlink:href="#chevron-right"></use>
                  </svg>
                </a>
              </div>
            </nav>
          </main>
          <aside class="col-md-3">
            <div class="sidebar">
              <div class="widget-menu">
                <div class="widget-search-bar">
                  <form role="search" method="get" class="d-flex">
                    <input class="search-field" style="outline-color:transparent" placeholder="{{ __('shop.search') }}" type="search">
                    <div class="search-icon bg-dark" style="cursor: pointer;">
                      <a href="https://demo.templatesjungle.com/ministore/shop.html#">
                      <img src="https://img.icons8.com/ios-filled/50/FFFFFF/search--v1.png" alt="Search" width="19px" height="19px">
                      </a>
                    </div>
                  </form>
                </div> 
              </div>
              <div class="widget-product-categories pt-5">
                <h5 class="widget-title text-decoration-underline text-uppercase">{{ __('shop.categories') }}</h5>
                <ul class="product-categories sidebar-list list-unstyled">
                  <li class="cat-item">
                    <a href="https://demo.templatesjungle.com/collections/categories">{{ __('shop.all') }}</a>
                  </li>
                  <li class="cat-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">{{ __('shop.accessories') }}</a>
                  </li>
                  <li class="cat-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">{{ __('shop.computers') }}</a>
                  </li>
                  <li class="cat-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">{{ __('shop.tablets') }}</a>
                  </li>
                  <li class="cat-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">{{ __('shop.sales') }}</a>
                  </li>
                </ul>
              </div>
              <div class="widget-product-brands pt-3">
                <h5 class="widget-title text-decoration-underline text-uppercase">{{ __('shop.brands') }}</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">Apple</a>
                  </li>
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">Samsung</a>
                  </li>
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">Huwai</a>
                  </li>
                </ul>
              </div>
              <div class="widget-price-filter pt-3">
                <h5 class="widget-titlewidget-title text-decoration-underline text-uppercase">{{ __('shop.filter_price') }}</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">{{ __('shop.less') }} $10</a>
                  </li>
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">$10- $20</a>
                  </li>
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">$20- $30</a>
                  </li>
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">$30- $40</a>
                  </li>
                  <li class="tags-item">
                    <a href="https://demo.templatesjungle.com/ministore/shop.html">$40- $50</a>
                  </li>
                </ul>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>

@endsection