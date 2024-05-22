 @include('forntend.layouts.header')

<body>
    <!-- topbar start -->

    <!-- topbar end -->

    <!-- navbar setction start -->


    @include('forntend.layouts.navbar')



        <div class="tour-page about-us-hero contact-page ">
            <div class="image">
                <div class="about-us-haeding text-center">
                    <h1 class="mb-0 mb-md-3">TOURS</h1>
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-decoration-none text-white"
                                        href="{{url('/')}}">Home</a></li>
                                <li> <img class="mx-3" src="{{asset('forntend/images/next_icon.png')}}" alt="Icon" class="next_icon"> </li>
                                <li class="breadcrumb-item" aria-current="page">Tours</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tour page hero sec end -->

        <!-- tour content start -->
        <div class="container mt-5">
            <div class="tittles d-flex align-items-baseline justify-content-center gap-4">
                <img src="{{asset('img/login_img/line-icon-left.png')}}" alt="Image 1">
                <h2 style="color: #2A425A; text-align: center;"><span class="fw-bold tittle-heading text-uppercase">Popular
                        Tour Package </span>
                </h2>
                <img src="{{asset('forntend/images/line_icon_right.png')}}" alt="Image 2">
            </div>
        </div>
       <!--  <div class="container text-center mt-2">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
            </p>
        </div> -->

     <section class="tour-card-sec">
         <div class="container mt-4">
             <div class="row">


                @foreach($pageData['tours'] as $key => $month)
                    @foreach($month as $mdata)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                            <div class="card t-card text-center">
                                    <div class="card-header">
                                        {{-- <h5 class="card-tumb">${{$mdata['price']}}/pack</h5> --}}
                                        <img class="Tcard-img" src="{{ asset($mdata['image_url']) }}" alt="card-img"> <!-- Use dynamic image path -->
                                    </div>
                                    <div class="Tcard-body">
                                        <h5 class="t-card-title">{{$mdata['info']}}</h5>
                                        {{-- <p class="t-card-text">{{$mdata['description']}}</p> --}}
                                        <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                                    </div>
                                    <div class="d-flex card-foot">
                                        <div class="card-footer-data text-muted">
                                            <img src="{{asset('forntend/images/Tcard-icons (1).png')}}" alt="">
                                            <p class="card-footer-des">{{$mdata['location']}}</p>
                                    </div>
                                    <div class="card-footer-data text-muted">
                                        <img src="{{asset('forntend/images/Tcard-icons (2).png')}}" alt="">
                                        <p class="card-footer-des">{{$mdata['no_of_days']}} {{$mdata['no_of_days'] == 1 ? "Day" : "Days"}}</p>
                                    </div>
                                    <div class="card-footer-data text-muted">
                                        <img src="{{asset('forntend/images/Tcard-icons (3).png')}}" alt="">
                                        <p class="card-footer-des">{{date('F j, Y', strtotime($mdata['start_date']))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

                    {{-- @foreach ($pageData['tours'] as $key => $month)
                        @foreach ($month as $mdata)
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                                <div class="card t-card text-center">
                                    <div class="card-header">
                                        <h5 class="card-tumb">${{ $mdata['price'] }}/pack</h5>
                                        @if ($mdata->type == 'plane')
                                            <img class="Tcard-img" src="{{ asset('forntend/images/travel-via-2.png') }}"
                                                alt="card-img">
                                        @elseif($mdata->type == 'cruise')
                                            <img class="Tcard-img" src="{{ asset('forntend/images/travel-via-3.png') }}"
                                                alt="card-img">
                                        @else
                                            <img class="Tcard-img" src="{{ asset('forntend/images/travel-via-1.png') }}"
                                                alt="card-img">
                                        @endif
                                    </div>
                                    <div class="Tcard-body">
                                        <h5 class="t-card-title">{{ $mdata['info'] }}</h5> --}}
                                        {{-- <h5 class="t-card-title">{{$mdata['destination']}}</h5> --}}
                                        {{-- <p class="t-card-text">{{$mdata['description']}}</p> --}}
                                        {{-- <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                                    </div>
                                    <div class="d-flex card-foot">
                                        <div class="card-footer-data text-muted">
                                            <img src="{{ asset('forntend/images/Tcard-icons (1).png') }}" alt="">
                                            <p class="card-footer-des">{{ $mdata['location'] }}</p>
                                        </div>
                                        <div class="card-footer-data text-muted">
                                            <img src="{{ asset('forntend/images/Tcard-icons (2).png') }}" alt="">
                                            <p class="card-footer-des">{{ $mdata['no_of_days'] }}
                                                {{ $mdata['no_of_days'] == 1 ? 'Day' : 'Days' }}</p>
                                        </div>
                                        <div class="card-footer-data text-muted">
                                            <img src="{{ asset('forntend/images/Tcard-icons (3).png') }}" alt="">
                                            <p class="card-footer-des">
                                                {{ date('F j, Y', strtotime($mdata['start_date'])) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach --}}


                 {{-- <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                        <div class="card t-card text-center">
                            <div class="card-header">
                                <h5 class="card-tumb">$500/pack</h5>
                                <img class="Tcard-img" src="{{asset('forntend/images/Tcard (6).png')}}" alt="card-img">
                            </div>
                            <div class="Tcard-body">
                                <h5 class="t-card-title">Sierra Nevada Tour</h5>
                                <p class="t-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                            </div>
                            <div class="d-flex card-foot">
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (1).png')}}" alt="">
                                    <p class="card-footer-des">California</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (2).png')}}" alt="">
                                    <p class="card-footer-des">5 Days</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (3).png')}}" alt="">
                                    <p class="card-footer-des">June 30, 2024</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                        <div class="card t-card text-center">
                            <div class="card-header">
                                <h5 class="card-tumb">$500/pack</h5>
                                <img class="Tcard-img" src="{{asset('forntend/images/Tcard (5).png')}}" alt="card-img">
                            </div>
                            <div class="Tcard-body">
                                <h5 class="t-card-title">Hiking at Newzealand</h5>
                                <p class="t-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                            </div>
                            <div class="d-flex card-foot">
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (1).png')}}" alt="">
                                    <p class="card-footer-des">California</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (2).png')}}" alt="">
                                    <p class="card-footer-des">5 Days</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (3).png')}}" alt="">
                                    <p class="card-footer-des">June 30, 2024</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                        <div class="card t-card text-center">
                            <div class="card-header">
                                <h5 class="card-tumb">$500/pack</h5>
                                <img class="Tcard-img" src="{{asset('forntend/images/Tcard (4).png')}}" alt="card-img">
                            </div>
                            <div class="Tcard-body">
                                <h5 class="t-card-title">Family Outbound</h5>
                                <p class="t-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                            </div>
                            <div class="d-flex card-foot">
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (1).png')}}" alt="">
                                    <p class="card-footer-des">California</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (2).png')}}" alt="">
                                    <p class="card-footer-des">5 Days</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (3).png')}}" alt="">
                                    <p class="card-footer-des">June 30, 2024</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                        <div class="card t-card text-center">
                            <div class="card-header">
                                <h5 class="card-tumb">$500/pack</h5>
                                <img class="Tcard-img" src="{{asset('forntend/images/Tcard (3).png')}}" alt="card-img">
                            </div>
                            <div class="Tcard-body">
                                <h5 class="t-card-title">Hiking at Jogja</h5>
                                <p class="t-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                            </div>
                            <div class="d-flex card-foot">
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (1).png')}}" alt="">
                                    <p class="card-footer-des">California</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (2).png')}}" alt="">
                                    <p class="card-footer-des">5 Days</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (3).png')}}" alt="">
                                    <p class="card-footer-des">June 30, 2024</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                        <div class="card t-card text-center">
                            <div class="card-header">
                                <h5 class="card-tumb">$500/pack</h5>
                                <img class="Tcard-img" src="{{asset('forntend/images/Tcard (2).png')}}" alt="card-img">
                            </div>
                            <div class="Tcard-body">
                                <h5 class="t-card-title">Explore Indonesian Forest</h5>
                                <p class="t-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                            </div>
                            <div class="d-flex card-foot">
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (1).png')}}" alt="">
                                    <p class="card-footer-des">California</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (2).png')}}" alt="">
                                    <p class="card-footer-des">5 Days</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (3).png')}}" alt="">
                                    <p class="card-footer-des">June 30, 2024</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2">
                        <div class="card t-card text-center">
                            <div class="card-header">
                                <h5 class="card-tumb">$500/pack</h5>
                                <img class="Tcard-img" src="{{asset('forntend/images/Tcard (1).png')}}" alt="card-img">
                            </div>
                            <div class="Tcard-body">
                                <h5 class="t-card-title">Teen Campaing Tour</h5>
                                <p class="t-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <a href="#" class="btn btn-primary t-card-btn">Book Now</a>
                            </div>
                            <div class="d-flex card-foot">
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (1).png')}}" alt="">
                                    <p class="card-footer-des">California</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (2).png')}}" alt="">
                                    <p class="card-footer-des">5 Days</p>
                                </div>
                                <div class="card-footer-data text-muted">
                                    <img src="{{asset('forntend/images/Tcard-icons (3).png')}}" alt="">
                                    <p class="card-footer-des">June 30, 2024</p>
                                </div>
                            </div>
                        </div>

                    </div> --}}


                </div>

            </div>

    <!--         <div class="v-background mt-5">
            </div>
            <div class="container Video">
                <div id="video-container">
                    <video class="video-sec" id="video" controls>
                        <source src="{{asset('forntend/video/tour-video.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button class="play-button" id="play-pause-button">
                    </button>
                </div>
            </div> -->
           <!--  <div class="container mb-5 mt-5 T-about-sec">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="t-abt-hd">
                            <h3 class="text-color text-uppercase">We make dreams come true!</h3>
                            <img class="abt-hding-line" src="{{asset('forntend/images/Blue-line.png')}}" alt="">
                        </div>
                        <p class="t-abt-hd-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing
                            and
                            typesetting industry. Lorem Ipsum has been the industry's. Lorem Ipsum is simply dummy text of
                            the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <img class="t-about-img" src="{{asset('forntend/images/T-about.png')}}" alt="About-img">
                    </div>
                </div>
            </div> -->

 <!--         <div class="container mb-5 mt-5 discount-offers">
             <div class="row">
                 <div class="col-lg-5 col-md-6 my-2 ">
                     <div class="left-box rounded-0 align-item-sm-start align-item-lg-end">
                         <div>
                             <div class="discount-hd">
                                 <h2 class="main-h">Discount up 50%</h2>
                                 <img class="abt-hding-line" src="{{ asset('forntend/images/White-line.png') }}"
                                     alt="">
                             </div>
                             <p class="dicount-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                             <button class="discont-btn">discover More</button>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-7 col-md-6 my-2">
                     <div class="right-box rounded-0 align-item-sm-start align-item-lg-end">
                         <div>
                             <div class="discount-hd">
                                 <h2 class="main-h">New Destination</h2>
                                 <img class="abt-hding-line" src="{{ asset('forntend/images/White-line.png') }}"
                                     alt="">
                             </div>
                             <p class="dicount-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                             <button class="discont-btn">discover More</button>
                         </div>
                     </div>
                 </div>

                </div>
            </div> -->

         <!-- <div class="container mb-5">
             <div class="row">
                 <div class="main-h-con">
                     <img class="img-fluid arow-img" src="{{ asset('img/login_img/line-icon-left.png') }}"
                         alt="Image 1">
                     <h2 class="h2-heading">Popular Tour Package</h2>
                     <img class="img-fluid arow-img" src="{{ asset('img/login_img/Line-icon-right.png') }}"
                         alt="Image 2">
                 </div>
                 <h6 class="head-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                     Ipsum
                     has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                     galley
                     of type and scrambled it to make a type specimen book.
                 </h6>
             </div>

                <div class="row fc-card-row equal-height-row mt-5">

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2 equal-height-col">
                        <div class="card fc-card text-center">
                            <div class="img-fluid fc-card-header position-relative">
                                <img class="fc-icon" src="{{asset('forntend/images/c-icon-1.png')}}" alt="">
                                
                            </div>
                            <div class="fc-card-body">
                                <h5 class="fc-card-title">Experienced</h5>
                                <p class="fc-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when
                                    an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2 equal-height-col">
                        <div class="card fc-card text-center">
                            <div class="img-fluid fc-card-header position-relative">
                                <img class="fc-icon" src="{{asset('forntend/images/c-icon-2.png')}}" alt="">
                               
                            </div>
                            <div class="fc-card-body">
                                <h5 class="fc-card-title">Affordable Price</h5>
                                <p class="fc-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when
                                    an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2 px-2 equal-height-col">
                        <div class="card fc-card text-center">
                            <div class="img-fluid fc-card-header position-relative">
                                <img class="fc-icon" src="{{asset('forntend/images/c-icon-3.png')}}" alt="">
                                
                            </div>
                            <div class="fc-card-body">
                                <h5 class="fc-card-title">24/7 Support</h5>
                                <p class="fc-card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when
                                    an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div> -->


        </section>



    @include('forntend.layouts.footer')

</body>
