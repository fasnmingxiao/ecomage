    <div class="u-header__section">
        <!-- Topbar -->
        @include('inc.header.topbar')
        <!-- End Topbar -->

        <!-- Logo-Search-header-icons -->
        <div class="py-2 py-xl-5 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        <!-- Nav -->
                        <nav
                            class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <!-- Logo -->
                            @include('inc.header.logo')
                            <!-- End Logo -->

                            <!-- Fullscreen Toggle Button -->
                            <button id="sidebarHeaderInvokerMenu" type="button"
                                class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0 target-of-invoker-has-unfolds">
                                <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                    <span class="u-hamburger__inner"></span>
                                </span>
                            </button>
                            <!-- End Fullscreen Toggle Button -->
                        </nav>
                        <!-- End Nav -->

                        <!-- ========== HEADER SIDEBAR ========== -->

                        <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Search Bar -->
                    <div class="col d-none d-xl-block">
                        <form class="js-focus-state">
                            <label class="sr-only" for="searchproduct">Search</label>
                            <div class="input-group">
                                <input type="email"
                                    class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary"
                                    name="email" id="searchproduct-item" placeholder="Search for Products"
                                    aria-label="Search for Products" aria-describedby="searchProduct1" required="">
                                <div class="input-group-append">
                                    <!-- Select -->
                                    <div
                                        class="dropdown bootstrap-select js-select dropdown-select custom-search-categories-select">
                                        <div class="dropdown-menu " role="combobox">
                                            <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner show"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Select -->
                                    <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill"
                                        type="button" id="searchProduct1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Search Bar -->
                    <!-- Header Icons -->
                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker"
                                        class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary">
                                        <span class="ec ec-search"></span>
                                    </a>
                                    <!-- Input -->
                                    <div id="searchClassic"
                                        class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2 u-unfold--css-animation u-unfold--hidden fadeOut"
                                        aria-labelledby="searchClassicInvoker"
                                        style="animation-duration: 300ms; left: 0px;">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i
                                                        class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                <li class="col d-none d-xl-block"><a href="../shop/compare.html" class="text-gray-90"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Compare"><i
                                            class="font-size-16 fa-solid fa-code-compare"></i></a>
                                </li>
                                <li class="col d-none d-xl-block"><a href="../shop/wishlist.html" class="text-gray-90"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Favorites"><i
                                            class="font-size-16 fa-solid fa-heart"></i></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo-Search-header-icons -->

        <!-- Vertical-and-secondary-menu -->
        @include('inc.header.vertialMenu')
        <!-- End Vertical-and-secondary-menu -->
    </div>
