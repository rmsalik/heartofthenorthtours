<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
           
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                        </div>
                        @foreach ($errors->all() as $error)
                        <div class="row " id="error_div">
                            <div class="col-12 ">
                                <div class="alert alert-danger">{{ $error }}</div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Content Row -->
                        @yield('content')
                        

                        

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                <div class="loader-sec">
                    <img class="loader-image" src="{{asset('forntend/images/loader.png')}}" alt="">
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>&copy; Copyright <?php echo date('Y')?> LEADconcept. All rights reserved </span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> --}}

    @include('layouts.scripts')
    <script>


       

        
        function hideLoader() {
            document.querySelector('.loader-sec').style.display = 'none';
        }

        setTimeout(hideLoader, 2000);
        
        
        $(function(){
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();

            var minDate= year + '-' + month + '-' + day;
            // disable past to enter
            $('#start_date').attr('min', minDate);
            $('#end_date').attr('min', minDate);
        });


        $(document).ready(function(){
            var gl_type = $('#slide_type').find(":selected").val();



            $("#is_featured_box").on("click",function(){
                var featuredTour = $(this).is(":checked");
                if(featuredTour==true){
                    $("#is_featured").val(1);
                }else{
                    $("#is_featured").val(0);
                }
            });

            //  Tables
            @if(Request::segment(1)!="home")
            $('#tours').DataTable({
                order: false
            });
            $('#categories').DataTable({
                order: false,
            });
            $('#Flayers').DataTable({
                order: false
            });
            $('#gallery').DataTable({
                order: false
            });
            $('#quick_links').DataTable({
                order: false
            });
            @endif


            setTimeout(function() {
                $("#successMessage").hide();
                $("#error_div").hide();
                $(".alert-danger").hide();
            }, 5000);
        });


        
    </script>
</body>

</html>
