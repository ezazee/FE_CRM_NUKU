<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title> Edit Mitra Kabupaten | NusantaraKu Dashboard Admin</title>
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
                                    <h4 class="page-title">Edit Mtra Kabupaten / Kota</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form Edit Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="header-title">Edit Setting Profile Lokal Operator Kabupaten</h2>
                                        <p class="text-muted font-14">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem totam ea minima. Quidem aspernatur natus delectus provident error quibusdam obcaecati qui perspiciatis ipsam, cupiditate quae neque repudiandae ducimus reprehenderit doloribus.
                                        </p>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="mb-3">
                                                                <label for="example-disable" class="form-label">UUID Mitra Kabupaten</label>
                                                                <input type="text" class="form-control" id="example-disable" disabled="" value="916392d0-b730-4896-9bc5-294406d3f7fe">
                                                            </div>
                                                    <div class="col-lg-6">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Nama Aplikasi</label>
                                                                <input type="text" id="simpleinput" class="form-control" value="NikiLA">
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Alamat</label>
                                                                <textarea class="form-control" id="example-textarea" rows="5">Jl. Jaksa Agung Suprapto No.37, Tumenggungan, Kec,Lamongan, Kabupaten Lamongan, Jawa Timur 62214</textarea>
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-email" class="form-label">Email Dashboard Lokal Admin</label>
                                                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email" value="nyakubitung@mail.com">
                                                            </div>

                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                
                                                             <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Tentang Aplikasi</label>
                                                                <textarea class="form-control" id="example-textarea" rows="5">Niki Lamongan atau yang disingkat NikiLA adalah Super Aplikasi Belanja Online menggabungkan Marketplace dan Delivery Order yang mempunyai tujuan sebagai wadah jualan produk-produk kearifan lokal Kabupaten Lamongan dan untuk mendorong penjualan para pelaku UMKM Kabupaten Lamongan.</textarea>
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-color" class="form-label">Variable Warna Dashboard Lokal</label>
                                                                <input class="form-control" id="example-color" type="color" name="color" value="#1293E4">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password Dashboard Lokal Admin</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password" class="form-control" placeholder="Enter your password" value="bitung123">
                                                                    <div class="input-group-text" data-password="false">
                                                                        <span class="password-eye"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
                                                </div>
                                               <button type="button" class="btn btn-success">Simpan Perubahan</button>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->



                         <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="header-title">Edit Setting Profile Lokal Operator Kabupaten</h2>
                                        <p class="text-muted font-14">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem totam ea minima. Quidem aspernatur natus delectus provident error quibusdam obcaecati qui perspiciatis ipsam, cupiditate quae neque repudiandae ducimus reprehenderit doloribus.
                                        </p>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#umum-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Umum</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#parameter-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Parameter Biaya</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#kontak-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Kontak</span>
                                                        </a>
                                                    </li>
                                                </ul>
        
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="umum-b2">
                                                        <!-- File Upload -->
                                                            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                                data-upload-preview-template="#uploadPreviewTemplate">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" multiple />
                                                                </div>

                                                                    <div class="dz-message needsclick">
                                                                        <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                                        <h3>Drop File Foto / Klik Untuk Search Item Gambar</h3>
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
                                                                    <!-- Button Save -->
                                                                    <button type="button" class="btn btn-success">Simpan Perubahan</button>

                                                    </div>

                                                    
                                                    <div class="tab-pane" id="parameter-b2">
                                                         <div class="row">
                                                            <div class="card-body">
                                                                <div class="col-lg-6">
                                                                    <h2 class="header-title">Edit Nama Kategori</h2>
                                                                    <br>
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nama Kategori</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Parameter Biaya">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Deskripsi Kategori</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Deskripsi Kategori Parameter Biaya">
                                                                        </div>

                                                                    </form>
                                                                </div> <!-- end col -->
                                                            </div>

                                                            <div class="card-body">
                                                                <div class="col-lg-6">
                                                                    <h2 class="header-title">Edit Parameter Biaya Aplikasi</h2>
                                                                    <br>
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nama Parameter</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Parameter Biaya Aplikasi">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Deskripsi Parameter</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Deskripsi Kategori Parameter Biaya Aplikasi">
                                                                        </div>

                                                                          <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nilai Biaya</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Rp. 2000">
                                                                        </div>

                                                                    </form>
                                                                </div> <!-- end col -->
                                                            </div>

                                                             <div class="card-body">
                                                                <div class="col-lg-6">
                                                                    <h2 class="header-title">Edit Parameter Biaya Driver</h2>
                                                                    <br>
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nama Parameter</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Parameter Biaya Driver">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Deskripsi Parameter</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Deskripsi Kategori Parameter Biaya Driver">
                                                                        </div>

                                                                          <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nilai Biaya</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Rp. 2000">
                                                                        </div>

                                                                    </form>
                                                                </div> <!-- end col -->
                                                            </div>


                                                </div>
                                               <button type="button" class="btn btn-success">Simpan Perubahan</button>
                                                    </div>



                                                    <div class="tab-pane" id="kontak-b2">
                                                        <div class="card-body">
                                                                <div class="col-lg-6">
                                                                    <h2 class="header-title">Edit Alamat</h2>
                                                                    <br>
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nama Kategori</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Alamat">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="example-textarea" class="form-label">Tentang Aplikasi</label>
                                                                            <textarea class="form-control" id="example-textarea" rows="3">Jl. Jaksa Agung Suprapto No.37, Tumenggungan, Kec,Lamongan, Kabupaten Lamongan, Jawa Timur 62214</textarea>
                                                                         </div>
                                                                    </form>
                                                                </div> <!-- end col -->
                                                            </div>


                                                            <div class="card-body">
                                                                <div class="col-lg-6">
                                                                    <h2 class="header-title">Edit Nomor Telfon</h2>
                                                                    <br>
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nama Kategori</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Nomor Telfon">
                                                                        </div>

                                                                       <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nomor</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="+6281322112286">
                                                                        </div>
                                                                    </form>
                                                                </div> <!-- end col -->
                                                            </div>


                                                            <div class="card-body">
                                                                <div class="col-lg-6">
                                                                    <h2 class="header-title">Edit Nomor Whatsapp</h2>
                                                                    <br>
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nama Kategori</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Nomor Whatsapp">
                                                                        </div>

                                                                       <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nomor</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="+6281322112286">
                                                                        </div>
                                                                    </form>
                                                                </div> <!-- end col -->
                                                            </div>

                                                            
                                                              <div class="card-body">
                                                                <div class="col-lg-6">
                                                                    <h2 class="header-title">Edit Email Kontak</h2>
                                                                    <br>
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nama Kategori</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="Nomor Email Kontak">
                                                                        </div>

                                                                       <div class="mb-3">
                                                                            <label for="simpleinput" class="form-label">Nomor</label>
                                                                            <input type="text" id="simpleinput" class="form-control" value="nikilaid@gmail.com">
                                                                        </div>
                                                                    </form>
                                                                </div> <!-- end col -->
                                                            </div>
                                                    </div>
                                                </div>                                          
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