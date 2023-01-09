<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title> Detail Transaksi | NusantaraKu Dashboard Admin</title>
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
                                    <h4 class="page-title">Detail Transaksi</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form Edit Table Data Kabupaten / Kota -->
                         <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 col-sm-11">
        
                                <div class="text-center">
                                    <p> <strong> Kode Transaksi </strong></p>
                                    <h1 class="text-danger mb-3">XjcLYF</h1>
                                    <p>Type Order</p>
                                    <h4> Belanjain </h4>
                                </div>
                                <div class="horizontal-steps mt-4 mb-4 pb-3" id="tooltip-container">
                                    <div class="horizontal-steps-content">
                                        <div class="step-item">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="20/09/2022 09:24 PM">Order Masuk</span>
                                        </div>
                                        <div class="step-item current">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="20/09/2022 10:24 PM">Pesanan Sedang Diantar</span>
                                        </div>   
                                        <div class="step-item">
                                            <span> Pesanan Sudah Sampai </span>
                                        </div>
                                    </div>
        
                                    <div class="process-line" style="width: 50%;"></div>
                                </div>
                                 <div class="text-center pb-5">
                                    <p> <strong> Status Orderan </strong></p>
                                    <h1 class="text-danger mb-3">Progress</h1>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->   

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Informasi Customer</h4>
                                       <p class="mb-2"><span class="fw-bold me-2">Nama Customer : </span> Reza Nama Panjang Nya </p>
                                       <p class="mb-2"><span class="fw-bold me-2">Alamat Tujuan : </span>  Jln. nin Aja dulu lah ya 👌 </p>
                                       <p class="mb-2"><span class="fw-bold me-2">No Telp Customer : </span> +62814874236558 </p>
                                       <p class="mb-2"><span class="fw-bold me-2">Tanngal Pemesanan : </span> 20/09/2022 09:24 PM </p>
            
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Informasi Driver</h4>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="fw-bold me-2">Nama Driver : </span> Asep Bapa Abdi </p>
                                                 <p class="mb-2"><span class="fw-bold me-2">Titik Ambil Barang : </span> Jln. nin Aja dulu lah ya 👌  </p>
                                                <p class="mb-2"><span class="fw-bold me-2">Titik Antar Barang : </span> Jln. ini berakhir sudah 😔  </p>
                                                <p class="mb-2"><span class="fw-bold me-2">No Telp Driver : </span> +62814874236558 </p>
                                            </li>
                                        </ul>
            
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            
                             <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Informasi Pembayaran</h4>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="fw-bold me-2">Metode Pembayaran : </span> COD ( Cash On Delivery ) </p>
                                                <p class="mb-2"><span class="fw-bold me-2">Status Pembayaran : </span> Belum Dibayar </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">List Barang Yang Dibeli Dari Kode Transaksi : <span class="text-danger"> #XjcLYF </span></h4>
            
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Telur 1Kg</td>
                                                    <td>1</td>
                                                    <td>Rp. 50.000</td>
                                                    <td>Rp. 50.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Terigu 1Kg</td>
                                                    <td>2</td>
                                                    <td>Rp. 15.000</td>
                                                    <td>Rp. 30.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Minyak 1Kg</td>
                                                    <td>1</td>
                                                    <td>Rp. 30.000</td>
                                                    <td>Rp. 30.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Daging Sapi Wahyu 3Kg</td>
                                                    <td>2</td>
                                                    <td>Rp. 175.000</td>
                                                    <td>Rp. 350.000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
            
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Informasi Merchant</h4>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="fw-bold me-2">Nama Merchant : </span> Toko Reza Mentari </p>
                                                <p class="mb-2"><span class="fw-bold me-2">Nama Pemilik : </span> Reza </p>
                                                <p class="mb-2"><span class="fw-bold me-2">Alamat Merchant Pemilik : </span> Jln. Thamrin No 205 </p>
                                                <p class="mb-2"><span class="fw-bold me-2">No Telp Merchant : </span> +62814874236558 </p>
                                            </li>
                                        </ul>
            
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            
        
                          <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Detail Pembayaran</h4>
            
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>Deksripsi Pembayaran</th>
                                                    <th>Harga</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Biaya Layanan :</td>
                                                    <td>Rp. 9500</td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Imbalan :</td>
                                                    <td>Rp. 2000</td>
                                                </tr>
                                                <tr>
                                                    <td>Diskon:</td>
                                                    <td>Rp. 0</td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Penanganan</td>
                                                    <td>Rp. 0</td>
                                                </tr>
                                                <tr>
                                                    <th>Total :</th>
                                                    <th>Rp. 239475</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                        </div>
                                    </div>
                                 </div>
                        <!-- end row -->
                         <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Informasi Logistik</h4>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="fw-bold me-2">Nama Logistik : </span> Citra Van Titipan Kilat  </p>
                                                <p class="mb-2"><span class="fw-bold me-2">Tipe Layanan : </span> Reguler </p>
                                            </li>
                                        </ul>
            
                                    </div>
                                </div>
                            </div> <!-- end col -->
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