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
                        <a href="index-2.html">
                            <h1>Kavya</h1>
                            <span>Enter your tagline here</span>
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
                    <a href="index-2.html">
                        <p>Kavya</p>
                    </a>
                </div>
                <ul class="nav-menu ml-auto mr-auto" id="nav-menu-toggle">
                    <li class="nav-item"><a href="{{ route('/')}}" class="nav-link">হোম</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">ক্যাটাগরিস <span class="arrow-icon"> <span
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
                    <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link">ব্লগ</a></li>
                     <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">যোগাযোগ</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">লগইন</a></li>
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
            <form>
                <input type="text" placeholder="Search here" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- search overlay end -->

    <!-- sticky sidebar -->
    <div class="sticky-sidebar">
        <div class="sticky-sidebar-content">
            <div class="close-sidebar ml-auto">
                <i class="fas fa-times"></i>
            </div>
            <h3>About the Author</h3>

            <div class="author-img">
                <img src="{{ asset('/') }}assets/images/author.jpg" alt="">
            </div>
            <div class="author-desc">
                <h5 class="mb-2">Julie Ryan</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequuntur vel quo, quae aliquam esse
                    facere eveniet magnam rerum! Quo itaque ipsa a ipsum quaerat optio illo ducimus dolores in!</p>
            </div>
            <div class="circular-icons social-links">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="author-posts">
                <h3>Most viewed</h3>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('/') }}assets/images/time.jpg" class="card-img" alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">

                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Making time for travel</a>
                                </h5>
                                <div class="author-date">

                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('/') }}assets/images/alone.jpg" class="card-img" alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">It's okay to be alone sometimes</a>
                                </h5>
                                <div class="author-date">
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('/') }}assets/images/forest.jpg" class="card-img" alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">travel</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Conserve Forest</a>
                                </h5>
                                <div class="author-date">
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{ asset('/') }}assets/images/beach-sea.jpg" class="card-img" alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Beach is my favourite place</a>
                                </h5>
                                <div class="author-date">
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sticky sidebar end -->

    <div class="body-overlay"></div>
</header>
