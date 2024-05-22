

<div class="topbar d-none d-lg-block">
    <div class="container-body  px-3" style="text-align: -webkit-center;">
        <div class="row align-items-center w-100">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="d-flex align-items-baseline flex-wrap justify-content-center justify-content-sm-end">
                    @if(request()->is('/')) <!-- Check if the current URL is 'home' -->
                        <div class="topbar-links d-flex align-items-center">
                            <a class="text-white text-decoration-none" href="mailto:">
                                <span><i class="fa fa-envelope me-2 fs-5"></i></span>
                                {{ @$pageData['footer_ql']['quick_links_info_email'] }}
                            </a>
                        </div>
                        <div class="topbar-links d-flex align-items-end mt-lg-0 mt-3 ms-4">
                            <a class="text-white text-decoration-none" href="tellto:">
                                <span><i class="fa fa-phone me-2 fs-5"></i></span>
                                {{ @$pageData['footer_ql']['quick_links_cell_no'] }}
                            </a>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 pe-0">
                <div class="topbar-btn text-lg-end text-center">
                    <a href="https://www.bbb.org/us/mn/saint-paul/profile/tour-operators/heart-of-the-north-tours-0704-1000051623#sealclick"><img class=" me-md-2 me-0 mt-lg-0 mt-3 img-fluid"
                        src="{{ asset('forntend/images/top-btn.png') }}" alt=""></a>
                        <a href="https://www.mnseniorsonline.com/">
                            <img class="mt-lg-0 mt-3 img-fluid"src="{{ asset('forntend/images/top-btn2.png') }}"
                            alt=""></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar end -->

        <!-- navbar setction start -->
        <div class="mobile-view d-lg-none">
            <div class="topbar d-flex align-items-center justify-content-end gap-3">
                <div class="topbar-btn text-lg-end text-center">
                    <a href="#"><img class=" me-md-2 me-0  img-fluid" src="{{ asset('forntend/images/top-btn.png') }}"
                        alt=""></a>
                        <a href="#"><img class=" img-fluid" src="{{ asset('forntend/images/top-btn2.png') }}"
                            alt=""></a>
                        </div>
                        <button class="btn mobile-bars" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasRightLabel" class="text-color fw-bold text-start">HEART OF THE NORTH TOURS</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <ul class="mobile-view-links text-start ps-3">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('/') }}">HOME</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('tours/all') ? 'active' : '' }}" href="{{ url('/tours',['type'=>'all']) }}">TOURS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('reviews') ? 'active' : '' }}"
                                href="{{ url('/reviews') }}">REVIEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}"
                                href="{{ url('/contact-us') }}">CONTACT US</a>
                            </li>
                            <button class="navbar-btn newsletter-subs" >SUBSCRIBE TO OUR NEWSLETTER</button>
                        </ul>
                    </div>
                </div>


                <div class="navigationbar">
                    <div class="container-body px-3">
                        <div class="logo">
                            <a href="{{url('/')}}"><img class="img-fluid" src="{{ asset('forntend/images/logo.png') }}" alt=""></a>
                        </div>
                        <nav class="desktop-view navbar navbar-expand-lg d-none d-lg-block">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ju justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                    href="{{ url('/') }}">HOME</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('tours/all') ? 'active' : '' }}" href="{{ url('/tours',['type'=>'all']) }}">TOURS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('reviews') ? 'active' : '' }}"
                                    href="{{ url('/reviews') }}">REVIEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}"
                                    href="{{ url('/contact-us') }}">CONTACT US</a>
                                </li>
                                <button class="navbar-btn " id="subscribeButton"
                                style="color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 1px;">SUBSCRIBE
                                TO OUR NEWSLETTER
                            </button>
                        </ul>
                <!-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
          </div>
      </nav>
  </div>
</div>

<script>
    // Get the button element
    const subscribeButton = document.getElementById('subscribeButton');
    // Add click event listener to the button
    subscribeButton.addEventListener('click', function() {
        // Redirect to the newsletter page
        window.location.href = "{{ url('/newsletter') }}";
    });
</script>
