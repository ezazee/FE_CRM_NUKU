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
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                        <ul class="nav nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
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
                                            </li>
                                        </ul> <!-- end nav-->
                                         <div class="d-flex justify-content-start mb-3">
                                                 <a href="{{ route('promosi.create') }}" type="button" class="btn btn-success waves-effect btn-label waves-light"><i class="mdi mdi-plus label-icon"></i>Tambah Promo</a>
                                                 
                                                 </div>
                                        <div class="tab-content" style="overflow: scroll;">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Promosi</th>
                                                            <th>Code Promo</th>
                                                            <th>Daerah Promo</th>
                                                            <th>Tgl Berlaku Promo</th>
                                                            <th>Status Promo</th>
                                                            <th>Target Fitur Promosi</th>
                                                            <th>Target Promosi</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> DISKONINAJA </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 2 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 3 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Bitung </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-danger-lighten">Tidak Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 4 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-danger-lighten">Tidak Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 5 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 6 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-danger-lighten">Tidak Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 7 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 8 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 9 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 10 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 11 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 12 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 13 </td>
                                                            <td> Diskon Ongkir 50% </td>
                                                            <td> askfjshdfksjdhfsjdnf </td>
                                                            <td> Lamongan </td>
                                                            <td>12/23/2022 - 12/31/2022</td>
                                                            <td><h5><span class="badge badge-success-lighten">Aktif</span></h5></td>
                                                            <td> Fitur Anterin </td>
                                                            <td> User </td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('promosi.edit') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i>Edit</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="mdi mdi-alert-circle label-icon"></i>Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->

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