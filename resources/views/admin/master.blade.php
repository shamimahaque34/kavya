<!doctype html>
<html lang="en">
<head>
    @include('admin.includes.meta')
    <title>Dashboard | @yield('title')</title>
    @include('admin.includes.favicon')
    @include('admin.includes.style')
</head>
    <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
        <div id="layout-wrapper">
            @include('admin.includes.header')
            <div class="main-content">
                <div class="page-content">
                    @include('admin.includes.breadcrumb')
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            @include('admin.includes.card-title')
                            @yield('body')
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->
                @include('admin.includes.footer')
            </div>
        </div>
        @include('admin.includes.script')
        @if (Session::has('message'))
            <script>
                $(document).ready(function(){
                    toastr.success('{{ Session::get('message') }}');
                });
            </script>
        @endif
    </body>
</html>
