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

<section class=" uk-light-bg">
    <div class="uk-margin-medium-bottom">
        <div class="uk-grid-collapse uk-grid" uk-height-match="target: .uk-same-height">
            <div class="uk-width-1-3@m">
                <img src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain8.jpeg') }}" class="cover uk-same-height" alt="{{ $data->post_type }}">
            </div>
            <div class="uk-width-2-3@m uk-same-height">
                <div class="uk-title-font  uk-container uk-section uk-padding-large">
                    <h1 class="uk-secondary">{{$data->associated_title}}</h1>
                    <span class="dotted-line-primary"></span>
                    <p>
                        {!! $data->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $post = $posts->firstWhere('id', 195);
@endphp
<div class="uk-container uk-position-relative">
       <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center  bg-white   py-3"
             uk-sticky="offset: 80; cls-active: uk-navbar-sticky;"
            uk-switcher="animation: uk-animation-fade">
        @foreach ($posts as $row)
            @if($row->id != 195)
                <li><a class="green-border uk-margin-remove">{{$row->post_title}}</a></li>
            @endif
        @endforeach 
        @if($post && $post->images->isNotEmpty())
            <li><a class="green-border uk-margin-remove">Official Documents</a></li>
        @endif
    </ul>

    <div class="uk-switcher  uk-margin-large-bottom  ">
        @foreach ($posts as $value)
            @if ($value->id != 195)
                <div class="uk-container ">
                @foreach ($value->associated_posts as $associated_post)
                  <div class=" border uk-grid uk-flex  uk-margin-large-bottom">
                        <div class="uk-width-1-3@m">
                            <div class="uk-text-center uk-media-220">
                                <img src="{{ $associated_post->thumbnail ? asset('uploads/associated/'.$associated_post->thumbnail) : asset('theme-assets/img/user.png')}}" class="uk-border-rounded" alt="">
                                
                            </div>
                             <div class="uk-text-center">
                                 <h3 class="uk-margin-remove uk-secondary">{{ $associated_post->title }}</h3>
                                <p class="uk-margin-remove">{{ $associated_post->brief }}</p></div>
                        </div>
                        <div class="uk-width-expand@m">
                             <div class="uk-light-green border uk-padding">
                                <div class=" moretext clamp clamp-4">
                                    {!! $associated_post->content !!}
                                </div>
                                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
                                </div>
                        </div>
                    </div>
                @endforeach
                </div>
            @endif
        @endforeach
        <!--document section-->
        @if($post && $post->images->isNotEmpty())
            <div class="uk-container">
                <div class="uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-small" uk-grid uk-lightbox="animation: fade" >
                    @foreach ($post->images as $image )
                        <div class="award-div">
                            <a class="uk-inline uk-media-260" href="{{$image->file_name ? asset('uploads/medium/'.$image->file_name) :  asset('theme-assets/img/mountain/mountain8.jpeg')}}" data-caption="{{$image->title}}">
                                <img src="{{$image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain8.jpeg')}}" class="border" width="100%" height="260" alt="" loading="lazy">
                                <div class="uk-overlay-primary uk-position-cover border" style="background: rgb(34 34 34 / 50%);"></div>
                                <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                                    <p class="fw-600 uk-white">{{$image->title}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
