@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain6.jpeg') }}" alt="{{ $data->post_type }}" uk-img>
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
   <!--document section-->
   <div class="uk-container">
       <h1 class="uk-secondary uk-margin-remove">Our offical legal documents</h1>
       <span class="dotted-line-primary"></span>
       <div class="uk-margin-medium-top uk-margin-bottom">
            <p>
                {!! $data->content !!}
            </p>
       </div>
       
      
      @if($documents)
      <div class="uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-small" uk-grid uk-lightbox="animation: fade" >
        @foreach($documents->images as $image)
            <div class="award-div">
                <a class="uk-inline uk-media-260" href="{{ $image->file_name ? asset('uploads/medium/'.$image->file_name ) : asset('theme-assets/img/mountain/mountain8.jpeg') }}" data-caption="{{ $image->title }}">
                   <img src="{{ $image->file_name ? asset('uploads/medium/'.$image->file_name ) : asset('theme-assets/img/mountain/mountain8.jpeg') }}" class="border" width="100%" height="260" alt="{{ $image->title }}" loading="lazy">
                   <div class="uk-overlay-primary uk-position-cover border" style="background: rgb(34 34 34 / 50%);"></div>
                   <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                      <p class="fw-600 uk-white">{{ $image->title }}</p>
                   </div>
                </a>
            </div>
        @endforeach
      </div>
      @endif
   </div>
</section>

@endsection