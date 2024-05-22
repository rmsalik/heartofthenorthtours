
@include('forntend.layouts.header')

<body>
    <!-- topbar start -->

    <!-- topbar end -->

    <!-- navbar setction start -->


    @include('forntend.layouts.navbar')




    <div class="about-us-hero contact-page">
        <div class="image">
            <div class="about-us-haeding text-center">
                <h1 class="mb-0 mb-md-3">Our Newsletter</h1>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-decoration-none text-white"
                                href="{{asset('/')}}">Home</a></li>
                                <li> <img class="mx-3" src="{{asset('forntend/images/next_icon.png')}}" alt="Icon" class="next_icon"> </li>
                                <li class="breadcrumb-item" aria-current="page">Newsletter</li>
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
                    <h2 style="color: #2A425A; text-align: center;"><span class="fw-bold tittle-heading">Better Group Travel is clicks away! Heart of the North Tours Email</span></h2>
                    <img src="{{asset('forntend/images/Line-icon-right.png')}}" alt="Image 2">
                </div>
            </div>
            <div class="container">
                <p style="text-align: center; margin-top: 10px;">Heart of the North Tours is never frivolous with your details! We keep your info private! No sharing, no selling - EVER! We aren't being nosy! Sharing more of your contact details will help us avoid delivery issues, and we may send you a special offer by mail! Stay up-to-date on TOURS! Hop On!! Better Group Travel awaits you!</p>
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
                                                class="fw-bold tittle-heading">Keep IN TOUCH</span></h4>
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
                                        <form action="{{route('subscribe.form')}}" method="post" >
                                            @csrf
                                            <div class="row ">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                                    <input type="text" class="form-control bg-light mb-4"
                                                id="exampleFormControlInput1" name="first_name" placeholder="First Name"
                                                pattern="[A-Za-z]+"  title="Please enter only letters" required>
                                            <input type="text" class="form-control bg-light  " name="last_name"
                                                id="exampleFormControlInput1" placeholder="Last Name" pattern="[A-Za-z]+"
                                                title="Please enter only letters" required>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                            <input type="email" class="form-control bg-light mb-4"
                                                id="exampleFormControlInput1" name="email" placeholder="Email"
                                                required>

                                            <input type="text" class="form-control bg-light  " name="city"
                                                id="exampleFormControlInput1" placeholder="City" required>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                            <input type="text" class="form-control bg-light mb-4"
                                                id="exampleFormControlInput1" name ="state" placeholder="State"
                                                required>
                                            <input type="number" class="form-control bg-light " name="postal_code"
                                                id="exampleFormControlInput1" placeholder="Postal Code" required>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                            <input type="number" class="form-control bg-light mb-4"
                                                id="exampleFormControlInput1" name ="phone_number" placeholder="Phone number"
                                                required>
                                            <input type="text" class="form-control bg-light " name="facebook"
                                                id="exampleFormControlInput1" placeholder="Facebook" >
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                            <input type="number" class="form-control bg-light mb-4"
                                                id="exampleFormControlInput1" name ="mobile_number" placeholder="Mobile number" >

                                        </div>

                                        {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3 ">
                                            <div class="form-floating">
                                                <textarea class="form-control bg-light " placeholder="Leave a comment here" id="floatingTextarea2" name="message"
                                                    style="height: 100px"></textarea>
                                                <label for="floatingTextarea2"></label>
                                            </div>
                                        </div> --}}
                                        <div class="container text-center">
                                            <button class="center-button" type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 px-0">
                            <div class="right-box h-100 d-none d-md-block">
                                <img class="img-fluid h-100 w-100" src="{{ asset('forntend/images/form-img.png') }}"
                                    class=" img-fluid " alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
</div>




@include('forntend.layouts.footer')


</body
