<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title> Tambah Mitra Kabupaten | NusantaraKu Dashboard Admin</title>
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
                                    <h4 class="page-title">Tambah Mtra Kabupaten / Kota</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form Edit Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="header-title">Formulir Daftar Mitra / Kabupaten Baru</h2>
                                        <p class="text-muted font-14">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem totam ea minima. Quidem aspernatur natus delectus provident error quibusdam obcaecati qui perspiciatis ipsam, cupiditate quae neque repudiandae ducimus reprehenderit doloribus.
                                        </p>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Nama Aplikasi</label>
                                                                <input type="text" id="simpleinput" class="form-control" placeholder="Isi Nama Aplikasi">
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Alamat</label>
                                                                <textarea class="form-control" id="example-textarea" rows="2" placeholder="Isi Alamat disini"></textarea>
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-email" class="form-label">Email Dashboard Lokal Admin</label>
                                                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Isi Untuk Email Dashboard">
                                                            </div>

                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                
                                                             <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Tentang Aplikasi</label>
                                                                <textarea class="form-control" id="example-textarea" rows="2" placeholder="Isi Tentang"></textarea>
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-color" class="form-label">Variable Warna Dashboard Lokal</label>
                                                                <input class="form-control" id="example-color" type="color" name="color" value="#000">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password Dashboard Lokal Admin</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password" class="form-control" placeholder="Masukan Password">
                                                                    <div class="input-group-text" data-password="false">
                                                                        <span class="password-eye"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
                                                    <!-- File Upload -->
                                                            <label for="myAwesomeDropzone" class="form-label">Upload Logo</label>
                                                            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                                data-upload-preview-template="#uploadPreviewTemplate">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" multiple />
                                                                </div>

                                                                    <div class="dz-message needsclick">
                                                                        <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                                        <h3>Drop File Logo / Klik Untuk Search Item Gambar</h3>
                                                                        <span class="text-muted font-13">Made By <Strong>NusantaraKu</Strong></span>
                                                                    </div>
                                                                </form>

                                                                <!-- Preview -->
                                                                <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                                    <!-- file preview template -->
                                                                    <div class="d-none" id="uploadPreviewTemplate">
                                                                        <div class="card mt-1 mb-0 shadow-none border">
                                                                            <div class="p-2">
                                                                                <div class="row align-items-center">
                                                                                    <div class="col-auto">
                                                                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                                                    </div>
                                                                                    <div class="col ps-0">
                                                                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                                        <p class="mb-0" data-dz-size></p>
                                                                                    </div>
                                                                                    <div class="col-auto">
                                                                                        <!-- Button -->
                                                                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                                            <i class="ri-close-line"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                </div>
                                               <button type="button" class="btn btn-success">Tambah Mitra</button>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
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