<footer id="footer" class="overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="footer-top-area">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <img src="{{ asset('storage/images/main-logo.png') }}" alt="logo">
                  <p>{{ __('nav.text') }}</p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <a href="#">
                          <svg class="facebook">
                            <use xlink:href="#facebook" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="instagram">
                            <use xlink:href="#instagram" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="twitter">
                            <use xlink:href="#twitter" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="linkedin">
                            <use xlink:href="#linkedin" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="youtube">
                            <use xlink:href="#youtube" />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 pb-3">
                <div class="footer-menu text-uppercase">
                  <h5 class="widget-title pb-2">{{ __('nav.links') }}</h5>
                  <ul class="menu-list list-unstyled text-uppercase">
                    <li class="menu-item pb-2">
                      <a href="#">{{ __('nav.home') }}</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">{{ __('nav.products') }}</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">{{ __('nav.accessories') }}</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">{{ __('nav.sales') }}</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu text-uppercase">
                  <h5 class="widget-title pb-2">{{ __('nav.info') }}</h5>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item pb-2">
                      <a href="#">Track Your Order</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Returns Policies</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Shipping + Delivery</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Contact Us</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Faqs</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h5 class="widget-title text-uppercase pb-2">{{ __('nav.contact') }}</h5>
                  <p>{{ __('nav.contact_text1') }}
                  <br>{{ __('nav.contact_text2') }}
                  <br>
                  <a href="mailto:">zepedrofernandessampaio@gmail.com</a>
                  </br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>
    <div id="footer-bottom">
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-between">
          <div class="col-md-4 col-sm-6">
            <div class="Shipping d-flex">
              <p>{{ __('nav.ship') }}</p>
              <div class="card-wrap ps-2">
                <img src="{{ asset('storage/images/dhl.png') }}" alt="visa">
                <img src="{{ asset('storage/images/shippingcard.png') }}" alt="mastercard">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="payment-method d-flex">
              <p>{{ __('nav.payment') }}</p>
              <div class="card-wrap ps-2">
                <img src="{{ asset('storage/images/visa.jpg') }}" alt="visa">
                <img src="{{ asset('storage/images/mastercard.jpg') }}" alt="mastercard">
                <img src="{{ asset('storage/images/paypal.jpg') }}" alt="paypal">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="copyright">
              <p>© Copyright 2023 MiniStore. Design by <a href="https://templatesjungle.com/">TemplatesJungle</a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>