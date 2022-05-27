@extends('front.master')

@section('title')
  Shamima|Home
@endsection

@section('body')
    <section class="recommended-posts">
        <div class="container">
            <div class="section-title">
            <h3>Latest Blogs</h3>
            </div>
            <div class="more-content-grid ">
                <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{ route('blog', ['id' => $blog->id]) }}">
                                <img src="{{ asset($blog->image) }}" class="card-img-top" alt="" />
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="{{ route('category', ['id' => $blog->category->id]) }}">{{ $blog->category->name ?? ''}}</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="{{ route('blog', ['id' => $blog->id]) }}">
                                    {{ Str::limit($blog->title, 26, '...') }} </a>
                                </h5>

                                <div class="blog-desc">
                                <p>
                                    {{ Str::limit($blog->description, 200, '...') }}
                                </p>
                            </div>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="{{ asset($blog->author_image) }}" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">{{ $blog->author }}</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y')}}</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                {{$blogs->links('front.includes.pagination')}} 
            </div>
        </div>
    </section>
    <!-- Recommended posts end -->

    <!-- Instagram Posts -->
    
    <!-- Instagram posts end -->

    <div id="stop" class="scroll-to-top">
        <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
    </div>
@endsection
