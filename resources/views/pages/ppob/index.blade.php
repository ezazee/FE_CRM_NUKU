<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Parameter PPOB | NusantaraKu Dashboard Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

        @include('master.master-css')
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Topbar Start ========== -->
            @include('master.topbar')
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('master.sidebar')
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Parameter PPOB</h4>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-xl-4">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="card cta-box bg-danger text-white">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-100 overflow-hidden">
                                                            <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i></h2>
                                                            <h3 class="m-0 fw-normal cta-box-title">PPOB Listrik (PLN)</h3>
                                                        </div>
                                                        <img class="ms-3" src="assets/images/svg/email-campaign.svg" width="120" alt="Generic placeholder image">
                                                        </div>
                                                    </div>
                                                    <!-- end card-body -->
                                                </div>

                                                <div class="card cta-box bg-danger text-white">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="w-100 overflow-hidden">
                                                            <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i></h2>
                                                            <h3 class="m-0 fw-normal cta-box-title">PPOB Listrik (PLN)</h3>
                                                        </div>
                                            <img class="ms-3" src="assets/images/svg/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card cta-box bg-danger text-white">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="w-100 overflow-hidden">
                                                <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i></h2>
                                                <h3 class="m-0 fw-normal cta-box-title">PPOB Listrik (PLN)</h3>
                                            </div>
                                            <img class="ms-3" src="assets/images/svg/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                            </div> <!-- end col-->
                        </div>

                           <div class="row">
                            <div class="col-xl-4">
                                <div class="card cta-box bg-danger text-white">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="w-100 overflow-hidden">
                                                <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i></h2>
                                                <h3 class="m-0 fw-normal cta-box-title">PPOB Listrik (PLN)</h3>
                                            </div>
                                            <img class="ms-3" src="assets/images/svg/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                            </div> <!-- end col-->
                        </div>




             @include('master.script')
             

    </body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 04:00:53 GMT -->
</html>