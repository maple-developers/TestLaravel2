@include('layouts.header')

<body class="alt-menu sidebar-noneoverflow" onload="">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->
    <!-- BEGIN NAVBAR -->
    @include('layouts.navBar')


    <!-- END NAVBAR -->
    <!-- BEGIN MAIN CONTAINER -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <!-- BEGIN TOPBAR -->
        @include('layouts.topBar')

        <!-- END TOPBAR -->
        <!-- BEGIN CONTENT PART -->
        <div id="content" class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="page-title">
                        <h3>@yield('page-title')</h3>
                    </div>
                </div>
                <div class="row layout-top-spacing">
                    @yield('main_content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    @yield('java-script-section')
    @yield('modals')
</body>

</html>
