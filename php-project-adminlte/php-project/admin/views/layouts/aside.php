 <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="<?php echo BASE_URL_ADMIN; ?>index.html" class="brand-link">
                    <!--begin::Brand Image-->
                    <img
                        src="<?php echo BASE_URL_ADMIN; ?>assets/img/AdminLTELogo.png"
                        alt="AdminLTE Logo"
                        class="brand-image opacity-75 shadow" />
                    <!--end::Brand Image-->
                    <!--begin::Brand Text-->
                    <span class="brand-text fw-light">AdminLTE 4</span>
                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!-- Docs CTA -->
                    <div class="px-3 pb-2">
                        <a
                            href="<?php echo BASE_URL_ADMIN; ?>docs/introduction.html"
                            class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-book" aria-hidden="true"></i>
                            View documentation
                        </a>
                    </div>

                    <!--begin::Sidebar Menu-->
                    <ul
                        class="nav sidebar-menu flex-column"
                        data-lte-toggle="treeview"
                        role="navigation"
                        aria-label="Main navigation"
                        data-accordion="false"
                        id="navigation">
                        <li class="nav-item">
                            <a href="index" class="nav-link">
                                <i class="fa-regular fa-house"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <?php if($_SESSION['role_id'] != 3 ) : ?>
                        <li class="nav-item">
                            <a href="pos" class="nav-link">
                                <i class="fa-brands fa-wpforms"></i>
                                <p>
                                    POS
                                </p>
                            </a>
                        </li>
                        <?php endif ?>
                        <li class="nav-item">
                            <a href="products" class="nav-link">
                                <i class="nav-icon bi bi-table"></i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table" class="nav-link">
                                <i class="fa-solid fa-box-archive"></i>
                                <p>
                                    Orders
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Order Status
                                    
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Payment Methods</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="users" class="nav-link">
                                <i class="nav-icon bi bi-box-seam-fill"></i>
                                <p>
                                    Users
                                
                                </p>
                            </a>
                        </li>

                        <li class="nav-item menu-open">
                            <a href="form" class="nav-link active">
                                <i class="nav-icon bi bi-pencil-square"></i>
                                <p>
                                    Forms
                                </p>
                            </a>
                        </li>
                       
                    </ul>
                    <!--end::Sidebar Menu-->
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->