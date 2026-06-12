@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

    <section
        class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed"
        uk-height-viewport
        data-src="{{ $data->banner ? asset('uploads/original/' . $data->banner) : asset('theme-assets/img/mountain/mountain6.jpeg') }}"
        alt="{{ $data->post_type }}" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
                <div class="uk-width-1-1@m">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                        {{-- <li><span class="uk-secondary">Your Group</span></li> --}}
                    </ul>
                    <div class="uk-sub-banner-font">
                        <h1>{{ $data->post_type }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="uk-section-small uk-position-relative">
        <div class="uk-container">
            <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center bg-white py-3"
                uk-sticky="offset: 80; cls-active: uk-navbar-sticky;" uk-switcher="animation: uk-animation-fade">

                @foreach ($team_category as $item)
                    <li><a class="green-border uk-margin-remove">{{ $item->category }}</a></li>
                @endforeach
            </ul>
            <div class="uk-switcher uk-margin">
                @foreach ($team_category as $category)
                    <div>
                        <div class="uk-child-width-1-3@m uk-grid">
                            @foreach ($related_teams[$category->id] ?? [] as $team)
                                <div class="uk-margin-top">
                                    <div class="uk-inline uk-width-1-1">
                                        <a href="{{ route('page.team_detail', $team->uri) }}"
                                            class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-360">
                                            <img src="{{ $team->thumbnail ? asset('uploads/team/' . $team->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg') }}"
                                                class="uk-transition-scale-up uk-transition-opaque"
                                                alt="{{ $team->name }}">
                                            <div
                                                class="uk-overlay uk-overlay-default uk-position-bottom uk-overlay-bottom uk-title-font">
                                                <h3 class="uk-secondary uk-margin-remove">{{ $team->name }}</h3>
                                                <span
                                                    class="uk-text-uppercase uk-white uk-margin-remove">{{ $team->position }}</span><br>

                                            </div>

                                            <span
                                                class="see-message-hint uk-position-bottom-right uk-margin-small-right uk-margin-small-bottom uk-text-small">
                                                <!--<i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i>-->
                                                <!--See message →-->
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
