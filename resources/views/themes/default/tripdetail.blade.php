@extends('themes.default.common.master')
@section('title', $data->meta_title ? $data->meta_title : $data->trip_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->thumbnail)
@section('content')
@php
    $photo_videos = $photos->pluck('video')->filter();
@endphp
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ asset('uploads/banners/' . $data->banner) }}" alt="{{$data->trip_title}}" uk-img >
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-detail-150 pb-23 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse uk-margin-top" uk-grid uk-height-match="target: .uk-same-height">
            <div class="uk-width-3-4@m" id="container">
                <!-- original div -->
                <div id="originalDiv">
                    <div class="uk-sub-banner-font">
                        <h1 class="uk-margin-remove" style="font-size:2.5rem;">{{ $data->trip_title }}</h1>
                        <p class="uk-margin-bottom">
                           {{$data->discount}}
                        </p>
                    </div>
                </div>
                <!-- end of original div -->

                <!-- photo/ video gallery start -->

                <!-- photos section start -->
                <div id="newDiv1" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn1"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-grid" uk-lightbox="animation: slide">
                                @foreach ($photos as $photo)
                                    <div>
                                        <a class="uk-inline uk-media-270 uk-width-1-1" href="{{ asset('/uploads/original/' . $photo->thumbnail) }}">
                                            <img src="{{ asset('/uploads/original/' . $photo->thumbnail) }}" class="border" alt="{{ $photo->title }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>
                </div>
                <!-- photos section end -->
                <!-- videos section start-->
                <div id="newDiv2" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn2"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-container ">
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                <ul class="uk-slider-items uk-grid uk-child-width-1-2@m">
                                    @foreach ($photos as $row)
                                        <li>
                                            <div class="video-container">
                                                @if ($row->video)
                                                    <iframe src="https://www.youtube.com/embed/{{$row->video}}" title="YouTube video" frameborder="0" allowfullscreen></iframe>
                                                @endif
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- Navigation -->
                                @if ($photo_videos->count() > 2)
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- videos section end -->

                <!-- photo/ video gallery end -->
            </div>
            <!-- banner side bar start -->
            <div class="uk-width-1-4@m uk-same-height">
                <div class="uk-grey-bg  uk-padding-dicovery  uk-pattern-bg">
                    <h3 class="uk-white uk-text-uppercase uk-margin-remove  uk-visible@m">{{ $data->trip_title }}</h3>
                    <hr style="border-color: var(--secondary);" class="uk-visible@m">
                    <p class="uk-white uk-text-justify line-five uk-visible@m">{{$data->sub_title}}</p>
                    <div class="uk-margin-remove uk-flex uk-flex-between">
                        <button id="changeBtn1" class="uk-buttons uk-text-center">
                            <span class="uk-secondary"><i class="fa-solid fa-photo-film f-20 uk-margin-small-bottom"></i><br> Photos</span>
                        </button>
                        @if ($photo_videos->isNotEmpty())
                            <button id="changeBtn2" class="uk-buttons uk-text-center">
                                <span class="uk-secondary "><i class="fa-solid fa-video f-20 uk-margin-small-bottom"></i><br>Videos</span>
                            </button>
                        @endif
                        <a href="#review" uk-scroll class="uk-buttons uk-text-center">
                            <span class="uk-secondary "><i class="fa-solid fa-users f-20 uk-margin-small-bottom "></i><br>Reviews</span>
                        </a>
                    </div>
                </div>
                <div class="uk-child-width-1-2 uk-grid-collapse" uk-grid>
                        <a href="{{route('page.booking', $data->uri)}}" class="uk-secondary-bg uk-book-btn">BOOK NOW</a>
                        <a href="#modal-inquiry" class="uk-inquiry-btn uk-primary-bg uk-book-btn" uk-toggle>INQUIRY NOW</a>
                </div>
            </div>
            <!-- banner side bar start -->
        </div>
    </div>
</section>

<div class="uk-position-relative detail-nav">
    <div class=" uk-box-shadow-large uk-sticky" uk-sticky="offset: 80;  animation: uk-animation-slide-top uk-animation-slow uk-transform-origin-bottom-center " style="z-index:960;">
        <div class="">
            <div class="border uk-light">
                <div class="uk-small-details-nav">
                    <div class="uk-container uk-position-relative uk-flex uk-flex-middle">
                        <ul class="uk-width-2-3 uk-navbar-single uk-flex  uk-margin-remove-bottom sidenav" style="gap: 60px;">
                            <li>
                                <a href="#features" >Overview </a>
                            </li>
                            @if($itinerary->count() > 0)
                                <li>
                                    <a href="#itinerary" >Itinerary & Maps </a>
                                </li>
                            @endif
                            @if ($cost_includes->isNotEmpty() || $banner->isNotEmpty() || $cost_excludes->isNotEmpty() || $guidelines->count() > 0)
                                <li>
                                    <a href="#information" >Information</a>
                                </li>
                            @endif
                            @if ($faqs->count() > 0)
                                <li>
                                    <a href="#faq" >FAQ </a>
                                </li>
                            @endif
                            <li>
                                <a href="#review" >Review </a>
                            </li>
                        </ul>
                        <div class="uk-width-1-3 uk-flex uk-flex-right uk-visible@m" style="gap: 8px;">
                            @if ($schedules->count() > 0)
                                <a href="#offcanvas-usage"
                                class="uk-btn uk-btn-secondary"
                                uk-toggle
                                style="padding: 6px 14px; font-size: 13px;">
                                    Dates & Prices
                                </a>
                                <a href="#modal-customize"
                                class="uk-btn uk-btn-secondary"
                                uk-toggle
                                style="padding: 6px 14px; font-size: 13px;">
                                    Customize Trip
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="uk-section"  style="overflow:hidden;">
    <div class="uk-container">
        <div class="uk-grid uk-flex">
            <div class="uk-width-3-4@l ">
                <div id="features">
                    <!-- overview start -->
                    <div>
                        <div class="uk-grid uk-flex ">
                            <div class="uk-width-1-2@s uk-margin-top">
                                <div class="uk-text-title">
                                    <h1 class="uk-primary uk-margin-remove">{{$data->route}}</h1>
                                </div>
                            </div>

                            <div class="uk-width-1-2@s uk-text-right@m uk-text-left uk-margin-top uk-responsive-flex">

                               <div>
                                    @if($data->trip_pdf)
                                        <a href="{{ route('trip.download.pdf', $data->id) }}" class="uk-btn uk-btn-secondary download-pdf-btn  " download>
                                             <i class="fa-solid fa-download " aria-hidden="true"></i> <span
                                            class=" uk-margin-small-left">Download</span>
                                        </a>
                                        <!-- <a href="{{ route('trip.download.pdf', $data->id) }}" class="uk-btn uk-btn-secondary download-pdf-btn uk-responsive-btn uk-hidden@s" download uk-tooltip="title: Download Itinerary; pos: bottom-center">-->
                                        <!--    <i class="fa-solid fa-download "></i>-->
                                        <!--</a>-->
                                    @endif
                               </div>
                                @if ($data->trip_code)
                                    <div class="uk-margin-top">
                                        <p><b class="uk-text-uppercase uk-secondary">Ref No: </b>{{$data->trip_code}}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="uk-column-1-1 uk-column-1-2@s">
                        <span class="uk-text-justify">
                            {!!$data->trip_content!!}
                        </span>
                        </div>
                    </div>
                    <!-- overview end -->

                    <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@m uk-grid-match my-10" uk-grid>

                        <!-- Trip Highlight Card -->
                        <div>
                            <div
                                class="uk-card bg-primary-light uk-card-body rounded-xl uk-height-1-1 uk-box-shadow-medium">

                                <div class="uk-flex uk-flex-middle uk-margin-bottom">
                                    <div
                                        class="uk-flex-none uk-width-small uk-flex uk-flex-center uk-flex-middle bg-primary text-white uk-border-circle w-12 h-12">
                                        <i class="fa-solid fa-person-hiking"></i>
                                    </div>
                                    <h3 class="uk-margin-small-left uk-card-title uk-text-uppercase text-primary"
                                        style="margin:0;">
                                        Trip Highlight
                                    </h3>
                                </div>

                                <ul class="uk-list uk-list-divider uk-padding-remove-left mt-5">
                                    {!! $data->trip_highlight !!}
                                </ul>
                            </div>
                        </div>

                        <!-- Trip Grade Card -->
                        <div>
                            <div
                                class="uk-card bg-secondary-light uk-card-body rounded-xl uk-height-1-1 uk-box-shadow-medium">

                                <div class="uk-flex uk-flex-middle uk-margin-bottom">
                                    <div
                                        class="uk-flex-none uk-width-small uk-flex uk-flex-center uk-flex-middle bg-secondary text-white uk-border-circle w-12 h-12">
                                        <i class="fa fa-tachometer"></i>
                                    </div>
                                    <h3 class="uk-margin-small-left uk-card-title uk-text-uppercase text-secondary"
                                        style="margin:0;">
                                        Trip Grade
                                    </h3>
                                </div>
                                {!! $data->status_text !!}
                            </div>
                        </div>

                    </div>
                    <!-- end hightlight -->

                    <!-- notice start-->
                    @if (!empty($data->trip_excerpt))
                        <div class="uk-font">
                            <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-list uk-margin-small-right" aria-hidden="true"></i>Important notice</span>
                            <div class=" uk-light-bg uk-padding border uk-margin-top uk-responsive-padding">
                                <p class="uk-text-justify">
                                    {!! $data->trip_excerpt !!}
                                </p>
                            </div>
                        </div>
                    @endif
                    <!-- end notice -->

                </div>

                <div id="itinerary">
                    <div class="uk-font uk-margin-top uk-margin-bottom" >
                        @if($itinerary->count() > 0)
                            <div class="uk-flex uk-flex-middle uk-flex-between">
                                <div class="uk-font uk-text-center">
                                    <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-regular fa-calendar uk-margin-small-right" aria-hidden="true"></i>Itinerary</span>
                                </div>
                                <div>
                                    <p class="uk-margin-remove uk-text-right">Share this: </p>
                                    <div class="uk-footer-icon   uk-margin-bottom">
                                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                    </div>
                                </div>
                            </div>
                            <div class=" uk-light-bg uk-padding border uk-margin-top uk-margin-bottom uk-responsive-padding">
                                <ul class="uk-detail-list" uk-accordion>
                                    @foreach ($itinerary as $item)
                                        <li class="{{ $loop->first ? 'uk-open' : '' }}">
                                            <!--<a class="uk-accordion-title" href><span class="uk-margin-right uk-day-title">Day {{ $item->days }}</span> {{ $item->title }}</a>-->
                                            <div class="uk-accordion-title  uk-itinerary-title">
                                                <div class="uk-grid-small uk-flex-middle uk-grid-collapse" uk-grid>
                                                  <div class="uk-width-auto uk-text-center uk-first-column">
                                                     <div class="uk-day-title uk-margin-small-right"> Day {{ $item->days }} </div>
                                                  </div>
                                                  <div class="uk-width-expand">
                                                     <div class="uk-width-1-1">
                                                        <p class="uk-margin-remove theme-font-medium"> {{ $item->title }} </p>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="uk-accordion-content uk-margin-remove">
                                                <div class="itinerary-content">
                                                    {!! $item->content !!}
                                                </div>
                                                @if($item->duration || $item->transport)
                                                    <div class="trip-extra-info">
                                                        @if($item->duration)
                                                            <div class="trip-info-item">
                                                                <div class="trip-info-icon">
                                                                    <i class="fas fa-hotel"></i>
                                                                </div>
                                                                <div class="trip-info-text">
                                                                    <div class="trip-info-title">
                                                                        Accommodation
                                                                    </div>
                                                                    <div class="trip-info-value">
                                                                        {{ $item->duration }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if($item->transport)
                                                            <div class="trip-info-item">
                                                                <div class="trip-info-icon">
                                                                    <i class="fas fa-bus"></i>
                                                                </div>
                                                                <div class="trip-info-text">
                                                                    <div class="trip-info-title">
                                                                        Transport
                                                                    </div>
                                                                    <div class="trip-info-value">
                                                                        {{ $item->transport }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty($data->trip_map))
                            <div class="uk-maps uk-margin-large-top" uk-lightbox>
                                <div class="uk-font uk-text-center uk-margin-top">
                                    <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-regular fa-calendar uk-margin-small-right" aria-hidden="true"></i>Maps</span>
                                </div>
                                <a href="{{ asset('uploads/original/'.$data->trip_map)}}" class="uk-media-400">
                                    <img src="{{ asset('uploads/original/'.$data->trip_map)}}" alt="{{$data->trip_title}}"/>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- sidebar-->
            <div class="uk-width-1-4@l ">
                <!-- facilities start -->
                <div>
                    <div class="uk-light-bg border uk-padding-small uk-margin-top uk-padding-remove-top">
                        <div class="uk-child-width-1-4@m uk-child-width-1-2@l uk-child-width-1-3 uk-grid-match uk-grid uk-flex-left uk-grid-collapse" uk-grid="">
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/score.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Trip Grade</strong></p>
                                            <div class="tooltip-container">
                                                {{ ($data->trip_grade) }}
                                                @if ($data->status_text)
                                                    <div class="tooltip-content uk-contents">
                                                        {{-- <strong>Toolkit Options:</strong> --}}
                                                        {!! $data->status_text !!}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/clock.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Duration</strong></p>
                                            <p class="uk-margin-remove">{{ $data->duration }} Days</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/altitude.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Max Elevation</strong></p>
                                            <p class="uk-margin-remove">{{ $data->max_altitude }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/group.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Group Size</strong></p>
                                            <p class="uk-margin-remove">{{ $data->group_size }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/bus.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Transporation</strong></p>
                                            <p class="uk-margin-remove">{{$data->peak_name}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/point.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Start / End</strong></p>
                                            <p class="uk-margin-remove">{{ $data->best_season }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/hotel.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Accommodation</strong></p>
                                            <p class="uk-margin-remove">{{ $data->accommodation }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="{{asset('theme-assets/img/icon/guided.png')}}" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Guided</strong></p>
                                            <p class="uk-margin-remove">{{ $data->guided == 1 ? 'Yes' : 'No' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-flex">
                            <a href="#modal-customize" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top " uk-toggle>Customize Your Trip</a>
                        </div>
                        @if ($schedules->count() > 0)
                        <div class="uk-flex">
                                <a href="#offcanvas-usage" class=" uk-extra uk-primary-bg uk-book-btn border uk-margin-small-top" uk-toggle>View Dates and prices</a>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- facilities end -->
                @if($experts->count() > 0)
                    <div>
                        <div class="uk-light-bg border uk-padding-small uk-margin-top">
                            <h2 class="uk-primary uk-text-uppercase uk-margin-remove" style="font-size: 24px;">Consult with Experts</h2>
                            <div uk-slider="autoplay: true">
                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1" >
                                    <div class="uk-slider-items uk-child-width-1-1">
                                        @foreach ($experts->chunk(2) as $group)
                                            <div>
                                                @foreach ($group as $expert)
                                                    <div class="uk-flex uk-flex-middle uk-margin-small-top">
                                                        <img src="{{ !empty($expert->thumbnail) ? asset('uploads/team/' .$expert->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')}}" class="uk-sherpa-img" alt="">
                                                        <div class="uk-sherpa-font">
                                                            <h2>{{ $expert->name }}</h2>
                                                            <span>{{ $expert->position }}</span><br>
                                                            <span><b> Lang:</b> {{ $expert->language }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                            </div>
                            <div class="uk-flex">
                                <a href="{{route('page.posttype_detail',$teamPage->uri)}}" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">View All Team Members</a>
                            </div>

                        </div>
                    </div>
                @endif
                    <div class="uk-flex">
                        <a href="{{route('page.posttype_detail',$suggestionPage->uri)}}" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">Message from director</a>
                    </div>
                    <div class="uk-light-bg uk-padding-small uk-margin-top">
                        <div class=" text-secondary-light uk-text-bold">Need Help with this booking:</div>
                        <div class="uk-margin-small-top">
                            <div class="uk-footer-icon uk-flex uk-flex-between">
                                <div>
                                    <a  href="mailto:lhakpatrekking@gmail.com" class="uk-icon-button" style="background-color: white;"><i class="fa-solid fa-envelope" aria-hidden="true" style="color: #dd4a45;"></i></a>
                                    <a href="https://www.viber.com/" class="uk-icon-button" style="background-color: #7a509c;"><i class="fa-brands fa-viber" aria-hidden="true" style="color: white;"></i></a>
                                    <a href="https://twitter.com/" class="uk-icon-button" uk-icon="icon: x" style="background: black; color:white;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex">
                        <a href="{{route('page.posttype_detail',$aboutPage->uri)}}" class="uk-extra uk-primary-bg uk-book-btn border uk-margin-small-top ">Lhakpa Trekking?</a>
                    </div>
                    <div class="uk-flex">
                        <a href="{{route('page.posttype_detail',$womenPage->uri)}}" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">Women Empowerment</a>
                    </div>
                    <div class="uk-flex">
                        <a href="{{route('page.posttype_detail',$foundationPage->uri)}}" class="uk-extra uk-grey-bg uk-book-btn border uk-margin-small-top ">Mingmar Foundation</a>
                    </div>
                    <div uk-sticky="offset: 150; end: #my-id; media: @l" style="    z-index: 1;">
                        <div class="uk-light-bg border uk-padding-small uk-margin-top">
                            <h2 class="uk-primary uk-text-uppercase uk-margin-remove" style="font-size: 24px;">International Team</h2>
                            <div uk-slider=" autoplay: true">
                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1" >
                                    <div class="uk-slider-items uk-child-width-1-1">
                                        @foreach ($international->chunk(2) as $int_group)
                                            <div>
                                                @foreach ($int_group as $int_expert)
                                                    <div class="uk-flex uk-flex-middle uk-margin-small-top uk-grid">
                                                        <div class="uk-width-1-3 uk-width-1-2@m">
                                                            <img src="{{ asset('uploads/associated/'.$int_expert->thumbnail) }}" class="uk-sherpa-img" alt="{{ $int_expert->title }}">
                                                        </div>
                                                       <div class="uk-width-2-3 uk-width-1-2@m uk-padding-remove" style="padding-left:10px !important;">
                                                           <div class="uk-sherpa-font">
                                                          <h2>{{ $int_expert->title }}</h2>
                                                          <span>{{ $int_expert->brief }}</span><br>
                                                          <!--<span><b>Country:</b> France</span><br>-->
                                                          @if( $int_expert->language )
                                                          <span><b> Lang:</b> {{ $int_expert->language }}</span>
                                                          @endif
                                                       </div>
                                                       </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                  </div>
                               </div>
                               <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                            </div>
                            <div class="uk-flex">
                                <a href="{{route('page.posttype_detail',$internationalPage->uri)}}" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">View All Members</a>
                            </div>
                        </div>
                        <div class="uk-flex">
                            <a href="{{route('page.posttype_detail',$termPage->uri)}}" class="uk-extra uk-primary-bg uk-book-btn border uk-margin-small-top ">Terms & Condition</a>
                        </div>
                        <div class="uk-flex">
                            <a href="{{route('page.posttype_detail',$whyusPage->uri)}}" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">Why Lhakpa Trekking?</a>
                        </div>
                    </div>
            </div>
        </div>
        <div id="my-id"></div>
    </div>
</section>

<!-- cost includes / excludes section start-->
@if ($cost_includes->isNotEmpty() || $banner->isNotEmpty() || $cost_excludes->isNotEmpty() || $guidelines->count() > 0)
    <section class="uk-position-relative custom-info-section uk-background-norepeat uk-background-cover" uk-parallax="bgx: -100; easing: 1;" data-src="{{asset('theme-assets/img/bg/01.jpg')}}" id="information" uk-img>
        <div class="uk-overlay-pink uk-position-cover"></div>
        <div class="uk-container uk-position-relative">
            {{-- Heading --}}
            <h2 class="uk-text-center uk-light uk-margin-small-bottom uk-margin-small-top information-title">
                INFORMATION
            </h2>
            <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center" uk-switcher="animation: uk-animation-fade">
                @if ($cost_includes->count() > 0)
                    <li><a href="#" class="green-border">TRIP</a></li>
                @endif
                @if ($banner->count() > 0)
                    <li><a href="#" class="green-border">Document</a></li>
                @endif
                @if ($cost_excludes->count() > 0)
                    <li><a href="#" class="green-border">Equipment</a></li>
                @endif
                @if ($guidelines->count() > 0)
                    <li><a href="#" class="green-border">Guidelines</a></li>
                @endif
            </ul>
            <div class="uk-switcher uk-margin">
                @if ($cost_includes->count() > 0)
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            @foreach ($cost_includes as $item)
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right">{{$loop->iteration}}</span>{{ $item->title }}</a>
                                    <div class="uk-accordion-content uk-padding-remove uk-margin-remove">
                                        @if ($loop->first)
                                            <ul class="uk-includes uk-margin-top uk-margin-bottom">
                                        @elseif($loop->iteration == 2)
                                            <ul class="uk-excludes uk-margin-top uk-margin-bottom">
                                        @else
                                            <ul class="uk-highlight uk-margin-top uk-margin-bottom">
                                        @endif
                                            {!! $item->content !!}
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($banner->count() > 0)
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            @foreach ($banner as $item)
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right">{{$loop->iteration}}</span>{{ $item->title }}</a>
                                    <div class="uk-accordion-content uk-padding uk-margin-remove">
                                        <p>{!! $item->content !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($cost_excludes->count() > 0)
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            @foreach ($cost_excludes as $item)
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right">{{$loop->iteration}}</span>{{ $item->title }}</a>
                                    <div class="uk-accordion-content uk-padding uk-margin-remove">
                                        <p>{!! $item->content !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($guidelines->count() > 0)
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            @foreach ($guidelines as $item)
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right">{{$loop->iteration}}</span>{{ $item->title }}</a>
                                    <div class="uk-accordion-content uk-padding uk-margin-remove">
                                        <p>{!! $item->content !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        </div>
    </section>
    <style>
        .custom-info-section{
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .information-title{
            margin-top: 0;
            margin-bottom: 20px;
        }
    </style>
@endif
<!-- cost includes / excludes section end -->

<!-- faq section -->
<section class="uk-section uk-section-overlap-top-light" id="faq">
    <div class="uk-container">
        @if ($faqs->count()>0)
            <div class="uk-font uk-text-center">
                <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-person-circle-question uk-margin-small-right" aria-hidden="true"></i>FAQs</span>
            </div>
            <ul class="uk-detail-list uk-light-bg uk-padding uk-responsive-padding border" uk-accordion>
                @foreach($faqs as $item)
                    <li class="{{ $loop->first ? 'uk-open' : '' }}">
                        <a class="uk-accordion-title" style="font-size:16px ; font-weight:600;" href><span class="uk-margin-right">{{ $loop->iteration }}</span>{{ $item->title }}</a>
                        <div class="uk-accordion-content uk-margin-remove">
                            <p style="font-size:14px;">{{ $item->content }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</section>
<!-- faq section end -->

<!-- review section start-->
{{-- <section class=" uk-primary-bg" id="review">
    <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse" uk-grid>
        <div>
            <img src="{{$data->thumbnail ? asset('uploads/original/'.$data->thumbnail) : asset('theme-assets/img/review.jpeg')}}" alt="{{$data->trip_title}}" style="height:100%; object-fit:cover;">
        </div>
        <div class="uk-primary-bg uk-padding uk-padding-left uk-about-text" style="line-break: anywhere;">
            <div class="uk-container uk-flex uk-flex-middle uk-margin-top">
                <div class="uk-width-1-1">
                    <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                    <h1 class="uk-secondary  uk-margin-remove" style="font-size:2rem;">What people say</h1>
                    <div uk-slider="autoplay : true; autoplay-interval: 6000; pause-on-hover: true; finite: false;">
                        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                            <div class="uk-slider-items">
                                <!-- client detail -->
                                @foreach ($trip_review as $value)
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
                                             <button id="toggleBtn" class="read-more-btn">Read More </button>
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
                                        </p>
                                    </div>
                                @endforeach
                                <!-- client detail -->
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex uk-flex-center"></ul>
                        </div>
                    </div>
                    <div class="uk-margin-top uk-text-center uk-child-width-1-2@m uk-grid">
                            <div class="" style="padding: 20px 0;">
                                <a href="#offcanvas-review" class="uk-btn uk-btn-secondary" uk-toggle>Add Review</a>
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <a href="{{route('all-review')}}" class="uk-btn uk-btn-primary">View All Review</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- review section end -->

<section class="uk-section-small" id="review">
    <div class="uk-container uk-container-small">

        <div class="uk-text-center uk-margin-large-bottom uk-title-font">
            <div class="uk-star-rating uk-margin-small-bottom" style="font-size:22px; letter-spacing:4px;">
                <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
            </div>
            <h1 class="uk-text-uppercase uk-margin-remove uk-title-font text-primary">100% of our customers satisfied
            </h1>
            <p class="uk-text-muted uk-margin-small uk-text-center">out of 26 travelers who responded to the
                satisfaction survey</p>
        </div>


        <div class="uk-text-center uk-margin-medium-bottom"
            style="background:#f5f2ed; border:0.5px solid #e0dbd2; padding:1rem; border-radius:4px;">
            <span
                style="font-size:0.78rem; letter-spacing:0.15em; text-transform:uppercase; font-weight:600; color:#888;">Traveler
                Reviews</span>
            <div style="width:60px; height:2.5px; background:#c8962e; margin:8px auto 0; border-radius:2px;"></div>
        </div>


        <div class="uk-grid-small uk-flex uk-flex-top review-row uk-margin-large-bottom" uk-grid>


            <div class="uk-width-1-1 uk-width-auto@m uk-text-center" style="min-width:120px;">
                <img src="https://lhakpatrekking.com/uploads/team/472597527-1933060393768947-1541393137296149325-n-RR4LiTT0jQQtzFh8ncAYxw80Kkjv9VZjzDSbik2X.jpg"
                    class="uk-border-circle"
                    style="width:70px; height:70px; object-fit:cover; border:2px solid #e0dbd2;" alt="Name">
                <p class="uk-margin-small-top uk-margin-remove-bottom"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;">
                    Françoise L.
                </p>
                <p class="uk-margin-remove uk-text-muted" style="font-size:0.72rem;">
                    Traveler<br>

                    2 trip with Lhakpa Treks

                </p>
            </div>


            <div class="uk-width-1-1 uk-width-expand@m">
                <p class="uk-margin-remove-bottom uk-text-muted"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;">
                    11/22/2025, Very satisfied with her trip the High Road of the Annapurnas


                </p>
                <div class="uk-star-rating uk-margin-small" style="font-size:13px;">

                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                </div>
                <div class="moretext clamp clamp-3 uk-text-small" style="font-size:0.95rem; ">
                    <p>I have traveled with Lhakpa Treks twice now. Serious agency, competent guide, and a
                        well-organized trip from start to finish. The landscapes were absolutely breathtaking and our
                        guide made sure we were always safe and comfortable. </p>
                    <p>I would not hesitate to book again for a third adventure.</p>

                </div>
                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
            </div>

        </div>

        <div class="uk-grid-small uk-flex uk-flex-top review-row uk-margin-large-bottom" uk-grid>


            <div class="uk-width-1-1 uk-width-auto@m uk-text-center" style="min-width:120px;">
                <img src="https://lhakpatrekking.com/uploads/team/472597527-1933060393768947-1541393137296149325-n-RR4LiTT0jQQtzFh8ncAYxw80Kkjv9VZjzDSbik2X.jpg"
                    class="uk-border-circle"
                    style="width:70px; height:70px; object-fit:cover; border:2px solid #e0dbd2;" alt="Name">
                <p class="uk-margin-small-top uk-margin-remove-bottom"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;">
                    Françoise L.
                </p>
                <p class="uk-margin-remove uk-text-muted" style="font-size:0.72rem;">
                    Traveler<br>

                    2 trip with Lhakpa Treks

                </p>
            </div>


            <div class="uk-width-1-1 uk-width-expand@m">
                <p class="uk-margin-remove-bottom uk-text-muted"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;">
                    11/22/2025, Very satisfied with her trip the High Road of the Annapurnas


                </p>
                <div class="uk-star-rating uk-margin-small" style="font-size:13px;">

                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                </div>
                <div class="moretext clamp clamp-3 uk-text-small" style="font-size:0.95rem; ">
                    <p>I have traveled with Lhakpa Treks twice now. Serious agency, competent guide, and a
                        well-organized trip from start to finish. The landscapes were absolutely breathtaking and our
                        guide made sure we were always safe and comfortable. </p>
                    <p>I would not hesitate to book again for a third adventure.</p>

                </div>
                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
            </div>

        </div>
        <div class="uk-grid-small uk-flex uk-flex-top review-row uk-margin-large-bottom" uk-grid>


            <div class="uk-width-1-1 uk-width-auto@m uk-text-center" style="min-width:120px;">
                <img src="https://lhakpatrekking.com/uploads/team/472597527-1933060393768947-1541393137296149325-n-RR4LiTT0jQQtzFh8ncAYxw80Kkjv9VZjzDSbik2X.jpg"
                    class="uk-border-circle"
                    style="width:70px; height:70px; object-fit:cover; border:2px solid #e0dbd2;" alt="Name">
                <p class="uk-margin-small-top uk-margin-remove-bottom"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;">
                    Françoise L.
                </p>
                <p class="uk-margin-remove uk-text-muted" style="font-size:0.72rem;">
                    Traveler<br>

                    2 trip with Lhakpa Treks

                </p>
            </div>


            <div class="uk-width-1-1 uk-width-expand@m">
                <p class="uk-margin-remove-bottom uk-text-muted"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;">
                    11/22/2025, Very satisfied with her trip the High Road of the Annapurnas


                </p>
                <div class="uk-star-rating uk-margin-small" style="font-size:13px;">

                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                </div>
                <div class="moretext clamp clamp-3 uk-text-small" style="font-size:0.95rem; ">
                    <p>I have traveled with Lhakpa Treks twice now. Serious agency, competent guide, and a
                        well-organized trip from start to finish. The landscapes were absolutely breathtaking and our
                        guide made sure we were always safe and comfortable. </p>
                    <p>I would not hesitate to book again for a third adventure.</p>

                </div>
                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
            </div>

        </div>

        <div class="uk-grid-small uk-flex uk-flex-top review-row  " uk-grid>


            <div class="uk-width-1-1 uk-width-auto@m uk-text-center" style="min-width:120px;">
                <img src="https://lhakpatrekking.com/uploads/team/472597527-1933060393768947-1541393137296149325-n-RR4LiTT0jQQtzFh8ncAYxw80Kkjv9VZjzDSbik2X.jpg"
                    class="uk-border-circle"
                    style="width:70px; height:70px; object-fit:cover; border:2px solid #e0dbd2;" alt="Name">
                <p class="uk-margin-small-top uk-margin-remove-bottom"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;">
                    Françoise L.
                </p>
                <p class="uk-margin-remove uk-text-muted" style="font-size:0.72rem;">
                    Traveler<br>

                    2 trip with Lhakpa Treks

                </p>
            </div>


            <div class="uk-width-1-1 uk-width-expand@m">
                <p class="uk-margin-remove-bottom uk-text-muted"
                    style="font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;">
                    11/22/2025, Very satisfied with her trip the High Road of the Annapurnas


                </p>
                <div class="uk-star-rating uk-margin-small" style="font-size:13px;">

                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                </div>
                <div class="moretext clamp clamp-3 uk-text-small" style="font-size:0.95rem; ">
                    <p>I have traveled with Lhakpa Treks twice now. Serious agency, competent guide, and a
                        well-organized trip from start to finish. The landscapes were absolutely breathtaking and our
                        guide made sure we were always safe and comfortable. </p>
                    <p>I would not hesitate to book again for a third adventure.</p>

                </div>
                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
            </div>

        </div>

    </div>
</section>
<!-- new element added -->
<!-- similar trip section  start-->
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-text-center">
            <div class="uk-title-font">
                <span class="uk-secondary "><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>PACKAGES</span>
                <h1 class="uk-primary uk-margin-bottom">Related Trips</h1>
            </div>
        </div>
        <div class="uk-child-width-1-2@m" uk-grid uk-height-match>
            @if ($related_trips)
                @foreach ($related_trips as $row)
                    <div class="activity">
                        <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                            <div class="uk-width-2-5@s">
                                <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle">
                                    <img src="{{ !empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg')}}" class="uk-height-1-1 uk-width-1-1 uk-transition-scale-up uk-transition-opaque uk-trip-image" alt="">
                                </a>
                            </div>
                            <div class="uk-width-3-5@s uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                                <div class="uk-text-title uk-text-title">
                                    <a href="{{ url('page/' . tripurl($row->uri)) }}" class="uk-news-title">
                                        <h2 class="line-two">{{$row->trip_title}}</h2>
                                    </a>
                                </div>
                                <div class="uk-star-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
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
                                            <p class="uk-trip-description uk-margin-remove">{{ getDestinationNameByTripId($row->id)}}</p>
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-middle uk-trip ">
                                        <i class="fa-solid fa-calendar"></i>
                                        <div>
                                            <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                            <p class="uk-trip-description uk-margin-remove">{{ ($row->trip_grade)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="uk-margin-remove two-line" style="line-height: 20px; font-size: 15px;">{{$row->sub_title}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- similar trip section  end-->
<!-- new element added -->





<!-- review form modal start -->

<div id="offcanvas-review" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right uk-padding-bottom">
        <div class="uk-padding uk-padding-remove-bottom">
            <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove uk-primary-bg border">write a review</h3>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <form class="uk-contact-form" action="{{ route('review.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="trip_id" value="{{ $data->id }}">
                <div class=" uk-child-width-1-2@m uk-grid">
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="full_name">Full Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="fullname" name="full_name" value="{{ Auth::check() ? Auth::user()->name : '' }}" required type="text">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="email">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="email" name="email"  value="{{ Auth::check() ? Auth::user()->email : '' }}" required type="email">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="image">Image</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="image" name="image"  type="file" style="padding: 6px;">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="">Rating</label>
                        <div class="star-rating">
                            <input type="radio" id="5-stars" name="rating" value="5">
                            <label for="5-stars" class="star">&#9733;</label>
                            <input type="radio" id="4-stars" name="rating" value="4">
                            <label for="4-stars" class="star">&#9733;</label>
                            <input type="radio" id="3-stars" name="rating" value="3">
                            <label for="3-stars" class="star">&#9733;</label>
                            <input type="radio" id="2-stars" name="rating" value="2">
                            <label for="2-stars" class="star">&#9733;</label>
                            <input type="radio" id="1-star" name="rating" value="1">
                            <label for="1-star" class="star">&#9733;</label>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="country">Country</label>
                    <div class="uk-form-controls">
                        <select name="country" class="uk-select border" id="country" required>
                                @include('themes.default.common.country')
                            </select>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="message">Message</label>
                    <div class="uk-form-controls">
                        <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                    </div>
                </div>
                <div class="uk-margin-top uk-text-center">
                    <button type="submit" class="uk-btn uk-btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- review form modal end -->

<!-- dates and prices modal start -->
<div id="offcanvas-usage" style="width:100%" uk-offcanvas>
    <div class="uk-offcanvas-bar uk-padding-remove uk-white-bg">

        {{-- Sticky Header --}}
        <div style="position: sticky; top: 0; z-index: 10; background: white;">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <div class="uk-res-padding uk-padding-small">
                <h3 class="text-secondary uk-margin-remove uk-text-center uk-primary-bg border">
                    Dates & Prices
                </h3>
            </div>
            <div class="uk-padding uk-res-padding uk-padding-remove-top uk-padding-remove-bottom">
                <div class="uk-grid-small uk-child-width-expand@m uk-text-bold uk-background-muted uk-margin-remove-left uk-padding-small uk-visible@m uk-secondary"
                    uk-grid
                    style="margin-top: 0;">
                    <div class="uk-padding-remove">Dates</div>
                    <div class="uk-padding-remove">With Meal</div>
                    <div class="uk-padding-remove">Without Meal</div>
                    <div class="uk-padding-remove">Status</div>
                    <div class="uk-padding-remove"></div>
                    <div class="uk-padding-remove uk-text-right">
                        <a href="#modal-customize"
                        class="uk-btn uk-btn-secondary"
                        uk-toggle
                        style="padding: 6px 14px; font-size: 13px;">
                            Customize Trip
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-padding uk-res-padding uk-padding-remove-top">
            <div class="uk-container uk-padding-remove uk-black uk-margin-remove">
                <!-- Table Rows -->
                <ul class="uk-margin-remove uk-padding-remove" style="list-style: none;">
                    @foreach ($schedules as $item)
                        <li class="uk-price-li">
                            <div class="uk-grid-small uk-child-width-expand@m uk-child-width-1-1 uk-flex-middle uk-border-bottom" uk-grid>
                                <div class="uk-black uk-text-bold uk-secondary">
                                    <span class="uk-block uk-hidden@m">Dates: </span>{{ date('d M, Y', strtotime($item->start_date)) }} – <br class="uk-visible@s"> {{ date('d M, Y', strtotime($item->end_date)) }}
                                </div>
                                <div class="uk-black uk-flex">
                                    <span class="uk-block uk-hidden@m">With Meal: </span>
                                    <div class="custom-flex">
                                        @if($item->old_price1)
                                            <span style="color: #b50000; text-decoration: line-through; margin-right:5px;">US ${{$item->old_price1}}</span>
                                        @endif
                                        @if($item->price)
                                            <span>US ${{$item->price}}</span>
                                        @else
                                            <span>Unavailable</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="uk-black uk-flex">
                                    <span class="uk-block uk-hidden@m">Without Meal: </span>
                                    <div class="custom-flex">
                                        @if($item->old_price2)
                                            <span style="color: #b50000; text-decoration: line-through; margin-right:5px;">US ${{$item->old_price2}}</span>
                                        @endif
                                        @if($item->group_size)
                                            <span>US ${{$item->group_size}}</span>
                                        @else
                                            <span>Unavailable</span>
                                        @endif
                                    </div>
                                </div>
                                @if($item->availability === 'AVAILABLE')
                                    <div class="uk-text-success">
                                @elseif($item->availability === 'LIMITED')
                                    <div class="uk-text-warning">
                                @elseif($item->availability === 'CLOSED')
                                    <div class="uk-text-danger">
                                @else
                                    <div class="uk-primary">
                                @endif
                                    <span class="uk-block uk-hidden@m">Status: </span>{{$item->availability}}
                                </div>
                                <div class="uk-black">
                                    @if($item->availability != 'CLOSED')
                                    <form action="{{ route('page.booking', $data->uri) }}" method="post" id="form-{{ $item->id }}">
                                        @csrf
                                        <input type="hidden" name="schedule_id" id="schedule_id{{ $item->id }}" value="{{ $item->id }}">
                                        <button type="button" onclick="document.getElementById('form-{{ $item->id }}').submit();" class="uk-btn uk-btn-secondary">Book Now</button>
                                    </form>
                                    @endif
                                </div>
                                <div class="trigger" data-target="#sidebar{{ $item->id }}">
                                    <span class="pointer">View Info</span>
                                </div>
                            </div>
                            @if($item->remarks)
                                <div class="sidebar" id="sidebar{{ $item->id }}" hidden>
                                    <h3 class="uk-secondary uk-margin-top">Highlights at a Glance</h3>
                                    {!! $item->remarks !!}
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="uk-margin-top">
                <h3 class="uk-primary">{{$setting->text3_title}}</h3>
                <div class="uk-light-bg uk-padding-small border" style="color:black;">
                    {!! $setting->text3_sub_title !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- dates and prices modal end -->


<div class="uk-position-bottom uk-hidden@m ">
    <div class="uk-mobile-menu uk-padding-remove uk-sticky uk-active uk-sticky-below uk-sticky-fixed"
        uk-sticky="start:0; end: #footer;  animation: uk-animation-slide-top; position: bottom;"
        style="position: fixed; top: 730px; width: 390px;">
        <div class="uk-container uk-container-small">
            <ul class="uk-flex  uk-flex-center uk-flex-middle uk-flex-around">
                <li class="uk-padding-small">

                    <a href="#offcanvas-usage" uk-toggle class="uk-small-menu">
                        <span uk-icon="icon: calendar; "></span>
                        <p>Date and Prices </p>
                    </a>
                </li>
                <li class=" uk-padding-small">
                    <a href="#offcanvas-usage" class="uk-small-menu">
                        <span uk-icon="icon: heart; "></span>
                        <p>My Favourite </p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>

<!-- inquiry form modal start-->
<div id="modal-inquiry" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove  uk-primary-bg border">Have Questions?</h3>
        <h3 class="uk-text-center uk-margin-remove">{{ $data->trip_title }}</h3>
        <button class="uk-modal-close-default" type="button" uk-close></button>

        <form class="uk-contact-form uk-margin-top" action="{{ route('inquiry') }}" method="POST">
            @csrf
            <div class=" uk-child-width-1-2@m uk-grid">
                <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                <input type="hidden" name="trip_id" value="{{$data->id}}" />
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="name">Full Name*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="emailid">Email*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="emailid" name="emailid" required type="email">
                    </div>
                </div>

            <!-- new element added -->
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="country">Country*</label>
                    <select name="country" class="uk-select" id="country" required>
                        @include('themes.default.common.country')
                    </select>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="number">Contact*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="contact" name="contact" required type="number">
                    </div>
                </div>
            </div>
                               @if($data->latest_info)
                <!-- new element added -->
                <div class="uk-flex uk-flex-middle uk-margin-top">
                    <p class="uk-margin-remove">To know more about our latest trip information:</p>
                    <button class="uk-button uk-button-default uk-info-button" type="button" uk-toggle="target: .toggle">View Info</button>
                </div>
                <p class="toggle"></p>
                <div class="toggle" hidden>
                    <h3 class="uk-secondary uk-margin-top">More Information</h3>
                    <div class=" uk-padding uk-light-bg border uk-margin-remove ">{!! $data->latest_info !!}</div>
                </div>
            @endif
            <div class="uk-margin-small-top">
                <label class="uk-form-label uk-text-bold" for="contact">Message</label>
                <div class="uk-form-controls">
                    <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                </div>
            </div>
            <div class="uk-margin-top uk-text-center">
                {{-- <a href="" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></a> --}}
                <button type="submit" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></button>
            </div>
        </form>

    </div>
</div>
<!-- inquiry form modal end -->

<!-- Customize form modal start-->
<div id="modal-customize" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove  uk-primary-bg border">Customize Trip</h3>
        <h3 class="uk-text-center uk-margin-remove">{{ $data->trip_title }}</h3>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form class="uk-contact-form uk-margin-top" action="{{ route('customize-trip.post') }}" method="POST">
            @csrf
            <input type="hidden" id="g_recaptcha_response2" name="g_recaptcha_response"/>
            <h3 class="uk-secondary uk-margin-remove">Trip Information</h3>
            <div class=" uk-child-width-1-2@m uk-grid">
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="pname">Package Name*</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" aria-label="Select" name="trip_id" id="trip_id" required>
                            <option value="{{$data->id}}">{{$data->trip_title}}</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="people">Number of People*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="people" name="people" required type="number">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="days">Duration (In Days)*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="days" name="days" required type="number" placeholder="In Days">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="date">Trip Start Date*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="date" name="date" required type="date">
                    </div>
                </div>
            </div>
            @if($data->latest_info)
                <!-- new element added -->
                <div class="uk-flex uk-flex-middle uk-margin-top">
                    <p class="uk-margin-remove">To know more about our latest trip information:</p>
                    <button class="uk-button uk-button-default uk-info-button" type="button" uk-toggle="target: .toggle">View Info</button>
                </div>
                <p class="toggle"></p>
                <div class="toggle" hidden>
                    <h3 class="uk-secondary uk-margin-top">More Information</h3>
                    <div class=" uk-padding uk-light-bg border uk-margin-remove ">{!! $data->latest_info !!}</div>
                </div>
            @endif
            <!-- new element added -->
            <hr>
            <h3 class="uk-secondary uk-margin-remove">Personal Information</h3>
            <div class=" uk-child-width-1-2@m uk-grid">
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="fname">Full Name*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="fname" name="fname" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="email">Email*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="email" name="email" required type="email">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="fcountry">Country*</label>
                    <select name="country" class="uk-select" id="country" required>
                        @include('themes.default.common.country')
                    </select>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="phone">Contact*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="phone" name="phone" required type="number">
                    </div>
                </div>
            </div>
            <div class="uk-margin-small-top">
                <label class="uk-form-label uk-text-bold" for="requirement">Special Requirement</label>
                <div class="uk-form-controls">
                    <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                </div>
            </div>
            <div class="uk-margin-top uk-text-center">
                {{-- <a href="" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></a> --}}
                <button type="submit" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></button>
            </div>
        </form>

    </div>
</div>
<style>
.trip-extra-info{
    margin-top: 25px;
    padding-top: 18px;
    border-top: 1px solid #e5e5e5;
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
}

.trip-info-item{
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 260px;
}

.trip-info-icon{
    width: 38px;
    height: 38px;
    border-radius: 8px;
    background: #f3f7ea;
    color: #8dbb32;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
}

.trip-info-text{
    display: flex;
    flex-direction: column;
    line-height: 1.4;
}

.trip-info-title{
    font-size: 13px;
    font-weight: 600;
    color: #666;
    text-transform: none !important;
    letter-spacing: 0;
    margin-bottom: 2px;
}

.trip-info-value{
    font-size: 14px;
    font-weight: 500;
    color: #222;
    text-transform: none !important;
    line-height: 1.5;
}

/* Mobile */
@media(max-width: 767px){

    .trip-extra-info{
        flex-direction: column;
        gap: 15px;
    }

    .trip-info-item{
        min-width: 100%;
    }

}
</style>


<script>
  // Custom smooth scrolling with offset
  document.querySelectorAll('.sidenav a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", function(event) {
          event.preventDefault();

          const target = document.querySelector(this.getAttribute("href"));

          if (target) {
              window.scrollTo({
                  top: target.offsetTop - 80,

              });
          }
      });
  });

  // UIkit scrollspyNav only for active state — no scrolling
  spyNav = UIkit.scrollspyNav(".sidenav", {
      closest: "a", // or "li" depending on where you want .uk-active
      scroll: false,
    //   offset: 120, // same as your scroll offset for accuracy
      cls: "uk-active"
  });
</script>
<!-- inquiry form modal end -->
 <script>
    const text = document.getElementById('text');
    const btn = document.getElementById('toggleBtn');

    btn.addEventListener('click', () => {
      text.classList.toggle('expanded');
      btn.textContent = text.classList.contains('expanded') ? 'Read Less' : 'Read More';
    });
  </script>
@stop
@push('scripts')
    <script>
        window.isAuthenticated = @json(Auth::check());

        document.addEventListener("DOMContentLoaded", function () {
            let today = new Date().toISOString().split("T")[0];
            document.getElementById("date").setAttribute("min", today);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#wish-button', function (e) {
                e.preventDefault();

                if (!window.isAuthenticated) {
                    let tripUri = "{{ $data->uri }}"; // current trip identifier

                    $.post("{{ route('save.intended.trip') }}", {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        uri: tripUri
                    }).always(function () {
                        window.location.href = "{{ route('login.form') }}";
                    });

                    return;
                }
                // alert('ok'); // Debugging: Check if button click is detected

                let itemId = $(this).data('id'); // Get the item ID from the button
                let url = "{{ route('add-wishlist', ':id') }}".replace(':id', itemId);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'GET',
                    url: url,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        if (data.status === 'success') {
                            toastr.success(data.message);
                        } else {
                            toastr.error(data.message);
                        }
                        $.each(data.errors, function (key, value) {
                            toastr.error(value);
                        });
                    },
                    error: function (xhr) {
                        alert("An error occurred.\nError code: " + xhr.statusText);
                    }
                });
            });

            //for pdf download
            $(document).on('click', '.download-pdf-btn', function (e) {
                if (!window.isAuthenticated) {
                    e.preventDefault();
                    $.post("{{ route('save.intended.trip') }}", {
                        uri: "{{ $data->uri }}",
                        _token: "{{ csrf_token() }}"
                    }, function() {
                        window.location.href = "{{ route('login.form') }}";
                    });
                }
            });
        });
    </script>
@endpush
