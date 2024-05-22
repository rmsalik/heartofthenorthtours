@include('forntend.layouts.header')

<body>
    <!-- topbar start -->

    <!-- topbar end -->

    <!-- navbar setction start -->


    @include('forntend.layouts.navbar')

    <div class="reviews-page about-us-hero contact-page ">
        <div class="image">
            <div class="about-us-haeding text-center">
                <h1 class="mb-0 mb-md-3">REVIEWS</h1>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white"
                                    href="{{asset('/')}}">Home</a></li>
                            <li> <img class="mx-3" src="{{asset('forntend/images/next_icon.png')}}" alt="Icon" class="next_icon"> </li>
                            <li class="breadcrumb-item" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>

       <!-- reviews content start -->
       <div class="container mt-5">
        <div class="tittles d-flex align-items-baseline justify-content-center gap-4">
            <img src="{{asset('img/login_img/line-icon-left.png')}}" alt="Image 1">
            <h2 style="color: #2A425A; text-align: center;"><span class="fw-bold tittle-heading">WHAT CLIENTS SAY</span>
            </h2>
            <img src="{{asset('img/login_img/Line-icon-right.png')}}" alt="Image 2">
        </div>
    </div>
    <div class="container text-center mt-2">
        <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
    </div>

    <section class="reviews-content">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-1.png')}}" class="img" alt="...">
                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-2.png')}}" class="img" alt="...">
                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-3.png')}}" class="img" alt="...">
                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-5.png')}}" class="img" alt="...">
                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-6.png')}}" class="img" alt="...">
                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-7.png')}}" class="img" alt="...">
                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-8.png')}}" class="img" alt="...">
                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="testimonial-card d-block text-md-start d-md-flex  gap-4 align-items-center">
                        <div class="testimonial-image-sec mb-3 mb-md-0">
                            <img src="{{asset('forntend/images/reviews-img-1.png')}}" class="img" alt="...">

                        </div>
                        <div class="testimonial-detail">
                            <div class="d-flex align-items-center justify-content-between">
                                <img class="img-fluid" style="width: 30px; height: auto;" src="{{asset('forntend/images/quotes.png')}}"
                                    alt="">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <h5 class="text-color mb-0">Mark Knieberg</h5>
                            <p>France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('forntend.layouts.footer')

</body>
