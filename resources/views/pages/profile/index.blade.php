<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CRM NuKu Admin | NusantaraKu Dashboard Admin</title>
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
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0">
                                                    <div class="card-body text-center">
                                                        <i class="ri-bar-chart-2-line text-muted font-24"></i>
                                                        <h3><span>1502</span></h3>
                                                        <p class="text-muted font-15 mb-0">Transaksi</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-user-fill text-muted font-24"></i>
                                                        <h3><span>15552</span></h3>
                                                        <p class="text-muted font-15 mb-0">User Pengguna</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class=" ri-store-3-fill text-muted font-24"></i>
                                                        <h3><span>3241</span></h3>
                                                        <p class="text-muted font-15 mb-0">Toko / Merchant</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class=" ri-motorbike-fill text-muted font-24"></i>
                                                        <h3><span>4138</span></h3>
                                                        <p class="text-muted font-15 mb-0">Driver</p>
                                                    </div>
                                                </div>
                                            </div>

                                              <!-- <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-building-4-fill text-muted font-24"></i>
                                                        <h3><span>10</span></h3>
                                                        <p class="text-muted font-15 mb-0">Mitra Kabupaten</p>
                                                    </div>
                                                </div>
                                            </div> -->
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>

                        <div class="row">
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Revenue User</h6>
                                        <h4 class="mb-4 mt-2">Rp. 259.000.000</h4>
                                        <div id="spark1" class="apex-charts mb-3" data-colors="#f4516c"></div>


                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Revenue Mitra</h6>
                                        <h3 class="mb-4 mt-2">$6,254</h3>
                                        <div id="spark2" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">User Daftar</h6>
                                        <h3 class="mb-4 mt-2">324</h3>
                                        <div id="spark3" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                       <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Mitra Daftar</h6>
                                        <h3 class="mb-4 mt-2">$4,745.2</h3>
                                        <div id="spark4" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav float-end d-none d-lg-flex">
                                             <div>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                1Y
                                            </button>
                                        </div>
                                        </ul>
                                        <h4 class="header-title mb-3">Chart Transaksi</h4>

                                        <div dir="ltr">
                                            <div id="spline-area" class="apex-charts mt-5" data-colors="#E62129, #000"></div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>

                            <!-- Top Mtra Kabupaten -->
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title p-2 border-bottom bg-light">Top Mitra Kabupaten / Kota</h4>
                                <div class="table-responsive" style="overflow-y: scroll; height: 370px;">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kabupaten/Kota</th>
                                        <th>Total Transaksi / Bulan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bitung</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lamongan</td>
                                        <td>250</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Madiun</td>
                                        <td>590</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Garut</td>
                                        <td>1000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Jogjakarta</td>
                                        <td>1543</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Padang</td>
                                        <td>423</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Jakarta</td>
                                        <td>414</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Malang</td>
                                        <td>3434</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Surabaya</td>
                                        <td>4144</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Makasar</td>
                                        <td>4124</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
</div>
</div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="d-flex card-header justify-content-between align-items-center">
                                        <h4 class="header-title">Mitra Kabupaten NuKu di Indonesia</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div id="map" class="mt-3 mb-3" style="height: 300px">
                                                </div>
                                            </div>
                                            <div class="col-lg-4" dir="ltr" style="overflow-y: scroll; height: 370px;">
                                                <h4 class="header-title">Daerah Yang Telah MoU dengan NuKu</h4>
                                                 <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kabupaten/Kota</th>
                                        <th>Nama Aplikasi Daerah</th>
                                        <th>Nama Provinsi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bitung</td>
                                        <td>Nyaku Bitung</td>
                                        <td>Sulawesi Utara</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2</td>
                                        <td>Lamongan</td>
                                        <td>NikiLA</td>
                                        <td>Jawa Timur</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3</td>
                                        <td>Garut</td>
                                        <td>KitaGarut</td>
                                        <td>Jawa Barat</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Madiun</td>
                                        <td>Sistem Madiun</td>
                                        <td>Jawa Timur</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Yogyakarta</td>
                                        <td>Sistem Yogyakarta</td>
                                        <td>Yogyakarta</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Padang</td>
                                        <td>Sistem Padang</td>
                                        <td>Sumatera Barat</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Malang</td>
                                        <td>Sistem Malang</td>
                                        <td>Jawa Barat</td>
                                    </tr>

                                     <tr>
                                        <td>8</td>
                                        <td>Jakarta</td>
                                        <td>Sistem Jakarta</td>
                                        <td>Jakarta Raya</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Surabaya</td>
                                        <td>Sistem Surabaya</td>
                                        <td>Jawa Timur</td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Makasar</td>
                                        <td>Sistem Makasar</td>
                                        <td>Jawa Barat</td>
                                    </tr>

                                    </tbody>
                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                @include('master.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



             @include('master.script')
             

    </body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 04:00:53 GMT -->
</html>