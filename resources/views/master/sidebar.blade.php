            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a href="/" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/nuku.png') }}" alt="logo" height="40">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/nuku-sm.png') }}" alt="small logo" height="40">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="/" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/nuku.png') }}" alt="dark logo" height="40">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/nuku-sm.png') }}" alt="small logo" height="40">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </button>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Menu</li>

                        <li class="side-nav-item">
                            <a href="/" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Overview (CRM) </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/mitra-kabupaten" class="side-nav-link">
                                <i class="uil-sitemap"></i>
                                <span> Mitra Kabupaten </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/role-akses" class="side-nav-link">
                                <i class="uil-user-check"></i>
                                <span> Role Akses </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/transaksi" class="side-nav-link">
                                <i class=" uil-analytics"></i>
                                <span> Transaksi </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Master Data </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/md-merchant">Mitra Merchant</a>
                                    </li>
                                    <li>
                                        <a href="/md-driver">Mitra Driver</a>
                                    </li>
                                    <li>
                                        <a href="/md-user">User Pengguna</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="/withdraw" class="side-nav-link">
                                <i class="uil-money-withdraw"></i>
                                <span> Withdraw </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/total-topup" class="side-nav-link">
                                <i class="uil-money-bill-stack"></i>
                                <span> Total Topup </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item mt-4">Parameter</li>

                        <li class="side-nav-item">
                            <a href="/biaya" class="side-nav-link">
                                <i class="uil-money-bill"></i>
                                <span> Biaya </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/promosi" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Promosi </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/produk-lokal" class="side-nav-link">
                                <i class="uil-shopping-trolley"></i>
                                <span> Produk Lokal </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/fitur" class="side-nav-link">
                                <i class="uil-apps"></i>
                                <span> Fitur Aplikasi </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/banner" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Banner </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/ppob" class="side-nav-link">
                                <i class="uil-signal-alt"></i>
                                <span> PPOB </span>
                            </a>
                        </li>


                        <li class="side-nav-title side-nav-item mt-4">Report</li>

                        <li class="side-nav-item">
                            <a href="/re-transaksi" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Transaksi </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Mitra </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/re-merchant">Mitra Merchant</a>
                                    </li>
                                    <li>
                                         <a href="/re-driver">Mitra Driver</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="/user-pengguna" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> User Pengguna </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/finance" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Finance </span>
                            </a>
                        </li>
                    <!--- End Sidemenu -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->