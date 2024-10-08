@extends('layout.layout')

@section('content')
    <x-header pageTitle="Blog Posts" breadcrumbItem="Blogs" />

    <!-- Start Our Latest Project -->
    <!-- Start Blog Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_100 cs_pb_lg_80">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_40">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_9.jpeg"></div>
              </a>
              <div class="cs_pl_40 cs_pr_40 cs_pt_40 cs_pb_40 cs_pl_lg_25 cs_pr_lg_25 cs_pt_lg_25 cs_pb_lg_25">
                <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_20">
                  <li>
                    <span><i class="fa-solid fa-user"></i> By </span> 
                    <a href="">admin</a>
                  </li>
                  <li>
                    <span><i class="fa-solid fa-comment-dots"></i></span> 
                    <a href="">3 comments</a>
                  </li>
                </ul>
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                <div class="cs_post_subtitle cs_mb_30">We believe that every business deserves to succeed, no matter its size. That's why we offer affordable and customized solutions that fit each client's unique needs and goals. </div>
                <a href="{{ url('blog-details') }}" class="cs_post_btn d-inline-flex justify-content-between align-items-center cs_pl_25 cs_pr_25 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text cs_mr_30">Read More</span>
                  <div class="cs_post_btn-icon d-flex cs_transition_4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9999 0.224976C6.52011 0.224976 1.63131 4.16368 0.485006 9.52707C-0.0876941 12.207 0.298106 15.0567 1.57581 17.4816C2.80551 19.8153 4.82151 21.7014 7.23351 22.7703C9.74241 23.8824 12.6227 24.0762 15.2597 23.3178C17.8037 22.5864 20.0594 20.9811 21.5951 18.8262C24.806 14.3211 24.3767 7.99288 20.5991 3.95608C18.3851 1.59028 15.2405 0.224976 11.9999 0.224976ZM17.6486 12.6291L14.4386 15.9165C13.6259 16.749 12.3413 15.4878 13.1507 14.6592L14.7704 13.0005H7.09461C6.54951 13.0005 6.09471 12.5454 6.09471 12.0006C6.09471 11.4558 6.54981 11.0007 7.09461 11.0007H14.732L13.0802 9.34918C12.2594 8.52838 13.532 7.25548 14.3528 8.07628L17.6411 11.3643C17.9897 11.7126 17.993 12.2766 17.6486 12.6291Z" fill="currentColor"/>
                    </svg>  
                  </div>                
                </a>
              </div>
            </div>
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_40">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_10.jpeg"></div>
              </a>
              <div class="cs_pl_40 cs_pr_40 cs_pt_40 cs_pb_40 cs_pl_lg_25 cs_pr_lg_25 cs_pt_lg_25 cs_pb_lg_25">
                <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_20">
                  <li>
                    <span><i class="fa-solid fa-user"></i> By </span> 
                    <a href="">admin</a>
                  </li>
                  <li>
                    <span><i class="fa-solid fa-comment-dots"></i></span> 
                    <a href="">3 comments</a>
                  </li>
                </ul>
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('blog-details') }}">Get a few solutions to hire a best candidate</a></h2>
                <div class="cs_post_subtitle cs_mb_30">We believe that every business deserves to succeed, no matter its size. That's why we offer affordable and customized solutions that fit each client's unique needs and goals. </div>
                <a href="{{ url('blog-details') }}" class="cs_post_btn d-inline-flex justify-content-between align-items-center cs_pl_25 cs_pr_25 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text cs_mr_30">Read More</span>
                  <div class="cs_post_btn-icon d-flex cs_transition_4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9999 0.224976C6.52011 0.224976 1.63131 4.16368 0.485006 9.52707C-0.0876941 12.207 0.298106 15.0567 1.57581 17.4816C2.80551 19.8153 4.82151 21.7014 7.23351 22.7703C9.74241 23.8824 12.6227 24.0762 15.2597 23.3178C17.8037 22.5864 20.0594 20.9811 21.5951 18.8262C24.806 14.3211 24.3767 7.99288 20.5991 3.95608C18.3851 1.59028 15.2405 0.224976 11.9999 0.224976ZM17.6486 12.6291L14.4386 15.9165C13.6259 16.749 12.3413 15.4878 13.1507 14.6592L14.7704 13.0005H7.09461C6.54951 13.0005 6.09471 12.5454 6.09471 12.0006C6.09471 11.4558 6.54981 11.0007 7.09461 11.0007H14.732L13.0802 9.34918C12.2594 8.52838 13.532 7.25548 14.3528 8.07628L17.6411 11.3643C17.9897 11.7126 17.993 12.2766 17.6486 12.6291Z" fill="currentColor"/>
                    </svg>  
                  </div>                
                </a>
              </div>
            </div>
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_40">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_11.jpeg"></div>
              </a>
              <div class="cs_pl_40 cs_pr_40 cs_pt_40 cs_pb_40 cs_pl_lg_25 cs_pr_lg_25 cs_pt_lg_25 cs_pb_lg_25">
                <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_20">
                  <li>
                    <span><i class="fa-solid fa-user"></i> By </span> 
                    <a href="">admin</a>
                  </li>
                  <li>
                    <span><i class="fa-solid fa-comment-dots"></i></span> 
                    <a href="">3 comments</a>
                  </li>
                </ul>
                <h2 class="cs_post_title cs_lh_base cs_fs_26 cs_fs_lg_18 cs_mb_20"><a href="{{ url('blog-details') }}">Basic rules of running a small web agency</a></h2>
                <div class="cs_post_subtitle cs_mb_30">We believe that every business deserves to succeed, no matter its size. That's why we offer affordable and customized solutions that fit each client's unique needs and goals. </div>
                <a href="{{ url('blog-details') }}" class="cs_post_btn d-inline-flex justify-content-between align-items-center cs_pl_25 cs_pr_25 cs_pb_10 cs_pt_10">
                  <span class="cs_post_btn-text cs_mr_30">Read More</span>
                  <div class="cs_post_btn-icon d-flex cs_transition_4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9999 0.224976C6.52011 0.224976 1.63131 4.16368 0.485006 9.52707C-0.0876941 12.207 0.298106 15.0567 1.57581 17.4816C2.80551 19.8153 4.82151 21.7014 7.23351 22.7703C9.74241 23.8824 12.6227 24.0762 15.2597 23.3178C17.8037 22.5864 20.0594 20.9811 21.5951 18.8262C24.806 14.3211 24.3767 7.99288 20.5991 3.95608C18.3851 1.59028 15.2405 0.224976 11.9999 0.224976ZM17.6486 12.6291L14.4386 15.9165C13.6259 16.749 12.3413 15.4878 13.1507 14.6592L14.7704 13.0005H7.09461C6.54951 13.0005 6.09471 12.5454 6.09471 12.0006C6.09471 11.4558 6.54981 11.0007 7.09461 11.0007H14.732L13.0802 9.34918C12.2594 8.52838 13.532 7.25548 14.3528 8.07628L17.6411 11.3643C17.9897 11.7126 17.993 12.2766 17.6486 12.6291Z" fill="currentColor"/>
                    </svg>  
                  </div>                
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_sidebar">
              <div class="cs_sidebar_item widget_search">
                <form class="cs_sidebar_search" action="#">
                  <input type="text" placeholder="Search...">
                  <button class="cs_sidebar_search_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
              </div>
              <div class="cs_sidebar_item widget_categories">
                <h4 class="cs_sidebar_widget_title">Categories</h4>
                <ul>
                  <li class="cat-item">
                    <a href="#">Corporate</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Digital Solutions</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Business & Finance</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Web Designer</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Social Marketing</a>
                  </li>
                </ul>
              </div>
              <div class="cs_sidebar_item">
                <h4 class="cs_sidebar_widget_title">Recent Posts</h4>
                <ul class="cs_recent_posts">
                  <li>
                    <div class="cs_recent_post">
                      <a href="#" class="cs_recent_post-thumb">
                        <div class="h-100 w-100 background-filled" data-src="assets/img/recent-post-1.jpeg"></div>
                      </a>
                      <div class="cs_recent_post-info">
                        <div class="cs_recent_post-date"><i class="fa-regular fa-calendar-days"></i> 15 Mar, 2023</div>
                        <h3 class="cs_recent_post-title">
                          <a href="#">What services does your business provide?</a>
                        </h3>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="cs_recent_post">
                      <a href="#" class="cs_recent_post-thumb">
                        <div class="h-100 w-100 background-filled" data-src="assets/img/recent-post-2.jpeg"></div>
                      </a>
                      <div class="cs_recent_post-info">
                        <div class="cs_recent_post-date"><i class="fa-regular fa-calendar-days"></i> 14 Mar, 2023</div>
                        <h3 class="cs_recent_post-title">
                          <a href="#">What services does your business provide?</a>
                        </h3>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="cs_recent_post">
                      <a href="#" class="cs_recent_post-thumb">
                        <div class="h-100 w-100 background-filled" data-src="assets/img/recent-post-3.jpeg"></div>
                      </a>
                      <div class="cs_recent_post-info">
                        <div class="cs_recent_post-date"><i class="fa-regular fa-calendar-days"></i> 12 Mar, 2023</div>
                        <h3 class="cs_recent_post-title">
                          <a href="#">What services does your business provide?</a>
                        </h3>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="cs_sidebar_item">
                <h4 class="cs_sidebar_widget_title">Projects</h4>
                <div class="position-relative cs_sidebar_slider">
                  <div class="cs_slider_activate cs_rounded_12 overflow-hidden">
                    <a href="{{ url('project-details') }}" class="cs_sidebar_project">
                      <img src="assets/img/sidebar-project-1.jpeg" alt="">
                      <span>Technology</span>
                    </a>
                    <a href="{{ url('project-details') }}" class="cs_sidebar_project">
                      <img src="assets/img/sidebar-project-1.jpeg" alt="">
                      <span>Technology</span>
                    </a>
                    <a href="{{ url('project-details') }}" class="cs_sidebar_project">
                      <img src="assets/img/sidebar-project-1.jpeg" alt="">
                      <span>Technology</span>
                    </a>
                  </div>
                  <div class="cs_slider_prev filter cs_height_30 cs_width_30 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute"><i class="fa-solid fa-angle-left"></i></div>
                  <div class="cs_slider_next filter cs_height_30 cs_width_30 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute"><i class="fa-solid fa-angle-right"></i></div>
                </div>
              </div>
              <div class="cs_sidebar_item widget_tag_cloud">
                <h4 class="cs_sidebar_widget_title">Tags</h4>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">Social Marketing</a>
                  <a href="#" class="tag-cloud-link"> Marketing</a>
                  <a href="#" class="tag-cloud-link">Digital Market</a>
                  <a href="#" class="tag-cloud-link">Development</a>
                  <a href="#" class="tag-cloud-link">Web Design</a>
                  <a href="#" class="tag-cloud-link">Design</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    <!-- End Our Latest Project -->
    
    @endsection