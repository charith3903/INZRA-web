@extends('layout.layout')

@section('content')
  <x-header pageTitle="Our Portfolio" breadcrumbItem="Portfolio" />

    <!-- Start Our Latest Project -->
    <section class="cs_pt_130 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <ul class="cs_isotop_filter cs_style_1 d-flex justify-content-center flex-wrap m-0 cs_pl_0 cs_pb_30">
          <li class="active"><a href="#" data-filter="*">All</a></li>
          <li><a href="#" data-filter=".graphics">Graphics</a></li>
          <li><a href="#" data-filter=".website">Website</a></li>
          <li><a href="#" data-filter=".digital">Digital</a></li>
          <li><a href="#" data-filter=".marketing">Marketing</a></li>
        </ul>
        <div class="cs_isotop cs_style_1 cs_isotop_col_3 cs_has_gutter_24">
          <div class="cs_grid_sizer"></div>
          <div class="cs_isotop_item website">
            <div class="cs_portfolio cs_style_1 cs_size_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_1.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item marketing">
            <div class="cs_portfolio cs_style_1 cs_size_2 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_2.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item graphics">
            <div class="cs_portfolio cs_style_1 cs_size_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_3.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item digital">
            <div class="cs_portfolio cs_style_1 cs_size_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_4.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item website">
            <div class="cs_portfolio cs_style_1 cs_size_2 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_5.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item graphics">
            <div class="cs_portfolio cs_style_1 cs_size_2 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_6.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
        </div>
      </div>
    </section>
    <!-- End Our Latest Project -->
    
@endsection