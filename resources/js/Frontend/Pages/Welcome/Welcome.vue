<script setup>

import {Head} from '@inertiajs/inertia-vue3'
import Footer from "@/Frontend/Components/Footer.vue";


</script>

<template>
  <Head><title> Welcome to Home</title></Head>

  <!-- Preloader -->
<!--    <div class="preloader-wrap">-->
<!--      <div class="preloader-inside">-->
<!--        <div class="logo-loading animated bounce bounceIn">-->
<!--          <img src="storage/frontend/images/logos/logo-image.webp" alt="responsive img">-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
  <!-- End Preloader -->
  <!-- Nav Section -->
  <header class="header-area">
    <!-- Nav Section -->
    <nav class="navbar navbar-default navbar-fixed-top nav-area" id="scroll-menu">
      <!-- Header Top Section -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="d-none d-md-block col-xl-6 col-lg-8 col-md-9">
              <ul class="online">
                <li><a href="tel:+37412345678">Phone:<span>+374 12 345678</span></a></li>
                <li><a href="#">Opening Hours:<span><small>Mon-Fri:</small>22:00 - 09:00</span></a></li>
              </ul>
            </div>
            <div class="col-12 col-6 col-lg-4 col-md-3">
              <ul class="social-link">

                <li><a href="https://www.facebook.com/matreshkashowclub" target="_blank"><i
                    class="fa fa-facebook"></i></a></li>

                <li><a href="https://www.instagram.com/matreshkashowclub/" target="_blank"><i
                    class="fa fa-instagram"></i></a></li>

                <li><a href="https://t.me/matreshkashowclub" target="_blank"><i
                    class="fa fa-telegram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Header Top Section -->
      <div class="container">
        <div class="logo-menu-wrap">
          <div class="logo">
            <a href="/public">
              <img src="storage/frontend/images/logos/logo-night-club.webp"
                   alt="responsive img"
                   class="logo-image">
            </a>
          </div>
          <div class="main-menu main-menu-mrg1">
            <nav>
              <ul>
                <li>
                  <a href="/public">Menu</a>
                </li>
                <li>
                  <a href="#videos">Videos</a>
                </li>
                <li>
                  <a href="#gallery">Gallery</a>
                </li>
                <li>
                  <a href="#blog">Blog</a>
                </li>
                <li>
                  <a href="#vacancies">Vacancies</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="mobile-menu-area">
          <div class="mobile-menu">
            <nav id="mobile-menu-active">
              <ul class="menu-overflow">
                <li><a href="index.html">HOME</a></li>
                <li><a href="#">Mega menu</a>
                  <ul>
                    <li><a href="#">Menu Style</a>
                      <ul>
                        <li><a href="menu-style-2.html">Menu Style 2</a></li>
                        <li><a href="menu-style-3.html">Menu Style 3</a></li>
                        <li><a href="menu-style-4.html">Menu Style 4</a></li>
                        <li><a href="menu-style-5.html">Menu Style 5</a></li>
                        <li><a href="menu-style-6.html">Menu Style 6</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Footer Style</a>
                      <ul>
                        <li><a href="index.html">Footer Style 1</a></li>
                        <li><a href="footer-style-2.html">Footer Style 2</a></li>
                        <li><a href="footer-style-3.html">Footer Style 3</a></li>
                        <li><a href="footer-style-4.html">Footer Style 4</a></li>
                        <li><a href="footer-style-5.html">Footer Style 5</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Mega menu 3</a>
                      <ul>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Mega menu 4</a>
                      <ul>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                        <li><a href="#">Mega menu</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="event.html">Event</a></li>
                <li><a href="#">Gallery</a>
                  <ul>
                    <li><a href="gallery-photos.html">Gallery Photos</a></li>
                    <li><a href="gallery-videos.html">Gallery Videos</a></li>
                    <li><a href="gallery-1.html">Gallery Header Slide</a></li>
                  </ul>
                </li>
                <li><a href="#">Pages</a>
                  <ul>
                    <li><a href="booking.html">Booking Page</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Sub Menu</a>
                      <ul>
                        <li><a href="#">Sub Menu 1</a></li>
                        <li><a href="#">Sub Menu 2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Blog</a>
                  <ul>
                    <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                    <li><a href="blog-3grid.html">Blog 3 Grid</a></li>
                    <li><a href="blog-2grid.html">Blog 2 Grid Sidebar</a></li>
                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                    <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Nav Section -->
  <!-- Hero Section -->
  <div class="hero-area" id="home">
    <div id="hero-slider-screen" class="owl-carousel owl-theme hero-slider-inner">
      <div class="item">
        <img src="assets/images/webp/IMG_3386.webp" alt="responsive img" class="image-cover">
        <div class="hero-caption">
          <div class="hero-caption-inner">
            <h1 class="hero-caption-title">Матрёшка Night Club</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/webp/Gheviphoto-137.webp" alt="responsive img" class="image-cover">
        <div class="hero-caption">
          <div class="hero-caption-inner">
            <h1 class="hero-caption-title">Матрёшка Night Club</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->
  <!-- Service Section -->
  <div class="service-area inner-padding2">
    <div class="container">
      <div class="row">
        <div class="col-12 foo">
          <div class="section-title-area">
            <h2 class="section-title">Welcome To Our Club</h2>
            <div class="section-divider"/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="service-item">
            <img src="assets/images/webp/Gheviphoto-13.webp" alt="responsive img">
            <div class="caption">
              <div class="caption-inner">
                <div class="caption-content">
                  <i class="fa fa-glass"></i>
                  <h3 class="service-title">drink bar</h3>
                  <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                    athem offera. atuioUt enim ad minis nostr.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-item">
            <img src="assets/images/webp/Gheviphoto-23.webp" alt="responsive img">
            <div class="caption">
              <div class="caption-inner">
                <div class="caption-content">
                  <i class="fa fa-cutlery"></i>
                  <h3 class="service-title">restaurant</h3>
                  <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                    athem offera. atuioUt enim ad minis nostr.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-item foo">
            <img src="assets/images/webp/Gheviphoto-60.webp" alt="responsive img">
            <div class="caption">
              <div class="caption-inner">
                <div class="caption-content">
                  <i class="fa fa-music"></i>
                  <h3 class="service-title">dj’s music</h3>
                  <p>Lorem ipsum atea dolor amet sectetur adip isicing elit, sed do eiua intan olore magna
                    athem offera. atuioUt enim ad minis nostr.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service Section -->
  <!-- About Section -->
  <div class="about-area inner-padding" id="videos">
    <div class="container">
      <div class="row">
        <div class="col-12 foo">
          <div class="section-title-area-2">
            <h2 class="section-title">About Our Club</h2>
            <div class="section-divider"/>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid dunt ut
              labore et dolore ma.Ut enim ad minim veniam, quis nos</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="about-vedio">
            <video controls class="about-vedio-player">
              <source src="mov_bbb.mp4" type="video/mp4">
              <source src="mov_bbb.ogg" type="video/ogg">
              Your browser does not support HTML video.
            </video>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gallery-area inner-padding" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-12 foo">
          <div class="section-title-area">
            <h2 class="section-title">Night Club Gallery</h2>
            <div class="section-divider"/>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-12">
          <div class="gallery-masonry gallery">
            <div class="gallery-item">
              <img src="assets/images/webp/25.02.webp" alt="responsive img">
            </div>
            <div class="gallery-item">
              <img src="assets/img/gallery-2.png" alt="responsive img">
            </div>
            <div class="gallery-item">
              <img src="assets/img/gallery-3.png" alt="responsive img">
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-content">
                    <ul>
                      <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                      <li><a href="assets/img/gallery-3.png"><i class="fa fa-search-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="assets/img/gallery-4.png" alt="responsive img">
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-content">
                    <ul>
                      <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                      <li><a href="assets/img/gallery-4.png"><i class="fa fa-search-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="assets/img/gallery-5.png" alt="responsive img">
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-content">
                    <ul>
                      <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                      <li><a href="assets/img/gallery-5.png"><i class="fa fa-search-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="gallery-item">
              <img src="assets/img/gallery-6.png" alt="responsive img">
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-content">
                    <ul>
                      <li><a href="gallery-photos.html"><i class="fa fa-link"></i></a></li>
                      <li><a href="assets/img/gallery-6.png"><i class="fa fa-search-plus"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="blog-area inner-padding3" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-12 foo">
          <div class="section-title-area">
            <h2 class="section-title">Our Instagram Blog</h2>
            <div class="section-divider"/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 foo">
          <div class="post-row">
            <div class="post-header">
              <div class="post-feature">
                <img src="assets/img/post-feature-1.png" alt="responsive img">
              </div>
            </div>
            <div class="post-body">
              <div class="post-caption">
                <div class="post-caption-inner">
                  <div class="post-caption-content">
                    <div class="post-link"><a href="blog-details-sidebar.html"
                                              class="btn btn-default link-btn"><i
                        class="fa fa-link"></i></a></div>
                    <div class="post-sticker hidden-xs"><i class="fa fa-clock-o"></i>Date : 26 oct 2021
                    </div>
                    <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post
                      Dummy Title</a></h2>
                    <p>Adipisicing elit, thsed do the an eiusmod tempor incidi dunt the at dipising elit
                      ased eius mod tempor incidi dunt ipisi cing elit ased.</p>
                    <ul class="post-meta">
                      <li><a href="#"><i class="fa fa-user"></i>By A Mollik </a></li>
                      <li><a href="#"><i class="fa fa-heart"></i>20 Likes</a></li>
                      <li><a href="#"><i class="fa fa-comments-o"></i>02 Comments</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-footer">
              <div class="post-footer-caption">
                <div class="footer-caption-inner">
                  <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post Dummy
                    Title</a></h2>
                  <div class="post-sticker"><i class="fa fa-clock-o"></i>Date : 26 oct 2021</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 foo">
          <div class="post-row">
            <div class="post-header">
              <div class="post-feature">
                <img src="assets/img/post-feature-2.png" alt="responsive img">
              </div>
            </div>
            <div class="post-body">
              <div class="post-caption">
                <div class="post-caption-inner">
                  <div class="post-caption-content">
                    <div class="post-link"><a href="blog-details-sidebar.html"
                                              class="btn btn-default link-btn"><i
                        class="fa fa-link"></i></a></div>
                    <div class="post-sticker hidden-xs"><i class="fa fa-clock-o"></i>Date : 26 oct 2021
                    </div>
                    <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post
                      Dummy Title</a></h2>
                    <p>Adipisicing elit, thsed do the an eiusmod tempor incidi dunt the at dipising elit
                      ased eius mod tempor incidi dunt ipisi cing elit ased.</p>
                    <ul class="post-meta">
                      <li><a href="#"><i class="fa fa-user"></i>By A Mollik </a></li>
                      <li><a href="#"><i class="fa fa-heart"></i>20 Likes</a></li>
                      <li><a href="#"><i class="fa fa-comments-o"></i>02 Comments</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-footer">
              <div class="post-footer-caption">
                <div class="footer-caption-inner">
                  <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post Dummy
                    Title</a></h2>
                  <div class="post-sticker"><i class="fa fa-clock-o"></i>Date : 26 oct 2021</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 foo hidden-sm">
          <div class="post-row">
            <div class="post-header">
              <div class="post-feature">
                <img src="assets/img/post-feature-3.png" alt="responsive img">
              </div>
            </div>
            <div class="post-body">
              <div class="post-caption">
                <div class="post-caption-inner">
                  <div class="post-caption-content">
                    <div class="post-link"><a href="blog-details-sidebar.html"
                                              class="btn btn-default link-btn"><i
                        class="fa fa-link"></i></a></div>
                    <div class="post-sticker hidden-xs"><i class="fa fa-clock-o"></i>Date : 26 oct 2021
                    </div>
                    <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post
                      Dummy Title</a></h2>
                    <p>Adipisicing elit, thsed do the an eiusmod tempor incidi dunt the at dipising elit
                      ased eius mod tempor incidi dunt ipisi cing elit ased.</p>
                    <ul class="post-meta">
                      <li><a href="#"><i class="fa fa-user"></i>By A Mollik </a></li>
                      <li><a href="#"><i class="fa fa-heart"></i>20 Likes</a></li>
                      <li><a href="#"><i class="fa fa-comments-o"></i>02 Comments</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-footer">
              <div class="post-footer-caption">
                <div class="footer-caption-inner">
                  <h2 class="post-heading"><a href="blog-details-sidebar.html">The Best Blog Post Dummy
                    Title</a></h2>
                  <div class="post-sticker"><i class="fa fa-clock-o"></i>Date : 26 oct 2021</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <Footer/>



</template>

