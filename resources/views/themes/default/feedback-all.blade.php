@extends('themes.default.common.master')
@section('content')

    <section
        class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed"
        style="height:400px;" data-src="{{ asset('theme-assets/img/mountain/mountain8.jpeg') }}" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-sub-banner-font uk-text-center">
                        <h2 class="uk-secondary">TRAVELER REVIEWS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feedback section  -->
    @if($feedbacks->count() > 0)
    <section class="uk-section-small" id="review">
        <div class="uk-container uk-container-small">

            <div class="uk-text-center uk-margin-large-bottom uk-title-font">
                @php
                    $overallStars = feedback_overall_stars($feedback_stats['satisfaction_percentage']);
                @endphp

                <div class="uk-star-rating uk-margin-small-bottom" style="font-size:22px; letter-spacing:4px;">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $overallStars)
                            <i class="fa-solid fa-star"></i>
                        @else
                            <i class="fa-regular fa-star"></i>
                        @endif
                    @endfor
                </div>
                <h1 class="uk-text-uppercase uk-margin-remove uk-title-font text-primary">
                    {{ $feedback_stats['satisfaction_percentage'] }}% of our customers satisfied
                </h1>
                <p class="uk-text-muted uk-margin-small uk-text-center">
                    out of {{ $feedback_stats['total_reviews'] }} travelers who responded to the satisfaction survey
                </p>
            </div>

            <div class="uk-text-center uk-margin-medium-bottom"
                style="background:#f5f2ed; border:0.5px solid #e0dbd2; padding:1rem; border-radius:4px;">
                <span
                    style="font-size:0.78rem; letter-spacing:0.15em; text-transform:uppercase; font-weight:600; color:#888;">
                    Traveler Reviews
                </span>
                <div style="width:60px; height:2.5px; background:#c8962e; margin:8px auto 0; border-radius:2px;"></div>
            </div>

            @foreach ($feedbacks as $feedback)
                <div class="uk-grid-small uk-flex uk-flex-top review-row {{ !$loop->last ? 'uk-margin-large-bottom' : '' }}"
                    uk-grid>

                    <div class="uk-width-1-1 uk-width-auto@m uk-text-center" style="min-width:120px;">
                        <div class="uk-border-circle"
                            style="width:70px; height:70px; background:#80093f; color:#fff; border:2px solid #e0dbd2; display:flex; align-items:center; justify-content:center; font-size:28px; font-weight:700; margin:0 auto;">
                            {{ strtoupper(substr(trim($feedback->full_name ?? 'T'), 0, 1)) }}
                        </div>

                        <p class="uk-margin-small-top uk-margin-remove-bottom"
                            style="font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;">
                            {{ $feedback->full_name }}
                        </p>

                        <p class="uk-margin-remove uk-text-muted" style="font-size:0.72rem;">
                            Traveler
                        </p>
                    </div>

                    <div class="uk-width-1-1 uk-width-expand@m">

                        <p class="uk-margin-remove-bottom uk-text-muted"
                            style="font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;">
                            {{ \Carbon\Carbon::parse($feedback->created_at)->format('m/d/Y') }},
                            {{ ucfirst($feedback->overall) }} experience on {{ $feedback->trip }}
                        </p>

                        <div class="uk-star-rating uk-margin-small" style="font-size:13px;">
                            @php
                                $stars = feedback_review_stars($feedback->overall);
                            @endphp

                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $stars)
                                    <i class="fa-solid fa-star"></i>
                                @else
                                    <i class="fa-regular fa-star"></i>
                                @endif
                            @endfor
                        </div>

                        <div class="moretext clamp clamp-3 uk-text-small" style="font-size:0.95rem;">
                            <p>{{ $feedback->comments }}</p>
                        </div>

                        @if (strlen(strip_tags($feedback->comments)) > 150)
                            <a href="#" class="read-more-btn text-primary moreless-button">
                                Read More
                            </a>
                        @endif

                    </div>

                </div>
            @endforeach

            {!! $feedbacks->links('themes.default.common.pagination') !!}
        </div>
    </section>
    @else
    <div>
        Commng Soon...
    </div>
    @endif
    <!-- feedback -->

@stop
