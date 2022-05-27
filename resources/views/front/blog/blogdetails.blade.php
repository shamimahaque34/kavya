@extends('front.master')
@section('title')
Blog Details
@endsection
@section('body')
<section class="single-layout">
    <div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        <div class="blog-img-main">
            <img src="{{ asset($blog->image) }}" alt="Blog Image">
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-10">
                <div class="blog-content-wrap">
                    <div class="blog-title-wrap">
                        <div class="author-date">
                            <a class="author" href="javascript:void(0)">
                                <img src="{{ asset($blog->author_image) }}" alt="Author" class="rounded-circle">
                                <span>{{ $blog->author }}</span>
                            </a>
                        </div>
                        <ul class="category-tag-list mb-0">
                            <li class="category-tag-name">
                                <a href="{{ route('category', ['id' => $blog->category->id]) }}">{{ $blog->category->name }}</a>
                            </li>
                        </ul>
                        <h1 class="title-font">{{ $blog->title }}</h1>
                    </div>

                    <div class="blog-desc">
                        <p>
                            {{ $blog->description }}
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="comment-section">

                <div class="all-response">
                  View all comments
                  {{-- <a class="btn view-all-btn" data-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    
                  </a> --}}
                </div>
                {{-- <div class="collapse" id="collapseExample"> --}}
                  <div class="card comment-card">
                    <div class="card-body">
                      @foreach($blog->comments as $comment)
                      <div class="author-date">
                        <div class="author">
                          <img src="https://www.pngkit.com/png/full/302-3022217_roger-berry-avatar-placeholder.png" alt="" class="rounded-circle" />
                        </div>
                        <div class="inner-author-date">
                          <div class="author">
                            <span class="">{{ $comment->name}}</span>
                          </div>
                          <div class="date"><span>{{ \Carbon\Carbon::parse($comment->created_at)->format('d M Y')}}</span></div>
                        </div>
                      </div>
                      <div class="comment-text mt-2">
                        <p>{{ $comment->comment}}</p>
                      </div>
                      @endforeach
                    </div>


                 </div> 
                {{-- </div> --}}
                
                
                <form class="comment-form" action="{{ route('comment-submit') }}" method="POST" >
                    @csrf
                  <h5>Leave a comment</h5>
                  <div class="row">
                  <input type="hidden" name="blog_id" value="{{ $blog->id}}"/>
                  
                  <div class="col-12 col-md-6 mb-4">
                      <input type="text" name="name" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-12 mb-4">
                     <textarea rows="7" name="comment" class="form-control" placeholder="Comment"></textarea>
                    </div>
                  </div>
                  <button class="btn btn-solid">Submit</button>
                </form>
              </div>
              
</section>


@endsection
