@include('backend.layouts.header')

    <!-- Page Wrapper -->
    <div id="wrapper">
       @include('backend.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               @include('backend.layouts.topbar')
               @include('backend.notification')

               @yield('main_content')
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('backend.layouts.footer')
