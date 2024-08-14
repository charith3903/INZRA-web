@extends('layout.layout')

@section('content')
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_type_1 cs_sticky_header cs_site_header_full_width">
      <div class="cs_main_header">
        <div class="container">
          <div class="cs_main_header_in">
            <div class="cs_main_header_left">
              <a class="cs_site_branding" href="{{ url('index') }}">
                <img src="assets/img/logo.svg" alt="Logo">
              </a>
            </div>
            <div class="cs_main_header_center">
              <div class="cs_nav cs_primary_font fw-medium">
                <ul class="cs_nav_list fw-medium text-uppercase">
                  <li class="menu-item-has-children">
                    <a href="{{ url('index') }}">Home</a>
                    <ul>
                      <li><a href="{{ url('index') }}">Business</a></li>
                      <li><a href="{{ url('corporate') }}">Corporate</a></li>
                      <li><a href="{{ url('finance') }}">Financial institute</a></li>
                      <li><a href="{{ url('insurance') }}">Insurance Company</a></li>
                      <li><a href="{{ url('consulting') }}">Consulting Agency</a></li>
                      <li><a href="{{ url('business-with-ecommerce') }}">Business With E-Commerce</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('about') }}">About</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul>
                      <li><a href="{{ url('project-details') }}">Project Details</a></li>
                      <li><a href="{{ url('services-details') }}">Service Details</a></li>
                      <li><a href="{{ url('team') }}">Team </a></li>
                      <li><a href="{{ url('team-details') }}">Team Member</a></li>
                      <li><a href="{{ url('pricing') }}">Pricing Page</a></li>
                      <li><a href="{{ url('shop') }}">Our Store</a></li>
                      <li><a href="{{ url('shop-product-details') }}">Product Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('service') }}">Services</a></li>
                  <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul>
                      <li><a href="{{ url('blog-grid') }}">Blog Grid</a></li>
                      <li><a href="{{ url('blog-list-with-sidebar') }}">Blog List With Sidebar</a></li>
                      <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <div class="cs_toolbox">
                <div class="cs_header_search_wrap position-relative">
                  <span class="cs_header_search_btn d-flex">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.7628 23.6399L18.3082 17.2884C19.9984 15.452 21.037 13.0234 21.037 10.3509C21.0362 4.63387 16.3273 0 10.5181 0C4.70891 0 0 4.63387 0 10.3509C0 16.0678 4.70891 20.7017 10.5181 20.7017C13.0281 20.7017 15.3301 19.8335 17.1384 18.3902L23.618 24.7667C23.9338 25.0777 24.4463 25.0777 24.7621 24.7667C25.0785 24.4557 25.0785 23.9509 24.7628 23.6399ZM10.5181 19.1092C5.60289 19.1092 1.61836 15.1879 1.61836 10.3509C1.61836 5.51376 5.60289 1.59254 10.5181 1.59254C15.4333 1.59254 19.4178 5.51376 19.4178 10.3509C19.4178 15.1879 15.4333 19.1092 10.5181 19.1092Z" fill="currentColor"/>
                    </svg>                    
                  </span>
                  <form class="cs_header_search_form position-absolute bg-white cs_transition_3 cs_rounded_5 end-0 cs_pt_20 cs_pb_20 cs_pl_20 cs_pr_20">
                    <input type="text" placeholder="Type your keywork  ...">
                    <button class="cs_header_search_sumbit_btn">
                      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.7628 23.6399L18.3082 17.2884C19.9984 15.452 21.037 13.0234 21.037 10.3509C21.0362 4.63387 16.3273 0 10.5181 0C4.70891 0 0 4.63387 0 10.3509C0 16.0678 4.70891 20.7017 10.5181 20.7017C13.0281 20.7017 15.3301 19.8335 17.1384 18.3902L23.618 24.7667C23.9338 25.0777 24.4463 25.0777 24.7621 24.7667C25.0785 24.4557 25.0785 23.9509 24.7628 23.6399ZM10.5181 19.1092C5.60289 19.1092 1.61836 15.1879 1.61836 10.3509C1.61836 5.51376 5.60289 1.59254 10.5181 1.59254C15.4333 1.59254 19.4178 5.51376 19.4178 10.3509C19.4178 15.1879 15.4333 19.1092 10.5181 19.1092Z" fill="currentColor"/>
                        </svg>                        
                    </button>
                  </form>
                </div>
                <div class="cs_header_contact">
                  <div class="cs_header_contact_icon text-accent">
                    <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_81_254)">
                      <path d="M18.1846 18.6831C18.1846 19.0607 17.8786 19.3667 17.501 19.3667C17.1234 19.3667 16.8174 19.0607 16.8174 18.6831C16.8174 18.3055 17.1234 17.9995 17.501 17.9995C17.8786 17.9995 18.1846 18.3055 18.1846 18.6831Z" fill="currentColor"/>
                      <path d="M28.9669 19.1887C28.2043 18.4264 26.9696 18.425 26.2069 19.1885L23.9057 21.4892C23.4576 21.9378 22.7657 22.0294 22.2608 21.7065C21.5959 21.282 20.9029 20.7818 20.2015 20.2197C19.9067 19.9837 19.4765 20.0312 19.2404 20.3257C19.0044 20.6205 19.0519 21.0507 19.3467 21.2868C20.0861 21.879 20.8188 22.408 21.5246 22.8588C22.566 23.5242 23.9743 23.3549 24.8726 22.4558L27.1741 20.1551C27.3989 19.93 27.7672 19.9225 28.0022 20.1575L33.4626 25.5697C33.6904 25.7974 33.6901 26.1683 33.4626 26.3961L32.0615 27.7975C30.0521 29.8061 26.8756 30.3396 24.3361 29.0944C13.2881 23.6775 7.80304 13.9181 6.38512 11.0561C5.12742 8.51667 5.64999 5.44317 7.68555 3.40761L9.05487 2.03722C9.28292 1.80944 9.65382 1.80944 9.88159 2.03695L15.2964 7.45176C15.5244 7.6798 15.5247 8.04937 15.2964 8.27741L12.9954 10.5787C12.0963 11.4777 11.927 12.8858 12.5925 13.9267C13.212 14.8965 13.9687 15.9037 14.8414 16.9206C15.0873 17.2068 15.5188 17.24 15.8056 16.994C16.0919 16.7481 16.125 16.3166 15.8791 16.0298C15.0478 15.0615 14.3298 14.1064 13.7444 13.1902C13.4219 12.6858 13.5135 11.9942 13.9623 11.5453L16.2633 9.24432C17.0257 8.48195 17.0259 7.24748 16.2633 6.48511L10.8482 1.07004C10.088 0.310076 8.85006 0.309809 8.08823 1.07031L6.71837 2.44096C4.26812 4.89149 3.64167 8.59731 5.15999 11.6628C6.62625 14.6225 12.2995 24.7154 23.7342 30.322C24.8373 30.8627 26.0344 31.1383 27.2555 31.1383C27.2694 31.1383 27.2833 31.1375 27.2972 31.1372C27.0993 32.8214 25.6641 34.1325 23.9278 34.1325H19.5117C18.218 34.1325 17.0551 33.4136 16.4767 32.2563L15.5648 30.4333C15.4489 30.2015 15.2123 30.0555 14.9533 30.0555C14.6945 30.0555 14.4577 30.2018 14.342 30.4333L12.9148 33.2876L11.4878 30.4333C11.3719 30.2015 11.1353 30.0555 10.8763 30.0555C10.6175 30.0555 10.3807 30.2018 10.265 30.4333L8.83778 33.2876L7.41078 30.4333C7.29489 30.2015 7.0583 30.0555 6.79928 30.0555C6.54053 30.0555 6.30368 30.2018 6.18805 30.4333L4.76079 33.2876L3.33379 30.4333C3.21789 30.2015 2.98131 30.0555 2.72229 30.0555C2.46354 30.0555 2.22668 30.2018 2.11106 30.4333L0.072297 34.5106C-0.0964651 34.8481 0.0402536 35.2588 0.378045 35.4276C0.717171 35.5971 1.12706 35.4583 1.29529 35.1218L2.72229 32.2678L4.14929 35.1218C4.26518 35.3536 4.50177 35.4996 4.76079 35.4996C5.0198 35.4996 5.25639 35.3533 5.37228 35.1218L6.79928 32.2678L8.22628 35.1218C8.34217 35.3536 8.57876 35.4996 8.83778 35.4996C9.0968 35.4996 9.33339 35.3533 9.44928 35.1218L10.8763 32.2678L12.3033 35.1218C12.4192 35.3536 12.6558 35.4996 12.9148 35.4996C13.1738 35.4996 13.4104 35.3533 13.5263 35.1218L14.9535 32.2675L15.2537 32.8678C16.0649 34.4913 17.6965 35.4996 19.5117 35.4996H23.9278C26.4609 35.4996 28.5376 33.5111 28.6801 31.013C30.3435 30.7222 31.846 29.9457 33.0282 28.7641L34.4298 27.3622C35.19 26.6012 35.1898 25.3632 34.4274 24.6006L28.9669 19.1887Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_81_254">
                      <rect width="35" height="35" fill="white" transform="translate(0 0.5)"/>
                      </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="cs_header_contact_right">
                    <h3 class="text-white fw-normal cs_mb_6 cs_fs_13">Need help?  Call us:</h3>
                    <h3 class="text-white m-0 cs_fs_13">(+800) 1234 5678 90</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Section -->
  
    <!-- Start Hero -->
    <section class="cs_hero cs_style_1 cs_type_1 position-relative d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden bg-primary" data-src="assets/img/hero_bg.jpeg">
      <div class="cs_hero_imagebox rounded-circle position-absolute">
        <div class="cs_hero_imagebox_mini position-absolute">
          <img src="assets/img/hero_mini_img_1.png" alt="Hero" class="w-100 h-100">
        </div>
        <div class="cs_hero_imagebox_in overflow-hidden h-100 w-100 rounded-circle d-flex align-items-center justify-content-center position-relative">
          <video autoplay loop muted>
            <source src="assets/img/video.mp4" type="video/mp4">
            <!-- You can add multiple source elements for different video formats -->
            <!-- <source src="your_video.webm" type="video/webm"> -->
            <!-- <source src="your_video.ogv" type="video/ogg"> -->
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="cs_hero_imagebox_shape_1 position-absolute">
          <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.6995 0.486699L15.5455 17.8835L0.0564146 9.91778L14.6995 0.486699Z" fill="#5B4100"/>
          </svg>            
        </div>
        <div class="cs_hero_imagebox_shape_2 position-absolute moving_x"></div>
        <div class="cs_hero_imagebox_shape_3 position-absolute"></div>
      </div>
      <div class="container">
        <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
          <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46">
            Your trusted source <br>for financial insights <br>and services
          </h1>
          <p class="text-white cs_mb_20">
            Welcome to BizServe, your one-stop destination for comprehensive <br>financial insights and top-notch services.
          </p>
          <div class="cs_hero_btn">
            <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
          </div>
        </div>
      </div>
      <div class="cs_hero_shape_1 position-absolute bottom-0 d-flex align-items-end h-100 cs_zindex_1">
        <svg width="870" height="1000" viewBox="0 0 870 1000" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M316.364 0H870L566.818 1000H0L316.364 0Z" fill="url(#paint0_linear_506_265)"/>
          <defs>
          <linearGradient id="paint0_linear_506_265" x1="191.136" y1="337.945" x2="637.701" y2="972.542" gradientUnits="userSpaceOnUse">
          <stop stop-color="#D9D9D9" stop-opacity="0" offset="0"/>
          <stop offset="1" stop-color="#E9A132" stop-opacity="0.7"/>
          </linearGradient>
          </defs>
        </svg>                       
      </div>
    </section>
    <!-- End Hero -->

    <!-- Start About Section -->
    <section class="cs_pb_140 cs_pt_140 cs_pb_lg_80 cs_pt_lg_80 position-relative">
      <div class="container">
        <div class="row align-items-center cs_gap_y_40">
          <div class="col-xxl-6 col-xl-6">
            <div class="cs_experience cs_style_1 cs_type_1 position-relative">
              <div class="cs_experience_thumb">
                <img src="assets/img/about_img_3.png" alt="Thumb" class="position-relative cs_zindex_3 cs_rounded_15">
                <!-- <div class="cs_experience_shape"><img src="assets/img/experience_shape_1.png" alt="Shape" class="moving_x"></div> -->
              </div>
              <div class="cs_experience_box background-filled text-center bg-white cs_rounded_10 position-absolute cs_zindex_3 d-flex flex-column justify-content-center align-items-center" data-src="assets/img/experience_bg.jpeg">
                <img src="assets/img/experience_icon.svg" alt="Icon" class="cs_mb_5">
                <h3 class="text-white cs_fs_60 cs_fs_lg_46 fw-bold lh_1 mb-0 d-flex justify-content-between">
                  <span data-count-to="40" class="odometer"></span>
                  <span class="fw-light">+</span>
                </h3>
                <h2 class="cs_fs_18 fw-normal text-white m-0">Work Experience</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-5 offset-xxl-1">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 cs_mb_25">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">About Us</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Your Trusted Finance Consulting <span class="text-accent">Agency</span></h2>
                  <p class="m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses. Creating visual content, such as logos, brochures, infographics, and other branding materials.</p>
                </div>
              </div>
              <div class="cs_mb_40">
                <div class="cs_about_icon_box d-flex align-items-center cs_mb_30">
                  <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 flex-none cs_mr_20 bg-gray rounded-circle">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_510_5859)">
                      <path d="M9.44607 10.4345C9.69334 10.65 10.0684 10.62 10.2788 10.3706L11.7052 8.6801C11.9139 8.43275 11.8826 8.06315 11.6352 7.8544C11.3878 7.64572 11.0182 7.67713 10.8095 7.9244L9.76701 9.15994L9.40154 8.84158C9.15755 8.62893 8.78748 8.65432 8.57482 8.89846C8.36224 9.14244 8.38771 9.51252 8.63177 9.7251L9.44607 10.4345Z" fill="#E9A132"/>
                      <path d="M11.6352 18.7069C11.3878 18.4983 11.0182 18.5297 10.8095 18.7769L9.76701 20.0125L9.40154 19.6941C9.15755 19.4815 8.78748 19.5069 8.57482 19.751C8.36224 19.995 8.38771 20.3651 8.63177 20.5776L9.44607 21.2871C9.69334 21.5026 10.0684 21.4726 10.2788 21.2233L11.7052 19.5327C11.9139 19.2854 11.8825 18.9157 11.6352 18.7069Z" fill="#E9A132"/>
                      <path d="M11.6352 29.5595C11.3878 29.3508 11.0182 29.3822 10.8095 29.6295L9.76701 30.865L9.40154 30.5467C9.15755 30.334 8.78748 30.3594 8.57482 30.6035C8.36224 30.8475 8.38771 31.2176 8.63177 31.4302L9.44607 32.1396C9.69334 32.3552 10.0684 32.3252 10.2788 32.0758L11.7052 30.3853C11.9139 30.1379 11.8825 29.7682 11.6352 29.5595Z" fill="#E9A132"/>
                      <path d="M17.2129 8.30664H29.5983C29.922 8.30664 30.1842 8.04438 30.1842 7.7207C30.1842 7.39703 29.922 7.13477 29.5983 7.13477H17.2129C16.8892 7.13477 16.627 7.39703 16.627 7.7207C16.627 8.04438 16.8892 8.30664 17.2129 8.30664Z" fill="#E9A132"/>
                      <path d="M17.2129 11.1606H29.5983C29.922 11.1606 30.1842 10.8984 30.1842 10.5747C30.1842 10.251 29.922 9.98877 29.5983 9.98877H17.2129C16.8892 9.98877 16.627 10.251 16.627 10.5747C16.627 10.8984 16.8892 11.1606 17.2129 11.1606Z" fill="#E9A132"/>
                      <path d="M12.7185 4.84326H7.5559C6.6059 4.84326 5.83301 5.61615 5.83301 6.56615V7.72045C5.83301 8.04412 6.09527 8.30639 6.41895 8.30639C6.74262 8.30639 7.00488 8.04412 7.00488 7.72045V6.56615C7.00488 6.26232 7.25207 6.01514 7.5559 6.01514H12.7185C13.0223 6.01514 13.2694 6.26232 13.2694 6.56615V11.7287C13.2694 12.0326 13.0223 12.2797 12.7185 12.2797H7.5559C7.25207 12.2797 7.00488 12.0326 7.00488 11.7287V10.5169C7.00488 10.1933 6.74262 9.931 6.41895 9.931C6.09527 9.931 5.83301 10.1933 5.83301 10.5169V11.7287C5.83301 12.6787 6.6059 13.4515 7.5559 13.4515H12.7185C13.6684 13.4515 14.4413 12.6787 14.4413 11.7287V6.56615C14.4412 5.61615 13.6684 4.84326 12.7185 4.84326Z" fill="#E9A132"/>
                      <path d="M12.7185 15.6958H7.5559C6.6059 15.6958 5.83301 16.4687 5.83301 17.4187V22.5813C5.83301 23.5312 6.6059 24.3041 7.5559 24.3041H12.7185C13.6684 24.3041 14.4413 23.5312 14.4413 22.5813V17.4187C14.4412 16.4687 13.6684 15.6958 12.7185 15.6958ZM13.2693 22.5813C13.2693 22.8851 13.0222 23.1322 12.7184 23.1322H7.5559C7.25207 23.1322 7.00488 22.8851 7.00488 22.5813V17.4187C7.00488 17.1149 7.25207 16.8677 7.5559 16.8677H12.7185C13.0223 16.8677 13.2694 17.1149 13.2694 17.4187L13.2693 22.5813Z" fill="#E9A132"/>
                      <path d="M12.7185 26.5483H7.5559C6.6059 26.5483 5.83301 27.3212 5.83301 28.2712V33.4338C5.83301 34.3837 6.6059 35.1566 7.5559 35.1566H12.7185C13.6684 35.1566 14.4413 34.3837 14.4413 33.4338V28.2712C14.4412 27.3212 13.6684 26.5483 12.7185 26.5483ZM13.2693 33.4338C13.2693 33.7376 13.0222 33.9847 12.7184 33.9847H7.5559C7.25207 33.9847 7.00488 33.7376 7.00488 33.4338V28.2712C7.00488 27.9674 7.25207 27.7202 7.5559 27.7202H12.7185C13.0223 27.7202 13.2694 27.9674 13.2694 28.2712L13.2693 33.4338Z" fill="#E9A132"/>
                      <path d="M38.0414 5.19195C36.5098 4.52484 34.721 5.22773 34.0537 6.7593L33.8784 7.16164V4.14C33.8784 1.85719 32.0212 0 29.7384 0H6.27867C3.99586 0 2.13867 1.85719 2.13867 4.14V35.86C2.13867 38.1428 3.99586 40 6.27867 40H29.7384C32.0212 40 33.8784 38.1428 33.8784 35.86V22.3316C34.1787 21.6423 39.2757 9.94398 39.6087 9.17969C40.2777 7.64445 39.5766 5.86086 38.0414 5.19195ZM23.1896 31.6934H17.213C16.8894 31.6934 16.6271 31.9557 16.6271 32.2794C16.6271 32.603 16.8894 32.8653 17.213 32.8653H22.6816C22.4048 33.5308 22.2655 34.2334 22.2702 34.9561V34.9562L22.2962 38.8281H6.27867C4.64203 38.8281 3.31055 37.4966 3.31055 35.86V4.14C3.31055 2.50336 4.64203 1.17188 6.27867 1.17188H29.7384C31.375 1.17188 32.7065 2.50336 32.7065 4.14V9.85125C31.9661 11.5505 29.8855 16.3256 29.1616 17.9872H17.2131C16.8895 17.9872 16.6272 18.2495 16.6272 18.5731C16.6272 18.8968 16.8895 19.1591 17.2131 19.1591H28.651L27.9182 20.841H17.2131C16.8895 20.841 16.6272 21.1033 16.6272 21.427C16.6272 21.7506 16.8895 22.0129 17.2131 22.0129H27.4076L24.4331 28.8396H17.2131C16.8895 28.8396 16.6272 29.1019 16.6272 29.4255C16.6272 29.7492 16.8895 30.0115 17.2131 30.0115H23.9225L23.1896 31.6934ZM23.4421 34.9483C23.4409 34.7615 23.4532 34.5766 23.4762 34.3937C23.9887 34.617 23.2743 34.3057 26.572 35.7425C26.4537 35.8839 26.3267 36.0188 26.1891 36.1451L23.4669 38.642L23.4421 34.9483ZM32.7065 35.86C32.7065 37.4966 31.375 38.8281 29.7384 38.8281H24.9977L26.9812 37.0088C27.5362 36.4996 27.9702 35.8914 28.2712 35.2008L32.7065 25.0211V35.86ZM27.1968 34.7327C27.1963 34.7337 27.1958 34.7347 27.1953 34.7358L26.0294 34.2278L28.7874 27.8978C28.9166 27.6011 28.7809 27.2559 28.4843 27.1266C28.1875 26.9974 27.8423 27.1331 27.713 27.4297L24.955 33.7597L23.7891 33.2517C23.7896 33.2507 23.7899 33.2496 23.7904 33.2486L32.7481 12.6898L33.9141 13.1977L28.8071 24.9187C28.6779 25.2155 28.8136 25.5607 29.1102 25.69C29.4086 25.8199 29.7529 25.682 29.8815 25.3869L34.9884 13.6658L36.1544 14.1737C36.0119 14.5009 27.3323 34.4216 27.1968 34.7327ZM36.6226 13.0994L33.2162 11.6153L33.7977 10.2808L37.2041 11.7649L36.6226 13.0994ZM38.5344 8.71156L37.6721 10.6905L34.2658 9.20641L35.128 7.22742C35.5371 6.28828 36.6341 5.85711 37.5733 6.26633C38.5145 6.67633 38.9448 7.77 38.5344 8.71156Z" fill="#E9A132"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_510_5859">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                                                                    
                  </div>
                  <div>
                    <h2 class="cs_fs_20 cs_mb_8">Accounting and bookkeeping</h2>
                    <p class="m-0">Your reliable partner in simplifying the complexities of accounting and bookkeeping.</p>
                  </div>
                </div>
                <div class="cs_about_icon_box d-flex align-items-center cs_mb_30">
                  <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 flex-none cs_mr_20 bg-gray rounded-circle">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_510_5882)">
                      <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="#E9A132"/>
                      <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="#E9A132"/>
                      <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="#E9A132"/>
                      <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="#E9A132"/>
                      <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="#E9A132"/>
                      <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="#E9A132"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_510_5882">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                                              
                  </div>
                  <div>
                    <h2 class="cs_fs_20 cs_mb_8">Customer service and support</h2>
                    <p class="m-0">Our pricing varies depending on the specific services you require. We are happy to support you.</p>
                  </div>
                </div>
                <div class="cs_about_icon_box d-flex align-items-center cs_mb_30">
                  <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 flex-none cs_mr_20 bg-gray rounded-circle">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_510_5809)">
                      <path d="M22.5 40H17.5C17.3342 40 17.1753 39.9342 17.0581 39.8169C16.9408 39.6997 16.875 39.5408 16.875 39.375V22.5C16.875 22.1685 17.0067 21.8505 17.2411 21.6161C17.4755 21.3817 17.7935 21.25 18.125 21.25H21.875C22.2065 21.25 22.5245 21.3817 22.7589 21.6161C22.9933 21.8505 23.125 22.1685 23.125 22.5V39.375C23.125 39.5408 23.0592 39.6997 22.9419 39.8169C22.8247 39.9342 22.6658 40 22.5 40ZM18.125 38.75H21.875V22.5H18.125V38.75Z" fill="#E9A132"/>
                      <path d="M14.375 40H9.375C9.20924 40 9.05027 39.9342 8.93306 39.8169C8.81585 39.6997 8.75 39.5408 8.75 39.375V30C8.75 29.6685 8.8817 29.3505 9.11612 29.1161C9.35054 28.8817 9.66848 28.75 10 28.75H13.75C14.0815 28.75 14.3995 28.8817 14.6339 29.1161C14.8683 29.3505 15 29.6685 15 30V39.375C15 39.5408 14.9342 39.6997 14.8169 39.8169C14.6997 39.9342 14.5408 40 14.375 40ZM10 38.75H13.75V30H10V38.75Z" fill="#E9A132"/>
                      <path d="M6.25 40H1.25C1.08424 40 0.925268 39.9342 0.808058 39.8169C0.690848 39.6997 0.625 39.5408 0.625 39.375V35C0.625 34.6685 0.756696 34.3505 0.991117 34.1161C1.22554 33.8817 1.54348 33.75 1.875 33.75H5.625C5.95652 33.75 6.27446 33.8817 6.50888 34.1161C6.7433 34.3505 6.875 34.6685 6.875 35V39.375C6.875 39.5408 6.80915 39.6997 6.69194 39.8169C6.57473 39.9342 6.41576 40 6.25 40ZM1.875 38.75H5.625V35H1.875V38.75Z" fill="#E9A132"/>
                      <path d="M30.625 40H25.625C25.4592 40 25.3003 39.9342 25.1831 39.8169C25.0658 39.6997 25 39.5408 25 39.375V13.75C25 13.4185 25.1317 13.1005 25.3661 12.8661C25.6005 12.6317 25.9185 12.5 26.25 12.5H30C30.3315 12.5 30.6495 12.6317 30.8839 12.8661C31.1183 13.1005 31.25 13.4185 31.25 13.75V39.375C31.25 39.5408 31.1842 39.6997 31.0669 39.8169C30.9497 39.9342 30.7908 40 30.625 40ZM26.25 38.75H30V13.75H26.25V38.75Z" fill="#E9A132"/>
                      <path d="M38.75 40H33.75C33.5842 40 33.4253 39.9342 33.3081 39.8169C33.1908 39.6997 33.125 39.5408 33.125 39.375V6.25C33.125 5.91848 33.2567 5.60054 33.4911 5.36612C33.7255 5.1317 34.0435 5 34.375 5H38.125C38.4565 5 38.7745 5.1317 39.0089 5.36612C39.2433 5.60054 39.375 5.91848 39.375 6.25V8.75H38.125V6.25H34.375V38.75H38.125V12.5H39.375V39.375C39.375 39.5408 39.3092 39.6997 39.1919 39.8169C39.0747 39.9342 38.9158 40 38.75 40Z" fill="#E9A132"/>
                      <path d="M38.125 10H39.375V11.2506H38.125V10Z" fill="#E9A132"/>
                      <path d="M18.6721 8.83203C18.6194 8.43794 18.5401 8.04787 18.4346 7.66453L19.6396 7.33203C19.7604 7.77052 19.851 8.21677 19.9108 8.66766L18.6721 8.83203Z" fill="#E9A132"/>
                      <path d="M9.99989 20.0002C8.03098 20.0001 6.10588 19.4189 4.46595 18.3293C2.82602 17.2397 1.54423 15.6902 0.781286 13.8751C0.0183417 12.06 -0.191807 10.0601 0.177185 8.12607C0.546178 6.19204 1.47789 4.40997 2.85551 3.00329C4.00118 1.83308 5.41671 0.962149 6.97773 0.46702C8.53874 -0.0281087 10.1975 -0.132282 11.8082 0.163653C13.4189 0.459587 14.9322 1.14657 16.2153 2.16425C17.4984 3.18192 18.5119 4.49914 19.1668 6.00016L18.0218 6.50016C17.3418 4.93851 16.2202 3.60962 14.795 2.6769C13.3699 1.74417 11.7032 1.24826 9.99989 1.25016H9.90739C8.18086 1.26841 6.49832 1.79706 5.07161 2.76956C3.6449 3.74205 2.5378 5.1149 1.88969 6.71528C1.24159 8.31565 1.08145 10.072 1.42945 11.7632C1.77744 13.4544 2.61801 15.0048 3.84532 16.2193C5.07263 17.4338 6.63182 18.258 8.32658 18.5882C10.0213 18.9184 11.7759 18.7398 13.3694 18.0749C14.9629 17.41 16.324 16.2885 17.2814 14.8516C18.2389 13.4148 18.7498 11.7268 18.7499 10.0002H19.9999C19.9918 12.6319 18.9498 15.1551 17.0986 17.0257C15.2473 18.8963 12.7352 19.9646 10.1036 20.0002H9.99989Z" fill="#E9A132"/>
                      <path d="M9.375 3.75H10.625V5.625H9.375V3.75Z" fill="#E9A132"/>
                      <path d="M10.9375 15H7.5V13.75H10.9375C11.3519 13.75 11.7493 13.5854 12.0424 13.2924C12.3354 12.9993 12.5 12.6019 12.5 12.1875C12.5 11.7731 12.3354 11.3757 12.0424 11.0826C11.7493 10.7896 11.3519 10.625 10.9375 10.625H9.0625C8.31658 10.625 7.60121 10.3287 7.07376 9.80124C6.54632 9.27379 6.25 8.55842 6.25 7.8125C6.25 7.06658 6.54632 6.35121 7.07376 5.82376C7.60121 5.29632 8.31658 5 9.0625 5H12.5V6.25H9.0625C8.6481 6.25 8.25067 6.41462 7.95765 6.70765C7.66462 7.00067 7.5 7.3981 7.5 7.8125C7.5 8.2269 7.66462 8.62433 7.95765 8.91735C8.25067 9.21038 8.6481 9.375 9.0625 9.375H10.9375C11.6834 9.375 12.3988 9.67132 12.9262 10.1988C13.4537 10.7262 13.75 11.4416 13.75 12.1875C13.75 12.9334 13.4537 13.6488 12.9262 14.1762C12.3988 14.7037 11.6834 15 10.9375 15Z" fill="#E9A132"/>
                      <path d="M9.375 14.375H10.625V16.25H9.375V14.375Z" fill="#E9A132"/>
                      <path d="M0.625 38.75H39.375V40H0.625V38.75Z" fill="#E9A132"/>
                      <path d="M3.56637 30.442L2.68262 29.5583L9.55762 22.6833C9.6748 22.566 9.83375 22.5002 9.99949 22.5001H13.4732L25.7857 8.95451C25.8445 8.88995 25.9161 8.83841 25.996 8.80321C26.0758 8.76801 26.1622 8.74993 26.2495 8.75014H27.837L35.1501 0.218262L36.0989 1.03076L28.5989 9.78076C28.5403 9.8494 28.4676 9.90455 28.3857 9.94242C28.3038 9.98028 28.2147 9.99998 28.1245 10.0001H26.5257L14.212 23.5458C14.1534 23.6102 14.082 23.6616 14.0023 23.6968C13.9227 23.732 13.8366 23.7502 13.7495 23.7501H10.2582L3.56637 30.442Z" fill="#E9A132"/>
                      <path d="M0.179688 32.0552L1.4295 30.8054L2.31338 31.6892L1.06357 32.9391L0.179688 32.0552Z" fill="#E9A132"/>
                      <path d="M36.25 3.75H35V1.25H32.5V0H35.625C35.7908 0 35.9497 0.065848 36.0669 0.183058C36.1842 0.300269 36.25 0.45924 36.25 0.625V3.75Z" fill="#E9A132"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_510_5809">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                                                       
                  </div>
                  <div>
                    <h2 class="cs_fs_20 cs_mb_8">Finance market advisory</h2>
                    <p class="m-0">Your reliable partner in simplifying the complexities of accounting and bookkeeping.</p>
                  </div>
                </div>
              </div>

              <div class="d-flex align-items-center cs_row_gap_20 cs_column_gap_30 cs_column_gap_lg_20 flex-wrap">
                <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                <a href="https://www.youtube.com/embed/VStvZjykQ00" class="cs_video_open d-flex align-items-center">
                  <span class="cs_player_btn cs_width_45 cs_height_45 rounded-circle d-flex align-items-center justify-content-center text-white bg-primary position-relative cs_pl_5">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.71401 16C1.61636 16 1.51868 15.9748 1.43054 15.9246C1.25251 15.8231 1.14258 15.6339 1.14258 15.4285V0.570579C1.14258 0.365193 1.25251 0.176009 1.43054 0.0744495C1.61022 -0.026561 1.82844 -0.0243301 2.00475 0.0783627L14.5762 7.50735C14.7503 7.6106 14.8569 7.79755 14.8569 7.99957C14.8569 8.20159 14.7503 8.38855 14.5762 8.49179L2.00475 15.9207C1.9149 15.9732 1.81443 16 1.71401 16ZM2.28544 1.57172V14.4274L13.1621 7.99957L2.28544 1.57172Z" fill="white"/>
                    </svg>   
                  </span>
                  <span class="cs_ml_15">Watch the video</span>               
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start Brand Section -->
    <div class="cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <div class="cs_brands d-flex justify-content-xl-between align-items-center cs_column_gap_25 cs_row_gap_25 flex-wrap justify-content-center">
          <div class="cs_brand"><img src="assets/img/brand_1.svg" alt="Brand"></div>
          <div class="cs_brand"><img src="assets/img/brand_2.svg" alt="Brand"></div>
          <div class="cs_brand"><img src="assets/img/brand_3.svg" alt="Brand"></div>
          <div class="cs_brand"><img src="assets/img/brand_4.svg" alt="Brand"></div>
          <div class="cs_brand"><img src="assets/img/brand_5.svg" alt="Brand"></div>
        </div>
      </div>
    </div>
    <!-- End Brand Section -->

    <!-- Start Service Section -->
    <section class="background-filled cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 cs_gray_bg" data-src="assets/img/services_bg.png">
      <div class="container">
        <div class="cs_service_slider cs_gap_24">
          <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
            <div class="cs_section_heading_in">
              <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Service List</h3>
              <h2 class="cs_fs_48 cs_fs_lg_36 m-0">We Provide The Solution <br>For Our Clients</h2>
            </div>
            <div class="cs_section_heading_right">
              <div class="d-flex cs_column_gap_15 justify-content-lg-end justify-content-start">
                <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                    <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
                  </svg>             
                </div>
                <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                    <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
                  </svg>          
                </div>
              </div>
            </div>
          </div>
          <div class="cs_slider_activate">
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_1.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.44607 10.4345C7.69334 10.65 8.06841 10.62 8.27881 10.3706L9.70521 8.6801C9.91388 8.43275 9.88255 8.06315 9.63521 7.8544C9.38779 7.64572 9.01818 7.67713 8.80951 7.9244L7.76701 9.15994L7.40154 8.84158C7.15755 8.62893 6.78748 8.65432 6.57482 8.89846C6.36224 9.14244 6.38771 9.51252 6.63177 9.7251L7.44607 10.4345Z" fill="white"/>
                      <path d="M9.63521 18.7069C9.38779 18.4983 9.01818 18.5297 8.80951 18.7769L7.76701 20.0125L7.40154 19.6941C7.15755 19.4815 6.78748 19.5069 6.57482 19.751C6.36224 19.995 6.38771 20.3651 6.63177 20.5776L7.44607 21.2871C7.69334 21.5026 8.06841 21.4726 8.27881 21.2233L9.70521 19.5327C9.91388 19.2854 9.88248 18.9157 9.63521 18.7069Z" fill="white"/>
                      <path d="M9.63521 29.5595C9.38779 29.3508 9.01818 29.3822 8.80951 29.6295L7.76701 30.865L7.40154 30.5467C7.15755 30.334 6.78748 30.3594 6.57482 30.6035C6.36224 30.8475 6.38771 31.2176 6.63177 31.4302L7.44607 32.1396C7.69334 32.3552 8.06841 32.3252 8.27881 32.0758L9.70521 30.3853C9.91388 30.1379 9.88248 29.7682 9.63521 29.5595Z" fill="white"/>
                      <path d="M15.2129 8.30664H27.5983C27.922 8.30664 28.1842 8.04438 28.1842 7.7207C28.1842 7.39703 27.922 7.13477 27.5983 7.13477H15.2129C14.8892 7.13477 14.627 7.39703 14.627 7.7207C14.627 8.04438 14.8892 8.30664 15.2129 8.30664Z" fill="white"/>
                      <path d="M15.2129 11.1606H27.5983C27.922 11.1606 28.1842 10.8984 28.1842 10.5747C28.1842 10.251 27.922 9.98877 27.5983 9.98877H15.2129C14.8892 9.98877 14.627 10.251 14.627 10.5747C14.627 10.8984 14.8892 11.1606 15.2129 11.1606Z" fill="white"/>
                      <path d="M10.7185 4.84326H5.5559C4.6059 4.84326 3.83301 5.61615 3.83301 6.56615V7.72045C3.83301 8.04412 4.09527 8.30639 4.41895 8.30639C4.74262 8.30639 5.00488 8.04412 5.00488 7.72045V6.56615C5.00488 6.26232 5.25207 6.01514 5.5559 6.01514H10.7185C11.0223 6.01514 11.2694 6.26232 11.2694 6.56615V11.7287C11.2694 12.0326 11.0223 12.2797 10.7185 12.2797H5.5559C5.25207 12.2797 5.00488 12.0326 5.00488 11.7287V10.5169C5.00488 10.1933 4.74262 9.931 4.41895 9.931C4.09527 9.931 3.83301 10.1933 3.83301 10.5169V11.7287C3.83301 12.6787 4.6059 13.4515 5.5559 13.4515H10.7185C11.6684 13.4515 12.4413 12.6787 12.4413 11.7287V6.56615C12.4412 5.61615 11.6684 4.84326 10.7185 4.84326Z" fill="white"/>
                      <path d="M10.7185 15.6958H5.5559C4.6059 15.6958 3.83301 16.4687 3.83301 17.4187V22.5813C3.83301 23.5312 4.6059 24.3041 5.5559 24.3041H10.7185C11.6684 24.3041 12.4413 23.5312 12.4413 22.5813V17.4187C12.4412 16.4687 11.6684 15.6958 10.7185 15.6958ZM11.2693 22.5813C11.2693 22.8851 11.0222 23.1322 10.7184 23.1322H5.5559C5.25207 23.1322 5.00488 22.8851 5.00488 22.5813V17.4187C5.00488 17.1149 5.25207 16.8677 5.5559 16.8677H10.7185C11.0223 16.8677 11.2694 17.1149 11.2694 17.4187L11.2693 22.5813Z" fill="white"/>
                      <path d="M10.7185 26.5483H5.5559C4.6059 26.5483 3.83301 27.3212 3.83301 28.2712V33.4338C3.83301 34.3837 4.6059 35.1566 5.5559 35.1566H10.7185C11.6684 35.1566 12.4413 34.3837 12.4413 33.4338V28.2712C12.4412 27.3212 11.6684 26.5483 10.7185 26.5483ZM11.2693 33.4338C11.2693 33.7376 11.0222 33.9847 10.7184 33.9847H5.5559C5.25207 33.9847 5.00488 33.7376 5.00488 33.4338V28.2712C5.00488 27.9674 5.25207 27.7202 5.5559 27.7202H10.7185C11.0223 27.7202 11.2694 27.9674 11.2694 28.2712L11.2693 33.4338Z" fill="white"/>
                      <path d="M36.0414 5.19195C34.5098 4.52484 32.721 5.22773 32.0537 6.7593L31.8784 7.16164V4.14C31.8784 1.85719 30.0212 0 27.7384 0H4.27867C1.99586 0 0.138672 1.85719 0.138672 4.14V35.86C0.138672 38.1428 1.99586 40 4.27867 40H27.7384C30.0212 40 31.8784 38.1428 31.8784 35.86V22.3316C32.1787 21.6423 37.2757 9.94398 37.6087 9.17969C38.2777 7.64445 37.5766 5.86086 36.0414 5.19195ZM21.1896 31.6934H15.213C14.8894 31.6934 14.6271 31.9557 14.6271 32.2794C14.6271 32.603 14.8894 32.8653 15.213 32.8653H20.6816C20.4048 33.5308 20.2655 34.2334 20.2702 34.9561V34.9562L20.2962 38.8281H4.27867C2.64203 38.8281 1.31055 37.4966 1.31055 35.86V4.14C1.31055 2.50336 2.64203 1.17188 4.27867 1.17188H27.7384C29.375 1.17188 30.7065 2.50336 30.7065 4.14V9.85125C29.9661 11.5505 27.8855 16.3256 27.1616 17.9872H15.2131C14.8895 17.9872 14.6272 18.2495 14.6272 18.5731C14.6272 18.8968 14.8895 19.1591 15.2131 19.1591H26.651L25.9182 20.841H15.2131C14.8895 20.841 14.6272 21.1033 14.6272 21.427C14.6272 21.7506 14.8895 22.0129 15.2131 22.0129H25.4076L22.4331 28.8396H15.2131C14.8895 28.8396 14.6272 29.1019 14.6272 29.4255C14.6272 29.7492 14.8895 30.0115 15.2131 30.0115H21.9225L21.1896 31.6934ZM21.4421 34.9483C21.4409 34.7615 21.4532 34.5766 21.4762 34.3937C21.9887 34.617 21.2743 34.3057 24.572 35.7425C24.4537 35.8839 24.3267 36.0188 24.1891 36.1451L21.4669 38.642L21.4421 34.9483ZM30.7065 35.86C30.7065 37.4966 29.375 38.8281 27.7384 38.8281H22.9977L24.9812 37.0088C25.5362 36.4996 25.9702 35.8914 26.2712 35.2008L30.7065 25.0211V35.86ZM25.1968 34.7327C25.1963 34.7337 25.1958 34.7347 25.1953 34.7358L24.0294 34.2278L26.7874 27.8978C26.9166 27.6011 26.7809 27.2559 26.4843 27.1266C26.1875 26.9974 25.8423 27.1331 25.713 27.4297L22.955 33.7597L21.7891 33.2517C21.7896 33.2507 21.7899 33.2496 21.7904 33.2486L30.7481 12.6898L31.9141 13.1977L26.8071 24.9187C26.6779 25.2155 26.8136 25.5607 27.1102 25.69C27.4086 25.8199 27.7529 25.682 27.8815 25.3869L32.9884 13.6658L34.1544 14.1737C34.0119 14.5009 25.3323 34.4216 25.1968 34.7327ZM34.6226 13.0994L31.2162 11.6153L31.7977 10.2808L35.2041 11.7649L34.6226 13.0994ZM36.5344 8.71156L35.6721 10.6905L32.2658 9.20641L33.128 7.22742C33.5371 6.28828 34.6341 5.85711 35.5733 6.26633C36.5145 6.67633 36.9448 7.77 36.5344 8.71156Z" fill="white"/>
                    </svg>                    
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Accounting and Bookkeeping</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_2.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_516_334)">
                      <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                      <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                      <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                      <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                      <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                      <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_516_334">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Risk Management Solutions</a></h2>
                </div>
                <p class="cs_mb_20">Navigate uncertain financial landscapes with our risk management expertise. We identify potential risks and design proactive.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_2.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_516_349)">
                      <path d="M8.75 26.875C6.3375 26.875 4.375 28.8375 4.375 31.25C4.375 33.6625 6.3375 35.625 8.75 35.625C11.1625 35.625 13.125 33.6625 13.125 31.25C13.125 28.8375 11.1625 26.875 8.75 26.875ZM8.75 34.375C7.02688 34.375 5.625 32.9731 5.625 31.25C5.625 29.5269 7.02688 28.125 8.75 28.125C10.4731 28.125 11.875 29.5269 11.875 31.25C11.875 32.9731 10.4731 34.375 8.75 34.375Z" fill="white"/>
                      <path d="M8.75 29.375C7.71625 29.375 6.875 30.2162 6.875 31.25C6.875 32.2838 7.71625 33.125 8.75 33.125C9.78375 33.125 10.625 32.2838 10.625 31.25C10.625 30.2162 9.78375 29.375 8.75 29.375ZM8.75 31.875C8.40562 31.875 8.125 31.5944 8.125 31.25C8.125 30.9056 8.40562 30.625 8.75 30.625C9.09437 30.625 9.375 30.9056 9.375 31.25C9.375 31.5944 9.09437 31.875 8.75 31.875Z" fill="white"/>
                      <path d="M36.8662 12.7744L38.1488 11.4956L38.1475 11.2344C38.1325 8.83063 36.1656 6.875 33.75 6.875H33.4912L32.23 8.13625C30.6225 7.09375 28.8144 6.33438 26.875 5.93937V4.375C27.9088 4.375 28.75 3.53375 28.75 2.5C28.75 1.46625 27.9088 0.625 26.875 0.625H20.625C19.5912 0.625 18.75 1.46625 18.75 2.5C18.75 3.53375 19.5912 4.375 20.625 4.375V5.93937C18.6906 6.33375 16.8875 7.08938 15.2838 8.12813L14.2138 7.05813L14.0188 6.875H13.76C11.3563 6.875 9.38937 8.83063 9.375 11.2344L9.37375 11.4956L10.6425 12.7612C9.0525 15.2075 8.125 18.1213 8.125 21.25C8.125 21.8738 8.1775 22.5069 8.255 23.1394C7.50125 23.2119 6.85375 23.7156 6.61313 24.4475C6.55125 24.6363 6.41562 24.7838 6.24062 24.8512C6.15875 24.8831 6.0775 24.9163 5.99625 24.9519C5.82562 25.0256 5.62687 25.0175 5.45062 24.9281C4.70812 24.5525 3.81375 24.6956 3.225 25.2844L2.785 25.725C2.19625 26.3131 2.05312 27.2081 2.42875 27.9506C2.51812 28.1269 2.52625 28.3256 2.4525 28.4969C2.4175 28.5775 2.38375 28.6594 2.35188 28.7406C2.28437 28.9156 2.13625 29.0513 1.94687 29.1131C1.15625 29.3731 0.625 30.1069 0.625 30.9387V31.5613C0.625 32.3931 1.15625 33.1269 1.9475 33.3869C2.13625 33.4487 2.28375 33.5844 2.35125 33.7581C2.38313 33.8406 2.41625 33.9225 2.45188 34.0037C2.52563 34.1744 2.51688 34.3731 2.42813 34.5494C2.0525 35.2919 2.19562 36.1869 2.78437 36.775L3.22438 37.2156C3.81312 37.8044 4.7075 37.9469 5.45 37.5719C5.62563 37.4825 5.82437 37.4738 5.99625 37.5481C6.07687 37.5831 6.15875 37.6169 6.24 37.6488C6.415 37.7162 6.55062 37.8644 6.6125 38.0537C6.87313 38.8438 7.60687 39.375 8.43875 39.375H9.06125C9.89313 39.375 10.6269 38.8438 10.8869 38.0525C10.9488 37.8638 11.0844 37.7162 11.2581 37.6488C11.3406 37.6169 11.4225 37.5838 11.5037 37.5481C11.6737 37.4738 11.8731 37.4825 12.0494 37.5719C12.7919 37.9469 13.6869 37.8044 14.275 37.2156L14.7156 36.7756C15.3044 36.1875 15.4475 35.2925 15.0719 34.55C15.0138 34.435 15.0031 34.3119 15.0144 34.1919C17.5994 35.9425 20.5994 36.875 23.75 36.875C32.3656 36.875 39.375 29.8656 39.375 21.25C39.375 18.1275 38.4506 15.2181 36.8662 12.7744ZM34 8.13375C35.525 8.24937 36.7544 9.46688 36.8856 10.99L36.135 11.7387C35.3063 10.6625 34.3412 9.6975 33.2656 8.86875L34 8.13375ZM20 2.5C20 2.15562 20.2806 1.875 20.625 1.875H26.875C27.2194 1.875 27.5 2.15562 27.5 2.5C27.5 2.84437 27.2194 3.125 26.875 3.125H20.625C20.2806 3.125 20 2.84437 20 2.5ZM25.625 4.375V5.74125C25.01 5.6675 24.385 5.625 23.75 5.625C23.115 5.625 22.49 5.6675 21.875 5.74125V4.375H25.625ZM10.6369 10.99C10.7675 9.47 11.9919 8.255 13.5231 8.135L14.2475 8.85938C13.1706 9.68688 12.205 10.6519 11.3756 11.7269L10.6369 10.99ZM15.625 31.5613C15.625 31.8519 15.4394 32.1081 15.1625 32.1994C14.6175 32.3781 14.1875 32.7819 13.9838 33.3069C13.9575 33.3737 13.93 33.4406 13.9019 33.5056C13.6794 34.0181 13.6987 34.6037 13.9563 35.1131C14.0875 35.3725 14.0375 35.685 13.8319 35.8906L13.3913 36.3312C13.1856 36.5375 12.8731 36.5869 12.6137 36.4556C12.1044 36.1981 11.5188 36.1794 11.0069 36.4012C10.9412 36.4294 10.8744 36.4569 10.8063 36.4837C10.2819 36.6875 9.87875 37.1175 9.69938 37.6631C9.60875 37.9394 9.35188 38.125 9.06125 38.125H8.43875C8.14812 38.125 7.89187 37.9394 7.80062 37.6625C7.62187 37.1175 7.21812 36.6875 6.69312 36.4837C6.62625 36.4575 6.55937 36.43 6.49437 36.4019C6.25812 36.2988 6.00625 36.2475 5.75313 36.2475C5.4575 36.2475 5.16125 36.3175 4.88687 36.4556C4.62625 36.5869 4.315 36.5369 4.10938 36.3312L3.66875 35.8906C3.46312 35.685 3.41313 35.3725 3.54437 35.1131C3.80188 34.6037 3.82125 34.0181 3.59875 33.5062C3.57062 33.4406 3.54312 33.3738 3.51625 33.3056C3.3125 32.7812 2.8825 32.3781 2.33688 32.1988C2.06063 32.1088 1.875 31.8519 1.875 31.5613V30.9387C1.875 30.6481 2.06063 30.3919 2.33688 30.3006C2.8825 30.1219 3.3125 29.7181 3.51625 29.1931C3.5425 29.1262 3.57 29.0594 3.59812 28.9944C3.82063 28.4819 3.80125 27.8962 3.54375 27.3869C3.4125 27.1275 3.4625 26.8144 3.66812 26.6088L4.10812 26.1687C4.31375 25.9625 4.62563 25.9125 4.88625 26.0444C5.39563 26.3019 5.9825 26.3212 6.49312 26.0987C6.55937 26.07 6.62625 26.0425 6.69312 26.0169C7.2175 25.8125 7.62125 25.3825 7.80062 24.8375C7.89125 24.5606 8.14812 24.375 8.43875 24.375H9.06125C9.35188 24.375 9.60812 24.5606 9.69938 24.8375C9.87875 25.3825 10.2819 25.8125 10.8063 26.0163C10.8731 26.0425 10.94 26.07 11.0056 26.0981C11.5175 26.3206 12.1038 26.3006 12.6131 26.0437C12.8725 25.9119 13.185 25.9625 13.3913 26.1681L13.8312 26.6081C14.0369 26.8138 14.0869 27.1269 13.9556 27.3862C13.6981 27.8956 13.6788 28.4813 13.9013 28.9931C13.9294 29.0588 13.9569 29.1256 13.9838 29.1937C14.1875 29.7181 14.6175 30.1213 15.1631 30.3006C15.4394 30.3912 15.625 30.6481 15.625 30.9387V31.5613ZM11.9069 20.625C12.0538 17.8225 13.1719 15.2794 14.9363 13.32L16.6794 15.0631L17.5631 14.1794L15.82 12.4363C17.7794 10.6713 20.3225 9.55375 23.125 9.40687V11.875H24.375V9.40687C27.1775 9.55375 29.7206 10.6719 31.68 12.4363L29.9369 14.1794L30.8206 15.0631L32.5638 13.32C34.3288 15.2794 35.4463 17.8225 35.5931 20.625H33.125V21.875H35.5931C35.4463 24.6775 34.3281 27.2206 32.5638 29.18L30.8206 27.4369L29.9369 28.3206L31.68 30.0638C29.7206 31.8288 27.1775 32.9463 24.375 33.0931V30.625H23.125V33.1C20.8713 32.9825 18.7275 32.2306 16.8725 30.9044C16.8631 30.3931 16.655 29.9212 16.3081 29.5762L17.5631 28.3212L16.6794 27.4375L15.2413 28.8756C15.2087 28.8319 15.1694 28.7925 15.1494 28.7419C15.1175 28.6594 15.0844 28.5775 15.0487 28.4963C14.975 28.3256 14.9837 28.1269 15.0725 27.9506C15.4481 27.2081 15.305 26.3131 14.7162 25.725L14.6156 25.625H33.125V24.375H30.625V18.125H26.875V24.375H25.625V14.375H21.875V24.375H20.625V16.875H16.875V24.375H14.375V25.3844L14.275 25.2844C13.7856 24.795 13.0863 24.6187 12.4369 24.7869C12.135 23.83 11.9563 22.8556 11.9031 21.8744H14.375V20.6244L11.9069 20.625ZM18.125 24.375V18.125H19.375V24.375H18.125ZM23.125 24.375V15.625H24.375V24.375H23.125ZM28.125 24.375V19.375H29.375V24.375H28.125ZM23.75 35.625C20.91 35.625 18.2019 34.8037 15.8569 33.2556C16.2469 33.0481 16.5456 32.7131 16.7156 32.315C18.8244 33.665 21.2356 34.375 23.75 34.375C30.9875 34.375 36.875 28.4875 36.875 21.25C36.875 14.0125 30.9875 8.125 23.75 8.125C16.5125 8.125 10.625 14.0125 10.625 21.25C10.625 22.4281 10.7906 23.6013 11.1131 24.7513C11.0138 24.6731 10.9288 24.5756 10.8869 24.4462C10.6763 23.8056 10.1525 23.3412 9.52 23.1862C9.43125 22.5375 9.375 21.8881 9.375 21.25C9.375 13.3237 15.8237 6.875 23.75 6.875C31.6763 6.875 38.125 13.3237 38.125 21.25C38.125 29.1763 31.6763 35.625 23.75 35.625Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_516_349">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                                         
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Business Financial Health Check</a></h2>
                </div>
                <p class="cs_mb_20">For businesses, we conduct comprehensive financial health assessments to identify areas for improvement, optimize cash flow.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_4.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.44607 10.4345C8.69334 10.65 9.06841 10.62 9.27881 10.3706L10.7052 8.6801C10.9139 8.43275 10.8826 8.06315 10.6352 7.8544C10.3878 7.64572 10.0182 7.67713 9.80951 7.9244L8.76701 9.15994L8.40154 8.84158C8.15755 8.62893 7.78748 8.65432 7.57482 8.89846C7.36224 9.14244 7.38771 9.51252 7.63177 9.7251L8.44607 10.4345Z" fill="white"/>
                      <path d="M10.6352 18.7069C10.3878 18.4983 10.0182 18.5297 9.80951 18.7769L8.76701 20.0125L8.40154 19.6941C8.15755 19.4815 7.78748 19.5069 7.57482 19.751C7.36224 19.995 7.38771 20.3651 7.63177 20.5776L8.44607 21.2871C8.69334 21.5026 9.06841 21.4726 9.27881 21.2233L10.7052 19.5327C10.9139 19.2854 10.8825 18.9157 10.6352 18.7069Z" fill="white"/>
                      <path d="M10.6352 29.5595C10.3878 29.3508 10.0182 29.3822 9.80951 29.6295L8.76701 30.865L8.40154 30.5467C8.15755 30.334 7.78748 30.3594 7.57482 30.6035C7.36224 30.8475 7.38771 31.2176 7.63177 31.4302L8.44607 32.1396C8.69334 32.3552 9.06841 32.3252 9.27881 32.0758L10.7052 30.3853C10.9139 30.1379 10.8825 29.7682 10.6352 29.5595Z" fill="white"/>
                      <path d="M16.2129 8.30664H28.5983C28.922 8.30664 29.1842 8.04438 29.1842 7.7207C29.1842 7.39703 28.922 7.13477 28.5983 7.13477H16.2129C15.8892 7.13477 15.627 7.39703 15.627 7.7207C15.627 8.04438 15.8892 8.30664 16.2129 8.30664Z" fill="white"/>
                      <path d="M16.2129 11.1606H28.5983C28.922 11.1606 29.1842 10.8984 29.1842 10.5747C29.1842 10.251 28.922 9.98877 28.5983 9.98877H16.2129C15.8892 9.98877 15.627 10.251 15.627 10.5747C15.627 10.8984 15.8892 11.1606 16.2129 11.1606Z" fill="white"/>
                      <path d="M11.7185 4.84326H6.5559C5.6059 4.84326 4.83301 5.61615 4.83301 6.56615V7.72045C4.83301 8.04412 5.09527 8.30639 5.41895 8.30639C5.74262 8.30639 6.00488 8.04412 6.00488 7.72045V6.56615C6.00488 6.26232 6.25207 6.01514 6.5559 6.01514H11.7185C12.0223 6.01514 12.2694 6.26232 12.2694 6.56615V11.7287C12.2694 12.0326 12.0223 12.2797 11.7185 12.2797H6.5559C6.25207 12.2797 6.00488 12.0326 6.00488 11.7287V10.5169C6.00488 10.1933 5.74262 9.931 5.41895 9.931C5.09527 9.931 4.83301 10.1933 4.83301 10.5169V11.7287C4.83301 12.6787 5.6059 13.4515 6.5559 13.4515H11.7185C12.6684 13.4515 13.4413 12.6787 13.4413 11.7287V6.56615C13.4412 5.61615 12.6684 4.84326 11.7185 4.84326Z" fill="white"/>
                      <path d="M11.7185 15.6958H6.5559C5.6059 15.6958 4.83301 16.4687 4.83301 17.4187V22.5813C4.83301 23.5312 5.6059 24.3041 6.5559 24.3041H11.7185C12.6684 24.3041 13.4413 23.5312 13.4413 22.5813V17.4187C13.4412 16.4687 12.6684 15.6958 11.7185 15.6958ZM12.2693 22.5813C12.2693 22.8851 12.0222 23.1322 11.7184 23.1322H6.5559C6.25207 23.1322 6.00488 22.8851 6.00488 22.5813V17.4187C6.00488 17.1149 6.25207 16.8677 6.5559 16.8677H11.7185C12.0223 16.8677 12.2694 17.1149 12.2694 17.4187L12.2693 22.5813Z" fill="white"/>
                      <path d="M11.7185 26.5483H6.5559C5.6059 26.5483 4.83301 27.3212 4.83301 28.2712V33.4338C4.83301 34.3837 5.6059 35.1566 6.5559 35.1566H11.7185C12.6684 35.1566 13.4413 34.3837 13.4413 33.4338V28.2712C13.4412 27.3212 12.6684 26.5483 11.7185 26.5483ZM12.2693 33.4338C12.2693 33.7376 12.0222 33.9847 11.7184 33.9847H6.5559C6.25207 33.9847 6.00488 33.7376 6.00488 33.4338V28.2712C6.00488 27.9674 6.25207 27.7202 6.5559 27.7202H11.7185C12.0223 27.7202 12.2694 27.9674 12.2694 28.2712L12.2693 33.4338Z" fill="white"/>
                      <path d="M37.0414 5.19195C35.5098 4.52484 33.721 5.22773 33.0537 6.7593L32.8784 7.16164V4.14C32.8784 1.85719 31.0212 0 28.7384 0H5.27867C2.99586 0 1.13867 1.85719 1.13867 4.14V35.86C1.13867 38.1428 2.99586 40 5.27867 40H28.7384C31.0212 40 32.8784 38.1428 32.8784 35.86V22.3316C33.1787 21.6423 38.2757 9.94398 38.6087 9.17969C39.2777 7.64445 38.5766 5.86086 37.0414 5.19195ZM22.1896 31.6934H16.213C15.8894 31.6934 15.6271 31.9557 15.6271 32.2794C15.6271 32.603 15.8894 32.8653 16.213 32.8653H21.6816C21.4048 33.5308 21.2655 34.2334 21.2702 34.9561V34.9562L21.2962 38.8281H5.27867C3.64203 38.8281 2.31055 37.4966 2.31055 35.86V4.14C2.31055 2.50336 3.64203 1.17188 5.27867 1.17188H28.7384C30.375 1.17188 31.7065 2.50336 31.7065 4.14V9.85125C30.9661 11.5505 28.8855 16.3256 28.1616 17.9872H16.2131C15.8895 17.9872 15.6272 18.2495 15.6272 18.5731C15.6272 18.8968 15.8895 19.1591 16.2131 19.1591H27.651L26.9182 20.841H16.2131C15.8895 20.841 15.6272 21.1033 15.6272 21.427C15.6272 21.7506 15.8895 22.0129 16.2131 22.0129H26.4076L23.4331 28.8396H16.2131C15.8895 28.8396 15.6272 29.1019 15.6272 29.4255C15.6272 29.7492 15.8895 30.0115 16.2131 30.0115H22.9225L22.1896 31.6934ZM22.4421 34.9483C22.4409 34.7615 22.4532 34.5766 22.4762 34.3937C22.9887 34.617 22.2743 34.3057 25.572 35.7425C25.4537 35.8839 25.3267 36.0188 25.1891 36.1451L22.4669 38.642L22.4421 34.9483ZM31.7065 35.86C31.7065 37.4966 30.375 38.8281 28.7384 38.8281H23.9977L25.9812 37.0088C26.5362 36.4996 26.9702 35.8914 27.2712 35.2008L31.7065 25.0211V35.86ZM26.1968 34.7327C26.1963 34.7337 26.1958 34.7347 26.1953 34.7358L25.0294 34.2278L27.7874 27.8978C27.9166 27.6011 27.7809 27.2559 27.4843 27.1266C27.1875 26.9974 26.8423 27.1331 26.713 27.4297L23.955 33.7597L22.7891 33.2517C22.7896 33.2507 22.7899 33.2496 22.7904 33.2486L31.7481 12.6898L32.9141 13.1977L27.8071 24.9187C27.6779 25.2155 27.8136 25.5607 28.1102 25.69C28.4086 25.8199 28.7529 25.682 28.8815 25.3869L33.9884 13.6658L35.1544 14.1737C35.0119 14.5009 26.3323 34.4216 26.1968 34.7327ZM35.6226 13.0994L32.2162 11.6153L32.7977 10.2808L36.2041 11.7649L35.6226 13.0994ZM37.5344 8.71156L36.6721 10.6905L33.2658 9.20641L34.128 7.22742C34.5371 6.28828 35.6341 5.85711 36.5733 6.26633C37.5145 6.67633 37.9448 7.77 37.5344 8.71156Z" fill="white"/>
                    </svg>                                         
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Startup Financial Guidance</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_1.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.44607 10.4345C7.69334 10.65 8.06841 10.62 8.27881 10.3706L9.70521 8.6801C9.91388 8.43275 9.88255 8.06315 9.63521 7.8544C9.38779 7.64572 9.01818 7.67713 8.80951 7.9244L7.76701 9.15994L7.40154 8.84158C7.15755 8.62893 6.78748 8.65432 6.57482 8.89846C6.36224 9.14244 6.38771 9.51252 6.63177 9.7251L7.44607 10.4345Z" fill="white"/>
                      <path d="M9.63521 18.7069C9.38779 18.4983 9.01818 18.5297 8.80951 18.7769L7.76701 20.0125L7.40154 19.6941C7.15755 19.4815 6.78748 19.5069 6.57482 19.751C6.36224 19.995 6.38771 20.3651 6.63177 20.5776L7.44607 21.2871C7.69334 21.5026 8.06841 21.4726 8.27881 21.2233L9.70521 19.5327C9.91388 19.2854 9.88248 18.9157 9.63521 18.7069Z" fill="white"/>
                      <path d="M9.63521 29.5595C9.38779 29.3508 9.01818 29.3822 8.80951 29.6295L7.76701 30.865L7.40154 30.5467C7.15755 30.334 6.78748 30.3594 6.57482 30.6035C6.36224 30.8475 6.38771 31.2176 6.63177 31.4302L7.44607 32.1396C7.69334 32.3552 8.06841 32.3252 8.27881 32.0758L9.70521 30.3853C9.91388 30.1379 9.88248 29.7682 9.63521 29.5595Z" fill="white"/>
                      <path d="M15.2129 8.30664H27.5983C27.922 8.30664 28.1842 8.04438 28.1842 7.7207C28.1842 7.39703 27.922 7.13477 27.5983 7.13477H15.2129C14.8892 7.13477 14.627 7.39703 14.627 7.7207C14.627 8.04438 14.8892 8.30664 15.2129 8.30664Z" fill="white"/>
                      <path d="M15.2129 11.1606H27.5983C27.922 11.1606 28.1842 10.8984 28.1842 10.5747C28.1842 10.251 27.922 9.98877 27.5983 9.98877H15.2129C14.8892 9.98877 14.627 10.251 14.627 10.5747C14.627 10.8984 14.8892 11.1606 15.2129 11.1606Z" fill="white"/>
                      <path d="M10.7185 4.84326H5.5559C4.6059 4.84326 3.83301 5.61615 3.83301 6.56615V7.72045C3.83301 8.04412 4.09527 8.30639 4.41895 8.30639C4.74262 8.30639 5.00488 8.04412 5.00488 7.72045V6.56615C5.00488 6.26232 5.25207 6.01514 5.5559 6.01514H10.7185C11.0223 6.01514 11.2694 6.26232 11.2694 6.56615V11.7287C11.2694 12.0326 11.0223 12.2797 10.7185 12.2797H5.5559C5.25207 12.2797 5.00488 12.0326 5.00488 11.7287V10.5169C5.00488 10.1933 4.74262 9.931 4.41895 9.931C4.09527 9.931 3.83301 10.1933 3.83301 10.5169V11.7287C3.83301 12.6787 4.6059 13.4515 5.5559 13.4515H10.7185C11.6684 13.4515 12.4413 12.6787 12.4413 11.7287V6.56615C12.4412 5.61615 11.6684 4.84326 10.7185 4.84326Z" fill="white"/>
                      <path d="M10.7185 15.6958H5.5559C4.6059 15.6958 3.83301 16.4687 3.83301 17.4187V22.5813C3.83301 23.5312 4.6059 24.3041 5.5559 24.3041H10.7185C11.6684 24.3041 12.4413 23.5312 12.4413 22.5813V17.4187C12.4412 16.4687 11.6684 15.6958 10.7185 15.6958ZM11.2693 22.5813C11.2693 22.8851 11.0222 23.1322 10.7184 23.1322H5.5559C5.25207 23.1322 5.00488 22.8851 5.00488 22.5813V17.4187C5.00488 17.1149 5.25207 16.8677 5.5559 16.8677H10.7185C11.0223 16.8677 11.2694 17.1149 11.2694 17.4187L11.2693 22.5813Z" fill="white"/>
                      <path d="M10.7185 26.5483H5.5559C4.6059 26.5483 3.83301 27.3212 3.83301 28.2712V33.4338C3.83301 34.3837 4.6059 35.1566 5.5559 35.1566H10.7185C11.6684 35.1566 12.4413 34.3837 12.4413 33.4338V28.2712C12.4412 27.3212 11.6684 26.5483 10.7185 26.5483ZM11.2693 33.4338C11.2693 33.7376 11.0222 33.9847 10.7184 33.9847H5.5559C5.25207 33.9847 5.00488 33.7376 5.00488 33.4338V28.2712C5.00488 27.9674 5.25207 27.7202 5.5559 27.7202H10.7185C11.0223 27.7202 11.2694 27.9674 11.2694 28.2712L11.2693 33.4338Z" fill="white"/>
                      <path d="M36.0414 5.19195C34.5098 4.52484 32.721 5.22773 32.0537 6.7593L31.8784 7.16164V4.14C31.8784 1.85719 30.0212 0 27.7384 0H4.27867C1.99586 0 0.138672 1.85719 0.138672 4.14V35.86C0.138672 38.1428 1.99586 40 4.27867 40H27.7384C30.0212 40 31.8784 38.1428 31.8784 35.86V22.3316C32.1787 21.6423 37.2757 9.94398 37.6087 9.17969C38.2777 7.64445 37.5766 5.86086 36.0414 5.19195ZM21.1896 31.6934H15.213C14.8894 31.6934 14.6271 31.9557 14.6271 32.2794C14.6271 32.603 14.8894 32.8653 15.213 32.8653H20.6816C20.4048 33.5308 20.2655 34.2334 20.2702 34.9561V34.9562L20.2962 38.8281H4.27867C2.64203 38.8281 1.31055 37.4966 1.31055 35.86V4.14C1.31055 2.50336 2.64203 1.17188 4.27867 1.17188H27.7384C29.375 1.17188 30.7065 2.50336 30.7065 4.14V9.85125C29.9661 11.5505 27.8855 16.3256 27.1616 17.9872H15.2131C14.8895 17.9872 14.6272 18.2495 14.6272 18.5731C14.6272 18.8968 14.8895 19.1591 15.2131 19.1591H26.651L25.9182 20.841H15.2131C14.8895 20.841 14.6272 21.1033 14.6272 21.427C14.6272 21.7506 14.8895 22.0129 15.2131 22.0129H25.4076L22.4331 28.8396H15.2131C14.8895 28.8396 14.6272 29.1019 14.6272 29.4255C14.6272 29.7492 14.8895 30.0115 15.2131 30.0115H21.9225L21.1896 31.6934ZM21.4421 34.9483C21.4409 34.7615 21.4532 34.5766 21.4762 34.3937C21.9887 34.617 21.2743 34.3057 24.572 35.7425C24.4537 35.8839 24.3267 36.0188 24.1891 36.1451L21.4669 38.642L21.4421 34.9483ZM30.7065 35.86C30.7065 37.4966 29.375 38.8281 27.7384 38.8281H22.9977L24.9812 37.0088C25.5362 36.4996 25.9702 35.8914 26.2712 35.2008L30.7065 25.0211V35.86ZM25.1968 34.7327C25.1963 34.7337 25.1958 34.7347 25.1953 34.7358L24.0294 34.2278L26.7874 27.8978C26.9166 27.6011 26.7809 27.2559 26.4843 27.1266C26.1875 26.9974 25.8423 27.1331 25.713 27.4297L22.955 33.7597L21.7891 33.2517C21.7896 33.2507 21.7899 33.2496 21.7904 33.2486L30.7481 12.6898L31.9141 13.1977L26.8071 24.9187C26.6779 25.2155 26.8136 25.5607 27.1102 25.69C27.4086 25.8199 27.7529 25.682 27.8815 25.3869L32.9884 13.6658L34.1544 14.1737C34.0119 14.5009 25.3323 34.4216 25.1968 34.7327ZM34.6226 13.0994L31.2162 11.6153L31.7977 10.2808L35.2041 11.7649L34.6226 13.0994ZM36.5344 8.71156L35.6721 10.6905L32.2658 9.20641L33.128 7.22742C33.5371 6.28828 34.6341 5.85711 35.5733 6.26633C36.5145 6.67633 36.9448 7.77 36.5344 8.71156Z" fill="white"/>
                    </svg>                    
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Accounting and Bookkeeping</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_2.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_516_3345)">
                      <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                      <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                      <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                      <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                      <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                      <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_516_3345">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Risk Management Solutions</a></h2>
                </div>
                <p class="cs_mb_20">Navigate uncertain financial landscapes with our risk management expertise. We identify potential risks and design proactive.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_2.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_516_3493)">
                      <path d="M8.75 26.875C6.3375 26.875 4.375 28.8375 4.375 31.25C4.375 33.6625 6.3375 35.625 8.75 35.625C11.1625 35.625 13.125 33.6625 13.125 31.25C13.125 28.8375 11.1625 26.875 8.75 26.875ZM8.75 34.375C7.02688 34.375 5.625 32.9731 5.625 31.25C5.625 29.5269 7.02688 28.125 8.75 28.125C10.4731 28.125 11.875 29.5269 11.875 31.25C11.875 32.9731 10.4731 34.375 8.75 34.375Z" fill="white"/>
                      <path d="M8.75 29.375C7.71625 29.375 6.875 30.2162 6.875 31.25C6.875 32.2838 7.71625 33.125 8.75 33.125C9.78375 33.125 10.625 32.2838 10.625 31.25C10.625 30.2162 9.78375 29.375 8.75 29.375ZM8.75 31.875C8.40562 31.875 8.125 31.5944 8.125 31.25C8.125 30.9056 8.40562 30.625 8.75 30.625C9.09437 30.625 9.375 30.9056 9.375 31.25C9.375 31.5944 9.09437 31.875 8.75 31.875Z" fill="white"/>
                      <path d="M36.8662 12.7744L38.1488 11.4956L38.1475 11.2344C38.1325 8.83063 36.1656 6.875 33.75 6.875H33.4912L32.23 8.13625C30.6225 7.09375 28.8144 6.33438 26.875 5.93937V4.375C27.9088 4.375 28.75 3.53375 28.75 2.5C28.75 1.46625 27.9088 0.625 26.875 0.625H20.625C19.5912 0.625 18.75 1.46625 18.75 2.5C18.75 3.53375 19.5912 4.375 20.625 4.375V5.93937C18.6906 6.33375 16.8875 7.08938 15.2838 8.12813L14.2138 7.05813L14.0188 6.875H13.76C11.3563 6.875 9.38937 8.83063 9.375 11.2344L9.37375 11.4956L10.6425 12.7612C9.0525 15.2075 8.125 18.1213 8.125 21.25C8.125 21.8738 8.1775 22.5069 8.255 23.1394C7.50125 23.2119 6.85375 23.7156 6.61313 24.4475C6.55125 24.6363 6.41562 24.7838 6.24062 24.8512C6.15875 24.8831 6.0775 24.9163 5.99625 24.9519C5.82562 25.0256 5.62687 25.0175 5.45062 24.9281C4.70812 24.5525 3.81375 24.6956 3.225 25.2844L2.785 25.725C2.19625 26.3131 2.05312 27.2081 2.42875 27.9506C2.51812 28.1269 2.52625 28.3256 2.4525 28.4969C2.4175 28.5775 2.38375 28.6594 2.35188 28.7406C2.28437 28.9156 2.13625 29.0513 1.94687 29.1131C1.15625 29.3731 0.625 30.1069 0.625 30.9387V31.5613C0.625 32.3931 1.15625 33.1269 1.9475 33.3869C2.13625 33.4487 2.28375 33.5844 2.35125 33.7581C2.38313 33.8406 2.41625 33.9225 2.45188 34.0037C2.52563 34.1744 2.51688 34.3731 2.42813 34.5494C2.0525 35.2919 2.19562 36.1869 2.78437 36.775L3.22438 37.2156C3.81312 37.8044 4.7075 37.9469 5.45 37.5719C5.62563 37.4825 5.82437 37.4738 5.99625 37.5481C6.07687 37.5831 6.15875 37.6169 6.24 37.6488C6.415 37.7162 6.55062 37.8644 6.6125 38.0537C6.87313 38.8438 7.60687 39.375 8.43875 39.375H9.06125C9.89313 39.375 10.6269 38.8438 10.8869 38.0525C10.9488 37.8638 11.0844 37.7162 11.2581 37.6488C11.3406 37.6169 11.4225 37.5838 11.5037 37.5481C11.6737 37.4738 11.8731 37.4825 12.0494 37.5719C12.7919 37.9469 13.6869 37.8044 14.275 37.2156L14.7156 36.7756C15.3044 36.1875 15.4475 35.2925 15.0719 34.55C15.0138 34.435 15.0031 34.3119 15.0144 34.1919C17.5994 35.9425 20.5994 36.875 23.75 36.875C32.3656 36.875 39.375 29.8656 39.375 21.25C39.375 18.1275 38.4506 15.2181 36.8662 12.7744ZM34 8.13375C35.525 8.24937 36.7544 9.46688 36.8856 10.99L36.135 11.7387C35.3063 10.6625 34.3412 9.6975 33.2656 8.86875L34 8.13375ZM20 2.5C20 2.15562 20.2806 1.875 20.625 1.875H26.875C27.2194 1.875 27.5 2.15562 27.5 2.5C27.5 2.84437 27.2194 3.125 26.875 3.125H20.625C20.2806 3.125 20 2.84437 20 2.5ZM25.625 4.375V5.74125C25.01 5.6675 24.385 5.625 23.75 5.625C23.115 5.625 22.49 5.6675 21.875 5.74125V4.375H25.625ZM10.6369 10.99C10.7675 9.47 11.9919 8.255 13.5231 8.135L14.2475 8.85938C13.1706 9.68688 12.205 10.6519 11.3756 11.7269L10.6369 10.99ZM15.625 31.5613C15.625 31.8519 15.4394 32.1081 15.1625 32.1994C14.6175 32.3781 14.1875 32.7819 13.9838 33.3069C13.9575 33.3737 13.93 33.4406 13.9019 33.5056C13.6794 34.0181 13.6987 34.6037 13.9563 35.1131C14.0875 35.3725 14.0375 35.685 13.8319 35.8906L13.3913 36.3312C13.1856 36.5375 12.8731 36.5869 12.6137 36.4556C12.1044 36.1981 11.5188 36.1794 11.0069 36.4012C10.9412 36.4294 10.8744 36.4569 10.8063 36.4837C10.2819 36.6875 9.87875 37.1175 9.69938 37.6631C9.60875 37.9394 9.35188 38.125 9.06125 38.125H8.43875C8.14812 38.125 7.89187 37.9394 7.80062 37.6625C7.62187 37.1175 7.21812 36.6875 6.69312 36.4837C6.62625 36.4575 6.55937 36.43 6.49437 36.4019C6.25812 36.2988 6.00625 36.2475 5.75313 36.2475C5.4575 36.2475 5.16125 36.3175 4.88687 36.4556C4.62625 36.5869 4.315 36.5369 4.10938 36.3312L3.66875 35.8906C3.46312 35.685 3.41313 35.3725 3.54437 35.1131C3.80188 34.6037 3.82125 34.0181 3.59875 33.5062C3.57062 33.4406 3.54312 33.3738 3.51625 33.3056C3.3125 32.7812 2.8825 32.3781 2.33688 32.1988C2.06063 32.1088 1.875 31.8519 1.875 31.5613V30.9387C1.875 30.6481 2.06063 30.3919 2.33688 30.3006C2.8825 30.1219 3.3125 29.7181 3.51625 29.1931C3.5425 29.1262 3.57 29.0594 3.59812 28.9944C3.82063 28.4819 3.80125 27.8962 3.54375 27.3869C3.4125 27.1275 3.4625 26.8144 3.66812 26.6088L4.10812 26.1687C4.31375 25.9625 4.62563 25.9125 4.88625 26.0444C5.39563 26.3019 5.9825 26.3212 6.49312 26.0987C6.55937 26.07 6.62625 26.0425 6.69312 26.0169C7.2175 25.8125 7.62125 25.3825 7.80062 24.8375C7.89125 24.5606 8.14812 24.375 8.43875 24.375H9.06125C9.35188 24.375 9.60812 24.5606 9.69938 24.8375C9.87875 25.3825 10.2819 25.8125 10.8063 26.0163C10.8731 26.0425 10.94 26.07 11.0056 26.0981C11.5175 26.3206 12.1038 26.3006 12.6131 26.0437C12.8725 25.9119 13.185 25.9625 13.3913 26.1681L13.8312 26.6081C14.0369 26.8138 14.0869 27.1269 13.9556 27.3862C13.6981 27.8956 13.6788 28.4813 13.9013 28.9931C13.9294 29.0588 13.9569 29.1256 13.9838 29.1937C14.1875 29.7181 14.6175 30.1213 15.1631 30.3006C15.4394 30.3912 15.625 30.6481 15.625 30.9387V31.5613ZM11.9069 20.625C12.0538 17.8225 13.1719 15.2794 14.9363 13.32L16.6794 15.0631L17.5631 14.1794L15.82 12.4363C17.7794 10.6713 20.3225 9.55375 23.125 9.40687V11.875H24.375V9.40687C27.1775 9.55375 29.7206 10.6719 31.68 12.4363L29.9369 14.1794L30.8206 15.0631L32.5638 13.32C34.3288 15.2794 35.4463 17.8225 35.5931 20.625H33.125V21.875H35.5931C35.4463 24.6775 34.3281 27.2206 32.5638 29.18L30.8206 27.4369L29.9369 28.3206L31.68 30.0638C29.7206 31.8288 27.1775 32.9463 24.375 33.0931V30.625H23.125V33.1C20.8713 32.9825 18.7275 32.2306 16.8725 30.9044C16.8631 30.3931 16.655 29.9212 16.3081 29.5762L17.5631 28.3212L16.6794 27.4375L15.2413 28.8756C15.2087 28.8319 15.1694 28.7925 15.1494 28.7419C15.1175 28.6594 15.0844 28.5775 15.0487 28.4963C14.975 28.3256 14.9837 28.1269 15.0725 27.9506C15.4481 27.2081 15.305 26.3131 14.7162 25.725L14.6156 25.625H33.125V24.375H30.625V18.125H26.875V24.375H25.625V14.375H21.875V24.375H20.625V16.875H16.875V24.375H14.375V25.3844L14.275 25.2844C13.7856 24.795 13.0863 24.6187 12.4369 24.7869C12.135 23.83 11.9563 22.8556 11.9031 21.8744H14.375V20.6244L11.9069 20.625ZM18.125 24.375V18.125H19.375V24.375H18.125ZM23.125 24.375V15.625H24.375V24.375H23.125ZM28.125 24.375V19.375H29.375V24.375H28.125ZM23.75 35.625C20.91 35.625 18.2019 34.8037 15.8569 33.2556C16.2469 33.0481 16.5456 32.7131 16.7156 32.315C18.8244 33.665 21.2356 34.375 23.75 34.375C30.9875 34.375 36.875 28.4875 36.875 21.25C36.875 14.0125 30.9875 8.125 23.75 8.125C16.5125 8.125 10.625 14.0125 10.625 21.25C10.625 22.4281 10.7906 23.6013 11.1131 24.7513C11.0138 24.6731 10.9288 24.5756 10.8869 24.4462C10.6763 23.8056 10.1525 23.3412 9.52 23.1862C9.43125 22.5375 9.375 21.8881 9.375 21.25C9.375 13.3237 15.8237 6.875 23.75 6.875C31.6763 6.875 38.125 13.3237 38.125 21.25C38.125 29.1763 31.6763 35.625 23.75 35.625Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_516_3493">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                                         
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Business Financial Health Check</a></h2>
                </div>
                <p class="cs_mb_20">For businesses, we conduct comprehensive financial health assessments to identify areas for improvement, optimize cash flow.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_4.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.44607 10.4345C8.69334 10.65 9.06841 10.62 9.27881 10.3706L10.7052 8.6801C10.9139 8.43275 10.8826 8.06315 10.6352 7.8544C10.3878 7.64572 10.0182 7.67713 9.80951 7.9244L8.76701 9.15994L8.40154 8.84158C8.15755 8.62893 7.78748 8.65432 7.57482 8.89846C7.36224 9.14244 7.38771 9.51252 7.63177 9.7251L8.44607 10.4345Z" fill="white"/>
                      <path d="M10.6352 18.7069C10.3878 18.4983 10.0182 18.5297 9.80951 18.7769L8.76701 20.0125L8.40154 19.6941C8.15755 19.4815 7.78748 19.5069 7.57482 19.751C7.36224 19.995 7.38771 20.3651 7.63177 20.5776L8.44607 21.2871C8.69334 21.5026 9.06841 21.4726 9.27881 21.2233L10.7052 19.5327C10.9139 19.2854 10.8825 18.9157 10.6352 18.7069Z" fill="white"/>
                      <path d="M10.6352 29.5595C10.3878 29.3508 10.0182 29.3822 9.80951 29.6295L8.76701 30.865L8.40154 30.5467C8.15755 30.334 7.78748 30.3594 7.57482 30.6035C7.36224 30.8475 7.38771 31.2176 7.63177 31.4302L8.44607 32.1396C8.69334 32.3552 9.06841 32.3252 9.27881 32.0758L10.7052 30.3853C10.9139 30.1379 10.8825 29.7682 10.6352 29.5595Z" fill="white"/>
                      <path d="M16.2129 8.30664H28.5983C28.922 8.30664 29.1842 8.04438 29.1842 7.7207C29.1842 7.39703 28.922 7.13477 28.5983 7.13477H16.2129C15.8892 7.13477 15.627 7.39703 15.627 7.7207C15.627 8.04438 15.8892 8.30664 16.2129 8.30664Z" fill="white"/>
                      <path d="M16.2129 11.1606H28.5983C28.922 11.1606 29.1842 10.8984 29.1842 10.5747C29.1842 10.251 28.922 9.98877 28.5983 9.98877H16.2129C15.8892 9.98877 15.627 10.251 15.627 10.5747C15.627 10.8984 15.8892 11.1606 16.2129 11.1606Z" fill="white"/>
                      <path d="M11.7185 4.84326H6.5559C5.6059 4.84326 4.83301 5.61615 4.83301 6.56615V7.72045C4.83301 8.04412 5.09527 8.30639 5.41895 8.30639C5.74262 8.30639 6.00488 8.04412 6.00488 7.72045V6.56615C6.00488 6.26232 6.25207 6.01514 6.5559 6.01514H11.7185C12.0223 6.01514 12.2694 6.26232 12.2694 6.56615V11.7287C12.2694 12.0326 12.0223 12.2797 11.7185 12.2797H6.5559C6.25207 12.2797 6.00488 12.0326 6.00488 11.7287V10.5169C6.00488 10.1933 5.74262 9.931 5.41895 9.931C5.09527 9.931 4.83301 10.1933 4.83301 10.5169V11.7287C4.83301 12.6787 5.6059 13.4515 6.5559 13.4515H11.7185C12.6684 13.4515 13.4413 12.6787 13.4413 11.7287V6.56615C13.4412 5.61615 12.6684 4.84326 11.7185 4.84326Z" fill="white"/>
                      <path d="M11.7185 15.6958H6.5559C5.6059 15.6958 4.83301 16.4687 4.83301 17.4187V22.5813C4.83301 23.5312 5.6059 24.3041 6.5559 24.3041H11.7185C12.6684 24.3041 13.4413 23.5312 13.4413 22.5813V17.4187C13.4412 16.4687 12.6684 15.6958 11.7185 15.6958ZM12.2693 22.5813C12.2693 22.8851 12.0222 23.1322 11.7184 23.1322H6.5559C6.25207 23.1322 6.00488 22.8851 6.00488 22.5813V17.4187C6.00488 17.1149 6.25207 16.8677 6.5559 16.8677H11.7185C12.0223 16.8677 12.2694 17.1149 12.2694 17.4187L12.2693 22.5813Z" fill="white"/>
                      <path d="M11.7185 26.5483H6.5559C5.6059 26.5483 4.83301 27.3212 4.83301 28.2712V33.4338C4.83301 34.3837 5.6059 35.1566 6.5559 35.1566H11.7185C12.6684 35.1566 13.4413 34.3837 13.4413 33.4338V28.2712C13.4412 27.3212 12.6684 26.5483 11.7185 26.5483ZM12.2693 33.4338C12.2693 33.7376 12.0222 33.9847 11.7184 33.9847H6.5559C6.25207 33.9847 6.00488 33.7376 6.00488 33.4338V28.2712C6.00488 27.9674 6.25207 27.7202 6.5559 27.7202H11.7185C12.0223 27.7202 12.2694 27.9674 12.2694 28.2712L12.2693 33.4338Z" fill="white"/>
                      <path d="M37.0414 5.19195C35.5098 4.52484 33.721 5.22773 33.0537 6.7593L32.8784 7.16164V4.14C32.8784 1.85719 31.0212 0 28.7384 0H5.27867C2.99586 0 1.13867 1.85719 1.13867 4.14V35.86C1.13867 38.1428 2.99586 40 5.27867 40H28.7384C31.0212 40 32.8784 38.1428 32.8784 35.86V22.3316C33.1787 21.6423 38.2757 9.94398 38.6087 9.17969C39.2777 7.64445 38.5766 5.86086 37.0414 5.19195ZM22.1896 31.6934H16.213C15.8894 31.6934 15.6271 31.9557 15.6271 32.2794C15.6271 32.603 15.8894 32.8653 16.213 32.8653H21.6816C21.4048 33.5308 21.2655 34.2334 21.2702 34.9561V34.9562L21.2962 38.8281H5.27867C3.64203 38.8281 2.31055 37.4966 2.31055 35.86V4.14C2.31055 2.50336 3.64203 1.17188 5.27867 1.17188H28.7384C30.375 1.17188 31.7065 2.50336 31.7065 4.14V9.85125C30.9661 11.5505 28.8855 16.3256 28.1616 17.9872H16.2131C15.8895 17.9872 15.6272 18.2495 15.6272 18.5731C15.6272 18.8968 15.8895 19.1591 16.2131 19.1591H27.651L26.9182 20.841H16.2131C15.8895 20.841 15.6272 21.1033 15.6272 21.427C15.6272 21.7506 15.8895 22.0129 16.2131 22.0129H26.4076L23.4331 28.8396H16.2131C15.8895 28.8396 15.6272 29.1019 15.6272 29.4255C15.6272 29.7492 15.8895 30.0115 16.2131 30.0115H22.9225L22.1896 31.6934ZM22.4421 34.9483C22.4409 34.7615 22.4532 34.5766 22.4762 34.3937C22.9887 34.617 22.2743 34.3057 25.572 35.7425C25.4537 35.8839 25.3267 36.0188 25.1891 36.1451L22.4669 38.642L22.4421 34.9483ZM31.7065 35.86C31.7065 37.4966 30.375 38.8281 28.7384 38.8281H23.9977L25.9812 37.0088C26.5362 36.4996 26.9702 35.8914 27.2712 35.2008L31.7065 25.0211V35.86ZM26.1968 34.7327C26.1963 34.7337 26.1958 34.7347 26.1953 34.7358L25.0294 34.2278L27.7874 27.8978C27.9166 27.6011 27.7809 27.2559 27.4843 27.1266C27.1875 26.9974 26.8423 27.1331 26.713 27.4297L23.955 33.7597L22.7891 33.2517C22.7896 33.2507 22.7899 33.2496 22.7904 33.2486L31.7481 12.6898L32.9141 13.1977L27.8071 24.9187C27.6779 25.2155 27.8136 25.5607 28.1102 25.69C28.4086 25.8199 28.7529 25.682 28.8815 25.3869L33.9884 13.6658L35.1544 14.1737C35.0119 14.5009 26.3323 34.4216 26.1968 34.7327ZM35.6226 13.0994L32.2162 11.6153L32.7977 10.2808L36.2041 11.7649L35.6226 13.0994ZM37.5344 8.71156L36.6721 10.6905L33.2658 9.20641L34.128 7.22742C34.5371 6.28828 35.6341 5.85711 36.5733 6.26633C37.5145 6.67633 37.9448 7.77 37.5344 8.71156Z" fill="white"/>
                    </svg>                                         
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Startup Financial Guidance</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term.</p>
                <a href="{{ url('services-details') }}" class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle text-white">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z" fill="currentColor"/>
                  </svg>                    
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Section -->

    <!-- Start Company Statistic -->
    <section class="cs_pb_140 cs_pb_lg_80 cs_pt_140 cs_pt_lg_80">
      <div class="container">
        <div class="row align-items-center cs_gap_y_40">
          <div class="col-xl-6">
            <div class="cs_statis_text_section">
              <div class="cs_section_heading cs_style_1 cs_mb_50">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Company’s Statistic</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Achievements of Our Bizmax Finance</h2>
                  <p class="m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support.</p>
                </div>
              </div>
              <div class="row cs_row_gap_24">
                <div class="col-md-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_249)">
                        <path d="M0 50.1562C0.5 48.6719 1.17188 47.2656 2.20312 46.0625C3.3125 44.7656 4.64062 43.7812 6.21875 43.1094C6.35938 43.0469 6.48438 42.9844 6.6875 42.9063C5.17188 41.5625 4.39062 39.9531 4.5 37.9688C4.59375 36.3594 5.25 35 6.46875 33.9219C8.78125 31.8594 12.3438 31.9844 14.5312 34.2031C16.6094 36.3125 17.0625 40.1875 14.0156 42.9219C15.8437 43.625 17.3906 44.7187 18.625 46.2187C21.4375 43.0937 21.7969 42.7969 25.7344 41.0313C21.2969 37.7031 21.9375 32.1719 24.7188 29.4531C27.6875 26.5625 32.3438 26.5625 35.3281 29.4531C38.1562 32.2031 38.7188 37.7344 34.3125 41.0313C38.4688 42.8594 38.8594 43.3594 41.4219 46.2187C42.6562 44.7344 44.1719 43.6406 46.0469 42.9219C44.4062 41.4688 43.6406 39.7031 43.8906 37.5781C44.0625 36.0781 44.7656 34.8437 45.9062 33.8594C48.1719 31.9062 51.5781 32 53.75 34.0937C55.0156 35.3125 55.6094 36.8281 55.5625 38.5625C55.5156 40.0781 55.125 40.7969 53.4844 42.8594C54.4219 43.4375 55.4063 43.9375 56.2812 44.5938C58.0938 45.9688 59.2969 47.7812 59.9375 49.9687C59.9531 50.0469 60.0156 50.0938 60.0469 50.1719C60.0469 50.5625 60.0469 50.9531 60.0469 51.3438C59.1562 53.4375 58.4375 53.9062 56.125 53.9062C52.2969 53.9062 48.4688 53.9062 44.6406 53.9062C44.4062 53.9062 44.1875 53.9062 43.8906 53.9062C43.8906 54.5781 43.9062 55.1875 43.8906 55.7812C43.8125 57.6875 42.5781 59.2656 40.7812 59.8125C40.5938 59.875 40.4219 59.9375 40.25 60C33.4531 60 26.6562 60 19.8594 60C19.8281 59.9688 19.8125 59.9375 19.7812 59.9219C17.2656 59.1562 16.2031 57.7344 16.2031 55.125C16.2031 54.7187 16.2031 54.3281 16.2031 53.8906C15.875 53.8906 15.6406 53.8906 15.4062 53.8906C11.3906 53.8906 7.35938 53.8906 3.34375 53.8906C1.79688 53.8906 0.65625 53.0469 0.1875 51.5781C0.15625 51.4844 0.109375 51.4062 0.0625 51.3281C0 50.9375 0 50.5469 0 50.1562ZM29.9531 58.125C33.0938 58.125 36.2344 58.125 39.3906 58.125C40.7188 58.125 41.8438 57.2344 41.9375 56C42.0156 54.8437 42.0781 53.6406 41.9062 52.5C41.2188 47.5938 37.375 43.5625 32.5625 42.5625C27.5312 41.5156 22.4688 43.6406 19.7812 47.9062C18.3438 50.1875 17.8594 52.6719 18 55.3438C18.0938 57.1094 19.0469 58.125 20.8281 58.125C23.8594 58.125 26.9062 58.125 29.9531 58.125ZM30.0156 29.1406C26.9063 29.125 24.375 31.625 24.3594 34.7344C24.3437 37.8438 26.8438 40.375 29.9375 40.4063C33.0156 40.4375 35.5938 37.9062 35.625 34.8281C35.6562 31.6875 33.1562 29.1562 30.0156 29.1406ZM43.9062 52C43.875 52 43.9375 52.0156 44 52.0156C48.25 52.0156 52.5156 52.0312 56.7656 52.0156C57.7969 52.0156 58.3594 51.2031 58.0312 50.2188C57.2031 47.7812 55.625 46 53.2969 44.9375C49.625 43.25 45.1406 44.375 42.7344 47.5938C42.6094 47.7656 42.5156 48.0625 42.5781 48.25C42.9688 49.4687 43.4219 50.6875 43.9062 52ZM16.1094 52.0156C16.5469 50.7656 16.9219 49.5781 17.3906 48.4219C17.5312 48.0625 17.5312 47.8281 17.2969 47.5469C15.0937 44.8594 12.25 43.7188 8.82812 44.3125C5.53125 44.875 3.28125 46.8281 2.09375 49.9687C1.59375 51.2656 2.14062 52.0156 3.53125 52.0156C7.57812 52.0156 11.6094 52.0156 15.6562 52.0156C15.8281 52.0156 16.0156 52.0156 16.1094 52.0156ZM45.6875 38.2969C45.6875 40.5 47.4688 42.2969 49.6562 42.2969C51.8281 42.2969 53.6406 40.5 53.6562 38.3125C53.6562 36.125 51.8594 34.3281 49.6719 34.3281C47.4531 34.3281 45.6875 36.0938 45.6875 38.2969ZM14.3125 38.3281C14.3281 36.1094 12.5625 34.3437 10.375 34.3281C8.17188 34.3125 6.375 36.0781 6.35938 38.2812C6.34375 40.4531 8.14062 42.2813 10.3281 42.2969C12.5 42.3125 14.2969 40.5156 14.3125 38.3281Z" fill="#E9A132"/>
                        <path d="M0 14.0625C0.421875 13.3438 1.0625 13.1406 1.85937 13.125C3.17187 13.1094 4.46875 13 5.78125 12.9531C6.125 12.9375 6.29687 12.8125 6.40625 12.4844C6.89062 11.1719 7.40625 9.85938 7.89062 8.54688C8.125 7.90625 8.5 7.45312 9.23437 7.4375C9.85937 7.42187 10.2969 7.78125 10.5781 8.53125C11.0781 9.84375 11.5937 11.1563 12.0625 12.4688C12.1875 12.8125 12.375 12.9531 12.7344 12.9688C14.1406 13.0156 15.5469 13.0937 16.9531 13.1562C17.5781 13.1875 18.1094 13.375 18.375 14C18.625 14.5781 18.4687 15.1563 17.9062 15.6094C16.7969 16.5312 15.6719 17.4375 14.5312 18.3125C14.1875 18.5781 14.1562 18.8125 14.2656 19.2031C14.6562 20.5469 15.0156 21.9062 15.375 23.2656C15.5625 24 15.4219 24.5469 14.9062 24.875C14.3281 25.2656 13.7812 25.1562 13.2187 24.7812C12.0312 23.9844 10.8281 23.2188 9.65625 22.4375C9.375 22.25 9.15625 22.25 8.875 22.4375C7.6875 23.2344 6.48437 24 5.3125 24.7812C4.76562 25.1406 4.20312 25.2656 3.625 24.875C3.09375 24.5156 2.95312 24 3.17187 23.2031C3.51562 21.9219 3.82812 20.6406 4.23437 19.375C4.40625 18.8125 4.28125 18.5 3.82812 18.1562C2.82812 17.4062 1.85937 16.6094 0.90625 15.8125C0.578125 15.5469 0.328125 15.2031 0.046875 14.8906C0 14.6094 0 14.3438 0 14.0625ZM5.25 22.5469C6.26562 21.8906 7.20312 21.3437 8.04687 20.7031C8.89062 20.0781 9.625 20.125 10.4375 20.7188C11.2812 21.3438 12.1875 21.875 13.2031 22.5312C12.875 21.3281 12.625 20.2656 12.2969 19.2344C12.0156 18.3281 12.2031 17.6719 13 17.0938C13.875 16.4688 14.6875 15.75 15.6719 14.9688C14.3125 14.8906 13.125 14.8125 11.9531 14.7812C11.2656 14.75 10.8125 14.4375 10.5781 13.7969C10.4687 13.4844 10.3437 13.1719 10.2187 12.875C9.90625 12.0625 9.59375 11.25 9.23437 10.2969C8.76562 11.5156 8.34375 12.5781 7.96875 13.6563C7.70312 14.4063 7.21875 14.7812 6.40625 14.7969C5.26562 14.8125 4.125 14.9063 2.82812 14.9844C3.85937 15.8281 4.76562 16.5625 5.67187 17.2812C6.23437 17.7344 6.4375 18.2656 6.23437 18.9844C5.89062 20.1094 5.60937 21.2656 5.25 22.5469Z" fill="#E9A132"/>
                        <path d="M60 14.8905C59.7031 15.2187 59.4375 15.578 59.0937 15.8593C58.1719 16.6405 57.2344 17.4218 56.2656 18.1249C55.7656 18.4843 55.625 18.8124 55.8281 19.4218C56.2187 20.6249 56.5156 21.8593 56.8437 23.078C57.0781 23.9687 56.9687 24.4843 56.4219 24.8593C55.7969 25.2812 55.2187 25.0937 54.6406 24.703C53.5156 23.9374 52.3437 23.2187 51.2187 22.453C50.8906 22.2343 50.6562 22.2343 50.3437 22.453C49.2031 23.2343 48.0156 23.9687 46.875 24.7343C46.3125 25.1093 45.7344 25.2655 45.1406 24.8593C44.6094 24.4999 44.4844 23.953 44.7031 23.1249C45.0625 21.8124 45.3906 20.4843 45.7969 19.1718C45.9219 18.7343 45.8281 18.5155 45.4844 18.2499C44.3906 17.4062 43.3281 16.5155 42.2344 15.6562C41.7187 15.2499 41.4375 14.7499 41.6406 14.078C41.8125 13.4999 42.2812 13.1718 43.0469 13.1405C44.4687 13.0624 45.8906 12.9999 47.3125 12.953C47.6719 12.9374 47.8594 12.8124 47.9844 12.453C48.4531 11.1405 48.9687 9.82805 49.4687 8.51555C49.7656 7.74992 50.1875 7.39055 50.8125 7.4218C51.5312 7.45305 51.9219 7.89055 52.1562 8.53117C52.6406 9.84367 53.1562 11.1562 53.6406 12.4687C53.7656 12.7968 53.9219 12.9218 54.2656 12.9374C55.5781 12.9843 56.875 13.078 58.1875 13.1093C58.9844 13.1249 59.625 13.328 60.0469 14.0468C60 14.3437 60 14.6093 60 14.8905ZM57.1875 14.9843C55.8906 14.9062 54.7656 14.8124 53.6562 14.7968C52.7812 14.7812 52.2969 14.3905 52.0156 13.5937C51.6562 12.5312 51.2187 11.4999 50.7656 10.3124C50.2969 11.5155 49.875 12.578 49.5 13.6562C49.2344 14.4218 48.75 14.7812 47.9375 14.7968C46.7969 14.828 45.6562 14.9062 44.3437 14.9843C45.2656 15.7343 46.0312 16.4218 46.875 17.0155C47.7969 17.6562 48 18.4062 47.6406 19.4374C47.3125 20.4062 47.0937 21.4218 46.7969 22.5468C47.7812 21.9062 48.6562 21.4062 49.4531 20.7812C50.375 20.0624 51.1875 20.0937 52.0937 20.7812C52.9062 21.3905 53.7812 21.9062 54.7344 22.5312C54.4219 21.3749 54.2031 20.3437 53.8594 19.3593C53.5156 18.3593 53.7344 17.6562 54.6094 17.0312C55.4687 16.4374 56.25 15.7499 57.1875 14.9843Z" fill="#E9A132"/>
                        <path d="M30.3597 0C30.844 0.328125 30.9847 0.78125 30.9534 1.35938C30.9222 2.3125 30.9534 3.26562 30.9378 4.23438C30.9378 4.92188 30.5628 5.3125 29.969 5.29688C29.4065 5.28125 29.0628 4.89062 29.0628 4.23438C29.0472 3.28125 29.094 2.3125 29.0472 1.35938C29.0315 0.78125 29.1565 0.328125 29.6409 0C29.8909 0 30.1253 0 30.3597 0Z" fill="#E9A132"/>
                        <path d="M34.6875 25.1094C34.5469 25.0469 34.2344 24.9375 33.9687 24.7656C32.7969 24.0156 31.6406 23.2656 30.5 22.4844C30.1406 22.2344 29.875 22.25 29.5156 22.5C28.375 23.2813 27.2031 24.0156 26.0469 24.7813C25.5 25.1563 24.9375 25.2656 24.3594 24.875C23.8281 24.5156 23.7031 23.9844 23.9062 23.2031C24.2656 21.8906 24.5937 20.5625 24.9844 19.25C25.1094 18.8125 25.0625 18.5469 24.6875 18.2656C23.5781 17.4219 22.5156 16.5469 21.4375 15.6719C20.8125 15.1719 20.6406 14.7031 20.8437 14.1094C21.0625 13.4375 21.5781 13.1875 22.2344 13.1563C23.6406 13.0938 25.0469 13.0156 26.4375 12.9688C26.8437 12.9531 27.0469 12.8281 27.1875 12.4219C27.6562 11.0938 28.1719 9.7969 28.6719 8.4844C28.9531 7.76565 29.375 7.4219 29.9844 7.43752C30.5937 7.43752 31.0156 7.78127 31.2969 8.50002C31.7969 9.7969 32.3125 11.0781 32.7656 12.375C32.9219 12.8281 33.1562 12.9688 33.6094 12.9844C35 13.0313 36.375 13.0938 37.7656 13.1719C38.8906 13.2344 39.5469 14.1875 39.0781 15.0781C38.9531 15.3125 38.75 15.5156 38.5469 15.6875C37.4531 16.5781 36.375 17.4688 35.2656 18.3281C34.9531 18.5625 34.875 18.7656 34.9844 19.1563C35.3906 20.5625 35.7656 21.9688 36.1406 23.3906C36.3906 24.3125 35.7812 25.1094 34.6875 25.1094ZM23.5781 14.9844C24.6406 15.8438 25.5469 16.5781 26.4531 17.2969C27 17.7344 27.2031 18.2656 27 18.9531C26.75 19.7969 26.5312 20.6406 26.3125 21.4844C26.2344 21.7656 26.1719 22.0625 26.0625 22.5313C27.1719 21.7969 28.1406 21.1875 29.0937 20.5469C29.7187 20.125 30.3125 20.125 30.9375 20.5469C31.7656 21.1094 32.5937 21.6406 33.4375 22.1875C33.5625 22.2656 33.7187 22.3281 33.9687 22.4688C33.6406 21.25 33.375 20.1719 33.0625 19.125C32.8281 18.3281 32.9844 17.7188 33.6719 17.2344C34.2656 16.7969 34.8281 16.3125 35.4062 15.8438C35.7187 15.5938 36.0156 15.3438 36.4375 15C35.0937 14.9219 33.9375 14.8438 32.7656 14.8125C32.0156 14.7969 31.5625 14.4375 31.3125 13.7656C31.0625 13.0938 30.8125 12.4219 30.5469 11.7344C30.3906 11.3125 30.2187 10.8906 29.9844 10.3438C29.5156 11.5938 29.0937 12.6719 28.6875 13.7656C28.4375 14.4531 27.9687 14.7813 27.2344 14.8125C26.0781 14.8281 24.9062 14.9063 23.5781 14.9844Z" fill="#E9A132"/>
                        <path d="M40.3441 5.81241C40.1566 6.14053 40.0629 6.40616 39.8754 6.57803C38.641 7.71866 37.391 8.84366 36.141 9.95303C35.7035 10.3437 35.141 10.3124 34.7816 9.92178C34.4222 9.53116 34.4535 8.96866 34.891 8.56241C36.1254 7.43741 37.3754 6.31241 38.6254 5.18741C38.9379 4.90616 39.3285 4.76553 39.6879 5.01553C39.9535 5.21866 40.1254 5.53116 40.3441 5.81241Z" fill="#E9A132"/>
                        <path d="M25.5777 9.32824C25.359 9.60949 25.2183 9.96887 24.9683 10.0782C24.6871 10.1876 24.2027 10.2032 23.9996 10.0314C22.6246 8.87512 21.3121 7.65637 19.984 6.43762C19.6402 6.10949 19.6871 5.54699 19.9996 5.21887C20.359 4.84387 20.8746 4.79699 21.3121 5.17199C22.1715 5.90637 22.9996 6.67199 23.8433 7.43762C24.2496 7.79699 24.6715 8.15637 25.0465 8.54699C25.2652 8.73449 25.3746 9.00012 25.5777 9.32824Z" fill="#E9A132"/>
                        <path d="M16.1097 52.0156C16.016 52.0156 15.8285 52.0156 15.641 52.0156C11.5941 52.0156 7.56283 52.0156 3.51596 52.0156C2.12533 52.0156 1.57846 51.2656 2.07846 49.9687C3.26596 46.8281 5.51596 44.8749 8.81283 44.3124C12.2347 43.7343 15.0628 44.8593 17.2816 47.5468C17.516 47.8437 17.5316 48.0624 17.3753 48.4218C16.9378 49.5937 16.5472 50.7656 16.1097 52.0156Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_249">
                        <rect width="60" height="60" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                        
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="50" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Happy Clients</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="71" viewBox="0 0 60 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_331)">
                        <path d="M31.4243 0C32.0947 0.304913 32.8209 0.526668 33.4075 0.942458C34.5807 1.77404 35.0975 2.99369 35.1114 4.42124C35.1114 4.76773 35.1114 5.11422 35.1114 5.55773C35.4047 5.55773 35.6561 5.55773 35.8936 5.55773C39.1058 5.55773 42.3181 5.55773 45.5304 5.55773C47.9746 5.55773 49.3712 6.9437 49.3712 9.39686C49.3712 9.56318 49.3852 9.71563 49.3712 9.88195C49.3014 10.3532 49.4969 10.6027 49.9578 10.8244C50.9075 11.2541 51.8014 11.7946 52.8768 12.3767C53.212 12.0025 53.5891 11.5312 54.0081 11.1155C55.5025 9.67405 57.6114 9.64633 58.9941 11.06C60.3489 12.4321 60.307 14.5249 58.8684 15.9663C54.7623 20.055 50.6422 24.1436 46.522 28.2183C44.9997 29.729 42.9606 29.7151 41.4383 28.2044C39.5528 26.3472 37.6813 24.49 35.8098 22.619C34.3293 21.136 34.2734 19.0571 35.6701 17.6711C37.0528 16.2851 39.1757 16.3128 40.6561 17.7681C41.7455 18.8353 42.8209 19.9164 43.8405 20.9281C46.2427 18.5442 48.631 16.1742 51.0332 13.7904C49.7762 12.8479 48.226 12.2104 46.536 11.947C39.7762 10.8798 33.8265 15.6337 33.4075 22.425C33.0165 28.8836 38.7567 34.4967 45.2651 34.0255C51.117 33.6097 55.4327 29.3271 55.8377 23.5337C55.8936 22.716 56.2846 22.2864 56.955 22.3279C57.6114 22.3557 58.0025 22.8407 57.9327 23.6585C57.4997 28.8558 54.9159 32.6257 50.1952 34.9125C49.5248 35.2313 49.3572 35.5639 49.3712 36.2431C49.3852 46.3745 49.3572 56.5198 49.4131 66.6512C49.4271 68.7717 48.7288 70.2686 46.6477 70.9754C32.0248 70.9754 17.4159 70.9754 2.793 70.9754C1.43825 70.518 0.404733 69.7558 0.0974708 68.2728C0.0276383 67.954 0.0136719 67.6352 0.0136719 67.3164C0.0136719 47.9545 0.0136719 28.6064 0.0136719 9.2444C0.0136719 6.99914 1.45222 5.57159 3.72876 5.57159C5.89356 5.57159 8.05836 5.57159 10.2232 5.57159C11.0332 5.57159 11.4941 5.98738 11.4802 6.65264C11.4662 7.24861 11.0193 7.65054 10.293 7.65054C8.15613 7.6644 6.00529 7.65054 3.86842 7.65054C2.56954 7.65054 2.10864 8.10791 2.10864 9.41072C2.10864 28.648 2.10864 47.8852 2.10864 67.1363C2.10864 68.4529 2.55557 68.8964 3.85445 68.8964C17.7511 68.8964 31.6477 68.8964 45.5444 68.8964C46.8293 68.8964 47.3042 68.4529 47.3042 67.2056C47.3042 56.9771 47.3042 46.7348 47.3042 36.5064C47.3042 36.3262 47.2762 36.146 47.2623 35.9104C42.4159 36.6588 38.2399 35.4115 34.874 31.8634C32.388 29.2301 31.2148 26.0423 31.3405 22.4527C31.6198 14.3586 39.1617 8.31581 47.1924 9.86809C47.5695 8.46826 46.969 7.65054 45.5444 7.65054C42.3042 7.65054 39.0779 7.65054 35.8377 7.65054C35.6282 7.65054 35.4327 7.6644 35.1254 7.69212C35.1254 8.21879 35.1394 8.71774 35.1254 9.21668C35.0835 10.7828 34.1059 11.7669 32.5137 11.7669C27.3042 11.7807 22.0807 11.7807 16.8712 11.7669C15.2651 11.7669 14.2595 10.7274 14.2595 9.14739C14.2455 7.6644 14.2595 6.19527 14.2595 4.71229C14.2595 2.32843 15.3908 0.817721 17.7092 0.124737C17.7651 0.110877 17.8209 0.0554387 17.8768 0.0138597C22.388 0 26.9131 0 31.4243 0ZM24.7204 9.66019C27.2343 9.66019 29.7483 9.64633 32.2483 9.67405C32.8209 9.67405 33.0304 9.49388 33.0304 8.91177C33.0025 7.42879 33.0444 5.95966 33.0165 4.47668C32.9885 2.97983 32.0528 2.07895 30.5444 2.06509C26.6338 2.05123 22.7371 2.05123 18.8265 2.06509C17.3042 2.06509 16.3545 3.02141 16.3545 4.54597C16.3405 5.97352 16.3824 7.41493 16.3405 8.84247C16.3265 9.49388 16.564 9.67405 17.1924 9.67405C19.6924 9.64633 22.2064 9.66019 24.7204 9.66019ZM38.2818 18.669C37.9885 18.7383 37.8489 18.7521 37.7092 18.7937C36.6896 19.1402 36.4662 20.3044 37.3042 21.136C39.1059 22.9378 40.9215 24.7395 42.7371 26.5274C43.6869 27.4699 44.3153 27.4699 45.279 26.5136C49.2455 22.5774 53.212 18.6413 57.1785 14.7051C57.3321 14.5527 57.4857 14.4141 57.6114 14.2477C58.0165 13.6934 57.9606 12.9311 57.4857 12.4737C56.9969 12.0025 56.2707 11.9609 55.712 12.4044C55.5165 12.5569 55.3349 12.7509 55.1533 12.9311C51.7595 16.299 48.3796 19.6669 44.9857 23.0209C44.2455 23.7555 43.7707 23.7555 43.0304 23.0209C41.7734 21.7874 40.5444 20.5262 39.2734 19.3065C38.9662 19.0155 38.5472 18.8492 38.2818 18.669Z" fill="#E9A132"/>
                        <path d="M13.1568 42.2582C13.1288 44.5589 11.2434 46.4161 8.92492 46.4161C6.57855 46.4022 4.69308 44.5034 4.72101 42.1612C4.74894 39.8604 6.64838 37.9894 8.95285 38.0033C11.2992 38.0171 13.1707 39.9159 13.1568 42.2582ZM6.81598 42.2305C6.81598 43.3947 7.77967 44.351 8.95285 44.3371C10.1121 44.3233 11.0618 43.3669 11.0618 42.2027C11.0618 41.0385 10.0841 40.0822 8.92492 40.0822C7.75174 40.0961 6.80202 41.0662 6.81598 42.2305Z" fill="#E9A132"/>
                        <path d="M4.70703 29.4519C4.70703 27.1373 6.56457 25.2524 8.88301 25.2247C11.2433 25.1969 13.1568 27.068 13.1568 29.4103C13.1707 31.7526 11.2573 33.6514 8.92491 33.6375C6.60647 33.6375 4.721 31.7664 4.70703 29.4519ZM11.0618 29.4519C11.0757 28.2877 10.126 27.3175 8.96681 27.3036C7.79362 27.2898 6.82994 28.2322 6.81597 29.3964C6.802 30.5606 7.75172 31.5308 8.91094 31.5447C10.0702 31.5724 11.0478 30.6161 11.0618 29.4519Z" fill="#E9A132"/>
                        <path d="M4.72043 54.7735C4.76233 52.4728 6.67574 50.6156 8.99418 50.6572C11.3545 50.6988 13.1981 52.5837 13.1562 54.9398C13.1143 57.2682 11.2009 59.0977 8.81261 59.0423C6.50814 59.0007 4.67853 57.0881 4.72043 54.7735ZM11.0612 54.8844C11.0752 53.7063 10.1394 52.75 8.96624 52.7361C7.79306 52.7223 6.82937 53.6647 6.8154 54.8289C6.80144 56.007 7.73719 56.9495 8.91038 56.9633C10.0975 56.9772 11.0472 56.0486 11.0612 54.8844Z" fill="#E9A132"/>
                        <path d="M24.4553 38.7794C27.1928 38.7794 29.9442 38.7655 32.6816 38.7932C33.0587 38.7932 33.5336 38.9457 33.785 39.209C34.2738 39.6941 33.9945 40.5534 33.3101 40.7613C33.0587 40.8444 32.7654 40.8444 32.4861 40.8444C27.0671 40.8444 21.662 40.8444 16.2431 40.8444C16.1034 40.8444 15.9637 40.8444 15.8241 40.8444C15.1397 40.789 14.7067 40.3316 14.7347 39.7357C14.7766 39.1536 15.1956 38.7794 15.8799 38.7794C18.7291 38.7655 21.5922 38.7794 24.4553 38.7794Z" fill="#E9A132"/>
                        <path d="M24.371 56.2426C27.1364 56.2426 29.9018 56.2288 32.6671 56.2565C33.0442 56.2565 33.5191 56.4089 33.7705 56.6584C34.2593 57.1435 33.98 58.0028 33.3096 58.2246C33.0302 58.3216 32.723 58.3216 32.4157 58.3216C27.0526 58.3216 21.6755 58.3216 16.3124 58.3216C16.1448 58.3216 15.9911 58.3354 15.8235 58.3216C15.1392 58.2661 14.6923 57.8088 14.7342 57.2128C14.7621 56.6445 15.1811 56.2426 15.8654 56.2426C18.3794 56.2288 20.8794 56.2288 23.3934 56.2288C23.7146 56.2288 24.0498 56.2426 24.371 56.2426Z" fill="#E9A132"/>
                        <path d="M22.1372 51.4055C24.1903 51.4055 26.2294 51.4055 28.2825 51.4055C29.1065 51.4055 29.5813 51.7797 29.5953 52.4173C29.6093 53.0687 29.1065 53.4845 28.2545 53.4845C24.1763 53.4845 20.1121 53.4845 16.0339 53.4845C15.2238 53.4845 14.735 53.0964 14.721 52.4589C14.707 51.7936 15.1819 51.4055 16.0618 51.4055C18.0869 51.4055 20.1121 51.4055 22.1372 51.4055Z" fill="#E9A132"/>
                        <path d="M22.1648 33.0275C20.0419 33.0275 17.933 33.0414 15.8101 33.0275C15.1397 33.0275 14.7207 32.5979 14.7207 32.0158C14.7207 31.4475 15.1397 31.0317 15.7961 30.9763C15.9637 30.9624 16.1174 30.9624 16.2849 30.9624C17.3045 30.9624 18.338 30.9624 19.3576 30.9624C22.2207 30.9624 25.0838 30.9624 27.947 30.9624C28.1844 30.9624 28.4079 30.9486 28.6453 30.9901C29.2458 31.0733 29.6509 31.5445 29.595 32.0712C29.5252 32.6533 29.19 32.9998 28.5894 33.0275C27.9609 33.0552 27.3324 33.0414 26.7039 33.0414C25.1956 33.0275 23.6732 33.0275 22.1648 33.0275Z" fill="#E9A132"/>
                        <path d="M22.0949 28.2182C20.1396 28.2182 18.1843 28.2182 16.229 28.2182C15.9776 28.2182 15.6424 28.2736 15.4888 28.135C15.1815 27.8717 14.8463 27.5252 14.7625 27.1649C14.6647 26.6798 15.0139 26.2917 15.5446 26.1808C15.796 26.1254 16.0474 26.1392 16.3128 26.1392C20.2234 26.1392 24.134 26.1392 28.0307 26.1392C28.0726 26.1392 28.1284 26.1392 28.1703 26.1392C29.1061 26.1531 29.6089 26.5134 29.6089 27.1787C29.6089 27.8578 29.12 28.2182 28.1703 28.2182C26.1312 28.2182 24.1061 28.2182 22.0949 28.2182Z" fill="#E9A132"/>
                        <path d="M20.0283 45.6814C18.7014 45.6814 17.3746 45.6952 16.0478 45.6814C15.2098 45.6675 14.7489 45.2933 14.721 44.6696C14.707 44.0044 15.1959 43.6024 16.0618 43.6024C18.7433 43.5886 21.4109 43.5886 24.0925 43.6024C24.9305 43.6024 25.3914 43.9905 25.4193 44.6142C25.4333 45.2656 24.9445 45.6814 24.0785 45.6814C22.7238 45.6814 21.383 45.6814 20.0283 45.6814Z" fill="#E9A132"/>
                        <path d="M10.2093 17.4631C9.11995 17.4631 8.0166 17.4631 6.92721 17.4631C6.11716 17.4631 5.65626 17.0612 5.67023 16.3959C5.6842 15.7722 6.13112 15.3842 6.91325 15.3842C9.11995 15.3703 11.3267 15.3703 13.5473 15.3842C14.3574 15.3842 14.8183 15.8 14.8043 16.4514C14.7903 17.0751 14.3294 17.4631 13.5613 17.4631C12.444 17.477 11.3267 17.4631 10.2093 17.4631Z" fill="#E9A132"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_331">
                        <rect width="60" height="70.9615" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                   
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="35" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Project Done</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="73" viewBox="0 0 60 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_327)">
                        <path d="M31.8449 0C33.2073 0.227058 34.6075 0.359508 35.9509 0.700095C44.9386 2.91391 51.4286 8.26868 54.8156 16.878C58.8269 27.0956 56.9916 36.5374 49.896 44.9007C49.5365 45.3169 49.5743 45.5818 49.8203 45.9981C53.0748 51.6556 56.3482 57.3321 59.6027 63.0085C59.7541 63.2734 59.9244 63.5572 59.9812 63.8411C60.1325 64.6168 59.4514 65.1845 58.581 64.9953C56.4996 64.5601 54.4372 64.087 52.3558 63.6329C51.5043 63.4437 50.6529 63.2734 49.7446 63.0653C49.2148 64.7304 48.704 66.3387 48.1742 67.947C47.7957 69.158 47.3984 70.369 47.0199 71.5989C46.8686 72.1097 46.6037 72.5071 46.0171 72.5639C45.4305 72.6206 45.1089 72.299 44.844 71.8259C44.352 70.9177 43.8033 70.0284 43.2924 69.1201C42.914 68.4579 43.0654 67.8335 43.6141 67.5307C44.1628 67.228 44.7115 67.3983 45.1089 68.0416C45.2602 68.2687 45.3927 68.5147 45.6008 68.8931C46.2252 66.9063 46.8118 65.0899 47.3984 63.2545C47.5687 62.7058 47.72 62.176 47.9093 61.6272C48.1742 60.8704 48.5904 60.6433 49.3851 60.8136C51.7882 61.3434 54.1723 61.8543 56.7645 62.4219C53.756 57.1996 50.8232 52.1097 47.8525 46.9253C44.5412 49.8392 40.7948 51.8638 36.4807 52.9991C36.6131 53.245 36.7267 53.4721 36.8402 53.6802C38.6567 56.8401 40.4731 59.9811 42.2896 63.141C42.4031 63.3491 42.5356 63.5572 42.6112 63.7654C42.8194 64.3141 42.6302 64.7682 42.1571 65.0331C41.6652 65.3169 41.1921 65.2223 40.8137 64.7871C40.6623 64.6168 40.5488 64.3898 40.4353 64.1816C38.4864 60.7758 36.5185 57.3888 34.5696 53.983C34.3236 53.5667 34.0777 53.4342 33.6235 53.5099C31.1827 53.8884 28.7229 53.8884 26.282 53.5099C25.79 53.4342 25.5819 53.6235 25.3549 54.0208C21.9868 59.9054 18.5999 65.771 15.2129 71.6367C15.0048 72.0151 14.6453 72.299 14.3615 72.6395C14.1155 72.6395 13.8884 72.6395 13.6425 72.6395C13.3965 72.2611 13.037 71.9205 12.9045 71.5042C12.0531 68.9309 11.2394 66.3387 10.4258 63.7464C10.369 63.5572 10.2934 63.3491 10.1988 63.122C7.28485 63.7654 4.40878 64.3709 1.53272 65.0331C1.00292 65.1466 0.548801 65.1466 0.189293 64.6925C-0.151294 64.2384 -0.0566865 63.7843 0.208214 63.3113C1.79762 60.5676 3.3681 57.824 4.9575 55.0804C5.3927 54.3425 5.94142 54.1343 6.52799 54.456C7.11455 54.7777 7.22808 55.421 6.79289 56.1779C5.75221 57.9943 4.6926 59.8297 3.65192 61.6462C3.51947 61.8732 3.40594 62.1003 3.19781 62.4598C4.08712 62.2706 4.8629 62.1381 5.61976 61.9678C7.19024 61.6272 8.76072 61.2677 10.3123 60.9082C11.3908 60.6622 11.7692 60.8893 12.1098 61.9489C12.8288 64.2195 13.5479 66.4901 14.3426 68.9499C17.4268 63.5762 20.4542 58.3349 23.5195 52.9991C19.2432 51.8827 15.4778 49.8959 12.1666 46.9631C12.0531 47.1145 11.9395 47.2469 11.8449 47.3983C11.1259 48.6471 10.4069 49.8959 9.68787 51.1447C9.15807 52.0719 8.68504 52.299 8.02278 51.9394C7.36053 51.5799 7.30377 51.0312 7.83357 50.123C8.72288 48.5714 9.61219 47.0009 10.5393 45.4115C10.1231 44.9196 9.68787 44.4276 9.2716 43.9167C4.74937 38.2781 2.70585 31.8638 3.31134 24.6547C3.91682 17.3888 7.03887 11.3718 12.4883 6.52791C13.1316 5.94134 13.7938 5.9035 14.229 6.41438C14.6831 6.94418 14.5885 7.53075 13.9074 8.11731C9.42297 12.053 6.58475 16.9536 5.67652 22.8382C4.38986 31.2015 6.73612 38.5052 12.7153 44.4844C17.8619 49.6121 24.1817 51.9773 31.4286 51.5989C42.4599 51.0123 51.7882 42.9896 54.1344 32.1665C57.0862 18.6566 48.3634 5.29801 34.7967 2.59224C29.1391 1.4948 23.7465 2.30842 18.6188 4.91958C18.4485 5.01419 18.2971 5.1088 18.1269 5.18448C17.4835 5.48723 16.878 5.33586 16.5942 4.78713C16.3104 4.25733 16.5185 3.63292 17.124 3.29234C19.6595 1.89215 22.3653 0.946074 25.2224 0.435194C26.1496 0.264901 27.0767 0.151372 28.0039 0C29.2905 0 30.5583 0 31.8449 0Z" fill="#E9A132"/>
                        <path d="M49.5935 26.9632C49.461 28.1741 49.3475 29.3283 49.1772 30.4636C49.0448 31.4097 48.5717 31.807 47.8527 31.6557C47.1905 31.5232 46.9256 30.9556 47.0769 30.0852C48.3825 23.0275 45.2226 15.8562 39.1299 12.0719C28.4961 5.46835 14.5131 12.0152 12.7912 24.4277C11.4289 34.229 18.3541 43.2924 28.1744 44.2006C35.5348 44.8818 41.2113 41.8733 45.0902 35.5346C45.2416 35.2697 45.374 34.9859 45.5632 34.7399C45.9038 34.2858 46.3768 34.1722 46.8877 34.4371C47.4175 34.721 47.5878 35.194 47.3797 35.7616C47.3229 35.913 47.2472 36.0644 47.1526 36.2158C43.3305 43.2545 35.8187 47.247 27.8149 46.3387C19.2434 45.3737 12.7534 39.054 10.9937 31.334C8.53389 20.5109 15.2321 10.0474 26.093 7.70109C36.5755 5.43051 47.3797 12.6964 49.1583 23.2545C49.3664 24.5034 49.4421 25.7522 49.5935 26.9632Z" fill="#E9A132"/>
                        <path d="M30.2935 14.3235C30.4449 14.4749 30.8423 14.7208 31.0126 15.0803C31.9586 16.9157 32.8479 18.7511 33.7372 20.6054C33.9454 21.0217 34.1724 21.2298 34.6833 21.3055C36.7268 21.5515 38.7514 21.8353 40.776 22.1948C41.1545 22.2705 41.6653 22.6489 41.7789 22.9895C41.8924 23.2923 41.6464 23.8788 41.3815 24.1437C39.9246 25.6385 38.4298 27.0766 36.9161 28.5146C36.6322 28.7795 36.5187 29.0255 36.5944 29.4417C36.9728 31.5042 37.3512 33.5855 37.6351 35.6669C37.6918 36.0453 37.5026 36.5562 37.2566 36.84C36.9161 37.2374 36.4052 37.1049 35.9511 36.8779C34.1346 35.9129 32.3181 34.9668 30.5206 33.9829C30.1232 33.7558 29.8205 33.7748 29.4042 33.9829C27.6256 34.9479 25.8091 35.894 24.0305 36.84C23.5575 37.086 23.1034 37.2185 22.6303 36.859C22.1951 36.5373 22.1573 36.1021 22.2519 35.5912C22.6303 33.5477 22.9331 31.4853 23.3115 29.4417C23.3872 29.0255 23.2926 28.7795 23.0088 28.5146C21.5329 27.0955 20.057 25.6385 18.5811 24.2194C18.2027 23.8599 17.9189 23.4815 18.127 22.9138C18.3162 22.3651 18.7704 22.2137 19.2812 22.1381C21.2869 21.8542 23.2926 21.5515 25.3172 21.2866C25.7524 21.2298 25.9794 21.0595 26.1497 20.6811C27.039 18.8079 27.9851 16.9536 28.8744 15.0803C29.1772 14.6073 29.4799 14.3235 30.2935 14.3235ZM24.7306 34.0586C25.7335 33.5288 26.6417 33.0368 27.5688 32.5827C30.5395 31.069 29.461 31.0311 32.4695 32.5827C33.3777 33.0557 34.267 33.5288 35.2699 34.0586C34.9861 32.4313 34.7779 30.9365 34.4563 29.4607C34.267 28.5524 34.4373 27.8713 35.1564 27.2658C35.97 26.5846 36.689 25.7899 37.4648 25.052C37.8054 24.7303 38.1649 24.4465 38.6379 24.0302C36.7836 23.7653 35.2131 23.4815 33.6048 23.3112C32.8858 23.2355 32.4506 22.8949 32.1668 22.2516C31.5613 20.946 30.9179 19.6593 30.2746 18.3727C30.1989 18.2213 30.0854 18.0889 29.953 17.8618C29.1961 19.3944 28.4771 20.8136 27.7959 22.2705C27.5121 22.8949 27.0958 23.2166 26.4146 23.2923C24.8063 23.4815 23.2169 23.7464 21.741 23.9545C22.7628 25.052 23.7656 26.2062 24.8631 27.2658C25.5253 27.8902 25.7145 28.5335 25.5442 29.4039C25.2226 30.9176 25.0144 32.4313 24.7306 34.0586Z" fill="#E9A132"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_327">
                        <rect width="60" height="72.6585" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                    
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="20" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Awards Win</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_306)">
                        <path d="M4.01404 58.5395C4.01404 55.6327 4.01404 52.8099 4.01404 49.9703C4.01404 48.7605 4.28056 48.4749 5.46323 48.4749C7.81193 48.4749 10.1606 48.4749 12.526 48.4749C13.742 48.4749 14.0085 48.7437 14.0085 50.0039C14.0085 52.6083 14.0085 55.2126 14.0085 57.817C14.0085 58.0354 14.0085 58.2706 14.0085 58.5227C15.3411 58.5227 16.6237 58.5227 18.0063 58.5227C18.0063 58.2874 18.0063 58.0522 18.0063 57.8002C18.0063 52.4906 18.0063 47.1811 18.0063 41.8548C18.0063 40.6954 18.2894 40.4097 19.4388 40.3929C21.8541 40.3929 24.2695 40.3929 26.6848 40.3929C27.6676 40.3929 28.0007 40.729 28.0007 41.7035C28.0007 47.0299 28.0007 52.373 28.0007 57.6994C28.0007 57.9514 28.0007 58.2034 28.0007 58.4891C29.3333 58.4891 30.6326 58.4891 31.9985 58.4891C31.9985 58.2202 31.9985 57.985 31.9985 57.733C31.9985 49.7519 31.9985 41.7707 31.9985 33.7896C31.9985 32.5967 32.2817 32.311 33.4643 32.311C35.863 32.311 38.245 32.311 40.6437 32.311C41.6598 32.311 41.9763 32.6471 41.9763 33.672C41.9763 41.6699 41.9763 49.6678 41.9763 57.6826C41.9763 57.9346 41.9763 58.1866 41.9763 58.4891C43.3089 58.4891 44.5915 58.4891 45.9741 58.4891C45.9741 58.2538 45.9741 58.0018 45.9741 57.7666C45.9741 47.0971 45.9741 36.4276 45.9741 25.7581C45.9741 24.5483 46.2406 24.2627 47.4233 24.2627C49.8219 24.2627 52.2039 24.2627 54.6026 24.2627C55.652 24.2627 55.9685 24.5819 55.9685 25.6573C55.9685 26.8167 55.9685 27.9592 55.9685 29.1186C55.9685 29.8747 55.602 30.2947 54.9691 30.2947C54.3361 30.2947 53.9696 29.8747 53.9696 29.1186C53.9696 28.1944 53.9696 27.2703 53.9696 26.3126C51.9707 26.3126 50.0052 26.3126 48.0063 26.3126C48.0063 37.0325 48.0063 47.7356 48.0063 58.4891C49.9552 58.4891 51.9208 58.4891 53.9696 58.4891C53.9696 58.2538 53.9696 58.0186 53.9696 57.7666C53.9696 49.8695 53.9696 41.9724 53.9696 34.0753C53.9696 33.924 53.9696 33.7896 53.9696 33.6384C53.9696 32.7815 54.3194 32.3278 54.9691 32.3278C55.6187 32.3278 55.9685 32.7815 55.9685 33.6384C55.9685 41.6531 55.9685 49.6846 55.9685 57.6994C55.9685 57.9514 55.9685 58.2034 55.9685 58.5395C56.9679 58.5395 57.9507 58.5227 58.9169 58.5395C59.6831 58.5563 60.1828 59.1444 59.933 59.8165C59.8164 60.1189 59.4499 60.3373 59.1501 60.5222C58.9835 60.623 58.7003 60.5558 58.4671 60.5558C39.4777 60.5558 20.4882 60.5558 1.49877 60.5558C1.33219 60.5558 1.16562 60.5558 0.999046 60.5558C0.366064 60.5222 -0.000398805 60.1693 -0.0170562 59.598C-0.0337136 58.9931 0.349407 58.5731 0.982388 58.5563C1.84857 58.5227 2.73142 58.5563 3.5976 58.5395C3.73086 58.5731 3.83081 58.5563 4.01404 58.5395ZM34.0307 34.3945C34.0307 42.4764 34.0307 50.508 34.0307 58.5059C36.0462 58.5059 37.9952 58.5059 39.9441 58.5059C39.9441 50.4408 39.9441 42.426 39.9441 34.3945C37.9785 34.3945 36.0296 34.3945 34.0307 34.3945ZM20.0385 42.4596C20.0385 47.8532 20.0385 53.1963 20.0385 58.5395C22.0374 58.5395 24.0029 58.5395 25.9518 58.5395C25.9518 53.1627 25.9518 47.8196 25.9518 42.4596C23.9696 42.4596 22.0374 42.4596 20.0385 42.4596ZM11.9763 50.5416C9.96073 50.5416 7.99516 50.5416 6.0629 50.5416C6.0629 53.2299 6.0629 55.8847 6.0629 58.5227C8.06179 58.5227 10.0107 58.5227 11.9763 58.5227C11.9763 55.8679 11.9763 53.2299 11.9763 50.5416Z" fill="#E9A132"/>
                        <path d="M52.6035 6.13288C50.7712 6.13288 49.0055 6.14968 47.2398 6.11608C46.89 6.11608 46.4403 5.93125 46.2237 5.67922C46.0405 5.47759 46.0072 4.92311 46.1571 4.72148C46.357 4.43584 46.8067 4.16701 47.1565 4.1502C48.8056 4.0998 50.438 4.1166 52.0871 4.1166C53.0033 4.1166 53.9194 4.0998 54.8356 4.1166C55.6018 4.1334 55.985 4.50305 55.985 5.29276C55.985 7.84672 55.985 10.4175 55.985 12.9714C55.985 13.7275 55.6185 14.1644 55.0022 14.1644C54.3858 14.1644 54.0027 13.7443 53.9861 12.9882C53.9861 11.4928 53.9861 10.0142 53.9861 8.51881C53.9861 8.31718 53.9861 8.11556 53.9861 7.82992C52.7701 9.20771 51.654 10.5351 50.4714 11.7953C42.9922 19.81 34.5136 26.4637 24.4525 30.8995C18.0061 33.7391 11.2931 35.3186 4.24703 35.369C3.48079 35.369 3.08102 35.1001 3.01439 34.512C2.9311 33.8063 3.34753 33.4199 4.14709 33.3527C6.49578 33.1679 8.84448 33.0838 11.1599 32.7478C17.4897 31.8069 23.3697 29.5385 28.9333 26.4133C37.9117 21.3726 45.5741 14.7189 52.1704 6.78817C52.287 6.63695 52.4036 6.48573 52.5202 6.35131C52.5369 6.31771 52.5535 6.2841 52.6035 6.13288Z" fill="#E9A132"/>
                        <path d="M13.0424 0C19.822 0.117616 25.3855 5.34315 25.9686 12.2321C26.5349 18.7682 21.8542 24.8843 15.3744 26.0772C7.0624 27.6063 -0.41678 20.9693 0.0329702 12.4673C0.149572 10.0814 0.899156 7.8635 2.23175 5.86402C2.51492 5.42716 2.86473 5.14152 3.43108 5.29274C4.14735 5.49437 4.38055 6.21687 3.94746 6.90576C3.11459 8.19954 2.53158 9.59414 2.21509 11.1232C0.982443 17.3064 5.34668 23.4057 11.5766 24.1786C18.3062 25.0187 24.1196 19.81 23.9697 12.9882C23.8697 8.77082 21.9541 5.52797 18.2895 3.49489C14.6082 1.445 10.8769 1.64663 7.22897 3.76373C7.04574 3.86454 6.87917 3.99896 6.69594 4.09977C6.12958 4.41902 5.59655 4.3014 5.28006 3.79733C4.98022 3.31006 5.08017 2.80599 5.59655 2.43634C6.91248 1.51221 8.34502 0.840117 9.89416 0.487268C10.9269 0.268838 11.993 0.151221 13.0424 0Z" fill="#E9A132"/>
                        <path d="M13.9919 6.06553C14.7248 6.5864 15.3911 6.97285 15.9408 7.49373C16.6404 8.16582 16.9569 9.05634 16.9902 10.0477C17.0069 10.7198 16.6571 11.1398 16.0741 11.1734C15.4744 11.2238 15.0746 10.8374 14.9913 10.1317C14.8747 9.00594 14.1751 8.23303 13.1757 8.14902C12.1596 8.08181 11.2934 8.7371 11.0602 9.72844C10.7604 11.0222 11.6765 12.1312 13.109 12.1984C14.9913 12.2824 16.5072 13.5594 16.9069 15.3572C17.34 17.2895 16.3572 19.1714 14.4916 19.9443C14.1085 20.0955 13.9752 20.2803 14.0085 20.6668C14.0419 20.902 14.0252 21.1372 14.0085 21.3557C13.9419 21.9269 13.5421 22.2966 13.0091 22.263C12.4594 22.2294 11.993 21.9269 12.0596 21.3893C12.1762 20.3979 11.7265 20.0115 10.9269 19.5914C9.71094 18.9361 9.11127 17.7768 9.04464 16.3822C9.01133 15.6597 9.36113 15.2396 9.97746 15.206C10.6104 15.1724 10.9769 15.5252 11.0435 16.2477C11.1601 17.4743 11.9763 18.2808 13.109 18.2472C14.1751 18.2136 15.0247 17.3231 15.0413 16.2477C15.058 15.1052 14.2084 14.2651 12.9591 14.2147C10.9269 14.1139 9.4111 12.7697 9.0613 10.8038C8.74481 9.02274 9.76091 7.17448 11.5266 6.45198C11.8931 6.30076 12.0596 6.13274 12.0097 5.72948C11.9763 5.47744 11.9763 5.22541 12.0263 4.97337C12.1096 4.4189 12.4428 4.11646 13.0091 4.11646C13.5588 4.11646 13.9253 4.4189 13.9919 4.97337C14.0252 5.39343 13.9919 5.81349 13.9919 6.06553Z" fill="#E9A132"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_306">
                        <rect width="60" height="60.6061" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                 
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="500" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Profit Gain</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="cs_with_shape_image_box_1 position-relative">
              <img class="position-relative cs_zindex_2" src="assets/img/statistic_img.png" alt="Thumb">
              <img class="cs_shape_1 position-absolute moving_x" src="assets/img/shape_1.png" alt="Shape">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Company Statistic -->

    <!-- Start Latest Project -->
    <section class="cs_pt_133 cs_pt_lg_73 cs_pb_140 cs_pb_lg_80 background-filled" data-src="assets/img/faq_bg_2.jpeg">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Latest Project</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Explore Our Best <br>Recent Work Projects</h2>
          </div>
        </div>
        <div class="cs_project_slider_2 cs_gap_24">
          <div class="cs_slider_activate">
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_1.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_2.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_3.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_4.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_1.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_2.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_3.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/portfolio_4.jpeg"></div>
                <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
              </div>
            </div>
          </div>
          <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute">
            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
              <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
            </svg>             
          </div>
          <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute">
            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
              <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
            </svg>          
          </div>
        </div>
      </div>
    </section>
    <!-- End Latest Project -->

    <!-- Start Testimonial Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80 background-filled" data-src="assets/img/testimonial_bg_1.jpeg">
      <div class="container">
        <div class="position-relative">
          <div class="cs_testimonial_thumb">
            <div class="cs_testimonial_thumb-item">
              <img src="assets/img/testimonial_thumb_1.png" alt="Thumb" class="cs_height_150 cs_width_150 rounded-circle position-absolute start-0 top-0 cs_ml_17">
              <div class="cs_rating text-accent cs_mb_30" data-rating="5">
                <div class="cs_rating_percentage"></div>
              </div>
              <blockquote class="cs_testimonial_text cs_fs_26 cs_fs_lg_22 text-white fw-medium">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</blockquote>
              <div class="cs_testimonial_info d-flex cs_mt_16 cs_column_gap_13">
                <h2 class="cs_fs_18 fw-medium text-white m-0">Darlene Robertson</h2>
                <h3 class="cs_fs_18 fw-normal text-accent m-0">Web design</h3>
              </div>
            </div>
            <div class="cs_testimonial_thumb-item">
              <img src="assets/img/testimonial_thumb_2.png" alt="Thumb" class="cs_height_150 cs_width_150 rounded-circle position-absolute start-0 top-0 cs_ml_17">
              <div class="cs_rating text-accent cs_mb_30" data-rating="5">
                <div class="cs_rating_percentage"></div>
              </div>
              <blockquote class="cs_testimonial_text cs_fs_26 cs_fs_lg_22 text-white fw-medium">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</blockquote>
              <div class="cs_testimonial_info d-flex cs_mt_16 cs_column_gap_13">
                <h2 class="cs_fs_18 fw-medium text-white m-0">Darlene Robertson</h2>
                <h3 class="cs_fs_18 fw-normal text-accent m-0">Web design</h3>
              </div>
            </div>
            <div class="cs_testimonial_thumb-item">
              <img src="assets/img/testimonial_thumb_3.png" alt="Thumb" class="cs_height_150 cs_width_150 rounded-circle position-absolute start-0 top-0 cs_ml_17">
              <div class="cs_rating text-accent cs_mb_30" data-rating="5">
                <div class="cs_rating_percentage"></div>
              </div>
              <blockquote class="cs_testimonial_text cs_fs_26 cs_fs_lg_22 text-white fw-medium">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</blockquote>
              <div class="cs_testimonial_info d-flex cs_mt_16 cs_column_gap_13">
                <h2 class="cs_fs_18 fw-medium text-white m-0">Darlene Robertson</h2>
                <h3 class="cs_fs_18 fw-normal text-accent m-0">Web design</h3>
              </div>
            </div>
          </div>
          <div class="cs_testimonial_nav-active">
            <div class="cs_testimonial_nav cs_gap_24">
              <div class="cs_testimonial_nav-item">
                <img src="assets/img/testimonial_thumb_1.png" alt="Thumb" class="cs_height_80 cs_width_80 rounded-circle">
              </div>
              <div class="cs_testimonial_nav-item">
                <img src="assets/img/testimonial_thumb_2.png" alt="Thumb" class="cs_height_80 cs_width_80 rounded-circle">
              </div>
              <div class="cs_testimonial_nav-item">
                <img src="assets/img/testimonial_thumb_3.png" alt="Thumb" class="cs_height_80 cs_width_80 rounded-circle">
              </div>
            </div>
            <div class="d-flex cs_column_gap_15 justify-content-center cs_mt_50 cs_mt_lg_20">
              <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                  <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
                </svg>             
              </div>
              <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                  <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
                </svg>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Contact Section  -->
    <section class="background-filled cs_pt_80 cs_pt_lg_75 cs_pb_110 cs_pb_lg_80" data-src="assets/img/contact_bg.jpeg" >
      <div class="container">
        <div class="row">
          <div class="col-xl-6">
            <div class="cs_section_heading cs_style_1 cs_mb_40">
              <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Contact With Us</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Let’s Work Together?</h2>
                <p class="m-0">Providing legal advice, contract drafting, compliance assistance, <br>intellectual property protection, and other legal support for businesses.</p>
              </div>
            </div>
            <div class="cs_mb_40">
              <div class="cs_about-icon-box position-relative cs_mb_10">
                <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                <h3 class="cs_fs_16 cs_pl_35 cs_mb_0 cs_lh_lg">Refreshing to get such a personal touch</h3>
              </div>
              <div class="cs_about-icon-box position-relative cs_mb_10">
                <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                <h3 class="cs_fs_16 cs_pl_35 cs_mb_0 cs_lh_lg">Refreshing to get such a personal touch</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex align-items-center cs_mb_30">
                  <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M31.6128 24.7786C30.7939 23.9259 29.8062 23.47 28.7593 23.47C27.7209 23.47 26.7247 23.9175 25.8721 24.7701L23.2043 27.4295C22.9848 27.3113 22.7653 27.2015 22.5543 27.0918C22.2503 26.9398 21.9633 26.7963 21.7185 26.6443C19.2196 25.0572 16.9486 22.9888 14.7705 20.3126C13.7152 18.9787 13.006 17.8559 12.4911 16.7162C13.1833 16.083 13.8249 15.4245 14.4497 14.7914C14.6861 14.555 14.9224 14.3102 15.1588 14.0738C16.9317 12.3009 16.9317 10.0046 15.1588 8.23172L12.8541 5.92698C12.5924 5.66527 12.3222 5.39512 12.0689 5.12497C11.5624 4.60155 11.0305 4.06124 10.4818 3.5547C9.6629 2.74425 8.6836 2.31369 7.65364 2.31369C6.62368 2.31369 5.62749 2.74425 4.78327 3.5547C4.77482 3.56315 4.77482 3.56315 4.76638 3.57159L1.89601 6.46729C0.815398 7.5479 0.199112 8.86489 0.0640356 10.3929C-0.138579 12.8581 0.587457 15.1544 1.14465 16.6571C2.5123 20.3464 4.55533 23.7655 7.60299 27.4295C11.3007 31.8448 15.7498 35.3314 20.832 37.7881C22.7738 38.7083 25.3655 39.7974 28.2612 39.9831C28.4385 39.9916 28.6242 40 28.7931 40C30.7433 40 32.3811 39.2993 33.6643 37.9063C33.6727 37.8894 33.6896 37.881 33.6981 37.8641C34.1371 37.3322 34.6436 36.851 35.1755 36.3361C35.5385 35.9899 35.9099 35.6269 36.2729 35.247C37.1087 34.3774 37.5477 33.3644 37.5477 32.326C37.5477 31.2791 37.1003 30.2745 36.2476 29.4303L31.6128 24.7786ZM34.6351 33.6683C34.6267 33.6683 34.6267 33.6767 34.6351 33.6683C34.3059 34.0229 33.9682 34.3437 33.6052 34.6983C33.0564 35.2217 32.4993 35.7704 31.9758 36.3867C31.1232 37.2985 30.1185 37.729 28.8015 37.729C28.6749 37.729 28.5398 37.729 28.4132 37.7206C25.9058 37.5602 23.5758 36.5809 21.8282 35.7451C17.0499 33.4319 12.8541 30.1479 9.36742 25.9858C6.48861 22.5161 4.56377 19.308 3.28898 15.8635C2.50385 13.7614 2.21682 12.1236 2.34345 10.5787C2.42787 9.59093 2.80777 8.77203 3.50848 8.07132L6.3873 5.19251C6.80097 4.80416 7.23997 4.5931 7.67052 4.5931C8.20239 4.5931 8.63294 4.91391 8.9031 5.18406C8.91154 5.19251 8.91998 5.20095 8.92842 5.20939C9.4434 5.6906 9.93305 6.18869 10.448 6.72056C10.7097 6.99071 10.9799 7.26086 11.25 7.53946L13.5548 9.8442C14.4497 10.7391 14.4497 11.5664 13.5548 12.4613C13.31 12.7061 13.0736 12.951 12.8288 13.1873C12.1196 13.9134 11.4442 14.5888 10.7097 15.2473C10.6929 15.2641 10.676 15.2726 10.6675 15.2895C9.9415 16.0155 10.0766 16.7247 10.2285 17.2059C10.237 17.2312 10.2454 17.2565 10.2539 17.2818C10.8533 18.7339 11.6975 20.1016 12.9807 21.7309L12.9892 21.7394C15.3192 24.6097 17.7759 26.8469 20.4859 28.5607C20.832 28.7802 21.1866 28.9575 21.5243 29.1264C21.8282 29.2783 22.1153 29.4218 22.3601 29.5738C22.3938 29.5907 22.4276 29.616 22.4614 29.6329C22.7484 29.7764 23.0186 29.8439 23.2972 29.8439C23.9979 29.8439 24.4369 29.4049 24.5804 29.2614L27.4677 26.3742C27.7547 26.0871 28.2106 25.741 28.7424 25.741C29.2659 25.741 29.6964 26.0702 29.9581 26.3573C29.9666 26.3657 29.9666 26.3657 29.975 26.3742L34.6267 31.0259C35.4963 31.887 35.4963 32.7734 34.6351 33.6683Z" fill="white"/>
                      <path d="M21.6168 9.51496C23.8287 9.88642 25.838 10.9333 27.442 12.5373C29.046 14.1413 30.0844 16.1506 30.4643 18.3625C30.5572 18.9197 31.0384 19.308 31.5872 19.308C31.6547 19.308 31.7138 19.2996 31.7813 19.2911C32.4061 19.1898 32.8197 18.5989 32.7184 17.9741C32.2625 15.2979 30.9962 12.8581 29.0629 10.9248C27.1296 8.99154 24.6898 7.7252 22.0136 7.26932C21.3889 7.16801 20.8064 7.58168 20.6966 8.19797C20.5869 8.81425 20.9921 9.41365 21.6168 9.51496Z" fill="white"/>
                      <path d="M39.9542 17.6449C39.2028 13.238 37.126 9.22793 33.9349 6.03675C30.7437 2.84557 26.7336 0.768768 22.3267 0.017406C21.7104 -0.0923436 21.1279 0.32977 21.0182 0.946056C20.9169 1.57078 21.3305 2.1533 21.9553 2.26305C25.8894 2.92999 29.4773 4.79573 32.3308 7.64078C35.1843 10.4943 37.0416 14.0822 37.7086 18.0163C37.8014 18.5735 38.2826 18.9619 38.8314 18.9619C38.8989 18.9619 38.958 18.9534 39.0256 18.945C39.6418 18.8521 40.0639 18.2612 39.9542 17.6449Z" fill="white"/>
                    </svg>                  
                  </div>
                  <div>
                    <p class="text-accent cs_mb_10">Have Any Question?</p>
                    <h2 class="m-0 fw-medium cs_fs_22 cs_lh_base">+ 070 4531 9507 </h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="d-flex align-items-center cs_mb_30">
                  <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34.1388 5H5.86125C4.63868 5.00132 3.46656 5.48758 2.60207 6.35207C1.73758 7.21656 1.25132 8.38868 1.25 9.61125V30.3888C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3888V9.61125C38.7487 8.38868 38.2624 7.21656 37.3979 6.35207C36.5334 5.48758 35.3613 5.00132 34.1388 5ZM5.86125 7.5H34.1388C34.6985 7.50066 35.2351 7.72331 35.6309 8.1191C36.0267 8.51489 36.2493 9.05151 36.25 9.61125V10.5675L20 21.0138L3.75 10.5675V9.61125C3.75066 9.05151 3.97331 8.51489 4.3691 8.1191C4.76489 7.72331 5.30151 7.50066 5.86125 7.5ZM34.1388 32.5H5.86125C5.30151 32.4993 4.76489 32.2767 4.3691 31.8809C3.97331 31.4851 3.75066 30.9485 3.75 30.3888V13.54L19.3237 23.5512C19.5254 23.681 19.7602 23.75 20 23.75C20.2398 23.75 20.4746 23.681 20.6763 23.5512L36.25 13.54V30.3888C36.2493 30.9485 36.0267 31.4851 35.6309 31.8809C35.2351 32.2767 34.6985 32.4993 34.1388 32.5Z" fill="white"/>
                    </svg>               
                  </div>
                  <div>
                    <p class="text-accent cs_mb_10">Send Email</p>
                    <h2 class="m-0 fw-medium cs_fs_22 cs_lh_base">pixcelsthemes@gmail.com</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 offset-xl-1">
            <div class="cs_contact_wrap cs_type_1 position-relative">
              <form action="#" class="cs_contact_form bg-white cs_pt_64 cs_pl_80 cs_pr_80 cs_pb_80 cs_pl_lg_30 cs_pr_lg_30 position-relative cs_rounded_20 filter-lg" data-src="assets/img/contact_bg_pattern.svg">
                <div class="cs_section_heading cs_style_1 text-center cs_mb_30">
                  <div class="cs_section_heading_in">
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Contact Us</h2>
                  </div>
                </div>
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15" type="text" placeholder="Your Name">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15" type="email" placeholder="Your Email">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_30" placeholder="Message here ..." cols="30" rows="4"></textarea>
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Submit Now</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section  -->

    <!-- Start FAQ Section -->
    <section class="cs_pt_133 cs_pt_lg_73 cs_pb_140 cs_pb_lg_80 background-filled" data-src="assets/img/faq_bg_2.jpeg">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Frequently Asked Questions</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Questions & Answers</h2>
          </div>
        </div>
        <div class="cs_accordians cs_style_1">
          <div class="cs_accordian active bg-white">
            <div class="cs_accordian_head">
              <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">What services does your business provide?</h2>
              <span class="cs_accordian_toggle"></span>
            </div>
            <div class="cs_accordian_body">
              <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote. Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote.</p>
            </div>
          </div><!-- .cs_accordian -->
          <div class="cs_accordian bg-white">
            <div class="cs_accordian_head">
              <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">How much do your services cost?</h2>
              <span class="cs_accordian_toggle"></span>
            </div>
            <div class="cs_accordian_body">
              <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote. Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote.</p>
            </div>
          </div><!-- .cs_accordian -->
          <div class="cs_accordian bg-white">
            <div class="cs_accordian_head">
              <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">Do you offer any guarantees or refunds?</h2>
              <span class="cs_accordian_toggle"></span>
            </div>
            <div class="cs_accordian_body">
              <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote. Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote.</p>
            </div>
          </div><!-- .cs_accordian -->
          <div class="cs_accordian bg-white">
            <div class="cs_accordian_head">
              <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">How do I get started with your services?</h2>
              <span class="cs_accordian_toggle"></span>
            </div>
            <div class="cs_accordian_body">
              <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote. Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote.</p>
            </div>
          </div><!-- .cs_accordian -->
          <div class="cs_accordian bg-white">
            <div class="cs_accordian_head">
              <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">What's financial services you ate currently providing?</h2>
              <span class="cs_accordian_toggle"></span>
            </div>
            <div class="cs_accordian_body">
              <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote. Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us for a quote.</p>
            </div>
          </div><!-- .cs_accordian -->
        </div><!-- .cs_accordians -->
      </div>
    </section>
    <!-- End FAQ Section -->

    <!-- Start Pricing Plan -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_mt_30">
      <div class="container">
        <div class="cs_tabs cs_style_1">
          <ul class="cs_tab_links cs_pricing_control d-flex justify-content-center align-content-center p-0 cs_mb_60">
            <li class="active"><a href="#tab_1">Monthly</a> <span class="cs_switch"></span></li>
            <li>
              <a href="#tab_2">Yearly</a>
              <span class="cs_offer_label">20% Off</span>
              <span class="cs_offer_shape">
                <svg width="56" height="51" viewBox="0 0 56 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M32.4647 23.7019C32.2617 23.8184 32.0306 23.9005 31.7997 23.9824C30.6045 24.4854 29.2246 25.0889 27.9017 25.1718C26.1558 25.2669 24.9731 24.6982 24.2085 23.7679C23.1335 22.4577 22.9575 20.3114 23.5598 18.3759C24.1504 16.4507 25.4645 14.7249 27.1836 14.1225C28.3538 13.7001 29.7381 13.7999 31.2381 14.7428C32.9443 15.8018 33.7312 17.5379 33.9269 19.4907C34.0144 20.2402 33.9806 20.9765 33.9088 21.746C34.5419 21.3755 35.1803 21.0004 35.8265 20.6185C37.8897 19.306 39.875 17.7073 41.6379 16.0064C43.9976 13.789 45.9071 11.2534 47.3652 8.34255C47.5168 8.0934 47.8419 7.98931 48.0999 8.11999C48.3576 8.25098 48.4586 8.57576 48.3356 8.85889C46.8173 11.8812 44.8442 14.5307 42.3885 16.8306C40.5431 18.5441 38.5307 20.2249 36.3853 21.5495C35.4888 22.0889 34.607 22.6158 33.7048 23.101C33.3685 24.7476 32.7783 26.3189 32.153 27.5079C27.868 35.3389 16.7893 39.5548 8.51003 41.4089C8.22457 41.4789 7.94792 41.3052 7.88146 41.0091C7.81534 40.7126 8.00556 40.4302 8.29101 40.3602C16.3013 38.5619 27.065 34.5598 31.2053 26.9719C31.692 26.0794 32.1415 24.9246 32.4647 23.7019ZM32.7343 22.3487C32.3179 22.5911 31.8749 22.7975 31.4043 22.9687C30.2874 23.404 29.0486 24.0037 27.8509 24.0962C26.5361 24.1721 25.6213 23.7839 25.0549 23.0948C24.1491 21.9919 24.099 20.2672 24.5981 18.716C25.0799 17.1204 26.1079 15.642 27.5447 15.166C28.459 14.8467 29.5116 14.9391 30.6611 15.6541C32.0834 16.5463 32.7107 18.0075 32.8528 19.5939C32.9569 20.506 32.8982 21.4408 32.7343 22.3487Z" fill="#E9A132"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.10408 41.0532C8.36593 41.1215 8.68651 41.139 9.00745 41.1562C9.63557 41.2025 10.2555 41.197 10.6755 41.3054C13.2257 41.9295 16.2763 42.7102 18.5255 44.125C18.767 44.2699 18.8497 44.611 18.692 44.8652C18.5347 45.1191 18.2181 45.2162 17.948 45.0371C15.8096 43.7033 12.8884 42.9871 10.4142 42.3562C9.97876 42.2612 9.22715 42.2631 8.59063 42.224C8.03587 42.1733 7.54115 42.0704 7.19728 41.8373C6.99356 41.7188 6.80285 41.3532 7.00911 40.8212C7.31589 40.0844 8.60365 38.558 8.71909 38.3993C9.89218 36.7955 10.89 35.3434 10.7228 33.2483C10.7122 32.9628 10.9398 32.7071 11.2082 32.6519C11.5051 32.6309 11.7747 32.8694 11.785 33.1552C11.9666 35.5327 10.9292 37.2547 9.58052 39.0692C9.47439 39.161 8.69933 40.0669 8.25294 40.8065C8.21476 40.8985 8.14127 40.9621 8.10408 41.0532Z" fill="#E9A132"/>
                </svg>                
              </span>
            </li>
          </ul>
          <div class="cs_tab_body">
            <div class="cs_tab active" id="tab_1">
              <div class="row">
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style_1 cs_rounded_20 bg-white overflow-hidden cs_mb_30 position-relative">
                    <div class="cs_pricing_table-in cs_pl_50 cs_pr_50 cs_pt_60 cs_pb_30 cs_pl_lg_40 cs_pr_lg_40 cs_pt_lg_40">
                      <h2 class="cs_fs_26 d-flex align-content-center cs_mb_18">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip111)">
                          <path d="M29.3801 1.1367C29.3532 1.01438 29.2922 0.898036 29.1971 0.802938C29.102 0.707908 28.9857 0.646817 28.8634 0.620005C25.8203 -0.101342 22.7132 -0.193521 19.8086 0.344893C19.8073 0.345096 19.8061 0.345368 19.8048 0.345572C19.4478 0.411889 19.0935 0.48771 18.743 0.573033C16.2621 1.17688 13.9606 2.26165 11.9732 3.7522C11.9414 3.77236 11.9112 3.7951 11.8833 3.82008C11.2401 4.30874 10.6301 4.84036 10.0585 5.41204C7.70227 7.76831 6.02892 10.7713 5.21947 14.0965C4.46724 17.1864 4.45597 20.5526 5.18397 23.856L0.198825 28.8412C-0.0662411 29.1062 -0.066309 29.5361 0.198825 29.8012C0.331324 29.9337 0.505094 30 0.678795 30C0.852497 30 1.02627 29.9337 1.15877 29.8012L6.14398 24.816C9.4475 25.5439 12.8136 25.5326 15.9035 24.7805C19.2287 23.9711 22.2318 22.2978 24.588 19.9415C26.2296 18.2999 27.5397 16.3443 28.4572 14.1845C28.4759 14.1492 28.4917 14.112 28.504 14.0732C28.882 13.1672 29.1912 12.2257 29.427 11.2571C30.2066 8.05455 30.1903 4.55527 29.3801 1.1367ZM20.6101 1.59345C22.7715 1.25433 25.0478 1.27931 27.3489 1.69113L20.6101 8.42992V1.59345ZM11.0185 6.37198C11.2263 6.16406 11.4389 5.96267 11.6566 5.76718V7.74537C11.6566 8.12019 11.9605 8.42415 12.3354 8.42415C12.7103 8.42415 13.0142 8.12019 13.0142 7.74537V4.67243C14.8639 3.33603 16.9805 2.38838 19.2524 1.85784V9.78756L13.0142 16.0258V10.2899C13.0142 9.91504 12.7103 9.61108 12.3354 9.61108C11.9605 9.61108 11.6566 9.91504 11.6566 10.2899V17.3834L6.33764 22.7023C5.22558 16.4877 6.93436 10.4561 11.0185 6.37198ZM23.628 18.9815C19.544 23.0657 13.5123 24.7744 7.29765 23.6623L16.4145 14.5455H26.7921C25.9878 16.1834 24.9282 17.6814 23.628 18.9815ZM27.388 13.1879H17.7721L28.3089 2.65114C28.9712 6.35256 28.6329 9.98903 27.388 13.1879Z" fill="#E9A132"/>
                          </g>
                          <defs>
                          <clipPath id="clip111">
                          <rect width="30" height="30" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                      
                        <span class="cs_ml_15">Lite</span>
                      </h2>
                      <p class="cs_fs_18 cs_lh_base cs_mb_35">Perfect to get started</p>
                      <div class="cs_price d-flex align-items-end cs_mb_35">
                        <span>$</span>
                        <h3 class="cs_fs_60 text-accent">19</h3>
                        <span>/Yearly</span>
                      </div>
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden w-100"><span>Try 7 days for free</span></a>
                      <h3 class="cs_lh_base cs_fs_18 cs_mb_10 cs_mt_45">Lite Includes :</h3>
                      <ul class="cs_list cs_style_1">
                        <li>CMS Integration</li>
                        <li>Email & SMS reminders</li>
                        <li>Customer supports 24/7</li>
                      </ul>
                    </div>
                    <a href="" class="cs_pricing_footer-btn d-block text-center fw-semibold">See all features</a>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style_1 cs_rounded_20 bg-white overflow-hidden cs_mb_30 position-relative cs_popular">
                    <div class="cs_pricing_table-in cs_pl_50 cs_pr_50 cs_pt_60 cs_pb_30 cs_pl_lg_40 cs_pr_lg_40 cs_pt_lg_40">
                      <span class="cs_popular_label">Popular</span>
                      <h2 class="cs_fs_26 d-flex align-content-center cs_mb_18">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M26.7673 26.3067L22.9722 19.7334C23.6016 19.2033 24.0366 18.4495 24.1528 17.5952C24.2318 17.0143 24.5305 16.4968 24.9941 16.138C26.1957 15.2079 26.633 13.5759 26.0575 12.1695C25.8354 11.6269 25.8354 11.0294 26.0575 10.4869C26.633 9.08042 26.1957 7.44857 24.9941 6.51837C24.5305 6.15955 24.2317 5.64203 24.1528 5.06116C23.948 3.55542 22.7533 2.36074 21.2476 2.15605C20.6668 2.07705 20.1493 1.77829 19.7905 1.31475C18.8603 0.113039 17.2285 -0.324196 15.8219 0.251341C15.2794 0.473387 14.6818 0.473387 14.1393 0.251341C12.733 -0.324254 11.101 0.113039 10.1708 1.31475C9.812 1.77829 9.29448 2.07705 8.71361 2.15605C7.20781 2.3608 6.0132 3.55542 5.8085 5.06121C5.7295 5.64208 5.43075 6.1596 4.9672 6.51843C3.76549 7.44863 3.32826 9.08054 3.90379 10.4869C4.12584 11.0294 4.12584 11.6271 3.90379 12.1695C3.3282 13.5759 3.76549 15.2079 4.9672 16.1381C5.43075 16.4969 5.7295 17.0144 5.8085 17.5952C5.92617 18.4607 6.37132 19.223 7.01413 19.754L3.23086 26.3067C3.11237 26.512 3.12913 26.7685 3.27346 26.9565C3.41774 27.1445 3.661 27.2272 3.89008 27.1658L7.18771 26.2822L8.06751 29.5656C8.12887 29.7946 8.32208 29.964 8.55708 29.995C8.58275 29.9984 8.60836 30 8.63373 30C8.84107 30 9.03551 29.8898 9.14106 29.707L13.2234 22.6362C13.533 22.6028 13.8412 22.527 14.1393 22.405C14.6818 22.183 15.2795 22.183 15.8219 22.405C16.1326 22.5323 16.4545 22.6098 16.7773 22.6407L20.857 29.707C20.9626 29.8899 21.157 30 21.3643 30C21.3898 30 21.4153 29.9984 21.4411 29.995C21.6761 29.964 21.8693 29.7946 21.9306 29.5656L22.8105 26.2822L26.1081 27.1658C26.3369 27.2272 26.5804 27.1446 26.7247 26.9565C26.869 26.7685 26.8858 26.512 26.7673 26.3067ZM8.83339 27.8958L8.16808 25.4128C8.12782 25.2627 8.02966 25.1347 7.89505 25.057C7.76044 24.9793 7.60057 24.9582 7.45037 24.9984L4.95325 25.6675L8.03241 20.3342C8.25012 20.4121 8.47803 20.4683 8.71355 20.5004C9.29442 20.5794 9.81194 20.8781 10.1708 21.3417C10.6262 21.93 11.2499 22.3346 11.9329 22.5273L8.83339 27.8958ZM13.6953 21.3204C12.7747 21.6972 11.7065 21.4109 11.0976 20.6243C10.5494 19.9162 9.75879 19.4597 8.87143 19.3391C7.88579 19.205 7.10373 18.423 6.96977 17.4373C6.84911 16.55 6.39265 15.7594 5.68449 15.2112C4.89787 14.6023 4.61166 13.534 4.98841 12.6135C5.32766 11.7846 5.32766 10.8718 4.98841 10.043C4.61166 9.12238 4.89787 8.05411 5.68449 7.44523C6.39265 6.89706 6.84911 6.10651 6.96977 5.21909C7.10379 4.23345 7.88579 3.4514 8.87143 3.31737C9.75879 3.19677 10.5494 2.74031 11.0976 2.03216C11.527 1.47737 12.1847 1.17152 12.8582 1.17152C13.1396 1.17152 13.4239 1.22502 13.6952 1.33608C14.5241 1.67527 15.437 1.67527 16.2658 1.33608C17.1863 0.959262 18.2547 1.24554 18.8635 2.03216C19.4117 2.74031 20.2023 3.19677 21.0896 3.31737C22.0752 3.4514 22.8572 4.23339 22.9913 5.21909C23.1119 6.10651 23.5684 6.89706 24.2765 7.44523C25.0632 8.05411 25.3494 9.12232 24.9726 10.043C24.6334 10.8718 24.6334 11.7846 24.9726 12.6135C25.3494 13.534 25.0631 14.6023 24.2765 15.2112C23.5684 15.7594 23.1119 16.5499 22.9913 17.4373C22.8572 18.423 22.0752 19.205 21.0896 19.339C20.2022 19.4596 19.4116 19.9161 18.8635 20.6243C18.2545 21.411 17.1863 21.6971 16.2658 21.3203C15.437 20.9812 14.5242 20.9812 13.6953 21.3204ZM22.5477 24.9984C22.2349 24.9146 21.9138 25.1002 21.83 25.4128L21.1646 27.8958L18.0599 22.5181C18.7304 22.3219 19.342 21.9209 19.7905 21.3417C20.1492 20.8781 20.6667 20.5793 21.2475 20.5004C21.4941 20.4669 21.7321 20.4063 21.959 20.3227L25.0448 25.6675L22.5477 24.9984Z" fill="#E9A132"/>
                          <path d="M12.3172 9.16044L10.4939 10.9837C10.384 11.0936 10.3223 11.2427 10.3223 11.3981C10.3223 11.5535 10.384 11.7026 10.4939 11.8125L13.9136 15.2322C14.0234 15.342 14.1725 15.4038 14.3279 15.4038C14.4833 15.4038 14.6324 15.342 14.7423 15.2322L19.5038 10.4707C19.7326 10.2418 19.7326 9.87077 19.5038 9.64192L17.6805 7.81862C17.5706 7.70874 17.4216 7.64697 17.2662 7.64697C17.1107 7.64697 16.9617 7.70874 16.8518 7.81862L14.328 10.3425L13.1461 9.1605C13.0362 9.05062 12.8871 8.98886 12.7317 8.98886C12.5762 8.9888 12.4271 9.05056 12.3172 9.16044ZM13.9135 11.5856C14.0234 11.6955 14.1725 11.7572 14.3279 11.7572C14.4833 11.7572 14.6324 11.6955 14.7423 11.5856L17.266 9.06176L18.2606 10.0563L14.3279 13.989L11.7371 11.3981L12.7316 10.4036L13.9135 11.5856Z" fill="#E9A132"/>
                          <path d="M22.6175 11.5253C22.6175 9.96854 22.151 8.47136 21.2684 7.19558C20.4065 5.94986 19.2093 4.99727 17.8063 4.4409C17.5053 4.32164 17.1648 4.46879 17.0455 4.76966C16.9262 5.07053 17.0734 5.41112 17.3742 5.53044C19.8474 6.51116 21.4455 8.86429 21.4455 11.5253C21.4455 15.0797 18.5537 17.9716 14.9992 17.9716C11.4447 17.9716 8.55291 15.0797 8.55291 11.5253C8.55291 8.86423 10.151 6.5111 12.6242 5.53038C12.9251 5.41107 13.0723 5.07047 12.953 4.7696C12.8337 4.46873 12.493 4.32152 12.1922 4.44084C10.7891 4.99727 9.59188 5.9498 8.73001 7.19552C7.8474 8.4713 7.38086 9.96848 7.38086 11.5252C7.38086 15.726 10.7985 19.1435 14.9992 19.1435C19.2 19.1436 22.6175 15.726 22.6175 11.5253Z" fill="#E9A132"/>
                          <path d="M14.9981 5.07879C15.1523 5.07879 15.3035 5.01667 15.4124 4.90709C15.5214 4.79809 15.5842 4.64748 15.5842 4.49277C15.5842 4.33864 15.5215 4.18745 15.4124 4.07844C15.3035 3.96944 15.1523 3.90674 14.9981 3.90674C14.844 3.90674 14.6928 3.96944 14.5838 4.07844C14.4748 4.18745 14.4121 4.33864 14.4121 4.49277C14.4121 4.64748 14.4748 4.79809 14.5838 4.90709C14.6928 5.01667 14.844 5.07879 14.9981 5.07879Z" fill="#E9A132"/>
                        </svg>
                        <span class="cs_ml_15">Pro</span>
                      </h2>
                      <p class="cs_fs_18 cs_lh_base cs_mb_35">Best for professionals</p>
                      <div class="cs_price d-flex align-items-end cs_mb_35">
                        <span>$</span>
                        <h3 class="cs_fs_60 text-accent">22</h3>
                        <span>/Yearly</span>
                      </div>
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden w-100"><span>Get started</span></a>
                      <h3 class="cs_lh_base cs_fs_18 cs_mb_10 cs_mt_45">Every thing in Lite, plus :</h3>
                      <ul class="cs_list cs_style_1">
                        <li>Advanced analytics</li>
                        <li>100+ Integrations</li>
                        <li>Chats widget</li>
                        <li>Templates library</li>
                      </ul>
                    </div>
                    <a href="" class="cs_pricing_footer-btn d-block text-center fw-semibold">See all features</a>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style_1 cs_rounded_20 bg-white overflow-hidden cs_mb_30 position-relative">
                    <div class="cs_pricing_table-in cs_pl_50 cs_pr_50 cs_pt_60 cs_pb_30 cs_pl_lg_40 cs_pr_lg_40 cs_pt_lg_40">
                      <h2 class="cs_fs_26 d-flex align-content-center cs_mb_18">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0333)">
                          <path d="M18.3934 5.78186C19.5466 4.85027 19.8077 3.85441 19.8236 3.18298C19.8624 1.54956 18.5726 0.354248 18.4253 0.223408C18.0606 -0.100968 17.502 -0.0682723 17.1776 0.296474C16.8532 0.661221 16.8859 1.2198 17.2506 1.54423C17.2589 1.55161 18.0761 2.31615 18.0565 3.14109C18.0461 3.5806 17.7929 3.99463 17.2826 4.40683C16.1294 5.33842 15.8683 6.33428 15.8524 7.00571C15.8136 8.63913 17.1035 9.83444 17.2506 9.96534C17.4195 10.1155 17.6302 10.1894 17.84 10.1894C18.0835 10.1894 18.3259 10.0898 18.5002 9.8938C18.8245 9.52905 18.7936 8.972 18.4289 8.64762C18.1969 8.43668 17.5993 7.7369 17.6197 7.04098C17.6325 6.60393 17.8856 6.19201 18.3934 5.78186Z" fill="#E9A132"/>
                          <path d="M12.786 5.78186C13.9392 4.85027 14.2003 3.85441 14.2162 3.18298C14.255 1.54956 12.9652 0.354248 12.8179 0.223408C12.4533 -0.100968 11.8946 -0.0682723 11.5702 0.296474C11.2458 0.661221 11.2785 1.2198 11.6432 1.54423C11.6515 1.55161 12.4686 2.31615 12.4491 3.14109C12.4386 3.5806 12.1855 3.99463 11.6752 4.40683C10.522 5.33842 10.2609 6.33428 10.245 7.00571C10.2062 8.63913 11.496 9.83444 11.6432 9.96534C11.812 10.1155 12.0227 10.1894 12.2326 10.1894C12.4761 10.1894 12.7185 10.0898 12.8927 9.8938C13.2171 9.52905 13.1862 8.972 12.8214 8.64762C12.5895 8.43668 11.9919 7.7369 12.0122 7.04098C12.0251 6.60393 12.2781 6.19201 12.786 5.78186Z" fill="#E9A132"/>
                          <path d="M25.4392 14.4226H24.3931V13.7745C24.3931 13.2864 23.9974 12.8906 23.5093 12.8906H0.952189C0.464102 12.8906 0.0683594 13.2863 0.0683594 13.7745V18.439C0.0683594 22.5607 2.34971 26.1849 5.77476 28.2323H0.952717C0.46463 28.2323 0.0688867 28.6279 0.0688867 29.1161C0.0688867 29.6042 0.464512 29.9999 0.952717 29.9999H23.5094C23.9974 29.9999 24.3932 29.6042 24.3932 29.1161C24.3932 28.6279 23.9975 28.2323 23.5094 28.2323H18.6868C20.6345 27.068 22.2122 25.394 23.2109 23.4083H25.4392C27.9166 23.4083 29.9321 21.3928 29.9321 18.9154C29.9321 16.4381 27.9165 14.4226 25.4392 14.4226ZM22.6255 18.439C22.6255 23.839 17.9624 28.2323 12.2307 28.2323C6.49909 28.2323 1.83602 23.839 1.83602 18.439V14.6583H22.6255V18.439H22.6255ZM25.4392 21.6407H23.9183C24.2271 20.6236 24.3931 19.5493 24.3931 18.439V16.1902H25.4392C26.9418 16.1902 28.1644 17.4127 28.1644 18.9154C28.1644 20.4181 26.9418 21.6407 25.4392 21.6407Z" fill="#E9A132"/>
                          <path d="M7.17856 5.78186C8.3318 4.85027 8.59289 3.85441 8.60877 3.18298C8.64756 1.54956 7.35773 0.354248 7.21049 0.223408C6.8458 -0.100968 6.28717 -0.0682723 5.96273 0.296474C5.63836 0.661163 5.67105 1.2198 6.0358 1.54423C6.04406 1.55161 6.86121 2.31615 6.84164 3.14109C6.83121 3.5806 6.57808 3.99463 6.06779 4.40683C4.91455 5.33842 4.65345 6.33428 4.63757 7.00571C4.59884 8.63907 5.88867 9.83438 6.03586 9.96528C6.20426 10.115 6.41396 10.1887 6.62291 10.1887C6.86648 10.1887 7.109 10.0886 7.28367 9.89222C7.60805 9.52747 7.57535 8.96889 7.21061 8.64446C7.20234 8.63708 6.38519 7.87254 6.40476 7.0476C6.41508 6.60809 6.6682 6.19401 7.17856 5.78186Z" fill="#E9A132"/>
                          </g>
                          <defs>
                          <clipPath id="clip0333">
                          <rect width="30" height="30" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>
                        <span class="cs_ml_15">Ultimate</span>
                      </h2>
                      <p class="cs_fs_18 cs_lh_base cs_mb_35">Toolset for hard players</p>
                      <div class="cs_price d-flex align-items-end cs_mb_35">
                        <span>$</span>
                        <h3 class="cs_fs_60 text-accent">35</h3>
                        <span>/Yearly</span>
                      </div>
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden w-100"><span>Get started</span></a>
                      <h3 class="cs_lh_base cs_fs_18 cs_mb_10 cs_mt_45">Every thing in Pro, plus :</h3>
                      <ul class="cs_list cs_style_1">
                        <li>Daily performance reports</li>
                        <li>Dedicated assistant</li>
                        <li>Artificial Intelligence <span>BETA</span></li>
                        <li>Marketing tools & automations</li>
                      </ul>
                    </div>
                    <a href="" class="cs_pricing_footer-btn d-block text-center fw-semibold">See all features</a>
                  </div>
                </div>
              </div>
            </div><!-- .cs_tab -->
            <div class="cs_tab" id="tab_2">
              <div class="row">
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style_1 cs_rounded_20 bg-white overflow-hidden cs_mb_30 position-relative">
                    <div class="cs_pricing_table-in cs_pl_50 cs_pr_50 cs_pt_60 cs_pb_30 cs_pl_lg_40 cs_pr_lg_40 cs_pt_lg_40">
                      <h2 class="cs_fs_26 d-flex align-content-center cs_mb_18">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip2222)">
                          <path d="M29.3801 1.1367C29.3532 1.01438 29.2922 0.898036 29.1971 0.802938C29.102 0.707908 28.9857 0.646817 28.8634 0.620005C25.8203 -0.101342 22.7132 -0.193521 19.8086 0.344893C19.8073 0.345096 19.8061 0.345368 19.8048 0.345572C19.4478 0.411889 19.0935 0.48771 18.743 0.573033C16.2621 1.17688 13.9606 2.26165 11.9732 3.7522C11.9414 3.77236 11.9112 3.7951 11.8833 3.82008C11.2401 4.30874 10.6301 4.84036 10.0585 5.41204C7.70227 7.76831 6.02892 10.7713 5.21947 14.0965C4.46724 17.1864 4.45597 20.5526 5.18397 23.856L0.198825 28.8412C-0.0662411 29.1062 -0.066309 29.5361 0.198825 29.8012C0.331324 29.9337 0.505094 30 0.678795 30C0.852497 30 1.02627 29.9337 1.15877 29.8012L6.14398 24.816C9.4475 25.5439 12.8136 25.5326 15.9035 24.7805C19.2287 23.9711 22.2318 22.2978 24.588 19.9415C26.2296 18.2999 27.5397 16.3443 28.4572 14.1845C28.4759 14.1492 28.4917 14.112 28.504 14.0732C28.882 13.1672 29.1912 12.2257 29.427 11.2571C30.2066 8.05455 30.1903 4.55527 29.3801 1.1367ZM20.6101 1.59345C22.7715 1.25433 25.0478 1.27931 27.3489 1.69113L20.6101 8.42992V1.59345ZM11.0185 6.37198C11.2263 6.16406 11.4389 5.96267 11.6566 5.76718V7.74537C11.6566 8.12019 11.9605 8.42415 12.3354 8.42415C12.7103 8.42415 13.0142 8.12019 13.0142 7.74537V4.67243C14.8639 3.33603 16.9805 2.38838 19.2524 1.85784V9.78756L13.0142 16.0258V10.2899C13.0142 9.91504 12.7103 9.61108 12.3354 9.61108C11.9605 9.61108 11.6566 9.91504 11.6566 10.2899V17.3834L6.33764 22.7023C5.22558 16.4877 6.93436 10.4561 11.0185 6.37198ZM23.628 18.9815C19.544 23.0657 13.5123 24.7744 7.29765 23.6623L16.4145 14.5455H26.7921C25.9878 16.1834 24.9282 17.6814 23.628 18.9815ZM27.388 13.1879H17.7721L28.3089 2.65114C28.9712 6.35256 28.6329 9.98903 27.388 13.1879Z" fill="#E9A132"/>
                          </g>
                          <defs>
                          <clipPath id="clip2222">
                          <rect width="30" height="30" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>                      
                        <span class="cs_ml_15">Lite</span>
                      </h2>
                      <p class="cs_fs_18 cs_lh_base cs_mb_35">Perfect to get started</p>
                      <div class="cs_price d-flex align-items-end cs_mb_35">
                        <span>$</span>
                        <h3 class="cs_fs_60 text-accent">69</h3>
                        <span>/Yearly</span>
                      </div>
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden w-100"><span>Try 7 days for free</span></a>
                      <h3 class="cs_lh_base cs_fs_18 cs_mb_10 cs_mt_45">Lite Includes :</h3>
                      <ul class="cs_list cs_style_1">
                        <li>CMS Integration</li>
                        <li>Email & SMS reminders</li>
                        <li>Customer supports 24/7</li>
                      </ul>
                    </div>
                    <a href="" class="cs_pricing_footer-btn d-block text-center fw-semibold">See all features</a>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style_1 cs_rounded_20 bg-white overflow-hidden cs_mb_30 position-relative cs_popular">
                    <div class="cs_pricing_table-in cs_pl_50 cs_pr_50 cs_pt_60 cs_pb_30 cs_pl_lg_40 cs_pr_lg_40 cs_pt_lg_40">
                      <span class="cs_popular_label">Popular</span>
                      <h2 class="cs_fs_26 d-flex align-content-center cs_mb_18">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M26.7673 26.3067L22.9722 19.7334C23.6016 19.2033 24.0366 18.4495 24.1528 17.5952C24.2318 17.0143 24.5305 16.4968 24.9941 16.138C26.1957 15.2079 26.633 13.5759 26.0575 12.1695C25.8354 11.6269 25.8354 11.0294 26.0575 10.4869C26.633 9.08042 26.1957 7.44857 24.9941 6.51837C24.5305 6.15955 24.2317 5.64203 24.1528 5.06116C23.948 3.55542 22.7533 2.36074 21.2476 2.15605C20.6668 2.07705 20.1493 1.77829 19.7905 1.31475C18.8603 0.113039 17.2285 -0.324196 15.8219 0.251341C15.2794 0.473387 14.6818 0.473387 14.1393 0.251341C12.733 -0.324254 11.101 0.113039 10.1708 1.31475C9.812 1.77829 9.29448 2.07705 8.71361 2.15605C7.20781 2.3608 6.0132 3.55542 5.8085 5.06121C5.7295 5.64208 5.43075 6.1596 4.9672 6.51843C3.76549 7.44863 3.32826 9.08054 3.90379 10.4869C4.12584 11.0294 4.12584 11.6271 3.90379 12.1695C3.3282 13.5759 3.76549 15.2079 4.9672 16.1381C5.43075 16.4969 5.7295 17.0144 5.8085 17.5952C5.92617 18.4607 6.37132 19.223 7.01413 19.754L3.23086 26.3067C3.11237 26.512 3.12913 26.7685 3.27346 26.9565C3.41774 27.1445 3.661 27.2272 3.89008 27.1658L7.18771 26.2822L8.06751 29.5656C8.12887 29.7946 8.32208 29.964 8.55708 29.995C8.58275 29.9984 8.60836 30 8.63373 30C8.84107 30 9.03551 29.8898 9.14106 29.707L13.2234 22.6362C13.533 22.6028 13.8412 22.527 14.1393 22.405C14.6818 22.183 15.2795 22.183 15.8219 22.405C16.1326 22.5323 16.4545 22.6098 16.7773 22.6407L20.857 29.707C20.9626 29.8899 21.157 30 21.3643 30C21.3898 30 21.4153 29.9984 21.4411 29.995C21.6761 29.964 21.8693 29.7946 21.9306 29.5656L22.8105 26.2822L26.1081 27.1658C26.3369 27.2272 26.5804 27.1446 26.7247 26.9565C26.869 26.7685 26.8858 26.512 26.7673 26.3067ZM8.83339 27.8958L8.16808 25.4128C8.12782 25.2627 8.02966 25.1347 7.89505 25.057C7.76044 24.9793 7.60057 24.9582 7.45037 24.9984L4.95325 25.6675L8.03241 20.3342C8.25012 20.4121 8.47803 20.4683 8.71355 20.5004C9.29442 20.5794 9.81194 20.8781 10.1708 21.3417C10.6262 21.93 11.2499 22.3346 11.9329 22.5273L8.83339 27.8958ZM13.6953 21.3204C12.7747 21.6972 11.7065 21.4109 11.0976 20.6243C10.5494 19.9162 9.75879 19.4597 8.87143 19.3391C7.88579 19.205 7.10373 18.423 6.96977 17.4373C6.84911 16.55 6.39265 15.7594 5.68449 15.2112C4.89787 14.6023 4.61166 13.534 4.98841 12.6135C5.32766 11.7846 5.32766 10.8718 4.98841 10.043C4.61166 9.12238 4.89787 8.05411 5.68449 7.44523C6.39265 6.89706 6.84911 6.10651 6.96977 5.21909C7.10379 4.23345 7.88579 3.4514 8.87143 3.31737C9.75879 3.19677 10.5494 2.74031 11.0976 2.03216C11.527 1.47737 12.1847 1.17152 12.8582 1.17152C13.1396 1.17152 13.4239 1.22502 13.6952 1.33608C14.5241 1.67527 15.437 1.67527 16.2658 1.33608C17.1863 0.959262 18.2547 1.24554 18.8635 2.03216C19.4117 2.74031 20.2023 3.19677 21.0896 3.31737C22.0752 3.4514 22.8572 4.23339 22.9913 5.21909C23.1119 6.10651 23.5684 6.89706 24.2765 7.44523C25.0632 8.05411 25.3494 9.12232 24.9726 10.043C24.6334 10.8718 24.6334 11.7846 24.9726 12.6135C25.3494 13.534 25.0631 14.6023 24.2765 15.2112C23.5684 15.7594 23.1119 16.5499 22.9913 17.4373C22.8572 18.423 22.0752 19.205 21.0896 19.339C20.2022 19.4596 19.4116 19.9161 18.8635 20.6243C18.2545 21.411 17.1863 21.6971 16.2658 21.3203C15.437 20.9812 14.5242 20.9812 13.6953 21.3204ZM22.5477 24.9984C22.2349 24.9146 21.9138 25.1002 21.83 25.4128L21.1646 27.8958L18.0599 22.5181C18.7304 22.3219 19.342 21.9209 19.7905 21.3417C20.1492 20.8781 20.6667 20.5793 21.2475 20.5004C21.4941 20.4669 21.7321 20.4063 21.959 20.3227L25.0448 25.6675L22.5477 24.9984Z" fill="#E9A132"/>
                          <path d="M12.3172 9.16044L10.4939 10.9837C10.384 11.0936 10.3223 11.2427 10.3223 11.3981C10.3223 11.5535 10.384 11.7026 10.4939 11.8125L13.9136 15.2322C14.0234 15.342 14.1725 15.4038 14.3279 15.4038C14.4833 15.4038 14.6324 15.342 14.7423 15.2322L19.5038 10.4707C19.7326 10.2418 19.7326 9.87077 19.5038 9.64192L17.6805 7.81862C17.5706 7.70874 17.4216 7.64697 17.2662 7.64697C17.1107 7.64697 16.9617 7.70874 16.8518 7.81862L14.328 10.3425L13.1461 9.1605C13.0362 9.05062 12.8871 8.98886 12.7317 8.98886C12.5762 8.9888 12.4271 9.05056 12.3172 9.16044ZM13.9135 11.5856C14.0234 11.6955 14.1725 11.7572 14.3279 11.7572C14.4833 11.7572 14.6324 11.6955 14.7423 11.5856L17.266 9.06176L18.2606 10.0563L14.3279 13.989L11.7371 11.3981L12.7316 10.4036L13.9135 11.5856Z" fill="#E9A132"/>
                          <path d="M22.6175 11.5253C22.6175 9.96854 22.151 8.47136 21.2684 7.19558C20.4065 5.94986 19.2093 4.99727 17.8063 4.4409C17.5053 4.32164 17.1648 4.46879 17.0455 4.76966C16.9262 5.07053 17.0734 5.41112 17.3742 5.53044C19.8474 6.51116 21.4455 8.86429 21.4455 11.5253C21.4455 15.0797 18.5537 17.9716 14.9992 17.9716C11.4447 17.9716 8.55291 15.0797 8.55291 11.5253C8.55291 8.86423 10.151 6.5111 12.6242 5.53038C12.9251 5.41107 13.0723 5.07047 12.953 4.7696C12.8337 4.46873 12.493 4.32152 12.1922 4.44084C10.7891 4.99727 9.59188 5.9498 8.73001 7.19552C7.8474 8.4713 7.38086 9.96848 7.38086 11.5252C7.38086 15.726 10.7985 19.1435 14.9992 19.1435C19.2 19.1436 22.6175 15.726 22.6175 11.5253Z" fill="#E9A132"/>
                          <path d="M14.9981 5.07879C15.1523 5.07879 15.3035 5.01667 15.4124 4.90709C15.5214 4.79809 15.5842 4.64748 15.5842 4.49277C15.5842 4.33864 15.5215 4.18745 15.4124 4.07844C15.3035 3.96944 15.1523 3.90674 14.9981 3.90674C14.844 3.90674 14.6928 3.96944 14.5838 4.07844C14.4748 4.18745 14.4121 4.33864 14.4121 4.49277C14.4121 4.64748 14.4748 4.79809 14.5838 4.90709C14.6928 5.01667 14.844 5.07879 14.9981 5.07879Z" fill="#E9A132"/>
                        </svg>
                        <span class="cs_ml_15">Pro</span>
                      </h2>
                      <p class="cs_fs_18 cs_lh_base cs_mb_35">Best for professionals</p>
                      <div class="cs_price d-flex align-items-end cs_mb_35">
                        <span>$</span>
                        <h3 class="cs_fs_60 text-accent">78</h3>
                        <span>/Yearly</span>
                      </div>
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden w-100"><span>Get started</span></a>
                      <h3 class="cs_lh_base cs_fs_18 cs_mb_10 cs_mt_45">Every thing in Lite, plus :</h3>
                      <ul class="cs_list cs_style_1">
                        <li>Advanced analytics</li>
                        <li>100+ Integrations</li>
                        <li>Chats widget</li>
                        <li>Templates library</li>
                      </ul>
                    </div>
                    <a href="" class="cs_pricing_footer-btn d-block text-center fw-semibold">See all features</a>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style_1 cs_rounded_20 bg-white overflow-hidden cs_mb_30 position-relative">
                    <div class="cs_pricing_table-in cs_pl_50 cs_pr_50 cs_pt_60 cs_pb_30 cs_pl_lg_40 cs_pr_lg_40 cs_pt_lg_40">
                      <h2 class="cs_fs_26 d-flex align-content-center cs_mb_18">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_81_9449)">
                          <path d="M18.3934 5.78186C19.5466 4.85027 19.8077 3.85441 19.8236 3.18298C19.8624 1.54956 18.5726 0.354248 18.4253 0.223408C18.0606 -0.100968 17.502 -0.0682723 17.1776 0.296474C16.8532 0.661221 16.8859 1.2198 17.2506 1.54423C17.2589 1.55161 18.0761 2.31615 18.0565 3.14109C18.0461 3.5806 17.7929 3.99463 17.2826 4.40683C16.1294 5.33842 15.8683 6.33428 15.8524 7.00571C15.8136 8.63913 17.1035 9.83444 17.2506 9.96534C17.4195 10.1155 17.6302 10.1894 17.84 10.1894C18.0835 10.1894 18.3259 10.0898 18.5002 9.8938C18.8245 9.52905 18.7936 8.972 18.4289 8.64762C18.1969 8.43668 17.5993 7.7369 17.6197 7.04098C17.6325 6.60393 17.8856 6.19201 18.3934 5.78186Z" fill="#E9A132"/>
                          <path d="M12.786 5.78186C13.9392 4.85027 14.2003 3.85441 14.2162 3.18298C14.255 1.54956 12.9652 0.354248 12.8179 0.223408C12.4533 -0.100968 11.8946 -0.0682723 11.5702 0.296474C11.2458 0.661221 11.2785 1.2198 11.6432 1.54423C11.6515 1.55161 12.4686 2.31615 12.4491 3.14109C12.4386 3.5806 12.1855 3.99463 11.6752 4.40683C10.522 5.33842 10.2609 6.33428 10.245 7.00571C10.2062 8.63913 11.496 9.83444 11.6432 9.96534C11.812 10.1155 12.0227 10.1894 12.2326 10.1894C12.4761 10.1894 12.7185 10.0898 12.8927 9.8938C13.2171 9.52905 13.1862 8.972 12.8214 8.64762C12.5895 8.43668 11.9919 7.7369 12.0122 7.04098C12.0251 6.60393 12.2781 6.19201 12.786 5.78186Z" fill="#E9A132"/>
                          <path d="M25.4392 14.4226H24.3931V13.7745C24.3931 13.2864 23.9974 12.8906 23.5093 12.8906H0.952189C0.464102 12.8906 0.0683594 13.2863 0.0683594 13.7745V18.439C0.0683594 22.5607 2.34971 26.1849 5.77476 28.2323H0.952717C0.46463 28.2323 0.0688867 28.6279 0.0688867 29.1161C0.0688867 29.6042 0.464512 29.9999 0.952717 29.9999H23.5094C23.9974 29.9999 24.3932 29.6042 24.3932 29.1161C24.3932 28.6279 23.9975 28.2323 23.5094 28.2323H18.6868C20.6345 27.068 22.2122 25.394 23.2109 23.4083H25.4392C27.9166 23.4083 29.9321 21.3928 29.9321 18.9154C29.9321 16.4381 27.9165 14.4226 25.4392 14.4226ZM22.6255 18.439C22.6255 23.839 17.9624 28.2323 12.2307 28.2323C6.49909 28.2323 1.83602 23.839 1.83602 18.439V14.6583H22.6255V18.439H22.6255ZM25.4392 21.6407H23.9183C24.2271 20.6236 24.3931 19.5493 24.3931 18.439V16.1902H25.4392C26.9418 16.1902 28.1644 17.4127 28.1644 18.9154C28.1644 20.4181 26.9418 21.6407 25.4392 21.6407Z" fill="#E9A132"/>
                          <path d="M7.17856 5.78186C8.3318 4.85027 8.59289 3.85441 8.60877 3.18298C8.64756 1.54956 7.35773 0.354248 7.21049 0.223408C6.8458 -0.100968 6.28717 -0.0682723 5.96273 0.296474C5.63836 0.661163 5.67105 1.2198 6.0358 1.54423C6.04406 1.55161 6.86121 2.31615 6.84164 3.14109C6.83121 3.5806 6.57808 3.99463 6.06779 4.40683C4.91455 5.33842 4.65345 6.33428 4.63757 7.00571C4.59884 8.63907 5.88867 9.83438 6.03586 9.96528C6.20426 10.115 6.41396 10.1887 6.62291 10.1887C6.86648 10.1887 7.109 10.0886 7.28367 9.89222C7.60805 9.52747 7.57535 8.96889 7.21061 8.64446C7.20234 8.63708 6.38519 7.87254 6.40476 7.0476C6.41508 6.60809 6.6682 6.19401 7.17856 5.78186Z" fill="#E9A132"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_81_9449">
                          <rect width="30" height="30" fill="white"/>
                          </clipPath>
                          </defs>
                        </svg>
                        <span class="cs_ml_15">Ultimate</span>
                      </h2>
                      <p class="cs_fs_18 cs_lh_base cs_mb_35">Toolset for hard players</p>
                      <div class="cs_price d-flex align-items-end cs_mb_35">
                        <span>$</span>
                        <h3 class="cs_fs_60 text-accent">89</h3>
                        <span>/Yearly</span>
                      </div>
                      <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden w-100"><span>Get started</span></a>
                      <h3 class="cs_lh_base cs_fs_18 cs_mb_10 cs_mt_45">Every thing in Pro, plus :</h3>
                      <ul class="cs_list cs_style_1">
                        <li>Daily performance reports</li>
                        <li>Dedicated assistant</li>
                        <li>Artificial Intelligence <span>BETA</span></li>
                        <li>Marketing tools & automations</li>
                      </ul>
                    </div>
                    <a href="" class="cs_pricing_footer-btn d-block text-center fw-semibold">See all features</a>
                  </div>
                </div>
              </div>
            </div><!-- .cs_tab -->
          </div><!-- .cs_tab_body -->
        </div><!-- .cs_tabs -->
      </div>
    </section>
    <!-- End Pricing Plan -->

    <!-- Start Blog Section -->
    <section class="cs_pt_100 cs_pt_lg_40 cs_pb_110 cs_pb_lg_50">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Find The Blogs</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Find Out Latest News <br>and Articles</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-xxl-3">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_1.jpeg"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                  <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul>
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                  <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                  <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_2.jpeg"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                  <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul>
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                  <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                  <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_3.jpeg"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                  <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul>
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                  <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                  <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
              <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_12.jpeg"></div>
              </a>
              <div class="cs_post_in">
                <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                  <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                    <li>
                      <span><i class="fa-solid fa-user"></i> By </span> 
                      <a href="">admin</a>
                    </li>
                    <li>
                      <span><i class="fa-solid fa-comment-dots"></i></span> 
                      <a href="">3 comments</a>
                    </li>
                  </ul>
                  <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                  <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                  <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    @endsection
