@extends('admin.master')

@section('body')
    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white">
                            <h2>All Users</h2>
                        </div>
                        <div class="card-body">
                            @if($message = Session::get('message'))
                                <h4 class="text-center text-success fw-bolder mb-4">{{ $message }}</h4>
                            @endif
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                         <a href="{{ route('edit-user', ['id' => $user->id]) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                         <i class="mdi mdi-pencil"></i>
                                                         </a>
                                                         <a href="{{ route('delete-user', ['id' => $user->id]) }}" onclick="return confirm('Delete It?')" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
