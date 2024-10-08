@extends('layout.layout')

@section('content')
<x-header pageTitle="Our Store" breadcrumbItem="Store" />
    <!-- End Page Header -->
    <div class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <div class="row cs_gap_y_40">
          <div class="col-lg-3">
            <div class="cs_shop_sidebar ">
              <div class="cs_shop_sidebar_widget">
                <form class="cs_sidebar_search" action="#">
                  <input type="text" placeholder="Search...">
                  <button class="cs_sidebar_search_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
              </div>
              <div class="cs_shop_sidebar_widget">
                <h3 class="cs_shop_sidebar_widget_title">Categories</h3>
                <ul class="cs_shop_sidebar_category_list">
                  <li><a href="">Design (5)</a></li>
                  <li><a href="">Creative (2)</a></li>
                  <li><a href="">Illustration (3)</a></li>
                </ul>
              </div>
              <div class="cs_shop_sidebar_widget">
                <h3 class="cs_shop_sidebar_widget_title">Price Filter</h3>
                <div class="st-range-slider-wrap">
                  <div id="slider-range"></div>
                  <div class="st-amount-wrap">
                    <input type="text" id="amount" readonly>
                  </div>
                </div>
              </div>
              <div class="cs_shop_sidebar_widget">
                <h3 class="cs_shop_sidebar_widget_title">Tags</h3>
                <ul class="cs_shop_sidebar_tag_list">
                  <li><a href="">Brand</a></li>
                  <li><a href="">Digital</a></li>
                  <li><a href="">Marketing</a></li>
                  <li><a href="">Creative</a></li>
                  <li><a href="">Graphics</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="cs_shop_filter_wrap">
              <div class="cs_number_of_product">Showing 1–9 of 12 results</div>
              <form action="#" class="cs_shop_filter_form">
                <select>
                  <option value="latest">Sort by latest</option>
                  <option value="high">Sort by low price</option>
                  <option value="low">Sort by high price</option>
                </select>
              </form>
            </div>
            <div class="row cs_gap_y_40">
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_1.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Exclusive red car wheel</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_2.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_3.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_4.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_5.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_6.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_7.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_8.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs_product_card cs_style_1">
                  <div class="cs_product_thumb">
                    <img src="assets/img/shop/product_9.jpeg" alt="Product">
                    <div class="cs_product_overlay"></div>
                    <div class="cs_card_btns">
                      <a href="{{ url('shop-cart') }}"><i class="fa-solid fa-cart-plus"></i></a>
                      <a href="{{ url('shop-product-details') }}"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
                  <div class="cs_product_info">
                    <h2 class="cs_product_title"><a href="{{ url('shop-product-details') }}">Future AI robot toys</a></h2>
                    <p class="cs_product_price">Price: $550</p>
                  </div>
                </div>
              </div>
            </div>
            <ul class="cs_pagination_box cs_white_color cs_semi_bold">
              <li>
                <a class="cs_pagination_item cs_center active" href="{{ url('blog') }}">1</a>
              </li>
              <li>
                <a class="cs_pagination_item cs_center" href="{{ url('blog') }}">2</a>
              </li>
              <li>
                <a class="cs_pagination_item cs_center" href="{{ url('blog') }}">3</a>
              </li>
              <li>
                <a href="#" class="cs_pagination_item cs_center">
                  <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.272L4.55116 6L0 10.728L1.22442 12L7 6L1.22442 0L0 1.272Z" fill="currentColor"></path>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endsection