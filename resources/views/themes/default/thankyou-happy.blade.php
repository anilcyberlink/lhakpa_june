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
                    Thank you for your feedback.
                </p>

                <p class="uk-text-small uk-margin-small-bottom">
                    We’re glad to hear you had a positive experience with
                    <strong>Lhakpa Trekking</strong>.
                </p>

                <p class="uk-text-small uk-text-muted uk-margin-small-bottom">
                    Your support means a lot to our team.
                </p>

                <p class="uk-text-small uk-margin-small-top">
                    If you’d like to share your experience publicly:
                </p>

                <div class="uk-flex uk-flex-center uk-flex-wrap uk-margin-small-bottom" uk-grid>
                    <div>
                        <a href="https://www.google.com/maps/place/Lhakpa+Trekking+Pvt.+Ltd./@27.7348003,85.3819682,17.25z/data=!4m16!1m7!3m6!1s0x39eb1b003d2068bf:0xab284d7e5f1cec89!2sLhakpa+Trekking+Pvt.+Ltd.!8m2!3d27.7349089!4d85.3827354!16s%2Fg%2F11m68jqnyd!3m7!1s0x39eb1b003d2068bf:0xab284d7e5f1cec89!8m2!3d27.7349089!4d85.3827354!9m1!1b1!16s%2Fg%2F11m68jqnyd?entry=ttu&g_ep=EgoyMDI2MDIwNC4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank"
                            rel="noopener"
                            class="uk-button uk-border-pill uk-form-small btn-theme-green"
                            style="padding:0 28px; font-weight:600;"
                        >
                            Google review
                        </a>

                    </div>

                    <!--<div>-->
                    <!--    <a-->
                    <!--        href="https://www.facebook.com/LhakpaTrekking/reviews"-->
                    <!--        target="_blank"-->
                    <!--        rel="noopener"-->
                    <!--        class="uk-button uk-border-pill uk-form-small btn-theme-green"-->
                    <!--        style="padding:0 28px; font-weight:600;"-->
                    <!--    >-->
                    <!--        Facebook review-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>

                <p class="uk-text-small uk-text-muted uk-margin-remove-bottom">
                    We hope to welcome you again in the mountains.
                </p>
                <p class="mb-1">
                    📸 Traveling with us?
                </p>
                <p>
                    Tag <strong>@LhakpaTrekking</strong> and use
                    <strong>#TrekWithLhakpa</strong> on Instagram!
                </p>

            </div>
        </div>
    </div>


@endsection
