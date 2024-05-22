@php 
$quick_linksDataData= \App\Models\Settings::where('type','quick_links')->get();
if($quick_linksDataData){
foreach ($quick_linksDataData as $key => $qld) {
$pagedetails['quick_links'][$qld['settings_name']] = $qld['settings_value'];
}
}
$footer_ql=isset($pagedetails['quick_links'])?$pagedetails['quick_links']:[];

$ql_data     = \App\Models\QuickLink::all();
$categories  = \App\Models\Categories::all();

@endphp

<div class="footer-main">
    <div class="container-body px-3">
        <div class="row footer-main-row pt-3">

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 ftr-colone">



                <a href="{{url('/')}}"><img class="Footer-logo img-fluid" src="{{asset(@$footer_ql['quick_links_logo'])}}" alt="Footer-logo"></a>
                <P class="footer-des text-center text-md-start">{!! @$footer_ql['quick_links_description'] !!}</P>
                <h4 class="no-heading text-center text-md-start">{{@$footer_ql['quick_links_tool_free_text']}}</h4>
                <a class="c-number text-center text-md-start" href="tel:18334242700">
                    <h3 class="text-color">{{@$footer_ql['quick_links_cell_no']}}</h3>
                </a>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-2">
                <h3 class="f-links-heading">Quick Links</h3>
                <img class="h-line" src="{{asset('forntend/images/Heading-line.png')}}" alt="h-line"><br>

                @foreach($ql_data as $qlData)
                <a class="f-links" href="{{$qlData->href_link}}">{{$qlData->name}}</a><br>

                @endforeach



            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-2">
                <h3 class="f-links-heading">Categories</h3>
                <img class="h-line" src="{{asset('forntend/images/Heading-line.png')}}" alt="h-line"><br>

                 @foreach($categories as $category)
                <a class="f-links" href="{{url('tours',['type'=>$category->name])}}">{{$category->name}}</a><br>

                @endforeach

            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4  new-ltr">
                <h3 class="f-links-heading">Newsletter</h3>
                <img class="h-line" src="{{asset('forntend/images/Heading-line.png')}}" alt="h-line"><br>
                <p class="news-des">Come on Along With Heart of the North
                    Tours!</p>
                <form class="d-flex f-search" method="get" action="{{url('/newsletter')}}">
                    <input class="form-control me-2 fsearch-plceholder" type="search"
                        placeholder="Your email address" aria-label="Search">
                    <button class=" f-search-btn btn btn-outline-success f-search-btn"
                        type="submit">SUBSCRIBE</button>
                </form>
                <h3 class="f-links-heading">Follow Us</h3>
                <img class="h-line" src="{{asset('forntend/images/Heading-line.png')}}" alt="h-line">
                <div class="social-logo">
                    <a href="#"><img class="footer-social" src="{{asset('forntend/images/Footer-icons (1).png')}}" alt="f-icon"></a>
                    <a href="#"><img class="footer-social" src="{{asset('forntend/images/Footer-icons (2).png')}}" alt="f-icon"></a>
                    <a href="#"><img class="footer-social" src="{{asset('forntend/images/Footer-icons (3).png')}}" alt="f-icon"></a>
                    <a href="#"><img class="footer-social" src="{{asset('forntend/images/Footer-icons (4).png')}}" alt="f-icon"></a>
                </div>


            </div>

        </div>
    </div>
</div>

<div class="container f-logo-cont flex-wrap container-body px-3">
    <img class="brand-imgs" src="{{asset('forntend/images/Brands-logo (6).png')}}" alt="brand-logo">
    <a href="#" class="img-link"><img class="brand-imgs" src="{{asset('forntend/images/Brands-logo (5).png')}}" alt="brand-logo"></a>
    <a href="#" class="img-link"><img class="brand-imgs" src="{{asset('forntend/images/Brands-logo (4).png')}}" alt="brand-logo"></a>
    <a href="#" class="img-link"><img class="brand-imgs" src="{{asset('forntend/images/Brands-logo (3).png')}}" alt="brand-logo"></a>
    <a href="#" class="img-link"><img class="brand-imgs" src="{{asset('forntend/images/Brands-logo (2).png')}}" alt="brand-logo"></a>
    <a href="#" class="img-link"><img class="brand-imgs" src="{{asset('forntend/images/Brands-logo (1).png')}}" alt="brand-logo"></a>
</div>

<div class="content-container text-center text-md-start">
    <div class="container fb-container container-body px-3">
        {{-- <p class="footer-btext">© Copyright Heart of the North Tours. All Rights Reserved.</p>
        <p class="footer-btext">Designed & Developed by LEADconcept</p> --}}
        <p class="footer-btext">2024 © All rights reserved by Heartofthenorthtours Designed and Developed by LEADconcept</p>

    </div>
</div>
<!-- footer section end -->




<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="{{asset('forntend/index.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function(){
        setTimeout(function() {
                $("#successMessage").hide();
                $("#error_div").hide();
                $(".alert-danger").hide();
            }, 5000);
    });

</script>