@extends('layout.layout')

@section('content')
<x-header pageTitle="Shop Cart" breadcrumbItem="Cart" />
    
    <div class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <div class="row cs_gap_y_40">
          <div class="col-xl-8">
            <div class="table-responsive cs_mb_5">
              <table class="cs_cart_table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="cs_cart_table_media">
                        <img src="assets/img/shop/cart-product-1.jpeg" alt="Thumb">
                        <h3>Awesome men T-shirt</h3>
                      </div>
                    </td>
                    <td>$300.00</td>
                    <td>
                      <div class="cs_quantity">
                        <button class="cs_quantity_button cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                        <span class="cs_quantity_input">1</span>
                        <button class="cs_quantity_button cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
                      </div>
                    </td>
                    <td>
                      $20.00
                    </td>
                    <td class="text-center">
                      <button class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="cs_cart_table_media">
                        <img src="assets/img/shop/cart-product-2.jpeg" alt="Thumb">
                        <h3>Fuyure AI robot toy</h3>
                      </div>
                    </td>
                    <td>$300.00</td>
                    <td>
                      <div class="cs_quantity">
                        <button class="cs_quantity_button cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                        <span class="cs_quantity_input">1</span>
                        <button class="cs_quantity_button cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
                      </div>
                    </td>
                    <td>
                      $20.00
                    </td>
                    <td class="text-center">
                      <button class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="cs_cart_table_media">
                        <img src="assets/img/shop/cart-product-3.jpeg" alt="Thumb">
                        <h3>Hemp seed shampoo</h3>
                      </div>
                    </td>
                    <td>$300.00</td>
                    <td>
                      <div class="cs_quantity">
                        <button class="cs_quantity_button cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                        <span class="cs_quantity_input">1</span>
                        <button class="cs_quantity_button cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
                      </div>
                    </td>
                    <td>
                      $20.00
                    </td>
                    <td class="text-center">
                      <button class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="cs_cart-offer">
              <div>
                <form action="#" class="cs_coupon-doce-form">
                  <input type="text" placeholder="Coupon Code">
                  <button class="cs_product_btn cs_color1 cs_semi_bold">Update Cart</button>
                </form>
              </div>
              <div>
                <button class="cs_product_btn cs_semi_bold">Update Cart</button>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="cs_shop-side-spacing">
              <div class="cs_shop-card cs_pb_30">
                <h2>Cart Totals</h2>
                <table class="cs_white_color cs_mb_30">
                  <tbody>
                    <tr>
                      <td class="cs_semi_bold">Subtotal</td>
                      <td class="text-end">$605.00</td>
                    </tr>
                    <tr class="cs_semi_bold">
                      <td>Total</td>
                      <td class="text-end">$605.00</td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{ url('shop-checkout') }}" class="cs_product_btn cs_semi_bold w-100">Procced To Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection