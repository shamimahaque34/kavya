@extends('admin.master')
@section('title')
Manage Comment
@endsection
@section('page-name')
Manage Comment Page
@endsection
@section('card-title')
Manage Comment
@endsection
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage Comment</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Blog</th>
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Approve</th>
                            <th>Created At</th>
                             <th>Take Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('blog', ['id' => $comment->blog->id]) }}">{{ $comment->blog->title}}</a></td>
                            <td>{{ $comment->name}}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>
                                <form action="{{ route('comment-approve') }}" method="POST">
                                    @csrf
                                    <input {{ $comment->approve == 1 ? "checked" : '' }} type="checkbox" name="approve" />
                                    <input type="hidden" name="comment_id" value="{{ $comment->id}}"/>
                                    <input class=" btn btn-primary" type="submit" value="Done"/>
                                </form>
                            </td>
                            <td>{{ $comment->created_at->diffForHumans() }}</td>
                            <td>
                                
                                <a href="{{ route('delete-comment', ['id' => $comment->id]) }}" onclick="return confirm('Delete It?')" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="mdi mdi-trash-can"></i>
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
