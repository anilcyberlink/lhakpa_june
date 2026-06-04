@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain9.jpeg') }}" alt="{{ $data->post_type }}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                    <li><span class="uk-secondary">{{ $data->post_type }}</span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>{{ $data->sub_title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section-small uk-light-pink">
    <div class="uk-container">
       <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center  py-3"
            uk-sticky="offset: 80; sel-target: .uk-container; cls-active: uk-navbar-sticky  bg-white; bottom:.uk-light-bg;"
            uk-switcher="animation: uk-animation-fade">
            @foreach ($posts as $row)
                <li>
                    <a href="#" class="green-border uk-flex uk-flex-between">
                        {{$row->post_title}} 
                        <!--<img src="https://cyberlinknepal.com/design/lhakpa/assets/img/flag2.jpg" class="uk-margin-small-left" style="height: 22px;" alt="">-->
                        <img src="{{$row->page_thumbnail ? asset('uploads/medium/'.$row->page_thumbnail) : asset('theme-assets/img/flag2.jpg') }}" class="uk-margin-small-left" style="height: 22px;" alt="">
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="uk-switcher uk-margin">
            @foreach ($posts as $value)
                <div class="uk-container">
                    @foreach ($value->associated_posts as $associated_post)
                         <div class=" border uk-grid uk-flex uk-flex-middle uk-margin-large-bottom">
                            <div class="uk-width-1-5@m">
                                <div class="uk-text-center uk-media-220">
                                    <img src="{{ $associated_post->thumbnail ? asset('uploads/associated/'.$associated_post->thumbnail) : asset('theme-assets/img/user.png')}}" class="uk-border-rounded" alt="">
                                    
                                </div>
                                <div class="uk-text-center">
                                    <h3 class="uk-margin-remove uk-secondary">{{ $associated_post->title }}</h3>
                                    <p class="uk-margin-remove">{{ $associated_post->brief }}</p>
                                    </div>
                            </div>
                            <div class="uk-width-4-5@m">
                                <div class="uk-light-green border uk-padding">
                                <div class=" moretext clamp clamp-6">
                                    {!! $associated_post->content !!}
                                </div>
                                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
