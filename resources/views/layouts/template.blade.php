<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bali Drive Tour</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="{{ URL::asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ URL::asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!--*******************
      Preloader start
  ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
      Preloader end
  ********************-->

    <!--**********************************
      Main wrapper start
  ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
        Nav header start
    ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
                <!-- <img class="logo-abbr" src="./images/logo.png" alt="">
        <img class="logo-compact" src="./images/logo-text.png" alt="">
        <img class="brand-title" src="./images/logo-text.png" alt=""> -->
                <h2 class="brand-title" style="color:#36c95f; font-weight:900">ADMIN</h2>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span
                        class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
        Nav header end
    ***********************************-->

        <!--**********************************
        Header start
    ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">Table Datatable</div>
                        </div>

                        <ul class="navbar-nav header-right">
                           
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                                    <img src="{{ URL::asset('/asset/umum/admin.jfif') }}" width="20" alt="" />
                                    <div class="header-info">
                                        <span>Hello, Admin</strong></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

        <!--**********************************
        Sidebar start
    ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    {{-- <li>
                        <a class="ai-icon" href="{{ Route('home_admin') }}" aria-expanded="false">
                            <i class="flaticon-381-television"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li> --}}
                    <li class="#">
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-network"></i>
                            <span class="nav-text">Table Content</span>
                        </a>
                        <ul aria-expanded="false">
                            {{-- @if (auth()->user()->userHasPermissions->where('component_name', 'intro1')->isNotEmpty())
                                <li><a href="{{ Route('list_intro1') }}">Intro1</a></li>
                            @endif
                            @if (auth()->user()->userHasPermissions->where('component_name', 'intro2')->isNotEmpty())
                                <li><a href="{{ route('list_intro2') }}">Intro2</a></li>
                            @endif --}}
                            @if (auth()->user()->userHasPermissions->where('component_name', 'pembangunan')->isNotEmpty())
                                <li><a href="{{ Route('list_pembangunan') }}">Hubungi</a></li>
                            @endif
                            @if (auth()->user()->userHasPermissions->where('component_name', 'sejarah')->isNotEmpty())
                                <li><a href="{{ Route('sejarah.index') }}">Booking</a></li>
                            @endif
                             @if (auth()->user()->userHasPermissions->where('component_name', 'wisata_hiburan')->isNotEmpty())
                                <li><a href="{{ Route('wisata.index') }}">Makanan</a></li>
                            @endif
                            {{--
                            @if (auth()->user()->userHasPermissions->where('component_name', 'pantai')->isNotEmpty())
                                <li><a href="{{ Route('pantai.index') }}">Pantai</a></li>
                            @endif
                            --}}
                            @if (auth()->user()->userHasPermissions->where('component_name', 'desa')->isNotEmpty())
                                <li><a href="{{ Route('desa.index') }}">Mobil</a></li>
                            @endif
                            {{-- 
                            @if (auth()->user()->userHasPermissions->where('component_name', 'pura')->isNotEmpty())
                                <li><a href="{{ Route('pura.index') }}">Pura</a></li>
                            @endif --}}
                            @if (auth()->user()->userHasPermissions->where('component_name', 'makanan_khas')->isNotEmpty())
                                <li><a href="{{ Route('food.index') }}">Paket Wisata</a></li>
                            @endif
                            {{-- @if (auth()->user()->userHasPermissions->where('component_name', 'gallery_video')->isNotEmpty())
                                <li><a href="{{ Route('video.index') }}">Gallery Video</a></li>
                            @endif
                            --}}
                            @if (auth()->user()->userHasPermissions->where('component_name', 'review')->isNotEmpty())
                                <li><a href="{{ Route('review.index') }}">Review</a></li>
                            @endif 
                        </ul>
                    {{-- </li>
                    <li class="#">
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Component</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ Route('list_banner') }}">Banner</a></li>
                            <li><a href="{{ route('list_intro2') }}">Navbar</a></li>
                            <li><a href="{{ Route('list_pembangunan') }}">Footer</a></li>
                        </ul>
                    </li>
                    @if (auth()->user()->userHasPermissions->where('component_name', 'user')->isNotEmpty())
                        <li>
                            <a class="ai-icon" href="{{ route('user.index') }}" aria-expanded="false">
                                <i class="flaticon-381-user"></i>
                                <span class="nav-text">User</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a class="ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">History</span>
                    </li> --}}
                </ul>
            </div>
        </div>
        <!--**********************************
      Sidebar end
  ***********************************-->

        @yield('content')

        <!--**********************************
        Footer start
    ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by Audrey Tilanov | 2022</p>
            </div>
        </div>
        <!--**********************************
        Footer end
    ***********************************-->
    </div>
    <!--**********************************
      Main wrapper end
  ***********************************-->

    <!--**********************************
        Scripts
  ***********************************-->
    <!-- Required vendors -->
    <script src="{{ URL::asset('/vendor/global/global.min.js') }}"></script>
    <script src="{{ URL::asset('/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('/js-backend/custom.min.js') }}"></script>
    <script src="{{ URL::asset('/js-backend/deznav-init.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ URL::asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/js-backend/plugins-init/datatables.init.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ URL::asset('/js-backend/plugins-init/jquery.validate-init.js') }}"></script>
</body>

</html>
