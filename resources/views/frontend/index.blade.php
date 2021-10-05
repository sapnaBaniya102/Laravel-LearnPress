@extends('frontend.layouts.layout')
@section('content')
<body class="pt-sm-0">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        {{-- <img alt="" src="{{asset('images/preloaders/5.gif')}}"> --}}
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
     <section id="home">

      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>
            

            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="admin/dist/uploads/" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
              <!-- MAIN IMAGE -->
              {{-- <img src="{{asset('admin/uploads/')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina> --}}
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']"
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;">
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']"
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white"
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme"
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href=""></a>
            </li>
           

      


          </ul>
        </div>
        <!-- end .rev_slider -->
      </div>
      <!-- end .rev_slider_wrapper -->
      <script>
        $(document).ready(function(e) {
          $(".rev_slider").revolution({
            sliderType:"standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
              arrows: {
                style:"zeus",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                }
              },
              bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"metis",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
              }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
          });
        });
      </script>
      <!-- Slider Revolution Ends -->

    </section>

     


      <!-- Section: About -->
      <!-- Section: About -->
      <section id="about">
        <div class="container pt-0 mt-50 pb-70">
          <div class="section-content">
            <div class="mt-10 row"> 
              
              <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <h3 class="text-uppercase mt-15">
                 
              </h3>
                
                <p class="mb-15">
           
                </p>
              

              </div>
            
              <div class="col-sm-12 col-md-6 mt-0 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="video-popup">
                <a href="" data-lightbox-gallery="youtube-video" title="Video">
                  {{-- <img alt="" src="{{asset('images/about/5.jpg')}}" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0"> --}}
                </a>
              </div>
            </div>

            </div>
          </div>
        </div>
      </section>


      <!-- Divider: Funfact -->
      <section class="divider parallax layer-overlay" data-bg-img="{{asset('uploads/file/images/bg/bg6.jpg')}}" data-parallax-ratio="0.7">
        <div class="container pt-70 pb-60">
          <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="text-center funfact">
                <i class="mt-5 text-white fa fa-users"></i>
                <h2 data-animation-duration="2000" data-value="" class="mt-0 text-white animate-number font-38 font-weight-500">0</h2>
                <h4 class="text-white text-uppercase"></h4>
              </div>
            </div>
       
          </div>
        </div>
      </div>
    </section>


        <!-- Divider: Funfact -->
     



   <!-- Divider: why choose us 1 -->
    <section class="divider parallax" data-bg-img="{{asset('uploads/file/images/bg/bg5.jpg')}}" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12 col-md-offset-0">
            <div class="bg-white-transparent-9 pb-10 p-40">
              <h2 class="mb-20 mt-30 line-height-1 text-center text-uppercase">Why <span class="text-theme-color-2"> Choose Us?</span></h2>
              <div class="row">


           

                <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                    <a class="icon pull-left sm-pull-none flip" href="#">
                    <i class="fa fa-building text-theme-colored font-50"></i>
                    </a>
                    <div class="ml-70 ml-sm-0">
                      <h4 class="icon-box-title mt-15 mb-5"></h4>
               
                    </div>
                  </div>
                </div>
            
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Diver: Video Background  -->
      <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{asset('uploads/file/images/bg/bg1.jpg')}}" data-parallax-ratio="0.7">
        <div class="container pt-60 pb-70">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
       

              <div class="text-center col-md-10 col-md-offset-1">
                <h3 class="mt-0 mb-20 text-white text-uppercase font-30 font-weight-600"></h3>
                <p class="text-white lead"></p>
                <a href="" data-lightbox-gallery="youtube-video"><i class="text-white fa fa-play-circle font-72"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: events -->
      <section class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="{{asset('uploads/file/images/bg/bg1.jpg')}}">
        <div class="container pt-40 pb-60">
          <div class="section-content">

            <div class="row">
              <div class="col-md-8 col-md-push-2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                <h3 class="text-white text-uppercase ml-15 title line-bottom">Next <span class="text-theme-color-2 font-weight-700">Events</span></h3>
                
             

                    <div class="p-0 m-0 bxslider bx-nav-top">
                      <div class="pr-0 col-md-6">
                        <div class="pricing table-horizontal maxwidth100">

                          <div class="row">
                            <div class="col-md-6">
                              <div class="thumb">
                                {{-- <img class="img-fullwidth mb-sm-0" src="{{asset('admin/dist/uploads/')}}" alt=""> --}}
                              </div>
                            </div>
                            <div class="p-10 col-md-6 pl-sm-50">
                              <h4 class="mt-0 mt-10 mb-5"><a href="events-details.php" class="text-white"></a></h4>
                              <ul class="mb-5 text-white list-inline font-16">
                                <li class="pr-0"><i class="mr-5 fa fa-calendar"></i</li>
                                <li class="pl-5"><i class="mr-5 fa fa-map-marker"></li>
                              </ul>
                              <a class="mt-20 text-white font-16" href="events-details.php?id=">Read More →</a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

            
              </div>


            </div>
          </div>
        </div>
      </section>

      <!-- Section: Blog -->
      <section id="blog">
        <div class="container pb-70">
          <div class="mb-20 text-center section-title">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="mt-10 line-height-1 text-uppercase">Recent <span class="text-theme-color-2"> News</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
        
                  <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <article class="clearfix post mb-sm-30">
                      <div class="entry-header">
                        <div class="post-thumb thumb">
                          <img src="{{asset('uploads/file/images/blog/1.jpg')}}" alt="" class="img-responsive img-fullwidth">
                        </div>
                      </div>
                      <div class="p-20 pr-10 entry-content">
                        <div class="mt-0 entry-meta no-bg no-border">
                          <div class="event-content">
                            <h4 class="m-0 text-white entry-title text-capitalize"><a href="newsdetails.php"></a></h4>
                            <span class="mb-10 mr-10 text-gray-darkgray font-13"><i class="mr-5 fa fa-calendar text-theme-colored"></i></span>

                          </div>
                        </div>
                        <p class="mt-10"></p>
                        <div class="mt-10"> <a href="newsdetails.php?id=" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                        <div class="clearfix"></div>
                      </div>
                    </article>
                  </div>
          

            </div>
          </div>
        </div>
      </section>

    </div>
    @endsection
    <!-- Footer -->
