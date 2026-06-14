@extends('themes.default.common.master')
@section('title', $data->title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

{{-- ===================== HERO (UNCHANGED) ===================== --}}
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/banners/'.$data->banner) : asset('theme-assets/img/mountain/mountain6.jpeg') }}" alt="" uk-img>
    <div class="uk-container uk-width-1-1 pt-150  uk-responsive-bottom">
        <div class="uk-flex uk-flex-middle uk-grid-collapse uk-grid-match" uk-grid uk-height-match="target: .uk-same-height">
            <div class="uk-width-3-4@m" id="container">
                <div id="originalDiv">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                        <li><span class="uk-secondary">Extension Packages</span></li>
                    </ul>
                    <div class="uk-sub-banner-font">
                        <h1>{{ $data->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== MAIN CONTENT ===================== --}}
<section class="uk-section" style="overflow:hidden;">
    <div class="uk-container">
        <div class="uk-grid uk-flex" uk-grid>

            {{-- ---- LEFT / MAIN COLUMN ---- --}}
            <div class="uk-width-3-4@l">

                {{-- Sub title --}}
                @if($data->sub_title)
                <div class="uk-margin-bottom">
                    <h2 class="uk-secondary uk-margin-remove" style="font-size:1.4rem;">{{ $data->sub_title }}</h2>
                    <hr>
                </div>
                @endif

                {{-- Excerpt / Overview --}}
                @if($data->excerpt)
                <div class="uk-font uk-margin-bottom">
                    <span class="uk-primary uk-text-uppercase f-27">
                        <i class="fa-solid fa-list uk-margin-small-right" aria-hidden="true"></i>Overview
                    </span>
                    <div class="uk-light-bg uk-padding border uk-margin-top uk-responsive-padding">
                        <p class="uk-text-justify">{{ $data->excerpt }}</p>
                    </div>
                </div>
                @endif

                {{-- Thumbnail below Overview --}}
                @if($data->thumbnail)
                <div class="uk-margin-bottom border" style="overflow:hidden;">
                    <img src="{{ asset('uploads/icon/'.$data->thumbnail) }}"
                         alt="{{ $data->title }}"
                         class="uk-width-1-1"
                         style="display:block; max-height:420px; object-fit:cover;">
                </div>
                @endif

                {{-- Full Content --}}
                @if($data->content)
                <div class="uk-font uk-margin-top">
                    <span class="uk-primary uk-text-uppercase f-27">
                        <i class="fa-solid fa-circle-info uk-margin-small-right" aria-hidden="true"></i>Details
                    </span>
                    <div class="uk-light-bg uk-padding border uk-margin-top uk-responsive-padding">
                        <div class="uk-column-1-1">
                            {!! $data->content !!}
                        </div>
                    </div>
                </div>
                @endif

                {{-- Inline YouTube Video below Details --}}
                @if($data->category_video)
                <div class="uk-font uk-margin-top">
                    <span class="uk-primary uk-text-uppercase f-27">
                        <i class="fa-solid fa-video uk-margin-small-right" aria-hidden="true"></i>Video
                    </span>
                    <div class="uk-margin-top border" style="overflow:hidden;">
                        <div style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden;">
                            <iframe
                                src="https://www.youtube.com/embed/{{ $data->category_video }}"
                                title="{{ $data->title }} - Video"
                                frameborder="0"
                                allowfullscreen
                                style="position:absolute; top:0; left:0; width:100%; height:100%;">
                            </iframe>
                        </div>
                    </div>
                </div>
                @endif

            </div>

            {{-- ---- RIGHT SIDEBAR — Other Extensions ---- --}}
            <div class="uk-width-1-4@l" id="ext-sidebar">
                <div uk-sticky="offset: 100; end: #ext-sidebar-end; media: @l">

                    @if(isset($related) && $related->count())
                    <div class="uk-light-bg border uk-padding-small">
                        <h2 class="uk-secondary uk-text-uppercase uk-margin-remove" style="font-size:18px;">
                            Other Extension Packages
                        </h2>
                        <hr style="border-color: var(--secondary);">

                        @foreach($related as $row)
                        <a href="{{ route('extension-detail', $row->uri) }}"
                           class="uk-display-block uk-link-reset uk-transition-toggle"
                           style="text-decoration:none;">
                            <div class="uk-flex uk-flex-middle uk-grid-small"
                                 uk-grid
                                 style="{{ !$loop->last ? 'border-bottom: 1px solid #ddd; padding-bottom:12px; margin-bottom:12px;' : '' }}">

                                {{-- Thumbnail --}}
                                <div class="uk-width-1-3" style="overflow:hidden; border-radius:3px; flex-shrink:0;">
                                    <img src="{{ $row->thumbnail ? asset('uploads/icon/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg') }}"
                                         class="uk-width-1-1 uk-transition-scale-up uk-transition-opaque"
                                         style="display:block; height:65px; object-fit:cover;"
                                         alt="{{ $row->title }}">
                                </div>

                                {{-- Title only --}}
                                <div class="uk-width-expand uk-sherpa-font">
                                    <h2>{{ $row->title }}</h2>
                                </div>

                            </div>
                        </a>
                        @endforeach

                    </div>
                    @endif

                </div>
            </div>
            {{-- end sidebar --}}

        </div>
    </div>
    <div id="ext-sidebar-end"></div>
</section>


@stop
