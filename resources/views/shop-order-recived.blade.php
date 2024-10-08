@extends('layout.layout')

@section('content')
<x-header pageTitle="Success Order" breadcrumbItem="Success Order" />
    
    <div class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <p class="m-0 text-center cs_pb_95 cs_pb_50">Thank you! Your order has been received.</p>
        <div class="cs_pb_50 cs_pb_30">
          <ul class="cs_order-summery">
            <li>
              <p>Order Number:</p>
              <h3>251501</h3>
            </li>
            <li>
              <p>Date:</p>
              <h3>September 11, 2023</h3>
            </li>
            <li>
              <p>Total:</p>
              <h3>$605.00</h3>
            </li>
            <li>
              <p>Payment method:</p>
              <h3>COD</h3>
            </li>
          </ul>
        </div>
        <div class="cs_shop-card">
          <h2>Order details</h2>
          <table class="cs_white_color border-bottom-0">
            <tbody>
              <tr class="cs_semi_bold">
                <td>Products</td>
                <td class="text-end">Amount</td>
              </tr>
              <tr>
                <td>Awesome men T-shirt x 1</td>
                <td class="text-end">$20.00</td>
              </tr>
              <tr>
                <td>Future AI robot toy x 1</td>
                <td class="text-end">$550.00</td>
              </tr>
              <tr>
                <td>Hemp seed shampoo x 1</td>
                <td class="text-end">$35.00</td>
              </tr>
              <tr>
                <td class="cs_semi_bold">Subtotal</td>
                <td class="text-end">$605.00</td>
              </tr>
              <tr>
                <td class="cs_semi_bold">Payment method</td>
                <td class="text-end">Cash on delivery</td>
              </tr>
              <tr class="cs_semi_bold">
                <td class="pb-0">Total</td>
                <td class="text-end pb-0">$605.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    @endsection