@extends('themes.default.common.master')
@section('title', $data->name)
@section('content')

<section class="uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" style="height:400px;" data-src="{{asset('theme-assets/img/mountain/mountain8.jpeg')}}" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse" uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary">Team Member</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section" style="background:#f7f7f7;">
    <div class="uk-container">

        {{-- Profile Card --}}
        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium" style="border-radius:8px;">

            <div class="uk-grid-large uk-flex-middle" uk-grid>

                <div class="uk-width-1-1 uk-width-auto@s uk-text-center">
                    <img
                        src="{{ $data->thumbnail ? asset('uploads/team/'.$data->thumbnail) : asset('theme-assets/img/mountain/mountain6.jpeg') }}"
                        alt="{{ $data->name }}"
                        style="width:220px;height:220px;object-fit:cover;border-radius:6px;max-width:100%;">
                </div>

                <div class="uk-width-expand uk-text-center uk-text-left@s">
                    <h2 class="uk-secondary uk-margin-remove-bottom">{{ $data->name }}</h2>
                    <div class="uk-text-lead uk-primary uk-margin-small-top uk-margin-remove-bottom">
                        {{ $data->position }}
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-1-1 uk-child-width-auto@s uk-flex-center uk-flex-left@s" uk-grid>

                        @if($data->language)
                            <div>
                                <span uk-icon="icon: comment" class="uk-margin-small-right"></span>
                                {{ $data->language }}
                            </div>
                        @endif

                        @if($data->phone)
                            <div>
                                <span uk-icon="icon: receiver" class="uk-margin-small-right"></span>
                                <a href="tel:{{ $data->phone }}" class="uk-link-reset">{{ $data->phone }}</a>
                            </div>
                        @endif

                        @if($data->email)
                            <div>
                                <span uk-icon="icon: mail" class="uk-margin-small-right"></span>
                                <a href="mailto:{{ $data->email }}" class="uk-link-reset">{{ $data->email }}</a>
                            </div>
                        @endif

                    </div>

                    <hr>

                    <h3 class="uk-primary">Biography</h3>
                    <div class="uk-text-break">
                        {!! $data->content !!}
                    </div>
                </div>

            </div>

        </div>

        {{-- Related Team --}}
        @if($related_teams->count() > 0)
        <div class="uk-margin-large-top uk-text-center">

            <h2 class="uk-primary uk-margin-remove-bottom">Meet The Team</h2>
            {{-- <div class="dotted-line-primary uk-margin-small-top" style="width:60px; margin-left:auto; margin-right:auto; margin-bottom:30px;"></div> --}}

            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium-top" uk-grid>

                @foreach($related_teams as $member)
                    <div>
                        <a href="{{ url('team-detail/'.$member->uri) }}" class="uk-link-reset">
                            <img
                                src="{{ $member->thumbnail ? asset('uploads/team/'.$member->thumbnail) : asset('theme-assets/img/mountain/mountain6.jpeg') }}"
                                alt="{{ $member->name }}"
                                class="uk-border-circle"
                                style="width:140px;height:140px;object-fit:cover;max-width:100%;">
                            <h4 class="uk-secondary uk-margin-small-top uk-margin-remove-bottom">{{ $member->name }}</h4>
                            <div class="uk-primary uk-text-small">{{ $member->position }}</div>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>
        @endif

    </div>
</section>

@endsection
