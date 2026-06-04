@extends('themes.default.common.master')
@section('content')

   <!-- start banner section -->
<div class="swiper mySwiper  banner-carousel">
   <div class="swiper-wrapper">
      <!--for video-->
      @foreach ($banners as $banner)
         @if ($banner->youtube_link)
            <div class="swiper-slide">
               <div class="uk-position-relative" id="ytbg3" data-ytbg-fade-in="true" data-ytbg-mute-button="true" data-youtube="https://youtu.be/{{ $banner->youtube_link }}"></div>
               <div class="uk-overlay uk-overlay-primary uk-position-cover uk-banner-overlay uk-flex uk-flex-middle uk-flex-center uk-flex-column" uk-scrollspy="cls: uk-animation-fade; target: h1,a; delay: 500;">
                  <div class="uk-banner-font uk-width-1-1 uk-width-1-2@m uk-text-center uk-margin-large-top">
                     <h1>{{$banner->title}}</h1>
                  </div>
                  <a href="{{ $banner->link }}" class="uk-btn uk-btn-secondary">Discover Trip</a>
               </div>
            </div>
         @else
            <!--for image-->
            <div class="swiper-slide">
               <div class="uk-inline hero-items">
                  <img src="{{ $banner->picture ? asset('uploads/banners/'.$banner->picture) : asset('theme-assets/img/mountain/mountain5.jpeg')}}" width="1800" height="1200" alt="">
                     <div class="uk-overlay uk-overlay-primary uk-position-cover uk-banner-overlay uk-flex uk-flex-middle uk-flex-center uk-flex-column
                     " uk-scrollspy="cls: uk-animation-fade; target: h1,a; delay: 500;">
                        <div class="uk-banner-font uk-width-1-1 uk-width-1-2@m uk-text-center uk-margin-large-top" >
                           <h1>{{$banner->title}}</h1>
                        </div>
                        <a href="{{ $banner->link }}" class="uk-btn uk-btn-secondary">Discover Trip</a>
                     </div>
               </div>
            </div>
         @endif
      @endforeach
   </div>
   <div class="swiper-pagination"></div>
</div>
<!-- end banner section -->

   <!-- start activities section -->
   <section class="uk-section uk-light-bg">
      <div class="uk-container">
         <div class="uk-grid-match uk-flex uk-flex-middle" uk-grid>
               <div class="uk-width-1-3@m">
                  <div class="uk-title-font">
                     <span class="uk-secondary  dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                     <h1 class="uk-primary">{{$setting->text1_title}}</h1>
                     <p>{{$setting->text1_sub_title}}</p>
                     <a href="{{ route('page.activitylist') }}" class="uk-btn uk-btn-secondary">Discover All Activities</a>
                  </div>
               </div>
               <div class="uk-width-2-3@m">
                  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                     <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-2@m  uk-child-width-1-3@l uk-grid-small uk-grid">
                        @foreach ($activity_list as $row )
                           <div class="uk-media-400 uk-activities">
                              @if($row->external_link)
                                 <a href="{{$row->external_link}}" class="uk-list-shine uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-height-1-1">
                              @else
                                 <a href="{{ route('activity-list', $row->uri) }}" class="uk-list-shine uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-height-1-1">
                              @endif
                                 <img src="{{ $row->thumbnail ? asset('uploads/icon/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')}} " class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="{{ $row->title }}">
                                 <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                                 <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                                    <span class="uk-white uk-text-uppercase">{{ $row->title }}</span>
                                    <div class="dot-line uk-text-center"></div>
                                 </div>
                              </a>
                           </div>
                        @endforeach
                     </div>
                     <div class="uk-flex uk-flex-center">
                        <a class=" uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class=" uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                     </div>
                  </div>

               </div>
         </div>
      </div>
   </section>
   <!-- end activities section -->

   <!-- start about section -->

@if($about_us)
   <section class="uk-primary-bg ">
      <div class=" uk-grid-match uk-grid-collapse uk-primary-bg  uk-about-text" uk-grid>
          <div class=" uk-width-3-4@m  uk-padding uk-padding-left uk-index-responsive-padding">
              <div class="uk-container uk-flex uk-flex-middle uk-margin-top uk-margin-bottom">
                  <div class="uk-title-font uk-contents">
                     <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                    <h1 class="uk-secondary">{{$about_us->post_type}}</h1>
                    <!-- <span class="uk-white uk-contents">  -->
                     {!! $about_us->content !!}
                     <!-- </span> -->
                    <a href="{{route('page.posttype_detail',$about_us->uri)}}" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                </div>
            </div> 
        </div>
        <div class="uk-width-1-4@m uk-padding uk-flex uk-flex-center uk-flex-middle ">
            <img src="{{asset('theme-assets/img/logo.gif')}}" class="about-img" alt="{{$about_us->post_type}}">
         </div>
      </div>
   </section>
@endif
   <!-- end about section -->

   <!--start trip section -->
   <section class="uk-section">
      <div class="uk-container">
         <div class="uk-grid">
               <div class="uk-width-1-4@m">
                  <div class="uk-title-font">
                     <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>PACKAGES</span>
                     <h1 class="uk-primary">{{$setting->text2_title}}</h1>
                  </div>
               </div>
               <div class="uk-width-expand@m uk-flex uk-flex-between uk-flex-middle">
                  <p>
                     {{$setting->text2_sub_title}}
                  </p>
               </div>
               <div class="uk-width-1-4@m uk-flex uk-flex-baseline uk-flex-right uk-flex-top uk-visible@m">
                  {{-- <a href=" trip-detail.php" class="uk-btn uk-btn-secondary">View All</a> --}}
               </div>
         </div>
         <div class="uk-child-width-1-2@l" uk-grid uk-height-match>
            @foreach ($famous_trips as $row)
               <div>
                  <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                     <div class="uk-width-2-5@s">
                           <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-list-shine uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle ">
                              <img src="{{!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg')}}" class="uk-trip-image uk-transition-scale-up uk-transition-opaque" alt="{{$row->trip_title}}">
                           </a>
                     </div>
                     <div class="uk-width-3-5@s uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                           <div class="uk-text-title uk-text-title">
                              <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-news-title">
                                 <h2 class="line-two">{{$row->trip_title}}</h2>
                              </a>
                           </div>
                           <div class="uk-star-rating">
                              @for ($i = 0 ; $i < $row->rating ; $i++)
                                 <i class="fa-solid fa-star"></i>
                              @endfor
                           </div>
                           <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                              <div class="uk-flex uk-flex-middle uk-trip">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Duration</p>
                                       <p class="uk-trip-description uk-margin-remove">{{$row->duration}} Days</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-location-dot"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Location</p>
                                       <p class="uk-trip-description uk-margin-remove">{{ optional($row->destinations()->first())->title }}</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                       <p class="uk-trip-description uk-margin-remove">{{($row->trip_grade)}}</p>
                                 </div>
                              </div>
                           </div>
                           <p class="uk-margin-remove two-line" style="line-height:22px;">{{$row->sub_title}}</p>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
         <div class="uk-text-center uk-margin-medium-top uk-hidden@m">
               {{-- <a href=" trip-detail.php" class="uk-btn uk-btn-secondary">View All</a> --}}
         </div>
      </div>
   </section>
   <!-- end trip section -->

   <!--start adventure section -->
   <!-- end adventure section -->
   <section class="uk-position-relative uk-section  uk-background-norepeat 
      uk-background-cover" uk-parallax="bgx: -100; easing: 1;" data-src="{{asset('theme-assets/img/bg/01.jpg')}}" uk-img style="padding-bottom: 105px;">
      <div class="uk-overlay-pink uk-position-cover"></div>
      <div class="uk-container uk-position-relative">
         <div class="uk-text-center uk-title-font">
               <span class="uk-white">Travel With Us</span>
               <h1 class="uk-white">Last minute adventure</h2>
         </div>
         <div class="uk-adv-padding">
               <div class="uk-position-relative uk-visible-toggle uk-margin-medium-top" tabindex="-1" uk-slider=" sets: true; autoplay: true;  autoplay-interval: 3000;">
                  <ul class="uk-slider-items uk-child-width-1-1">
                      <!--<li>-->
                        <!--      <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid>-->
                        <!--         <div>-->
                        <!--            <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-400 uk-res-height">-->
                        <!--                  <img src="{{ !empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain5.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="{{$row->trip_title}}">-->
                        <!--            </a>-->
                        <!--         </div>-->
                        <!--         <div class="uk-primary-bg uk-padding uk-mountain-bg">-->
                        <!--            <div>-->
                        <!--                  <span class="uk-badge">-->
                        <!--                     @if ($row->activities()->exists()) -->
                        <!--                        {{ $row->activities()->first()->title }}-->
                        <!--                     @endif-->
                        <!--                  </span>-->
                        <!--            </div>-->
                        <!--            <div class="uk-flex uk-flex-column uk-flex-between uk-title-font">-->
                        <!--               <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-news-title">-->
                        <!--                  <h2 class="uk-white">{{$row->trip_title}}</h2>-->
                        <!--               </a>-->
                        <!--               <div class="uk-star-rating">-->
                        <!--                  @for ($i = 0 ; $i < $row->rating ; $i++)-->
                        <!--                     <i class="fa-solid fa-star"></i>-->
                        <!--                  @endfor-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--            <hr>-->
                        <!--            <div class="uk-grid-expand uk-visible@s uk-margin-bottom" uk-grid>-->
                        <!--                  <div class="uk-flex uk-flex-middle">-->
                        <!--                     <i class="fa-regular fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>-->
                        <!--                     <div>-->
                        <!--                        <p class="uk-small-title uk-margin-remove uk-white">Duration</p>-->
                        <!--                        <p class="uk-small-description uk-margin-remove uk-white">{{ $row->duration }} Days</p>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--                  <div class="uk-flex uk-flex-middle">-->
                        <!--                     <i class="fa-solid fa-location-dot uk-margin-small-right uk-white" style="font-size:25px;"></i>-->
                        <!--                     <div>-->
                        <!--                        <p class="uk-small-title uk-margin-remove uk-white">Location</p>-->
                        <!--                        <p class="uk-small-description uk-margin-remove uk-white">{{ $row->destinations?->first()?->title }}</p>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--                  <div class="uk-flex uk-flex-middle">-->
                        <!--                     <i class="fa-solid fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>-->
                        <!--                     <div>-->
                        <!--                        <p class="uk-small-title uk-margin-remove uk-white">Difficulty</p>-->
                        <!--                        <p class="uk-small-description uk-margin-remove uk-white">{{ ($row->trip_grade)}}</p>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--            </div>-->
                        <!--            <p class="uk-white line-three uk-margin-remove-top">{{$row->sub_title}}</p>-->
                        <!--            <div>-->
                        <!--                  <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--</li>-->
                     @foreach ($lastMomentTrip as $row)
                        <li>
                            <a href="{{ url('page/' . tripurl($row->uri)) }}">
                                <div class="uk-list-shine uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-500">
                                <img src="{{ !empty($row->banner) ? asset('uploads/banners/'.$row->banner) : asset('theme-assets/img/mountain/mountain5.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="{{$row->trip_title}}">
                                <div class="uk-overlay uk-overlay-default uk-position-bottom uk-adv-overlay">
                                   <div>
                                        <span class="uk-badge">
                                             @if ($row->activities()->exists()) 
                                                {{ $row->activities()->first()->title }}
                                             @endif
                                        </span>
                                    </div>
                                    <div class="uk-flex uk-flex-middle uk-title-font uk-grid-collapse" uk-grid>
                                        <div class="uk-width-3-4@m">
                                            <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-news-title">
                                                <h2 class="uk-white">{{$row->trip_title}}</h2>
                                            </a>
                                        </div>
                                        <div class="uk-width-1-4@m uk-text-left uk-text-right@m">
                                            <div class="uk-star-rating">
                                                @for ($i = 0 ; $i < $row->rating ; $i++)
                                                    <i class="fa-solid fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <!--<p class="uk-white line-three uk-margin-remove-top">{{$row->sub_title}}</p>-->
                                    <div class="uk-flex uk-flex-middle uk-title-font uk-grid-collapse" uk-grid>
                                        <div class="uk-width-3-4@m">
                                             <div class="uk-grid-expand uk-margin-remove-top uk-grid-collapse" uk-grid style="gap:15px;">
                                                <div class="uk-flex uk-flex-middle">
                                             <i class="fa-regular fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                             <div>
                                                <p class="uk-small-title uk-margin-remove uk-white">Duration</p>
                                                <p class="uk-small-description uk-margin-remove uk-white">{{ $row->duration }} Days</p>
                                             </div>
                                          </div>
                                          <div class="uk-flex uk-flex-middle">
                                             <i class="fa-solid fa-location-dot uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                             <div>
                                                <p class="uk-small-title uk-margin-remove uk-white">Location</p>
                                                <p class="uk-small-description uk-margin-remove uk-white">{{ $row->destinations?->first()?->title }}</p>
                                             </div>
                                          </div>
                                          <div class="uk-flex uk-flex-middle">
                                             <i class="fa-solid fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                             <div>
                                                <p class="uk-small-title uk-margin-remove uk-white">Difficulty</p>
                                                <p class="uk-small-description uk-margin-remove uk-white">{{ ($row->trip_grade)}}</p>
                                             </div>
                                          </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-4@m uk-text-left uk-text-right@m">
                                             <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-top"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </li>
                     @endforeach
                     
                  </ul>
                  
                     <a class=" uk-position-center-left uk-position-small prev-btn uk-white" href uk-slidenav-previous uk-slider-item="previous"></a>
                     <a class=" uk-position-center-right uk-position-small next-btn uk-white" href uk-slidenav-next uk-slider-item="next"></a>
                 
               </div>
         </div>
      </div>
      </div>
   </section>
   <!-- start destination section -->
   <section class="uk-section uk-section-overlap-top-light">
      <div class="uk-container">
         <div class="uk-grid">
               <div class="uk-width-3-4@s">
                  <div class="uk-title-font">
                     <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>Destination</span>
                     <h1 class="uk-primary">Explore by destination</h1>
                  </div>
               </div>
               <div class="uk-width-1-4@s uk-flex uk-flex-right  uk-flex-middle uk-visible@s">
                  <a href="{{ route('page.trekkinglist') }}" class="uk-btn uk-btn-secondary">View All</a>
               </div>
         </div>
      
      <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-top" tabindex="-1" uk-slider="sets: true">
         <div class="uk-slider-items uk-child-width-1-1  uk-child-width-1-2@m uk-child-width-1-3@l uk-grid">
            @foreach ($trekking as $trek)
               <div class="uk-media-500 uk-activities" style="overflow:hidden;">
                  <a href="{{ route('trekking-list',$trek->uri) }}" class="uk-list-shine uk-inline uk-transition-toggle uk-link-toggle uk-height-1-1 uk-width-1-1" style="overflow: hidden;">
                     <img src="{{ !empty($trek->thumbnail) ? asset('uploads/icon/'.$trek->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg')}}" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                     <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                     <div class="uk-overlay-primary uk-inner-overlay uk-position-cover"></div>
                     <div class="uk-overlay uk-position-center uk-light uk-text-center uk-title-font ml-20">
                        <div>
                           <h1 class="uk-white uk-text-uppercase">{{$trek->title}}</h1>
                        </div>
                        <!--<div>-->
                        <!--   <p class="uk-white">{{$trek->sub_title}}</p><br> <br>-->
                        <!--</div>-->
                        <div>
                           <a href="{{ route('trekking-list',$trek->uri) }}" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                        </div>
                     </div>
                     
                  </a>
               </div>
            @endforeach
         </div>

         <a class="uk-position-center-left uk-position-small prev-btn uk-white" href uk-slidenav-previous uk-slider-item="previous"></a>
         <a class="uk-position-center-right uk-position-small next-btn uk-white" href uk-slidenav-next uk-slider-item="next"></a>

      </div>
      </div>
      <div class="uk-margin-large-top uk-margin-left uk-hidden@s">
          <a href="{{ route('page.trekkinglist') }}" class="uk-btn uk-btn-secondary">View All</a>
      </div>
   </section>
   <!-- end destination section -->

   <!-- start blog section  -->
   <section class="uk-section uk-padding-remove-top">
      <div class="uk-container">
         <div class="uk-grid">
               <div class="uk-width-3-4@s">
                  <div class="uk-title-font">
                     <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>BLOGS</span>
                     <h1 class="uk-primary">LATEST BLOG & NEWS</h1>
                  </div>
               </div>
               <div class="uk-width-1-4@s uk-flex uk-flex-right  uk-flex-middle uk-visible@s">
                  <a href="{{route('page.posttype_detail',$blog->uri)}}" class="uk-btn uk-btn-secondary">View All</a>
               </div>
         </div>
        <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-top" tabindex="-1" uk-slider="sets: true">
             <div class="uk-slider-items uk-child-width-1-1  uk-child-width-1-2@m uk-child-width-1-3@l uk-grid">
                @foreach ($blogs as $row)
                   <div>
                      <a href="{{ route('page.pagedetail', $row->uri) }}" class="uk-list-shine uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-280">
                         <img src="{{ !empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain5.jpeg')}} " class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                      </a>
                      <div class="uk-flex uk-flex-between uk-flex-middle">
                         <div class="uk-text-title uk-margin-top">
                               <span class="uk-primary"><i class="fa-solid fa-calendar uk-margin-small-right"></i> {{ date('l F j, Y', strtotime($row->post_date)) }}</span>
                               <a href="{{ route('page.pagedetail', $row->uri) }}" class="uk-news-title">
                                  <h2 class="uk-secondary">{{$row->post_title}}</h2>
                               </a>
                         </div>
                         <div>
                            <a href="{{ route('page.pagedetail', $row->uri) }}">
                               <i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i>
                            </a>
                         </div>
                      </div>
                   </div>
                @endforeach
             </div>
             <a class="uk-position-center-left uk-position-small prev-btn uk-white" href uk-slidenav-previous uk-slider-item="previous"></a>
         <a class="uk-position-center-right uk-position-small next-btn uk-white" href uk-slidenav-next uk-slider-item="next"></a>

         </div>
         <div class="uk-margin-large-top  uk-hidden@s">
            <a href="{{route('page.posttype_detail',$blog->uri)}}" class="uk-btn uk-btn-secondary">View All</a>
         </div>
      </div>
   </section>
   <!-- end blog section -->

   <!-- start testimonial section-->
   <section class="uk-primary-bg">
      <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse" uk-grid>
         <div>
               <img src="{{asset('theme-assets/img/review.jpeg')}}" alt="" style="height:100%; object-fit:cover;">
         </div>
         <div class="uk-primary-bg uk-padding uk-padding-left uk-about-text uk-index-responsive-padding" style="line-break: anywhere;">
               <div class="uk-container uk-flex uk-flex-middle uk-margin-top">
                  <div class="uk-width-1-1">
                     <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                     <h1 class="uk-secondary  uk-margin-remove" style="font-size:2rem;">What people say</h1>
                     <div uk-slider="autoplay : true; autoplay-interval: 6000; pause-on-hover: true; finite: false;">
                           <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                              <div class="uk-slider-items">
                                 @foreach ($reviews as $value)
                                       <div class="uk-width-1-1">
                                          <div class="uk-star-rating">
                                             @for($i=0; $i < $value->rating; $i++)
                                                <i class="fa-solid fa-star"></i>
                                             @endfor
                                          </div>
                                           <span class=" uk-contents"> 
                                             <p  id="text" class="message-container uk-margin-top"> 
                                             {{ $value->message }}
                                             </p>
                                             <button id="" class="read-more-btn">Read More </button>
                                              </span>
                                             <div class="uk-flex uk-margin-top">
                                                <img src="{{$value->image ? asset('uploads/reviews/'.$value->image) : asset('theme-assets/img/user.png')}}" class="uk-testimonial-img" alt="">
                                                <div class="uk-title-font">
                                                   <h2 class="uk-secondary">{{ $value->full_name }}</h2>
                                                   <span class="uk-white">{{ $value->country }}</span>
                                                  @if(trip_count($value->user_id) >= 1)
                                                   <p class="uk-white uk-margin-top"> {{trip_count($value->user_id)}} trip with Lhakpa Treks</p>
                                                   @endif
                                                </div>
                                             </div>
                                       </div>
                                 @endforeach
                          
                              </div>

                              <ul class="uk-slider-nav uk-dotnav uk-flex uk-flex-center"></ul>
                           </div>
                     </div>
                     <div class="uk-margin-medium-top uk-text-center">
                        <a href="{{route('all-review')}}" class="uk-btn uk-btn-primary" >View All Review</a>
                    </div>
                  </div>
               </div>
         </div>

      </div>
   </section>
   <!-- end testimonial section -->
   <style>
       .message-container {
            display: -webkit-box;
            -webkit-line-clamp: 4;        /* number of lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .message-container.expanded {
            -webkit-line-clamp: unset;
        }
        
        .read-more-btn {
            background: none;
            border: none;
            color: #1e87f0;
            cursor: pointer;
            padding: 0;
            font-weight: 600;
        }

   </style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.message-container').forEach((text) => {
        const btn = text.nextElementSibling;

        // Show button only if text is actually truncated
        if (text.scrollHeight > text.clientHeight) {
            btn.hidden = false;
        }

        btn.addEventListener('click', () => {
            text.classList.toggle('expanded');
            btn.textContent = text.classList.contains('expanded')
                ? 'Read Less'
                : 'Read More';
        });
    });
});
//     const text = document.getElementById('text');
//     const btn = document.getElementById('toggleBtn');

//     btn.addEventListener('click', () => {
//       text.classList.toggle('expanded');
//       btn.textContent = text.classList.contains('expanded') ? 'Read Less' : 'Read More';
//     });
</script>
@stop