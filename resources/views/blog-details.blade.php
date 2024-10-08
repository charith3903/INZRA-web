@extends('layout.layout')

@section('content')

    <x-header pageTitle="Blog Details" breadcrumbItem="Blog Details" />

    <!-- Start Blog Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <img src="assets/img/post-details-1.jpeg" alt="">
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
                <div class="cs_post_subtitle">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor. <br>
                Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center bg-gray cs_pt_25 cs_pb_25 cs_pl_40 cs_pl_lg_25 cs_pr_40 cs_pr_lg_25 flex-wrap cs_row_gap_15 cs_column_gap_15 cs_mb_40">
              <div class="cs_post_details-meta-tag">
                <h4 class="cs_sidebar_widget_title">Tags</h4>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">Social Marketing</a>
                  <a href="#" class="tag-cloud-link"> Marketing</a>
                  <a href="#" class="tag-cloud-link">Digital Market</a>
                </div>
              </div>
              <div class="cs_social_btns cs_color_2 d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5">
                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
              </div>
            </div>
            <h2 class="cs_fs_26 cs_mb_40">2 Comments</h2>
            <ol class="comment-list cs_pb_96 cs_pl_0">
              <li class="comment">
                <div class="comment-body">
                  <div class="comment-author vcard">
                    <img class="avatar" src="assets/img/avatar_5.png" alt="Author"> 
                    <a href="#" class="url">Kristin Watson</a>
                  </div>
                  <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                  <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudinsollicitudin.</p>
                </div>
              </li><!-- #comment-## -->
              <li class="comment">
                <div class="comment-body">
                  <div class="comment-author vcard">
                    <img class="avatar" src="assets/img/avatar_6.png" alt="Author"> 
                    <a href="#" class="url">Courtney Henry</a>
                  </div>
                  <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
                  <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudinsollicitudin.</p>
                </div>
              </li><!-- #comment-## -->
            </ol>
            <h2 class="cs_fs_26 cs_mb_40">Leave a Comment</h2>
            <form action="#" class="row">
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Your Name">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="Your Email">
              </div>
              <div class="col-lg-12">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_40 bg-gray" placeholder="Message here ..." cols="35" rows="7"></textarea>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Submit Comment</span></button>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="cs_sidebar cs_mt_lg_80">
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
