@extends('admin.master')
@section('title')
Blog Detail
@endsection
@section('page-name')
 Blog Detail Page
@endsection
@section('card-title')
 Blog Detail
@endsection




@section('body')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom pb-5 " align="center">
                        <h4 class="card-title">Single Blog Info</h4>
                    </div>
                    <div class="card-body" align="center">
                        <div class="table-responsive">
                            <table  class="display table table-bordered table-hover" style="min-width:845px">
                               <tr>
                                    <th> Category Name</th>
                                    <td>{{$blog->category->name ?? ''}}</td>
                                </tr>

                                <tr>
                                    <th>Category Id</th>
                                    <td>{{$blog->category->id ?? '' }}</td>
                                </tr>

                                <tr>
                                    <th>Blog Id</th>
                                    <td>{{$blog->id}}</td>
                                </tr>

                                <tr>
                                    <th>Blog Title</th>
                                    <td>{{Str::limit($blog->title, 5)}}</td>
                                </tr>

                                <tr>
                                    <th>Blog Description</th>
                                    <td>{!! Str::limit($blog->description, 10) !!}</td>
                                </tr>

                                <tr>
                                    <th>Author Image</th>
                                    <td>
                                        <img src="{{ asset($blog->author_image) }}" alt="Author Image" style="height: 50px; width:50px; border-radius:50%;">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Author Name</th>
                                    <td>{{$blog->author }}</td>
                                </tr>

                                <tr>
                                    <th>Author Description</th>
                                    <td>{!!  Str::limit($blog->author_description, 10) !!}</td>
                                </tr>

                                <tr>
                                    <th>Blog Image</th>
                                    <td>
                                        <img src="{{asset( $blog->image) }}" alt="Blog Image" style="height: 100px; width:100px; object-fit:cover;">
                                    </td>
                                </tr>

                               

                                <tr>
                                    <th>Status</th>
                                    <td>{{ $blog->status == 1 ? 'Approved' : 'Disapproved' }}</td>
                                </tr>


                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection


