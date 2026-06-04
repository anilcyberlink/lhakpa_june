@extends('themes.default.common.master')

@section('content')

    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" style="height:200px;" data-src="{{asset('theme-assets/img/mountain/mountain8.jpeg')}}" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-sub-banner-font uk-text-center">
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="uk-container uk-padding-small uk-margin-small-top">
    <div class="uk-flex uk-flex-center">
        <div class="uk-width-1-2@m uk-text-center">

            <p class="uk-text-large uk-margin-small-bottom">
                Thank you for your honest feedback.
            </p>

            <p class="uk-text-small uk-margin-small-bottom">
                We appreciate you taking the time to share your experience with us.
            </p>

            <p class="uk-text-small uk-text-muted uk-margin-small-bottom">
                If something didn’t meet your expectations, we’re genuinely sorry.
                Your feedback helps us improve.
            </p>

            <p class="uk-text-small uk-margin-small-top">
                You can reach our support team here:
            </p>

            <div class="uk-flex uk-flex-center uk-flex-wrap uk-margin-small-bottom" uk-grid>
                <div>
                    <a href="https://lhakpatrekking.com/type-contact-us" class="uk-button uk-border-pill uk-form-small btn-theme-green" style="padding:0 28px; font-weight:600;">
                        Contact Us
                    </a>
                </div>

                <div>
                    <a href="https://wa.me/9849055448" class="uk-button uk-border-pill uk-form-small btn-theme-green" style="padding:0 28px; font-weight:600;" target="_blank">
                        WhatsApp
                    </a>
                </div>
            </div>

            <p class="uk-text-small uk-text-center uk-margin-small-top">
                <span class="uk-text-meta">Or, you can directly email us at:</span><br>
                <span class="uk-link-text">
                    lhakpatrekking@gmail.com
                </span>
            </p>

            <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                We’ll do our best to make things right.
            </p>

        </div>
    </div>
</div>



@endsection
