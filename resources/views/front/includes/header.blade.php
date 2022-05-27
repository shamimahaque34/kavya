<header>
    <!-- Top header -->

    <div class="top-header">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-3">
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="brand-name text-center">
                        <a href="{{route('/')}}">
                            <h1>Shamima</h1>
                            
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="search-wrapper">
                        <div class="search-icon">
                            <button class="open-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="sidebar-icon">
                            <button class="sidebar-btn"> <i class="fas fa-ellipsis-v"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Top header end -->
    <!-- Navbar  -->
    <div class="kavya-navbar" id="sticky-top">
        <div class="container">
            <nav class="nav-menu-wrapper">
          <span class="navbar-toggle" id="navbar-toggle">
            <i class="fas fa-bars"></i>
          </span>
                <div class="sticky-logo">
                    <a href="{{route('/')}}">
                        <p>Shamima</p>
                    </a>
                </div>
                <ul class="nav-menu ml-auto mr-auto" id="nav-menu-toggle">
                    <li class="nav-item"><a href="{{ route('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Categories<span class="arrow-icon"> <span
                                    class="left-bar"></span>
                  <span class="right-bar"></span></span>
                        </a>

                         <ul class="drop-menu">
                            <li class="drop-menu-item">
                           @foreach($categories as $category)
                            <a href="{{route('category',['id'=>$category->id])}}">{{ $category->name}}</a>
                            @endforeach()
                           
                        </li>
                             
                           
                        </ul>
                       
                    </li>
                    <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link">Blog</a></li>
                     <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                </ul>
                <div class="sticky-search">
                    <div class="search-wrapper">
                        <div class="search-icon">
                            <button class="open-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="sidebar-icon">
                            <button class="sidebar-btn"> <i class="fas fa-ellipsis-v"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar end -->

    <!-- search overlay -->
    <div id="search-overlay" class="search-section">
        <span class="closebtn"><i class="fas fa-times"></i></span>
        <div class="overlay-content">
            <form action="{{route('search')}}" method="GET">
                <input type="text" placeholder="Search here" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- search overlay end -->

    {{-- <!-- sticky sidebar -->
    <div class="sticky-sidebar">
        <div class="sticky-sidebar-content">
            <div class="close-sidebar ml-auto">
                <i class="fas fa-times"></i>
            </div>
           
            <h3>About the Author</h3>
           
            <div class="author-img">
                <img src="{{ asset($blog->author_image) ?? '' }}" alt="">
            </div>
            <div class="author-desc">
                <h5 class="mb-2">{{ $blog->author_name ?? ''}}</h5>
                <p>{{ $blog->author_description ?? ''}}</p>
            </div>
             --}}
           
        

            
        </div>
    {{-- </div> --}}
    <!-- sticky sidebar end -->

    {{-- <div class="body-overlay"></div> --}}
</header>
