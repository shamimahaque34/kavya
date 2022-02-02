<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.codevibrant.com/html/kavya/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 17:44:32 GMT -->
<!-- Added by HTTrack --><!-- /Added by HTTrack -->
@include('front.includes.meta')
<head>
    <!-- Required meta tags -->


    <!-- Favicon -->
    @include('front.includes.css')

    <title>@yield('title')</title>
</head>

<body>
<!-- Preloader -->
@include('front.includes.preloader')
<!-- Preloader end -->

<!-- Header -->

@include('front.includes.header')

<!-- header end -->

<!-- Banner section -->

<!-- Banner section end -->

<!-- Featured posts -->
@yield('body')

<!-- Recommended Posts -->

@include('front.includes.footer')
<!-- Footer section -->

<!-- Footer section end -->

<!-- Scroll to top -->

<!-- Scroll to top end -->

<!-- Javascript -->

</body>

@include('front.includes.script')
@if (Session::has('message'))
            <script>
                $(document).ready(function(){
                    toastr.success('{{ Session::get('message') }}');
                });
            </script>
        @endif
<!-- Mirrored from demo.codevibrant.com/html/kavya/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 17:45:01 GMT -->
</html>
