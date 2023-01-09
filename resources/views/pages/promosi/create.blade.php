<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title> Tambah Promosi | NusantaraKu Dashboard Admin</title>
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
                                    <h4 class="page-title">Tambah Promosi Diskon</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form Edit Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                               <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Isi Kolom Promosi</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, cum!
                                        </p>
                                        <div class="tab-content">
                                            <div class="tab-panel show active" id="bordered-justified-tabs-preview">
                                                <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#promosi-otomatis" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Promosi Otomatis</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#promosi-manual" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Promosi Manual</span>
                                                        </a>
                                                    </li>
                                                </ul>
        
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="promosi-otomatis">
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Nama Promosi</label>
                                                                <input required type="text" id="simpleinput" class="form-control" placeholder="Isi Nama Promosi">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-select" class="form-label">Target Promosi</label>
                                                                <select required class="form-select" id="example-select">
                                                                     <option selected>Pilih Target</option>
                                                                    <option value="1">User</option>
                                                                    <option value="2">Merchant</option>
                                                                    <option value="3">Driver</option>
                                                                </select>
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-select" class="form-label">Target Fitur Promosi</label>
                                                                <select required class="form-select" id="example-select">
                                                                     <option selected>Pilih Target Fitur</option>
                                                                    <option value="1">Fitur Anterin</option>
                                                                    <option value="2">Fitur Kirimin</option>
                                                                    <option value="3">Fitur Belanjain</option>
                                                                </select>
                                                            </div>

                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                
                                                           <div class="mb-3">
                                                               <label for="example-disable" class="form-label">Kode Unik Promosi</label>
                                                                <input type="text" class="form-control" id="example-disable" disabled="" value="IUSDGBksjfgsdkjg-askdjghAJSKF">
                                                                <span class="help-block text-danger"><small>Kode Unik Ini Telah Diisi Otomatis</small></span>
                                                            </div>
                                                            
                                                             <div class="mb-3">
                                                                <label for="example-select" class="form-label">Target Daerah Promosi</label>
                                                                <select required class="form-select" id="example-select">
                                                                     <option selected>Semua Daerah</option>
                                                                    <option value="1">Lamongan</option>
                                                                    <option value="2">Bitung</option>
                                                                    <option value="3">Madiun</option>
                                                                    <option value="4">Garut</option>
                                                                    <option value="5">Madiun</option>
                                                                    <option value="6">Yogyakarta</option>
                                                                    <option value="7">Padang</option>
                                                                    <option value="8">Malang</option>
                                                                    <option value="9">Surabaya</option>
                                                                    <option value="10">Makasar</option>
                                                                </select>
                                                            </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Tanggal Berlaku Promosi</label>
                                                            <input required type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                                        </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
                                                </div>
                                               <button type="button" class="btn btn-success">Tambah Promosi</button>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                                    </div>
                                                    <div class="tab-pane" id="promosi-manual">
                                                       <div class="row">
                                                    <div class="col-lg-6">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Nama Promosi</label>
                                                                <input required type="text" id="simpleinput" class="form-control" placeholder="Isi Nama Promosi">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-select" class="form-label">Target Promosi</label>
                                                                <select required class="form-select" id="example-select">
                                                                     <option selected>Pilih Target</option>
                                                                    <option value="1">User</option>
                                                                    <option value="2">Merchant</option>
                                                                    <option value="3">Driver</option>
                                                                </select>
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-select" class="form-label">Target Fitur Promosi</label>
                                                                <select required class="form-select" id="example-select">
                                                                     <option selected>Pilih Target Fitur</option>
                                                                    <option value="1">Fitur Anterin</option>
                                                                    <option value="2">Fitur Kirimin</option>
                                                                    <option value="3">Fitur Belanjain</option>
                                                                </select>
                                                            </div>

                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                
                                                           <div class="mb-3">
                                                                <label for="example-helping" class="form-label">Kode Unik Promosi</label>
                                                                <input required type="text" id="example-helping" class="form-control uppercase" placeholder="Isi Kode Unik Promosi">
                                                                <span class="help-block text-danger"><small>Kode Unik Harus Capslock Semua ya !!</small></span>
                                                            </div>
                                                            
                                                             <div class="mb-3">
                                                                <label for="example-select" class="form-label">Target Daerah Promosi</label>
                                                                <select required class="form-select" id="example-select">
                                                                     <option selected>Semua Daerah</option>
                                                                    <option value="1">Lamongan</option>
                                                                    <option value="2">Bitung</option>
                                                                    <option value="3">Madiun</option>
                                                                    <option value="4">Garut</option>
                                                                    <option value="5">Madiun</option>
                                                                    <option value="6">Yogyakarta</option>
                                                                    <option value="7">Padang</option>
                                                                    <option value="8">Malang</option>
                                                                    <option value="9">Surabaya</option>
                                                                    <option value="10">Makasar</option>
                                                                </select>
                                                            </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Tanggal Berlaku Promosi</label>
                                                            <input required type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                                        </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
                                                </div>
                                               <button type="button" class="btn btn-success">Tambah Promosi</button>
                                                <!-- end row-->             
                                                    </div>
                                                </div>                                          
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div><!-- end row -->

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