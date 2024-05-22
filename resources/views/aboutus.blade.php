<!DOCTYPE html>
<html lang="en">

@include('forntend.layouts.header')

<body>
    <!-- topbar start -->

    <!-- topbar end -->

    <!-- navbar setction start -->


    @include('forntend.layouts.navbar')
    <!-- navbar setction end -->


    <div class="about-us-hero">
        <div class="image">
            <div class="about-us-haeding text-center">
                <h1 class="mb-0 mb-md-3">ABOUT US </h1>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white" href="index.html">Home</a></li>
                            <li> <img class="mx-3" src="{{asset('forntend/images/next_icon.png')}}" alt="Icon" class="next_icon"></li>
                            <li class="breadcrumb-item" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div>
            <div class="tittles d-flex align-items-baseline justify-content-center gap-4">
                <img src="{{asset('img/login_img/line-icon-left.png')}}" alt="Image 1">
                <h2 style="color: #2A425A; text-align: center;"><span class="fw-bold tittle-heading">HEART OF THE NORTH TOURS DIFFERENCE</span></h2>
                <img src="{{asset('img/login_img/Line-icon-right.png')}}" alt="Image 2">
            </div>
        </div>
        <p class="text-center mt-2 fw-normal" style="color: rgba(96, 96, 96, 1);">Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>


        <div class="row  g-4 mt-3">
            <div class="col-12 -col-sm-12 col-md-6 col-lg-4">
                <div class="card d-flex align-items-center">
                    <div class="card-image-sec position-relative">
                        <img class="img-fluid blue-image" src="{{asset('forntend/images/card1.png')}}" class="card-img-top" alt="...">
                        <div class="card-icons">
                            <img class="img-fluid " src="{{asset('forntend/images/card_icon1.png')}}" class="card-img-top" alt="...">
                        </div>

                    </div>
                    <div>
                        <h4 class="card-title mt-4">100% risk-free</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's...<span style="color: #2A425A; "><b>Read More</b></p>
                    </div>
                </div>
            </div>
            <div class="col-12 -col-sm-12 col-md-6 col-lg-4">
                <div class="card d-flex align-items-center">
                    <div class="card-image-sec position-relative">
                        <img class="img-fluid blue-image" src="{{asset('forntend/images/card1.png')}}" class="card-img-top" alt="...">
                        <div class="card-icons">
                            <img class="img-fluid" src="{{asset('forntend/images/card_icon2.png')}}" class="card-img-top" alt="...">
                        </div>

                    </div>
                    <div>
                        <h4 class="card-title mt-4">Roundtrip Airfare</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's...<span style="color: #2A425A; "><b>Read More</b></p>
                    </div>
                </div>
            </div>
            <div class="col-12 -col-sm-12 col-md-6 col-lg-4">
                <div class="card d-flex align-items-center">
                    <div class="card-image-sec position-relative">
                        <img class="img-fluid blue-image" src="{{asset('forntend/images/card1.png')}}" class="card-img-top" alt="...">
                        <div class="card-icons">
                            <img class="img-fluid" src="{{asset('forntend/images/card_icon3.png')}}  " class="card-img-top" alt="...">
                        </div>

                    </div>
                    <div>
                        <h4 class="card-title mt-4">Dedicated Tour Manager</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's...<span style="color: #2A425A; "><b>Read More</b></p>
                    </div>
                </div>
            </div>
            <div class="col-12 -col-sm-12 col-md-6 col-lg-4">
                <div class="card d-flex align-items-center">
                    <div class="card-image-sec position-relative">
                        <img class="img-fluid blue-image" src="{{asset('forntend/images/card1.png')}}" class="card-img-top" alt="...">
                        <div class="card-icons">
                            <img class="img-fluid" src="{{asset('forntend/images/card_icon4.png')}}" class="card-img-top" alt="...">
                        </div>

                    </div>
                    <div>
                        <h4 class="card-title mt-4">30+ Years of Excellence Service </h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's...<span style="color: #2A425A; "><b>Read More</b></p>
                    </div>
                </div>
            </div>
            <div class="col-12 -col-sm-12 col-md-6 col-lg-4 ">
                <div class="card d-flex align-items-center">
                    <div class="card-image-sec position-relative">
                        <img class="img-fluid blue-image" src="{{asset('forntend/images/card1.png')}}" class="card-img-top" alt="...">
                        <div class="card-icons">
                            <img class="img-fluid" src="{{asset('forntend/images/card_icon5.png')}}" class="card-img-top" alt="...">
                        </div>

                    </div>
                    <div>
                        <h4 class="card-title mt-4">Experience Your Destination</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's...<span style="color: #2A425A; "><b>Read More</b></p>
                    </div>
                </div>
            </div>
            <div class="col-12 -col-sm-12 col-md-6 col-lg-4 ">
                <div class="card d-flex align-items-center">
                    <div class="card-image-sec position-relative">
                        <img class="img-fluid blue-image" src="{{asset('forntend/images/card1.png')}}" class="card-img-top" alt="...">
                        <div class="card-icons">
                            <img class="img-fluid" src="{{asset('forntend/images/card_icon6.png')}}" class="card-img-top" alt="...">
                        </div>

                    </div>
                    <div>
                        <h4 class="card-title mt-4">Quality Accommodations</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's...<span style="color: #2A425A; "><b>Read More</b></p>
                    </div>
                </div>
            </div>


        </div>


        <!-- ceo section  start  -->
        <div class="ceo-section mt-5">
            <div class="text-overlay1 col-9 ">
                <div>
                    <div class="tittles d-flex align-items-baseline justify-content-center gap-3 mb-4">
                        <img src="{{asset('img/login_img/line-icon-left.png')}}" alt="Image 1">
                        <h2 style="color: #2A425A;"><span class="fw-bold tittle-heading">CEO Message</span> </h2>
                        <img src="{{asset('img/login_img/Line-icon-right.png')}}" alt="Image 2">
                    </div>
                </div>

                <div>
                    <h6 style="text-align: center; margin-top: 10px; color: #272727;  ">Lorem Ipsum is simply dummy text
                        of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's.Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's.

                    </h6>
                </div>

                <div class="conatiner1">
                    <img class="right-icon" src="{{asset('forntend/images/ceo_line.png')}}" alt="Image 1">
                    <h2 style="color: #2A425A;"> <span>William Worth</span> </h2>
                </div>
            </div>

        </div>


        <div class="container ">
            <div class="video-section mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="conatiner1 justify-content-start">
                                    <h2 style="color: #2A425A;"> <span>guest Protection plan</span> </h2>
                                    <img class="right-icon" src="{{asset('img/login_img/Line-icon-right.png')}}" alt="Image 2">
                                </div>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's. Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's. Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="col-lg-6 ">
                                <!-- Image Content -->
                                <!-- <img class="video-imgg img-fluid" src="./images/video_img.png" alt="Your Image"> -->
                                <!-- <video width="640" height="250" controls>
                                    <source src="./images/video.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video> -->
                                <div class="embed-responsive embed-responsive-16by9 mb-5">
                                    <video class="embed-responsive-item video-size" controls>
                                        <source src="{{asset('forntend/images/video.mp4')}}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="video-section mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="conatiner1 justify-content-start">
                                <h2 style="color: #2A425A;"> <span>CEO Message</span> </h2>
                                <img class="right-icon" src="./images/line_icon_right.png" alt="Image 2">
                            </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.Lorem
                                Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="col-lg-6">
                              <div class="embed-responsive embed-responsive-16by9">
                                <video class="embed-responsive-item" controls>
                                  <source src="./images/video.mp4" type="video/mp4">
                                </video>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- ceo section end    -->


        <!-- 4 card section start    -->


        <div class="row g-4">
            <h3 class="text-color fw-bold text-center my-0 my-md-4">Cancel for Any Reason & Receive a Full Refund</h3>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card111">
                    <div class="p-4">
                        <h5 class="text-color my-0 my-md-3 ">Cancel for Any Reason Cancellation Fee Waiver</h5>
                        <p class="card-text mt-2 mt-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card111">
                    <div class="p-4">
                        <h5 class="text-color my-0 my-md-3 ">Cancel for Any Reason Cancellation Fee Waiver</h5>
                        <p class="card-text mt-2 mt-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card111">
                    <div class="p-4">
                        <h5 class="text-color my-0 my-md-3 ">Cancel for Any Reason Cancellation Fee Waiver</h5>
                        <p class="card-text mt-2 mt-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                            <ul class="text-start">
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text.</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text.</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card111">
                    <div class="p-4">
                        <h5 class="text-color my-0 my-md-3 ">Cancel for Any Reason Cancellation Fee Waiver</h5>
                        <p class="card-text mt-2 mt-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's. Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4 card section end   -->


    <!-- our team section start -->
    <div class="card-sec-end mt-5 pb-5">
         <div class=" container our-team-section ">
        <div class="conatiner11 ">
            <img class="right-icon" src="{{asset('img/login_img/line-icon-left.png')}}" alt="Image 1">
            <h2 style="color: #2A425A;"> <span>OUR TEAM</span> </h2>
            <img class="right-icon" src="{{asset('img/login_img/Line-icon-right.png')}}" alt="Image 2">
        </div>
        <h6 style="text-align: center; margin-top: 10px; color: #272727;">Lorem Ipsum is simply dummy text of the
            printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book.
        </h6>
            <div>
                <div class="row mt-3">
                    <div class="col-12 -col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card d-flex justify-content-center align-items-center our-team-card mt-3">
                            <img src="{{asset('forntend/images/team1.png')}}" class="card-img-top rounded-bottom " alt="...">
                            <div class="card-body">
                                <h4 class="card-title">William Worth</h4>
                                <h6 style="color: #A4853D;"><i>_CEO</i></h6>
                                <p style="color: #2A425A; margin-bottom: 0;">Favorite Tour: Tourant Rockies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 -col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card d-flex justify-content-center align-items-center our-team-card mt-3">
                            <img src="{{asset('forntend/images/t2.png')}}" class="card-img-top rounded-bottom " alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Dose Cretanian</h4>
                                <h6 style="color: #A4853D;"><i>_COO</i></h6>
                                <p style="color: #2A425A; margin-bottom: 0;">Favorite Tour: Tourant Rockies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 -col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card d-flex justify-content-center align-items-center our-team-card mt-3">
                            <img src="{{asset('forntend/images/t3.png')}}" class="card-img-top rounded-bottom " alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Alirail will</h4>
                                <h6 style="color: #A4853D;"><i>_President</i></h5>
                                <p style="color: #2A425A; margin-bottom: 0;">Favorite Tour: Tourant Rockies</h>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 -col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card d-flex justify-content-center align-items-center our-team-card mt-3">
                            <img src="{{asset('forntend/images/t4.png')}}" class="card-img-top rounded-bottom " alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Damn Stirean</h4>
                                <h6 style="color: #A4853D;"><i>_Marketing</i></h6>
                                <p style="color: #2A425A; margin-bottom: 0;">Favorite Tour: Tourant Rockies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 -col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card d-flex justify-content-center align-items-center our-team-card mt-3">
                            <img src="{{asset('forntend/images/t5.png')}}" class="card-img-top rounded-bottom " alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Lisk Era</h4>
                                <h6 style="color: #A4853D;"><i>_CEO</i></h5>
                                <p style="color: #2A425A; margin-bottom: 0;">Favorite Tour: Tourant Rockies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 -col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card d-flex justify-content-center align-items-center our-team-card mt-3">
                            <img src="{{asset('forntend/images/t6.png')}}" class="card-img-top rounded-bottom " alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Easter Mickel</h3>
                                <h6 style="color: #A4853D;">_Lead Tour Manager</h5>
                                <p style="color: #2A425A; margin-bottom: 0;">Favorite Tour: Tourant Rockies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
















    <!-- footer section start -->


    @include('forntend.layouts.footer')
    <!-- footer section end -->




    <!-- Javascript -->


</body>

</html>
