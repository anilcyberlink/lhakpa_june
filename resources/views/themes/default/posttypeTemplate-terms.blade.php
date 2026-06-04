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
<section class="uk-section">
   <div class="uk-container">
        <p>
           {!! $data->content !!}
        </p>
    @if($posts->count() > 0 )
      <div class=" uk-light-bg uk-padding border uk-margin-top uk-margin-bottom">
         <ul class="uk-detail-list" uk-accordion>
            @foreach($posts as $row)
                <li class="{{ $loop->first ? 'uk-open' : '' }}">
                   <a class="uk-accordion-title" href><span class="uk-margin-right">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span> {{ $row->post_title }}</a>
                   <div class="uk-accordion-content uk-margin-remove">
                      <p>
                          {!! $row->post_content !!}
                      </p>
                   </div>
                </li>
            @endforeach
         </ul>
      </div>
    @endif
   </div>
</section>

@endsection
