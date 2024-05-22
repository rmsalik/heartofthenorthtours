
@include('forntend.layouts.header')

<body>
    <!-- topbar start -->

    <!-- topbar end -->

    <!-- navbar setction start -->


    @include('forntend.layouts.navbar')




    <div class="about-us-hero contact-page">
        <div class="image">
            <div class="about-us-haeding text-center">
                <h1 class="mb-0 mb-md-3">CONTACT US</h1>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white"
                                href="{{asset('/')}}">Home</a></li>
                                <li> <img class="mx-3" src="{{asset('forntend/images/next_icon.png')}}" alt="Icon" class="next_icon"> </li>
                                <li class="breadcrumb-item" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container mt-5">
                <div class="tittles d-flex align-items-baseline justify-content-center gap-4">
                    <img src="{{asset('img/login_img/line-icon-left.png')}}" alt="Image 1">
                    <h2 style="color: #2A425A; text-align: center;"><span class="fw-bold tittle-heading">Have Questions
                    About Your Trip?</span></h2>
                    <img src="{{asset('forntend/images/Line-icon-right.png')}}" alt="Image 2">
                </div>
            </div>
            <div class="container">
                <p style="text-align: center; margin-top: 10px;">You can easily book or get answers to all questions about any of our others by calling toll-free at:
                1(833) 424-2700</p>
            </div>
            <div class="form-section bg-light mt-5">
                <div class="container">
                    <div class="main-form-div">
                        <div class="row gy-4">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 px-0">
                                <div class="left-box bg-white text-dark  h-100 p-4">
                                    <div class="diagram">
                                        <h4 style="color: #BEAE7F; text-align: center;"> <span>Fill The Form</span> </h4>
                                        <div class="tittles d-flex align-items-baseline justify-content-center gap-4">
                                            <img src="{{asset('forntend/images/line_icon-left.png')}}" alt="Image 1">
                                            <h4 style="color: #2A425A; text-align: center;"><span
                                                class="fw-bold tittle-heading">GET IN TOUCH</span></h4>
                                                <img src="{{asset('forntend/images/line_icon_right.png')}}" alt="Image 2">
                                            </div>
                                        </div>
                                        @if(session('success'))
                                        <div class="alert alert-success" id="successMessage">
                                            {{ session('success') }}
                                        </div>
                                        @endif
                                        @if(session('error'))
                                        <div class="alert alert-danger" id="successMessage">
                                            {{ session('error') }}
                                        </div>
                                        @endif
                                        <form action="{{route('contact.form')}}" method="post" >
                                            @csrf
                                            <div class="row ">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                                                    <input type="text" class="form-control bg-light mb-4"
                                                    id="exampleFormControlInput1" name="full_name" value="{{old('full_name')}}" placeholder="Full Name" required>
                                                    <input type="number" class="form-control bg-light  " name="phone" value="{{old('phone')}}" id="exampleFormControlInput1"
                                                    placeholder="Phone Number" required>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                                                    <input type="email" class="form-control bg-light mb-4"
                                                    id="exampleFormControlInput1" name ="email" value="{{old('email')}}" placeholder="Email Address" required>
                                                    <input type="text" class="form-control bg-light " name="subject" value="{{old('subject')}}" id="exampleFormControlInput1"
                                                    placeholder="Subject" required>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3 ">
                                                    <div class="form-floating">
                                                        <textarea class="form-control bg-light " placeholder="Leave a comment here"
                                                        id="floatingTextarea2" name="message" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2"></label>
                                                    </div>
                                                </div>
                                                <div class="container text-center">
                                                    <button class="center-button" type="submit">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 px-0">
                                    <div class="right-box h-100 d-none d-md-block">
                                        <img class="img-fluid h-100 w-100" src="{{asset('forntend/images/form-img.png')}}" class=" img-fluid " alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--             <div class="contact-links">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="mainemail">
                                <img class="img-fluid" src="{{asset('forntend/images/contact-mail-img.png')}}" alt="">
                                <h4 class="mt-4">Email</h4>
                                <a class="text-white text-decoration-none"
                                    href="mailto:">info@heartofthenorthtour.com</a>
                            </div>

                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="mainemail">
                                <img class="img-fluid" src="{{asset('forntend/images/contact-phone-img.png')}}" alt="">
                                <h4 class="mt-4">Phone</h4>
                                <a class="text-white text-decoration-none" href="callto:">(222) 555-0120-000</a>
                            </div>

                        </div>
                        <div class="col-12 col-sm-12 col-md-6 mx-auto col-lg-4">
                            <div class="mainemail">
                                <img class="img-fluid" src="{{asset('forntend/images/address-img.png')}}" alt="">
                                <h4 class="mt-4">Address</h4>
                                <a class="text-white text-decoration-none" href="#">11580 State Route 44 #1016 Mantua,
                                    OH
                                    44255 United States</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="mbox ">
            <div class="container">
                <div class="map">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.5677981546216!2d-122.41971418468173!3d37.77492997975751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580b3c3ef3b23%3A0x37c93f9617b41105!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2suk!4v1648010021861!5m2!1sen!2suk"
                    width="100%" height="400" style="border: 1px;;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>




@include('forntend.layouts.footer')


</body
