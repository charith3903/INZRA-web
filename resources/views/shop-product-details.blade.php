@extends('layout.layout')

@section('content')
<x-header pageTitle="Product Details" breadcrumbItem="Product Details" />
    
    <div class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <div class="cs_pb_100">
          <div class="row">
            <div class="col-lg-6">
              <div class="cs_single_product_thumb">
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_1.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_2.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_3.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_4.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_1.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_2.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_3.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_item">
                  <img src="assets/img/shop/product_thumb_lg_4.jpeg" alt="Thumb">
                </div>
              </div>
              <div class="cs_single_product_nav">
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_1.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_2.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_3.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_4.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_1.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_2.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_3.jpeg" alt="Thumb">
                </div>
                <div class="cs_single_product_thumb_mini">
                  <img src="assets/img/shop/product_thumb_sm_4.jpeg" alt="Thumb">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="cs_single-product-details">
                <h2>Awesome men t-shirt</h2>
                <div class="cs_single_product-price_review cs_mb_25">
                  <div class="cs_single_product_price cs_accent_color cs_primary_font cs_semi_bold">$20.00</div>
                  <div class="cs_rating text-accent" data-rating="4.5">
                    <div class="cs_rating_percentage"></div>
                  </div>
                </div>
                <div class="cs_single-product-details-text cs_pb_35">
                  <p>Our t-shirt features a classic design with a crew neckline and short sleeves, making it a versatile piece that can be dressed up or down. The relaxed fit is perfect for all body types, providing ample room for movement and ensuring a flattering silhouette.</p>
                  <p>Available in a range of colors, our men's t-shirt is the perfect choice for any occasion. Wear it with jeans and sneakers for a casual look or dress it up with slacks and a blazer for a more formal event. No matter how you style it, you're sure to look and feel your best. So why wait? Add our men's t-shirt to your wardrobe today and experience the ultimate combination of comfort and style.</p>
                </div>
                <div class="cs_quantity_and_btn cs_mb_40 cs_mb_lg_30">
                  <div class="cs_quantity">
                    <button class="cs_quantity_button cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                    <span class="cs_quantity_input">1</span>
                    <button class="cs_quantity_button cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
                  </div>
                  <a href="{{ url('shop-cart') }}" class="cs_product_btn cs_semi_bold">Add to cart</a>
                </div>
                <ul class="cs_single_product_info">
                  <li><b>SKU: </b>0215552</li>
                  <li><b>Categories: </b>Graphics</li>
                  <li><b>Tags: </b>Design, Brand, Clothing</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_product_meta_info cs_pt_100 cs_pt_lg_60">
          <div class="cs_tabs cs_style1">
            <ul class="cs_tab_links cs_product_tab cs_primary_font cs_semi_bold">
              <li><a href="#tab_1">Description</a></li>
              <li><a href="#tab_2">Additional information</a></li>
              <li class="active"><a href="#tab_3">Review (1)</a></li>
            </ul>
            <div class="cs_tab_body">
              <div class="cs_tab" id="tab_1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis orci ac odio dictum tincidunt. Donec ut metus leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed luctus, dui eu sagittis sodales, nulla nibh sagittis augue, vel porttitor diam enim non metus. Vestibulum aliquam augue neque. Phasellus tincidunt odio eget ullamcorper efficitur. Cras placerat ut turpis pellentesque vulputate. Nam sed consequat tortor. Curabitur finibus sapien dolor. Ut eleifend tellus nec erat pulvinar dignissim. Nam non arcu purus. Vivamus et massa massa.
              </div><!-- .cs_tab -->
              <div class="cs_tab" id="tab_2">
                <table class="m-0">
                  <tbody>
                    <tr>
                      <td>Color</td>
                      <td>Blue, Gray, Green, Red, Yellow</td>
                    </tr>
                    <tr>
                      <td>Size</td>
                      <td>Large, Medium, Small</td>
                    </tr>
                  </tbody>
                </table>
                <hr>
              </div><!-- .cs_tab -->
              <div class="cs_tab active" id="tab_3">
                <ul class="cs_client_review_list">
                  <li>
                    <div class="cs_client_review">
                      <div class="cs_review_media">
                        <div class="cs_review_media_thumb"><img src="assets/img/avatar_2.png" alt="Avatar"></div>
                        <div class="cs_review_media_right">
                          <div class="cs_rating text-accent cs_mb_6" data-rating="4.5">
                            <div class="cs_rating_percentage"></div>
                          </div>
                          <p class="m-0 cs_white_color cs_semi_bold">Zhon Abony</p>
                        </div>
                      </div>
                      <div class="cs_review_posted_by">August 12, 2023</div>
                      <div class="cs_review_text">I recently purchased the Arino T-shirts and I'm thoroughly impressed. The sound quality is exceptional, the wireless connectivity is seamless, and the noise cancellation technology is a standout feature. They're a bit pricey, but well worth the investment. Highly recommend.</div>
                    </div>
                  </li>
                </ul>
                <div class="cs_height_85 cs_height_lg_50"></div>
                <p class="m-0">Your email address will not be published. Required fields are marked *</p>
                <div class="cs_height_20 cs_height_lg_20"></div>
                <div class="cs_input_rating_wrap">
                  <p>Your rating  *</p>
                  <div class="cs_input_rating cs_accent_color" data-rating="0">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                </div>
                <div class="cs_height_20 cs_height_lg_20"></div>
                <form class="row">
                  <div class="col-lg-12">
                    <textarea cols="30" rows="10" class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" placeholder="Write your review *"></textarea>
                    <div class="cs_height_25 cs_height_lg_25"></div>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" placeholder="Your name *">
                    <div class="cs_height_25 cs_height_lg_25"></div>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" placeholder="Your email *">
                    <div class="cs_height_25 cs_height_lg_25"></div>
                  </div>
                  <div class="col-lg-12">
                    <div class="cs_height_15 cs_height_lg_15"></div>
                    <div class="form-check m-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label m-0" for="flexCheckDefault">
                        By using this form you agree with the storage and handling of your data by this website. *
                      </label>
                    </div>
                    <div class="cs_height_40 cs_height_lg_30"></div>
                    <button class="cs_product_btn" type="submit">
                      Submit
                    </button>
                  </div>
                </form>
              </div><!-- .cs_tab -->
            </div><!-- .cs_tab_body -->
          </div><!-- .cs_tabs -->
        </div>
      </div>
    </div>
    @endsection