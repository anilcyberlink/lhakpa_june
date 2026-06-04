@extends('themes.default.common.master')
@section('content')
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="https://cyberlinknepal.com/design/lhakpa/assets/img/mountain/mountain6.jpeg" alt="" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                    <li><span class="uk-secondary">Review</span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>Review from our travellers</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
     @if($data->count() > 0)
      @foreach($data as $value)
       
               
                        <div class=" border uk-grid uk-flex  uk-margin-large-bottom">
                            <div class="uk-width-1-5@m">
                                <div class="uk-media-280">
                                    <img src="{{$value->image ? asset('uploads/reviews/'.$value->image) : asset('theme-assets/img/user.png')}}" class="uk-border-rounded" alt="">
                                    
                                </div>
                                <div class="uk-text-center">
                                    <h3 class="uk-margin-remove uk-secondary">{{ $value->full_name }}</h3>
                                    <p class="uk-margin-remove"><b>{{ $value->country }}</b></p>
                                    <div class="uk-star-rating">
                                        @for($i=0; $i < $value->rating; $i++)
                                                <i class="fa-solid fa-star"></i>
                                            @endfor
                                    </div>
                                    @if(trip_count($value->user_id) >= 1)
                                    <p class=" uk-margin-top uk-primary"> {{trip_count($value->user_id)}} trip with Lhakpa Treks</p>
                                    @endif
                                </div>
                            </div>
                            <div class="uk-width-4-5@m">
                                <div class="uk-light-bg border uk-padding">
                                      <div class="uk-margin-remove moretext clamp clamp-4">
                                    
                                       {{ $value->message }}   
                                       </div>
                                       <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
                                        
                                </div>
                            </div>
                        </div>
                 
        
        @endforeach
        @endif
    </div>
</section>
@stop