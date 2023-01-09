<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CRM Mitra Kabupaten | NusantaraKu Dashboard Admin</title>
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
                                    <h4 class="page-title">Mtra Kabupaten / Kota</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                          <h4 class="header-title">Tabs Bordered Justified</h4>
                                        <p class="text-muted font-14 mb-3">
                                            The navigation item with a simple bottom border and justified</code>
                                        </p>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#list-akun" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">List Akun Role Akses</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#request" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Request Dari Lokal</span>
                                                        </a>
                                                    </li>
                                                </ul>
        
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="list-akun">
                                                       <div id="basic-datatable-preview">
                                                             <table id="basic-datatable" class="table table-striped dt-responsive nowrap ">
                                                                 <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Kode Transaksi</th>
                                                                        <th>Mitra Kota / Kabupaten</th>
                                                                        <th>Status</th>
                                                                        <th>Kode Pembayaran</th>
                                                                        <th>Status Pembayaran</th>
                                                                        <th>Total Order</th>
                                                                        <th>Metode Pembayaran</th>
                                                                        <th>Nama Driver</th>
                                                                        <th>Nama Pelanggan</th>
                                                                        <th>Tgl Order</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td> 1 </td>
                                                                        <td> XjcLYF </td>
                                                                        <td> Lamongan </td>
                                                                        <td> <h5><span class="badge badge-success-lighten">Diantar</span></h5> </td>
                                                                        <td >XjcLYFXjcLYFXjcLYF </td>
                                                                        <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                                        <td>Rp. 50.000</td>
                                                                        <td>Saldo</td>
                                                                        <td> Abang </td>
                                                                        <td>Reza</td>
                                                                        <td>2011/04/25</td>
                                                                    <td>
                                                                        <form action="#" >
                                                                            <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('anterin.details') }}">Detail</a>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>                       
                                                       </div>
                                                    </div>
                                                    <div class="tab-pane" id="request">
                                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                    </div>
                                                </div>                                          
                                            </div> <!-- end preview-->                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>

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