<header class="header_area">
    <div id="header_navbar" class="header_navbar">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img id="logo" src="assets/images/logo/logo.svg" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                                        aria-expanded="false" aria-label="Toggle navigation" href="javascript:void(0)">Category
                                        <div class="sub-nav-toggler">
                                            <span></span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu collapse" id="sub-nav">
                                        <li><a href="{{route('client-categorie')}}">Category List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <ul class="header-btn d-md-flex">
                            <li>
                                <a href="#" class="main-btn account-btn">
                                    <span class="d-md-none"><i class="lni lni-user"></i></span>
                                    <span class="d-none d-md-block">My Account</span>
                                </a>
                                <ul class="dropdown-nav">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="javascript:void(0)">Sign Out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="post-ad.html" class="main-btn btn-hover d-none d-md-block">Post An Ad</a>
                            </li>
                        </ul>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->
</header>