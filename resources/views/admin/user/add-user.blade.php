@extends('admin.master')

@section('title')
    <title>Add | User</title>
@endsection

@section('body')
    <div class="page-wrapper">
        <div class="row py-3">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">
                        <h3 class="font-weight-bolder">Add User</h3>
                    </div>
                    <div class="card-body">
                        @if($message = Session::get('message'))
                            <h4 class="text-center text-success fw-bolder mb-4">{{ $message }}</h4>
                        @endif
                        <form class="mt-4" action="{{ route('new-user') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" type="text" required placeholder="user name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" type="email" required placeholder="user email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="password" name="password" type="password" required placeholder="password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
