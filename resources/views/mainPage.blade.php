<!DOCTYPE html>
<html lang="en">

@include('forntend.layouts.header')

<body>
    <!-- topbar start -->
   @include('forntend.layouts.navbar')
  <!-- navbar setction end -->


    @php 


    @endphp

    
        <!-- home-hero-swiper start -->
    <div class="home-hero-swiper position-relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($pageData['home'] as $home)
                <div class="swiper-slide">
                        <img src="{{asset($home['image_url'])}}" />
                    <div class="swiper-content">
                        <div class="container">
                              <h4>{{$home['title']}} </h4>
                        <h1 class="text-uppercase">{{$home['info']}}</h1>
                       <p>{!! Str::limit(@$home['description'], 200) !!}</p>  
                        </div>       
                    </div>
                    <div class="bg-overlay"></div>
                </div>
                @endforeach
                
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination d-none"></div>
        </div>
    </div>
    <!-- home-hero-swiper end -->

    <!-- content section start -->

    @if(isset($pageData['featured']))

    <!-- Featured tour section start -->
    <section class="featured-center mb-4">
        <div class="container-body px-3">
            <div class="Featured-tour">
                <h4 class="mb-0">FEATURED TOUR</h4>
            </div>
        </div>
    </section>
    <section>
        <div class="container-body px-3">
            <div class="featured-content">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="content-main text-start bg-white p-4">
                            <h4 class="mt-3 text-color fw-bold">{{@$pageData['featured']['title']}}</h4>
                            <h6 class="dates-sec">{{@$pageData['featured']['info']}}</h6>
                            <p>
                                
                                {!! Str::limit(@$pageData['featured']['description'], 300) !!}


                            </p>
                            <button class="content-btn">MORE INFO</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feartued-image-sec">
                            <img class="img-fluid" src="{{ asset(@$pageData['featured']['image_url']) }} " alt="" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
    <!-- About us north tours section start -->
       <div class="third-sec mt-lg-5 mt-4">
    <div class="container-body px-3">
            <div class="row">
                <div class="col-lg-6 left-text">
                    <div class="sub-hding align-items-baselines">
                        <h3 class="about-us">About Us</h3>
                        <img class="yellow-line" src="{{asset('forntend/images/yellow-line.png')}}" alt="yellow-line">
                    </div>
                    <h3 class="text-color fw-bold">{{@$pageData['about_us']['about_us_heading']}}</h3>
                    <p class="t-sec-des" >
                        {!! Str::limit(@$pageData['about_us']['about_us_description'], 1000) !!}
                    </p>
                    <button class="content-btn">READ MORE</button>
                </div>
                <div class="col-lg-6 right-img">
                    <div>
                        <img class="about-img img-fluid" src="{{asset(@$pageData['about_us']['about_us_img'])}}" alt="About-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Abour us north tours section end -->


    <!-- image gallery swiper start -->
@if(isset($pageData['gallery'])  && count($pageData['gallery']) > 0)
     <section class="image-gallery">
        <div class="container-body px-3">
            <div class="tittles d-flex align-items-baseline justify-content-center gap-3 mb-4">
                <img src="{{asset('forntend/images/line_icon-left.png')}}" alt="Image 1">
                <h2 style="color: #2A425A;"><span class="fw-bold tittle-heading">Tour Image Gallery</span> </h2>
                <img src="{{asset('forntend/images/line_icon_right.png')}}" alt="Image 2">
            </div>
        </div>
    <div class="desktop-gallery">
        <div class="owl-carousel owl-theme">
            @foreach ($pageData['gallery'] as $gldata)
            <div class="item position-relative">
                <img class="img-fluid" src="{{ asset(@$gldata) }}" />
                <a data-fancybox="gallery" href="{{ asset(@$gldata) }}">
                    <img class="plus-sign" src="{{ asset('forntend/images/plus-sign.png') }}" alt="">
                </a>
                <div class="overlay"></div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="desktop-larg-screen">
        <div class="container-body px-3">
            <div class="owl-carousel owl-theme">
                @foreach ($pageData['gallery'] as $gldata)
                <div class="item position-relative">
                    <img class="img-fluid" src="{{ asset(@$gldata) }}" />
                    <a data-fancybox="gallery" href="{{ asset(@$gldata) }}">
                        <img class="plus-sign" src="{{ asset('forntend/images/plus-sign.png') }}" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

    @endif

    <!-- travel calander section start -->
    @if(isset($pageData['tours']) && count($pageData['tours']) > 0)
    <div class="container-body px-3">
        <div class="tittles d-flex align-items-baseline justify-content-center gap-3 my-4">
            <img src="{{asset('forntend/images/line_icon-left.png')}}" alt="Image 1">
            <h2 style="color: #2A425A;"><span class="fw-bold tittle-heading">Upcoming Tours</span> </h2>
            <img src="{{asset('forntend/images/line_icon_right.png')}}" alt="Image 2">
        </div>
    </div>
    <div class="container-body px-3">
        <div class="row px-3">
            @php $row=1; @endphp
            
            @foreach($pageData['tours'] as $key=>$month)
            <div class="col-md-4 px-0">
                @php 
                if($row==1){
                    $mNo="one";
                }elseif($row==2){
                    $mNo="two";
                }else{
                    $mNo="three";
                }
                @endphp
                <div class="calndr-head-{{$mNo}}">
                    <h3 class="t-month">{{$key}}</h3>
                </div>
               @foreach($month as $mdata)
                <div class="t-types">
                    @if(str_contains($mdata->type, 'Fly'))
                    <img class="tvia-img" src="{{asset('forntend/images/travel-via-1.png')}}" alt="" />
                    @elseif(str_contains($mdata->type, 'Cruise'))
                    <img class="tvia-img" src="{{asset('forntend/images/travel-via-3.png')}}" alt="" />
                    @else
                    <img class="tvia-img" src="{{asset('forntend/images/travel-via-2.png')}}" alt="" />
                    @endif
                    <div>
                        <h4 class="t-name">{{$mdata['destination']}}</h4>
                        <p class="t-dec">( {{$mdata['start_date']}} to {{$mdata['end_date']}} ) <span class="t-day">{{date('D',strtotime($mdata['start_date']))}} - {{date('D',strtotime($mdata['end_date']))}}</span> </p>
                        <p class="t-date">{{$mdata['no_of_days']}} {{$mdata['num_of_days']==1?"Day":"Days"}} Tour</p>
                    </div>
                </div>
                 @endforeach
                 @php $row++; @endphp
                

            </div>
             @endforeach
            
          

        </div>
    </div>
     @endif
    <!-- travel calander section end -->
     @if(isset($pageData['flyers']) && count($pageData['flyers']) > 0)
    <div class="container-body px-3 mt-5 mb-5">
        <div class="row  info-container">
            @foreach(@$pageData['flyers'] as $fldata)
            <?php //echo'<pre>';print_r($fldata);echo'</pre>';?>
            <div class="col-lg-4 col-md-6">
                <div class="info-card">
                    <div class="home-card-image-sec">
                    <img class="info-card-img" src="{{asset(asset(@$fldata['image_url']))}}" alt="see Info">
                    </div>
                    {{-- <div class="d-block d-md-flex align-item-lg-center justify-content-between mt-4">
                        <!-- <button class="info-btn flyer-info" data-title="{{@$fldata['title']}}">More Info</button> -->
                        <button class="info-btn " ><a href="{{ asset(asset(@$fldata['pdfFile'])) }}" target="_blank" style="color:#2A425A; text-decoration: none;">More Info</a></button>
                        @if(@$fldata['book_now_link']!='')
                        <button class="down-btn-to"> <a href="{{@$fldata['book_now_link']}}" target="_blank" style="color:white; text-decoration: none;">Book Now</a></button>
                        @else
                        <button class="down-btn-to"> <a href="javascript:void(0)"  style="color:white; text-decoration: none;">Book Now</a></button>
                        @endif
                    </div> --}}

                    <div class="d-block d-md-flex align-items-lg-center justify-content-between mt-4">
                        <!-- More Info Button -->
                        <button class="info-btn">
                            <a href="{{ asset(@$fldata['pdfFile'] ?? 'path/to/default-pdf.pdf') }}" target="_blank" style="color:#2A425A; text-decoration: none;">More Info</a>
                        </button>

                        <!-- Video Button -->
                        @if(!empty($fldata['video_link']))
                        <button class="info-btn">
                            <a href="{{ asset('video/'.$fldata['video_link']) }}" target="_blank" style="color:#2A425A; text-decoration: none;">Video</a>
                        </button>
                    @endif

                        <!-- Book Now Button -->
                        @if(!empty($fldata['book_now_link']))
                            <button class="down-btn-to">
                                <a href="{{ @$fldata['book_now_link'] }}" target="_blank" style="color:white; text-decoration: none;">Book Now</a>
                            </button>
                        @else
                            <button class="down-btn-to" style="margin-right: 10px;">
                                <a href="javascript:void(0)" style="color:white; text-decoration: none;">Book Now</a>
                            </button>
                        @endif


                    </div>




                    <!-- Video Modal -->
                    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="videoModalLabel">Video</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <video id="videoPlayer" width="100%" controls>
                                        <source src="{{ @$fldata['video_link'] }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            @endforeach
          
        </div>
        <!-- <div class="text-center mt-3">
            <button class="content-btn rounded px-4 py-1 fw-normal fs-normal" style="font-size: 16px;">See Less</button>
        </div> -->
    </div>
    @endif


    <div class="last-sec-trip">
        <div class="container-body px-3">
            <div class="row text-center text-md-start">
                <div class="col-lg-8">
                    <div class="d-m-heading align-items-baseline justify-content-center justify-content-md-start">
                        <h3 class="text-color fw-bold fs-5">{{@$pageData['trip']['trip_heading']}}</h3>
                        <img class="tripe-line" src="{{asset('forntend/images/yellow-line.png')}}" alt="heading-Line">
                    </div>

                    <div>
                        
                        {!! @$pageData['trip']['trip_description'] !!}
                    </div>

                    <h3 class="client-no-heading text-center text-md-start">{{@$pageData['trip']['trip_tool_free_text']}} <br>
                        <span class="client-no text-center text-md-start">{{@$pageData['trip']['trip_cell_no']}}</span>
                    </h3>

                    <div>
                        <a href="{{ @$pageData['trip']['trip_info_url'] }}">
                            <button class="down-btn">Information</button>
                        </a>
                        <a href="{{ @$pageData['trip']['trip_claims_url'] }}">
                            <button class="down-btn-to" style="margin-bottom: 10px">Claims</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div >
                        <img class="img-fluid"  src="{{asset(@$pageData['trip']['trip_img'])}}" alt="">
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- footer section start -->

   @include('forntend.layouts.footer')
    <!-- gallery script start -->
    <script>


        $(document).ready(function(){
            $('.flyer-info').on("click",function(){
                var title = $(this).data('title');
                window.location.href = '/detail?title='+title+'';
            });

            

        });




                        $('#videoModal').on('hidden.bs.modal', function () {
                            var video = document.getElementById("videoPlayer");
                            video.pause();
                            video.currentTime = 0;
                        });
                    </script>

    <!-- gallery script end -->

</body>

</html>
