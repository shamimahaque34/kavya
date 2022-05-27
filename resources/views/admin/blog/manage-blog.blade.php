@extends('admin.master')
@section('title')
Manage Blog
@endsection
@section('page-name')
Manage Blog Page
@endsection
@section('card-title')
Manage Blog
@endsection
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage Blog</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Category Name</th>
                            <th>Category Id</th>
                            <th>Blog Id</th>
                            <th>Blog Title</th>
                            <th>Blog Description</th>
                            <th>Author Image</th>
                            <th>Author Name</th>
                            <th>Author Description</th>
                            <th>Blog Image</th>
                            <th>Status</th>
                            <th>Take Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->category->name ?? '' }}</td>
                            <td>{{ $blog->category->id ?? '' }}</td>
                            <td>{{ $blog->id }}</td>
                            <td>{{ Str::limit($blog->title, 5) }}</td>
                            <td>{{ Str::limit($blog->description, 10) }}</td>
                            <td>
                                <img src="{{ asset($blog->author_image) }}" alt="Author Image" style="height: 50px; width:50px; border-radius:50%;">
                            </td>
                            <td>{{ $blog->author }}</td>
                            <td>{{ Str::limit($blog->author_description, 10) }}</td>
                            <td>
                                <img src="{{ asset($blog->image)}}" alt="Blog Image" style="height: 100px; width:100px; object-fit:cover;">
                            </td>
                            <td>{{ $blog->status == 1 ? 'Approved' : 'Disapproved' }}</td>
                                    <td><a class="btn btn-info btn-sm" title="View Blog Detail"
                                           href="{{ route('blog-detail', ['id'=>$blog->id]) }} "><i
                                                class="fa fa-book"></i></a>

                                        @if($blog->status == 1)
                                            <a href="{{route('update-status', ['id' => $blog->id])}}"
                                               class="btn btn-info btn-sm">
                                                <i class="fas fa-arrow-alt-circle-up"></i>
                                            </a>
                                        @else
                                            <a href="{{route('update-status', ['id' => $blog->id])}}"
                                               class="btn btn-warning btn-sm">
                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                            </a>
                                        @endif
                          
                                <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('delete-blog', ['id' => $blog->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Delete It?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
